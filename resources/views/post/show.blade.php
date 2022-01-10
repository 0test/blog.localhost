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
        <div class="row">
            <div class="col-4 col-12-xsmall">
                <h4>Категория</h4>
                <ul class="actions">
                    <li>
                        <a href="{{ route('category.show', $category->id) }}" class="">
                            <i class="far fa-folder-open"></i>{{ $category->title }}
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-4 col-12-xsmall">
                @if ($post->tags->count() > 0)
                    <h4>Теги</h4>
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
            </div>
            <div class="col-4">
                <h4>Нраица</h4>
                @auth
                    <form action="{{ route('likes.store', $post->id) }}"
                        method="POST">
                        @csrf
                        <button type="submit" class="button">
                            @if( auth()->user()->likedPosts->contains($post->id) ) 
                                <i class="fas fa-heart"></i> Добавлен
                             @else
                                <i class="far fa-heart"></i> Не добавлен
                            @endif
                        </button>
                        {{ $post->liked_users_count }}
                    </form>
                @else
                   <i class="far fa-heart"></i> {{ $post->liked_users_count }}
                @endauth
            </div>
        </div>


        @if ($comments->count())
            <div class="comments_wrapper">
                <hr>
                <h4>Комментарии</h4>
                @foreach ($comments as $comment)
                    <div id="comment{{ $comment->id}}" class="comment 
                    @auth  @if ( $comment->user->id == auth()->user()->id) comment_self @endif @endauth">
                        <div class="comment_user">
                            <h4><i class="far fa-user"></i> {{ $comment->user->name }} @auth @if ( $comment->user->id == auth()->user()->id) (вы) @endif @endauth</h4>
                        </div>
                        <div class="comment_message">
                            <blockquote>{{ $comment->message }}</blockquote>
                        </div>

                        <div class="comment_date">{{ date('H:i d.m.y') }}</div>
                    </div>
                @endforeach
            </div>
        @endif

        <div class="newcomment_wrapper" id="commentform">
            <h4>Напишите комментарий</h4>
            @auth
                <form action="{{ route('comment.store',$post->id)}}#commentform" method="POST">
                    @csrf
                    <div class="row gtr-uniform">
                        <div class="col-12">
                            <textarea name="message" id="" cols="30" rows="5"></textarea>
                            @error('message')
                                <div class="invalid-feedback">{{$message}}</div>
                             @enderror
                        </div>
                        <div class="col-12">
                            <ul class="actions">
                                <li><button class="button" type="submit">Отправить</button></li>
                            </ul>
                        </div>
                    </div>

                </form>
            @endauth
            @guest
            <p>Чтобы комментировать записи, нужно быть авторизированным.</p>
            <ul class="actions">
                <li><a href="{{ route('login')}}" class="button">Войти</a></li>
                <li><a href="{{ route('register')}}" class="button">Зарегистрироваться</a></li>
            </ul>
            @endguest
                
            


        </div>
    </section>
    <section>
        <header class="major">
            <h2>Ещё посты</h2>
        </header>
        <div class="posts">
            @foreach ($relatedPosts as $post)
                <article>
                    <a href="{{ route('post.show', $post->id) }}" class="image">
                        <img src="{{ Storage::url($post->preview_image) }}" alt="" />
                    </a>
                    <h3>{{ $post->title }}</h3>
                    <p>{!! $post->getIntrotext(100) !!}</p>
                    <ul class="actions">
                        <li><a href="{{ route('post.show', $post->id) }}" class="button">Читать</a></li>
                    </ul>
                </article>
            @endforeach
        </div>
    </section>
@endsection
