<?php

namespace Database\Seeders;

use App\Models\Addres;
use App\Models\Skills;
use App\Models\UserVolonter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {



        UserVolonter::factory(10)->create();
//        Addres::factory(5)->create();
//        Skills::factory(5)->create();


    }
}
