<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProfileService
{
    public function getUserProfile($user)
    {
        return [
            'id' => $user->id,
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
            'email' => $user->email,
            'phone_number' => $user->phone_number,
            'profile_picture' => $user->profile_picture,
            'location' => $user->location,
            'emai;' => $user->email
        ];
    }

    public function updateUserProfile($user, $data)
    {
        if (isset($data['first_name'])) {
            $user->first_name = $data['first_name'];
        }
        if (isset($data['last_name'])) {
            $user->last_name = $data['last_name'];
        }
        if (isset($data['phone_number'])) {
            $user->phone_number = $data['phone_number'];
        }
        if (isset($data['location'])) {
            $user->location = $data['location'];
        }
        if (isset($data['email'])) {
            $user->email = $data['email'];
        }
        
        $user->save();

        return $user;
    }

    public function updatePassword($user, $currentPassword, $newPassword)
    {
        if (!Hash::check($currentPassword, $user->password)) {
            throw new \Exception('Current password is incorrect.');
        }

        if (strlen($newPassword) < 8) {
            throw new \Exception('The new password must be at least 8 characters.');
        }

        $user->password = Hash::make($newPassword);
        $user->save();
    }

    public function uploadProfilePicture($user, $file)
    {
        $path = $file->store('profile_pictures', 'public');
        $user->profile_picture = asset('storage/' . $path);
        $user->save();

        return $user->profile_picture;
    }
}
