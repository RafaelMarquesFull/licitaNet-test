<?php

namespace App\Services;

use App\DTO\CreateBrandsDTO;
use App\DTO\UpdateBrandsDTO;

use App\Repositories\BrandsRepositoryInterface;
use stdClass;

class BrandsService
{
    public function __construct(
        protected  BrandsRepositoryInterface $repository, 
    ){}
    public function getAll (string $filtter = null) : array
    {
        return $this->repository->getAll($filtter);
    }
    public function findOne(string $id) : stdClass | null
    {
        return $this->repository->findOne($id);
    }
    public function new(CreateBrandsDTO $dto) : stdClass | null
    {   
        return $this->repository->new($dto);
    }
    public function update(UpdateBrandsDTO $dto) : stdClass | null
    {
        return $this->repository->update($dto);
    }
    public function delete (string $id) :bool
    {
        return $this->repository->delete($id);
    }
};