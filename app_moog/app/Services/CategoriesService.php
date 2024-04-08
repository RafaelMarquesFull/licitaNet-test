<?php

namespace App\Services;

use App\DTO\CreateCategoriesDTO;
use App\DTO\UpdateCategoriesDTO;
use App\Repositories\CategoriesRepositoryInterface;
use stdClass;

class CategoriesService
{

    
    public function __construct(
        protected  CategoriesRepositoryInterface $repository, 
    ){}
    public function getAll (string $filtter = null) : array
    {
        return $this->repository->getAll($filtter);
    }
    public function findOne(string $id) : stdClass | null
    {
        return $this->repository->findOne($id);
    }
    public function new(CreateCategoriesDTO $dto) : stdClass | null
    {   
        return $this->repository->new($dto);
    }
    public function update(UpdateCategoriesDTO $dto) : stdClass | null
    {
        return $this->repository->update($dto);
    }
    public function delete (string $id) :bool
    {
        return $this->repository->delete($id);
    }
};