<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = date("Y-m-d H:i:s");
        
        DB::table("categories")->insert([
            [
                'code_category' => 1,
                'name' => "Celulares",
                'description' => "Todos o eletronicos sao encotrados aqui",
                'sticker' => "",
                "created_at" => $now,
                "updated_at" => $now,
            ],[
                'code_category' => 2,
                'name' => "Notebooks",
                'description' => "",
                'sticker' => "",
                "created_at" => $now,
                "updated_at" => $now,
            ],[
                'code_category' => 3,
                'name' => "Calçados",
                'description' => "",
                'sticker' => "",
                "created_at" => $now,
                "updated_at" => $now,
            ],[
                'code_category' => 4,
                'name' => "Oculos",
                'description' => "",
                'sticker' => "",
                "created_at" => $now,
                "updated_at" => $now,
            ],[
                'code_category' => 5,
                'name' => "Camisas",
                'description' => "",
                'sticker' => "",
                "created_at" => $now,
                "updated_at" => $now,
            ],[
                'code_category' => 6,
                'name' => "Games",
                'description' => "",
                'sticker' => "",
                "created_at" => $now,
                "updated_at" => $now,
            ],[
                'code_category' => 7,
                'name' => "Calças",
                'description' =>  "",
                'sticker' => "",
                "created_at" => $now,
                "updated_at" => $now,
            ]
        ]);
    }
}
