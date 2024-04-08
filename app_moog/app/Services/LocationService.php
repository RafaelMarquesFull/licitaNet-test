<?php

namespace App\Services;

use App\Repositories\LocationRepositoryInterface;
use stdClass;

class LocationService
{
    public function __construct(
        protected  LocationRepositoryInterface $repository, 
    ){}
    public function getAll (string $filtter = null) : array
    {
        return $this->repository->getAll($filtter);
    }
    public function findOne(string $id) : stdClass | null
    {
        return $this->repository->findOne($id);
    }
};