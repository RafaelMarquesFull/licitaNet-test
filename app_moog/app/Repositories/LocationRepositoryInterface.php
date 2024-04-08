<?php 

namespace App\Repositories;

use App\DTO\CreateProductsDTO;
use App\DTO\UpdateProductsDTO;
use stdClass;

interface LocationRepositoryInterface
{
    public function getAll (string $filtter = null) : array;

    public function findOne(string $id) : stdClass | null;


}