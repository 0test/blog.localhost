@extends('layouts.main')
@section('title', $post->title)

@section('content')
    <section>
        <header class="main row">
                <h1>{{ $post->title }}</h1>
        </header>
        <div class="image main"><img src="{{ Storage::url($post->main_image) }}" alt="" /></div>
        {!! $post->content !!}
        <hr>
        <h4>Информация</h4>
        <ul class="actions">
            <li>
                <a href="{{ route('category.show', $category->id) }}" class="">
                    <i class="far fa-folder-open"></i>{{ $category->title }}
				</a>
            </li>
        </ul>

        @if ($post->tags->count() > 0)
            <ul class="actions ">
                @foreach ($post->tags as $tag)
                    <li>
                        <a href="{{ route('tag.show', $tag->id) }}" class="">
                            <i class="fas fa-pen"></i>{{ $tag->title }}
                        </a>
                    </li>
                @endforeach
            </ul>
        @endif

    </section>
@endsection
