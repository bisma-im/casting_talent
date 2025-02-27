<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Mail\ClientRegisterMail;
use App\Mail\RegisterMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function registerPage()
    {
        return view('users.pages.auth.register');
    }

    public function loginPage()
    {
        return view('users.pages.auth.login');
    }

    public function forgotPage()
    {
        return view('users.pages.auth.forgot');
    }

    public function resetPage($token)
    {
        return view('users.pages.auth.reset', compact('token'));
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'account_type' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'c_password' => 'required|same:password',
        ]);
    
        // Check if the email already exists
        // (This is redundant since you are already validating it in the rules above)
        $existingUser = User::where('email', $request->input('email'))->first();
        if ($existingUser) {
            return redirect()->back()->with('info', 'The email address is already registered.');
        }
    
        // Create a new user instance
        $user = new User();
        $user->fname = $validatedData['fname'];
        $user->lname = $validatedData['lname'];
        $user->role = $validatedData['account_type'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
    
        if ($request->hasFile('profile')) {
            $file = $request->profile;
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/users/'), $fileName);
            $user->profile = $fileName;
        }
    
        // Save the user to the database
        $user->save();

        $emailData = [
            'first_name' => $user->fname,
            'last_name' => $user->lname,
        ];

        // Send the email
        if($request->account_type === 'model')
        {
            Mail::to($user->email)->send(new RegisterMail($emailData));
        }
        else {
            Mail::to($user->email)->send(new ClientRegisterMail($emailData));
        }
    
        // Send email notification to the user
        // Mail::send('emails.register-notify', ['userInfo' => $user], function ($message) use ($user) {
        //     $message->to($user->email);
        //     $message->subject('Registration Notification');
        // });
    
        return redirect()->route('login.get')->with('success', 'Register user successfully');
    }


    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required | email | exists:users',
            'password' => 'required'
        ]);
        if (Auth::attempt($credentials)) {
            if (Auth::user()->role == 'model') {
                return redirect()->route('model-dashboard.get');
            } elseif (Auth::user()->role == 'business') {
                // dd($request->all());
                // Alert::success('Success', 'Login as Service Provider  !!!');
                return redirect()->route('dashboard.get')->with('success', ' Logged in as Client  !!!');
            }
            return redirect()->route('index.get');
        }
        // Alert::error('Not Found!', 'Record not matched with data !!!');
        return back()->with('message', 'Record not matched with data !!!');
    }

    public function forgot(Request $request)
    {
        // dd(0);
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users',
        ]);
        if ($validator->fails()) {
            // Alert::warning('Information!', 'Please enter your email and password !!!');
            return back()->with('warning', 'Please enter your email and password !!!');
        }
        $token = mt_rand(100000, 999999);
        DB::table('password_reset_tokens')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);
        Mail::send('emails.forgot-password', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Reset Password Link');
        });
        // Alert::success('Success', 'Successfully send the reset password link on your email please check to verify !!!');
        return back();
    }

    public function reset(Request $request)
    {
        $request->validate([
            'email' => 'required | email | exists:users',
            'password' => 'required | min:8 | same:password',
            'new_password' => 'required'
        ]);

        $updatePassword = DB::table('password_reset_tokens')
            ->where([
                'email' => $request->email,
                'token' => $request->token
            ])->first();

        if (!$updatePassword) {
            // Alert::error('Ooops', 'Something went wrong , password not updated !!!');
            return back();
        }

        $user = User::where('email', $request->email)
            ->update(['password' => Hash::make($request->password)]);
        DB::table('password_reset_tokens')->where(['email' => $request->email])->delete();
        // Alert::success('Success', 'Successfully update password !!!');
        return redirect()->route('login.get');
    }

    public function logout()
    {
        Auth::logout();
        // Alert::success('Success', 'Logout successfully !!!');
        return redirect()->route('login.get')->with('success', "Logout successfully!");
    }
}
