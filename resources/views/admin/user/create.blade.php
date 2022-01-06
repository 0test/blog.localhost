@extends('admin.layouts.main')
@section('title', 'Создать пользователя')

@section('content')
    <section>
        <header class="main">
            <h2>Создаём пользователя</h2>
        </header>
        <form method="post" action="{{ route('admin.user.store') }} ">
            @csrf
            <div class="row gtr-uniform">
                <div class="col-12 col-12-xsmall">
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Имя">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12 col-12-xsmall">
                    <input type="text" name="email" value="{{ old('email') }}" placeholder="Почта">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12 col-12-xsmall">
                    <input type="text" name="password" value="" placeholder="Пароль">
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12 col-12-xsmall">
                    <label for="role">Роль</label>
                    <select name="role" id="role">
                        @foreach ($roles as $index => $role)
                            <option {{ $index == old('role') ? 'selected' : '' }} value="{{ $index }}">{{ $role }}</option>
                        @endforeach
                    </select>
                    @error('role')
                        <div class="invalid-feedback">{{ $message }}</div>
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
