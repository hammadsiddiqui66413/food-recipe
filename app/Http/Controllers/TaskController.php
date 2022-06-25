<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Review;
use App\Models\WatchLater;
use Illuminate\Http\Request;
use PDF;

class TaskController extends Controller
{
    public function searchRecipe(Request $request)
    {

    }

    public function likeRecipe(Request $request)
    {

    }

    public function rateRecipe(Request $request)
    {

    }

    public function storeReview(Request $request, $id)
    {
        dd($request->review, $id, $request->user_id);
        $review = new Review();
        $review->review = $request->review;
        $review->recipe_id = $request->recipe_id;
        // $review->user_id = auth()->user()->id;
        $review->user_id = $request->user_id;
        $review->save();

        return response()->json(['status' => 200, 'message' => 'review saved successfully']);

    }

    public function addToWatchLater(Request $request, $id)
    {
        $recipe_id = $id;
        // $user_id = auth()->user()->id;
        $user_id = $request->user_id;
        $watchLater = new WatchLater();
        $watchLater->recipe_id = $recipe_id;
        $watchLater->user_id = $user_id;
        $watchLater->save();

        return response()->json(['status' => 200, 'message' => 'Added to watch later successfully']);

    }

    public function downloadRecipePdf($id)
    {
        $recipe = Recipe::where('id', $id)->first();
        $pdf = PDF::loadView('myPDF', $recipe);

        return $pdf->download('itsolutionstuff.pdf');
    }
}
