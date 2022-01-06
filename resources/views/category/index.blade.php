@extends('layouts.main')
@section('title', 'Все категории')
@section('content')

    <section>
        <header class="main">
            <h2>У нас тут категории есть</h2>
        </header>

        @foreach ($categories as $category)

            <a href="{{ route('category.show', $category->id) }}" class="button ">{{ $category->title }}</a>

        @endforeach

    </section>
@endsection
