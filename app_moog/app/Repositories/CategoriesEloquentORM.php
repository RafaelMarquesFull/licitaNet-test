<?php 


namespace App\Repositories;

use App\DTO\CreateCategoriesDTO;
use App\DTO\UpdateCategoriesDTO;
use App\Models\categories;
use App\Repositories\CategoriesRepositoryInterface;
use stdClass;


class CategoriesEloquentORM  implements CategoriesRepositoryInterface
{
    public function __construct(
       protected categories $model 
    ){}
    public function getAll (string $filter = null) : array
    {
        return $this->model
            ->where(function($query) use ($filter){
                if($filter){
                    $query->where('category_code', $filter);
                    $query->where('name' , 'like', "%{$filter}%");
                }
            })
            ->get()
            ->toArray();
    }
    public function findOne(string $code_product) : stdClass | null
    {
        $category = $this->model->find($code_product);

        if(!$category) {
            return null ;
        }
        
        return (object) $category->toArray();
    }
    
    public function new(CreateCategoriesDTO $dto) : stdClass | null
    {   
        $category = $this->model->create((array) $dto);
        
        return (object) $category->toArray();
    }
    public function update(UpdateCategoriesDTO $dto) : stdClass | null
    {
        if (!$category = $this->model->find($dto->code_category)){
            return null; 
        }
        $category->update((array) $dto);
        $result = new stdClass();
        $result->code_category = $dto->code_category;
        $result->name = $dto->name;
        $result->description = $dto->description ;

        return $result;
    }   
    public function delete (string $code_category):bool
    {
        $category = $this->model->findOrFail($code_category)->delete();
        return $category;
    }
}