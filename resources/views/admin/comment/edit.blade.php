@extends('admin.layouts.main')
@section('title', 'Редактируем коммент')

@section('content')
    <section>
		
		<header class="main">
			<h2>Редактируем коммент</h2>
		</header>
		<form method="post" action="{{route('admin.comments.update', $comment->id)}} ">
			@csrf
			@method('PATCH')
			<div class="row gtr-uniform">
				<div class="col-6 col-12-xsmall">
					<textarea name="message" cols="30" rows="5">{{$comment->message}}</textarea>
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
