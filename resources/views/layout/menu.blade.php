<nav class="navbar navbar-expand-sm navbar-light bg-light container-fruid">
    <a class="navbar-brand logo bar-link" href="/">
        <img src="{{ url('/image/logo.png') }}" alt="" class="logo" />
    </a>
    <div class="collapse navbar-collapse search-box" id="collapsibleNavId">
        <ul class="navbar-nav mt-2 mt-lg-0 col-lg-5">
            <li>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </li>
        </ul>
        <div class="col-lg-3"></div>
        <ul class="navbar-nav mt-2 mt-lg-0 col-lg-2 avar-div">
            <li class="nav-item dropdown avar-div">
                <a class="nav-link dropdown-toggle user-name" href="#" id="dropdownId" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <img src="{{ url('/image/default-avar.jpg') }}" alt="" class="avatar" />
                    {{ Auth::check() ? Auth::user()->name : 'Tài khoản' }}
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    @auth
                        <a class="dropdown-item" href="{{ route('logout') }}">Đăng xuất</a>
                    @else
                        <a class="dropdown-item" href="{{ route('login.index') }}">Đăng nhập</a>
                    @endauth
                </div>
            </li>
        </ul>
    </div>
</nav>
