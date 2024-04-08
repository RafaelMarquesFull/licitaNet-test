<?php

namespace App\DTO;
use App\Http\Requests\BrandsUpdateRequest;
use Brick\Math\BigInteger;

readonly class UpdateBrandsDTO
{
    public function __construct(
        public int $code_brand,
        public string $name,
        public string $manufacturer,
        public string $sticker,

    ){}

    public static function makeFromRequest (BrandsUpdateRequest $request)
    {   
        
        return new self (
            $request->code_brand,
            $request->name,
            $request->manufacturer,
            $request->sticker,
          
        );
    }
};
