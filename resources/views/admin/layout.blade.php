<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('homes/images/site.png') }}">
    <link rel="stylesheet" href="{{ asset('homes/css/fontawesome.css ') }}">
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('dash/style.css?ver=01') }}">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <title>Admin</title>
</head>

<body>


    <!-- SIDEBAR -->
    <section id="sidebar" style="overflow-y: hidden">
        <a href="{{ route('dashboard') }}" class="brand">
            <img src=" {{ asset('homes/images/cletos.png') }}" alt="" class="logos">
        </a>
        <ul class="side-menu top">
            <li @if ($page_title == 'dashboard') class="active" @endif>
                <a class="ps-2" href="{{ route('dashboard') }}">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li @if ($page_title == 'content') class="active" @endif>
                <div class="dropdown">
                    <a class="p-2 dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class='bx bxs-file'></i>
                        <span class="text">Content MS</span>
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="{{ route('page-add') }}">
                                <i class='bx bxs-shopping-bag-alt'></i>
                                <span class="text-dark">Home Page</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('company.page.add') }}">
                                <i class='bx bxs-doughnut-chart'></i>
                                <span class="text-dark">About Page</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('contact.page.add') }}">
                                <i class='bx bxs-message-dots'></i>
                                <span class="text-dark">Contact Page</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('site-show') }}">
                                <i class='bx bxs-group'></i>
                                <span class="text-dark">Bakeshop Owners</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('faculty-show') }}">
                                <i class='bx bxs-group'></i>
                                <span class="text-dark">System Developers</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('post-show') }}">
                                <i class='bx bxs-group'></i>
                                <span class="text-dark">Post</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('admin.contact.show') }}">
                                <i class='bx bxs-message'></i>
                                <span class="text-dark">Messages</span>
                            </a>
                        </li>
                    </ul>
                </div>
                {{-- <a href="{{ route('page-add') }}">
                    <i class='bx bxs-shopping-bag-alt'></i>
                    <span class="text">Home Page</span>
                </a> --}}
            </li>

            <li @if ($page_title == 'inventory') class="active" @endif>
                <div class="dropdown">
                    <a class="p-2 dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class='bx bxs-bar-chart-alt-2'></i>
                        <span class="text">Inventory MS</span>
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="{{ route('orders-show') }}">
                                <i class='bx bxs-shopping-bag-alt'></i>
                                <span class="text">Orders</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('products-show') }}">
                                <i class='bx bxs-cake'></i>
                                <span class="text">Products</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('category-show') }}">
                                <i class='bx bxs-category'></i>
                                <span class="text">Category</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('ingredients-show') }}">
                                <i class='bx bxs-spa'></i>
                                <span class="text">Ingredients</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('inventory-log-show') }}">
                                <i class='bx bxs-notepad'></i>
                                <span class="text">Inventory Log</span>
                            </a>
                        </li>

                    </ul>
                </div>

            </li>

            <li @if ($page_title == 'sales') class="active" @endif>
                <div class="dropdown">
                    <a class="p-2 dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class='bx bxs-report'></i>
                        <span class="text">Sales Report</span>
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="{{ route('sales-show') }}">
                                <i class='bx bxs-cake'></i>
                                <span class="text">Sales</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('expenses-show') }}">
                                <i class='bx bxs-category'></i>
                                <span class="text">Expenses</span>
                            </a>
                        </li>
                    </ul>
                </div>
                {{-- <a href="{{ route('page-add') }}">
                    <i class='bx bxs-shopping-bag-alt'></i>
                    <span class="text">Home Page</span>
                </a> --}}
            </li>

            {{-- <li @if ($page_title == 'about') class="active" @endif>
                <a href="{{ route('company.page.add') }}">
                    <i class='bx bxs-doughnut-chart'></i>
                    <span class="text">About Page</span>
                </a>
            </li>
            <li @if ($page_title == 'contact') class="active" @endif>
                <a href="{{ route('contact.page.add') }}">
                    <i class='bx bxs-message-dots'></i>
                    <span class="text">Contact Page</span>
                </a>
            </li>
            <li @if ($page_title == 'owners') class="active" @endif>
                <a href="{{ route('site-show') }}">
                    <i class='bx bxs-group'></i>
                    <span class="text">Bakeshop Owners</span>
                </a>
            </li>
            <li @if ($page_title == 'devs') class="active" @endif>
                <a href="{{ route('faculty-show') }}">
                    <i class='bx bxs-group'></i>
                    <span class="text">System Developers</span>
                </a>
            </li>
            <li @if ($page_title == 'post') class="active" @endif>
                <a href="{{ route('post-show') }}">
                    <i class='bx bxs-group'></i>
                    <span class="text">Post</span>
                </a>
            </li>
            <li @if ($page_title == 'messages') class="active" @endif>
                <a href="{{ route('admin.contact.show') }}">
                    <i class='bx bxs-message'></i>
                    <span class="text">Messages</span>
                </a>
            </li>
            <li @if ($page_title == 'category') class="active" @endif>
                <a href="{{ route('category-show') }}">
                    <i class='bx bxs-category'></i>
                    <span class="text">Category</span>
                </a>
            </li>
            <li @if ($page_title == 'products') class="active" @endif>
                <a href="{{ route('products-show') }}">
                    <i class='bx bxs-cake'></i>
                    <span class="text">Products</span>
                </a>
            </li>
            <li @if ($page_title == 'orders') class="active" @endif>
                <a href="{{ route('orders-show') }}">
                    <i class='bx bxs-shopping-bag-alt'></i>
                    <span class="text">Orders</span>
                </a>
            </li> --}}
        </ul>
        <ul class="side-menu">
            <li>
                <a href="/logout" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Admin Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu '></i>
            <a href="#" class="nav-link">
                @yield('title')
            </a>
            <form action="#">
                <div class="form-input">

                </div>

            </form>



            <!-- <a href="{{ route('admin.contact.show') }}" class="notification">
    <i class='bx bxs-bell' ></i>

    <span class="num">8</span>
   </a> -->

            <a href="/home" class="profile">
                <i class="fa fa-user" aria-hidden="true"></i>
            </a>
        </nav>

        @yield('content')

        <script src="{{ asset('dash/script.js') }}"></script>
        @stack('footer-script')

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

</body>

</html>
