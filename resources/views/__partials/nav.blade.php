<style>
    ol li a, ol li, .breadcrumb-item::before {
        color: white !important;
    }
</style>
<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="{{route('home')}}">
            <img src="{{asset('images/xiltrion.png')}}" alt="logo"/> </a>
        <a class="navbar-brand brand-logo-mini" href="{{route('home')}}">
            <img src="{{asset('images/xiltrion-mini.png')}}" alt="logo"/> </a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
        </button>
        <ol class="d-none d-md-flex breadcrumb" style="margin-bottom: 1px !important;">
            <li class="breadcrumb-item">
                <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"><a href="#">Library</a></li>
        </ol>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item d-none d-lg-block">
                <a class="nav-link" href="{{route('home')}}">
                    <i class="mdi mdi-home" style="font-size: 25px !important;"></i>
                </a>
            </li>
            <li class="nav-item d-none d-lg-block color-setting">
                <a class="nav-link" href="#">
                    <i class="mdi mdi-tune"></i>
                </a>
            </li>
            <li class="nav-item dropdown d-none d-xl-inline-block">
                <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown"
                   aria-expanded="false">
                    <span class="profile-text">Bienvenido, {{\Illuminate\Support\Facades\Auth::user()->name}}</span>
                    <img class="img-xs rounded-circle" src="{{asset('assets/images/faces/face8.jpg')}}"
                         alt="Profile image"> </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                    <a class="dropdown-item p-0">
                        <div class="d-flex border-bottom">
                            <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                                <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                            </div>
                            <div
                                class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                                <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                            </div>
                            <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                                <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                            </div>
                        </div>
                    </a>
                    <a class="dropdown-item mt-2">Ajustes</a>
                    <form action="{{route('logout')}}" method="POST" style="padding: 0">
                        {{csrf_field()}}
                        <button type="submit" class="dropdown-item">
                            Salir
                        </button>
                    </form>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                data-toggle="offcanvas">
            <span class="icon-menu"></span>
        </button>
    </div>
</nav>
