<?php

namespace App\Http\Controllers\Volonter;

use App\Http\Controllers\Controller;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Volonter\VolonterRequests;
use App\Models\AdminPanel;
use App\Models\Category;
use App\Models\UserVolonter;

class ShowVolonterController extends BaseController
{
    public function __invoke(VolonterRequests $request)
    {

        $validated = $request->validated();
        /* Фильтр 1. Если существует любой запрос
        $table = AdminPanel::orderBy('id', 'desc')->paginate(100)->fragment('users')->withQueryString();
           if ($request->has('name')) {
           $table->where('weight', '=',  12);
        }
        */

        $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($validated)]);
        // fragment - обавялет хэш, withQueryString() - ссылки для фильтрации | withQueryString - сохраняет ссылки в пагинцаии
        $table = UserVolonter::filter($filter)->orderBy('id', 'desc')->paginate(2)->fragment('users')->withQueryString();


        return view('volonter/volonter', [

            'table' => $table,
          // 'table' => $table->withPath('/admin/users'),
          // Сортировка
          //  'table' => $table->appends(['sort' => 'votes']);,

          // Старое
          //  'table' => $table->orderBy('id', 'desc')->take(6)->get(),
            'table_name' => UserVolonter::exists(),

//            'cat' => $categories

            //  ['ravno' => $ravno->where('category', '=', 'zspr')->get()]
        ]);
    }
}
