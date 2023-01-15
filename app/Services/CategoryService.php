<?php

namespace App\Services;

use App\Models\Category;

class CategoryService
{
    public function getCategories()
    {
        return Category::get();
    }

    public function getCategory($category)
    {
        return Category::find($category);
    }
    
    public function updateCategory($request, $category)
    {
        $cat = Category::find($category);
        
        $cat->title = $request->title;
        
        $cat->save();
        
        return $cat; 
    }

    public function deleteCategory($category)
    {
        Category::find($category)->delete();
    }
}
