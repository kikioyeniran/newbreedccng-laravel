<!-- navbar -->
<!-- ============================================================== -->
<div class="dashboard-header">
    <nav class="navbar navbar-expand-lg bg-white fixed-top">
        <a class="navbar-brand" href="#"><img class="logo-img" src="../images/logoBlue2.png" alt="logo"> NEWBREED CC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto navbar-right-top">
                <li class="nav-item">
                    <div id="custom-search" class="top-search-bar">
                        <input class="form-control" type="text" placeholder="Search..">
                    </div>
                </li>
                <li class="nav-item dropdown connection">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-fw fa-th"></i> </a>

                </li>
                <li class="nav-item dropdown nav-user">
                    <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-user mr-2 user-avatar-md rounded-circle"></i></a>
                    <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                        <div class="nav-user-info">
                            <h5 class="mb-0 text-white nav-user-name">{{ Auth::user()->name }}</h5>

                            <span class="status"></span><span class="ml-2">Available</span>
                        </div>
                        <a class="dropdown-item" href="#"><i class="fa fa-user mr-2"></i>Account</a>
                        <!-- <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>-->
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="fas fa-power-off mr-2"></i>{{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>

            </ul>
        </div>
    </nav>
</div>
<!-- ============================================================== -->
<!-- end navbar -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- left sidebar -->
<!-- ============================================================== -->
<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">About</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Pages
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active" href="/landing/1/edit" aria-expanded="false"><i class="fa fa-fw fa-user-circle"></i>Landing Page <span class="badge badge-success">6</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/events/create" aria-expanded="false"><i class="fa fa-fw fa-rocket"></i>Events</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/sermons/create" aria-expanded="false"><i class="fas fa-fw fa-chart-pie"></i>Sermons</a>

                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="/blog/create" aria-expanded="false"><i class="fab fa-fw fa-wpforms"></i>Blog</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/gallery/create" aria-expanded="false"><i class="fas fa-fw fa-table"></i>Gallery</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/testimony/create" aria-expanded="false"><i class="fas fa-fw fa-table"></i>Testimonies</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/vision/1/edit" aria-expanded="false"><i class="fas fa-fw fa-table"></i>Vision/Mission</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/background/create" aria-expanded="false"><i class="fas fa-fw fa-table"></i>Background Photos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/leadsteward/1/edit" aria-expanded="false"><i class="fas fa-fw fa-table"></i>Lead Steward</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/ebooks/create" aria-expanded="false"><i class="fas fa-fw fa-table"></i>E-books</a>
                    </li>
                    <li class="nav-divider">
                        Features
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="give.php" aria-expanded="false"><i class="fas fa-fw fa-file"></i> View Give List </a>

                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="/contact/create" aria-expanded="false"><i class="fas fa-fw fa-file"></i> View Contact List </a>

                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- ============================================================== -->
<!-- end left sidebar -->