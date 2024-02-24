<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'username' => $this->faker->unique()->userName,
            'no_hp' => $this->faker->phoneNumber,
            'password' => bcrypt('password'), // Anda dapat menggunakan Hash::make('password') jika versi Laravel Anda kurang dari 5.8
            'role' => $this->faker->randomElement(['resseler', 'resseler_vip','admin', 'ceo']),
            'saldo' => $this->faker->numberBetween(0, 1000000),
            'created_by' => $this->faker->randomElement(['admin', 'ceo']),
            'instagram' => $this->faker->optional()->url,
            'facebook' => $this->faker->optional()->url,
            'expired_date' => $this->faker->dateTimeBetween('now', '+1 year'),
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
