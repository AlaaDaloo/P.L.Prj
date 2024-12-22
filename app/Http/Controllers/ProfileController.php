<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProfileService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    protected $profileService;

    public function __construct(ProfileService $profileService)
    {
        $this->profileService = $profileService;
    }

    public function getProfile()
{
    $user = Auth::user(); 
    $profile = $this->profileService->getUserProfile($user);

    return response()->json($profile);
}

    public function updateProfile(Request $request)
    {
        $user = $request->user();
        $data = $request->only(['first_name', 'last_name', 'phone_number', 'password', 'email', 'location']);

        $validator = Validator::make($data, [
            'first_name' => 'sometimes|string|max:255',
            'last_name' => 'sometimes|string|max:255',
            'phone_number' => 'sometimes|string|max:15|unique:users,phone_number,' .$user->id,
            'password' => 'sometimes|string|min:8',
            'location' => 'sometimes|string|max:255',
            'email' => 'sometimes|email|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $updatedUser = $this->profileService->updateUserProfile($user, $data);

        return response()->json(['message' => 'Profile updated successfully', 'user' => $updatedUser]);
    }

    public function uploadProfilePicture(Request $request)
    {
        $user = $request->user();

        $validator = Validator::make($request->all(), [
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $profilePicture = $this->profileService->uploadProfilePicture($user, $request->file('profile_picture'));

        return response()->json(['message' => 'Profile picture uploaded successfully', 'profile_picture' => $profilePicture]);
    }
}
