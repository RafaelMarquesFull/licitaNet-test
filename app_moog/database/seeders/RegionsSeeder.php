<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = date("Y-m-d H:i:s");

        DB::table("regions")->insert([
            [
                "code_region" => 1,
                "name"       => "Norte",
                'code_country' => 1,
                "created_at" => $now,
                "updated_at" => $now,
            ],
            [
                "code_region" => 2,
                "name"       => "Sul",
                'code_country' => 1,
                "created_at" => $now,
                "updated_at" => $now,
            ],[
                "code_region" => 3,
                "name"       => "Nordeste",
                'code_country' => 1,
                "created_at" => $now,
                "updated_at" => $now,
            ],[
                "code_region" => 4,
                "name"       => "sudeste",
                'code_country' => 1,
                "created_at" => $now,
                "updated_at" => $now,
            ],[
                "code_region" => 5,
                "name"       => "Centro-oeste",
                'code_country' => 1,
                "created_at" => $now,
                "updated_at" => $now,
            ],
        ]);
    }
}
