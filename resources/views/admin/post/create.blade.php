@extends('admin.layouts.main')
@section('title', 'Создать пост')

@section('content')
    <section>
        <header class="main">
            <h3>Создаём пост</h3>
        </header>
        <form method="post" enctype="multipart/form-data" action="{{ route('admin.post.store') }} ">
            @csrf
            <div class="row gtr-uniform">
                <div class="col-12 col-12-xsmall">
                    <input tabindex="1" class="main_title" type="text" name="title" value="{{ old('title')}}" placeholder="Название">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12 col-12-xsmall">
                    <label for="preview_image" class="fit js-selectphoto-container">
                        <input class="hidden js-selectphoto" type="file" id="preview_image" name="preview_image" value="">
                        <img class="photofile_image" src="{{ asset('images/pic11.jpg') }}" alt="">
                    </label>
                    @error('preview_image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12 col-12-xsmall">
                    <label for="main_image" class="fit js-selectphoto-container">
                        <input class="hidden js-selectphoto" type="file" id="main_image" name="main_image" value=""
                            placeholder="">
                        <img class="photofile_image" src="{{ asset('images/pic11.jpg') }}" alt="">
                    </label>
                    @error('main_image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12 col-12-xsmall">
                    <textarea id="content" name="content"  rows="6">{{ old('content')}}</textarea>
                    @error('content')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12 col-12-xsmall">
                    <select name="category" id="category">
                        <option value="1">Manufacturing</option>
                        <option value="1">Shipping</option>
                        <option value="1">Administration</option>
                        <option value="1">Human Resources</option>
                    </select>
                </div>
                <div class="col-12 col-12-xsmall">
                    <select name="tag" id="tag">
                        <option value="">- Tag -</option>
                        <option value="1">Manufacturing</option>
                        <option value="1">Shipping</option>
                        <option value="1">Administration</option>
                        <option value="1">Human Resources</option>
                    </select>
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


@push('custom-scripts')
    <script src = "{{ asset('assets/admin/tinymce/tinymce.min.js') }}"></script>
    <script src = "{{ asset('assets/admin/tinymce-settings.js') }}"></script>   
    <script>
        $(document).ready(function(){
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
