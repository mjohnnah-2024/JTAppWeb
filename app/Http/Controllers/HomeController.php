<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

      public function about()
    {
        return view('about');
    }


    
    public function plan()
    {
        return view('hostingplans');
    }

     public function contact()
    {
        return view('contact');
    }

    public function savecontact( Request $request)
    {
        // Handle the contact form submission if needed
        //if ($request->isMethod('post')) {
            // Process the form data here
            // For example, you can validate and save the data or send an email
            $request->validate([
                'firstname' => 'required|string|max:255',
                'lastname' => 'required|string|max:255',
                'query' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'message' => 'required|string',
            ]);
            // You can save the data to the database or send an email here
            // For example:
            //Contact::create($request->all());
            Contact::create([
                'firstname' => $request->input('firstname'),
                'lastname' => $request->input('lastname'),
                'query' => $request->input('query'),
                'email' => $request->input('email'),
                'message' => $request->input('message'),
            ]);
            // Mail::to(' 
            //     ' . config('mail.to.address') . ')->send(new ContactFormSubmitted($request->all()));
            
            // Redirect back with a success message
            return redirect()->back()->with('success', 'Your message has been sent successfully!');
        }
            
    
    }