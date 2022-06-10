<?php

namespace App\Http\Controllers\Volonter;

use App\Http\Controllers\Controller;
use App\Models\AdminPanel;

class DeleteProductController extends BaseController
{
    public function __invoke($id)
    {
        AdminPanel::find($id)->delete();

        return redirect()->route('show');

        /*  "Мягкое" удаление (восстановление)
             AdminPanelFactory::withTrashed()->find(1)->restore();
        */
    }
}
