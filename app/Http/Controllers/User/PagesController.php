<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ModelDetail;
use Illuminate\Http\Request;

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

    public function modelInfoPage($id)
    {
        $details = ModelDetail::find($id);
        // dd($details);
        return view('users.pages.model-details', compact('details'));
    }

    public function featuredmodelsPage($role = '')
    {
        // Initialize $models to ensure it's always defined
        $models = collect();
        // dd($role);
        if ($role) {
            $qModels = ModelDetail::whereJsonContains('musician_categories', $role)->get();
        } else {
            // Fetch all models if no role is specified
            $models = ModelDetail::all();
        }
        // If you want to debug and see the query result
        // dd($models);
        // Pass both variables to the view
        return view('users.pages.featured-modal', [
            'models' => $models,
            'qModels' => $role ? $qModels : $models // Use $qModels if $role is provided, otherwise use $models
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
