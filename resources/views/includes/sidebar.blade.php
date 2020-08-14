    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-brand-text mx-3">ADMIN</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Route::is('home') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('home')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>
    <li class="nav-item {{ Route::is('buys.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('buys.index') }}">
            <i class="fas fa-dollar-sign"></i>
        <span>Buy</span></a>
    </li>
    
    <!-- Divider -->
    <hr class="sidebar-divider">

            <li class="nav-item {{ Route::is('employes.index') || Route::is('employes.create') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('employes.index') }}">
                    <i class="fas fa-users"></i>
                <span>Employes</span></a>
            </li>

            <li class="nav-item {{ Route::is('supliers.index') || Route::is('supliers.create') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('supliers.index') }}">
                    <i class="fas fa-truck-moving"></i>
                <span>Supliers</span></a>
            </li>

            <li class="nav-item {{ Route::is('categories.index') || Route::is('categories.create') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('categories.index') }}">
                    <i class="fas fa-list"></i>
                <span>Categories</span></a>
            </li>

            <li class="nav-item {{ Route::is('products.index') || Route::is('products.create') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('products.index') }}">
                    <i class="fas fa-boxes"></i>
                <span>Products</span></a>
            </li>

            <li class="nav-item {{ Route::is('expenses.index') || Route::is('expenses.create') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('expenses.index') }}">
                    <i class="fas fa-money-check-alt"></i>
                <span>Expenses</span></a>
            </li>

            <li class="nav-item {{ Route::is('customers.index') || Route::is('customers.create') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('customers.index') }}">
                    <i class="far fa-user"></i>
                <span>Customers</span></a>
            </li>

            <li class="nav-item {{ Route::is('orders.index') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('orders.index') }}">
                    <i class="far fa-user"></i>
                <span>Orders</span></a>
            </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    </ul>
    <!-- End of Sidebar -->