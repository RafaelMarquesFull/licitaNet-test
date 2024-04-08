<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = date("Y-m-d H:i:s");
        
        DB::table("brands")->insert([
            [
                'code_brand' => 1,
                'name' => "Adidas",
                'manufacturer' => "Adidas",
                'sticker' => "",
                "created_at" => $now,
                "updated_at" => $now,
            ],[
                'code_brand' => 2,
                'name' => "Nike",
                'manufacturer' => "Nike",
                'sticker' => "",
                "created_at" => $now,
                "updated_at" => $now,
            ],[
                'code_brand' => 3,
                'name' => "Gucci",
                'manufacturer' => "Gucci",
                'sticker' => "",
                "created_at" => $now,
                "updated_at" => $now,
            ],[
                'code_brand' => 4,
                'name' => "Boss",
                'manufacturer' => "Boss",
                'sticker' => "",
                "created_at" => $now,
                "updated_at" => $now,
            ],[
                'code_brand' => 5,
                'name' => "Vestem",
                'manufacturer' => "Vestem",
                'sticker' => "",
                "created_at" => $now,
                "updated_at" => $now,
            ],[
                'code_brand' => 6,
                'name' => "Apple",
                'manufacturer' => "Apple",
                'sticker' => "",
                "created_at" => $now,
                "updated_at" => $now,
            ],[
                'code_brand' => 7,
                'name' => "Samsung",
                'manufacturer' =>  "Samsung",
                'sticker' => "",
                "created_at" => $now,
                "updated_at" => $now,
            ],[
                'code_brand' => 8,
                'name' => "Motorola",
                'manufacturer' => "Motorola",
                'sticker' => "",
                "created_at" => $now,
                "updated_at" => $now,
            ],[
                'code_brand' => 9,
                'name' => "Panasonic",
                'manufacturer' => "Panasonic",
                'sticker' => "",
                "created_at" => $now,
                "updated_at" => $now,
            ],[
                'code_brand' => 10,
                'name' => "Dell",
                'manufacturer' => "Motorola",
                'sticker' => "",
                "created_at" => $now,
                "updated_at" => $now,
            ],
            [
                'code_brand' => 11,
                'name' => "Vaio",
                'manufacturer' => "Vaio",
                'sticker' => "",
                "created_at" => $now,
                "updated_at" => $now,
            ],
        ]);
    }
}
