@extends('admin.layouts.main')
@section('title', 'Редактируем пост')

@section('content')
    <section>
        <header class="main row">
            <div class="col-9 col-12-xsmall">
                <h3>Редактируем пост</h3>
            </div>
            <div class="col-3 col-12-xsmall">
                <a href="{{ route('admin.post.show', $post->id) }}" target="_blank" class="button fit">Просмотр</a>
            </div>
        </header>
        <form method="post" action="{{ route('admin.post.update', $post->id) }} ">
            @csrf
            @method('PATCH')
            <div class="row gtr-uniform">
                <div class="col-12 col-12-xsmall">
                    <input tabindex="1"  type="text" class="main_title" name="title" value="{{ $post->title }}" placeholder="Название">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12 col-12-xsmall">
                    <textarea id="content" name="content" rows="6">{{ $post->content }}</textarea>
                    @error('content')
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
@push('custom-scripts')
    <script src = "{{ asset('assets/admin/tinymce/tinymce.min.js') }}" > </script>
    <script src = "{{ asset('assets/admin/tinymce-settings.js') }}"></script>   
@endpush
