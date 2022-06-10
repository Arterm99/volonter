<!-- Ссылка на общую html-разметку -->
@extends('head')

<!-- Начало/Конец кода -->
@section('title-block')Главная@endsection

<!-- Начало кода -->
@section('content')

    <div>
        <div class="container" style="max-width: 50%;">
            Главная
        </div>

        <div class="container bg-indigo-50 p-3 rounded-3">
            <div class="text-center">
                <div class="container">
                    <a href="{{ route('volonter') }}" type="button" class="btn btn-primary">Волонтеры</a>
                    <a href="{{ route('org') }}" type="button" class="btn btn-secondary">Желаю помочь</a>
                </div>
            </div>
        </div>

    </div>

    <!-- Конец кода -->
@endsection
