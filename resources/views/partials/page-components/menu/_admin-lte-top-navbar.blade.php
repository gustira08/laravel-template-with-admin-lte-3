<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    {{-- Left navbar --}}
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    {{-- Right navbar --}}
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown user-menu">
            <a
                href="#"
                class="nav-link dropdown-toggle"
                style="border:1px solid #ccc;border-radius:50%;margin:0;padding:8px 12px;width:2.5rem;height:2.5rem;color:#999;"
                data-toggle="dropdown"
                aria-expanded="false"
            >
                <i class="fas fa-user"></i>
            </a>

            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <li class="user-header bg-primary">
                    <img
                        src="{{ asset('images/user-default.png') }}"
                        class="img-circle elevation-2"
                        alt="Profile Image"
                    >

                    <p>
                        <span class="text-capitalize">{{ auth()->user()->name }}</span>
                        <small>{{ auth()->user()->email }}</small>
                    </p>
                </li>
                <li class="user-footer">
                    <a href="#" class="btn btn-default btn-flat">
                        <i class="fas fa-lock mr-2"></i>
                        {{ __('Edit') }}
                    </a>
                    <a
                        href="{{ route('logout') }}"
                        class="btn btn-default btn-flat float-right"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
                    >
                        <i class="fas fa-sign-out-alt mr-2"></i> {{ __('Keluar') }}
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>

{{-- Logout form --}}
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
