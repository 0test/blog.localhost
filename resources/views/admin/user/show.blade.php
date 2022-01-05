@extends('admin.layouts.main')
@section('title', 'Просмотр юзера')

@section('content')
    <section>
        <header class="main row">
            <div class="col-9 col-12-xsmall">
                <h2>{{ $user->name }}</h2>
            </div>
            <div class="col-3 col-12-xsmall">
                <a href="{{ route('admin.user.edit', $user->id) }}" class="button fit">Редактировать</a>
            </div>
        </header>
        <h3 id="content">Посты</h3>

    </section>
@endsection
