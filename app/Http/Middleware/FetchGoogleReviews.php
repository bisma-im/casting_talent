<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\View;
use App\Services\GoogleReviewService;

class FetchGoogleReviews
{
    public function handle($request, Closure $next)
    {
        // Fetch data using the service
        $reviewsData = GoogleReviewService::fetchReviews();

        // Share data globally with all views
        View::share('reviews', $reviewsData['reviews']);
        View::share('reviewsCount', $reviewsData['reviewsCount']);
        View::share('averageRating', $reviewsData['averageRating']);
        View::share('businessReviewUrl', $reviewsData['businessReviewUrl']);

        return $next($request);
    }
}
