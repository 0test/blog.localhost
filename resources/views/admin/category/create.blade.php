@extends('admin.layouts.main')
@section('title', 'Создать категорию')

@section('content')
    <section>
		<header class="main">
			<h2>Создаём категорию</h2>
		</header>
		<form method="post" action="{{ route('admin.category.store')}} ">
			@csrf
			<div class="row gtr-uniform">
				<div class="col-6 col-12-xsmall">
					<input type="text" name="title"  value="" placeholder="Название">
					@error('title')
						<div class="invalid-feedback">{{$message}}</div>
					@enderror
				</div>
				<div class="col-12">
					<ul class="actions">
						<li><input type="submit" value="Создать" class="primary"></li>
					</ul>
				</div>
			</div>
		</form>
    </section>
@endsection
