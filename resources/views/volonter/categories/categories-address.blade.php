<!-- Ссылка на общую html-разметку -->
@extends('head')

<!-- Начало/Конец кода -->
@section('title-block')Категории@endsection

<!-- Начало кода -->
@section('content')

<div class="container">
    <a href="/volonter" class="mx-auto btn btn-dark">Вернуться назад</a>
<div>

<div class="container" style="padding: 4%;">
    <div>
        <h3>Категории</h3>
    </div>
        <div class="container">
            <div class="row row-cols-3">
                @foreach($address->volonters as $key)
                    <div class="alert alert-light">
                        <div class="row row-cols-2">
                            <span> <h3> {{ $key->name }} </h3> </span>
                            <span> {{ $key->surname }}  </span>
                            <span> {{ $key->patronymic }}  </span>
                            <span style="color: green; text-align: end; font-size: 24px;"> </span>
                            <span> <a href="{{ route('skills', $key->skills_id) }}"> {{ $key->skills->skills }}</a> </span>
                            <span style="color: grey; text-align: end; font-size: 14px;"> {{ $key->age." лет" }} </span>
                        </div>

                        <span> {{ $key->description }} </span>

                        <a href="{{ route('one-volonter', $key->id) }}"> <img class="rounded img-fluid img-thumbnail" src="{{ asset($key->profile_image)  }}" title="{{ $key->name }}"></a>
                        <div class="row">
                            <div class="col">
                                <a href="{{ route('one-volonter', $key->id) }}" class="mx-auto btn btn-outline-dark">Подробнее</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
