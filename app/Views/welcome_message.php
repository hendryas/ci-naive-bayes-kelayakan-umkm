<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Circl - Responsive Admin Dashboard Template</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&display=swap" rel="stylesheet">
    <link href="<?= base_url(); ?>plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>plugins/font-awesome/css/all.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="<?= base_url(); ?>plugins/apexcharts/apexcharts.css" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="<?= base_url(); ?>css/main.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>

    <div class="page-container">
        <div class="page-header">
            <nav class="navbar navbar-expand-lg d-flex justify-content-between">
                <div class="" id="navbarNav">
                    <ul class="navbar-nav" id="leftNav">
                        <li class="nav-item">
                            <a class="nav-link" id="sidebar-toggle" href="#"><i data-feather="arrow-left"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Settings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Help</a>
                        </li>
                    </ul>
                </div>
                <div class="logo">
                    <a class="navbar-brand" href="index.html"></a>
                </div>
                <div class="" id="headerNav">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link search-dropdown" href="#" id="searchDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i data-feather="search"></i></a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-lg search-drop-menu" aria-labelledby="searchDropDown">
                                <form>
                                    <input class="form-control" type="text" placeholder="Type something.." aria-label="Search">
                                </form>
                                <h6 class="dropdown-header">Recent Searches</h6>
                                <a class="dropdown-item" href="#">charts</a>
                                <a class="dropdown-item" href="#">new orders</a>
                                <a class="dropdown-item" href="#">file manager</a>
                                <a class="dropdown-item" href="#">new users</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link notifications-dropdown" href="#" id="notificationsDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false">3</a>
                            <div class="dropdown-menu dropdown-menu-end notif-drop-menu" aria-labelledby="notificationsDropDown">
                                <h6 class="dropdown-header">Notifications</h6>
                                <a href="#">
                                    <div class="header-notif">
                                        <div class="notif-image">
                                            <span class="notification-badge bg-info text-white">
                                                <i class="fas fa-bullhorn"></i>
                                            </span>
                                        </div>
                                        <div class="notif-text">
                                            <p class="bold-notif-text">faucibus dolor in commodo lectus mattis</p>
                                            <small>19:00</small>
                                        </div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="header-notif">
                                        <div class="notif-image">
                                            <span class="notification-badge bg-primary text-white">
                                                <i class="fas fa-bolt"></i>
                                            </span>
                                        </div>
                                        <div class="notif-text">
                                            <p class="bold-notif-text">faucibus dolor in commodo lectus mattis</p>
                                            <small>18:00</small>
                                        </div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="header-notif">
                                        <div class="notif-image">
                                            <span class="notification-badge bg-success text-white">
                                                <i class="fas fa-at"></i>
                                            </span>
                                        </div>
                                        <div class="notif-text">
                                            <p>faucibus dolor in commodo lectus mattis</p>
                                            <small>yesterday</small>
                                        </div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="header-notif">
                                        <div class="notif-image">
                                            <span class="notification-badge">
                                                <img src="../../assets/images/avatars/profile-image.png" alt="">
                                            </span>
                                        </div>
                                        <div class="notif-text">
                                            <p>faucibus dolor in commodo lectus mattis</p>
                                            <small>yesterday</small>
                                        </div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="header-notif">
                                        <div class="notif-image">
                                            <span class="notification-badge">
                                                <img src="../../assets/images/avatars/profile-image.png" alt="">
                                            </span>
                                        </div>
                                        <div class="notif-text">
                                            <p>faucibus dolor in commodo lectus mattis</p>
                                            <small>yesterday</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link profile-dropdown" href="#" id="profileDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="../../assets/images/avatars/profile-image.png" alt=""></a>
                            <div class="dropdown-menu dropdown-menu-end profile-drop-menu" aria-labelledby="profileDropDown">
                                <a class="dropdown-item" href="#"><i data-feather="user"></i>Profile</a>
                                <a class="dropdown-item" href="#"><i data-feather="inbox"></i>Messages</a>
                                <a class="dropdown-item" href="#"><i data-feather="edit"></i>Activities<span class="badge rounded-pill bg-success">12</span></a>
                                <a class="dropdown-item" href="#"><i data-feather="check-circle"></i>Tasks</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i data-feather="settings"></i>Settings</a>
                                <a class="dropdown-item" href="#"><i data-feather="unlock"></i>Lock</a>
                                <a class="dropdown-item" href="#"><i data-feather="log-out"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="page-sidebar">
            <ul class="list-unstyled accordion-menu">
                <li class="sidebar-title">
                    Main
                </li>
                <li class="active-page">
                    <a href="index.html"><i data-feather="home"></i>Dashboard</a>
                </li>
                <li class="sidebar-title">
                    Apps
                </li>
                <li>
                    <a href="email.html"><i data-feather="inbox"></i>Email</a>
                </li>
                <li>
                    <a href="calendar.html"><i data-feather="calendar"></i>Calendar</a>
                </li>
                <li>
                    <a href="social.html"><i data-feather="user"></i>Social</a>
                </li>
                <li>
                    <a href="file-manager.html"><i data-feather="message-circle"></i>File Manager</a>
                </li>
                <li class="sidebar-title">
                    Elements
                </li>
                <li>
                    <a href="index.html"><i data-feather="code"></i>Components<i class="fas fa-chevron-right dropdown-icon"></i></a>
                    <ul class="">
                        <li><a href="alerts.html"><i class="far fa-circle"></i>Alerts</a></li>
                        <li><a href="typography.html"><i class="far fa-circle"></i>Typography</a></li>
                        <li><a href="icons.html"><i class="far fa-circle"></i>Icons</a></li>
                        <li><a href="badge.html"><i class="far fa-circle"></i>Badge</a></li>
                        <li><a href="buttons.html"><i class="far fa-circle"></i>Buttons</a></li>
                        <li><a href="dropdowns.html"><i class="far fa-circle"></i>Dropdowns</a></li>
                        <li><a href="list-group.html"><i class="far fa-circle"></i>List Group</a></li>
                        <li><a href="toasts.html"><i class="far fa-circle"></i>Toasts</a></li>
                        <li><a href="modal.html"><i class="far fa-circle"></i>Modal</a></li>
                        <li><a href="pagination.html"><i class="far fa-circle"></i>Pagination</a></li>
                        <li><a href="popovers.html"><i class="far fa-circle"></i>Popovers</a></li>
                        <li><a href="progress.html"><i class="far fa-circle"></i>Progress</a></li>
                        <li><a href="spinners.html"><i class="far fa-circle"></i>Spinners</a></li>
                        <li><a href="accordion.html"><i class="far fa-circle"></i>Accordion</a></li>
                    </ul>
                </li>
                <li>
                    <a href="index.html"><i data-feather="gift"></i>Plugins<i class="fas fa-chevron-right dropdown-icon"></i></a>
                    <ul class="">
                        <li><a href="block-ui.html"><i class="far fa-circle"></i>Block UI</a></li>
                        <li><a href="session-timeout.html"><i class="far fa-circle"></i>Session Timeout</a></li>
                        <li><a href="tree-view.html"><i class="far fa-circle"></i>Tree View</a></li>
                    </ul>
                </li>
                <li>
                    <a href="index.html"><i data-feather="edit"></i>Form<i class="fas fa-chevron-right dropdown-icon"></i></a>
                    <ul class="">
                        <li><a href="form-elements.html"><i class="far fa-circle"></i>Form Elements</a></li>
                        <li><a href="form-layout.html"><i class="far fa-circle"></i>Form Layout</a></li>
                        <li><a href="form-validation.html"><i class="far fa-circle"></i>Form Validation</a></li>
                    </ul>
                </li>
                <li>
                    <a href="cards.html"><i data-feather="layers"></i>Cards</a>
                </li>
                <li>
                    <a href="index.html"><i data-feather="list"></i>Tables<i class="fas fa-chevron-right dropdown-icon"></i></a>
                    <ul class="">
                        <li><a href="tables.html"><i class="far fa-circle"></i>Basic Tables</a></li>
                        <li><a href="data-tables.html"><i class="far fa-circle"></i>Data Tables</a></li>
                    </ul>
                </li>
                <li>
                    <a href="charts.html"><i data-feather="pie-chart"></i>Charts</a>
                </li>
                <li class="sidebar-title">
                    Other
                </li>
                <li>
                    <a href="index.html"><i data-feather="star"></i>Pages<i class="fas fa-chevron-right dropdown-icon"></i></a>
                    <ul class="">
                        <li><a href="invoice.html"><i class="far fa-circle"></i>Invoice</a></li>
                        <li><a href="404.html"><i class="far fa-circle"></i>404 Page</a></li>
                        <li><a href="500.html"><i class="far fa-circle"></i>500 Page</a></li>
                        <li><a href="blank-page.html"><i class="far fa-circle"></i>Blank Page</a></li>
                        <li><a href="login.html"><i class="far fa-circle"></i>Login</a></li>
                        <li><a href="register.html"><i class="far fa-circle"></i>Register</a></li>
                        <li><a href="lockscreen.html"><i class="far fa-circle"></i>Lockscreen</a></li>
                        <li><a href="price.html"><i class="far fa-circle"></i>Price</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i data-feather="check-circle"></i>Documentation</a>
                </li>
            </ul>
        </div>
        <div class="page-content">
            <div class="main-wrapper">
                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="card stat-widget">
                            <div class="card-body">
                                <h5 class="card-title">New Customers</h5>
                                <h2>132</h2>
                                <p>From last week</p>
                                <div class="progress">
                                    <div class="progress-bar bg-info progress-bar-striped" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card stat-widget">
                            <div class="card-body">
                                <h5 class="card-title">Orders</h5>
                                <h2>287</h2>
                                <p>Orders in waitlist</p>
                                <div class="progress">
                                    <div class="progress-bar bg-success progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card stat-widget">
                            <div class="card-body">
                                <h5 class="card-title">Monthly Profit</h5>
                                <h2>7.4K</h2>
                                <p>For last 30 days</p>
                                <div class="progress">
                                    <div class="progress-bar bg-danger progress-bar-striped" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card stat-widget">
                            <div class="card-body">
                                <h5 class="card-title">Orders</h5>
                                <h2>87</h2>
                                <p>Orders in waitlist</p>
                                <div class="progress">
                                    <div class="progress-bar bg-primary progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Revenue</h5>
                                <div id="apex1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-4">
                        <div class="card stat-widget">
                            <div class="card-body">
                                <h5 class="card-title">Social Media</h5>
                                <div class="transactions-list">
                                    <div class="tr-item">
                                        <div class="tr-company-name">
                                            <div class="tr-icon tr-card-icon tr-card-bg-primary text-primary">
                                                <i data-feather="thumbs-up"></i>
                                            </div>
                                            <div class="tr-text">
                                                <h4>New post reached 7k+ likes</h4>
                                                <p>02 March</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="transactions-list">
                                    <div class="tr-item">
                                        <div class="tr-company-name">
                                            <div class="tr-icon tr-card-icon tr-card-bg-info text-info">
                                                <i data-feather="twitch"></i>
                                            </div>
                                            <div class="tr-text">
                                                <h4>Developer AMA is now live</h4>
                                                <p>01 March</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="transactions-list">
                                    <div class="tr-item">
                                        <div class="tr-company-name">
                                            <div class="tr-icon tr-card-icon tr-card-bg-danger text-danger">
                                                <i data-feather="instagram"></i>
                                            </div>
                                            <div class="tr-text">
                                                <h4>52 unread messages</h4>
                                                <p>23 February</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="transactions-list">
                                    <div class="tr-item">
                                        <div class="tr-company-name">
                                            <div class="tr-icon tr-card-icon tr-card-bg-warning text-warning">
                                                <i data-feather="shopping-bag"></i>
                                            </div>
                                            <div class="tr-text">
                                                <h4>2 new orders from shop page</h4>
                                                <p>17 February</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="transactions-list">
                                    <div class="tr-item">
                                        <div class="tr-company-name">
                                            <div class="tr-icon tr-card-icon tr-card-bg-info text-info">
                                                <i data-feather="twitter"></i>
                                            </div>
                                            <div class="tr-text">
                                                <h4>Hashtag #circl is trending</h4>
                                                <p>03 February</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="card table-widget">
                            <div class="card-body">
                                <h5 class="card-title">Recent Orders</h5>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Customer</th>
                                                <th scope="col">Product</th>
                                                <th scope="col">Invoice</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><img src="../../assets/images/avatars/profile-image.png" alt="">Anna Doe</th>
                                                <td>Modern</td>
                                                <td>#53327</td>
                                                <td>$20</td>
                                                <td><span class="badge bg-info">Shipped</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><img src="../../assets/images/avatars/profile-image.png" alt="">John Doe</th>
                                                <td>Alpha</td>
                                                <td>#13328</td>
                                                <td>$25</td>
                                                <td><span class="badge bg-success">Paid</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><img src="../../assets/images/avatars/profile-image.png" alt="">Anna Doe</th>
                                                <td>Lime</td>
                                                <td>#35313</td>
                                                <td>$20</td>
                                                <td><span class="badge bg-danger">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><img src="../../assets/images/avatars/profile-image.png" alt="">John Doe</th>
                                                <td>Circl Admin</td>
                                                <td>#73423</td>
                                                <td>$23</td>
                                                <td><span class="badge bg-primary">Shipped</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><img src="../../assets/images/avatars/profile-image.png" alt="">Nina Doe</th>
                                                <td>Space</td>
                                                <td>#54773</td>
                                                <td>$20</td>
                                                <td><span class="badge bg-success">Paid</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-4">
                        <div class="card stat-widget">
                            <div class="card-body">
                                <h5 class="card-title">Orders</h5>
                                <div id="apex2"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <div class="card stat-widget">
                            <div class="card-body">
                                <h5 class="card-title">Tasks Overview</h5>
                                <div class="transactions-list">
                                    <div class="tr-item">
                                        <div class="tr-company-name">
                                            <div class="tr-icon tr-card-icon tr-card-bg-primary text-primary">
                                                <i data-feather="user"></i>
                                            </div>
                                            <div class="tr-text">
                                                <a href="#">
                                                    <h4>Project Managment</h4>
                                                </a>
                                                <p>Management</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="transactions-list">
                                    <div class="tr-item">
                                        <div class="tr-company-name">
                                            <div class="tr-icon tr-card-icon tr-card-bg-info text-info">
                                                <i data-feather="user"></i>
                                            </div>
                                            <div class="tr-text">
                                                <a href="#">
                                                    <h4>Design</h4>
                                                </a>
                                                <p>Creative</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="transactions-list">
                                    <div class="tr-item">
                                        <div class="tr-company-name">
                                            <div class="tr-icon tr-card-icon tr-card-bg-secondary">
                                                <i data-feather="user"></i>
                                            </div>
                                            <div class="tr-text">
                                                <a href="#">
                                                    <h4>Financial Accounting</h4>
                                                </a>
                                                <p>Finance</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="transactions-list">
                                    <div class="tr-item">
                                        <div class="tr-company-name">
                                            <div class="tr-icon tr-card-icon tr-card-bg-primary text-primary">
                                                <i data-feather="user"></i>
                                            </div>
                                            <div class="tr-text">
                                                <a href="#">
                                                    <h4>Testing</h4>
                                                </a>
                                                <p>Manager</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="transactions-list">
                                    <div class="tr-item">
                                        <div class="tr-company-name">
                                            <div class="tr-icon tr-card-icon tr-card-bg-secondary text-secondary">
                                                <i data-feather="user"></i>
                                            </div>
                                            <div class="tr-text">
                                                <a href="#">
                                                    <h4>Development</h4>
                                                </a>
                                                <p>Developers</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-4">
                        <div class="card">
                            <img src="../../assets/images/card-bg.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="card-meet-header">
                                    <div class="card-meet-day">
                                        <h6>WED</h6>
                                        <h3>7</h3>
                                    </div>
                                    <div class="card-meet-text">
                                        <h6>Developer AMA</h6>
                                        <p>Meet project developers</p>
                                    </div>
                                </div>
                                <p class="card-text m-b-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                <a href="#" class="btn btn-info">Join</a>
                                <a href="#" class="btn btn-primary">Invite</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="card stat-widget">
                            <div class="card-body">
                                <h5 class="card-title">Transactions</h5>
                                <div class="transactions-list">
                                    <div class="tr-item">
                                        <div class="tr-company-name">
                                            <div class="tr-icon tr-card-icon tr-card-bg-primary text-primary">
                                                <i data-feather="thumbs-up"></i>
                                            </div>
                                            <div class="tr-text">
                                                <h4>Facebook</h4>
                                                <p>02 March</p>
                                            </div>
                                        </div>
                                        <div class="tr-rate">
                                            <p><span class="text-success">+ $24</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="transactions-list">
                                    <div class="tr-item">
                                        <div class="tr-company-name">
                                            <div class="tr-icon tr-card-icon tr-card-bg-success text-success">
                                                <i data-feather="credit-card"></i>
                                            </div>
                                            <div class="tr-text">
                                                <h4>Visa</h4>
                                                <p>02 March</p>
                                            </div>
                                        </div>
                                        <div class="tr-rate">
                                            <p><span class="text-success">+ $300</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="transactions-list">
                                    <div class="tr-item">
                                        <div class="tr-company-name">
                                            <div class="tr-icon tr-card-icon tr-card-bg-danger text-danger">
                                                <i data-feather="tv"></i>
                                            </div>
                                            <div class="tr-text">
                                                <h4>Netflix</h4>
                                                <p>02 March</p>
                                            </div>
                                        </div>
                                        <div class="tr-rate">
                                            <p><span class="text-danger">- $17</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="transactions-list">
                                    <div class="tr-item">
                                        <div class="tr-company-name">
                                            <div class="tr-icon tr-card-icon tr-card-bg-warning text-warning">
                                                <i data-feather="shopping-cart"></i>
                                            </div>
                                            <div class="tr-text">
                                                <h4>Themeforest</h4>
                                                <p>02 March</p>
                                            </div>
                                        </div>
                                        <div class="tr-rate">
                                            <p><span class="text-danger">- $220</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="transactions-list">
                                    <div class="tr-item">
                                        <div class="tr-company-name">
                                            <div class="tr-icon tr-card-icon tr-card-bg-info text-info">
                                                <i data-feather="dollar-sign"></i>
                                            </div>
                                            <div class="tr-text">
                                                <h4>PayPal</h4>
                                                <p>02 March</p>
                                            </div>
                                        </div>
                                        <div class="tr-rate">
                                            <p><span class="text-success">+20%</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Javascripts -->
    <script src="<?= base_url(); ?>plugins/jquery/jquery-3.4.1.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="<?= base_url(); ?>plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="<?= base_url(); ?>plugins/perfectscroll/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url(); ?>plugins/apexcharts/apexcharts.min.js"></script>
    <script src="<?= base_url(); ?>js/main.min.js"></script>
    <script src="<?= base_url(); ?>js/pages/dashboard.js"></script>
</body>

</html>