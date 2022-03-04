<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $recipes = Recipe::all();
        return response()->json(['status' => 200, 'recipes' => $recipes]);
    }

    public function topRated()
    {
        $recipes = Recipe::all();
        // $recipes 
    }
}
