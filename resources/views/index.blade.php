<!-- Ссылка на общую html-разметку -->
@extends('head')

<!-- Начало/Конец кода -->
@section('title-block')Главная@endsection

<!-- Начало кода -->
@section('content')

    <div class="container bg-indigo-50 p-3 rounded-3" style="max-width: 50%; margin-top: 150px; margin-bottom: 150px">
        <div class="text-center">
            <div class="container ">
                <a href="{{ route('volonter') }}" type="button" class="btn btn-primary">Волонтеры</a>
                <a href="#" type="button" class="btn btn-secondary">Желаю помочь</a>
            </div>
        </div>
    </div>

    <!-- Конец кода -->
@endsection
