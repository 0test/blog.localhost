@extends('layouts.main')
@section('title', 'Все посты')
@section('content')

    <section>
		<header class="main">
			<h2>Все посты</h2>
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
            {{ $posts->onEachSide(2)->links('parts.pagination-blog') }}
    </section>
@endsection
