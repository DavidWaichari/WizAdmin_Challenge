<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;

class HomeController extends Controller
{
    public function loadForm()
    {       
        return view ('welcome');
    }

    public function saveUserInfo(Request $request)
    {
         // Validate form inputs
         $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'date_of_birth' => 'required|date',
            'passport_photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'phone_number' => 'required',
            'years_of_experience' => 'required|numeric',
        ]);

        // Create user
        $user = User::create([
            'first_name' => $request->input('first_name'),
            'middle_name' => $request->input('middle_name'),
            'last_name' => $request->input('last_name'),
        ]);

        // Create profile
        $profile = new Profile([
            'date_of_birth' => $request->input('date_of_birth'),
            'phone_number' => $request->input('phone_number'),
            'years_of_experience' => $request->input('years_of_experience'),
        ]);

        // Handle image upload
        $imagePath = $request->file('passport_photo')->store('uploads/profile', 'public');
        $profile->passport_photo = $imagePath;

        // Save profile with user relationship
        $user->profile()->save($profile);

        // Redirect to success page
        return redirect('/success');  
    }

    public function success()
    {
        return view('success');
    }
}
