@extends('layouts.main')
@section('title', 'Редактируем комментарий')
@section('content')

    <section>
        <header class="main">
            <h2>Редактируем комментарий</h2>
        </header>

        <form method="POST" action="{{ route('profile.comment.update', $comment->id) }}">
            @csrf
            <div class="row gtr-uniform">
                @method('PATCH')
                <div class="col-12 col-12-xsmall">
                    <textarea name="message" id="message"  rows="5">{{ $comment->message }}</textarea>
                    @error('message')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12 col-12-xsmall">
                    <ul class="actions">
                        <li><input type="submit" value="Обновить" class="primary"></li>
                    </ul>
                </div>
            </div>
        </form>

    </section>
@endsection
