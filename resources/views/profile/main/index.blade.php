@extends('layouts.main')
@section('title', 'Профиль')
@section('content')

    <section>
        <header class="main">
            <h2>Профиль {{ $user->name }}</h2>
        </header>
        <div class="row gtr-200">
            <div class="col-6 col-12-medium">
                <h3>Понравившееся посты</h3>
                @if ($likedPosts->count())
                    <div class="table-wrapper">
                        <table>
                            <thead>
                                <tr>
                                    <th>Название</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($likedPosts as $post)
                                    <tr>
                                        <td><a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a> </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <a class="button" href="{{ route('profile.likes.index') }}">Смотреть все</a>
                @else
                    <p>Вам ничего не нравится</p>
                @endif

            </div>
            <div class="col-6 col-12-medium">
                <h3>Ваши комментарии</h3>
                @if ($comments->count())
                    <div class="table-wrapper">
                        <table>
                            <thead>
                                <tr>
                                    <th>Пост</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($comments as $comment)
                                    <tr>
                                        <td>
                                            <h5><a
                                                href="{{ route('post.show', $comment->post->id) }}">{{ $comment->post->title}}</a></h5>
                                                <blockquote>
                                                    {{ $comment->message }}
                                                </blockquote>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <a class="button" href="{{ route('profile.comments.index') }}">Смотреть все</a>
                @else
                    <p>Нет комментариев</p>
                @endif
            </div>
        </div>
    </section>
@endsection
