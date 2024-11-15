<?php

namespace App\Services;

use GuzzleHttp\Client;

class GoogleReviewService
{
    public static function fetchReviews()
    {
        $client = new Client();

        $placeId = config('services.googlemaps.place_id');
        $apiKey = config('services.googlemaps.api_key');
        $url = "https://maps.googleapis.com/maps/api/place/details/json?place_id={$placeId}&fields=review,user_ratings_total,rating&key={$apiKey}";

        $reviews = [];
        $reviewsCount = 0;
        $averageRating = 0;
        $businessReviewUrl = "https://www.google.com/maps/place/?q=place_id:{$placeId}";

        try {
            $response = $client->request('GET', $url);
            $data = json_decode($response->getBody()->getContents(), true);

            $reviews = isset($data['result']['reviews']) ? $data['result']['reviews'] : [];

            $customReview = [
                'author_name' => 'Laiba Azhar',
                'text' => 'Amazing agency with top-notch services! The team is professional, friendly, and incredibly supportive. The management always ensures a positive experience for all. Highly recommend for anyone looking for talent management or casting services! ⭐⭐⭐⭐⭐',
                'rating' => 5,
                'profile_photo_url' => null,
                'relative_time_description' => 'just now'
            ];

            $reviews[] = $customReview;

            $reviewsCount = isset($data['result']['user_ratings_total']) ? $data['result']['user_ratings_total'] : 0;
            $averageRating = isset($data['result']['rating']) ? $data['result']['rating'] : 0;
        } catch (\Exception $e) {
            // Handle error, log if necessary
        }

        return [
            'reviews' => $reviews,
            'reviewsCount' => $reviewsCount,
            'averageRating' => $averageRating,
            'businessReviewUrl' => $businessReviewUrl
        ];
    }
}
