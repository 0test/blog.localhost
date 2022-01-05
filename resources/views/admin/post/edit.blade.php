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
        <form enctype="multipart/form-data" method="post" action="{{ route('admin.post.update', $post->id) }} ">
            @csrf
            @method('PATCH')
            <div class="row gtr-uniform">
                <div class="col-12 col-12-xsmall">
                    <input tabindex="1" type="text" class="main_title" name="title" value="{{ $post->title }}"
                        placeholder="Название">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12 col-12-xsmall">
                    <label for="preview_image" class="fit js-selectphoto-container">
                        <input class="hidden js-selectphoto" type="file" id="preview_image" name="preview_image" value="">
                        <img class="photofile_image" src="{{ Storage::url($post->preview_image) }}" alt="">
                    </label>
                    @error('preview_image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12 col-12-xsmall">
                    <label for="main_image" class="fit js-selectphoto-container">
                        <input class="hidden js-selectphoto" type="file" id="main_image" name="main_image" value=""
                            placeholder="">
                        <img class="photofile_image" src="{{ Storage::url($post->main_image) }}" alt="">
                    </label>

                    @error('main_image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12 col-12-xsmall">
                    <textarea id="content" name="content" rows="6">{{ $post->content }}</textarea>
                    @error('content')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12 col-12-xsmall">
                    <label for="category_id">Категория</label>
                    <select name="category_id" id="category_id">
                        @foreach ($categories as $category)
                            <option {{ $post->category_id == $category->id ? 'selected' : '' }}
                                value="{{ $category->id }}">{{ $category->title }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 col-12-xsmall">
                    <label for="tag">Теги</label>
                    <select name="tags[]" multiple="multiple" id="tag" class="js-tags-multiple">
                        @foreach ($tags as $tag)
                            <option
                            
                             value="{{$tag->id}}">{{$tag->title}}</option>
                        @endforeach
                    </select>
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
<script src = "{{ asset('assets/admin/tinymce/tinymce.min.js') }}"></script>
<script src = "{{ asset('assets/admin/tinymce-settings.js') }}"></script>
<link href="{{ asset('assets/admin/select2/css/select2.min.css') }}" rel="stylesheet" />
<script src = "{{ asset('assets/admin/select2/js/select2.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $('.js-tags-multiple').select2();
        $('.js-selectphoto').on('change', function(e){
            if(event.target.files[0]){
                $(this).parent('label').find('img').remove();
                $(this).parent('label').addClass('js-selectphoto-notempty');
                $(this).parent('label').append(
                $('<img/>')
                    .attr('src', URL.createObjectURL(event.target.files[0]))
                    .attr('class', 'photofile_image')
                );
            };
        });
    });
</script>
@endpush
