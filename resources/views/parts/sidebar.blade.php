<div id="sidebar">
    <div class="inner">
        <!-- Search 
  <section id="search" class="alt">
   <form method="post" action="#">
    <input type="text" name="query" id="query" placeholder="Найти..." />
   </form>
  </section>
 -->
        <!-- Menu -->
        <nav id="menu">
            <header class="major">
                <h2>Меню</h2>
            </header>
            <ul>
                <li class="@if (Request::url() == route('index') ) active @endif" ><a href="{{ route('index') }}">Главная</a></li>
				
                <li class="@if (Request::url() == route('post.index') || (Request::is('posts*')) ) active @endif"><a href="{{ route('post.index') }}">Посты</a></li>
                <li class="@if (Request::url() == route('category.index') || (Request::is('categories*')) ) active @endif"><a href="{{ route('category.index') }}">Категории</a></li>
                <li class="@if (Request::url() == route('tags.index')  || (Request::is('tags*')) ) active @endif"><a href="{{ route('tags.index') }}">Теги</a></li>
            </ul>
        </nav>

        <!-- Section -->
        <section>
            <header class="major">
                <h2>Автор</h2>
            </header>
            <p>Sed varius enim lorem ullamcorper dolore aliquam aenean ornare velit lacus, ac varius enim lorem
                ullamcorper dolore. Proin sed aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus
                aliquam.</p>
            <ul class="contact">
                <li class="icon solid fa-envelope"><a href="#">information@untitled.tld</a></li>
            </ul>
        </section>

        <!-- Footer -->
        <footer id="footer">
            <p class="copyright">&copy; 2022.
                <a href="https://www.youtube.com/channel/UCoRK0WG_XW1l1CqlGC-Mg_w">Сделано по урокам Laravel
                    Creative</a>
            </p>
        </footer>

    </div>
</div>
