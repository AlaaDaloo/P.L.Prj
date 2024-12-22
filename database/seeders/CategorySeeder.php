<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['category_name' => 'Fast Food'],
            ['category_name' => 'Office Supplies'],
            ['category_name' => 'Makeup'],
            ['category_name' => 'Jewelry'],
            ['category_name' => 'Food Stuffs'],
        ]);
    }
}
