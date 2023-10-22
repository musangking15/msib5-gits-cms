<?php

namespace App\Http\Controllers;

use App\Models\authors;
use App\Http\Requests\StoreauthorsRequest;
use App\Http\Requests\UpdateauthorsRequest;

class AuthorsController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreauthorsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(authors $authors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(authors $authors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateauthorsRequest $request, authors $authors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(authors $authors)
    {
        //
    }
}
