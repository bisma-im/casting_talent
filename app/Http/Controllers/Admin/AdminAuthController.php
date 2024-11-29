<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AdminAuthController extends Controller
{
    public function adminLoginPage()
    {
        return view('admin.pages.auth.login');
    }
    public function createJobPage()
    {
        return view('admin.pages.create-job');
    }
    public function storeJob(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'project' => 'required|string|max:255',
            'required' => 'required|string|max:255',
            'date' => 'required|date',
            'timings' => 'required|in:Half Day,Full Day',
            'days' => 'required|integer',
            'payment' => 'nullable|numeric',
            'payment_status' => 'required|in:TBD,Paid,Unpaid',
            'country' => 'required|in:UAE,KSA,Oman',
            'city' => 'required|string|max:255',
            'area' => 'required|string|max:255',
            'transportation' => 'required|in:YES,NO',
            'food' => 'required|in:YES,NO',
            'payment_mode' => 'required|in:CASH,BANK TRANSFER',
            'paid_status' => 'nullable|string|max:255',
        ]);

        // Create the job record in the database
        $job = Job::create([
            'project' => $validatedData['project'],
            'required' => $validatedData['required'],
            'date' => $validatedData['date'],
            'timings' => $validatedData['timings'],
            'days' => $validatedData['days'],
            'payment' => $validatedData['payment'] ?? null,
            'payment_status' => $validatedData['payment_status'],
            'country' => $validatedData['country'],
            'city' => $validatedData['city'],
            'area' => $validatedData['area'],
            'transportation' => $validatedData['transportation'],
            'food' => $validatedData['food'],
            'payment_mode' => $validatedData['payment_mode'],
            'paid_status' => $validatedData['paid_status'],
        ]);

        // Return success response
        return response()->json([
            'success' => true,
            'message' => 'Job created successfully!',
            'job' => $job,
        ]);
    }
    public function adminForgotPage()
    {
        return view('admin.pages.auth.forgot');
    }
    public function adminResetPage($token)
    {
        return view('admin.pages.auth.reset', compact('token'));
    }

    public function adminLoginPost(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|exists:admins',
            'password' => 'required'
        ]);
        if (Auth::guard('admin')->attempt($credentials)) {
            // dd($request->all());
            // Alert::success('Success', 'Admin login successfully !!!');
            return redirect()->route('admin.index.get')->with('success', 'Admin login successfully !!!');
        }
        return back()->with('error', 'Record not matched with data !!!');
    }

    public function adminForgotPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:admins',
        ]);
        // Check if the email already has a password reset token
        $existingToken = DB::table('password_reset_tokens')
            ->where('email', $request->email)
            ->first();

        // If a token exists for the email, do not generate a new token
        if ($existingToken) {
            // Alert::success('Success', 'A password reset token has already been sent to this email address.');
            return back()->with('error', 'A password reset token has already been sent to this email address.');
        }
        $token = mt_rand(100000, 999999);
        // Insert the password reset token
        DB::table('password_reset_tokens')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);
        // Send the email with the password reset link
        Mail::send('emails.admin-password', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Reset Password Link!');
        });
        // Alert::success('Success', 'Successfully sent the reset password link to your email. Please check to verify!');
        return back()->with('success', 'Successfully sent the reset password link to your email. Please check to verify!');
    }

    public function adminResetPost(Request $request)
    {
        $request->validate([
            'email' => 'required | email | exists:admins',
            'password' => 'required | min:8 | same:password',
            'cpassword' => 'required'
        ]);

        $updatePassword = DB::table('password_reset_tokens')
            ->where([
                'email' => $request->email,
                'token' => $request->token
            ])->first();

        if (!$updatePassword) {
            return back()->with('error', 'Something went wrong , password not updated !!!');
        }

        $user = User::where('email', $request->email)
            ->update(['password' => Hash::make($request->password)]);

        DB::table('password_reset_tokens')->where(['email' => $request->email])->delete();
        // Alert::success('Success', 'Successfully update password !!!');

        return redirect()->route('admin.login.get')->with('success', 'Successfully update password !!!');
    }

    //todo: admin logout functionality
    public function adminlogout()
    {
        Auth::guard('admin')->logout();
        // Alert::success('Success', 'Admin Logout Successfully !!!');
        return redirect()->route('admin.login.get')->with('success', 'Logout Successfully !!!');
    }
}
