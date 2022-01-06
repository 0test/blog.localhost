<header id="header">
	<a href="{{ route('index') }}" class="logo"><strong>Блог</strong> о всяком-разном</a>
	<ul class="icons">
		<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
		<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
		<li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
		<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
	</ul>
	<ul class="icons usersection">
		@guest
			<li><a title="Вход" href="{{ route('login') }}" class=""><i class="fas fa-sign-in-alt"></i></a></li>
		@else
			<li><a title="Профиль" href="{{ route('profile.main.index') }}" class=""><i class="far fa-user"></i></a></li>

			<li><a title="Админка" href="{{ route('admin.main.index') }}" class=""><i class="fas fa-user-shield"></i></a></li>
			<li>
				<form action="{{ route('logout') }}" method="POST">
					@csrf
					<button title="Выйти" type="submit"><i class="fas fa-door-open"></i></button>
				</form>
			</li>
		@endguest


	</ul>
</header>