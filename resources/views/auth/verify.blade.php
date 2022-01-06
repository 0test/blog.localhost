@extends('layouts.main')

@section('content')
    <section>
        <div class="col-6">
            @if (session('resent'))
                <div class="alert alert-success" role="alert">
                    Отправлено
                </div>
            @endif

            <p>Проверьте вашу почту, там должно быть письмо с подтверждением регистрации</p>
            <p> Если вы не получили письмо, вы можете снова</p>
            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                @csrf
                <button type="submit" class="button">Отправить запрос</button>.
            </form>
    </section>
@endsection
