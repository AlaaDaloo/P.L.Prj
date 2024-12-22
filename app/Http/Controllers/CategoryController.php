<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CategoryService;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function getCategories()
    {
        $categories = $this->categoryService->getCategories();

        if (isset($categories['message'])) {
         return response()->json($categories, 404); 
        }

        return response()->json($categories); 
    }

}