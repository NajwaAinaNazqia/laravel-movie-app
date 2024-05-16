<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $review =  new Review();
        $reviews = $review->getALLReviews();

        return view('reviews.index', ['reviews' => $reviews]);
    }
};


