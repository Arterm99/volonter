<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volonters', function (Blueprint $table) {

            $table->id();
            $table->string('name');
            $table->string('surname')->nullable();
            $table->string('patronymic')->nullable();
            $table->string('age')->nullable();

            $table->text('description')->nullable();
            $table->string('profile_image')->default('storage/Белый_квадрат.jpg');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();

            $table->timestamps();

            // "Мягкое удаление"
            $table->softDeletes();


            // Отношение "Один ко многим"
            $table->unsignedBigInteger('addres_id')->nullable();
            $table->unsignedBigInteger('skills_id')->nullable();
            // index - для ускоренной сортировки, фильтрации по ключу
            $table->index('addres_id', 'post_addres_idx');
            $table->index('skills_id', 'post_skills_idx');

            // on - на какую таблицу ссылаться, references - на какую колонку
            $table->foreign('addres_id', 'post_addres_fk')->references('id')->on('addres');
            $table->foreign('skills_id', 'post_skills_fk')->references('id')->on('skills');
            //  $table->foreignId('category_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
