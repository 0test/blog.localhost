@extends('layouts.main')
@section('title', 'Лайки')
@section('content')

    <section>
        <header class="main">
            <h2>Понравившееся</h2>
        </header>
        <div class="row gtr-200">
            <div class="col-12 col-12-medium">
                @if ($posts->count())
                    <div class="table-wrapper">
                        <table>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td><a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a> </td>
                                        <td class="center">
                                            <ul class="actions  small">
                                                <li>
                                                    <form action="{{ route('profile.likes.delete', $post->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        <button type="submit" class="button">Убрать лайк</button>
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
                    <p>Вам ничего не нравится. Ну как так то. Про кошку же норм.</p>
                @endif

            </div>
        </div>

    </section>
@endsection
