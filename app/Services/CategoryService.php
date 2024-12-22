<?php

namespace App\Services;

use App\Models\Category;

class CategoryService
{
    public function getCategories()
    {
        $categories = Category::select('id', 'category_name')->get();
    
         if ($categories->isEmpty()) { 
           return ['message' => 'No categories found!']; 
        }
    
        return $categories; 
    }

}
