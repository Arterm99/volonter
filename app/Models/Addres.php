<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addres extends Model
{
    use HasFactory;

    // Достаем значения по id (категории) .. hasMany - определяет отношение одного объекта с другим .. admin_panel_id - имя бд
    public function volonters() {

        return $this->hasMany(UserVolonter::class, 'addres_id', 'id');
    }
}
