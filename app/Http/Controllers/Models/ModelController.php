<?php

namespace App\Http\Controllers\Models;

use Carbon\Carbon;
use App\Models\User;
use App\Models\JobDetail;
use App\Models\Membership;
use App\Models\ModelDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\JobApplied;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ModelController extends Controller
{
    public function dashboardPage()
    {
        return view('users.pages.dashboard');
    }

    public function modelDashboardPage()
    {
        return view('users.pages.modeling.model-dashboard');
    }

    public function jobInfoStore(Request $request)
    {
        if (!Auth::user()) {
            return back()->with('error', 'Please login or create an account first!');
        }
        // dd($request->all());
        // Validate your input data
        $validatedData = $request->validate([
            'title' => 'required|string',
            'gender' => 'required|string',
            'nationality' => 'required|string',
            'lives_in' => 'required|string',
            'biography' => 'nullable|string',
            'languages_spoken' => 'required|array', // Change to array
            'email' => 'required|email',
            'height_cm' => 'required|string',
            'bust_cm' => 'nullable|string',
            'waist_cm' => 'nullable|string',
            'hip_cm' => 'nullable|string',
            'weight_kg' => 'required|string',
            'eyes_color' => 'required|string',
            'hair_color' => 'required|string',
            'hair_length' => 'required|string',
            'shoe_size_euro' => 'required|string',
            'dress_size_euro' => 'required|string',
            'hourly_rate' => 'nullable|string',
            'category_type' => 'required|array', // Change to array
            // 'job_file' => 'nullable|file|mimes:jpg,jpeg,png,pdf' // Add file validation
        ]);

        // Create a new jobDetail instance
        $jobDetail = new JobDetail();
        $jobDetail->user_id = auth()->id(); // Associating the model with the authenticated user
        $jobDetail->title = $validatedData['title'];
        $jobDetail->gender = $validatedData['gender'];
        $jobDetail->nationality = $validatedData['nationality'];
        $jobDetail->location = $validatedData['lives_in'];
        $jobDetail->biography = $validatedData['biography'];
        $jobDetail->languages_spoken = json_encode($validatedData['languages_spoken']);
        $jobDetail->email = $validatedData['email'];
        $jobDetail->height = $validatedData['height_cm'];
        $jobDetail->bust = $validatedData['bust_cm'];
        $jobDetail->waist = $validatedData['waist_cm'];
        $jobDetail->hip = $validatedData['hip_cm'];
        $jobDetail->weight = $validatedData['weight_kg'];
        $jobDetail->eye_color = $validatedData['eyes_color'];
        $jobDetail->hair_color = $validatedData['hair_color'];
        $jobDetail->hair_length = $validatedData['hair_length'];
        $jobDetail->shoe_size = $validatedData['shoe_size_euro'];
        $jobDetail->dress_size = $validatedData['dress_size_euro'];
        $jobDetail->hourly_rate = $validatedData['hourly_rate'];
        
        $jobDetail->no_of_days = $request->no_of_days;
        $jobDetail->no_of_hours = $request->no_of_hours;
        $jobDetail->no_of_talents_male = $request->no_of_talents_male;
        $jobDetail->no_of_talents_female = $request->no_of_talents_female;
        $jobDetail->required_talent = $request->required_talent;
        $jobDetail->nationalities = $request->nationalities;
        $jobDetail->starting_amount = $request->starting_amount;
        $jobDetail->maximum_amount = $request->maximum_amount;
        
        $jobDetail->category_type = json_encode($validatedData['category_type']); // Save as JSON
        $jobDetail->category = 'hiring'; // Default value for category

        // Handle file upload
        if ($request->hasFile('job_file')) {
            $file = $request->file('job_file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/job-files/'), $fileName);
            $jobDetail->job_profile = $fileName; // Save the file name
        }
        // dd($jobDetail);
        // Save the job details
        $jobDetail->save();
        // Send email notification to the owner (or specified email address)
        // Mail::send('emails.jobs-notify', ['jobDetail' => $jobDetail], function ($message) use ($jobDetail) {
        //     $message->to('info_dev@aimaxdigital.com');
        //     $message->subject('Jobs Notification');
        // });
        // Filter users based on matching criteria
        $usersMatched = ModelDetail::where(function ($query) use ($validatedData) {
            $query->where('height', $validatedData['height_cm'])
                ->orWhere('weight', $validatedData['weight_kg'])
                ->orWhere('hair_color', $validatedData['hair_color'])
                ->orWhere('eye_color', $validatedData['eyes_color']);
            // Add more criteria as needed
        })->get();

        // Send email notification to the matched users
        // if ($usersMatched->isNotEmpty()) {
        //     foreach ($usersMatched as $userModelData) {
        //         Mail::send('emails.jobs-notify', ['jobDetail' => $jobDetail], function ($message) use ($userModelData) {
        //             $message->to($userModelData->email); // Send to the matched user's email
        //             $message->subject('Jobs Notification');
        //         });
        //     }
        // }

        return redirect()->back()->with('success', 'Details saved successfully.');
    }

    public function jobsApply($id)
    {
        if (!Auth::user()) {
            return back()->with('error', 'Please login or create an account first!');
        }
        
        $modelExist = ModelDetail::where('user_id', Auth::user()->id)->first(); 
        if (!$modelExist) {
            return back()->with('error', 'Please create an Model Profile!');
        }
        // dd($request->all());
        // Create a new jobDetail instance
        $jobDetail = JobDetail::find($id);
        $jobApplied = new JobApplied();
        $jobApplied->job_id = $jobDetail->id;
        $jobApplied->job_poster_id = $jobDetail->user_id;
        $jobApplied->job_applier_id = Auth::user()->id;
        // dd($jobDetail,$jobApplied);
        $jobApplied->save();
        // Send email notification to the matched users
        // if ($jobApplied) {
        //     $userMatched = User::where('id', $jobDetail->user_id)->first();
        //     Mail::send('emails.job-applied', ['jobDetail' => $jobDetail], function ($message) use ($userMatched) {
        //         $message->to($userMatched->email); // Send to the matched user's email
        //         $message->subject('Jobs Applied Notification');
        //     });
        // }
        return redirect()->back()->with('success', 'Job Applied Successfully !!!');
    }

    public function stripeCheckoutPost(Request $request)
    {

        // Check if the user already has an active subscription for the selected package
        $existingSubscription = Membership::where('user_id', Auth::id())
            ->first();

        if ($existingSubscription) {
            return redirect()->back()->with('error', 'You already have an active subscription.');
        }
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $redirectUrl = route('stripe.checkout.success') . '?session_id={CHECKOUT_SESSION_ID}';

        // Store additional data in the session
        session([
            'package_name' => $request->input('package_name'),
            // Add more data as needed
        ]);

        $response =  $stripe->checkout->sessions->create([
            'success_url' => $redirectUrl,
            'customer_email' => Auth::user()->email,
            'payment_method_types' => ['link', 'card'],
            'line_items' => [
                [
                    'price_data'  => [
                        'product_data' => [
                            'name' => 'Subscription Package',
                        ],
                        'unit_amount'  => 100 * $request->package_price,
                        'currency'     => 'USD',
                    ],
                    'quantity'    => 1
                ],
            ],
            'mode' => 'payment',
            'allow_promotion_codes' => true
        ]);

        return redirect($response['url']);
    }

    public function stripeCheckoutSuccess(Request $request)
    {
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $session = $stripe->checkout->sessions->retrieve($request->session_id);

        // Retrieve additional data from the session
        $packageName = session('package_name');
        // Assuming your Membership table has fields like user_id, payment_id, package_name, package_price, and status
        $membership = new Membership();
        $membership->user_id = Auth::id(); // Get the authenticated user's ID
        $membership->payment_id = $session->payment_intent; // Save the payment intent ID from Stripe
        $membership->package_name = $packageName;
        $membership->subscription_date = Carbon::now(); // Get the package name from the request
        $membership->package_price = $session->amount_total / 100; // Save the total amount (in USD)
        // Save other data as needed from the request
        $membership->status = 1; // Set status (active/inactive etc. based on your logic)
        $membership->save(); // Save the data to the database
        return redirect()->back()->with('success', 'Payment successful.');
    }

    public function downloadImagesPdf(Request $request)
    {
        // Get the images array from the request or fetch from the backend as needed.
        $images = [
            '/user-assets/model-images/model1.jpg',
            '/user-assets/model-images/model2.jpg',
            '/user-assets/model-images/model3.jpg',
            '/user-assets/model-images/model4.jpg',
            '/user-assets/model-images/model4.jpg'
        ]; 

        // Generate the PDF with the view and pass the images array to it.
        $pdf = PDF::loadView('users.pages.modeling.portfolio-pdf', compact('images'));
        return $pdf->setPaper('a4', 'landscape')->download('portfolio.pdf');

        // return $pdf->download('portfolio.pdf');
    }
}
