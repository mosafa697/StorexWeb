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
    
    public function geupdateCategory($request, $category)
    {
        $cat = Category::find($category);
        
        $cat->title = $request->title;
        
        $cat->save();
        
        return $cat; 
        // $cat->description = $request->description;
        // $cat->rate = $request->rate;
        // $cat->category_id = $request->category_id;
    }

    public function deleteCategory($category)
    {
        Category::find($category)->delete();
    }
}
