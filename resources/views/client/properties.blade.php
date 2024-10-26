<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BestProperties</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="/ph.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/asset3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/asset3/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/asset3/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/asset3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/asset3/css/style.css" rel="stylesheet">
    <style>
        .bg-primary {
            background-color: #e60000 !important;
        }

        .text-primary {
            color: #e60000 !important;
        }

        .dropdown-item.active {
            background-color: #e60000 !important;
        }

        .btn-primary,
        .btn-outline-primary.active,
        .btn-outline-primary:hover {
            background-color: #e60000 !important;
            border-color: #e60000 !important;
        }

        .btn-outline-primary {
            border-color: #e60000 !important;
        }

        .navbar-light .navbar-nav .nav-link {
            color: var(--dark);
            font-weight: 500;
        }
    </style>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">

            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="index.html" class="navbar-brand d-flex align-items-center text-center">
                    <div class="icon p-2 me-2">
                        <img class="img-fluid" src="/ph.png" alt="Icon" style="width: 30px; height: 30px;">
                    </div>
                    <h1 class="m-0 text-primary">BestProperties</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="/client_home" class="nav-item nav-link ">Home</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">My
                                Properties</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="property-list.html" class="dropdown-item active">Property List</a>
                                <a href="/owned_properties" class="dropdown-item">Owned Properties</a>
                                <a href="/property_agents" class="dropdown-item">Property Agent</a>
                            </div>
                        </div>

                        <a href="/my_account" class="nav-item nav-link">My Account</a>
                    </div>
                    <a href="" class="btn btn-primary px-3 d-none d-lg-flex" data-bs-target="#logoutModal"
                        data-bs-toggle="modal">Logout</a>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->


        <!-- Header Start -->
        <div id="hs" class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">Property List</h1>
                    <nav aria-label="breadcrumb animated fadeIn">
                        <ol class="breadcrumb text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item text-body active" aria-current="page">Property List</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <img class="img-fluid" src="/asset3/img/header.jpg" alt="">
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Search Start -->
        <div id="search" class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s"
            style="padding: 35px;">
            <div class="container">
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <input type="text" class="form-control border-0 py-3" placeholder="Search Keyword">
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0 py-3">
                                    <option selected>Property Type</option>
                                    <option value="rent">For Rent</option>
                                    <option value="sale">For Sale</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0 py-3">
                                    <option selected>Location</option>
                                    @foreach ($allProv as $item)
                                        <option value="{{ $item->province }}">{{ $item->province }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-dark border-0 w-100 py-3">Search</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search End -->


        <!-- Property List Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-0 gx-5 align-items-end">
                    <div class="col-lg-6">
                        <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                            <h1 class="mb-3">Property Listing</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                        <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                            <li class="nav-item me-2">
                                <a class="btn btn-outline-primary active" data-bs-toggle="pill"
                                    href="#tab-1">Featured</a>
                            </li>
                            <li class="nav-item me-2">
                                <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-2">For Sale</a>
                            </li>
                            <li class="nav-item me-0">
                                <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-3">For Rent</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            @foreach ($allProps as $item)
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="property-item rounded overflow-hidden">
                                        <div class="position-relative overflow-hidden">
                                            @foreach ($allImages as $imgItem)
                                                @if ($imgItem['propertyID'] == $item->propertyID)
                                                    <a href="">
                                                        <img class="img-fluid"
                                                            src="/data/img_properties/{{ $imgItem['imagePath'] }}"
                                                            alt="">
                                                    </a>
                                                @endif
                                            @endforeach
                                            <div
                                                class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                                @foreach ($allPayments as $p)
                                                    @if ($p['propertyID'] == $item->propertyID)
                                                        <s>Sold Out</s>
                                                    @else
                                                        @if ($item->type == 'sale')
                                                            For Sale
                                                        @else
                                                            @if ($item->type == 'rent')
                                                                For Rent
                                                            @else
                                                                Sold Out
                                                            @endif
                                                        @endif
                                                    @endif
                                                @endforeach
                                            </div>
                                            <div
                                                class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                                House</div>
                                        </div>
                                        <div class="p-4 pb-0">
                                            <h5 class="text-primary mb-3">P{{ number_format($item->price, 1) }}</h5>
                                            <a class="d-block h5 mb-2"
                                                href="/property_list/{{ $item->propertyID }}#pdetails">{{ $item->propertyName }}</a>
                                            <p><i class="fa fa-map-marker-alt text-primary me-2"></i>
                                                {{ $item->street }}, {{ $item->brgy }}, {{ $item->city }},
                                                {{ $item->province }} {{ $item->zip }}</p>
                                        </div>
                                        <div class="d-flex border-top">
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-ruler-combined text-primary me-2"></i>{{ $item->lotArea }}
                                                Sqft</small>
                                            <small class="flex-fill text-center border-end py-2"><i
                                                    class="fa fa-bed text-primary me-2"></i>{{ $item->beds }}
                                                Bed</small>
                                            <small class="flex-fill text-center py-2"><i
                                                    class="fa fa-bath text-primary me-2"></i>{{ $item->baths }}
                                                Bath</small>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                                <a class="btn btn-primary py-3 px-5" href="/property_list">Browse More Property</a>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            @foreach ($allProps as $item)
                                @if ($item->type == 'sale')
                                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="property-item rounded overflow-hidden">
                                            <div class="position-relative overflow-hidden">
                                                @foreach ($allImages as $imgItem)
                                                    @if ($imgItem['propertyID'] == $item->propertyID)
                                                        <a href="">
                                                            <img class="img-fluid"
                                                                src="/data/img_properties/{{ $imgItem['imagePath'] }}"
                                                                alt="">
                                                        </a>
                                                    @endif
                                                @endforeach
                                                <div
                                                    class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                                    @if ($item->type == 'sale')
                                                        For Sale
                                                    @else
                                                        @if ($item->type == 'rent')
                                                            For Rent
                                                        @else
                                                            Sold Out
                                                        @endif
                                                    @endif
                                                </div>
                                                <div
                                                    class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                                    House</div>
                                            </div>
                                            <div class="p-4 pb-0">
                                                <h5 class="text-primary mb-3">P{{ number_format($item->price, 1) }}
                                                </h5>
                                                <a class="d-block h5 mb-2"
                                                    href="/property_list/{{ $item->propertyID }}">{{ $item->propertyName }}</a>
                                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>
                                                    {{ $item->street }}, {{ $item->brgy }}, {{ $item->city }},
                                                    {{ $item->province }} {{ $item->zip }}</p>
                                            </div>
                                            <div class="d-flex border-top">
                                                <small class="flex-fill text-center border-end py-2"><i
                                                        class="fa fa-ruler-combined text-primary me-2"></i>{{ $item->lotArea }}
                                                    Sqft</small>
                                                <small class="flex-fill text-center border-end py-2"><i
                                                        class="fa fa-bed text-primary me-2"></i>{{ $item->beds }}
                                                    Bed</small>
                                                <small class="flex-fill text-center py-2"><i
                                                        class="fa fa-bath text-primary me-2"></i>{{ $item->baths }}
                                                    Bath</small>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                            <div class="col-12 text-center">
                                <a class="btn btn-primary py-3 px-5" href="/property_list">Browse More Property</a>
                            </div>
                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            @foreach ($allProps as $item)
                                @if ($item->type == 'rent')
                                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="property-item rounded overflow-hidden">
                                            <div class="position-relative overflow-hidden">
                                                @foreach ($allImages as $imgItem)
                                                    @if ($imgItem['propertyID'] == $item->propertyID)
                                                        <a href="">
                                                            <img class="img-fluid"
                                                                src="/data/img_properties/{{ $imgItem['imagePath'] }}"
                                                                alt="">
                                                        </a>
                                                    @endif
                                                @endforeach
                                                <div
                                                    class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                                    @if ($item->type == 'sale')
                                                        For Sale
                                                    @else
                                                        @if ($item->type == 'rent')
                                                            For Rent
                                                        @else
                                                            Sold Out
                                                        @endif
                                                    @endif
                                                </div>
                                                <div
                                                    class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                                    House</div>
                                            </div>
                                            <div class="p-4 pb-0">
                                                <h5 class="text-primary mb-3">P{{ number_format($item->price, 1) }}
                                                </h5>
                                                <a class="d-block h5 mb-2"
                                                    href="/property_list/{{ $item->propertyID }}">{{ $item->propertyName }}</a>
                                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>
                                                    {{ $item->street }}, {{ $item->brgy }}, {{ $item->city }},
                                                    {{ $item->province }} {{ $item->zip }}</p>
                                            </div>
                                            <div class="d-flex border-top">
                                                <small class="flex-fill text-center border-end py-2"><i
                                                        class="fa fa-ruler-combined text-primary me-2"></i>{{ $item->lotArea }}
                                                    Sqft</small>
                                                <small class="flex-fill text-center border-end py-2"><i
                                                        class="fa fa-bed text-primary me-2"></i>{{ $item->beds }}
                                                    Bed</small>
                                                <small class="flex-fill text-center py-2"><i
                                                        class="fa fa-bath text-primary me-2"></i>{{ $item->baths }}
                                                    Bath</small>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                            <div class="col-12 text-center">
                                <a class="btn btn-primary py-3 px-5" href="/property_list">Browse More Property</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Property List End -->



        <!-- Footer Start -->
        @include('footer2')
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/asset3/lib/wow/wow.min.js"></script>
    <script src="/asset3/lib/easing/easing.min.js"></script>
    <script src="/asset3/lib/waypoints/waypoints.min.js"></script>
    <script src="/asset3/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="/asset3/js/main.js"></script>
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
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
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                            style="color:white !important;">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function openItem(pid) {
            window.load = `/property_list/${pid}`;
        }
    </script>
</body>

</html>
