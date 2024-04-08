<?php 

namespace App\Repositories;

use App\DTO\CreateCategoriesDTO;
use App\DTO\UpdateCategoriesDTO;
use stdClass;

interface CategoriesRepositoryInterface
{
    public function getAll (string $filtter = null) : array;

    public function findOne(string $id) : stdClass | null;

    public function new(CreateCategoriesDTO $dto) : stdClass | null;

    public function update(UpdateCategoriesDTO $dto) : stdClass | null;

    public function delete (string $id):bool;
}