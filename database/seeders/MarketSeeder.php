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
            'name'=>'Dior',
            'photo'=>'dior.png',
            'location'=>'damascus',
            'category_id'=>3,
        ]);
        Market::create([
            'name'=>'Chanel',
            'photo'=>'chanel.png',
            'location'=>'homs',
            'category_id'=>3,
        ]);
        Market::create([
            'name'=>'Sheglam',
            'photo'=>'sheglam.png',
            'location'=>'hama',
            'category_id'=>3,
        ]);
        Market::create([
            'name'=>'Benefit',
            'photo'=>'benefit.png',
            'location'=>'US',
            'category_id'=>3,
        ]);
        Market::create([
            'name'=>'Maybeline',
            'photo'=>'maybeline.png',
            'location'=>'dubai',
            'category_id'=>3,
        ]);
        Market::create([
            'name'=>'Art Supplies',
            'photo'=>'nnn.png',
            'location'=>'dubai',
            'category_id'=>2,
        ]);
        Market::create([
            'name'=>'school Supplies',
            'photo'=>'school.png',
            'location'=>'dubai',
            'category_id'=>2,
        ]);
        Market::create([
            'name'=>'Types of books',
            'photo'=>'books.png',
            'location'=>'dubai',
            'category_id'=>2,
        ]);
        Market::create([
            'name'=>'laptop accessories',
            'photo'=>'accessories.png',
            'location'=>'dubai',
            'category_id'=>2,
        ]);
        Market::create([
            'name'=>'type of lighting',
            'photo'=>'light.png',
            'location'=>'dubai',
            'category_id'=>2,
        ]);
        Market::create([
            'name'=>'Canned Food',
            'photo'=>'canned.png',
            'location'=>'dubai',
            'category_id'=>5,
        ]);
        Market::create([
            'name'=>'type of bread',
            'photo'=>'bread.png',
            'location'=>'dubai',
            'category_id'=>5,
        ]);
        Market::create([
            'name'=>'type of chocolate',
            'photo'=>'chocolate.png',
            'location'=>'dubai',
            'category_id'=>5,
        ]);
        Market::create([
            'name'=>'type of chips',
            'photo'=>'chips.png',
            'location'=>'dubai',
            'category_id'=>5,
        ]);
        Market::create([
            'name'=>'type of drink',
            'photo'=>'drink.png',
            'location'=>'dubai',
            'category_id'=>5,
        ]);
        Market::create([
            'name'=>'King over',
            'photo'=>'king over.png',
            'location'=>'damascus',
            'category_id'=>1,
        ]);
        Market::create([
            'name'=>'Action pizza',
            'photo'=>'action pizza.png',
            'location'=>'damascus',
            'category_id'=>1,
        ]);
        Market::create([
            'name'=>'Bufflay Burger',
            'photo'=>'Bufflay Burger.png',
            'location'=>'damascus',
            'category_id'=>1,
        ]);
        Market::create([
            'name'=>'Crispy way',
            'photo'=>'Crispy way.png',
            'location'=>'damascus',
            'category_id'=>1,
        ]);
        Market::create([
            'name'=>'Beit al mukhtar',
            'photo'=>'Beit al mukhtar.png',
            'location'=>'damascus',
            'category_id'=>1,
        ]);
        Market::create([
            'name'=>'Pandora',
            'photo'=>'Pandora.png',
            'location'=>'damascus',
            'category_id'=>4,
        ]);
        Market::create([
            'name'=>'Swarovski',
            'photo'=>'Swarovski.png',
            'location'=>'damascus',
            'category_id'=>4,
        ]);
        Market::create([
            'name'=>'Fendi',
            'photo'=>'Fendi.png',
            'location'=>'damascus',
            'category_id'=>4,
        ]);
        Market::create([
            'name'=>'Prada',
            'photo'=>'prada.png',
            'location'=>'damascus',
            'category_id'=>4,
        ]);
        Market::create([
            'name'=>'Gucci',
            'photo'=>'Gucci.png',
            'location'=>'damascus',
            'category_id'=>4,
        ]);

    }
}
