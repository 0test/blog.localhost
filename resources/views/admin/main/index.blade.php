@extends('admin.layouts.main')
@section('title', 'Админка')

@section('content')
<section>

    <h2>Посты</h2>
    <div class="row gtr-200">
        <div class="col-12">
            <div class="table-wrapper">
                @if ($posts->count() > 0)
                    <table>
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Название</th>
                                <th class="center">Создан</th>
                                <th class="center">Действия</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td class="center"><span
                                            class="small">{{ date('H:i d.m.Y', strtotime($post->created_at)) }}</span>
                                    </td>
                                    <td class="center">
                                        <ul class="actions  small">
                                            <li> <a href="{{ route('admin.post.show', $post->id) }}"
                                                    class="button ">Открыть</a></li>
                                            <li><a href="{{ route('admin.post.edit', $post->id) }}"
                                                    class="button ">Редактировать</a></li>
                                            <li>
                                                <form method="POST" action="{{ route('admin.post.delete', $post->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="button primary ">Удалить</button>
                                                </form>
                                            </li>
                                        </ul>



                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td></td>
                                <td colspan="">Итого {{ $posts->count() }}</td>
                                <td colspan="2"></td>
                            </tr>
                        </tfoot>
                    </table>
                @else
                    <p>Постов не найдено</p>
                @endif

            </div>
        </div>
    </div>
    <h2>Пользователи</h2>
    <div class="row gtr-200">
        <div class="col-12">
            <div class="table-wrapper">
                @if ($users->count() > 0)
                    <table>
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Имя</th>
                                <th class="center">Создан</th>
                                <th class="center">Роль</th>
                                <th class="center">Действия</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td class="center"><span
                                            class="small">{{ date('H:i d.m.Y', strtotime($user->created_at)) }}</span>
                                    </td>
                                   
                                    <td class="center">{{ $roles[$user->role] }}</td>
                                    <td class="center">
                                        <ul class="actions  small">
                                            <li><a href="{{ route('admin.user.show', $user->id) }}"
                                                    class="button ">Открыть</a></li>
                                            <li><a href="{{ route('admin.user.edit', $user->id) }}"
                                                    class="button ">Редактировать</a></li>
                                            <li>
                                                <form method="POST" action="{{ route('admin.user.delete', $user->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="button primary ">Удалить</button>
                                                </form>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td></td>
                                <td colspan="">Итого {{ $users->count() }}</td>
                                <td colspan="2"></td>
                            </tr>
                        </tfoot>
                    </table>
                @else
                    <p>Пользователей нет</p>
                @endif

            </div>
        </div>
    </div>
</section>
@endsection
