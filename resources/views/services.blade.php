
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link href="{{ asset('regna/astafile/ASTAMULTIMEDIATAMA_FIX.ico')}}" rel="icon">
    <link href="{{ asset('regna/astafile/ASTAMULTIMEDIATAMA_FIX.ico')}}" rel="apple-touch-icon">
    <title>Asta Services</title>
    <!-- Custom CSS -->
    <link href="{{asset('adminbite/assets/libs/chartist/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{asset('adminbite/assets/extra-libs/c3/c3.min.css')}}" rel="stylesheet">
    <link href="{{asset('adminbite/assets/libs/morris.js/morris.css')}}" rel="stylesheet">
    <!-- Popup CSS -->
    <link href="{{asset('adminbite/assets/libs/magnific-popup/dist/magnific-popup.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('adminbite/dist/css/style.min.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="{{ asset('regna/astafile/asta3.png')}}" alt="Asta" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="{{ asset('regna/astafile/asta2.png')}}" alt="Asta" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="../../assets/images/logo-text.png" alt="Services" class="dark-logo" />
                            <!-- Light Logo text -->
                            <img src="../../assets/images/logo-light-text.png" alt="Services" class="light-logo" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="ti-more"></i>
                </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse collapse" id="navbarSupportedContent">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-left mr-auto">
                    <li class="nav-item d-none d-md-block">
                        <a class="nav-link waves-effect waves-light">
                            <marquee width="70%" direction="left" behavior="slide">
                                Asta Multimedia Tama - Our Services
                            </marquee>
                        </a>
                    </li>
                </ul>
                <!-- ============================================================== -->
                <!-- Right side toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-right">
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic font-20" href="{{url('/')}}">Home
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-5 align-self-center">
                    <h4 class="page-title">Gallery Page</h4>
                    <div class="d-flex align-items-center">

                    </div>
                </div>
                <div class="col-7 align-self-center">
                    <div class="d-flex no-block justify-content-end align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{url('/')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Services</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <div class="row el-element-overlay">
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="el-card-item">
                            <div class="el-card-avatar el-overlay-1"> <img src="{{asset('adminbite/assets/images/big/img1.jpg')}}" alt="user" />
                                <div class="el-overlay">
                                    <ul class="list-style-none el-info">
                                        <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{asset('adminbite/assets/images/big/img1.jpg')}}"><i class="sl-icon-magnifier"></i></a></li>
                                        <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="sl-icon-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="el-card-content">
                                <h4 class="m-b-0">Project title</h4> <span class="text-muted">subtitle of project</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="el-card-item">
                            <div class="el-card-avatar el-overlay-1"> <img src="{{asset('adminbite/assets/images/big/img2.jpg')}}" alt="user" />
                                <div class="el-overlay">
                                    <ul class="list-style-none el-info">
                                        <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{asset('adminbite/assets/images/big/img2.jpg')}}"><i class="sl-icon-magnifier"></i></a></li>
                                        <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="sl-icon-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="el-card-content">
                                <h4 class="m-b-0">Project title</h4> <span class="text-muted">subtitle of project</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="el-card-item">
                            <div class="el-card-avatar el-overlay-1"> <img src="{{asset('adminbite/assets/images/big/img3.jpg')}}" alt="user" />
                                <div class="el-overlay">
                                    <ul class="list-style-none el-info">
                                        <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{asset('adminbite/assets/images/big/img3.jpg')}}"><i class="sl-icon-magnifier"></i></a></li>
                                        <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="sl-icon-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="el-card-content">
                                <h4 class="m-b-0">Project title</h4> <span class="text-muted">subtitle of project</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="el-card-item">
                            <div class="el-card-avatar el-overlay-1"> <img src="{{asset('adminbite/assets/images/big/img4.jpg')}}" alt="user" />
                                <div class="el-overlay">
                                    <ul class="list-style-none el-info">
                                        <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{asset('adminbite/assets/images/big/img4.jpg')}}"><i class="sl-icon-magnifier"></i></a></li>
                                        <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="sl-icon-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="el-card-content">
                                <h4 class="m-b-0">Project title</h4> <span class="text-muted">subtitle of project</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="el-card-item">
                            <div class="el-card-avatar el-overlay-1"> <img src="{{asset('adminbite/assets/images/big/img3.jpg')}}" alt="user" />
                                <div class="el-overlay">
                                    <ul class="list-style-none el-info">
                                        <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{asset('adminbite/assets/images/big/img3.jpg')}}"><i class="sl-icon-magnifier"></i></a></li>
                                        <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="sl-icon-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="el-card-content">
                                <h4 class="m-b-0">Project title</h4> <span class="text-muted">subtitle of project</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="el-card-item">
                            <div class="el-card-avatar el-overlay-1"> <img src="{{asset('adminbite/assets/images/big/img5.jpg')}}" alt="user" />
                                <div class="el-overlay">
                                    <ul class="list-style-none el-info">
                                        <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{asset('adminbite/assets/images/big/img5.jpg')}}"><i class="sl-icon-magnifier"></i></a></li>
                                        <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="sl-icon-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="el-card-content">
                                <h4 class="m-b-0">Project title</h4> <span class="text-muted">subtitle of project</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="el-card-item">
                            <div class="el-card-avatar el-overlay-1"> <img src="{{asset('adminbite/assets/images/big/img6.jpg')}}" alt="user" />
                                <div class="el-overlay">
                                    <ul class="list-style-none el-info">
                                        <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{asset('adminbite/assets/images/big/img6.jpg')}}"><i class="sl-icon-magnifier"></i></a></li>
                                        <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="sl-icon-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="el-card-content">
                                <h4 class="m-b-0">Project title</h4> <span class="text-muted">subtitle of project</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="el-card-item">
                            <div class="el-card-avatar el-overlay-1"> <img src="{{asset('adminbite/assets/images/big/img1.jpg')}}" alt="user" />
                                <div class="el-overlay">
                                    <ul class="list-style-none el-info">
                                        <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{asset('adminbite/assets/images/big/img1.jpg')}}"><i class="sl-icon-magnifier"></i></a></li>
                                        <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="sl-icon-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="el-card-content">
                                <h4 class="m-b-0">Project title</h4> <span class="text-muted">subtitle of project</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row m-t-40">
                <div class="col-md-12">
                    <h4 class="card-title">Other Gallery </h4>
                    <h6 class="card-subtitle m-b-20 text-muted">you can make gallery like this</h6> </div>
                </div>
                <div class="card-columns el-element-overlay">
                    <div class="card">
                        <div class="el-card-item">
                            <div class="el-card-avatar el-overlay-1">
                                <a class="image-popup-vertical-fit" href="{{asset('adminbite/assets/images/big/img5.jpg')}}"> <img src="{{asset('adminbite/assets/images/big/img5.jpg')}}" alt="user" /> </a>
                            </div>
                            <div class="el-card-content">
                                <h4 class="m-b-0">Project title</h4> <span class="text-muted">subtitle of project</span>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="el-card-item">
                            <div class="el-card-avatar el-overlay-1">
                                <a class="image-popup-vertical-fit" href="{{asset('adminbite/assets/images/users/1.jpg')}}"> <img src="{{asset('adminbite/assets/images/users/1.jpg')}}" alt="user" /> </a>
                            </div>
                            <div class="el-card-content">
                                <h4 class="m-b-0">Project title</h4> <span class="text-muted">subtitle of project</span>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="el-card-item">
                            <div class="el-card-avatar el-overlay-1">
                                <a class="image-popup-vertical-fit" href="{{asset('adminbite/assets/images/users/2.jpg')}}"> <img src="{{asset('adminbite/assets/images/users/2.jpg')}}" alt="user" /> </a>
                            </div>
                            <div class="el-card-content">
                                <h4 class="m-b-0">Project title</h4> <span class="text-muted">subtitle of project</span>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="el-card-item">
                            <div class="el-card-avatar el-overlay-1">
                                <a class="image-popup-vertical-fit" href="{{asset('adminbite/assets/images/big/img4.jpg')}}"> <img src="{{asset('adminbite/assets/images/big/img4.jpg')}}" alt="user" /> </a>
                            </div>
                            <div class="el-card-content">
                                <h4 class="m-b-0">Project title</h4> <span class="text-muted">subtitle of project</span>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="el-card-item">
                            <div class="el-card-avatar el-overlay-1">
                                <a class="image-popup-vertical-fit" href="{{asset('adminbite/assets/images/big/img2.jpg')}}"> <img src="{{asset('adminbite/assets/images/big/img2.jpg')}}" alt="user" /> </a>
                            </div>
                            <div class="el-card-content">
                                <h4 class="m-b-0">Project title</h4> <span class="text-muted">subtitle of project</span>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="el-card-item">
                            <div class="el-card-avatar el-overlay-1">
                                <a class="image-popup-vertical-fit" href="{{asset('adminbite/assets/images/users/1.jpg')}}"> <img src="{{asset('adminbite/assets/images/big/img1.jpg')}}" alt="user" /> </a>
                            </div>
                            <div class="el-card-content">
                                <h4 class="m-b-0">Project title</h4> <span class="text-muted">subtitle of project</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
             All Rights Reserved by AdminBite admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
         </footer>
         <!-- ============================================================== -->
         <!-- End Page wrapper  -->
         <!-- ============================================================== -->
     </div>
     <!-- ============================================================== -->
     <!-- End Wrapper -->
     <!-- ============================================================== -->
     <!-- ============================================================== -->
     <!-- All Jquery -->
     <!-- ============================================================== -->
     <script src="{{asset('adminbite/assets/libs/jquery/dist/jquery.min.js')}}"></script>
     <!-- Bootstrap tether Core JavaScript -->
     <script src="{{asset('adminbite/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
     <script src="{{asset('adminbite/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
     <!-- apps -->
     <script src="{{asset('adminbite/dist/js/app.min.js')}}"></script>
     <script src="{{asset('adminbite/dist/js/app.init.overlay.js')}}"></script>
     <script src="{{asset('adminbite/dist/js/app-style-switcher.js')}}"></script>
     <!-- slimscrollbar scrollbar JavaScript -->
     <script src="{{asset('adminbite/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
     <script src="{{asset('adminbite/assets/extra-libs/sparkline/sparkline.js')}}"></script>
     <!--Wave Effects -->
     <script src="{{asset('adminbite/dist/js/waves.js')}}"></script>
     <!--Menu sidebar -->
     <script src="{{asset('adminbite/dist/js/sidebarmenu.js')}}"></script>
     <!--Custom JavaScript -->
     <script src="{{asset('adminbite/dist/js/custom.min.js')}}"></script>
     <!--This page JavaScript -->
     <script src="{{asset('adminbite/assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
     <script src="{{asset('adminbite/assets/libs/magnific-popup/meg.init.js')}}"></script>

     <script src="{{asset('adminbite/dist/js/pages/dashboards/dashboard1.js')}}"></script>
 </body>

 </html>