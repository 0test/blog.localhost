@extends('layouts.main')
@section('title', 'Все теги')
@section('content')

    <section>
        <header class="main">
            <h2>У нас тут теги есть</h2>
        </header>

        @foreach ($tags as $tag)

            <a href="{{ route('tag.show', $tag->id) }}" class="button ">{{ $tag->title }}</a>

        @endforeach

    </section>
@endsection
