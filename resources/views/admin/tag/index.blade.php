@extends('admin.layouts.main')
@section('title', 'Все теги')

@section('content')

    <section>
        <header class="main">
            <h2>Работа с тегами</h2>
        </header>

        <div class="table-wrapper">

            <table>
                <thead>
                    <tr>
                        <th>Название</th>
                        <th class="center">Создана</th>
                        <th class="center">Действия</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <td>{{ $tag->title }}</td>
                            <td class="center"><span class="small">{{ date('H:i d.m.Y', strtotime($tag->created_at)) }}</span>
                            </td>
                            <td class="center">
                                <ul class="actions small">
                                    <li><a href="{{ route('admin.tag.show', $tag->id) }}"
                                            class="button ">Открыть</a></li>
                                    <li><a href="{{ route('admin.tag.edit', $tag->id) }}"
                                            class="button ">Редактировать</a></li>
                                    <li>
                                        <form method="POST" action="{{ route('admin.tag.delete', $tag->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="button primary">Удалить</button>
                                        </form>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="">Итого {{ $tags->count() }}</td>
                        <td colspan="2"></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </section>
@endsection
