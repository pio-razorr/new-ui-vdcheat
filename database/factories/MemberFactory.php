<?php

namespace Database\Factories;

use App\Models\Member;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Member::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'game' => $this->faker->randomElement(['Point Blank Zepetto', 'Mobile Legends', 'Point Blank Private']),
            'member_id' => strtoupper($this->faker->bothify('????###')), // Generates a random string in the format '????###'
            'serial' => $this->faker->bothify('??????##############'), // Generates a random string in the format '??????##############'
            'expired_date' => Carbon::now()->addDay(),
            'created_by' => $this->faker->randomElement(['resseler', 'resseler_vip', 'admin', 'ceo']),
            'created_at' => Carbon::now(),
        ];
    }
}
