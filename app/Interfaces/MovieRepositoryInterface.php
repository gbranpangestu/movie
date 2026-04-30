<?php
namespace App\Interfaces;

interface MovieRepositoryInterface
{
    public function getAll($search);
    public function create($data);
    public function update($movie, $data);
    public function delete($movie);
}