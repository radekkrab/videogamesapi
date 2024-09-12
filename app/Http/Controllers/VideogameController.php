<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVideogameRequest;
use App\Models\Videogame;
use App\Services\VideoGameService;
use Illuminate\Http\Request;

class VideogameController extends Controller
{
    protected $videogameService;

    public function __construct(VideoGameService $videogameService) {
        $this->videogameService = $videogameService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Videogame::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVideogameRequest $request)
    {
        return $this->videogameService->storeGame($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Videogame::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return $this->videogameService->updateGame($request->all(), $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->videogameService->deleteGame($id);
    }

    public function videogamesByGenre($genreId) {
        return $this->videogameService->getVideogamesByGenre($genreId);
    }
}
