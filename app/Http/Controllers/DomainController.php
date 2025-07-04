<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use App\Http\Requests\StoreDomainRequest;
use App\Http\Requests\UpdateDomainRequest;
use Illuminate\Http\Request;

class DomainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all domains from the database
        $domains = Domain::all();

        // Return the view with the list of domains
        return view('domain.index', compact('domains'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('domain.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'domain_name' => 'required|string|max:255',
            'domain_type' => 'required|string|max:50', // .com, .net, .org, etc.
            'company_name' => 'required|string|max:255',
            'notes' => 'nullable|string',
            'contact_email' => 'required|email|max:255',
            'contact_phone' => 'nullable|string|max:20',
            'contact_name' => 'required|string|max:255',
            'ipa_number' => 'required|string|max:80',
        ]);
        // Create a new domain record
        Domain::create([
            'domain_name' => $request->input('domain_name'),
            'domain_type' => $request->input('domain_type'),
            'company_name' => $request->input('company_name'),
            'notes' => $request->input('notes'),
            'contact_email' => $request->input('contact_email'),
            'contact_phone' => $request->input('contact_phone'),
            'contact_name' => $request->input('contact_name'),
            'ipa_number' => $request->input('ipa_number'),
            //'status' => 'new', // Default status
        ]);
      //  $validatedData = $request->validated();

        /* $dData = [ 
           'domain_name' => 'required|string|max:255|unique:domains,name',
            'domain_type' => 'nullable|string|max:50', // .com, .net, .org, etc.           
            'company_name' => 'nullable|string|max:255',
            'notes' => 'nullable|string',
            'contact_email' => 'nullable|email|max:255',
            'contact_phone' => 'nullable|string|max:20',
            'contact_name' => 'nullable|string|max:255',
            'ipa_number' => 'nullable|string|max:50',
            //'status' => 'required|string|in:new,active,inactive',
      ];

        // Create a new domain record
       /*   Domain::create([
            'domain_name' => $validatedData['domain_name'],
            'domain_type' => $validatedData['domain_type'],
            'company_name' => $validatedData['company_name'],
            'notes' => $validatedData['notes'],
            'contact_email' => $validatedData['contact_email'],
            'contact_phone' => $validatedData['contact_phone'],
            'contact_name' => $validatedData['contact_name'],
            'ipa_number' => $validatedData['ipa_number'],
            'status' => $validatedData['status'],
        ]);
        */

        return redirect()->back()->with('success', 'Domain registration form submitted successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Domain $domain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Domain $domain)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Domain $domain)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Domain $domain)
    {
        //
    }
}
