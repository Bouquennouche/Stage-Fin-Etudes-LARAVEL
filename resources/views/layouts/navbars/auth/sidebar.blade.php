<aside data-color="info"
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-white"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="align-items-center d-flex m-0 navbar-brand text-wrap" href="{{ route('dashboard') }}">
            <img src="../assets/img/logo.png" class="navbar-brand-img h-100" alt="...">
            <span class="ms-1 font-weight-bold">Gestion des stagiaires</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto h-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="{{ url('dashboard') }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;"
                            class="fas fa-lg fa-chart-line ps-2 pe-2 text-center text-dark {{ Request::is('dashboard') ? 'text-white' : 'text-dark' }} "
                            aria-hidden="true"></i>
                    </div>
                    <span class="nav-link-text ms-1">Tableau de bord</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin-profil') ? 'active' : '' }} " href="{{ url('admin-profil') }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1.2rem;"
                            class="fas fa-lg fa-user-secret ps-2 pe-2 text-center text-dark {{ Request::is('admin-profil') ? 'text-white' : 'text-dark' }} "
                            aria-hidden="true"></i>
                    </div>
                    <span class="nav-link-text ms-1">Profile d'admin</span>
                </a>
            </li>
            <li class="nav-item mt-2">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Gestion de reforme</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('labels') ? 'active' : '' }}" href="{{ url('labels') }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;"
                            class="fas fa-lg fa-solid fa-tags px-2 pb-1 text-center text-dark {{ Request::is('labels') ? 'text-white' : 'text-dark' }} "
                            aria-hidden="true"></i>
                    </div>
                    <span class="nav-link-text ms-1">Labels</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('entites') ? 'active' : '' }}" href="{{ url('entites') }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;"
                            class="fas fa-lg fa-regular fa-building px-2 pb-1 text-center text-dark {{ Request::is('entites') ? 'text-white' : 'text-dark' }} "
                            aria-hidden="true"></i>
                    </div>
                    <span class="nav-link-text ms-1">Entités</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('fabricants') ? 'active' : '' }}" href="{{ url('fabricants') }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;"
                            class="fas fa-lg fa-regular fa-code-branch px-2 pb-1 text-center text-dark {{ Request::is('fabricants') ? 'text-white' : 'text-dark' }} "
                            aria-hidden="true"></i>
                    </div>
                    <span class="nav-link-text ms-1">Fabricants</span>
                </a>
            </li>
            <li class="nav-item mt-2">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Gerer les stagiaires</h6>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('liste-stagiaires') ? 'active' : '' }}"
                    href="{{ url('liste-stagiaires') }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;"
                            class="fas fa-lg fa-list-ul ps-2 pe-2 text-center text-dark {{ Request::is('liste-stagiaires') ? 'text-white' : 'text-dark' }} "
                            aria-hidden="true"></i>
                    </div>
                    <span class="nav-link-text ms-1">Liste des stagiaires</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('liste-domaines') ? 'active' : '' }}"
                    href="{{ url('liste-domaines') }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;"
                            class="fas fa-lg fa-layer-group ps-2 pe-2 text-center text-dark {{ Request::is('liste-domaines') ? 'text-white' : 'text-dark' }} "
                            aria-hidden="true"></i>
                    </div>
                    <span class="nav-link-text ms-1">Domaines</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('liste-etabs') ? 'active' : '' }}" href="{{ url('liste-etabs') }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;"
                            class="fas fa-lg fa-landmark ps-2 pe-2 text-center text-dark {{ Request::is('liste-etabs') ? 'text-white' : 'text-dark' }} "
                            aria-hidden="true"></i>
                    </div>
                    <span class="nav-link-text ms-1">Etablissements</span>
                </a>
            </li>
            <li class="nav-item pb-2">
                <a class="nav-link {{ Request::is('liste-encadrants') ? 'active' : '' }}"
                    href="{{ url('liste-encadrants') }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;"
                            class="fas fa-lg fa-list-ul ps-2 pe-2 text-center text-dark {{ Request::is('liste-encadrants') ? 'text-white' : 'text-dark' }} "
                            aria-hidden="true"></i>
                    </div>
                    <span class="nav-link-text ms-1">Encadrants</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidenav-footer mx-1 ">

    </div>
</aside>
