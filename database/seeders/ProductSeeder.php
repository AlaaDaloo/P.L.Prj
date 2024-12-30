<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //fast food -> markets -> products
        Product::create([
            'name' => 'Orginal Wings',
            'photo' => 'http://localhost:8000/storage/profile_pictures/GGtmSjXuFSxBJwyUsPRk1oUSEmeaNQMpqo7Tp5RP.jpg',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 1,
        ]);
        Product::create([
            'name' => 'Classic Burger',
            'photo' => 'http://localhost:8000/storage/profile_pictures/GGtmSjXuFSxBJwyUsPRk1oUSEmeaNQMpqo7Tp5RP.jpg',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 1,
        ]);
        Product::create([
            'name' => 'Chicken fries',
            'photo' => 'http://localhost:8000/storage/profile_pictures/GGtmSjXuFSxBJwyUsPRk1oUSEmeaNQMpqo7Tp5RP.jpg',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 1,
        ]);
        Product::create([
            'name' => 'Chili Cheese Nuggets',
            'photo' => 'http://localhost:8000/storage/profile_pictures/GGtmSjXuFSxBJwyUsPRk1oUSEmeaNQMpqo7Tp5RP.jpg',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 1,
        ]);
        Product::create([
            'name' => ' Cheese  burger',
            'photo' => 'http://localhost:8000/storage/profile_pictures/GGtmSjXuFSxBJwyUsPRk1oUSEmeaNQMpqo7Tp5RP.jpg',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 1,
        ]);
        Product::create([
            'name' => 'Four seasons pizza',
            'photo' => 'http://localhost:8000/storage/profile_pictures/GGtmSjXuFSxBJwyUsPRk1oUSEmeaNQMpqo7Tp5RP.jpg',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 2,
        ]);
        Product::create([
            'name' => 'Vegetable pizza',
            'photo' => 'http://localhost:8000/storage/profile_pictures/GGtmSjXuFSxBJwyUsPRk1oUSEmeaNQMpqo7Tp5RP.jpg',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 2,
        ]);
        Product::create([
            'name' => 'Margherita pizza',
            'photo' => 'http://localhost:8000/storage/profile_pictures/GGtmSjXuFSxBJwyUsPRk1oUSEmeaNQMpqo7Tp5RP.jpg',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 2,
        ]);
        Product::create([
            'name' => 'Chicken pizza',
            'photo' => 'http://localhost:8000/storage/profile_pictures/GGtmSjXuFSxBJwyUsPRk1oUSEmeaNQMpqo7Tp5RP.jpg',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 2,
        ]);
        Product::create([
            'name' => 'Pepperoni pizza',
            'photo' => 'http://localhost:8000/storage/profile_pictures/GGtmSjXuFSxBJwyUsPRk1oUSEmeaNQMpqo7Tp5RP.jpg',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 2,
        ]);
        Product::create([
            'name' => 'onion rings',
            'photo' => 'http://localhost:8000/storage/profile_pictures/GGtmSjXuFSxBJwyUsPRk1oUSEmeaNQMpqo7Tp5RP.jpg',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 3,
        ]);
        Product::create([
            'name' => 'Flat burger',
            'photo' => 'http://localhost:8000/storage/profile_pictures/GGtmSjXuFSxBJwyUsPRk1oUSEmeaNQMpqo7Tp5RP.jpg',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 3,
        ]);
        Product::create([
            'name' => 'Mushroom burger',
            'photo' => 'http://localhost:8000/storage/profile_pictures/GGtmSjXuFSxBJwyUsPRk1oUSEmeaNQMpqo7Tp5RP.jpg',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 3,
        ]);
        Product::create([
            'name' => 'Buffalo boneless',
            'photo' => 'http://localhost:8000/storage/profile_pictures/GGtmSjXuFSxBJwyUsPRk1oUSEmeaNQMpqo7Tp5RP.jpg',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 3,
        ]);
        Product::create([
            'name' => 'King starter',
            'photo' => 'http://localhost:8000/storage/profile_pictures/GGtmSjXuFSxBJwyUsPRk1oUSEmeaNQMpqo7Tp5RP.jpg',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 3,
        ]);
        Product::create([
            'name' => 'BBQ crispy burger ',
            'photo' => 'http://localhost:8000/storage/profile_pictures/GGtmSjXuFSxBJwyUsPRk1oUSEmeaNQMpqo7Tp5RP.jpg',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 4,
        ]);
        Product::create([
            'name' => 'Special Burger',
            'photo' => 'http://localhost:8000/storage/profile_pictures/GGtmSjXuFSxBJwyUsPRk1oUSEmeaNQMpqo7Tp5RP.jpg',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 4,
        ]);
        Product::create([
            'name' => 'Mozzarella fingers',
            'photo' => 'http://localhost:8000/storage/profile_pictures/GGtmSjXuFSxBJwyUsPRk1oUSEmeaNQMpqo7Tp5RP.jpg',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 4,
        ]);
        Product::create([
            'name' => 'Fried chicken',
            'photo' => 'http://localhost:8000/storage/profile_pictures/GGtmSjXuFSxBJwyUsPRk1oUSEmeaNQMpqo7Tp5RP.jpg',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 4,
        ]);
        Product::create([
            'name' => 'pasta salad',
            'photo' => 'http://localhost:8000/storage/profile_pictures/GGtmSjXuFSxBJwyUsPRk1oUSEmeaNQMpqo7Tp5RP.jpg',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 4,
        ]);
        Product::create([
            'name' => 'BBQ chicken sandwich',
            'photo' => 'http://localhost:8000/storage/profile_pictures/GGtmSjXuFSxBJwyUsPRk1oUSEmeaNQMpqo7Tp5RP.jpg',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 5,
        ]);
        Product::create([
            'name' => 'Crispy Sandwich',
            'photo' => 'http://localhost:8000/storage/profile_pictures/GGtmSjXuFSxBJwyUsPRk1oUSEmeaNQMpqo7Tp5RP.jpg',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 5,
        ]);
        Product::create([
            'name' => 'Special Sandwich',
            'photo' => 'http://localhost:8000/storage/profile_pictures/GGtmSjXuFSxBJwyUsPRk1oUSEmeaNQMpqo7Tp5RP.jpg',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 5,
        ]);
        Product::create([
            'name' => 'Spicy fillet',
            'photo' => 'http://localhost:8000/storage/profile_pictures/GGtmSjXuFSxBJwyUsPRk1oUSEmeaNQMpqo7Tp5RP.jpg',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 5,
        ]);
        Product::create([
            'name' => 'Turkish Sandwich',
            'photo' => 'http://localhost:8000/storage/profile_pictures/GGtmSjXuFSxBJwyUsPRk1oUSEmeaNQMpqo7Tp5RP.jpg',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 5,
        ]);

        // Office Supplies -> markets ->products

        Product::create([
            'name' => 'Sketch books',
            'photo' => 'http://localhost:8000/storage/profile_pictures/abw5hASAxbcfrdNgRvR7CxAtg8vCZDD4qLAfveEp.jpg',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 6,
        ]);

        Product::create([
            'name' => 'Colors',
            'photo' => 'http://localhost:8000/storage/profile_pictures/abw5hASAxbcfrdNgRvR7CxAtg8vCZDD4qLAfveEp.jpg',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 6,
        ]);

        Product::create([
            'name' => 'Charcoal pens',
            'photo' => 'http://localhost:8000/storage/profile_pictures/abw5hASAxbcfrdNgRvR7CxAtg8vCZDD4qLAfveEp.jpg',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 6,
        ]);

        Product::create([
            'name' => 'gloves for painting',
            'photo' => 'http://localhost:8000/storage/profile_pictures/abw5hASAxbcfrdNgRvR7CxAtg8vCZDD4qLAfveEp.jpg',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 6,
        ]);
        Product::create([
            'name' => 'Drawing boards',
            'photo' => 'http://localhost:8000/storage/profile_pictures/abw5hASAxbcfrdNgRvR7CxAtg8vCZDD4qLAfveEp.jpg',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 6,
        ]);

        Product::create([
            'name' => 'Bags',
            'photo' => 'http://localhost:8000/storage/profile_pictures/abw5hASAxbcfrdNgRvR7CxAtg8vCZDD4qLAfveEp.jpg',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 7,
        ]);

        Product::create([
            'name' => 'Notebooks',
            'photo' => 'http://localhost:8000/storage/profile_pictures/abw5hASAxbcfrdNgRvR7CxAtg8vCZDD4qLAfveEp.jpg',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 7,
        ]);

        Product::create([
            'name' => 'Pens',
            'photo' => 'http://localhost:8000/storage/profile_pictures/abw5hASAxbcfrdNgRvR7CxAtg8vCZDD4qLAfveEp.jpg',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 7,
        ]);

        Product::create([
            'name' => 'Highlighter pens',
            'photo' => 'http://localhost:8000/storage/profile_pictures/abw5hASAxbcfrdNgRvR7CxAtg8vCZDD4qLAfveEp.jpg',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 7,
        ]);

        Product::create([
            'name' => 'Erasers',
            'photo' => 'http://localhost:8000/storage/profile_pictures/abw5hASAxbcfrdNgRvR7CxAtg8vCZDD4qLAfveEp.jpg',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 7,
        ]);

        Product::create([
            'name' => 'Beautiful things',
            'photo' => 'http://localhost:8000/storage/profile_pictures/abw5hASAxbcfrdNgRvR7CxAtg8vCZDD4qLAfveEp.jpg',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 8,
        ]);

        Product::create([
            'name' => 'les miserables',
            'photo' => 'http://localhost:8000/storage/profile_pictures/abw5hASAxbcfrdNgRvR7CxAtg8vCZDD4qLAfveEp.jpg',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 8,
        ]);

        Product::create([
            'name' => 'ecstasy',
            'photo' => 'http://localhost:8000/storage/profile_pictures/abw5hASAxbcfrdNgRvR7CxAtg8vCZDD4qLAfveEp.jpg',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 8,
        ]);

        Product::create([
            'name' => 'Physics of happiness',
            'photo' => 'http://localhost:8000/storage/profile_pictures/abw5hASAxbcfrdNgRvR7CxAtg8vCZDD4qLAfveEp.jpg',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 8,
        ]);

        Product::create([
            'name' => 'because you are god',
            'photo' => 'http://localhost:8000/storage/profile_pictures/abw5hASAxbcfrdNgRvR7CxAtg8vCZDD4qLAfveEp.jpg',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 8,
        ]);

        Product::create([
            'name' => 'computer mouse',
            'photo' => 'http://localhost:8000/storage/profile_pictures/abw5hASAxbcfrdNgRvR7CxAtg8vCZDD4qLAfveEp.jpg',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 9,
        ]);

        Product::create([
            'name' => 'mouse pad',
            'photo' => 'http://localhost:8000/storage/profile_pictures/abw5hASAxbcfrdNgRvR7CxAtg8vCZDD4qLAfveEp.jpg',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 9,
        ]);

        Product::create([
            'name' => 'keyboard',
            'photo' => 'http://localhost:8000/storage/profile_pictures/abw5hASAxbcfrdNgRvR7CxAtg8vCZDD4qLAfveEp.jpg',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 9,
        ]);

        Product::create([
            'name' => 'laptop headphones',
            'photo' => 'http://localhost:8000/storage/profile_pictures/abw5hASAxbcfrdNgRvR7CxAtg8vCZDD4qLAfveEp.jpg',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 9,
        ]);

        Product::create([
            'name' => 'laptop table',
            'photo' => 'http://localhost:8000/storage/profile_pictures/abw5hASAxbcfrdNgRvR7CxAtg8vCZDD4qLAfveEp.jpg',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 9,
        ]);

        Product::create([
            'name' => 'Office lighting',
            'photo' => 'http://localhost:8000/storage/profile_pictures/abw5hASAxbcfrdNgRvR7CxAtg8vCZDD4qLAfveEp.jpg',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 10,
        ]);

        Product::create([
            'name' => 'Long lighting',
            'photo' => 'http://localhost:8000/storage/profile_pictures/abw5hASAxbcfrdNgRvR7CxAtg8vCZDD4qLAfveEp.jpg',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 10,
        ]);

        Product::create([
            'name' => 'Wall lighting',
            'photo' => 'http://localhost:8000/storage/profile_pictures/abw5hASAxbcfrdNgRvR7CxAtg8vCZDD4qLAfveEp.jpg',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 10,
        ]);

        Product::create([
            'name' => 'Short lighting',
            'photo' => 'http://localhost:8000/storage/profile_pictures/abw5hASAxbcfrdNgRvR7CxAtg8vCZDD4qLAfveEp.jpg',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 10,
        ]);

        Product::create([
            'name' => 'Ceiling lighting',
            'photo' => 'http://localhost:8000/storage/profile_pictures/abw5hASAxbcfrdNgRvR7CxAtg8vCZDD4qLAfveEp.jpg',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 10,
        ]);

        //makeup -> markets -> products
        Product::create([
            'name' => 'lipstick',
            'photo' => 'http://localhost:8000/storage/profile_pictures/YLlZtSwW2uKOmSH64vYt1rfsbFzkscBjEo5H3kUL.jpg',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 11,
        ]);

        Product::create([
        'name' => 'Foundation',
        'photo' => 'http://localhost:8000/storage/profile_pictures/YLlZtSwW2uKOmSH64vYt1rfsbFzkscBjEo5H3kUL.jpg',
        'price' => 10000,
        'description' => 'makeup',
        'count' => 500 ,
        'available' => true,
        'market_id' => 11,
    ]);

        Product::create([
            'name' => 'Eyeshadow',
            'photo' => 'http://localhost:8000/storage/profile_pictures/YLlZtSwW2uKOmSH64vYt1rfsbFzkscBjEo5H3kUL.jpg',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 11,
        ]);
        Product::create([
            'name' => 'Perfume',
            'photo' => 'http://localhost:8000/storage/profile_pictures/YLlZtSwW2uKOmSH64vYt1rfsbFzkscBjEo5H3kUL.jpg',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 11,
        ]);

        Product::create([
            'name' => 'highlighter',
            'photo' => 'http://localhost:8000/storage/profile_pictures/YLlZtSwW2uKOmSH64vYt1rfsbFzkscBjEo5H3kUL.jpg',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 11,
        ]);

        Product::create([
            'name' => 'lipstick',
            'photo' => 'http://localhost:8000/storage/profile_pictures/YLlZtSwW2uKOmSH64vYt1rfsbFzkscBjEo5H3kUL.jpg',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 12,
        ]);

        Product::create([
            'name' => 'Foundation',
            'photo' => 'http://localhost:8000/storage/profile_pictures/YLlZtSwW2uKOmSH64vYt1rfsbFzkscBjEo5H3kUL.jpg',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 12,
        ]);

        Product::create([
            'name' => 'Perfume',
            'photo' => 'http://localhost:8000/storage/profile_pictures/YLlZtSwW2uKOmSH64vYt1rfsbFzkscBjEo5H3kUL.jpg',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 12,
        ]);

        Product::create([
            'name' => 'powder',
            'photo' => 'http://localhost:8000/storage/profile_pictures/YLlZtSwW2uKOmSH64vYt1rfsbFzkscBjEo5H3kUL.jpg',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 12,
        ]);

        Product::create([
            'name' => 'eyebrow gel',
            'photo' => 'http://localhost:8000/storage/profile_pictures/YLlZtSwW2uKOmSH64vYt1rfsbFzkscBjEo5H3kUL.jpg',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 12,
        ]);

        Product::create([
            'name' => 'Foundation',
            'photo' => 'http://localhost:8000/storage/profile_pictures/YLlZtSwW2uKOmSH64vYt1rfsbFzkscBjEo5H3kUL.jpg',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 13,
        ]);

        Product::create([
            'name' => 'lipstick',
            'photo' => 'http://localhost:8000/storage/profile_pictures/YLlZtSwW2uKOmSH64vYt1rfsbFzkscBjEo5H3kUL.jpg',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 13,
        ]);

        Product::create([
            'name' => 'toner',
            'photo' => 'http://localhost:8000/storage/profile_pictures/YLlZtSwW2uKOmSH64vYt1rfsbFzkscBjEo5H3kUL.jpg',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 13,
        ]);

        Product::create([
            'name' => 'mascara',
            'photo' => 'http://localhost:8000/storage/profile_pictures/YLlZtSwW2uKOmSH64vYt1rfsbFzkscBjEo5H3kUL.jpg',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 13,
        ]);

        Product::create([
            'name' => 'makeup fixer',
            'photo' => 'http://localhost:8000/storage/profile_pictures/YLlZtSwW2uKOmSH64vYt1rfsbFzkscBjEo5H3kUL.jpg',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 13,
        ]);

        Product::create([
            'name' => 'Bene tint',
            'photo' => 'http://localhost:8000/storage/profile_pictures/YLlZtSwW2uKOmSH64vYt1rfsbFzkscBjEo5H3kUL.jpg',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 14,
        ]);

        Product::create([
            'name' => 'eyeliner',
            'photo' => 'http://localhost:8000/storage/profile_pictures/YLlZtSwW2uKOmSH64vYt1rfsbFzkscBjEo5H3kUL.jpg',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 14,
        ]);

        Product::create([
            'name' => 'blusher',
            'photo' => 'http://localhost:8000/storage/profile_pictures/YLlZtSwW2uKOmSH64vYt1rfsbFzkscBjEo5H3kUL.jpg',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 14,
        ]);

        Product::create([
            'name' => 'mascara',
            'photo' => 'http://localhost:8000/storage/profile_pictures/YLlZtSwW2uKOmSH64vYt1rfsbFzkscBjEo5H3kUL.jpg',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 14,
        ]);

        Product::create([
            'name' => 'makeup fixer',
            'photo' => 'http://localhost:8000/storage/profile_pictures/YLlZtSwW2uKOmSH64vYt1rfsbFzkscBjEo5H3kUL.jpg',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 14,
        ]);

        Product::create([
            'name' => 'Concealer',
            'photo' => 'http://localhost:8000/storage/profile_pictures/YLlZtSwW2uKOmSH64vYt1rfsbFzkscBjEo5H3kUL.jpg',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 15,
        ]);

        Product::create([
            'name' => 'lipstick',
            'photo' => 'http://localhost:8000/storage/profile_pictures/YLlZtSwW2uKOmSH64vYt1rfsbFzkscBjEo5H3kUL.jpg',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 15,
        ]);

        Product::create([
            'name' => 'Bronzer',
            'photo' => 'http://localhost:8000/storage/profile_pictures/YLlZtSwW2uKOmSH64vYt1rfsbFzkscBjEo5H3kUL.jpg',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 15,
        ]);

        Product::create([
            'name' => 'mascara',
            'photo' => 'http://localhost:8000/storage/profile_pictures/YLlZtSwW2uKOmSH64vYt1rfsbFzkscBjEo5H3kUL.jpg',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 15,
        ]);

        Product::create([
            'name' => 'makeup fixer',
            'photo' => 'http://localhost:8000/storage/profile_pictures/YLlZtSwW2uKOmSH64vYt1rfsbFzkscBjEo5H3kUL.jpg',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 15,
        ]);

        Product::create([
            'name' => 'Neck collar',
            'photo' => 'http://localhost:8000/storage/profile_pictures/L1AqRTbO4yFPb2pneL92wohQm8xQ1nGTioEw94gV.jpg',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 16,
        ]);

        Product::create([
            'name' => 'Ring',
            'photo' => 'http://localhost:8000/storage/profile_pictures/L1AqRTbO4yFPb2pneL92wohQm8xQ1nGTioEw94gV.jpg',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 16,
        ]);

        Product::create([
            'name' => 'Bracelet',
            'photo' => 'http://localhost:8000/storage/profile_pictures/L1AqRTbO4yFPb2pneL92wohQm8xQ1nGTioEw94gV.jpg',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 16,
        ]);

        Product::create([
            'name' => 'Ear ring',
            'photo' => 'http://localhost:8000/storage/profile_pictures/L1AqRTbO4yFPb2pneL92wohQm8xQ1nGTioEw94gV.jpg',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 16,
        ]);

        Product::create([
            'name' => 'neck collar',
            'photo' => 'http://localhost:8000/storage/profile_pictures/L1AqRTbO4yFPb2pneL92wohQm8xQ1nGTioEw94gV.jpg',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 16,
        ]);

        Product::create([
            'name' => 'ring',
            'photo' => 'http://localhost:8000/storage/profile_pictures/L1AqRTbO4yFPb2pneL92wohQm8xQ1nGTioEw94gV.jpg',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 17,
        ]);

        Product::create([
            'name' => ' neck collar',
            'photo' => 'http://localhost:8000/storage/profile_pictures/L1AqRTbO4yFPb2pneL92wohQm8xQ1nGTioEw94gV.jpg',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 17,
        ]);

        Product::create([
            'name' => 'watch',
            'photo' => 'http://localhost:8000/storage/profile_pictures/L1AqRTbO4yFPb2pneL92wohQm8xQ1nGTioEw94gV.jpg',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 17,
        ]);

        Product::create([
            'name' => 'Bracelet',
            'photo' => 'http://localhost:8000/storage/profile_pictures/L1AqRTbO4yFPb2pneL92wohQm8xQ1nGTioEw94gV.jpg',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 17,
        ]);

        Product::create([
            'name' => 'Set',
            'photo' => 'http://localhost:8000/storage/profile_pictures/L1AqRTbO4yFPb2pneL92wohQm8xQ1nGTioEw94gV.jpg',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 17,
        ]);

        Product::create([
            'name' => 'bag',
            'photo' => 'http://localhost:8000/storage/profile_pictures/L1AqRTbO4yFPb2pneL92wohQm8xQ1nGTioEw94gV.jpg',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 18,
        ]);

        Product::create([
            'name' => 'watch',
            'photo' => 'http://localhost:8000/storage/profile_pictures/L1AqRTbO4yFPb2pneL92wohQm8xQ1nGTioEw94gV.jpg',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 18,
        ]);

        Product::create([
            'name' => 'sun glasses',
            'photo' => 'http://localhost:8000/storage/profile_pictures/L1AqRTbO4yFPb2pneL92wohQm8xQ1nGTioEw94gV.jpg',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 18,
        ]);

        Product::create([
            'name' => 'bracelet',
            'photo' => 'http://localhost:8000/storage/profile_pictures/L1AqRTbO4yFPb2pneL92wohQm8xQ1nGTioEw94gV.jpg',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 18,
        ]);

        Product::create([
            'name' => 'Ring',
            'photo' => 'http://localhost:8000/storage/profile_pictures/L1AqRTbO4yFPb2pneL92wohQm8xQ1nGTioEw94gV.jpg',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 18,
        ]);

        Product::create([
            'name' => 'bag',
            'photo' => 'http://localhost:8000/storage/profile_pictures/L1AqRTbO4yFPb2pneL92wohQm8xQ1nGTioEw94gV.jpg',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 19,
        ]);

        Product::create([
            'name' => 'wallet',
            'photo' => 'http://localhost:8000/storage/profile_pictures/L1AqRTbO4yFPb2pneL92wohQm8xQ1nGTioEw94gV.jpg',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 19,
        ]);

        Product::create([
            'name' => 'sun glasses',
            'photo' => 'http://localhost:8000/storage/profile_pictures/L1AqRTbO4yFPb2pneL92wohQm8xQ1nGTioEw94gV.jpg',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 19,
        ]);

        Product::create([
            'name' => 'women bracelet',
            'photo' => 'http://localhost:8000/storage/profile_pictures/L1AqRTbO4yFPb2pneL92wohQm8xQ1nGTioEw94gV.jpg',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 19,
        ]);

        Product::create([
            'name' => 'men bracelet',
            'photo' => 'http://localhost:8000/storage/profile_pictures/L1AqRTbO4yFPb2pneL92wohQm8xQ1nGTioEw94gV.jpg',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 19,
        ]);

        Product::create([
            'name' => 'bag',
            'photo' => 'http://localhost:8000/storage/profile_pictures/L1AqRTbO4yFPb2pneL92wohQm8xQ1nGTioEw94gV.jpg',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 20,
        ]);

        Product::create([
            'name' => 'watch',
            'photo' => 'http://localhost:8000/storage/profile_pictures/L1AqRTbO4yFPb2pneL92wohQm8xQ1nGTioEw94gV.jpg',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 20,
        ]);

        Product::create([
            'name' => 'sun glasses',
            'photo' => 'http://localhost:8000/storage/profile_pictures/L1AqRTbO4yFPb2pneL92wohQm8xQ1nGTioEw94gV.jpg',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 20,
        ]);

        Product::create([
            'name' => 'bracelet',
            'photo' => 'http://localhost:8000/storage/profile_pictures/L1AqRTbO4yFPb2pneL92wohQm8xQ1nGTioEw94gV.jpg',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 20,
        ]);

        Product::create([
            'name' => 'ring',
            'photo' => 'http://localhost:8000/storage/profile_pictures/L1AqRTbO4yFPb2pneL92wohQm8xQ1nGTioEw94gV.jpg',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 20,
        ]);

        Product::create([
            'name' => 'tona',
            'photo' => 'http://localhost:8000/storage/profile_pictures/zHZ4qG1rhm0ir3WWq3q7P99YMRSssiyue048FILq.jpg',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 21,
        ]);

        Product::create([
            'name' => 'mortadella',
            'photo' => 'http://localhost:8000/storage/profile_pictures/zHZ4qG1rhm0ir3WWq3q7P99YMRSssiyue048FILq.jpg',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 21,
        ]);

        Product::create([
            'name' => 'corn',
            'photo' => 'http://localhost:8000/storage/profile_pictures/zHZ4qG1rhm0ir3WWq3q7P99YMRSssiyue048FILq.jpg',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 21,
        ]);

        Product::create([
            'name' => 'beans',
            'photo' => 'http://localhost:8000/storage/profile_pictures/zHZ4qG1rhm0ir3WWq3q7P99YMRSssiyue048FILq.jpg',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 21,
        ]);

        Product::create([
            'name' => 'chick peas',
            'photo' => 'http://localhost:8000/storage/profile_pictures/zHZ4qG1rhm0ir3WWq3q7P99YMRSssiyue048FILq.jpg',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 21,
        ]);

        Product::create([
            'name' => 'toast',
            'photo' => 'http://localhost:8000/storage/profile_pictures/zHZ4qG1rhm0ir3WWq3q7P99YMRSssiyue048FILq.jpg',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 22,
        ]);

        Product::create([
            'name' => 'tortilla',
            'photo' => 'http://localhost:8000/storage/profile_pictures/zHZ4qG1rhm0ir3WWq3q7P99YMRSssiyue048FILq.jpg',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 22,
        ]);

        Product::create([
            'name' => 'tourist bread',
            'photo' => 'http://localhost:8000/storage/profile_pictures/zHZ4qG1rhm0ir3WWq3q7P99YMRSssiyue048FILq.jpg',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 22,
        ]);

        Product::create([
            'name' => 'bread',
            'photo' => 'http://localhost:8000/storage/profile_pictures/zHZ4qG1rhm0ir3WWq3q7P99YMRSssiyue048FILq.jpg',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 22,
        ]);

        Product::create([
            'name' => 'french bread',
            'photo' => 'http://localhost:8000/storage/profile_pictures/zHZ4qG1rhm0ir3WWq3q7P99YMRSssiyue048FILq.jpg',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 22,
        ]);

        Product::create([
            'name' => 'nutella',
            'photo' => 'http://localhost:8000/storage/profile_pictures/zHZ4qG1rhm0ir3WWq3q7P99YMRSssiyue048FILq.jpg',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 23,
        ]);

        Product::create([
            'name' => 'kinder',
            'photo' => 'http://localhost:8000/storage/profile_pictures/zHZ4qG1rhm0ir3WWq3q7P99YMRSssiyue048FILq.jpg',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 23,
        ]);

        Product::create([
            'name' => 'kit kat',
            'photo' => 'http://localhost:8000/storage/profile_pictures/zHZ4qG1rhm0ir3WWq3q7P99YMRSssiyue048FILq.jpg',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 23,
        ]);

        Product::create([
            'name' => 'bounty',
            'photo' => 'http://localhost:8000/storage/profile_pictures/zHZ4qG1rhm0ir3WWq3q7P99YMRSssiyue048FILq.jpg',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 23,
        ]);

        Product::create([
            'name' => 'twix',
            'photo' => 'http://localhost:8000/storage/profile_pictures/zHZ4qG1rhm0ir3WWq3q7P99YMRSssiyue048FILq.jpg',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 23,
        ]);

        Product::create([
            'name' => 'liz',
            'photo' => 'http://localhost:8000/storage/profile_pictures/zHZ4qG1rhm0ir3WWq3q7P99YMRSssiyue048FILq.jpg',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 24,
        ]);

        Product::create([
            'name' => 'pringles',
            'photo' => 'http://localhost:8000/storage/profile_pictures/zHZ4qG1rhm0ir3WWq3q7P99YMRSssiyue048FILq.jpg',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 24,
        ]);

        Product::create([
            'name' => 'cheetos',
            'photo' => 'http://localhost:8000/storage/profile_pictures/zHZ4qG1rhm0ir3WWq3q7P99YMRSssiyue048FILq.jpg',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 24,
        ]);

        Product::create([
            'name' => 'doritos',
            'photo' => 'http://localhost:8000/storage/profile_pictures/zHZ4qG1rhm0ir3WWq3q7P99YMRSssiyue048FILq.jpg',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 24,
        ]);

        Product::create([
            'name' => 'ruffles',
            'photo' => 'http://localhost:8000/storage/profile_pictures/zHZ4qG1rhm0ir3WWq3q7P99YMRSssiyue048FILq.jpg',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 24,
        ]);

        Product::create([
            'name' => 'red bull',
            'photo' => 'http://localhost:8000/storage/profile_pictures/zHZ4qG1rhm0ir3WWq3q7P99YMRSssiyue048FILq.jpg',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 25,
        ]);

        Product::create([
            'name' => 'coca-cola',
            'photo' => 'http://localhost:8000/storage/profile_pictures/zHZ4qG1rhm0ir3WWq3q7P99YMRSssiyue048FILq.jpg',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 25,
        ]);

        Product::create([
            'name' => 'orange juice',
            'photo' => 'http://localhost:8000/storage/profile_pictures/zHZ4qG1rhm0ir3WWq3q7P99YMRSssiyue048FILq.jpg',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 25,
        ]);

        Product::create([
            'name' => '7up',
            'photo' => 'http://localhost:8000/storage/profile_pictures/zHZ4qG1rhm0ir3WWq3q7P99YMRSssiyue048FILq.jpg',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 25,
        ]);

        Product::create([
            'name' => 'pepsi',
            'photo' => 'http://localhost:8000/storage/profile_pictures/zHZ4qG1rhm0ir3WWq3q7P99YMRSssiyue048FILq.jpg',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 25,
        ]);
    }
}
