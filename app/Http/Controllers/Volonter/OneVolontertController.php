<?php

namespace App\Http\Controllers\Volonter;

use App\Http\Controllers\Controller;
use App\Models\AdminPanel;
use App\Models\UserVolonter;

class OneVolontertController extends BaseController
{
    public function __invoke($id)
    {
        $table = new UserVolonter();

        return view('volonter.one-volonter',
            ['table' => $table->find($id)],
//            ['categories' => $categories->find($id)],
//            ['tagcolor' => $tagcolor->find($id)],
        );
    }
}
