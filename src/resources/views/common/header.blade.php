<nav class="navbar navbar-expand-lg navbar-laravel shadow-sm p-3 mb-2 header-width">
    <div class="container">
        {{-- <span class="navbar-brand text-white font-weight-bold">Taro Nguyen</span> --}}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars" style="color: #818896"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">ログイン</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">登録</a>
                    </li>
                @else
                    <li class="nav-item">
                        <span class="nav-link text-white">{{ Auth::user()->name }}</span>
                    </li>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle border-0" style="background-color: #31353d" type="button" id="navList"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </button>
                        <div class="dropdown-menu" aria-labelledby="navList">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('profile') }}">
                                    <i class="fa fa-user"></i>
                                    プロフィール</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}">
                                    <i class="fa fa-right-from-bracket"></i>
                                    ログアウト</a>
                            </li>
                        </div>
                    </div>
                @endguest
            </ul>

        </div>
    </div>
</nav>
