<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="pl-5 brand-link d-flex">
        <h1 class="text-purple-800 text-5xlg">9<span class="text-lg">Yards</span></h1>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
        with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="{{ route('dashboard') }}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right"></i>
                        </p>
                    </a>
                </li>
                <li class="nav-header">Users Section</li>
                <li class="nav-item">
                    <a href="{{ route('view_users') }}" class="nav-link">
                        <i class="nav-icon fa fa-users"></i>
                        <p>
                            User
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('view_users') }}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Users</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('ban_users') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ban Users</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('Add_users') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Users</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">Home Page Section</li>
                <li class="nav-item">
                    <a href=" #" class="nav-link">
                        <i class="nav-icon fa fa-envelope"></i>
                        <p>
                            Home Page
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('Change_logo') }}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Top NavBar Logo</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('View_Header_Section') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> Top Header Section</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('Add_slideShow') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Header SlideShow</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('View_leading_page') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Leading Page Sections</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href=" #" class="nav-link">
                                <i class="fas fa-code-branch"></i>
                                <p>
                                    Projects Section
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('view_projects') }}" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Projects</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('view_projects') }}" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Projects</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
