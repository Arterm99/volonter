<?php

namespace App\Http\Controllers\Volonter;

use App\Http\Controllers\Controller;
use App\Models\AdminPanel;
use App\Models\Category;
use App\Models\Skills;
use App\Models\UserVolonter;

class SkillsController extends BaseController
{
    public function __invoke($skills_id)
    {
        $table = new UserVolonter();
        $skills = new Skills;

        return view('volonter.categories.categories-skills',
            ['table' => $table->find($skills_id)],
            ['skills' => $skills->find($skills_id)],
        );
    }
}
