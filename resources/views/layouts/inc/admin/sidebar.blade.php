<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{url('admin/dashboard')}}">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#category" aria-expanded="false"
                aria-controls="category">
                <i class="fa fa-list-ul menu-icon"></i>
                <span class="menu-title">Category</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="category">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{url('admin/category/create-category')}}">Add Category</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('admin/category')}}">View Category</a></li>
                </ul>
            </div>
        </li>
        
        
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#products" aria-expanded="false"
                aria-controls="products">
                <i class="fa fa-plus-square menu-icon"></i>
                <span class="menu-title">Products</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="products">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{url('admin/products/create-products')}}">Add Products</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{url('admin/products')}}">View Products</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('admin/brands')}}">
                <i class="fa fa-list-ul menu-icon"></i>
                <span class="menu-title">Brands</span>
            </a>
        </li>
        
    </ul>
</nav>