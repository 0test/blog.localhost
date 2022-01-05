@extends('admin.layouts.main')
@section('title', 'Редактируем тег')

@section('content')
    <section>
		
		<header class="main">
			<h2>Редактируем тег {{$tag->title}}</h2>
		</header>
		<form method="post" action="{{route('admin.tag.update', $tag->id)}} ">
			@csrf
			@method('PATCH')
			<div class="row gtr-uniform">
				<div class="col-6 col-12-xsmall">
					<input type="text" name="title" value="{{$tag->title}}" placeholder="Название">
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
