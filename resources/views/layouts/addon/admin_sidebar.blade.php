<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin <sup>Dashboard</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a href="{{Route('category.index')}}" class="nav-link">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Category</span></a>
    </li>
    <li class="nav-item">
        <a href="{{Route('currency.index')}}" class="nav-link">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Currency</span></a>
    </li>
    <li class="nav-item">
        <a href="{{Route('product.index')}}" class="nav-link">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Product</span></a>
    </li>
    <li class="nav-item">
        <a href="{{URL('/user')}}" class="nav-link">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Members</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Transaction</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Management Transaction</h6>
                <a class="collapse-item" href="{{URL('/stock')}}">Stock In</a>
                <a class="collapse-item" href="{{ URL('/order')}}">Order</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
   

    <!-- Divider -->
    <hr class="sidebar-divider">

   

 

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{URL('/')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>View Site </span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
        <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
        <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
    </div>

</ul>