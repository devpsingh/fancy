<div>
    {{-- The Master doesn't talk, he acts. --}}

        <!-- Page Sidebar Start-->
        <div class="page-sidebar">
            <div class="main-header-left d-none d-lg-block">
                <div class="logo-wrapper"><a href="index.html"><img class="blur-up lazyloaded" src="{{asset('adminassets/images/dashboard/logo.svg')}}" alt=""></a></div>
            </div>
            <div class="sidebar custom-scrollbar">
                <div class="sidebar-user text-center">
                    <div><img class="img-60 rounded-circle lazyloaded blur-up" src="{{asset('adminassets/images/dashboard/man.png')}}" alt="#">
                    </div>
                    <h6 class="mt-3 f-14">{{Auth::user()->name}}</h6>
                    <p>owner</p>
                </div>
                <ul class="sidebar-menu">
                    <li><a class="sidebar-header" href="{{route('admin.home')}}"><i data-feather="home"></i><span>Home</span></a></li>
                    <li><a class="sidebar-header" href="#"><i data-feather="box"></i> <span>Products</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="category.html"><i class="fa fa-circle"></i>Category</a></li>
                            <li><a href="category-sub.html"><i class="fa fa-circle"></i>Sub Category</a></li>
                            <li><a href="{{route('addproduct')}}"><i class="fa fa-circle"></i>Add product</a></li>
                        </ul>
                    </li>
                    
                    
                </ul>
            </div>
        </div>
        <!-- Page Sidebar Ends-->



</div>
