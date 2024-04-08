<?php

namespace App\DTO;
use App\Http\Requests\BrandsCreateRequest;

readonly class CreateBrandsDTO
{
    public function __construct(
        public string $name,
        public string $manufacturer,
        public string $sticker,
    ){}

    public static function makeFromRequest (BrandsCreateRequest $request)
    {   
        
        return new self (

            $request->name,
            $request->manufacturer,
            $request->sticker,
          
        );
    }
};
