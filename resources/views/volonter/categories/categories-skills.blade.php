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
                @foreach($skills->volonters as $key)
                    <div class="alert alert-light">
                        <div class="row row-cols-2">
                            <span> <h3> {{ $key->name }} </h3> </span>
                            <a href="{{ route('one-volonter', $key->id) }}"> <img class="rounded img-fluid img-thumbnail;" style="width: 50%" src="{{ asset($key->profile_image)  }}" title="{{ $key->name }}"></a>

                            <span style="color: grey; font-size: 14px;"> {{ $key->age." лет" }} </span>
                        </div>
                        <div class="row row-cols-1">
                            <span> <a href="{{ route('address', $key->addres_id) }}"> {{ $key->address->addres }}</a> </span>
                            <span> <a href="{{ route('skills', $key->skills_id) }}"> {{ $key->skills->skills }}</a> </span>
                            <span> {{ $key->description }} </span>
                        </div>

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
