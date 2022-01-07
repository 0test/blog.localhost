@extends('layouts.main')
@section('title', 'Вход')
@section('content')

    <section>
        <form method="post" action="{{ route('login') }}">
            @csrf
            <div class="row">
                <div class="col-6 col-12-xsmall">
                    <div class="row gtr-uniform ">
                        <div class="col-12 col-12-xsmall">
                            <input type="email" name="email" value="{{ old('email') }}" placeholder="Почта">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 col-12-xsmall">
                            <input type="text" name="password" value="" placeholder="Пароль">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12 col-12-xsmall">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">Запомнить меня</label>
                        </div>
                        <div class="col-12">
                            <ul class="actions">
                                <li><input type="submit" value="Войти" class="primary"></li>
                                <li><a href="{{ route('register') }}" class="button">Регистрация</a></li>
                                <li>
                                    <a class="button" href="{{ route('password.request') }}">Вспомнить пароль</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endsection
