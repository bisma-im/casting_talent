<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;


class GoogleReviewService
{
    public static function fetchReviews()
    {
        // $client = new Client();

        // $placeId = config('services.googlemaps.place_id');
        // $apiKey = config('services.googlemaps.api_key');
        // $url = "https://maps.googleapis.com/maps/api/place/details/json?place_id={$placeId}&fields=review,user_ratings_total,rating&key={$apiKey}";

        // $reviews = [];
        // $reviewsCount = 0;
        // $averageRating = 0;
        $businessReviewUrl = "https://www.google.com/maps/place/Cast+Talents/@25.1815668,55.2715102,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5f69716e0efaf5:0x6a4061bcc8f01882!8m2!3d25.1815668!4d55.2715102!16s%2Fg%2F11w1hx_9lb?entry=ttu&g_ep=EgoyMDI1MDEyOS4xIKXMDSoASAFQAw%3D%3D";

        // try {
        //     $response = $client->request('GET', $url);
        //     // Check if the API call was successful
        //     // dd($response->getBody()->getContents());
        //     if ($response->getStatusCode() == 200) {
        //         $data = json_decode($response->getBody()->getContents(), true);

        //         $reviews = isset($data['result']['reviews']) ? $data['result']['reviews'] : [];

        //         $customReview = [
        //             'author_name' => 'Laiba Azhar',
        //             'text' => 'Amazing agency with top-notch services! The team is professional, friendly, and incredibly supportive. The management always ensures a positive experience for all. Highly recommend for anyone looking for talent management or casting services! ⭐⭐⭐⭐⭐',
        //             'rating' => 5,
        //             'profile_photo_url' => null,
        //             'relative_time_description' => 'just now'
        //         ];

        //         $reviews[] = $customReview;

        //         $reviewsCount = isset($data['result']['user_ratings_total']) ? $data['result']['user_ratings_total'] : 0;
        //         $averageRating = isset($data['result']['rating']) ? $data['result']['rating'] : 0;
        //     } 
        //     else {
        //         Log::error($response->getStatusCode());
        //         throw new \Exception("Failed to fetch reviews, API returned status code: " . $response->getStatusCode());
        //     }
        // } catch (\Exception $e) {
        //     Log::error($e->getMessage());
        //     error_log($e->getMessage());

        //     // Optionally, add error details to return structure
        //     return [
        //         'error' => 'Failed to fetch reviews: ' . $e->getMessage()
        //     ];
        // }
        $customReview = [
            'author_name' => 'Laiba Azhar',
            'text' => 'Amazing agency with top-notch services! The team is professional, friendly, and incredibly supportive. The management always ensures a positive experience for all. Highly recommend for anyone looking for talent management or casting services! ⭐⭐⭐⭐⭐',
            'rating' => 5,
            'profile_photo_url' => null,
            'relative_time_description' => 'just now'
        ];

        $reviews[] = $customReview;

        return [
            'reviews' => $reviews,
            'reviewsCount' => 106,
            'averageRating' => 4.9,
            'businessReviewUrl' => $businessReviewUrl
        ];
    }
}
