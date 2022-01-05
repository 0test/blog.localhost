@extends('admin.layouts.main')
@section('title', 'Просмотр поста')
    
@section('content')
    <section>
		<header class="main">
			<h1>{{ $post->title}}</h1>
		</header>

        {!! $post->content !!}
    </section>
@endsection
