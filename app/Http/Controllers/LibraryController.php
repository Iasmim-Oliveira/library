<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BookModel;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $books = BookModel::all();
        $bookId = BookModel::find($request);
        return view('library.index', compact('books', 'bookId'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('library.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataValidated = $request->validated();

        $book = BookModel::create($dataValidated);

        return view('library.index')->withMessage('Book created!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('library.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $book = BookModel::find($id);
        $book->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = BookModel::find($id);
        $book->delete();

        return view('library.index')->withMessage('Book deleted!');
    }
}
