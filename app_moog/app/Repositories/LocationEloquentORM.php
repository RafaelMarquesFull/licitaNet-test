<?php 


namespace App\Repositories;


use App\Models\cities;
use App\Repositories\LocationRepositoryInterface;
use stdClass;


class LocationEloquentORM implements LocationRepositoryInterface
{
    public function __construct(
       protected cities $model 
    ){}
    public function getAll (string $filter = null) : array
    {
        return $this->model
            ->join('states', 'cities.code_state', '=', 'states.code_state')
            ->select(
                'cities.code_city',
                'cities.name',
                'cities.code_state',
                'states.name as state_name',
                'states.sigla as state_sigla',
                'states.sticker as state_sticker',
                'states.code_region as state_code_region'
            )
            ->get()
            ->toArray();
    }
    public function findOne(string $id) : stdClass | null
    {
        $product = $this->model->find($id);

        if(!$product) {
            return null ;
        }
        
        return (object) $product->toArray();
    }
    
     
}