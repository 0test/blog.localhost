@extends('layouts.main')
@section('title', 'Просмотр тега')

@section('content')
<section>
    <header class="main row">
        <h2>{{ $tag->title }}</h2>
    </header>
    <h3 id="content">Посты</h3>
        @if ($tag->posts()->count() > 0)
        <div class="posts">
            @foreach ($tag->posts as $post)
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
        @else
            <p>Постов не найдено</p>
        @endif
        
</section>
@endsection
