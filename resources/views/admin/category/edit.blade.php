@extends('admin.layouts.main')
@section('title', 'Редактируем категорию')

@section('content')
    <section>
		
		<header class="main">
			<h2>Редактируем категорию {{$category->title}}</h2>
		</header>
		<form method="post" action="{{route('admin.category.update', $category->id)}} ">
			@csrf
			@method('PATCH')
			<div class="row gtr-uniform">
				<div class="col-6 col-12-xsmall">
					<input type="text" name="title" value="{{$category->title}}" placeholder="Название">
					@error('title')
						<div class="invalid-feedback">{{$message}}</div>
					@enderror
				</div>
				<div class="col-12">
					<ul class="actions">
						<li><input type="submit" value="Обновить" class="primary"></li>
					</ul>
				</div>
			</div>
		</form>
    </section>
@endsection
