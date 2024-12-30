<?php

namespace Database\Seeders;

use App\Models\Market;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MarketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Market::create([
            'name'=>'King over',
            'photo'=>'http://localhost:8000/storage/profile_pictures/GGtmSjXuFSxBJwyUsPRk1oUSEmeaNQMpqo7Tp5RP.jpg',
            'location'=>'damascus',
            'category_id'=>1,
        ]);
        Market::create([
            'name'=>'Action pizza',
            'photo'=>'http://localhost:8000/storage/profile_pictures/GGtmSjXuFSxBJwyUsPRk1oUSEmeaNQMpqo7Tp5RP.jpg',
            'location'=>'damascus',
            'category_id'=>1,
        ]);
        Market::create([
            'name'=>'Bufflay Burger',
            'photo'=>'http://localhost:8000/storage/profile_pictures/GGtmSjXuFSxBJwyUsPRk1oUSEmeaNQMpqo7Tp5RP.jpg',
            'location'=>'damascus',
            'category_id'=>1,
        ]);
        Market::create([
            'name'=>'Crispy way',
            'photo'=>'http://localhost:8000/storage/profile_pictures/GGtmSjXuFSxBJwyUsPRk1oUSEmeaNQMpqo7Tp5RP.jpg',
            'location'=>'damascus',
            'category_id'=>1,
        ]);
        Market::create([
            'name'=>'Beit al mukhtar',
            'photo'=>'http://localhost:8000/storage/profile_pictures/GGtmSjXuFSxBJwyUsPRk1oUSEmeaNQMpqo7Tp5RP.jpg',
            'location'=>'damascus',
            'category_id'=>1,
        ]);
        Market::create([
            'name'=>'Art Supplies',
            'photo'=>'http://localhost:8000/storage/profile_pictures/abw5hASAxbcfrdNgRvR7CxAtg8vCZDD4qLAfveEp.jpg',
            'location'=>'dubai',
            'category_id'=>2,
        ]);
        Market::create([
            'name'=>'school Supplies',
            'photo'=>'http://localhost:8000/storage/profile_pictures/abw5hASAxbcfrdNgRvR7CxAtg8vCZDD4qLAfveEp.jpg',
            'location'=>'dubai',
            'category_id'=>2,
        ]);
        Market::create([
            'name'=>'Types of books',
            'photo'=>'http://localhost:8000/storage/profile_pictures/abw5hASAxbcfrdNgRvR7CxAtg8vCZDD4qLAfveEp.jpg',
            'location'=>'dubai',
            'category_id'=>2,
        ]);
        Market::create([
            'name'=>'laptop accessories',
            'photo'=>'http://localhost:8000/storage/profile_pictures/abw5hASAxbcfrdNgRvR7CxAtg8vCZDD4qLAfveEp.jpg',
            'location'=>'dubai',
            'category_id'=>2,
        ]);
        Market::create([
            'name'=>'type of lighting',
            'photo'=>'http://localhost:8000/storage/profile_pictures/abw5hASAxbcfrdNgRvR7CxAtg8vCZDD4qLAfveEp.jpg',
            'location'=>'dubai',
            'category_id'=>2,
        ]);
        Market::create([
            'name'=>'Dior',
            'photo'=>'http://localhost:8000/storage/profile_pictures/YLlZtSwW2uKOmSH64vYt1rfsbFzkscBjEo5H3kUL.jpg',
            'location'=>'damascus',
            'category_id'=>3,
        ]);
        Market::create([
            'name'=>'Chanel',
            'photo'=>'http://localhost:8000/storage/profile_pictures/YLlZtSwW2uKOmSH64vYt1rfsbFzkscBjEo5H3kUL.jpg',
            'location'=>'homs',
            'category_id'=>3,
        ]);
        Market::create([
            'name'=>'Sheglam',
            'photo'=>'http://localhost:8000/storage/profile_pictures/YLlZtSwW2uKOmSH64vYt1rfsbFzkscBjEo5H3kUL.jpg',
            'location'=>'hama',
            'category_id'=>3,
        ]);
        Market::create([
            'name'=>'Benefit',
            'photo'=>'http://localhost:8000/storage/profile_pictures/YLlZtSwW2uKOmSH64vYt1rfsbFzkscBjEo5H3kUL.jpg',
            'location'=>'US',
            'category_id'=>3,
        ]);
        Market::create([
            'name'=>'Maybeline',
            'photo'=>'http://localhost:8000/storage/profile_pictures/YLlZtSwW2uKOmSH64vYt1rfsbFzkscBjEo5H3kUL.jpg',
            'location'=>'dubai',
            'category_id'=>3,
        ]);
        Market::create([
            'name'=>'Pandora',
            'photo'=>'http://localhost:8000/storage/profile_pictures/L1AqRTbO4yFPb2pneL92wohQm8xQ1nGTioEw94gV.jpg',
            'location'=>'damascus',
            'category_id'=>4,
        ]);
        Market::create([
            'name'=>'Swarovski',
            'photo'=>'http://localhost:8000/storage/profile_pictures/L1AqRTbO4yFPb2pneL92wohQm8xQ1nGTioEw94gV.jpg',
            'location'=>'damascus',
            'category_id'=>4,
        ]);
        Market::create([
            'name'=>'Fendi',
            'photo'=>'http://localhost:8000/storage/profile_pictures/L1AqRTbO4yFPb2pneL92wohQm8xQ1nGTioEw94gV.jpg',
            'location'=>'damascus',
            'category_id'=>4,
        ]);
        Market::create([
            'name'=>'Prada',
            'photo'=>'http://localhost:8000/storage/profile_pictures/L1AqRTbO4yFPb2pneL92wohQm8xQ1nGTioEw94gV.jpg',
            'location'=>'damascus',
            'category_id'=>4,
        ]);
        Market::create([
            'name'=>'Gucci',
            'photo'=>'http://localhost:8000/storage/profile_pictures/L1AqRTbO4yFPb2pneL92wohQm8xQ1nGTioEw94gV.jpg',
            'location'=>'damascus',
            'category_id'=>4,
        ]);

        Market::create([
            'name'=>'Canned Food',
            'photo'=>'http://localhost:8000/storage/profile_pictures/zHZ4qG1rhm0ir3WWq3q7P99YMRSssiyue048FILq.jpg',
            'location'=>'dubai',
            'category_id'=>5,
        ]);
        Market::create([
            'name'=>'type of bread',
            'photo'=>'http://localhost:8000/storage/profile_pictures/zHZ4qG1rhm0ir3WWq3q7P99YMRSssiyue048FILq.jpg',
            'location'=>'dubai',
            'category_id'=>5,
        ]);
        Market::create([
            'name'=>'type of chocolate',
            'photo'=>'http://localhost:8000/storage/profile_pictures/zHZ4qG1rhm0ir3WWq3q7P99YMRSssiyue048FILq.jpg',
            'location'=>'dubai',
            'category_id'=>5,
        ]);
        Market::create([
            'name'=>'type of chips',
            'photo'=>'http://localhost:8000/storage/profile_pictures/zHZ4qG1rhm0ir3WWq3q7P99YMRSssiyue048FILq.jpg',
            'location'=>'dubai',
            'category_id'=>5,
        ]);
        Market::create([
            'name'=>'type of drink',
            'photo'=>'http://localhost:8000/storage/profile_pictures/zHZ4qG1rhm0ir3WWq3q7P99YMRSssiyue048FILq.jpg',
            'location'=>'dubai',
            'category_id'=>5,
        ]);
    }
}
