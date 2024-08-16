<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html;
      charset=UTF-8">
    <!--<base href="./">-->
    <base href=".">

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

        .preview {
            display: flex;
            flex-wrap: wrap;
        }

        .preview img {
            margin: 10px;
            max-width: 200px;
            max-height: 200px;
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
                                    <a class="nav-link " href="/agent_dashboard">
                                        <img src="/dashboard.svg" alt="" srcset="" class="nav-icon">
                                        Dashboard
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="/agent_property">
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
                        <li class="breadcrumb-item active"><span>Property Information</span></li>
                    </ol>
                </nav>
            </div>
        </header>
        <div class="body flex-grow-1 px-3">
            <div class="container-lg">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-header">
                                <span style="font-size:25px;">PROPERTY INFORMATION</span>
                                <button class="btn btn-primary" style="float: right;" data-coreui-toggle="modal"
                                    data-coreui-target="#addPropertyModal">Add Property</button>
                            </div>
                            <div class="card-body">
                                <form action="/agent_property" method="get">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <input type="search" class="form-control" placeholder="Search Name"
                                                aria-label="Search Name" aria-describedby="basic-addon2"
                                                name="search">
                                            <div class="input-group-append">
                                                <button type="submit"
                                                    class="btn btn-primary input-group-text">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <br>
                                <table class="table border mb-0">
                                    <thead class="table-light fw-semibold">
                                        <tr class="align-middle">
                                            <th class="text-center sortable" data-sort="propertyName">Property Name
                                            </th>
                                            <th class="sortable" data-sort="price">Price</th>
                                            <th class="text-center sortable" data-sort="contactNumber">Contact Number
                                            </th>
                                            <th class="sortable" data-sort="otherDetails">Other Details</th>
                                            <th class="text-center sortable" data-sort="type">Type</th>
                                            <th>Posted Date</th>
                                            <th class="text-center sortable">Image/s</th>
                                            <th>Action</th>
                                            <th class="text-center sortable"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($properties as $item)
                                            <tr class="align-middle">
                                                <td class="text-center">{{ $item->propertyName }}</td>
                                                <td>
                                                    {{ number_format($item->price, 1) }}
                                                </td>
                                                <td class="text-center">
                                                    {{ $item->contactNumber }}
                                                </td>
                                                <td>
                                                    {{ $item->otherDetails }}
                                                </td>
                                                <td class="text-center">
                                                    {{ $item->type }}
                                                </td>
                                                <td>
                                                    {{ (new DateTime($item->created_at))->setTimezone(new DateTimeZone('Asia/Manila'))->format('Y-m-d h:i A') }}
                                                </td>
                                                <td class="text-center">
                                                    @if (count($imgArray) > 0)
                                                        <button class="btn btn-success text-white">
                                                            View
                                                        </button>
                                                    @else
                                                        <button class="btn btn-white" data-coreui-toggle="modal"
                                                            data-coreui-target="#addImageModal"
                                                            onclick="updateAddImage('{{ $item->propertyName }}',{{ $item->propertyID }})">
                                                            <img src="/addImage.svg" alt="" srcset="">
                                                        </button>
                                                    @endif
                                                </td>
                                                <td class="text-center">
                                                    <button class="btn btn-white" data-coreui-toggle="modal"
                                                        data-coreui-target="#deletePropertyModal"
                                                        onclick="deleteProp('{{ $item->propertyID }}','{{ $imgArray[$item->propertyID]['imagePath'] }}')">
                                                        <img src="/delete.svg" alt="" srcset="">
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pagination">
                                        <ul class="pagination">
                                            @for ($i = 1; $i <= $properties->lastPage(); $i++)
                                                @if ($i == 1)
                                                    <li class="page-item " style="margin-left: 15px;">
                                                        <a class="page-link {{ $properties->currentPage() == $i ? 'active' : '' }}"
                                                            href="{{ $properties->url($i) }}">{{ $i }}</a>
                                                    </li>
                                                @else
                                                    <li class="page-item ">
                                                        <a class="page-link {{ $properties->currentPage() == $i ? 'active' : '' }}"
                                                            href="{{ $properties->url($i) }}">{{ $i }}</a>
                                                    </li>
                                                @endif
                                            @endfor
                                        </ul>

                                    </div>
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

    <div class="modal fade" id="addImageModal" tabindex="-1" role="dialog" aria-labelledby="addImageModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="/agent_property" method="post" enctype="multipart/form-data">
                    @method('post')
                    @csrf
                    <div class="modal-header">
                        <h3>Add Property Image</h3>
                    </div>
                    <form action="" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="form-group">
                                    <label for="propertyName">Property Name:</label>
                                    <input style="cursor: not-allowed" readonly required type="text"
                                        name="propertyName" id="imagePropertyName" class="form-control mt-2">
                                    <input type="hidden" name="propertyID" id="imagePid" value="">

                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="images">Upload Images:</label>
                                    <input class="form-control" accept="*.jpg,*.png,*.jpeg" name="images[]"
                                        type="file" id="file-input" multiple>
                                    <div class="preview" id="preview"></div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="btnAddPropertyImage" value="yes"
                                class="btn btn-primary text-white">Yes, Proceed</button>
                            <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal"
                                style="color:white !important;">Close</button>
                        </div>
                    </form>

                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addPropertyModal" tabindex="-1" role="dialog"
        aria-labelledby="addPropertyModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="/agent_property" method="post">
                    @method('post')
                    @csrf
                    <div class="modal-header">
                        <h3>Add Property</h3>
                    </div>
                    <form action="" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="form-group">
                                    <label for="propertyName">Property Name:</label>
                                    <input required type="text" name="propertyName" id=""
                                        class="form-control mt-2">
                                </div>
                                <div class="form-group  mt-2">
                                    <label for="price">Price:</label>
                                    <input required type="number" name="price" id=""
                                        class="form-control mt-2">
                                </div>
                                <div class="form-group  mt-2">
                                    <label for="phoneNumber">Phone Number:</label>
                                    <input required type="number" name="phoneNumber" id=""
                                        class="form-control mt-2">
                                </div>
                                <div class="form-group  mt-2">
                                    <label for="beds">Beds:</label>
                                    <input required type="number" name="beds" id=""
                                        class="form-control mt-2">
                                </div>
                                <div class="form-group  mt-2">
                                    <label for="baths">Baths:</label>
                                    <input required type="number" name="baths" id=""
                                        class="form-control mt-2">
                                </div>
                                <div class="form-group  mt-2">
                                    <label for="lot">Lot Area:</label>
                                    <input required type="number" name="lot" id=""
                                        class="form-control mt-2">
                                </div>
                                <div class="form-group  mt-2">
                                    <label for="street">Street/Purok:</label>
                                    <textarea required name="street" id="" cols="30" rows="2" class="form-control mt-2"></textarea>
                                </div>
                                <div class="form-group  mt-2">
                                    <label for="city">City/Municipality:</label>
                                    <textarea required name="city" id="" cols="30" rows="2" class="form-control mt-2"></textarea>
                                </div>
                                <div class="form-group  mt-2">
                                    <label for="province">State/Province:</label>
                                    <textarea required name="province" id="" cols="30" rows="2" class="form-control mt-2"></textarea>
                                </div>
                                <div class="form-group  mt-2">
                                    <label for="otherDetails">Other Details:</label>
                                    <textarea required name="otherDetails" id="" cols="30" rows="5" class="form-control mt-2"></textarea>
                                </div>
                                <div class="form-group  mt-2">
                                    <label for="type">Type:</label>
                                    <select required name="type" id="" class="form-control mt-2">
                                        <option value="rent">For Rent</option>
                                        <option value="sale">For Sale</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="btnAddProperty" value="yes"
                                class="btn btn-primary text-white">Yes, Proceed</button>
                            <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal"
                                style="color:white !important;">Close</button>
                        </div>
                    </form>

                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="deletePropertyModal" tabindex="-1" role="dialog"
        aria-labelledby="deletePropertyModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="deleteProperty" action="/agent_property" method="post">
                    @method('delete')
                    @csrf
                    <div class="modal-header">
                        <h3>Delete Property</h3>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <h5>
                                Are You Sure You Want To Delete This Property?
                            </h5>
                        </div>
                        <input type="hidden" id="deleteImageProp" name="origImagePath" value="">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="btnDeleteProperty" value="yes"
                            class="btn btn-primary text-white">Yes, Proceed</button>
                        <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal"
                            style="color:white !important;">Close</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
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
    <script>
        document.getElementById('file-input').addEventListener('change', function(event) {
            const files = event.target.files;
            const preview = document.getElementById('preview');
            preview.innerHTML = ''; // Clear the current preview

            Array.from(files).forEach(file => {
                if (file.type.startsWith('image/')) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const img = document.createElement('img');
                        img.src = e.target.result;
                        preview.appendChild(img);
                    };
                    reader.readAsDataURL(file);
                } else {
                    alert('File is not an image.');
                }
            });
        });

        function updateAddImage(img, id) {
            let imagePropertyName = document.getElementById('imagePropertyName');
            imagePropertyName.value = img;

            let imagePid = document.getElementById('imagePid');
            imagePid.value = id;
        }

        function deleteProp(id, imgProp) {
            let deleteProperty = document.getElementById('deleteProperty');
            deleteProperty.action = `/agent_property/${id}`;
            let deleteImageProp = document.getElementById('deleteImageProp');
            deleteImageProp.value = imgProp;
        }
    </script>
    @if (session()->pull('successDeleteProp'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Deleted Property',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('successDeleteProp') }}
    @endif
    @if (session()->pull('successAddImage'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Added Property Image',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('successAddImage') }}
    @endif
    @if (session()->pull('successAddProperty'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Successfully Added Property',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('successAddProperty') }}
    @endif
    @if (session()->pull('errorAddProperty'))
        <script>
            setTimeout(() => {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Failed To Add Property, Please Try Again Later',
                    showConfirmButton: false,
                    timer: 800
                });
            }, 500);
        </script>
        {{ session()->forget('errorAddProperty') }}
    @endif
</body>

</html>
