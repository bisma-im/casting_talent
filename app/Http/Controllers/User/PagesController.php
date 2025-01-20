<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Job;
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

    public function homePage()
    {
        $models = collect();

        $query = ModelDetail::query();

        // Join with memberships table to filter models with active subscriptions
        $query->whereExists(function ($query) {
            $query->select(DB::raw(1))
                ->from('memberships')
                ->whereColumn('memberships.user_id', 'model_details.user_id');
        });

        $models = $query->get();

        return view('users.pages.index', [
            'profiles' => $models,
        ]);
    }

    public function aboutPage()
    {
        return view('users.pages.about');
    }

    public function contactPage()
    {
        return view('users.pages.contact-us');
    }

    public function jobsPage($category = '')
    {
        // Define your categories and subcategories
        $categories = [
            'Actor' => ['Lead role', 'Featured', 'Extras', 'Voice-over Artist', 'Body double', 'Stunt person'],
            'Model' => [],
            'Dancers & Performers' => ['Choreographer', 'Belly Dancer', 'Sufi Dancer', 'Gogo Dancer', 'Performer', 'Ayala Dancer', 'B Boy', 'Dance Groups', 'Tabrey Dancer'],
            'Film Crew' => ['Filmmaker', 'DOP', 'Assistant Director', 'Script Writer', 'Dialog Writer', 'Art Director', 'Production Manager', 'Production Designer', 'Line Producer', 'Focus Puller', 'Camera Operator', 'Lights & Gaffer', 'Crane Operator', 'Sound Engineer', 'Spot Boy'],
            'Influencers' => [],
            'Makeup and Hair' => [],
            'Musicians' => ['Singers', 'Music Band', 'Guitarist', 'Violinist', 'Drummers', 'Bassist', 'Rapper'],
            'Event Staff and Ushers' => ['Hostess', 'Promoter', 'EmCee'],
            'Entertainer / Performers' => ['Standup Artist', 'VJ', 'RJ', 'Public Speaker', 'Magician', 'Bottle Twister'],
            'Celebrity' => [],
            'Photographers & Videographers' => ['Fashion Photographer', 'Portrait Photographer', 'Landscape Photographer', 'Event Videographer', 'Wedding Videographer'],
        ];

        $searchCategories = [$category]; // Start with the main category

        // Check if there are subcategories for the main category and add them to the search array
        if (!empty($categories[$category])) {
            $searchCategories = array_merge($searchCategories, $categories[$category]);
        }

        // Convert each category into a LIKE clause for SQL and then combine them into a single OR condition
        $jobs = Job::where(function ($query) use ($searchCategories) {
            foreach ($searchCategories as $cat) {
                $query->orWhere('required', 'LIKE', '%' . $cat . '%');
            }
        })->get();

        // dd($jobs);
        // Pass the jobs data to the view
        return view('users.pages.our-jobs', [
            'jobs' => $jobs
        ]);
        // return view('users.pages.our-jobs');
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

    public function convertToTitleCaseWithPunctuation($items)
    {
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
        if (!$details) {
            abort(404); // Model not found, handle as needed
        }

        // Calculate age from date_of_birth
        $birthDate = new \DateTime($details->date_of_birth);
        $currentDate = new \DateTime();
        $age = $currentDate->diff($birthDate)->y;

        // Get all related profiles with the same age or nationality
        $relatedProfiles = ModelDetail::where('id', '<>', $id) // Exclude the current model
            ->where(function ($query) use ($age, $details, $birthDate) {
                $startOfYear = $birthDate->format('Y-01-01'); // Start of the birth year
                $endOfYear = $birthDate->format('Y-12-31'); // End of the birth year
                $query->whereBetween('date_of_birth', [$startOfYear, $endOfYear]) // Same age range within the year
                    ->orWhere('nationality', $details->nationality); // Same nationality
            })
            ->get();

        // Decode the JSON encoded image file names
        $fileNames = json_decode($details->profile_images, true);

        // Check if fileNames is not empty and is an array
        if (is_array($fileNames)) {
            // Form full paths for the images
            $portfolio = array_map(function ($fileName) {
                return asset('uploads/models/profiles/' . $fileName);
            }, $fileNames);
        } else {
            $portfolio = [];
        }

        $urls = json_decode($details->video_file, true);

        $videos = array_map(function ($url) {
            parse_str(parse_url($url, PHP_URL_QUERY), $query);
            return $query['v'] ?? trim(parse_url($url, PHP_URL_PATH), '/');
        }, $urls);

        return view('users.pages.model-details', [
            'details' => $details,
            'relatedProfiles' => $relatedProfiles,
            'portfolio' => $portfolio,
            'videos' => $videos
        ]);
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

    public function allmodelsForHomePage($role = '')
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

        // Use an inner join to ensure only records with a subscription are included
        $query->join('memberships', 'memberships.user_id', '=', 'model_details.user_id')
            ->select('model_details.*');

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
