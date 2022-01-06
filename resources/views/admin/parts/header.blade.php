<header id="header">
    <a href="{{ route('index') }}" class="logo"><strong>Админка</strong> блога</a>
    <ul class="icons usersection">
        <li><a title="Профиль" href="{{ route('login') }}" class=""><i class="far fa-user"></i></a>
        </li>
        <li>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button title="Выход" type="submit"><i class="fas fa-door-open"></i></button>
            </form>
        </li>
    </ul>
</header>
