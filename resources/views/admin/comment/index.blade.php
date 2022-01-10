@extends('admin.layouts.main')
@section('title', 'Все комментарии')
@section('content')

    <section>
		<header class="main">
			<h2>Комментарии</h2>
		</header>
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Текст</th>
                        <th class="center">Создан</th>
                        <th class="center">Действия</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comments as $comment)                  
                    <tr>
                        <td>{{ $comment->message}}</td>
                        <td class="center"><span class="small">{{ date('H:i d.m.Y', strtotime($comment->created_at)) }}</span></td>
                        <td class="center">
                            <ul class="actions  small">
                                <li>    <a href="{{ route('admin.post.show', $comment->post->id)}}" class="button ">К посту</a></li>
                                <li><a href="{{ route('admin.comments.edit', $comment->id) }}" class="button ">Редактировать</a></li>
                                <li> <form method="POST" action="{{ route('admin.comments.delete', $comment->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="button primary ">Удалить</button>
                                </form></li>
                            </ul>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td>Итого {{ $comments->count()}}</td>
                        <td class="center" colspan="2"></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </section>
@endsection
