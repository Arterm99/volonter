<?php

namespace Database\Factories;

use App\Models\Addres;
use App\Models\UserVolonter;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AddresFactory extends Factory
{
    protected $model = Addres::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
//            'addres' => random_int('В пределах 1 км' , 'В пределах 3 км' , 'В пределах 5 км', 'В пределах 7 км')
            'addres' => random_int(1 , 2)
        ];
    }
}
