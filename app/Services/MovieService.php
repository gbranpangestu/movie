<?php

namespace App\Services;

use App\Interfaces\MovieRepositoryInterface;

class MovieService
{
    protected $movieRepo;

    public function __construct(MovieRepositoryInterface $movieRepo)
    {
        $this->movieRepo = $movieRepo;
    }

    public function getAllMovies($search = null)
    {
        return $this->movieRepo->getAll($search);
    }

    public function createMovie($data)
    {
        return $this->movieRepo->create($data);
    }

    public function updateMovie($movie, $data)
    {
        return $this->movieRepo->update($movie, $data);
    }

    public function deleteMovie($movie)
    {
        return $this->movieRepo->delete($movie);
    }

    public function getMovieById($id)
    {
        return $this->movieRepo->findById($id);
    }

    public function getMoviesPaginate()
    {
        return $this->movieRepo->paginate();
    }
}