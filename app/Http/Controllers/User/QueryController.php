<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Contact;
use App\Models\Membership;
use App\Models\ModelDetail;
use Illuminate\Http\Request;
use App\Models\ProfileDetail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


use Barryvdh\DomPDF\Facade\Pdf;


use Illuminate\Support\Facades\Mail;

class QueryController extends Controller
{
    public function storeQuery(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'calling_number' => 'nullable|string|max:20',
            'whatsapp_number' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        dd($validatedData);

        // Create a new contact entry
        Contact::create($validatedData);
        // Send email notification to the owner
        // Mail::send('emails.query-notify', ['userInfo' => $validatedData], function ($message) use ($request) {
        //     $message->to('info_dev@aimaxdigital.com'); // Replace with the owner's email
        //     $message->subject('Query Notification');
        // });
        return redirect()->back()->with('success', 'Message sent successfully!');
    }

    public function profileInfoStore(Request $request)
    {
        if (!Auth::user()) {
            return back()->with('error', 'Please login or create an account first!');
        }
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'whatsapp_number' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            // 'no_of_days' => 'required|integer',
            // 'no_of_hours' => 'required|integer',
            // 'no_of_talents_male' => 'required|integer',
            // 'no_of_talents_female' => 'required|integer',
            // 'required_talent' => 'required|string|max:255',
            // 'nationalities' => 'required|string|max:255',
            // 'starting_amount' => 'required|numeric',
            // 'maximum_amount' => 'required|numeric',
            // 'project_detail' => 'required|string',
            // 'profile' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Handle file upload
        $fileName = null;
        if ($request->hasFile('profile')) {
            $file = $request->file('profile');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('/uploads/profiles/'), $fileName);
        }

        // Check if the user already has a profile
        $profile = ProfileDetail::where('user_id', Auth::id())->first();

        if ($profile) {
            // Update existing profile
            $profile->first_name = $request->first_name;
            $profile->last_name = $request->last_name;
            $profile->whatsapp_number = $request->whatsapp_number;
            $profile->email = $request->email;
            $profile->no_of_days = $request->no_of_days;
            $profile->no_of_hours = $request->no_of_hours;
            $profile->no_of_talents_male = $request->no_of_talents_male;
            $profile->no_of_talents_female = $request->no_of_talents_female;
            $profile->required_talent = $request->required_talent;
            $profile->nationalities = $request->nationalities;
            $profile->starting_amount = $request->starting_amount;
            $profile->maximum_amount = $request->maximum_amount;
            $profile->project_detail = $request->project_detail;
            $profile->profile_image = $fileName ?? $profile->profile_image; // Keep the old image if new one is not uploaded
            $profile->save();
        } else {
            // Create new profile
            $profile = new ProfileDetail();
            $profile->user_id = Auth::id();
            $profile->first_name = $request->first_name;
            $profile->last_name = $request->last_name;
            $profile->whatsapp_number = $request->whatsapp_number;
            $profile->email = $request->email;
            $profile->no_of_days = $request->no_of_days;
            $profile->no_of_hours = $request->no_of_hours;
            $profile->no_of_talents_male = $request->no_of_talents_male;
            $profile->no_of_talents_female = $request->no_of_talents_female;
            $profile->required_talent = $request->required_talent;
            $profile->nationalities = $request->nationalities;
            $profile->starting_amount = $request->starting_amount;
            $profile->maximum_amount = $request->maximum_amount;
            $profile->project_detail = $request->project_detail;
            $profile->profile_image = $fileName;
            $profile->save();
        }


