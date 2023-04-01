<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title', config('app.name'))</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('adminassets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('adminassets/css/sb-admin-2.css') }}" rel="stylesheet">

    @yield('styles')
    @if(app()->currentLocale()=='ar')
    <style>
        body{
            direction: rtl;
            text-align: right;
        }
        .sidebar{
            padding: 0;
        }
        .sidebar .nav-item .nav-link{
            text-align: right;
        }

        .sidebar .nav-item .nav-link[data-toggle="collapse"]::after{
         float: left;
         transform:rotate(180deg);
        }
        .ml-auto, .mx-auto {
         margin-right: auto !important;
         margin-left:unset !important;
}
.dropdown-item{
    text-align: right;
}
.sidebar #sidebarToggle{
    transform:rotate(180deg);
}
    </style>
    @endif

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('site.index') }}">
                <div class="sidebar-brand-icon ">
                    <i class="fas fa-clinic-medical"></i>
                </div>
                <div class="sidebar-brand-text mx-3">{{ __('site.Beauty clinic') }}</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.index')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>{{ __('site.Main') }}</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider mb-0">


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsecategory"
                    aria-expanded="true" aria-controls="collapsecategory">
                    <i class="fas fa-fw fa-tags"></i>
                    <span>{{ __("site.Categories") }}
                    </span>
                </a>
                <div id="collapsecategory" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('admin.categories.index') }}">{{ __('site.ALL Categories') }}</a>
                        <a class="collapse-item" href="{{ route('admin.categories.create') }}">{{ __('site.Add New Category') }} </a>
                        <a class="collapse-item" href="{{ route('admin.categories.trash') }}">{{ __('site.Trash Category') }} </a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider mb-0">

     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseproduct"
            aria-expanded="true" aria-controls="collapseproduct">
            <i class="fas fa-fw fa-heart"></i>
            <span>{{ __("site.Products") }}
            </span>
        </a>
        <div id="collapseproduct" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.products.index') }}">{{ __('site.ALL Products') }}</a>
                <a class="collapse-item" href="{{ route('admin.products.create') }}">{{ __('site.Add New Product') }}</a>
                <a class="collapse-item" href="{{ route('admin.products.trash') }}">{{ __('site.Trash Product') }}</a>
            </div>
        </div>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider mb-0">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
       <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#skin"
           aria-expanded="true" aria-controls="skin">
           <i class="fas fa-smile"></i>
           <span>{{ __('site.Oily Skin') }}
           </span>
       </a>
       <div id="skin" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
           <div class="bg-white py-2 collapse-inner rounded">
               <a class="collapse-item" href="{{ route('admin.oilyskin.index') }}">{{ __('site.ALL Article') }}</a>
               <a class="collapse-item" href="{{ route('admin.oilyskin.create') }}">{{ __('site.Add New Article') }}</a>
               <a class="collapse-item" href="{{ route('admin.oilyskin.trash') }}">{{ __('site.Trash Article') }}</a>
           </div>
       </div>
   </li>
    <!-- Divider -->
    <hr class="sidebar-divider mb-0">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#skins"
            aria-expanded="true" aria-controls="skins">
            <i class="fas fa-smile"></i>
            <span>{{ __('site.Normal Skin') }}
            </span>
        </a>
        <div id="skins" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.normalskin.index') }}">{{ __('site.ALL Article') }}</a>
                <a class="collapse-item" href="{{ route('admin.normalskin.create') }}">{{ __('site.Add New Article') }}</a>
                <a class="collapse-item" href="{{ route('admin.normalskin.trash') }}">{{ __('site.Trash Article') }}</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider mb-0">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#skinss"
            aria-expanded="true" aria-controls="skinss">
            <i class="fas fa-smile"></i>
            <span>{{ __('site.Sensitive Skin') }}
            </span>
        </a>
        <div id="skinss" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.sensitiveskin.index') }}">{{ __('site.ALL Article') }}</a>
                <a class="collapse-item" href="{{ route('admin.sensitiveskin.create') }}">{{ __('site.Add New Article') }}</a>
                <a class="collapse-item" href="{{ route('admin.sensitiveskin.trash') }}">{{ __('site.Trash Article') }}</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider mb-0">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#skinsss"
            aria-expanded="true" aria-controls="skinsss">
            <i class="fas fa-smile"></i>
            <span>{{ __('site.Mixed Skin') }}
            </span>
        </a>
        <div id="skinsss" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.mixedskin.index') }}">{{ __('site.ALL Article') }}</a>
                <a class="collapse-item" href="{{ route('admin.mixedskin.create') }}">{{ __('site.Add New Article') }}</a>
                <a class="collapse-item" href="{{ route('admin.mixedskin.trash') }}">{{ __('site.Trash Article') }}</a>
            </div>
        </div>
    </li>


<!-- Divider -->
<hr class="sidebar-divider mb-0">
<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#doctors"
        aria-expanded="true" aria-controls="doctors">
        <i class="fas fa-user-md"></i>
        <span>{{ __('site.Doctors') }}
        </span>
    </a>
    <div id="doctors" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('admin.doctors.index') }}">{{ __('site.ALL Doctors') }}</a>
            <a class="collapse-item" href="{{ route('admin.doctors.create') }}">{{ __('site.Add New Doctor') }}</a>
            <a class="collapse-item" href="{{ route('admin.doctors.trash') }}">{{ __('site.Trash Doctor') }}</a>
        </div>
    </div>
</li>




 <!-- Divider -->
<hr class="sidebar-divider mb-0">

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#take"
        aria-expanded="true" aria-controls="take">
        <i class="fas fa-calendar-check"></i>
        <span>{{ __('site.Take appointment') }}
        </span>
    </a>
    <div id="take" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('admin.takes.index') }}">{{ __('site.ALL Takes') }}</a>
            <a class="collapse-item" href="{{ route('admin.takes.trash') }}">{{ __('site.Trash Takes') }}</a>
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="{{ route('admin.role.index')}}">
        <i class="fas fa-user-lock"></i>
        <span>{{ __('site.Roles') }}</span></a>
</li>









            <!-- Divider -->
            <hr class="sidebar-divider mb-0 d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 ">{{ __('site.Languages') }}
                                </span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        <img width="20" src="{{ asset('adminassets/img/'.$properties['flag']) }}">
                                        {{ $properties['native'] }}

                                    </a>
                            @endforeach

                            </div>
                        </li>








                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                <img class="img-profile rounded-circle"
                                    src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item"   href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    @yield('content')
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('adminassets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('adminassets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('adminassets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('adminassets/js/sb-admin-2.min.js') }}"></script>
    @yield('scripts')
</body>

</html>

