<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\School;
use App\Models\Graduation;
use App\Models\General;
use App\Models\Competitive;

class MySalesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::id(); // Current logged-in user ID

        // Fetch books from all tables where status = 1
        $schoolBooks = School::where('userId', $userId)->where('status', 1)->get();
        $generalBooks = General::where('userId', $userId)->where('status', 1)->get();
        $graduationBooks = Graduation::where('userId', $userId)->where('status', 1)->get();
        $competitiveBooks = Competitive::where('userId', $userId)->where('status', 1)->get();

        // Merge all books into a single collection
        $books = $schoolBooks->merge($generalBooks)->merge($graduationBooks)->merge($competitiveBooks)->values();

        // dd($books);
        // dd($schoolBooks, $generalBooks, $graduationBooks, $competitiveBooks);


        return view('sales.index', compact('books'));
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
