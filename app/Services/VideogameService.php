<?php 

namespace App\Services;

use App\Models\Videogame;
use Illuminate\Support\Facades\DB;

class VideoGameService {

    public function storeGame ($game) {
        $videogame = Videogame::create($game);
        $this->syncGenres($videogame, $game['genres']);
        return $videogame;

    }

    public function updateGame ($game, $id) {
        $videogame = Videogame::findOrFail($id);
        $videogame->update($game);
        if(isset($game['genres'])) $this->syncGenres($videogame, $game['genres']);
        return $videogame;
    }

    public function deleteGame($id) {
        $videogame = Videogame::findOrFail($id);
        $videogame->delete();
        return response()->noContent();
    }

    public function getVideogamesByGenre($genreId) {
        return Videogame::with('genre')
            ->whereHas('genre', function ($query) use ($genreId) {
                $query->where('genre_id', $genreId);
            })
            ->get();
    }

    private function syncGenres($videogame, $genres)
    {
        if ($genres) {
            $videogame->genre()->sync($genres);
        }
    }
}