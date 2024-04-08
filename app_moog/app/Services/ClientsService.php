<?php

namespace App\Services;

use App\DTO\CreateProductsDTO;
use App\DTO\UpdateProductsDTO;
use App\Repositories\ProductRepositoryInterface;
use stdClass;

class ClientsService 
{
    public function __construct(
        protected  ProductRepositoryInterface $repository, 
    ){}
    public function getAll (string $filtter = null) : array
    {
        return $this->repository->getAll($filtter);
    }
    public function findOne(string $id) : stdClass | null
    {
        return $this->repository->findOne($id);
    }
    public function new(CreateProductsDTO $dto) : stdClass | null
    {   
        return $this->repository->new($dto);
    }
    public function update(UpdateProductsDTO $dto) : stdClass | null
    {
        return $this->repository->update($dto);
    }
    public function delete (string $id) :bool
    {
        return $this->repository->delete($id);
    }
};