<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
$server = 'https://d7.my-control-panel.com:2222';
$user = 'mjohnnah';
$password = 'Kuambe02@';
$endpoint = '/api/db-show/databases';

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $server . $endpoint);
curl_setopt($curl, CURLOPT_USERPWD, $user . ":" . $password);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_FAILONERROR, true);

$response_json = curl_exec($curl);
curl_close($curl);

$response = json_decode($response_json, true);
if (isset($response['error'])) {
    echo "Error: " . $response['error'];
} else {
    echo "<pre>";
    print_r($response);
    echo "</pre>";
    // Process the response as needed
    // For example, you can loop through the databases and display their names
    //foreach ($response as $database) {
       // echo "Database Name: " . $database['name'] . "<br>";
        // Add more fields as needed

    }
    // You can also return the response to a view
    // return view('your_view', ['databases' => $response]);
    // Or return a JSON response
    // return response()->json($response);
    // Or return a JSON response
    // return response()->json($response);
    // Or return a JSON response
    //return response()->json($response);

    //dd($response);

   // return view('dbs', compact( $response));
    return view('dbs', ['databases' => $response]);
}
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
