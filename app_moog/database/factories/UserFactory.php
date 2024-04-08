<?php

namespace Database\Factories;

use App\Models\cities;
use App\Models\country;
use App\Models\states;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => 'jhon', 
            'last_name' => 'foo',
            'address' => $this->fake()->address(),
            'number' => $this->faker()->randomNumber(2),
            'district' => 'centro',
            'email' => $this->fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
            'code_city'=> cities::pluck('code_city')->random(),
            'code_state'=> states::pluck('code_state')->random(),
            'code_country'=> country::pluck('code_country')->random(),
            'code_role'=> 1,

        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
