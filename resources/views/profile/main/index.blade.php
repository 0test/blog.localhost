@extends('layouts.main')
@section('title', 'Профиль')
@section('content')

    <section>
        <header class="main">
            <h2>Профиль {{$user->name}}</h2>
        </header>
        <div class="row gtr-200">
            <div class="col-6 col-12-medium">
                <h3>Понравившееся</h3>
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
                                    <td><a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a> </td>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <a href="{{ route('profile.likes.index') }}">Смотреть все</a>
                @else
                    <p>Вам ничего не нравится</p>
                @endif
               
            </div>
            <div class="col-6 col-12-medium">
                <h3>Ваши комментарии</h3>
                <a href="{{ route('profile.comments.index') }}">Смотреть все</a>
            </div>
        </div>
    </section>
@endsection
