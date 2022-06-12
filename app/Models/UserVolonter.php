<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class UserVolonter extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

//    "Мягкое удаление"
    use SoftDeletes;
//    "подгрежаем метод Filter из Models\Traits\Filterable"
    use Filterable;


    protected $table = 'volonters';
    protected $guarded = []; // Разрешает вносить значения в БД


// Категории. Достаем значения по id (категории) .. belongs - "принадлежит" .. admin_panel_id - имя бд
    public function address() {

        return $this->belongsTo(Addres::class, 'addres_id', 'id');
    }

    public function skills() {

        return $this->belongsTo(Skills::class, 'skills_id', 'id');
    }


}
