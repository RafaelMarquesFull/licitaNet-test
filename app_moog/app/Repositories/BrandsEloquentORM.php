<?php 


namespace App\Repositories;

use App\DTO\CreateBrandsDTO;
use App\DTO\UpdateBrandsDTO;
use App\Models\brands;
use App\Repositories\BrandsRepositoryInterface;
use stdClass;


class BrandsEloquentORM  implements BrandsRepositoryInterface
{
    public function __construct(
       protected brands $model 
    ){}
    public function getAll (string $filter = null) : array
    {

        return $this->model
            ->where(function($query) use ($filter){
                if($filter){
                    $query->where('manufacturer', $filter);
                    $query->where('name' , 'like', "%{$filter}%");
                }
            })
            ->get()
            ->toArray();
    }
    public function findOne(string $code_brand) : stdClass | null
    {
        $brands = $this->model->find($code_brand);

        if(!$brands) {
            return null ;
        }
        
        return (object) $brands->toArray();
    }
    
    public function new(CreateBrandsDTO $dto) : stdClass | null
    {   
        $brands = $this->model->create((array) $dto);
        
        return (object) $brands->toArray();
    }
    public function update(UpdateBrandsDTO $dto) : stdClass | null
    {
        if (!$brands = $this->model->find($dto->code_brand)){
            return null; 
        }
        $brands->update((array) $dto);
        $result = new stdClass();
        $result->code_brand = $dto->code_brand;
        $result->name = $dto->name;
        $result->manufacturer = $dto->manufacturer;

        return $result;
    }   
    public function delete (string $code_brand):bool
    {
        $brands = $this->model->findOrFail($code_brand)->delete();
        return $brands;
    }
}