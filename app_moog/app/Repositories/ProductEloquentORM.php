<?php 


namespace App\Repositories;

use App\DTO\CreateProductsDTO;
use App\DTO\UpdateProductsDTO;
use App\Models\products;
use App\Repositories\ProductRepositoryInterface;
use stdClass;


class ProductEloquentORM  implements ProductRepositoryInterface
{
    public function __construct(
       protected products $model 
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
        $product = $this->model->find($code_product);

        if(!$product) {
            return null ;
        }
        
        return (object) $product->toArray();
    }
    
    public function new(CreateProductsDTO $dto) : stdClass | null
    {   
        $product = $this->model->create((array) $dto);
        
        return (object) $product->toArray();
    }
    public function update(UpdateProductsDTO $dto) : stdClass | null
    {
        if (!$product = $this->model->find($dto->code_product)){
            return null; 
        }
        $product->update((array) $dto);
        $result = new stdClass();
        $result->code_product= $dto->code_product;
        $result->name = $dto->name;
        $result->price = $dto->price;
        $result->stock = $dto->stock;
        $result->description = $dto->description ;

        return $result;
    }   
    public function delete (string $code_product):bool
    {
        $product = $this->model->findOrFail($code_product)->delete();
        return $product;
    }
}