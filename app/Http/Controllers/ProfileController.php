<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profile=Profile::all();
        return view ("profiles.index", compact("profile"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $profile=Profile::all();
        return view("profiles.create", compact("profile"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $profile=Profile::create([
            "name"=>$request->name,
            "surname"=>$request->surname,
            "region"=>$request->region,
            "user_id"=> Auth::user()->id,
        ]);
       return redirect(route("show_profile", compact("profile")));
    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        return view("profiles.show", compact("profile"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        // 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profile $profile)
    {
        // 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
