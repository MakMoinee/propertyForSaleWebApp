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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/asset3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/asset3/css/style.css" rel="stylesheet">
    <style>
        body {
            background-color: white;
        }

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

        .justify-text {
            text-align: justify;
            text-indent: 30px;
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
        <div class="container-fluid nav-bar bg-transparent sticky-top">
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
                                <a href="/property_list#search" class="dropdown-item">Property List</a>
                                <a href="/owned_properties" class="dropdown-item active">Owned Properties</a>
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


        <!-- Property List Start -->
        <div class="container-xxl py-5 wow fadeIn" data-wow-delay="0.1s" id="pdetails">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title mb-4">
                            <h1 class="display-5 mb-0">Owned Properties</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <br>
                                <div class="table-responsive">
                                    <table class="table border mb-0">
                                        <thead class="table-light fw-semibold">
                                            <tr class="align-middle">
                                                <th class="text-center">
                                                </th>
                                                <th>Property Name</th>
                                                <th class="text-center">Price</th>
                                                <th>Location</th>
                                                <th class="text-center">Status</th>
                                                <th>Paid Date</th>
                                                <th class="text-center">Action</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($allProps as $item)
                                                <tr class="text-center text-dark">
                                                    <td class="text-center">

                                                    </td>
                                                    <td>
                                                        {{ $item->propertyName }}

                                                    </td>
                                                    <td class="text-center">
                                                        P{{ number_format($item->price, 1) }}
                                                    </td>
                                                    <td>
                                                        {{ $item->street }}, {{ $item->brgy }},
                                                        {{ $item->city }},
                                                        {{ $item->province }} {{ $item->zip }}
                                                    </td>
                                                    <td>
                                                        @if ($item->payment_status == 'approved')
                                                            Paid
                                                        @else
                                                            Not Paid
                                                        @endif
                                                    </td>
                                                    <td class="text-center">
                                                        {{ (new DateTime($item->created_at))->setTimezone(new DateTimeZone('Asia/Manila'))->format('Y-m-d h:i A') }}

                                                    </td>
                                                    <td>
                                                        <button class="btn btn-success"
                                                            onclick="into({{ $item->propertyID }})"
                                                            title="View Properties">
                                                            <img src="/view.svg" alt="" srcset="">
                                                        </button>
                                                        <button
                                                            onclick="intoPayment({{ $item->propertyID }})"
                                                            class="btn btn-warning" title="Payment Details">
                                                            <img src="/payment.svg" alt="" srcset="">
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
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
    @if (session()->pull('errorNotExist'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Associated Property Does\'nt Exist',
                    showConfirmButton: false,
                    timer: 500
                });
            }, 800);
        </script>
        {{ session()->forget('errorNotExist') }}
    @endif
    @if (session()->pull('paymentSuccessful'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Paid Property',
                    showConfirmButton: true,
                });
            }, 800);
        </script>
        {{ session()->forget('paymentSuccessful') }}
    @endif
    @if (session()->pull('successLoginClient'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Login',
                    showConfirmButton: true,
                });
            }, 800);
        </script>
        {{ session()->forget('successLoginClient') }}
    @endif
    <script>
        function into(id) {
            window.open(`/property_list/${id}#pdetails`, '_blank');
        }
        function intoPayment(id) {
            window.open(`/payment_details?pid=${id}`, '_blank');
        }
    </script>
</body>

</html>
