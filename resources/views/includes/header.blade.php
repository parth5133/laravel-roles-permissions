<div class="horizontal-menu">
    <!-- top navbar -->
    <nav class="navbar top-navbar col-lg-12 col-12 p-0">
        <div class="container-fluid">
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo" href="index.html"><img src="{{ asset('img/logo.png') }}"
                            alt="logo" /></a>
                    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset('img/favicon.png') }}"
                            alt="logo" /></a>
                </div>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                            id="profileDropdown">
                            <span class="online-status"></span>
                            <img src="{{ asset('img/users/profile.jpg') }}" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="mdi mdi-account text-primary"></i>
                                {{ auth()->user()->name }}
                            </a>
                            <form method="POST" action="{{ route('admin.logout') }}">
                                @csrf
                                <a class="dropdown-item" href="{{ route('admin.logout') }}"
                                    onclick="event.preventDefault();this.closest('form').submit();">
                                    <i class="mdi mdi-logout-variant text-primary"></i>
                                    Logout
                                </a>
                            </form>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="horizontal-menu-toggle">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </div>
    </nav>
    <!-- bottom navbar -->
    <nav class="bottom-navbar">
        <div class="container">
            <ul class="nav page-navigation">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.dashboard') }}">
                        <i class="mdi mdi-view-dashboard menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    @canany('Role access', 'Role add', 'Role edit', 'Role delete', 'User access', 'User add', 'User
                        edit', 'User delete', 'Permission access', 'Permission add', 'Permission edit', 'Permission delete')
                        <a href="#" class="nav-link">
                            <i class="mdi mdi-group menu-icon"></i>
                            <span class="menu-title">User Mangement</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="submenu">
                            <ul>
                                @canany('Role access', 'Role add', 'Role edit', 'Role delete')
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('admin.roles.index') }}"><i
                                                class="mdi mdi-share menu-icon"></i> Roles</a>
                                    </li>
                                @endcanany
                                @canany('User access', 'User add', 'User edit', 'User delete')
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('admin.users.index') }}"><i
                                                class="mdi mdi-share menu-icon"></i> Users</a>
                                    </li>
                                @endcanany
                                @canany('Permission access', 'Permission add', 'Permission edit', 'Permission delete')
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('admin.permissions.index') }}"><i
                                                class="mdi mdi-share menu-icon"></i> Permission</a>
                                    </li>
                                @endcanany
                            </ul>
                        </div>
                    @endcanany
                </li>
                @canany('Post access', 'Post add', 'Post edit', 'Post delete')
                    <li class="nav-item">
                        <a href="{{ route('admin.posts.index') }}" class="nav-link">
                            <i class="mdi mdi-format-float-left menu-icon"></i>
                            <span class="menu-title">Posts</span>
                            <i class="menu-arrow"></i>
                        </a>
                    </li>
                @endcanany
            </ul>
        </div>
    </nav>
</div>
