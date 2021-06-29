<?php

namespace Database\Factories;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AdminFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Admin::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => "Admin",
            'email' => "admin@mail.com",
            'email_verified_at' => now(),
            'password' => '$2y$10$A.PpJPwZ9e8dyBFALP0PPO2uYPLmqA5r1twIwqG3K8c7.d8IP1ju6', // Password
            'remember_token' => Str::random(10),
        ];
    }
}
