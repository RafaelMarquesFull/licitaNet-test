<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = date("Y-m-d H:i:s");
        
        DB::table("roles")->insert([
            [
                'code_role' => 1,
                'name' => "admin",
                'description' => "Todos o adminstradores",
                "created_at" => $now,
                "updated_at" => $now,
            ],[
                'code_role' => 2,
                'name' => "client",
                'description' => "Todos o clientes",
                "created_at" => $now,
                "updated_at" => $now,
            ]
        ]);
    }
}
