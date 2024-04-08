<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\cities;
use App\Models\country;
use App\Models\roles;
use App\Models\states;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{   
    protected static ?string $password;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = date("Y-m-d H:i:s");

        $admin = roles::where('name', 'Admin')->first();

        User::create([
            'first_name' => 'jhon', 
            'email' => 'admin@exemple.com.br',
            'email_verified_at' => $now,
            'password' => static::$password ??= Hash::make('admin123'),
            'remember_token' => Str::random(10),
            'code_city'=> cities::pluck('code_city')->random(),
            'code_state'=> states::pluck('code_state')->random(),
            'code_country'=> country::pluck('code_country')->random(),
            'code_role'=> $admin->id,
            "created_at" => $now,
            "updated_at" => $now,
        ]);
    }
}
