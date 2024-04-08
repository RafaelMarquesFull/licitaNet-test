<?php 

namespace App\Repositories;

use App\DTO\CreateProductsDTO;
use App\DTO\UpdateProductsDTO;
use stdClass;

interface ProductRepositoryInterface
{
    public function getAll (string $filtter = null) : array;

    public function findOne(string $id) : stdClass | null;

    public function new(CreateProductsDTO $dto) : stdClass | null;

    public function update(UpdateProductsDTO $dto) : stdClass | null;

    public function delete (string $id):bool;
}