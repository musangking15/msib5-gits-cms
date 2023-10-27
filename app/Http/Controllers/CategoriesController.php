<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Http\Requests\StorecategoriesRequest;
use App\Http\Requests\UpdatecategoriesRequest;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('category.index')->with([
            'category' => categories::all()
        ]);
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
    public function store(StorecategoriesRequest $request)
    {
        $validate = $request->validated();

        $categories = new categories();
        $categories->category = $request->category;
        $categories->save();

        return redirect('category')->with('msg', 'Category has been successfully added');
    }

    /**
     * Display the specified resource.
     */
    public function show(categories $categories, $id)
    {
        $data = $categories->find($id);
        return view('category.edit')->with([
            'id' => $id,
            'category' => $data->category
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(categories $categories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecategoriesRequest $request, categories $categories, $id)
    {
        $data = $categories->find($id);
        $data->category = $request->category;
        $data->save();

        return redirect('category')->with('msg', 'Category has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(categories $categories, $id)
    {
        $data = $categories->find($id);
        $data->delete();

        return redirect('category')->with('msg', 'Category has been successfully deleted');
    }
}
