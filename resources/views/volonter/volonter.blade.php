<!-- Ссылка на общую html-разметку -->
@extends('head')

<!-- Начало/Конец кода -->
@section('title-block')Продуктовая панель@endsection

<!-- Начало кода -->
@section('content')

    <div class="container bg-indigo-50 p-2 rounded-3">
        <div class="">
            <div class="text">
                <a href="{{ route('register-volonter') }}" type="button" class="btn btn-warning">Стать волонтером</a>
            </div>
        </div>
    </div>

    <div class="container bg-indigo-50 p-2 rounded-3">
        <div class="btn-group">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                По адресу
            </button>
            <ul class="dropdown-menu">
                @foreach($address as $key)
                    <li> <a class="dropdown-item" href="{{ route('address', $key->addres_id ) }}"> {{ $key->address->addres }} </a></li>
                @endforeach
            </ul>
        </div>
        <div class="btn-group">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                По новыкам
            </button>
            <ul class="dropdown-menu">
                @foreach($skills as $key)
                    <li> <a class="dropdown-item" href="{{ route('skills', $key->skills_id ) }}"> {{ $key->skills->skills }} </a></li>
                @endforeach
            </ul>
        </div>
    </div>



    <div class="container" style="padding: 4%;">
    @if ($table_name != true)
        <div>
            <h3>Пока пусто</h3>
        </div>
    @else
        <div>
            <h3>Волонтеры</h3>
        </div>
            <div class="container">
                <div class="row row-cols-3">
                    @foreach($table as $key)
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

            <div class="mt-6">
                {{ $table->onEachSide(1)->links() }}
            </div>
    @endif
</div>
@endsection
