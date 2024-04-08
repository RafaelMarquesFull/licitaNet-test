<?php 

namespace App\Repositories;

use App\DTO\CreateBrandsDTO;
use App\DTO\UpdateBrandsDTO;
use stdClass;

interface BrandsRepositoryInterface
{
    public function getAll (string $filtter = null) : array;

    public function findOne(string $id) : stdClass | null;

    public function new(CreateBrandsDTO $dto) : stdClass | null;

    public function update(UpdateBrandsDTO $dto) : stdClass | null;

    public function delete (string $id):bool;
}