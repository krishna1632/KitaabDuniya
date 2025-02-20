<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Competitive;

class CompetitiveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("competitives.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'author' => 'required|string',
            'exam' => 'required|string',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'photos' => 'required|array|min:3|max:5',
            'photos.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login')->with('error', 'You need to log in first.');
        }

        $photoPaths = [];
        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $photo) {
                $path = $photo->store('competitive_uploads', 'public');
                $photoPaths[] = $path;
            }
        }


        Competitive::create([
            'userId' => Auth::id(),
            'name' => $request->name,
            'author' => $request->author,
            'exam' => $request->exam,
            'price' => $request->price,
            'photos' => json_encode($photoPaths),
            'description' => $request->description,
            'status' => 0,
            'is_sold' => 0,
        ]);

        return redirect('/')->with('success', 'Book uploaded successfully!');
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
