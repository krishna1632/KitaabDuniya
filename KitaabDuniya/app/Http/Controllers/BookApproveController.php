<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use App\Models\Graduation;
use App\Models\General;
use App\Models\Competitive;

class BookApproveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schoolBooks = School::with('user')->orderBy('created_at', 'desc')->get();
        $graduationBooks = Graduation::with('user')->orderBy('created_at', 'desc')->get();
        $generalBooks = General::with('user')->orderBy('created_at', 'desc')->get();
        $competitiveBooks = Competitive::with('user')->orderBy('created_at', 'desc')->get();

        // Combine all books and sort by latest uploaded
        $allBooks = collect()
            ->merge($schoolBooks)
            ->merge($graduationBooks)
            ->merge($generalBooks)
            ->merge($competitiveBooks)
            ->sortByDesc('created_at');

        return view('approve_book.index', compact('allBooks'));
    }



    public function approveBook(Request $request, $id)
    {
        $models = [
            'school' => School::class,
            'graduation' => Graduation::class,
            'competitive' => Competitive::class,
            'general' => General::class,
        ];

        $type = strtolower($request->input('type'));

        if (!isset($models[$type])) {
            return back()->with('error', 'Invalid book type');
        }

        $book = $models[$type]::find($id);

        if ($book) {
            $book->status = 1;
            $book->save();

            return back()->with('success', "Book added to $type table successfully!");
        } else {
            return back()->with('error', 'Book not found');
        }
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
