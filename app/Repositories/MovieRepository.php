<?php

namespace App\Repositories;

use App\Models\Movie;
use App\Interfaces\MovieRepositoryInterface;

class MovieRepository implements MovieRepositoryInterface
{
    public function getAll($search)
    {
        $query = Movie::latest();

        if ($search) {
            $query->where('judul', 'like', '%' . $search . '%');
        }

        // 🔥 FIX DI SINI
        return $query->paginate(6)->withQueryString();
    }

    public function create($data)
    {
        return Movie::create($data);
    }

    public function update($movie, $data)
    {
        $movie->update($data);
        return $movie;
    }

    public function delete($movie)
    {
        return $movie->delete();
    }

    // 🔥 TAMBAHAN (biar cocok sama Service kamu)
    public function findById($id)
    {
        return Movie::findOrFail($id);
    }

    public function paginate()
    {
        return Movie::latest()->paginate(10);
    }
}