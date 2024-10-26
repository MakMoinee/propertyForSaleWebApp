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
                            <li class="scroll-to-section"><a href="/" >Home</a></li>
                            <li class="scroll-to-section"><a href="/#props">Property</a></li>
                            <li class="scroll-to-section"><a href="/agents" class="active">Agents</a></li>
                            <li class="scroll-to-section padRight"><a href="#footer">Contact Us</a></li>
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

    <!-- Team Start -->
    <div class="container-xxl py-5 mt-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Property Agents</h1>
                <p>Connect with experienced and trusted property agents who specialize in helping you find your
                    ideal home or investment. Whether you’re looking to buy or rent, our agents are here to guide
                    you every step of the way with personalized service and expert advice.</p>
            </div>
            <div class="row g-4">
                @foreach ($allAgents as $item)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                @if ($item->gender == 'Male')
                                    <img class="img-fluid" src="/boy.png" alt="">
                                @else
                                    <img class="img-fluid" src="/woman.png" alt="">
                                @endif

                                <div
                                    class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">{{ $item->firstName }} {{ $item->middleName }}
                                    {{ $item->lastName }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Team End -->

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
