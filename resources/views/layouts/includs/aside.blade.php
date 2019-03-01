<!-- .app-aside -->
<aside class="app-aside app-aside-expand-md app-aside-light">
    <!-- .aside-content -->
    <div class="aside-content">
        <!-- .aside-header -->
        <header class="aside-header d-block d-md-none">
            <!-- .btn-account -->
            <button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside">
                <span class="user-avatar user-avatar-lg">
                    @isset(Auth::user()->profile)
                        <img src="{{ Auth::user()->profile->avatar }}" alt="">
                    @else
                        <img src="{{ asset('avatars/default.png') }}" alt="">
                    @endisset
                </span> 
                <span class="account-icon">
                    <span class="fa fa-caret-down fa-lg"></span>
                </span> 
                <span class="account-summary">
                    <span class="account-name">{{ Auth::user()->name }}</span> 
                    <span class="account-description">
                        @isset(Auth::user()->profile)
                            {{ Auth::user()->profile->studies }}
                        @endisset
                    </span>
                </span>
            </button>
            <!-- /.btn-account -->
            <!-- .dropdown-aside -->
            <div id="dropdown-aside" class="dropdown-aside collapse">
                <!-- dropdown-items -->
                <div class="pb-3">
                    <a class="dropdown-item" href="{{ route('profile.index') }}">
                        <span class="dropdown-icon oi oi-person"></span> 
                        {{ __('Profile') }}
                    </a>
                    <a class="dropdown-item" href="{{ route('logout') }}">
                        <span class="dropdown-icon oi oi-account-logout"></span> 
                        {{ __('Logout') }}
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">{{ __('Help Center') }}</a> 
                    <a class="dropdown-item" href="#">{{ __('Ask Forum') }}</a> 
                    <a class="dropdown-item" href="#">{{ __('Keyboard Shortcuts') }}</a>
                </div><!-- /dropdown-items -->
            </div><!-- /.dropdown-aside -->
        </header><!-- /.aside-header -->
        <!-- .aside-menu -->
        <div class="aside-menu overflow-hidden">
            <!-- .stacked-menu -->
            <nav id="stacked-menu" class="stacked-menu">
                <!-- .menu -->
                <ul class="menu">
                    <!-- .menu-item -->
                    <li class="menu-item has-active">
                        <a href="{{ route('home') }}" class="menu-link">
                            <span class="menu-icon fas fa-home"></span>
                            <span class="menu-text">Dashboard</span>
                        </a>
                    </li>
                    <!-- /.menu-item -->
                    @can('settings.index')
                    <!-- .menu-header -->
                    <li class="menu-header">Interfaces </li><!-- /.menu-header -->
                    <!-- .menu-item -->
                    <li class="menu-item has-child">
                        <a href="#" class="menu-link">
                            <span class="menu-icon oi oi-puzzle-piece"></span> 
                            <span class="menu-text">Components</span>
                        </a> 
                        <!-- child menu -->
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="component-general.html" class="menu-link">General</a>
                            </li>
                            <li class="menu-item">
                                <a href="component-icons.html" class="menu-link">Icons</a>
                            </li>
                            <li class="menu-item">
                                <a href="component-rich-media.html" class="menu-link">Rich Media</a>
                            </li>
                            <li class="menu-item">
                                <a href="component-list-views.html" class="menu-link">List Views</a>
                            </li>
                            <li class="menu-item">
                                <a href="component-sortable-nestable.html" class="menu-link">Sortable & Nestable</a>
                            </li>
                            <li class="menu-item">
                                <a href="component-activity.html" class="menu-link">Activity</a>
                            </li>
                            <li class="menu-item">
                                <a href="component-steps.html" class="menu-link">Steps</a>
                            </li>
                            <li class="menu-item">
                                <a href="component-tasks.html" class="menu-link">Tasks</a>
                            </li>
                            <li class="menu-item">
                                <a href="component-metrics.html" class="menu-link">Metrics</a>
                            </li>
                        </ul>
                        <!-- /child menu -->
                    </li>
                    @endcan
                    <!-- /.menu-item -->
                </ul><!-- /.menu -->
            </nav><!-- /.stacked-menu -->
        </div><!-- /.aside-menu -->
        <!-- Skin changer -->
        <footer class="aside-footer border-top p-3">
            <button class="btn btn-light btn-block text-primary" data-toggle="skin">Night mode <i class="fas fa-moon ml-1"></i></button>
        </footer><!-- /Skin changer -->
    </div>
    <!-- /.aside-content -->
</aside>
<!-- /.app-aside -->