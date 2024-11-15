<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ModelDetail;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;
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
        return view('users.pages.contact-us');
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

    public function convertToTitleCaseWithPunctuation($items) {
        // Array to hold the converted strings
        $convertedItems = [];
    
        // Loop through each item in the input array
        foreach ($items as $item) {
            // Split the string by underscores
            $words = explode('_', $item);
    
            // Capitalize the first letter of each word
            $capitalizedWords = array_map('ucwords', $words);
    
            // Join the words with a space
            $convertedItems[] = implode(' ', $capitalizedWords);
        }
    
        // Add comma to all except the last item and add a period at the end of the last item
        $lastIndex = count($convertedItems) - 1;
        foreach ($convertedItems as $index => $convertedItem) {
            if ($index === $lastIndex) {
                // Last item, add period
                $convertedItems[$index] = $convertedItem . '.';
            } else {
                // Add comma to all other items
                $convertedItems[$index] = $convertedItem . ',';
            }
        }
    
        // Return the array as a string with each item separated by a space
        return implode(' ', $convertedItems);
    }

    public function modelInfoPage($id)
    {
        $details = ModelDetail::find($id);
        // $details = $this->convertToTitleCaseWithPunctuation($items);
        
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

        // Join with memberships table to filter models with active subscriptions
        $query->whereExists(function ($query) {
            $query->select(DB::raw(1))
                ->from('memberships')
                ->whereColumn('memberships.user_id', 'model_details.user_id');
        });

        $models = $query->get();

        return view('users.pages.featured-modal', [
            'models' => $models,
            'qModels' => $models, // Use $qModels if $role is provided, otherwise use $models
            'languages' => $languages
        ]);
    }


    public function allmodelsPage($role = '', $gender = '')
    {
        // Initialize $models to ensure it's always defined
        $models = collect();
        $languages = json_decode(File::get(public_path('user-assets/languages.json')), true);

        $query = ModelDetail::query();

        // Define subcategories for each main category
        $subcategories = [
            'actors' => ['main_lead', 'featured_actors', 'body_double', 'mime_artist', 'stunt_person', 'extras'],
            'models' => ['high_fashion_editorial', 'fashion_catalogue', 'commercial_models', 'mature_models', 'promotional_models'],
            'dancers_performers' => ['ballet_dancers', 'ballroom_dancers', 'baroque_dancers'],
            'makeup_hair_painter_fashion_stylists' => ['makeup_artists', 'fashion_stylists', 'hair_stylists', 'body_painters'],
            'photographers_videographers' => ['fashion_photographer', 'portrait_photographer', 'landscape_photographer', 'event_videographer', 'wedding_videographer']
        ];

        // If a role is provided, apply the role filter
        if ($role) {
            $query->whereJsonContains('category', $role);

            // Check if musician_categories contains any of the subcategories for the given role
            if (isset($subcategories[$role])) {
                $query->where(function ($query) use ($subcategories, $role) {
                    foreach ($subcategories[$role] as $subcategory) {
                        $query->orWhereJsonContains('musician_categories', $subcategory);
                    }
                });
            }
        }

        // Filter by gender if provided as a query parameter
        if ($gender = request('gender')) {
            $query->where('gender', $gender);
        }

        // Use a left join with memberships to prioritize records with a subscription
        $query->leftJoin('memberships', 'memberships.user_id', '=', 'model_details.user_id')
        ->select('model_details.*')
        ->orderByRaw('memberships.user_id IS NULL, model_details.id');

        $models = $query->get();

        return view('users.pages.all-modal', [
            'models' => $models,
            'qModels' => $models, // Use $qModels if $role is provided, otherwise use $models
            'languages' => $languages
        ]);
    }

    public function allmodelsBySubcategory($subcategory = '', $gender = '')
    {
        // Initialize $models to ensure it's always defined
        $models = collect();
        $languages = json_decode(File::get(public_path('user-assets/languages.json')), true);

        $query = ModelDetail::query();

        // If a specific subcategory is provided, filter directly by it in musician_categories
        if ($subcategory) {
            $query->whereJsonContains('musician_categories', $subcategory);
        }

        // Filter by gender if provided as a query parameter
        if ($gender = request('gender')) {
            $query->where('gender', $gender);
        }

        // Use a left join with memberships to prioritize records with a subscription
        $query->leftJoin('memberships', 'memberships.user_id', '=', 'model_details.user_id')
            ->select('model_details.*')
            ->orderByRaw('memberships.user_id IS NULL, model_details.id');

        $models = $query->get();

        return view('users.pages.all-modal', [
            'models' => $models,
            'qModels' => $models,
            'languages' => $languages
        ]);
    }


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
