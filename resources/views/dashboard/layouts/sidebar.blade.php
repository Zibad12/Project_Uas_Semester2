<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item nav-profile">
                <a href="#" class="nav-link">
                    <div class="nav-profile-image">
                        <img src="{{ asset('purple/images/faces/face1.jpg') }}" alt="profile">
                        <span class="login-status online"></span>
                        <!--change to offline or busy as needed-->
                    </div>
                    <div class="nav-profile-text d-flex flex-column">
                        <span class="font-weight-bold mb-2"> {{ Auth::user()->name }}</span>
                        <span class="text-secondary text-small"><small>{{ Auth::user()->email }}</small></span>
                    </div>
                    <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/dashboard') }}">
                    <span class="menu-title">Dashboard</span>
                    <i class="mdi mdi-home menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/dashboard/countries') }}">
                    <span class="menu-title">Countries</span>
                    <i class="mdi mdi-flag menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/dashboard/genres') }}">
                    <span class="menu-title">Genres</span>
                    <i class="mdi mdi-grid menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/dashboard/movies') }}">
                    <span class="menu-title">Movies</span>
                    <i class="mdi mdi-presentation-play menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/dashboard/comments') }}">
                    <span class="menu-title">Comments</span>
                    <i class="mdi mdi-comment menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/dashboard/users') }}">
                    <span class="menu-title">Users</span>
                    <i class="mdi mdi-account-multiple menu-icon"></i>
                </a>
            </li>
        </ul>
    </nav>

    <!-- partial -->
    <div class="main-panel">
