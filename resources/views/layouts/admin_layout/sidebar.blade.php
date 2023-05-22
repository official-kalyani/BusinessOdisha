<div class="vertical-menu">

<div data-simplebar class="h-100">

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title" data-key="t-menu"></li>

            <li>
                <a href="{{ url('/dashboard') }}">
                    <i data-feather="home"></i>
                    <span class="badge rounded-pill bg-soft-success text-success float-end">9+</span>
                    <span data-key="t-dashboard"></span>
                </a>
            </li>

            <li class="menu-title" data-key="t-apps"> </li>
            
            @canany('Seller Access')
            <li>
                <a href="javascript: void(0);" class="has-arrow">
                <i data-feather="users"></i>
                    <span data-key="t-ecommerce">Seller Registration</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ url('/add-seller') }}" key="t-products">Add </a></li>
                    <li><a href="{{ url('/list-seller') }}" data-key="t-product-detail"> List Sellers</a></li>
                    
                </ul>
            </li>
            @endcanany
            <li>
                <a href="javascript: void(0);" class="has-arrow">
                <i data-feather="list"></i>
                    <span data-key="t-ecommerce"> Master </span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                
                    <li><a href="{{ url('/list-category') }}" data-key="t-product-detail"> Add Category</a></li>
                    <li><a href="{{ url('/list-city') }}" data-key="t-product-detail"> Add City</a></li>
                    @canany('Role access')
                    <li><a href="{{ route('roles.index') }}" data-key="t-product-detail"> Manage Role</a></li>
                    @endcanany
                    @canany('Permission access')
                    <li><a href="{{ route('permissions.index') }}" data-key="t-product-detail"> Manage Permission</a></li>
                    @endcanany
                    @canany('User access')
                    <li><a href="{{ route('users.index') }}" data-key="t-product-detail"> Manage Users</a></li>
                    @endcanany
                    
                   
                   
                    
                </ul>
            </li>
            <li>
                <a href="javascript: void(0);" class="has-arrow">
                <i data-feather="shopping-cart"></i>
                    <span data-key="t-ecommerce">Product/Service</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ url('/add-product-service') }}" key="t-products">Add </a></li>
                    <li><a href="{{ url('/list-product') }}" data-key="t-product-detail"> List Product</a></li>
                    <li><a href="{{ url('/list-service') }}" data-key="t-product-detail"> List Services</a></li>
                    
                </ul>
            </li>

            

        </ul>

        <!-- <div class="card sidebar-alert shadow-none text-center mx-4 mb-0 mt-5">
            <div class="card-body">
                <img src="{{ asset('images/admin_login_images/giftbox.png')}}" alt="">
                <div class="mt-4">
                    <h5 class="alertcard-title font-size-16"> </h5>
                    <p class="font-size-13">Upgrade your plan from a Free trial, to select ‘Business Plan’.
                    </p>
                    <a href="#!" class="btn btn-primary mt-2"> </a>
                </div>
            </div>
        </div> -->
    </div>
    <!-- Sidebar -->
</div>
</div>