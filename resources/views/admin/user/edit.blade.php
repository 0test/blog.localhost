@extends('admin.layouts.main')
@section('title', 'Редактируем пользователя')

@section('content')
    <section>
		
		<header class="main">
			<h2>Редактируем пользователя {{$user->name}}</h2>
		</header>
		<form method="post" action="{{route('admin.user.update', $user->id)}} ">
			@csrf
			@method('PATCH')
			<div class="row gtr-uniform">
				<div class="col-12 col-12-xsmall">
					<input type="text" name="name" value="{{$user->name}}" placeholder="Имя">
					@error('name')
						<div class="invalid-feedback">{{$message}}</div>
					@enderror
				</div>
				<div class="col-12 col-12-xsmall">
					<input type="text" name="email"  value="{{ $user->email }}" placeholder="Почта">
					<input type="hidden" name="user_id" value="{{ $user->id }}">
					@error('email')
						<div class="invalid-feedback">{{$message}}</div>
					@enderror
				</div>
				<div class="col-12 col-12-xsmall">
					<input type="text" name="password"  value="" placeholder="Пароль">
					@error('password')
						<div class="invalid-feedback">{{$message}}</div>
					@enderror
				</div>
                <div class="col-12 col-12-xsmall">
                    <label for="role">Роль</label>
                    <select name="role" id="role">
                        @foreach ($roles as $index => $role)
                            <option {{ $index == $user->role ? 'selected' : '' }} value="{{ $index }}">{{ $role }}</option>
                        @endforeach
                    </select>
                    @error('role')
                        <div class="invalid-feedback">{{ $message }}</div>
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
