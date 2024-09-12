<?php

namespace App\Http\Controllers;

use App\Models\Developer;
use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Developer::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255|unique:developers',
        ]);
        return Developer::create($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Developer::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $developer = Developer::findOrFail($id);
        $developer->update($request->all());
        return $developer;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $developer = Developer::findOrFail($id);
        $developer->delete();
        return response()->noContent();
    }
}
