<nav class="navbar navbar-expand-lg navbar-dark bg-qot">
    <div class="container">
        <a class="navbar-brand" href="{{ route('admin.dashboard') }}">{{ __('QOT Admin') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
                aria-controls="navbar" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link {{ routeIs('admin.dashboard') }}"
                       href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ routeIs('admin.mappool.suggestions') }}"
                       href="{{ route('admin.mappool.suggestions') }}">{{ __('Map suggestions') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ routeIs('admin.staffApplications') }}"
                       href="{{ route('admin.staffApplications') }}">{{ __('Staff applications') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ routeIs('admin.users') }}"
                       href="{{ route('admin.users') }}">{{ __('Users') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ routeIs('admin.mappool.rounds') }}" href="{{ route('admin.mappool.rounds') }}">
                        Mappool
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ routeIs('admin.settings.settings') }}"
                       href="{{ route('admin.settings.settings') }}">{{ __('Settings') }}</a>
                </li>
            </ul>

            @auth
                <ul class="navbar-nav ms-md-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                           aria-haspopup="true" aria-expanded="false">
                            <img src="{{ $loggedUser['quaver_avatar'] }}" alt="{{ $loggedUser['quaver_username'] }}"
                                 class="rounded" width="30" height="30">
                            {{ $loggedUser['quaver_username'] }}
                        </a>
                        <div class="dropdown-menu">
                            @if($loggedUser['role'] === 100)
                                <a class="dropdown-item" href="{{ route('home') }}">{{ __('Back to website') }}</a>
                                <div class="dropdown-divider"></div>
                            @endif
                            @if(empty($loggedUser['discord_user_id']))
                                <a class="dropdown-item" href="#">{{ __('Connect with Discord') }}</a>
                                <div class="dropdown-divider"></div>
                            @endif
                            <a class="dropdown-item" href="{{ route('logout') }}">{{ __('Logout') }}</a>
                        </div>
                    </li>
                </ul>
            @endauth
        </div>
    </div>
</nav>
