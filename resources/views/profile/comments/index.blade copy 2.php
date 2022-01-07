@extends('layouts.main')
@section('title', 'Комменты')
@section('content')

    <section>
        <header class="main">
            <h2>Все комменты {{ $user->name }}</h2>
        </header>
        <div class="row gtr-200">
            <div class="col-12 col-12-medium">
                @if ($comments->count())
                    <div class="table-wrapper">
                        <table>
                            <tbody>
                                @foreach ($comments as $comment)
                                    <tr>
                                        <td>
                                            
                                            <h4><a href="{{ route('post.show', $comment->post->id) }}">{{ $comment->post->title}}</a> 
                                        </h4>
                                        <blockquote>{{ $comment->message }}</blockquote>
                                        </td>

                                        <td class="center">
                                            <h4>Действия</h4>
                                            <ul class="actions  small">
                                                <li>
                                                    <a href="#" class="button">Редактировать</a>
                                                </li>
                                                <li>
                                                    <form action="{{ route('profile.comment.delete', $comment->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        <button type="submit" class="button">Удалить коммент</button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                @else
                    <p>Комментариев нет</p>
                @endif

            </div>
        </div>


    </section>
@endsection
