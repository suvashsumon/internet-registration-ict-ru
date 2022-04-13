<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RegistrationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_type' => $this->faker->randomElement(['student','staff']),
            'identity_no' => $this->faker->unique()->randomNumber(8),
            'password' => $this->faker->password,
            'name' => $this->faker->name,
            'designation' => $this->faker->jobTitle,
            'department' => $this->faker->randomElement(['CSE','EEE','BBA','MBA','ECE','CIVIL','MECH','MCA']),
            'email' => $this->faker->unique()->safeEmail,
            'mobile_no' => $this->faker->phoneNumber,
            'building_no' => $this->faker->randomElement(['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z']),
            'room_flat_no' => $this->faker->randomNumber(4),
        ];
    }
}
