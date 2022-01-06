@extends('layouts.main')

@section('content')
    <section>

        <div class="row">
            <div class="col-6 col-12-xsmall">
                @if (session('status'))
                    <div class="col-12">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="row gtr-uniform">
                        <div class="col-12 col-12-xsmall">
                            <input id="email" type="email" class="input" name="email" value="{{ old('email') }}" required autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 col-12-xsmall">
                            <ul class="actions">
                                <li><button type="submit" class="button primary">Отправить</button></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </section>
@endsection
