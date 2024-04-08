<?php

namespace App\DTO;
use App\Http\Requests\CategoriestUpdateRequest;

readonly class UpdateCategoriesDTO
{
    public function __construct(
        public int $code_category,
        public string $name,
        public string $description,
        public string $sticker,
    ){}

    public static function makeFromRequest (CategoriestUpdateRequest $request)
    {   
        
        return new self (
            $request->code_category,
            $request->name,
            $request->description,
            $request->sticker,

        );
    }
};
