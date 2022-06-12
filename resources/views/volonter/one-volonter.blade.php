<!-- Ссылка на общую html-разметку (показываем общий шаблон) -->
@extends('head')

<!-- Начало/Конец кода -->
@section('title-block'){{ $table->name }} @endsection

<!-- Начало кода -->
@section('content')

    <div class="container">
        <a href="/volonter" class="mx-auto btn btn-dark">Вернуться назад</a>
     <div>

            <div class="container" style="padding: 4%;">
                <div>
                    <h3>{{ $table->name }}</h3>
                </div>
                <div class="container">
                    <div class="row row-cols-2">
                        <div class="alert alert-light">
                            <div class="row row-cols-3">
                                <span> <h3> {{ $table->name }} </h3> </span>
                                <span> {{ $table->surname }}  </span>
                                <span> {{ $table->patronymic }}  </span>
                            </div>

                            <span style="color: green; text-align: end; font-size: 24px;">Возраст:  {{ $table->age." лет" }} </span>

                            <img class="img-thumbnail" src="{{ asset($table->profile_image)  }}"
                                 title="{{ $table->name }}">

                        </div>
                        <div class="alert alert-light">
                            <h3>Характеристики</h3>
                            <div class="row row-cols-2">
                                <span style="color: grey;">Адрес</span>
                                <span>  {{ $table->address->addres }} </span>
                                <span style="color: grey;">Навыки</span>
                                <span> {{ $table->skills->skills }} </span>
                                <span style="color: grey;">Обо мне</span>
                                <span> {{ $table->description }} </span>
                            </div>


                            {{--                    Удалить профиль--}}
                            <div class="row row-cols-2">
                                <a href="#" class="btn btn-warning">Редактировать
                                    профиль</a>
                                <div class="col">

{{--                                    <form action="#" method="POST">--}}
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger" type="submit">Удалить Профиль</button>
{{--                                    </form>--}}
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
