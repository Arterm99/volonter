<?php

namespace Database\Factories;

use App\Models\Addres;
use App\Models\Skills;
use App\Models\UserVolonter;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserVolonter>
 */
class UserVolonterFactory extends Factory
{
    protected $model = UserVolonter::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'name' => $this->faker->name,
            'surname' => 'Иванов',
            'patronymic' => 'Иванович',
            'age' => random_int(14 , 65),
            'description' => $this->faker->text,
            'profile_image' =>  'storage/women.jpg',
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'addres_id' => random_int(1 , 5),
            'skills_id' => random_int(1 , 5),


        ];
    }
}