        return back()->with('success', 'Profile details saved successfully.');
    }

    public function modelInfoStore(Request $request)
    {
        if (!Auth::user()) {
            return back()->with('error', 'Please login or create an account first!');
        }
        $userD = User::where('id', Auth::id())->where('role', 'model')->first();
        if (!empty($userD)) {
            // dd($userD);
            // $member = Membership::where('user_id', $userD->id)->where('payment_id', '!=', '')->first();
            // if (empty($member)) {
            //     return back()->with('error', 'Please make subscription first to create Profile !');
            // }
            $existModel = ModelDetail::where('user_id', Auth::id())->first();
            if (!empty($existModel)) {
                return back()->with('error', 'You have already model profile!');
            }
            // Create a new instance of ModelDetail
            $modelDetail = new ModelDetail();
            // Assign each field from the request
            $modelDetail->first_name = $request->first_name;
            $modelDetail->last_name = $request->last_name;
            $modelDetail->date_of_birth = $request->date_of_birth;
            $modelDetail->gender = $request->gender;
            $modelDetail->nationality = $request->nationality;
            $modelDetail->calling_number = $request->calling_number;
            $modelDetail->whatsapp_number = $request->whatsapp_number;
            $modelDetail->marital_status = $request->marital_status;
            $modelDetail->ethnicity = $request->ethnicity;
            $modelDetail->location = $request->lives_in;
            $modelDetail->biography = $request->biography;
            $modelDetail->languages_spoken = json_encode($request->languages_spoken);
            $modelDetail->driving_license = $request->driving_license;
            $modelDetail->email = $request->email;
            $modelDetail->instagram_username = $request->instagram_username;
            $modelDetail->height = $request->height_cm;
            $modelDetail->bust = $request->bust_cm;
            $modelDetail->waist = $request->waist_cm;
            $modelDetail->hip = $request->hip_cm;
            $modelDetail->weight = $request->weight_kg;
            $modelDetail->eye_color = $request->eyes_color;
            $modelDetail->hair_color = $request->hair_color;
            $modelDetail->hair_length = $request->hair_length;
            $modelDetail->shoe_size = $request->shoe_size_euro;
            $modelDetail->dress_size = $request->dress_size_euro;
            $modelDetail->hourly_rate = $request->hourly_rate;
            $modelDetail->session_rate = $request->session_rate;
            // $modelDetail->visa_status = $request->visa_status;
            $modelDetail->category = json_encode($request->category);
            
            // Handle "have_tattoos" condition
            if ($request->have_tattoos == 'other') {
                $modelDetail->have_tattos = $request->tattoos_other;
            } else {
                $modelDetail->have_tattos = $request->have_tattoos;
    
            }
            // JSON encode the musician_categories field
            $modelDetail->musician_categories = json_encode($request->category_type);
            // Assign the authenticated user's ID
            $modelDetail->user_id = Auth::id();
            // Handle multiple photo uploads
            if ($request->hasFile('profiles')) {
                $filePaths = [];
                foreach ($request->file('profiles') as $file) {
                    $fileName = time() . '_' . $file->getClientOriginalName();
                    $file->move(public_path('uploads/models/profiles/'), $fileName);
                    $filePaths[] = $fileName;
                }
                // JSON encode the file paths
                $modelDetail->profile_images = json_encode($filePaths);
            }
            // Handle profile picture upload
            if ($request->hasFile('profile_pic')) {
                $profilePicture = $request->file('profile_pic');
                $profilePictureName = time() . '_' . $profilePicture->getClientOriginalName();
                $profilePicture->move(public_path('uploads/models/profile-pics/'), $profilePictureName);
                $modelDetail->profile = $profilePictureName;
            }
            // Handle audio file upload
            if ($request->hasFile('audio_file')) {
                $audioFile = $request->file('audio_file');
                $audioFileName = time() . '_' . $audioFile->getClientOriginalName();
                $audioFile->move(public_path('uploads/models/audios/'), $audioFileName);
                $modelDetail->audio_file = $audioFileName;
            }
            // Handle video file upload
            if ($request->hasFile('video_file')) {
                $videoFile = $request->file('video_file');
                $videoFileName = time() . '_' . $videoFile->getClientOriginalName();
                $videoFile->move(public_path('uploads/models/videos/'), $videoFileName);
                $modelDetail->video_file = $videoFileName;
            }
            // dd($modelDetail);
            // Save the model detail to the database
            // Mail::send('emails.model-account-notify', ['userInfo' => $modelDetail], function ($message) use ($modelDetail) {
            //     $message->to('info_dev@aimaxdigital.com');
            //     $message->subject('Model Register Notification');
            // });
            $modelDetail->save();
            return redirect()->back()->with('success', 'Details saved successfully.');
            // Send email notification to the user
        }
        return back()->with('error', 'Please create account first to explore!');
    }


 public function downloadModelDetails($id)
{
   $modelDetail = ModelDetail::find($id);

    // Check if model detail exists
    if (!$modelDetail) {
        return back()->with('error', 'Model details not found.');
    }

    // Assuming the images are stored as JSON in the database
    $images = json_decode($modelDetail->profile_images, true); // Ensure this is an array

    // Create a ZIP file
    $zip = new \ZipArchive();
    $zipFileName = 'Model-Images_' . $modelDetail->id . '.zip';
    $zipPath = storage_path('app/public/' . $zipFileName);

    // Try to create the ZIP file
    if ($zip->open($zipPath, \ZipArchive::CREATE | \ZipArchive::OVERWRITE) !== true) {
        \Log::error("Could not create ZIP file: " . $zip->getStatusString());
        return back()->with('error', 'Could not create ZIP file: ' . $zip->getStatusString());
    }

    // Add images to the ZIP file
    foreach ($images as $image) {
        $imagePath = public_path('uploads/models/profile-pics/' . $image);

        if (file_exists($imagePath)) {
            $zip->addFile($imagePath, $image); // Add the image file to the ZIP
        } else {
            \Log::warning("Image file not found: " . $imagePath);
        }
    }

    // Close the ZIP archive
    $zip->close();

    // Check if the ZIP file was created successfully
    if (!file_exists($zipPath)) {
        return back()->with('error', 'ZIP file was not created.');
    }

    // Return the ZIP file for download
    return response()->download($zipPath)->deleteFileAfterSend(true);
}

public function downloadAllModelImages($id)
{
    $modelDetail = ModelDetail::find($id);

    // Check if model detail exists
    if (!$modelDetail) {
        return back()->with('error', 'Model details not found.');
    }

    // Assuming the images are stored as JSON in the database
    $images = json_decode($modelDetail->profile_images, true); // Ensure this is an array

    // Prepare the file paths
    $filePaths = [];
    foreach ($images as $image) {
        $filePaths[] = public_path('uploads/models/profile-pics/' . $image);
    }

    // Return the array of file paths to the view
    return view('emails.download-images', compact('filePaths'));
}



}
