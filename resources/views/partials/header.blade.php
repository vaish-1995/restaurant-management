<header class="navbar navbar-expand navbar-light bg-white border-bottom fixed-top">
    <div class="container-fluid">
        <!-- Left Side: Logo & App Name -->
        <div class="d-flex align-items-center">
            <button class="btn sidebar-toggle d-md-none me-3">
                <i class="bi bi-list"></i>
            </button>
            <a class="navbar-brand me-4" href="{{ route('dashboard') }}">
                @if(config('app.logo'))
                    <img src="{{ asset('storage/'.config('app.logo')) }}" alt="{{ config('app.name') }}" height="40">
                @else
                    <span class="app-name">{{ config('app.name', 'Restaurant Admin') }}</span>
                @endif
            </a>

            <!-- Location Selector -->

        </div>

        <!-- Right Side: Icons -->
        <div class="d-flex align-items-center">
            <!-- Notification Icon -->
            <div class="location-selector ms-3">
                <select class="form-select form-select-sm border-0 bg-light">
                    <option selected>Select a location</option>
                    <option>Main Restaurant</option>
                    <option>Downtown Branch</option>
                    <option>Uptown Branch</option>
                </select>
            </div>
            <div class="nav-item dropdown me-2">
                <a class="nav-link position-relative" href="#" role="button" data-bs-toggle="dropdown">
                    <i class="bi bi-bell fs-5"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        3
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end p-0">
                    <div class="dropdown-header bg-light py-2">
                        <strong>Notifications (3)</strong>
                    </div>
                    <div class="dropdown-list">
            <a href="{{ route('orders') }}" class="dropdown-item">
                <div class="d-flex">
                    <div class="me-3">
                        <i class="bi bi-cart text-primary"></i>
                    </div>
                    <div>
                        <div>New order received</div>
                        <small class="text-muted">2 min ago</small>
                    </div>
                </div>
            </a>
            <!-- More notification items -->
        </div>
                </div>
            </div>

            <!-- Settings Icon -->
            <!-- <div class="nav-item dropdown me-3">
                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown">
                    <i class="bi bi-gear fs-5"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="#"><i class="bi bi-sliders me-2"></i> Settings</a>
                    <a class="dropdown-item" href="#"><i class="bi bi-moon me-2"></i> Dark Mode</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><i class="bi bi-question-circle me-2"></i> Help</a>
                </div>
            </div> -->

            <!-- User Profile -->
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown">
                    <div class="avatar me-2">
                        <img src="{{ asset('images/default-avatar.png') }}" class="rounded-circle" width="32" height="32" alt="User">
                    </div>
                    <span class="d-none d-md-inline">Admin</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="{{ route('profile') }}"><i class="bi bi-person me-2"></i> Profile</a>
    <!-- Logout Form -->
    <form method="POST" action="{{ route('logout') }}" id="logout-form">
        @csrf
        <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="bi bi-box-arrow-right me-2"></i> Logout
        </a>
    </form>
                </div>
            </div>
        </div>
    </div>
</header>
