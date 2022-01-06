@extends('layouts.main')

@section('content')
    <section>
        <div class="row">
            <div class="col-6 col-12-xsmall">

                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <div class="row gtr-uniform">
                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="col-12 col-12-xsmall">
                            <input id="email" type="email" class="input" name="email"
                                value="{{ $email ?? old('email') }}" required autofocus placeholder="Почта">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="col-12 col-12-xsmall">
                            <input id="password" type="password" class="form-control" name="password" required
                                placeholder="Пароль">
                            @error('password')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-12 col-12-xsmall">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                required placeholder="Повторите пароль">
                        </div>


                        <div class="col-12 col-12-xsmall">
                            <ul class="actions">
                                <button type="submit" class="button">Сбросить</button>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
