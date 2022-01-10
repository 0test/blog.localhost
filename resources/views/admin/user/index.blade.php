@extends('admin.layouts.main')
@section('title', 'Все юзеры')
@section('content')

    <section>
		<header class="main">
			<h2>Работа с пользователями</h2>
		</header>
        <div class="table-wrapper">
            @if ($users->count() > 0)
            <table>
                <thead>
                    <tr>
                        <th>Имя</th>
                        <th class="center">Создан</th>
                        <th class="center">Роль</th>
                        <th class="center">Действия</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name}}</td>
                        <td class="center"><span class="small">{{ date('H:i d.m.Y', strtotime($user->created_at)) }}</span></td>
                        <td class="center">{{ $roles[$user->role]}}</td>
                        <td class="center">
                            <ul class="actions  small">
                                <li><a href="{{ route('admin.user.show', $user->id)}}" class="button ">Открыть</a></li>
                                <li><a href="{{ route('admin.user.edit', $user->id) }}" class="button ">Редактировать</a></li>
                                <li> <form method="POST" action="{{ route('admin.user.delete', $user->id) }}">
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
                        <td colspan="">Итого {{ $users->count()}}</td>
                        <td colspan="2"></td>
                    </tr>
                </tfoot>
            </table>
            @else
                <p>Пользователей нет</p>
            @endif
        </div>
    </section>
@endsection
