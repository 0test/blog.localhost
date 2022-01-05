@extends('admin.layouts.main')
@section('title', 'Все категории')
@section('content')

    <section>
		<header class="main">
			<h2>Работа с категориями</h2>
		</header>

        <div class="table-wrapper">

            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Название</th>
                        <th class="center">Создана</th>
                        <th class="center">Действия</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        
                   
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->title}}</td>
                        <td class="center"><span class="small">{{ date('H:i d.m.Y', strtotime($category->created_at)) }}</span></td>
                        <td class="center">
                            <ul class="actions  small">
                                <li>    <a href="{{ route('admin.category.show', $category->id)}}" class="button ">Открыть</a></li>
                                <li><a href="{{ route('admin.category.edit', $category->id) }}" class="button ">Редактировать</a></li>
                                <li> <form method="POST" action="{{ route('admin.category.delete', $category->id) }}">
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
                        <td></td>
                        <td colspan="">Итого {{ $categories->count()}}</td>
                        <td colspan="2"></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </section>
@endsection
