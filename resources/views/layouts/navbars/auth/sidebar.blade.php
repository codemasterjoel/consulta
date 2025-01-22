<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 pb-2 z-30" id="sidenav-main" style="overflow-y: hidden;">
    <div class="sidenav-header mb-10">
        <i class="fas fa-times p-3 cursor-pointer text-seconsdary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="py-2 w-30">
            <img src="{{asset('img/logo consulta.png')}}" class="">
        </a>
    </div>
    {{-- <hr class="horizontal dark mt-0"> --}}
    <div class="navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            {{-- INICIO --}}   
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}" href="{{ route('dashboard') }}">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <span class="material-icons {{ in_array(request()->route()->getName(),['dashboard']) ? 'text-white' : 'text-dark' }}">home</span>
                    </div>
                    <span class="nav-link-text ms-1"><b>INICIO</b></span>
                </a>
            </li>
            {{-- PERFIL DE USUARIO --}}
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'consulta' ? 'active' : '' }}" href="{{ route('consulta') }}">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <span class="material-icons {{ in_array(request()->route()->getName(),['consulta']) ? 'text-white' : 'text-dark' }}">account_box</span>
                        </div>
                        <span class="nav-link-text ms-1"><b>3ra CONSULTA</b></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'consulta' ? 'active' : '' }}" href="{{ route('PrimSeguConsulta') }}">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <span class="material-icons {{ in_array(request()->route()->getName(),['consulta']) ? 'text-white' : 'text-dark' }}">account_box</span>
                        </div>
                        <span class="nav-link-text ms-1"><b>1er y 2da CONSULTA</b></span>
                    </a>
                </li>
            {{-- REGISTRO DE LSB --}}
                {{-- <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'lsb' ? 'active' : '' }}" href="{{route('dashboard')}}">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <span class="material-icons {{ in_array(request()->route()->getName(),['lsb']) ? 'text-white' : 'text-dark' }}">person</span>
                        </div>
                        <span class="nav-link-text ms-1"><b>MENÚ</b></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'ffm' ? 'active' : '' }}" href="{{ route('dashboard') }}">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <span class="material-icons {{ in_array(request()->route()->getName(),['ffm']) ? 'text-white' : 'text-dark' }}">person</span>
                        </div>
                        <span class="nav-link-text ms-1"><b>MENÚ</b></span>
                    </a>
                </li> --}}
            {{-- REGISTRO DE NBC --}}
                {{-- <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'nbc' ? 'active' : '' }}" href="{{route('dashboard')}}">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <span class="material-icons {{ in_array(request()->route()->getName(),['nbc']) ? 'text-white' : 'text-dark' }}">groups</span>
                        </div>
                        <span class="nav-link-text ms-1"><b>MENÚ</b></span>
                    </a>
                </li> --}}

            <!-- FORMACION -->
             
            @if (auth()->user()->nivel_id == 1)
                {{-- <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'formacion' ? 'active' : '' }}" href="{{route('dashboard')}}">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <span class="material-icons {{ in_array(request()->route()->getName(),['formacion']) ? 'text-white' : 'text-dark' }}">auto_stories</span>
                        </div>
                        <span class="nav-link-text ms-1"><b>MENÚ</b></span>
                    </a>
                </li> --}}
            @endif

            {{-- MAPA --}}
            @if (auth()->user()->nivel_id == 1)
                {{-- <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'mapa' ? 'active' : '' }}" href="{{ route('dashboard') }}">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <span class="material-icons {{ in_array(request()->route()->getName(),['mapa']) ? 'text-white' : 'text-dark' }}">person_pin_circle</span>
                        </div>
                        <span class="nav-link-text ms-1"><b>MENÚ</b></span>
                    </a>
                </li> --}}
            @endif

            {{-- REPORTES --}}
            <!-- @if (auth()->user()->nivel_id == 1)
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'reporte' ? 'active' : '' }}" href="{{ route('dashboard') }}">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <span class="material-icons {{ in_array(request()->route()->getName(),['reporte']) ? 'text-white' : 'text-dark' }}">print</span>
                        </div>
                        <span class="nav-link-text ms-1"><b>REPORTE</b></span>
                    </a>
                </li>
            @endif -->

            @if (auth()->user()->nivel_id == 1)
            <li class="nav-item mt-2">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">CONFIGURACIÓN</h6>
            </li>
            @endif
            @if (auth()->user()->nivel_id == 1)
                {{-- GESTIÓN DE USUARIOS --}}
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'usuario' ? 'active' : '' }}" href="{{ route('dashboard') }}">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <span class="material-icons {{ in_array(request()->route()->getName(),['usuario']) ? 'text-white' : 'text-dark' }}">manage_accounts</span>
                        </div>
                        <span class="nav-link-text ms-1"><b>GESTIÓN DE USUARIOS</b></span>
                    </a>
                </li>
                {{-- SAIME --}}
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'saime' ? 'active' : '' }}" href="{{ route('dashboard')}}">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <span class="material-icons {{ in_array(request()->route()->getName(),['saime']) ? 'text-white' : 'text-dark' }}">business</span>
                        </div>
                        <span class="nav-link-text ms-1"><b>SAIME</b></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'sessions' ? 'active' : '' }}" href="{{ route('dashboard')}}">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <span class="material-icons {{ in_array(request()->route()->getName(),['sessions']) ? 'text-white' : 'text-dark' }}">business</span>
                        </div>
                        <span class="nav-link-text ms-1"><b>SESIONES</b></span>
                    </a>
                </li>
            @endif
            <li class="nav-item">
                <a href="{{ url('logout') }}" class=" nav-link btn bg-gradient-danger active text-white" role="button" aria-pressed="true">Salir</a>
            </li>
        </ul>
    </div>
</aside>