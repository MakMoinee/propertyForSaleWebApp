<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html;
      charset=UTF-8">
    <!--<base href="./">-->
    <base href=".">

    <link href="/ph.png" rel="icon">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,
      shrink-to-fit=no">

    <meta name="author" content="Titus Silver">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>BestProperties.ph</title>
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="/asset2/simplebar.css">
    <link rel="stylesheet" href="/asset2/simplebar(1).css">

    <link href="/asset2/style.css" rel="stylesheet">

    <link rel="stylesheet" href="/asset2/prism.css">
    <link href="/asset2/examples.css" rel="stylesheet">
    <script type="text/javascript" async src="/asset2/js"></script>
    <script src="/asset2/667090843876081" async></script>
    <script src="/asset2/identity.js.download" async></script>
    <script type="text/javascript" async src="/asset2/fbevents.js.download"></script>
    <script type="text/javascript" async src="/asset2/analytics.js.download"></script>
    <script async src="/asset2/gtm.js.download"></script>
    <link href="/asset2/coreui-chartjs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400..800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Sen", sans-serif;
        }

        .sidebar {
            --cui-sidebar-bg: #ff0000e3 !important;
        }

        .sidebar-nav .nav-link {
            color: rgb(255, 255, 255) !important;
        }

        .sidebar-nav .nav-link.active {
            color: rgb(255, 255, 255);
            background: rgba(253, 245, 139, 0.349);
        }
    </style>
</head>

<body>
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
        <div class="sidebar-brand d-none d-md-flex">
            <img src="/sidebarfull.png" alt="" srcset="" class="sidebar-brand-full">
            <img src="/sidebar.png" alt="" srcset="" class="sidebar-brand-narrow">
        </div>
        <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="init">
            <div class="simplebar-wrapper" style="margin: 0px;">
                <div class="simplebar-height-auto-observer-wrapper">
                    <div class="simplebar-height-auto-observer"></div>
                </div>
                <div class="simplebar-mask">
                    <div class="simplebar-offset" style="right:0px; bottom: 0px;">
                        <div class="simplebar-content-wrapper" tabindex="0" role="region"
                            aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                            <div class="simplebar-content" style="padding: 0px;">
                                <li class="nav-item">
                                    <a class="nav-link active" href="/agent_dashboard">
                                        <img src="/dashboard.svg" alt="" srcset="" class="nav-icon">
                                        Dashboard
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"href="/agent_property">
                                        <img src="/property.svg" alt="" srcset="" class="nav-icon">
                                        Property Information
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/agent_sales">
                                        <img src="/sales.svg" alt="" srcset="" class="nav-icon"> Sales
                                        History
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/agent_profile">
                                        <img src="/personal white.svg" alt="" srcset=""
                                            class="nav-icon">Profile
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-coreui-toggle="modal"
                                        data-coreui-target="#logoutModal">
                                        <img src="/logout.svg" alt="" srcset="" class="nav-icon">
                                        Logout
                                    </a>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="simplebar-placeholder" style="width: 256px; height: 841px;"></div>
            </div>
            <div class="simplebar-track simplebar-horizontal" style="visibility:
          hidden;">
                <div class="simplebar-scrollbar" style="width: 0px; display:
            none;"></div>
            </div>
            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                <div class="simplebar-scrollbar"
                    style="height: 247px; transform: translate3d(0px, 0px, 0px);
            display: block;"></div>
            </div>
        </ul>
    </div>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        <header class="header header-sticky mb-4">
            <div class="container-fluid">
                <button class="header-toggler px-md-0 me-md-3" type="button"
                    onclick="coreui.Sidebar.getInstance(document.querySelector(&#39;#sidebar&#39;)).toggle()">
                    <img src="/menu.png" width="26px" height="26px" alt="" srcset=""
                        class="icon icon-lg">
                </button><a class="header-brand d-md-none" href="https://coreui.io/demos/bootstrap/4.2/free/#">
                    <svg width="118" height="46" alt="CoreUI Logo">
                        <use xlink:href="assets/brand/coreui.svg#full"></use>
                    </svg></a>
                <ul class="header-nav d-none d-md-flex">
                </ul>
                <ul class="header-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="https://coreui.io/demos/bootstrap/4.2/free/#">
                            <svg class="icon icon-lg">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                            </svg></a></li>
                    <li class="nav-item"><a class="nav-link" href="https://coreui.io/demos/bootstrap/4.2/free/#">
                            <svg class="icon icon-lg">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-list-rich"></use>
                            </svg></a></li>
                    <li class="nav-item"><a class="nav-link" href="https://coreui.io/demos/bootstrap/4.2/free/#">
                            <svg class="icon icon-lg">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                            </svg></a></li>
                </ul>
                <ul class="header-nav ms-3">
                    <p>
                    <h6>Hello, <b>Agent</b></h6>
                    </p>
                    <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown"
                            href="https://coreui.io/demos/bootstrap/4.2/free/#" role="button" aria-haspopup="true"
                            aria-expanded="false">
                            <div class="avatar avatar-md"><img class="avatar-img" src="/admin.png"
                                    alt="user@email.com"></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end pt-0">
                            <div class="dropdown-header bg-light py-2">
                                <div class="fw-semibold">Settings</div>
                            </div>
                            <a class="dropdown-item" href="/agent_profiles">
                                <img src="/personal black.svg" alt="" srcset="" class="icon me-2">
                                Profile
                            </a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#"
                                data-coreui-toggle="modal" data-coreui-target="#logoutModal">
                                <img src="/logout black.svg" alt="" srcset="" class="icon me-2">
                                Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="header-divider"></div>
            <div class="container-fluid">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb my-0 ms-2">
                        <li class="breadcrumb-item">
                            <span>Home</span>
                        </li>
                        <li class="breadcrumb-item active"><span>Dashboard</span></li>
                    </ol>
                </nav>
            </div>
        </header>
        <div class="body flex-grow-1 px-3">
            <div class="container-lg">
                <div class="row">
                    <div class="col-sm-6 col-lg-4">
                        <div class="card mb-4 text-black bg-white" style="height: 165px;">
                            <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                                <div>
                                    <div class="fs-4 fw-semibold">P{{ number_format($totalSales, 2) }}</div>
                                    <div>Total Sales</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card mb-4 text-black bg-white" style="height: 165px;">
                            <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                                <div>
                                    <div class="fs-4 fw-semibold">{{ count($allProperties) }}</div>
                                    <div>Total Properties</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <footer class="footer">
            <div class="ms-auto">Powered by&nbsp;<a href="https://coreui.io/docs/">CoreUI
                    UI Components</a></div>
        </footer>
    </div>

    <script src="/asset2/coreui.bundle.min.js.download"></script>
    <script src="/asset2/simplebar.min.js.download"></script>

    <script src="/asset2/chart.min.js.download"></script>
    <script src="/asset2/coreui-chartjs.js.download"></script>
    <script src="/asset2/coreui-utils.js.download"></script>
    <script src="/asset2/main.js.download"></script>
    <script></script>
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel"
        aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <form action="/logout" method="get">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group">
                                <h3>Are You Sure You Want To Logout</h3>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary text-white">Yes, Proceed</button>
                        <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal"
                            style="color:white !important;">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @if (session()->pull('successLoginAgent'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Login Successfully',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('successLoginAgent') }}
    @endif
</body>

</html>
