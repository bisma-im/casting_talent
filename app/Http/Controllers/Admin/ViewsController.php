<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\ModelDetail;

class ViewsController extends Controller
{
    public function adminDashboard()
    {
        return view('admin.pages.index');
    }

    public function adminUsers()
    {
        $users = User::paginate(20);
        return view('admin.pages.users', compact('users'));
    }

    public function modelInfoPage()
    {
        $models = ModelDetail::paginate(20);
        // dd($models);
        return view('admin.pages.models', compact('models'));
    }

    public function adminQueries(Request $request)
    {
        $perPage = 10; // Adjust as needed
        $contacts = Contact::paginate($perPage)->appends($request->query());
        return view('admin.pages.contacts', compact('contacts'));
    }
}
