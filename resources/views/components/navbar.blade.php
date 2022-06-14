<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <!-- Left Side Of Navbar -->
    <ul class="navbar-nav me-auto">
        @Auth
        <li class="nav-item">
            <a class="nav-link {{ request()->is('barang') ? 'active' : '' }}" aria-current="page" href="/barang">Daftar Barang</a>
        </li>
        @endauth
    </ul>

    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ms-auto">
        <!-- Authentication Links -->
        @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif

            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    @if(Auth::user()->isAdmin())
                    <a class="dropdown-item" href="/users">Users</a>
                    @endif
                    <a class="dropdown-item" href="#">Another action</a>
                    <hr class="dropdown-divider">
                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#ubah_password" class="dropdown-item" href="#">Ubah Password</a>
                    <a class="dropdown-item" href="#"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
            <x-modal id="ubah_password" title="Ubah Password" link="{{route('change-password')}}">
                <x-slot name="body">
                    <form id="ubah_password_submit" action="{{route('change-password')}}" method="POST">@csrf
                        <div class="form-floating py-1">
                            <input type="password" class="form-control" name="passwordLama" id="passLama" placeholder="name@example.com">
                            <label for="passLama">Password Lama</label>
                        </div>
                        <hr>
                        <div class="form-floating py-1">
                            <input type="password" class="form-control" name="passwordBaru" id="passBaru" placeholder="name@example.com">
                            <label for="passBaru">Password Baru</label>
                        </div>
                        <div class="form-floating py-1">
                            <input type="password" class="form-control" name="passwordBaru_confirmation" id="confirmPass" placeholder="name@example.com">
                            <label for="confirmPass">Konfirmasi Password Baru</label>
                        </div>
                    </form>
                </x-slot>
            </x-modal>
        @endguest
    </ul>
</div>