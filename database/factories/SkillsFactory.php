<?php

namespace Database\Factories;

use App\Models\Addres;
use App\Models\Skills;
use App\Models\UserVolonter;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SkillsFactory extends Factory
{
    protected $model = Skills::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
//            'skills' => random_int('Работа с детьми' , 'Работа с животными' , 'Работа с пожилыми', 'Работа в музеях', 'Верстка презентаций')
            'skills' => random_int(1 , 2)
        ];
    }
}
