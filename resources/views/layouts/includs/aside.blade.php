<!-- .app-aside -->
<aside class="app-aside app-aside-expand-md app-aside-light">
    <!-- .aside-content -->
    <div class="aside-content">
        <!-- .aside-header -->
        <header class="aside-header d-block d-md-none">
            <!-- .btn-account -->
            <button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside">
                <span class="user-avatar user-avatar-lg">
                    <img src="{{ asset('avatars/profile.jpg') }}" alt="">
                </span> 
                <span class="account-icon">
                    <span class="fa fa-caret-down fa-lg"></span>
                </span> 
                <span class="account-summary">
                    <span class="account-name">{{ Auth::user()->name }}</span> 
                    <span class="account-description">Marketing Manager</span>
                </span>
            </button>
            <!-- /.btn-account -->
            <!-- .dropdown-aside -->
            <div id="dropdown-aside" class="dropdown-aside collapse">
                <!-- dropdown-items -->
                <div class="pb-3">
                    <a class="dropdown-item" href="user-profile.html">
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
                    <!-- .menu-item -->
                    <li class="menu-item has-child">
                        <a href="#" class="menu-link">
                            <span class="menu-icon far fa-file"></span>
                            <span class="menu-text">App Pages</span> 
                            <span class="badge badge-warning">New</span>
                        </a> 
                        <!-- child menu -->
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="page-clients.html" class="menu-link">
                                    Clients
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="page-teams.html" class="menu-link">
                                    Teams
                                </a>
                            </li>
                            <li class="menu-item has-child">
                                <a href="#" class="menu-link">
                                    Team
                                </a> 
                                <!-- grand child menu -->
                                <ul class="menu">
                                    <li class="menu-item">
                                        <a href="page-team.html" class="menu-link">
                                            Overview
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="page-team-feeds.html" class="menu-link">
                                            Feeds
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="page-team-projects.html" class="menu-link">
                                            Projects
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="page-team-members.html" class="menu-link">
                                            Members
                                        </a>
                                    </li>
                                </ul>
                                <!-- /grand child menu -->
                            </li>
                            <li class="menu-item has-child">
                                <a href="#" class="menu-link">Project</a>
                                <!-- grand child menu -->
                                <ul class="menu">
                                    <li class="menu-item">
                                        <a href="page-project.html" class="menu-link">
                                            Overview
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="page-project-board.html" class="menu-link">
                                            Board
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="page-project-gantt.html" class="menu-link">
                                            Gantt View
                                        </a>
                                    </li>
                                </ul>
                                <!-- /grand child menu -->
                            </li>
                            <li class="menu-item">
                                <a href="page-calendar.html" class="menu-link">
                                    Calendar
                                </a>
                            </li>
                            <li class="menu-item has-child">
                                <a href="#" class="menu-link">Invoices</a>
                                <!-- grand child menu -->
                                <ul class="menu">
                                    <li class="menu-item">
                                        <a href="page-invoices.html" class="menu-link">List</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="page-invoice.html" class="menu-link">Details</a>
                                    </li>
                                </ul><!-- /grand child menu -->
                            </li>
                            <li class="menu-item">
                                <a href="page-messages.html" class="menu-link">Messages</a>
                            </li>
                            <li class="menu-item">
                                <a href="page-conversations.html" class="menu-link">Conversations</a>
                            </li>
                        </ul><!-- /child menu -->
                    </li>
                    <!-- /.menu-item -->
                    <!-- .menu-item -->
                    <li class="menu-item has-child">
                        <a href="#" class="menu-link">
                            <span class="menu-icon oi oi-wrench"></span> 
                            <span class="menu-text">Auth</span>
                        </a>
                        <!-- child menu -->
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="auth-comingsoon-v1.html" class="menu-link">Coming Soon v1</a>
                            </li>
                            <li class="menu-item">
                                <a href="auth-comingsoon-v2.html" class="menu-link">Coming Soon v2</a>
                            </li>
                            <li class="menu-item">
                                <a href="auth-cookie-consent.html" class="menu-link">Cookie Consent</a>
                            </li>
                            <li class="menu-item">
                                <a href="auth-empty-state.html" class="menu-link">Empty State</a>
                            </li>
                            <li class="menu-item">
                                <a href="auth-error-v1.html" class="menu-link">Error Page v1</a>
                            </li>
                            <li class="menu-item">
                                <a href="auth-error-v2.html" class="menu-link">Error Page v2</a>
                            </li>
                            <li class="menu-item">
                                <a href="auth-error-v3.html" class="menu-link">Error Page v3</a>
                            </li>
                            <li class="menu-item">
                                <a href="auth-maintenance.html" class="menu-link">Maintenance</a>
                            </li>
                            <li class="menu-item">
                                <a href="auth-page-message.html" class="menu-link">Page Message</a>
                            </li>
                            <li class="menu-item">
                                <a href="auth-session-timeout.html" class="menu-link">Session Timeout</a>
                            </li>
                            <li class="menu-item">
                                <a href="auth-signin-v1.html" class="menu-link">Sign In v1</a>
                            </li>
                            <li class="menu-item">
                                <a href="auth-signin-v2.html" class="menu-link">Sign In v2</a>
                            </li>
                            <li class="menu-item">
                                <a href="auth-signup.html" class="menu-link">Sign Up</a>
                            </li>
                            <li class="menu-item">
                                <a href="auth-recovery-username.html" class="menu-link">Recovery Username</a>
                            </li>
                            <li class="menu-item">
                                <a href="auth-recovery-password.html" class="menu-link">Recovery Password</a>
                            </li>
                            <li class="menu-item">
                                <a href="auth-lockscreen.html" class="menu-link">Screen Locked</a>
                            </li>
                        </ul>
                        <!-- /child menu -->
                    </li>
                    <!-- /.menu-item -->
                    <!-- .menu-item -->
                    <li class="menu-item has-child">
                        <a href="#" class="menu-link">
                            <span class="menu-icon oi oi-person"></span> 
                            <span class="menu-text">User</span>
                        </a>
                        <!-- child menu -->
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="user-profile.html" class="menu-link">Profile</a>
                            </li>
                            <li class="menu-item">
                                <a href="user-activities.html" class="menu-link">Activities</a>
                            </li>
                            <li class="menu-item">
                                <a href="user-teams.html" class="menu-link">Teams</a>
                            </li>
                            <li class="menu-item">
                                <a href="user-projects.html" class="menu-link">Projects</a>
                            </li>
                            <li class="menu-item">
                                <a href="user-tasks.html" class="menu-link">Tasks</a>
                            </li>
                            <li class="menu-item">
                                <a href="user-profile-settings.html" class="menu-link">Profile Settings</a>
                            </li>
                            <li class="menu-item">
                                <a href="user-account-settings.html" class="menu-link">Account Settings</a>
                            </li>
                            <li class="menu-item">
                                <a href="user-billing-settings.html" class="menu-link">Billing Settings</a>
                            </li>
                            <li class="menu-item">
                                <a href="user-notification-settings.html" class="menu-link">Notification Settings</a>
                            </li>
                        </ul>
                        <!-- /child menu -->
                    </li><!-- /.menu-item -->
                    <!-- .menu-item -->
                    <li class="menu-item has-child">
                        <a href="#" class="menu-link">
                            <span class="menu-icon oi oi-browser"></span> 
                            <span class="menu-text">Layouts</span> 
                            <span class="badge badge-subtle badge-success">+4</span>
                        </a> <!-- child menu -->
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="layout-blank.html" class="menu-link">Blank Page</a>
                            </li>
                            <li class="menu-item">
                                <a href="layout-nosearch.html" class="menu-link">Header no Search</a>
                            </li>
                            <li class="menu-item">
                                <a href="layout-fullwidth.html" class="menu-link">Full Width</a>
                            </li>
                            <li class="menu-item">
                                <a href="layout-pagenavs.html" class="menu-link">Page Navs</a>
                            </li>
                            <li class="menu-item">
                                <a href="layout-pagecover.html" class="menu-link">Page Cover</a>
                            </li>
                            <li class="menu-item">
                              <a href="layout-pagecover-img.html" class="menu-link">Cover Image</a>
                            </li>
                            <li class="menu-item">
                                <a href="layout-pagesidebar.html" class="menu-link">Page Sidebar</a>
                            </li>
                            <li class="menu-item">
                              <a href="layout-pagesidebar-fluid.html" class="menu-link">Sidebar Fluid</a>
                            </li>
                            <li class="menu-item">
                                <a href="layout-pagesidebar-hidden.html" class="menu-link">Sidebar Hidden</a>
                            </li>
                            <li class="menu-item">
                                <a href="layout-custom.html" class="menu-link">Custom</a>
                            </li>
                        </ul>
                        <!-- /child menu -->
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