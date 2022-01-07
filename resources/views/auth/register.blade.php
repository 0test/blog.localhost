@extends('layouts.main')
@section('title','Регистрация')
@section('content')

    <section>
        <form method="post" action="{{ route('register') }}">
            @csrf
            <div class="row">
                <div class="col-6 col-12-xsmall">
                    <div class="row gtr-uniform ">
                        <div class="col-12 col-12-xsmall">
                            <input placeholder="Имя" id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"
                                required autofocus>
                            @error('name')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 col-12-xsmall">
                            <input placeholder="Почта" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required >
                            @error('email')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-12 col-12-xsmall">
                            <input placeholder="Пароль" id="password" type="password" class="form-control" name="password" required>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <div class="col-md-6">
                                <input  placeholder="Повторите пароль" id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <ul class="actions">
                                <li><input type="submit" value="Зар егистрироваться" class="primary"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
