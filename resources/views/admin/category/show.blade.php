@extends('admin.layouts.main')
@section('title', 'Просмотр категории')

@section('content')
    <section>
        <header class="main row">
            <div class="col-9 col-12-xsmall">
                <h2>{{ $category->title }}</h2>
            </div>
            <div class="col-3 col-12-xsmall">
                <a href="{{ route('admin.category.edit', $category->id) }}" class="button fit">Редактировать</a>
            </div>
        </header>
        <h3 id="content">Посты</h3>
        <div class="table-wrapper">
            @if ($category->posts()->count() > 0)
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
                    @foreach ($category->posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title}}</td>
                        <td class="center"><span class="small">{{ date('H:i d.m.Y', strtotime($post->created_at)) }}</span></td>
                        <td class="center">
                            <ul class="actions  small">
                                <li>    <a href="{{ route('admin.post.show', $post->id)}}" class="button ">Открыть</a></li>
                                <li><a href="{{ route('admin.post.edit', $post->id) }}" class="button ">Редактировать</a></li>
                                <li> <form method="POST" action="{{ route('admin.post.delete', $post->id) }}">
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
                        <td colspan="">Итого {{ $category->posts()->count() }}</td>
                        <td colspan="2"></td>
                    </tr>
                </tfoot>
            </table> 
            @else
                <p>Постов не найдено</p>
            @endif
            
        </div>
    </section>
@endsection
