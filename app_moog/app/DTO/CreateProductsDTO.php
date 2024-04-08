<?php

namespace App\DTO;
use App\Http\Requests\ProductCreateRequest;

readonly class CreateProductsDTO
{
    public function __construct(
        public string $name,
        public float $price,
        public string $slug,
        public string $description,
        public string $user_id,
        public int $stock,
        public int $code_city,
        public int $code_brand,
        public int $code_category,
        public string $images
    ){}

    public static function makeFromRequest (ProductCreateRequest $request)
    {   
        $images = $request->request->get('images');
        return new self (

            $request->name,
            $request->price,    
            $request->slug,
            $request->description,
            $request->user_id,
            $request->stock,
            $request->code_city,
            $request->code_brand,
            $request->code_category,
            $images

        );
    }
};
