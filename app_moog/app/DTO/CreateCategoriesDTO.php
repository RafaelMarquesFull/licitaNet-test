<?php

namespace App\DTO;
use App\Http\Requests\CategoriesCreateRequest;


readonly class CreateCategoriesDTO
{
    public function __construct(
        public string $name,
        public string $description,
        public string $sticker,
    ){}

    public static function makeFromRequest (CategoriesCreateRequest $request)
    {   
        
        return new self (

            $request->name,
            $request->description,
            $request->sticker,

        );
    }
};
