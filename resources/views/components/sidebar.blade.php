<div class="leftside-menu">

    <!-- Brand Logo Light -->
    <a href="/" class="logo logo-light">
        <span class="logo-lg">
            <img src="{{ url('assets/images/logo-wp.png') }}" alt="logo">
        </span>
        <span class="logo-sm">
            <img src="{{ url('assets/images/logo-sm.png') }}" alt="small logo">
        </span>
    </a>

    <!-- Brand Logo Dark -->
    <a href="/" class="logo logo-dark">
        <span class="logo-lg">
            <img src="{{ url('assets/images/logo-dark.png') }}" alt="dark logo">
        </span>
        <span class="logo-sm">
            <img src="{{ url('assets/images/logo-dark-sm.png') }}" alt="small logo">
        </span>
    </a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
        <i class="ri-checkbox-blank-circle-line align-middle"></i>
    </div>

    <!-- Full Sidebar Menu Close Button -->
    <div class="button-close-fullsidebar">
        <i class="ri-close-fill align-middle"></i>
    </div>

    <!-- Sidebar -left -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>

        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title">Menu</li>

            <li class="side-nav-item">
                <a href="{{ route('dashboard.index') }}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Dashboard </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('adiantamento.index') }}" class="side-nav-link">
                    <i class="uil-money-bill"></i>
                    <span> Adiantamento </span>
                </a>
            </li>

            {{-- <li class="side-nav-item">
                <a href="{{ route('pagamento.index') }}" class="side-nav-link">
                    <i class="uil-dollar-alt"></i>
                    <span> Salário </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('emprestimos.index') }}" class="side-nav-link">
                    <i class="uil-calender"></i>
                    <span> Emprestimos </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('documentos.index') }}" class="side-nav-link">
                    <i class="uil-comments-alt"></i>
                    <span> Documentos </span>
                </a>
            </li> --}}


            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarLayouts" aria-expanded="false" aria-controls="sidebarLayouts" class="side-nav-link">
                    <i class="uil-window"></i>
                    <span> Cadastros </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarLayouts">
                    <ul class="side-nav-second-level">
                        {{-- <li>
                            <a href="{{ route('employees.index') }}">Colaboradores</a>
                        </li>
                        <li>
                            <a href="{{ route('category.index') }}">Categorias</a>
                        </li>
                        <li>
                            <a href="{{ route('subcategory.index') }}">Subcategorias</a>
                        </li> --}}
                        <li>
                            <a href="{{ route('users.index') }}">Usuários</a>
                        </li>
                        <li>
                            <a href="{{ route('company.index') }}">Empresas</a>
                        </li>
                    </ul>
                </div>
            </li>



        </ul>
        <!--- End Sidemenu -->

        <div class="clearfix"></div>
    </div>
</div>