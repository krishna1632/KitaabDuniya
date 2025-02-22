<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function searchBooks(Request $request)
    {
        $query = $request->get('query');

        $schoolBooks = DB::table('schools')
            ->where('name', 'LIKE', "%{$query}%")
            ->where('status', 1) // ✅ Active books only
            ->select('id', 'name', DB::raw("'school' as type"));

        $graduationBooks = DB::table('graduations')
            ->where('name', 'LIKE', "%{$query}%")
            ->where('status', 1) // ✅ Active books only
            ->select('id', 'name', DB::raw("'graduation' as type"));

        $generalBooks = DB::table('generals')
            ->where('name', 'LIKE', "%{$query}%")
            ->where('status', 1) // ✅ Active books only
            ->select('id', 'name', DB::raw("'general' as type"));

        $competitiveBooks = DB::table('competitives')
            ->where('name', 'LIKE', "%{$query}%")
            ->where('status', 1) // ✅ Active books only
            ->select('id', 'name', DB::raw("'competitive' as type"));

        // Union queries to merge results
        $books = $schoolBooks->union($graduationBooks)->union($generalBooks)->union($competitiveBooks)->get();

        return response()->json($books);
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

    private function getTableColumns($table)
    {
        return DB::getSchemaBuilder()->getColumnListing($table);
    }


    /**
     * Display the specified resource.
     */
    public function show($type, $id)
    {
        // Map type to actual table name
        $table = match ($type) {
            'school' => 'schools',
            'graduation' => 'graduations',
            'general' => 'generals',
            'competitive' => 'competitives',
            default => abort(404)
        };

        // Fetch the selected book details
        $book = DB::table($table)->where('id', $id)->first();

        if (!$book) {
            abort(404);
        }

        // Decode the photos array and get the first image
        $photos = json_decode($book->photos, true); // Convert JSON string to array
        $book->photos = !empty($photos) ? $photos[0] : null; // Get the first image or null if empty

        // Common columns available in all tables
        $columns = ['id', 'userId', 'name', 'price', 'photos', 'description', 'status', 'is_sold'];

        // Use LIKE for better matching (includes similar names)
        $searchName = str_replace(' ', '%', $book->name); // Replace spaces with % for partial matches

        $schoolBooks = DB::table('schools')
            ->where('name', 'LIKE', "%{$searchName}%")
            ->select(array_merge($columns, [DB::raw("'school' as type")]));

        $graduationBooks = DB::table('graduations')
            ->where('name', 'LIKE', "%{$searchName}%")
            ->select(array_merge($columns, [DB::raw("'graduation' as type")]));

        $generalBooks = DB::table('generals')
            ->where('name', 'LIKE', "%{$searchName}%")
            ->select(array_merge($columns, [DB::raw("'general' as type")]));

        $competitiveBooks = DB::table('competitives')
            ->where('name', 'LIKE', "%{$searchName}%")
            ->select(array_merge($columns, [DB::raw("'competitive' as type")]));

        // Merge results from all tables
        $allBooks = $schoolBooks
            ->union($graduationBooks)
            ->union($generalBooks)
            ->union($competitiveBooks)
            ->get();

        // Decode photos for each book and keep only the first image
        foreach ($allBooks as $book) {
            $photos = json_decode($book->photos, true);
            $book->photos = !empty($photos) ? $photos[0] : null;
        }

        return view('search_books.show', compact('allBooks'));
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