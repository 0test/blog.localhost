@extends('admin.layouts.main')
@section('title', 'Просмотр тега')
    
@section('content')
    <section>
		<header class="main">
			<h2>{{ $tag->title}}</h2>
		</header>
        <h3 id="content">Sample Content</h3>
        <p>Praesent ac adipiscing ullamcorper semper ut amet ac risus. Lorem sapien ut odio odio nunc. Ac adipiscing nibh porttitor erat risus justo adipiscing adipiscing amet placerat accumsan. Vis. Faucibus odio magna tempus adipiscing a non.
            In mi primis arcu ut non accumsan vivamus ac blandit adipiscing adipiscing arcu metus praesent turpis eu ac lacinia nunc ac commodo gravida adipiscing eget accumsan ac nunc adipiscing adipiscing lorem ipsum dolor sit amet nullam
            veroeros adipiscing.</p>
    </section>
@endsection
