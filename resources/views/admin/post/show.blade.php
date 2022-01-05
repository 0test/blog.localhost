@extends('admin.layouts.main')
@section('title', 'Просмотр поста')
    
@section('content')
    <section>
		<header class="main">
			<h1>{{ $post->title}}</h1>
		</header>
		{{ $category->title }}
		<span class="image main"><img src="{{ Storage::url($post->main_image)}}" alt="" /></span>

        {!! $post->content !!}
    </section>
@endsection
