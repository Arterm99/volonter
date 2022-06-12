<?php

namespace App\Http\Controllers\Volonter;

use App\Http\Controllers\Controller;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Volonter\VolonterRequests;
use App\Models\Addres;
use App\Models\AdminPanel;
use App\Models\Skills;
use App\Models\UserVolonter;

class ShowVolonterController extends BaseController
{
    public function __invoke(VolonterRequests $request)
    {

        $validated = $request->validated();

        $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($validated)]);
        // fragment - обавялет хэш, withQueryString() - ссылки для фильтрации | withQueryString - сохраняет ссылки в пагинцаии | inRandomOrder() - рандомная сортировка
        $table = UserVolonter::filter($filter)->inRandomOrder()->paginate(12)->fragment('users')->withQueryString();


        $address = Addres::all();
        $skills = Skills::all();

        return view('volonter.volonter', [

            'table' => $table,
            'table_name' => UserVolonter::exists(),

            'address' => $address,
            'skills' => $skills,

        ]);
    }
}
