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


    public function test(){
        return view('emails.register-notify');
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
            'actors' => ['main_lead', 'featured_actors', 'body_double', 'mime_artist', 'stunt_person', 'extras'],
            'models' => ['high_fashion_editorial', 'fashion_catalogue', 'commercial_models', 'mature_models', 'erotic_photography_model',
                'promotional_models', 'art_models', 'body_parts_models', 'child_models', 'expecting_models', 'fitness_models',
                'freelance_models', 'glamour_models', 'hair_model', 'plus_size_models', 'party_model', 'petite_models', 'runway_models',
                'stock_photography_model', 'swimsuit_lingerie_models'
            ],
            'dancers_performers' => ['ballet_dancers', 'ballroom_dancers', 'ayyala_dancers', 'background_dancers', 'belly_dancers', 'b_boy',
                'break_dancers', 'cabaret_dancer', 'cheerleaders', 'choreographers', 'contemporary_dancers', 'dance_group',
                'dancing_couples', 'fictional_dancers', 'folk_dancer', 'samba_dancers', 'go_go_dancer', 'hip_hop_dancers',
                'kathak_dancer', 'parade_away', 'salsa_dancers', 'sufi_dancer', 'swing_dancers', 'tap_dancers'
            ],
            'film_crew' => ['art_director', 'art_and_costume', 'assistant_director', 'animation_and_graphic_designer', 'copy_writer', 
               'camera_crew', 'crane_operator', 'director', 'DOP', 'sound_crew', 'lighting_crew', 'editor', 'film_maker',
               'film_producer', 'focus_puller_operator', 'line_producer', 'other_film_and_stage_crew', 'post_production_staff',
               'production_manager', 'photographer','runner', 'script_writer', 'sound_engineer', 'videographer'
            ],
            'influencers' => ['beauty_influencers', 'bloggers', 'celebrity', 'fashion_influencers', 'fitness_wellness_influencers', 'food_influencers',
               'gaming_tech_influencers', 'event_influencers', 'lifestyle_influencers', 'mens_products_influencers',
               'travel_influencers', 'womens_products_influencers'
            ],
            'makeup_hair_painter_fashion_stylists' => ['makeup_artists', 'fashion_stylists', 'hair_stylists', 'body_painters', 'creative_makeup_artists',
               'face_painter', 'henna_artist', 'wardrobe_stylist'
            ],
            'musicians' => ['guitarist', 'hobbyist', 'independent_artist', 'independent_label_artist', 'live_performer', 'music_band',
               'musician', 'orchestral_musician', 'producer_composer', 'rapper', 'session_musician', 'singer', 'song_writer', 
               'teacher', 'tv_show_performer', 'violinist'
            ],
            'event_staff_ushers' => ['bartender', 'brand_ambassador', 'caterer', 'chef', 'concierge', 'decorators', 'event_supervisor', 
               'host_or_hostess', 'marketing_coordinator', 'promotional_staff', 'ushers', 'waitress'
            ],
            'presenters_emcees' => ['balloon_decorator', 'bottle_twister', 'caricature', 'clown', 'comedian', 'emcee', 'fire_artist', 'hypnotist',
               'illustrationist', 'jugglers', 'live_statue', 'magician', 'media_reporter', 'news_reader', 'others', 'public_speaker',
               'radio_jockey', 'shadow_performer', 'stand_up_artist', 'stilt_walker', 'unicyclist', 'video_jockey', 'virtual_host', 'voice_over'
            ],
            'celebrity' => [],
            'photographers_videographers' => ['fashion', 'portrait', 'landscape', 'event', 'wedding', 'abstract', 'aerial', 'architecture', 'child',
               'commercial', 'digital', 'documentary', 'film', 'fine_art', 'food', 'lifestyle', 'nature', 'sports', 'street',
               'travel'
            ],
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

        // Check if urls is not null and is an array before mapping
        if (is_array($urls)) {
            $videos = array_map(function ($url) {
                parse_str(parse_url($url, PHP_URL_QUERY), $query);
                return $query['v'] ?? trim(parse_url($url, PHP_URL_PATH), '/');
            }, $urls);
        } else {
            $videos = [];  // Default to an empty array if null or not an array
        }

        $audioFiles = json_decode($details->audio_file, true);

        // Check if fileNames is not empty and is an array
        if (is_array($audioFiles)) {
            // Form full paths for the images
            $audios = array_map(function ($audioFile) {
                return asset('uploads/models/audios/' . $audioFile);
            }, $audioFiles);
        } else {
            $audios = [];
        }

        // Decode the JSON encoded musician categories
        $selectedCategories = json_decode($details->category, true);
        $categoriesToCheck = ['makeup_hair_painter_fashion_stylists', 'photographers_videographers', 'film_crew'];

        // Check to determine if all selected categories are valid and should hide fields
        $shortForm = is_array($selectedCategories) && count($selectedCategories) > 0 && collect($selectedCategories)->every(function ($cat) use ($categoriesToCheck) {
            return in_array($cat, $categoriesToCheck);
        });

        return view('users.pages.model-details', [
            'details' => $details,
            'relatedProfiles' => $relatedProfiles,
            'portfolio' => $portfolio,
            'audios' => $audios,
            'shortForm' => $shortForm,
            'age' => $age,
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
