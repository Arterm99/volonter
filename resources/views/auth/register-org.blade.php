@extends('head')

<!-- Начало/Конец кода -->
@section('title-block')Главная@endsection

<!-- Начало кода -->
@section('content')
Регистраииця НКО
<div  class="container" style="max-width: 50%;">


    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form method="POST" action="{{ route('register-org') }}">
    @csrf

    <!-- Имя -->
        <div class="form-floating">
            <input class="form-control
                        @error('name') is-invalid @enderror"
                   value="{{ old('name') }}"
                   placeholder="Имя товара"
                   type="text"
                   name="name"
                   required autofocus>
            <label for="floatingInput">Имя</label>

            @error('name')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Фамилия -->
        <div class="form-floating">
            <input class="form-control
                        @error('surname') is-invalid @enderror"
                   value="{{ old('surname') }}"
                   placeholder="Фамилия"
                   type="text"
                   name="surname"
                   required>
            <label for="floatingInput">Фамилия</label>

            @error('surname')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>


        <!-- Отчество -->
        <div class="form-floating">
            <input class="form-control
                        @error('patronymic') is-invalid @enderror"
                   value="{{ old('patronymic') }}"
                   placeholder="Отчество"
                   type="text"
                   name="patronymic"
                   required>
            <label for="floatingInput">Отчество</label>

            @error('patronymic')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>


        <!-- Возраст -->
        <div class="form-floating">
            <input class="form-control
                        @error('age') is-invalid @enderror"
                   value="{{ old('age') }}"
                   placeholder="Возраст"
                   type="text"
                   name="age"
                   required>
            <label for="floatingInput">Возраст</label>

            @error('age')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- email -->
        <div class="form-floating">
            <input class="form-control
                        @error('email') is-invalid @enderror"
                   value="{{ old('email') }}"
                   placeholder="email"
                   type="email"
                   name="email"
                   required>
            <label for="email">Email</label>

            @error('email')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Адрес -->
        <div class="form-floating">
            <input class="form-control
                        @error('address') is-invalid @enderror"
                   value="{{ old('address') }}"
                   placeholder="Адрес"
                   type="text"
                   name="address"
                   required>
            <label for="floatingInput">Адрес</label>

            @error('address')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Навыки -->
        <div class="form-floating">
            <input class="form-control
                        @error('skills') is-invalid @enderror"
                   value="{{ old('skills') }}"
                   placeholder="Навыки"
                   type="text"
                   name="skills"
                   required>
            <label for="floatingInput">Навыки</label>

            @error('skills')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Расскажите о себе -->
        <div class="form-floating mb-3">
                    <textarea class="form-control
                              @error('description') is-invalid @enderror"
                              id="floatingTextarea2"
                              style="height: 100px"
                              placeholder="Расскажите о себе"
                              type="text"
                              name="description">{{ old('description') }}</textarea>
            <label for="floatingTextarea2">Расскажите о себе</label>

            @error('description')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>


        <!-- Password -->
        <div class="form-floating">
            <input class="form-control
                        @error('Password') is-invalid @enderror"
                   value="{{ old('Password') }}"
                   placeholder="Пароль"
                   type="password"
                   name="password"
                   id="password"
                   required autocomplete="new-password">
            <label for="password">Пароль</label>

            @error('Password')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- Password -->
        <div class="form-floating">
            <input class="form-control
                        @error('password_confirmation') is-invalid @enderror"
                   value="{{ old('password_confirmation') }}"
                   placeholder="Подтвердите пароль"
                   type="password"
                   name="password_confirmation"
                   id="password_confirmation"
                   required>
            <label for="password_confirmation">Подтвердите пароль</label>

            @error('password_confirmation')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                {{ __('Уже зарегистрировались?') }}
            </a>

            <x-button class="ml-4">
                {{ __('Зарегистрироваться') }}
            </x-button>
        </div>
    </form>
</div>

@endsection

