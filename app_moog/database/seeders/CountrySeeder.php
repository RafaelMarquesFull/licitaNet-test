<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = date("Y-m-d H:i:s");

        DB::table("countries")->insert([
            "code_country"=>1,
            "name" => "Brasil",
            "created_at" => $now,
            "updated_at" => $now,
        ]);
    }
}
