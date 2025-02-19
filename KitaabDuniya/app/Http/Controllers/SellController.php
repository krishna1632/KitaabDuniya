<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('sell.index'); // Add the sell page view name
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createSchool()
    {
        return view('sell.create_school');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createGraduation()
    {
        return view('sell.create_graduation');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createGeneral()
    {
        return view('sell.create_general');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createCompetitive()
    {
        return view('sell.create_competitive');
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
