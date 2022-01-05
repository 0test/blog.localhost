<div id="sidebar">
	<div class="inner">
		<nav id="menu">
			<header class="major">
				<h2>Действия</h2>
			</header>
			<ul>
				<li class="@if (Request::url() == route('admin.index') ) active @endif"><a  href="{{ route('admin.index') }}">Дашборд</a></li>
				<li>
					<span class="opener active">Посты</span>
					<ul>
						<li class="@if (Request::url() == route('admin.post.create') ) active @endif"><a href="{{ route('admin.post.create')}}">Создать</a></li>
						<li class="@if (Request::url() == route('admin.post.index') ) active @endif"><a href="{{ route('admin.post.index') }}">Все посты</a></li>
					</ul>
				</li>
				<li>
					<span class="opener active">Категории</span>
					<ul>
						<li class="@if (Request::url() == route('admin.category.create') ) active @endif"><a href="{{ route('admin.category.create')}}">Создать</a></li>
						<li class="@if (Request::url() == route('admin.category.index') ) active @endif"><a href="{{ route('admin.category.index') }}">Все категории</a></li>
					</ul>
				</li>
				<li>
					<span class="opener active">Теги</span>
					<ul>
						<li class="@if (Request::url() == route('admin.tag.create') ) active @endif"><a href="{{ route('admin.tag.create')}}">Создать</a></li>
						<li class="@if (Request::url() == route('admin.tag.index') ) active @endif"><a href="{{ route('admin.tag.index') }}">Все теги</a></li>
					</ul>
				</li>
				
			</ul>
		</nav>

		<footer id="footer">
			<p class="copyright">&copy; Untitled. All rights reserved</p>
		</footer>
	</div>
</div>