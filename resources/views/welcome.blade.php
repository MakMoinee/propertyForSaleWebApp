<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <link href="/ph.png" rel="icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Titus Silver">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <title>BestProperties</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/css/sl.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl-carousel.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body {
            font-family: "Roboto", sans-serif;
        }
    </style>
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky background-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo">BestProperties.ph</a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#welcome" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">Property</a></li>
                            <li class="scroll-to-section"><a href="#services">Agents</a></li>
                            <li class="scroll-to-section padRight"><a href="#contact-us">Contact Us</a></li>
                            <li class="scroll-to-section"><a href="#" data-toggle="modal"
                                    data-target="#signupModal">Register/Login</a></li>
                            <li class="scroll-to-section"><button class="btn btn-danger dangerBtn">List
                                    Property</button></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row" style="padding-bottom: 40px;">
                    <div class="left-text col-lg-6 col-md-6 col-sm-12 col-xs-12"
                        data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <h1><strong>Find The Best Property in the Philippines </strong></h1>
                        <p>Discover the best for you and your needs</p>
                        <button class="btn btn-primary" data-target="#loginModal" data-toggle="modal">Login</button>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 banRight"
                        data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link active dangerBtn" aria-current="page" href="#">Rent</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Buy</a>
                            </li>
                        </ul>
                        <div class="col-md-10">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input class="form-control" placeholder="Type Keyword..." type="text"
                                                name="" id="">
                                            <select name="propertyType" id="" class="form-control mt-2">
                                                <option value="">Property Type</option>
                                                <option value="For Rent">For Rent</option>
                                                <option value="For Sale">For Sale</option>
                                            </select>
                                            <select name="location" id="" class="form-control mt-2">
                                                <option value="">Location</option>
                                                @foreach ($allProv as $item)
                                                    <option value="{{ $item->province }}">{{ $item->province }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button class="btn btn-primary mt-2" style="width: 46%">Filters</button>
                                            <button class="btn btn-danger mt-2"
                                                style="width: 46%; margin-left: 20px;">Search Now</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->

    @if (count($allProv) > 0)
        <section class="section" style="margin-top: 100px; margin-bottom: 200px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 align-content-center text-center">
                        <h1>
                            <strong>
                                Explore Our Listings
                            </strong>
                        </h1>
                    </div>
                </div>
                <br>
                <br>
                <div class="row mt-2">
                    @foreach ($allProv as $item)
                        <div class="col-lg-2 align-content-center text-center p-2">
                            <img src="/cebu.jpg" width="120px" height="120px" alt=""
                                class="img-responsive rounded-circle">
                            <br>
                            <h5 class="mt-2">
                                <strong>
                                    {{ $item->province }}
                                </strong>
                            </h5>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif



    @if (count($allProps) > 0)

        <section class="section" style="margin-top: 20px;margin-bottom: 20px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 align-content-center text-center">
                        <h1>
                            <strong>
                                Discover The Latest Real Estate
                            </strong>
                        </h1>
                    </div>
                </div>
                <br>
                <div class="row">
                    @foreach ($allProps as $item)
                        <div class="col-md-4">
                            <a data-target="#loginModal" data-toggle="modal"
                                onclick="setRedirectTo({{ $item->propertyID }})">
                                <div class="card mb-4 rounded"
                                    style="cursor: pointer; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <span class="badge bg-danger text-white"
                                                    style="float: left; position: absolute; padding: 5px;">Featured</span>
                                                <span class="badge bg-violet text-white"
                                                    style="float: left; position: absolute; margin-top: 30px; padding: 5px;">For
                                                    {{ $item->type }}</span>
                                                @foreach ($allImages as $img)
                                                    @if ($img['propertyID'] == $item->propertyID)
                                                        <img src="/data/img_properties/{{ $img['imagePath'] }}"
                                                            style="height: 200px;width: 100%;" alt=""
                                                            srcset="" class="img-responsive rounded">
                                                    @endif
                                                @endforeach

                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h5>
                                                    <strong>
                                                        {{ $item->propertyName }}
                                                    </strong>
                                                </h5>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <img src="/map.svg" alt="" srcset=""
                                                            class="mt-1 float-left position-absolute">
                                                        <h6 class="ml-4 mt-1">
                                                            {{ $item->street }}, {{ $item->brgy }},
                                                            {{ $item->city }},
                                                            {{ $item->province }} {{ $item->zip }}
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h4 class="text-danger">
                                                    <strong>
                                                        P{{ number_format($item->price, 1) }}
                                                    </strong>
                                                </h4>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <img src="/bed.svg" alt="" srcset=""
                                                    class="float-left position-absolute">
                                                <h6 class="ml-4 mt-1" style="font-size: 12px !important;">
                                                    Beds: <strong>{{ $item->beds }}</strong>
                                                </h6>
                                            </div>
                                            <div class="col-lg-4">
                                                <img src="/bath.svg" alt="" srcset=""
                                                    class="float-left position-absolute">
                                                <h6 class="ml-4 mt-1" style="font-size: 12px !important;">
                                                    Baths: <strong>{{ $item->baths }}</strong>
                                                </h6>
                                            </div>
                                            <div class="col-lg-4">
                                                <img src="/area.svg" alt="" srcset=""
                                                    class="float-left position-absolute">
                                                <h6 class="ml-4 mt-1" style="font-size: 12px !important;">
                                                    Sqm: <strong>{{ $item->lotArea }}</strong>
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h6 class="mt-1" style="font-size: 12px !important;">
                                                    Posted:
                                                    <strong>{{ (new DateTime($item->created_at))->setTimezone(new DateTimeZone('Asia/Manila'))->format('Y-m-d h:i A') }}</strong>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

                    <div class="col-md-4">

                    </div>
                    <div class="col-md-4">

                    </div>
                </div>
            </div>
        </section>
    @endif

    <div>
        <button style="display: none" id="showLogin" data-target="#loginModal" data-toggle="modal"></button>
    </div>


    @include('footer')
    <!-- Footer End -->

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalTitle">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/login" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="email">Email:<span class="text-danger">*</span></label>
                            <input required type="email" name="email" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:<span class="text-danger">*</span></label>
                            <input required type="password" name="password" id="" class="form-control">
                            <input type="hidden" id="redirectTo" name="redirectTo" value="">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" value="yes" name="btnLogin">Login</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signupModalTitle">Create Account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/login" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="firstName">First Name:<span class="text-danger">*</span></label>
                            <input required type="text" name="firstName" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="middleName">Middle Name:</label>
                            <input type="text" name="middleName" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name:<span class="text-danger">*</span></label>
                            <input required type="text" name="lastName" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="address">Address:<span class="text-danger">*</span></label>
                            <textarea required name="address" id="" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="birthDate">Birth Date:<span class="text-danger">*</span></label>
                            <input required type="date" name="birthDate" id="" class="form-control"
                                max="2018-12-31">
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender:<span class="text-danger">*</span></label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <input onclick="genderClick('Male')" style="cursor: pointer"
                                                    id="male" type="radio" name="gender"
                                                    aria-label="Radio for following text input">
                                            </div>
                                        </div>
                                        <h2 class="form-control">Male<h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <input onclick="genderClick('Female')" style="cursor: pointer"
                                                    id="female" type="radio" name="gender"
                                                    aria-label="Radio for following text input">
                                            </div>
                                        </div>
                                        <h2 class="form-control">Female<h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phoneNumber">Phone Number:<span class="text-danger">*</span></label>
                            <div class="row">
                                <div class="col-md-4">
                                    <input required class="form-control" type="text" name="countryCode"
                                        id="" placeholder="Country Code">
                                </div>
                                <div class="col-md-8">
                                    <input required type="number" name="phoneNumber" id=""
                                        class="form-control" placeholder="Phone Number">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="accountType">Account Type</label>
                            <br>
                            <select name="accountType" id="" class="form-control">
                                <option value="Client">Client</option>
                                <option value="Agent">Agent</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:<span class="text-danger">*</span></label>
                            <input required type="email" name="email" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:<span class="text-danger">*</span></label>
                            <input required type="password" name="password" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="confirmPass">Confirm Password:<span class="text-danger">*</span></label>
                            <input required type="password" name="confirmPass" id="" class="form-control">
                            <input required type="hidden" id="gender2" name="gender2" value="">
                        </div>

                        <div class="form-group">
                            <div class="row text-center">
                                <div class="col-lg-12">
                                    Already Have An Account? <a href="#" data-dismiss="modal"
                                        onclick="document.getElementById('showLogin').click();">Login Here</a>
                                </div>
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" value="yes" name="btnCreateAccount">Create
                        Account</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function genderClick(data) {
            let gender2 = document.getElementById('gender2');
            gender2.value = data;
        }

        function setRedirectTo(propertyId) {
            let redirectTo = document.getElementById('redirectTo');
            redirectTo.value = `/property_list/${propertyId}#pdetails`;
        }
    </script>

    @if (session()->pull('successCreate'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Created An Account',
                    showConfirmButton: true,
                });
            }, 500);
        </script>
        {{ session()->forget('successCreate') }}
    @endif
    @if (session()->pull('errorCreate'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Failed To Create An Account, Please Try Again Later',
                    showConfirmButton: true,
                });
            }, 500);
        </script>
        {{ session()->forget('errorCreate') }}
    @endif

    @if (session()->pull('loginNotApproved'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Login Not Approved Yet, Please Try Again Later',
                    showConfirmButton: true,
                });
            }, 500);
        </script>
        {{ session()->forget('loginNotApproved') }}
    @endif
    @if (session()->pull('errorLogin'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: 'Wrong Username or Password',
                    showConfirmButton: true,
                });
            }, 500);
        </script>
        {{ session()->forget('errorLogin') }}
    @endif

</body>

</html>
