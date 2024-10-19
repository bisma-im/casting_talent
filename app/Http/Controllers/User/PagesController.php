<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ModelDetail;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\File;

class PagesController extends Controller
{

    public function modelDataPage()
    {
        return view('users.pages.modeling.modal-registeration');
    }

    public function aboutPage()
    {
        return view('users.pages.about');
    }

    public function contactPage()
    {
        $client = new Client();

        $placeId = config('services.googlemaps.place_id'); // Replace with your actual Place ID
        $apiKey = config('services.googlemaps.api_key');   // Replace with your actual API Key
        $url = "https://maps.googleapis.com/maps/api/place/details/json?place_id={$placeId}&fields=review,user_ratings_total,rating&key={$apiKey}";
        $reviews = null;
        $reviewsCount = 0;  // To hold the count of reviews in the array
        $averageRating = 0; // To hold the average rating
        $businessReviewUrl = "https://www.google.com/maps/place/?q=place_id:{$placeId}";

        try {
            $response = $client->request('GET', $url);
            $data = json_decode($response->getBody()->getContents(), true);

            // Get reviews if they exist
            $reviews = isset($data['result']['reviews']) ? $data['result']['reviews'] : [];

            $customReview = [
                'author_name' => 'Laiba Azhar',
                'text' => 'Amazing agency with top-notch services! The team is professional, friendly, and incredibly supportive. The management always ensure a positive experience for all. Highly recommend for anyone looking for talent management or casting services! ⭐⭐⭐⭐⭐',
                'rating' => 5,
                'profile_photo_url' => null, // You can add an image URL if needed, or leave null
                'relative_time_description' => 'just now' // This can be customized
            ];

            // Append the custom review to the existing reviews array
            $reviews[] = $customReview;

            // Count the number of reviews
            $reviewsCount = isset($data['result']['user_ratings_total']) ? $data['result']['user_ratings_total'] : 0;

            // Get the average rating
            $averageRating = isset($data['result']['rating']) ? $data['result']['rating'] : 0;
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to fetch reviews: ' . $e->getMessage()], 500);
        }

        return view('users.pages.contact-us', [
            'reviews' => $reviews,
            'reviewsCount' => $reviewsCount,
            'averageRating' => $averageRating,
            'businessReviewUrl' => $businessReviewUrl
        ]);
    }

    public function jobsPage()
    {
        return view('users.pages.our-jobs');
    }

    public function talentsPage()
    {
        return view('users.pages.our-talent');
    }

    public function servicesPage()
    {
        return view('users.pages.services');
    }

    public function eventservicesPage($section = '')
    {
        return view('users.pages.event-services', ['section' => $section]);
    }

    public function modelInfoPage($id)
    {
        $details = ModelDetail::find($id);
        // dd($details);
        return view('users.pages.model-details', compact('details'));
    }

    public function featuredmodelsPage($role = '', $gender = '')
    {
        // Initialize $models to ensure it's always defined
        $models = collect();
        $languages = json_decode(File::get(public_path('user-assets/languages.json')), true);

        $query = ModelDetail::query();

        // If a role is provided, apply the role filter
        if ($role) {
            $query->whereJsonContains('musician_categories', $role);
        }

        // Filter by gender if provided as a query parameter
        if ($gender = request('gender')) {
            $query->where('gender', $gender);
        }

        $models = $query->get();

        return view('users.pages.featured-modal', [
            'models' => $models,
            'qModels' => $models, // Use $qModels if $role is provided, otherwise use $models
            'languages' => $languages
        ]);
    }

    // public function featuredmodelsPage($role = '')
    // {
    //     // Initialize $models to ensure it's always defined
    //     $models = collect();

    //     // Split the role into components based on underscores
    //     $roleComponents = explode('_', $role);
    //     if (!empty($roleComponents)) {
    //         // Filter the models based on any of the role components
    //         $qModels = ModelDetail::where(function($query) use ($roleComponents) {
    //             foreach ($roleComponents as $component) {
    //                 $query->orWhereJsonContains('category', $component);
    //             }
    //         })->get();
    //     } else {
    //         // Fetch all models if no role is specified
    //         $models = ModelDetail::all();
    //     }

    //     // dd($roleComponents,$models,$qModels);
    //     // Pass both variables to the view
    //     return view('users.pages.featured-modal', [
    //         'models' => $models,
    //         'qModels' => !empty($roleComponents) ? $qModels : $models // Use $qModels if there are role components, otherwise use $models
    //     ]);
    // }


    public function filmingservicesPage($section = '')
    {
        return view('users.pages.filming-services', ['section' => $section]);
    }

    public function membershipPage()
    {
        return view('users.pages.membership');
    }

    public function modelingagencyPage($section = '')
    {
        return view('users.pages.modeling-agency', ['section' => $section]);
    }

    public function celeberityManagementPage($section = '')
    {
        return view('users.pages.celeberity-management', ['section' => $section]);
    }

    public function hospitalityPage($section = '')
    {
        return view('users.pages.hospitality', ['section' => $section]);
    }

    public function locationScoutingPage($section = '')
    {
        return view('users.pages.location-scounting', ['section' => $section]);
    }
}
