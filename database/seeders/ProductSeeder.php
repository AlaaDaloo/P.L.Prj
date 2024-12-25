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
            'photo' => 'fast Food',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 1,
        ]);
        Product::create([
            'name' => 'Classic Burger',
            'photo' => 'fast Food',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 1,
        ]);
        Product::create([
            'name' => 'Chicken fries',
            'photo' => 'fast Food',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 1,
        ]);
        Product::create([
            'name' => 'Chili Cheese Nuggets',
            'photo' => 'fast Food',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 1,
        ]);
        Product::create([
            'name' => ' Cheese  burger',
            'photo' => 'fast Food',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 1,
        ]);
        Product::create([
            'name' => 'Four seasons pizza',
            'photo' => 'fast Food',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 2,
        ]);
        Product::create([
            'name' => 'Vegetable pizza',
            'photo' => 'fast Food',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 2,
        ]);
        Product::create([
            'name' => 'Margherita pizza',
            'photo' => 'fast Food',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 2,
        ]);
        Product::create([
            'name' => 'Chicken pizza',
            'photo' => 'fast Food',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 2,
        ]);
        Product::create([
            'name' => 'Pepperoni pizza',
            'photo' => 'fast Food',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 2,
        ]);
        Product::create([
            'name' => 'onion rings',
            'photo' => 'fast Food',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 3,
        ]);
        Product::create([
            'name' => 'Flat burger',
            'photo' => 'fast Food',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 3,
        ]);
        Product::create([
            'name' => 'Mushroom burger',
            'photo' => 'fast Food',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 3,
        ]);
        Product::create([
            'name' => 'Buffalo boneless',
            'photo' => 'fast Food',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 3,
        ]);
        Product::create([
            'name' => 'King starter',
            'photo' => 'fast Food',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 3,
        ]);
        Product::create([
            'name' => 'BBQ crispy burger ',
            'photo' => 'fast Food',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 4,
        ]);
        Product::create([
            'name' => 'Special Burger',
            'photo' => 'fast Food',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 4,
        ]);
        Product::create([
            'name' => 'Mozzarella fingers',
            'photo' => 'fast Food',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 4,
        ]);
        Product::create([
            'name' => 'Fried chicken',
            'photo' => 'fast Food',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 4,
        ]);
        Product::create([
            'name' => 'pasta salad',
            'photo' => 'fast Food',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 4,
        ]);
        Product::create([
            'name' => 'BBQ chicken sandwich',
            'photo' => 'fast Food',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 5,
        ]);
        Product::create([
            'name' => 'Crispy Sandwich',
            'photo' => 'fast Food',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 5,
        ]);
        Product::create([
            'name' => 'Special Sandwich',
            'photo' => 'fast Food',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 5,
        ]);
        Product::create([
            'name' => 'Spicy fillet',
            'photo' => 'fast Food',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 5,
        ]);
        Product::create([
            'name' => 'Turkish Sandwich',
            'photo' => 'fast Food',
            'price' => 10000,
            'description' => 'Fast food',
            'count' => 500 ,
            'available' => true,
            'market_id' => 5,
        ]);

        // Office Supplies -> markets ->products

        Product::create([
            'name' => 'Sketch books',
            'photo' => 'Office supplies',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 6,
        ]);

        Product::create([
            'name' => 'Colors',
            'photo' => 'Office supplies',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 6,
        ]);

        Product::create([
            'name' => 'Charcoal pens',
            'photo' => 'Office supplies',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 6,
        ]);

        Product::create([
            'name' => 'gloves for painting',
            'photo' => 'Office supplies',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 6,
        ]);
        Product::create([
            'name' => 'Drawing boards',
            'photo' => 'Office supplies',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 6,
        ]);

        Product::create([
            'name' => 'Bags',
            'photo' => 'Office supplies',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 7,
        ]);

        Product::create([
            'name' => 'Notebooks',
            'photo' => 'Office supplies',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 7,
        ]);

        Product::create([
            'name' => 'Pens',
            'photo' => 'Office supplies',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 7,
        ]);

        Product::create([
            'name' => 'Highlighter pens',
            'photo' => 'Office supplies',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 7,
        ]);

        Product::create([
            'name' => 'Erasers',
            'photo' => 'Office supplies',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 7,
        ]);

        Product::create([
            'name' => 'Beautiful things',
            'photo' => 'Office supplies',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 8,
        ]);

        Product::create([
            'name' => 'les miserables',
            'photo' => 'Office supplies',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 8,
        ]);

        Product::create([
            'name' => 'ecstasy',
            'photo' => 'Office supplies',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 8,
        ]);

        Product::create([
            'name' => 'Physics of happiness',
            'photo' => 'Office supplies',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 8,
        ]);

        Product::create([
            'name' => 'because you are god',
            'photo' => 'Office supplies',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 8,
        ]);

        Product::create([
            'name' => 'computer mouse',
            'photo' => 'Office supplies',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 9,
        ]);

        Product::create([
            'name' => 'mouse pad',
            'photo' => 'Office supplies',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 9,
        ]);

        Product::create([
            'name' => 'keyboard',
            'photo' => 'Office supplies',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 9,
        ]);

        Product::create([
            'name' => 'laptop headphones',
            'photo' => 'Office supplies',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 9,
        ]);

        Product::create([
            'name' => 'laptop table',
            'photo' => 'Office supplies',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 9,
        ]);

        Product::create([
            'name' => 'Office lighting',
            'photo' => 'Office supplies',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 10,
        ]);

        Product::create([
            'name' => 'Long lighting',
            'photo' => 'Office supplies',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 10,
        ]);

        Product::create([
            'name' => 'Wall lighting',
            'photo' => 'Office supplies',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 10,
        ]);

        Product::create([
            'name' => 'Short lighting',
            'photo' => 'Office supplies',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 10,
        ]);

        Product::create([
            'name' => 'Ceiling lighting',
            'photo' => 'Office supplies',
            'price' => 10000,
            'description' => 'Office supplies',
            'count' => 500 ,
            'available' => true,
            'market_id' => 10,
        ]);

        //makeup -> markets -> products
        Product::create([
            'name' => 'lipstick',
            'photo' => 'makeup',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 11,
        ]);

        Product::create([
        'name' => 'Foundation',
        'photo' => 'makeup',
        'price' => 10000,
        'description' => 'makeup',
        'count' => 500 ,
        'available' => true,
        'market_id' => 11,
    ]);

        Product::create([
            'name' => 'Eyeshadow',
            'photo' => 'makeup',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 11,
        ]);
        Product::create([
            'name' => 'Perfume',
            'photo' => 'makeup',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 11,
        ]);

        Product::create([
            'name' => 'highlighter',
            'photo' => 'makeup',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 11,
        ]);

        Product::create([
            'name' => 'lipstick',
            'photo' => 'makeup',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 12,
        ]);

        Product::create([
            'name' => 'Foundation',
            'photo' => 'makeup',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 12,
        ]);

        Product::create([
            'name' => 'Perfume',
            'photo' => 'makeup',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 12,
        ]);

        Product::create([
            'name' => 'powder',
            'photo' => 'makeup',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 12,
        ]);

        Product::create([
            'name' => 'eyebrow gel',
            'photo' => 'makeup',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 12,
        ]);

        Product::create([
            'name' => 'Foundation',
            'photo' => 'makeup',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 13,
        ]);

        Product::create([
            'name' => 'lipstick',
            'photo' => 'makeup',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 13,
        ]);

        Product::create([
            'name' => 'toner',
            'photo' => 'makeup',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 13,
        ]);

        Product::create([
            'name' => 'mascara',
            'photo' => 'makeup',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 13,
        ]);

        Product::create([
            'name' => 'makeup fixer',
            'photo' => 'makeup',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 13,
        ]);

        Product::create([
            'name' => 'Bene tint',
            'photo' => 'makeup',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 14,
        ]);

        Product::create([
            'name' => 'eyeliner',
            'photo' => 'makeup',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 14,
        ]);

        Product::create([
            'name' => 'blusher',
            'photo' => 'makeup',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 14,
        ]);

        Product::create([
            'name' => 'mascara',
            'photo' => 'makeup',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 14,
        ]);

        Product::create([
            'name' => 'makeup fixer',
            'photo' => 'makeup',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 14,
        ]);

        Product::create([
            'name' => 'Concealer',
            'photo' => 'makeup',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 15,
        ]);

        Product::create([
            'name' => 'lipstick',
            'photo' => 'makeup',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 15,
        ]);

        Product::create([
            'name' => 'Bronzer',
            'photo' => 'makeup',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 15,
        ]);

        Product::create([
            'name' => 'mascara',
            'photo' => 'makeup',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 15,
        ]);

        Product::create([
            'name' => 'makeup fixer',
            'photo' => 'makeup',
            'price' => 10000,
            'description' => 'makeup',
            'count' => 500 ,
            'available' => true,
            'market_id' => 15,
        ]);

        Product::create([
            'name' => 'Neck collar',
            'photo' => 'jewelry',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 16,
        ]);

        Product::create([
            'name' => 'Ring',
            'photo' => 'jewelry',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 16,
        ]);

        Product::create([
            'name' => 'Bracelet',
            'photo' => 'jewelry',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 16,
        ]);

        Product::create([
            'name' => 'Ear ring',
            'photo' => 'jewelry',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 16,
        ]);

        Product::create([
            'name' => 'neck collar',
            'photo' => 'jewelry',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 16,
        ]);

        Product::create([
            'name' => 'ring',
            'photo' => 'jewelry',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 17,
        ]);

        Product::create([
            'name' => ' neck collar',
            'photo' => 'jewelry',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 17,
        ]);

        Product::create([
            'name' => 'watch',
            'photo' => 'jewelry',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 17,
        ]);

        Product::create([
            'name' => 'Bracelet',
            'photo' => 'jewelry',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 17,
        ]);

        Product::create([
            'name' => 'Set',
            'photo' => 'jewelry',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 17,
        ]);

        Product::create([
            'name' => 'bag',
            'photo' => 'jewelry',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 18,
        ]);

        Product::create([
            'name' => 'watch',
            'photo' => 'jewelry',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 18,
        ]);

        Product::create([
            'name' => 'sun glasses',
            'photo' => 'jewelry',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 18,
        ]);

        Product::create([
            'name' => 'bracelet',
            'photo' => 'jewelry',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 18,
        ]);

        Product::create([
            'name' => 'Ring',
            'photo' => 'jewelry',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 18,
        ]);

        Product::create([
            'name' => 'bag',
            'photo' => 'jewelry',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 19,
        ]);

        Product::create([
            'name' => 'wallet',
            'photo' => 'jewelry',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 19,
        ]);

        Product::create([
            'name' => 'sun glasses',
            'photo' => 'jewelry',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 19,
        ]);

        Product::create([
            'name' => 'women bracelet',
            'photo' => 'jewelry',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 19,
        ]);

        Product::create([
            'name' => 'men bracelet',
            'photo' => 'jewelry',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 19,
        ]);

        Product::create([
            'name' => 'bag',
            'photo' => 'jewelry',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 20,
        ]);

        Product::create([
            'name' => 'watch',
            'photo' => 'jewelry',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 20,
        ]);

        Product::create([
            'name' => 'sun glasses',
            'photo' => 'jewelry',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 20,
        ]);

        Product::create([
            'name' => 'bracelet',
            'photo' => 'jewelry',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 20,
        ]);

        Product::create([
            'name' => 'ring',
            'photo' => 'jewelry',
            'price' => 10000,
            'description' => 'jewelry',
            'count' => 500 ,
            'available' => true,
            'market_id' => 20,
        ]);

        Product::create([
            'name' => 'tona',
            'photo' => 'food stuffs',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 21,
        ]);

        Product::create([
            'name' => 'mortadella',
            'photo' => 'food stuffs',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 21,
        ]);

        Product::create([
            'name' => 'corn',
            'photo' => 'food stuffs',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 21,
        ]);

        Product::create([
            'name' => 'beans',
            'photo' => 'food stuffs',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 21,
        ]);

        Product::create([
            'name' => 'chick peas',
            'photo' => 'food stuffs',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 21,
        ]);

        Product::create([
            'name' => 'toast',
            'photo' => 'food stuffs',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 22,
        ]);

        Product::create([
            'name' => 'tortilla',
            'photo' => 'food stuffs',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 22,
        ]);

        Product::create([
            'name' => 'tourist bread',
            'photo' => 'food stuffs',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 22,
        ]);

        Product::create([
            'name' => 'bread',
            'photo' => 'food stuffs',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 22,
        ]);

        Product::create([
            'name' => 'french bread',
            'photo' => 'food stuffs',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 22,
        ]);

        Product::create([
            'name' => 'nutella',
            'photo' => 'food stuffs',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 23,
        ]);

        Product::create([
            'name' => 'kinder',
            'photo' => 'food stuffs',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 23,
        ]);

        Product::create([
            'name' => 'kit kat',
            'photo' => 'food stuffs',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 23,
        ]);

        Product::create([
            'name' => 'bounty',
            'photo' => 'food stuffs',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 23,
        ]);

        Product::create([
            'name' => 'twix',
            'photo' => 'food stuffs',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 23,
        ]);

        Product::create([
            'name' => 'liz',
            'photo' => 'food stuffs',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 24,
        ]);

        Product::create([
            'name' => 'pringles',
            'photo' => 'food stuffs',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 24,
        ]);

        Product::create([
            'name' => 'cheetos',
            'photo' => 'food stuffs',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 24,
        ]);

        Product::create([
            'name' => 'doritos',
            'photo' => 'food stuffs',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 24,
        ]);

        Product::create([
            'name' => 'ruffles',
            'photo' => 'food stuffs',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 24,
        ]);

        Product::create([
            'name' => 'red bull',
            'photo' => 'food stuffs',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 25,
        ]);

        Product::create([
            'name' => 'coca-cola',
            'photo' => 'food stuffs',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 25,
        ]);

        Product::create([
            'name' => 'orange juice',
            'photo' => 'food stuffs',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 25,
        ]);

        Product::create([
            'name' => '7up',
            'photo' => 'food stuffs',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 25,
        ]);

        Product::create([
            'name' => 'pepsi',
            'photo' => 'food stuffs',
            'price' => 10000,
            'description' => 'food stuffs',
            'count' => 500 ,
            'available' => true,
            'market_id' => 25,
        ]);
    }
}
