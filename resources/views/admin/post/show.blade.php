@extends('admin.layouts.main')
@section('title', 'Просмотр поста')

@section('content')
    <section>
        <header class="main row">
            <div class="col-9 col-12-xsmall">
                <h1>{{ $post->title }}</h1>
            </div>
            <div class="col-3 col-12-xsmall">
                <a href="{{ route('admin.post.edit', $post->id) }}" class="button fit">Редактировать</a>
            </div>
        </header>
        <div class="image main"><img src="{{ Storage::url($post->main_image) }}" alt="" /></div>
        {!! $post->content !!}
        <hr>
        <h4>Информация</h4>
        <ul class="actions">
            <li>
                <a href="{{ route('admin.category.show', $category->id) }}" class="">
                    <i class="far fa-folder-open"></i>{{ $category->title }}
                </a>
            </li>
        </ul>

        @if ($post->tags->count() > 0)
            <ul class="actions ">
                @foreach ($post->tags as $tag)
                    <li>
                        <a href="{{ route('admin.tag.show', $tag->id) }}" class="">
                            <i class="fas fa-pen"></i>{{ $tag->title }}
                        </a>
                    </li>
                @endforeach
            </ul>
        @endif

        @if ($comments->count())
            <div class="comments_wrapper">
                <hr>
                <h4>Комментарии</h4>
                @foreach ($comments as $comment)
                    <div id="comment{{ $comment->id }}" class="comment  @auth  @if ($comment->user->id == auth()->user()->id) comment_self @endif @endauth">
                        <div class="comment_user">
                            <h4><i class="far fa-user"></i> {{ $comment->user->name }} @auth @if ($comment->user->id == auth()->user()->id) (вы) @endif
                                @endauth</h4>
                        </div>
                        <div class="comment_message">
                            <blockquote>{{ $comment->message }}</blockquote>
                        </div>
                        <div class="comment_date">{{ date('H:i d.m.y') }}</div>
                    </div>
                @endforeach
            </div>
        @endif
    </section>
@endsection
