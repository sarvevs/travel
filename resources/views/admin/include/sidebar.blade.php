<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="{{ route('admin.main.index') }}" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>
                    Головна
                </p>
            </a>
        <li class="nav-item">
            <a href="{{ route('admin.packages.index') }}" class="nav-link">
                <i class=" nav-icon fas fa-users "></i>
                <p>
                    Пропозиції
                </p>
            </a>
        <li class="nav-item">
            <a href="{{ route('admin.gallery.index') }}" class="nav-link">
                <i class=" nav-icon fas fa-clipboard"></i>
                <p>
                    Галерея
                </p>
            </a>
        <li class="nav-item">
            <a href="{{ route('admin.user_requests.index') }}" class="nav-link">
                <i class=" nav-icon fas fa-th-list"></i>
                <p>
                    Заявки
                </p>
            </a>

            <div class="sidebar"></div>
    </ul>

</aside>
