<?php

namespace Database\Factories;

use App\Models\brands;
use App\Models\categories;
use App\Models\cities;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\products>
 */
class ProductsFactory extends Factory
{
    /**
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   
        $x = 6;
        $images = [];
        for ($i=0; $i < $x; $i++) { 
            $images[] = $this->faker->imageUrl(400,400);
        }

        $name = $this->faker->unique()->sentence();

        return [
            'name'=> $name,
            'price' => $this->faker->randomNumber(2),
            'description' => $this->faker->paragraph(),
            'slug' => Str::slug($name),
            'image'=> json_encode($images), 
            'user_id'=> User::pluck('id')->random(),
            'code_city'=> cities::pluck('code_city')->random(),
            'code_brand'=> brands::pluck('code_brand')->random(),
            'code_category'=> categories::pluck('code_category')->random(),
            'stock'=> $this->faker->randomNumber(2),
        ];
    }

}
