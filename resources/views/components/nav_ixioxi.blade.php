<div class="nk-header nk-header-fixed is-light">
    <div class="container-fluid">
        <div class="nk-header-wrap">
            {{-- <div class="nk-menu-trigger d-xl-none ms-n1">
                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
            </div> --}}
            <div class="nk-header-brand d-xl-none">
                <a href="/home" class="logo-link">
                    <img class="logo-dark logo-img" src="{{asset('demo/images/logo-ixioxi.png')}}" srcset="{{asset('demo/images/logo-ixioxi.png 2x')}}" alt="logo-dark">
                </a>
            </div>
            <div class="nk-header-news d-none d-xl-block">
                <div class="nk-news-list">
                    <a class="nk-news-item" href="{{ route('dashboard') }}">
                        <a href="/home" class="logo-link nk-sidebar-logo">
                            <img class="logo-dark logo-img" src="{{asset('demo/images/logo-ixioxi.png')}}" srcset="{{asset('demo/images/logo-ixioxi.png 2x')}}" alt="logo-dark">
                        </a>
                    </a>
                </div>
            </div>
            <div class="nk-header-tools">
                <ul class="nk-quick-nav">
                    
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <div class="user-toggle">
                                <div class="user-avatar sm">
                                    <em class="icon ni ni-user-alt"></em>
                                </div>
                                <div class="user-info d-none d-md-block">
                                    <div class="user-status">{{hasRole(Auth::user()->id)}}</div>
                                    <div class="user-name dropdown-indicator">{{ Auth::user()->name }}</div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1">
                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                <div class="user-card">
                                    <div class="user-avatar">
                                        <span>{{Auth::user()->name[0] }}</span>
                                    </div>
                                    <div class="user-info">
                                        <span class="lead-text">{{ Auth::user()->name }}</span>
                                        <span class="sub-text">{{ Auth::user()->email }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="{{ route('view.edit.user') }}"><em class="icon ni ni-user-alt"></em><span>Votre Profil</span></a></li>
                                    @if (hasRole(Auth::user()->id) === 'Administrateur')
                                    <li><a href="#" data-target="addProduct" class="toggle"><em class="icon ni ni-setting-alt"></em><span>Ajouter un utilisateur</span></a></li>
                                    <li><a href="{{ route('user.list') }}"><em class="icon ni ni-activity-alt"></em><span>Gestion utilisateur</span></a></li>
                                    @endif
                                    {{-- <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Mode Nuit</span></a></li> --}}
                                </ul>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><em class="icon ni ni-signout"></em><span>Déconnexion</span></a></li>
                                    </li>   
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </ul>
                            </div>
                        </div>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
</div>