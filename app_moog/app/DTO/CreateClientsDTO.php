<?php

namespace App\DTO;
use Brick\Math\BigInteger;

readonly class CreateClientesDTO
{
    public function __construct(
        public string $first_name,
        public float $last_name,
        public string $address,
        public string $number,
        public string $district,
        public BigInteger $code_city,
        public BigInteger $code_state,
        public BigInteger $code_role,
        public string $email,
        public string $email_verified_at,
        public string $password,

    ){}

    public static function makeFromRequest ( $request)
    {   
        
        return new self (
            $request->first_name,
            $request->last_name,
            $request->district,
            $request->address,
            $request->number,
            $request->code_city,
            $request->code_state,
            $request->code_role,
            $request->email,
            $request->email_verified_at,
            $request->password,
        );
    }
};
