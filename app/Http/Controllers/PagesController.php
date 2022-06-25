<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;
use App\Models\WatchLater;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function recipes()
    {
        $recipes = Recipe::all();
        return response()->json(['status' => 200, 'recipes' => $recipes]);
    }

    public function categories()
    {
        $categories = Category::all();
        return response()->json(['status' => 200, 'categories' => $categories]);
    }

    public function recipeDetail($id)
    {
        $recipe = Recipe::findOrFail($id);
        return response()->json(['status' => 200, 'recipe' => $recipe]);
    }

    public function watchLater($id)
    {
        $recipes = WatchLater::where('user_id', auth()->user()->id)->get();
        return response()->json(['status' => 200, 'recipes' => $recipes]);
    }

    public function topRated($id)
    {
        // $recipe = Recipe::findOrFail($id);
        // return response()->json(['status' => 200, 'recipe' => $recipe]);
    }

    
}
