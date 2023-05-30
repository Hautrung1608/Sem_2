<nav class="navbar navbar-expand-sm navbar-light bg-light container-fruid">
    <a class="navbar-brand logo bar-link" href="/">
        <img src="{{ url('/image/logo.png') }}" alt="" class="logo" />
    </a>
    <div class="collapse navbar-collapse search-box" id="collapsibleNavId">
        <ul class="navbar-nav mt-2 mt-lg-0 col-lg-5">
            <li>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control search-in" type="text" placeholder="Search">
                    <button class="search" type="submit"><i class="bi bi-search"></i></button>
                </form>
            </li>
        </ul>
        <ul class="navbar-nav mt-2 mt-lg-0 col-lg-2 avar-div">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle user-name" href="#" id="dropdownId" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <img src="{{ url('/image/default-avar.jpg') }}" alt="" class="avatar" />
                    {{ Auth::check() ? Auth::user()->name : 'Tài khoản' }}
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="{{ route('register.index') }}">Đăng kí</a>

                    <a class="dropdown-item" href="{{ route('admin.logout') }}">Đăng xuất</a>

                </div>
            </li>
        </ul>
        
    </div>
</nav>
