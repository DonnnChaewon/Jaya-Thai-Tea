<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ReviewController extends Controller
{
    public function getReviewById($id)
    {
        // Fetch all reviews where the 'product_id' matches the given ID
        $reviews = Review::where('product_id', $id)->get();

        // Return the collection of reviews
        return $reviews;
    }

    public function postReview(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'product_id' => 'required|integer|exists:products,product_id', // Ensure 'product_id' is valid and exists in the 'products' table
            'rating' => 'required|integer|min:1|max:5', // Ensure 'rating' is between 1 and 5
            'comment' => 'nullable|string|max:255', // Optional 'comment', maximum 255 characters
        ]);

        try {
            // Use a database transaction to safely insert the review data
            $review = DB::transaction(function () use ($request) {
                // Create and return a new review record
                return Review::create([
                    'product_id' => $request->product_id,
                    'rating' => $request->rating,
                    'comment' => $request->comment,
                ]);
            });

            // Check if the review was successfully created
            if ($review) {
                // Return the created review data as a JSON response
                return response()->json([
                    'product_id' => $review->product_id,
                    'rating' => $review->rating,
                    'comment' => $review->comment,
                ]);
            } else {
                // Return an error response if the review creation failed
                return response()->json(['error' => 'Failed to create review.'], 500);
            }
        } catch (\Exception $e) {
            // Handle any exceptions and return an error response with details
            return response()->json(['error' => 'An error occurred while submitting the review. ' . $e->getMessage()], 500);
        }
    }
}
