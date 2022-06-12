<?php

namespace App\Http\Controllers\Volonter;

use App\Http\Controllers\Controller;
use App\Models\Addres;
use App\Models\AdminPanel;
use App\Models\Category;
use App\Models\Skills;
use App\Models\UserVolonter;

class AddressController extends BaseController
{
    public function __invoke($addres_id)
    {
        $table = new UserVolonter();
        $address = new Addres();

        return view('volonter.categories.categories-address',
            ['table' => $table->find($addres_id),
            'address' => $address->find($addres_id),
            ]
        );
    }
}
