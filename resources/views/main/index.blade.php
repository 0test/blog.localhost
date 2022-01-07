@extends('layouts.main')
@section('title','Блог о всяком')

@section('content')
    <section id="banner">
        <div class="content">
            <header>
                <h1>Смешной<br /> блог</h1>
                <p>Прикольные истории из интернетов</p>
            </header>
            <p>Автор блога не равно автор постов, вы же понимаете?</p>
            <ul class="actions">
                <li><a href="{{ route('post.random')}}" class="button big">Случайный пост</a></li>
            </ul>
        </div>
        <span class="image object">
            <img src="{{ asset('images/pic10.jpg') }}" alt="Bloge" />
        </span>
    </section>
    <section>
        <header class="major">
            <h2>Последние посты</h2>
        </header>
        <div class="posts">
            @foreach ($posts as $post)
                <article>
                    <a href="{{ route('post.show', $post->id)}}" class="image">
                        <img src="{{ Storage::url($post->preview_image) }}" alt="" />
					</a>
                    <h3>{{ $post->title }}</h3>
                    <p>{!! $post->getIntrotext(100) !!}</p>
                    <ul class="actions">
                        <li><a href="{{ route('post.show', $post->id)}}" class="button">Читать</a></li>
                    </ul>
                </article>
            @endforeach
        </div>
    </section>
@endsection
