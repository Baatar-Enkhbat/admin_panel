<?php
// Логин хийсэн эсэхийг шалгая
if ($_SESSION['type'] !== 'user') {
    // Хийгээгүй бол алдааны мэдээллийг SESSION д бичнэ
    // Логин хуудас руу үсэргэнэ
    $_SESSION['errors'] = ["Та энэ хуудсыг үзэхийн тулд эхлээд өөрийн эрхээр нэвтэрнэ үү"];
    redirect('/sign-in');
}
?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title><?=ucfirst(DOMAIN) . ' :: ' . $_SESSION['name'];?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">

    <link href="/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="/assets/libs/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    <link href="/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

    <!-- Bootstrap Css -->
    <link href="/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body data-topbar="dark" data-layout="horizontal">

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar" style="z-index:900">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->

                    <button type="button"
                        class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light"
                        data-toggle="collapse" data-target="#topnav-menu-content">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                    <div class="d-none d-lg-inline-block">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-target="#search-wrap">
                            <a class="header-item" href="../landing/index.html" target="_blank">
                                <i
                                    class="mdi mdi-airplane mr-2 font-size-16"></i><?=$_SESSION['phone'] . ' ( ' . $_SESSION['email'] . ' ) ';?>
                            </a>
                        </button>
                    </div>

                </div>

                <!-- Search input -->
                <div class="search-wrap" id="search-wrap">
                    <div class="search-bar">
                        <input class="search-input form-control" placeholder="Search" />
                        <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                            <i class="mdi mdi-close-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="d-flex">

                    <div class="dropdown d-none d-lg-inline-block">
                        <button type="button" class="btn header-item toggle-search noti-icon waves-effect"
                            data-target="#search-wrap">
                            <i class="mdi mdi-magnify"></i>
                        </button>
                    </div>


                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon waves-effect"
                            id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="mdi mdi-bell-outline"></i>
                            <span class="badge badge-danger badge-pill">2</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                            aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-3">
                                <h6 class="m-0">Notifications (258) </h6>
                            </div>

                            <div data-simplebar style="max-height: 230px;">
                                <a href="" class="text-reset notification-item">
                                    <div class="media">
                                        <div class="avatar-xs mr-3">
                                            <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                <i class="mdi mdi-cart-outline"></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1 font-size-15">Your order is placed</h6>
                                            <div class="text-muted">
                                                <p class="mb-1 font-size-12">Dummy text of the printing and typesetting
                                                    industry.</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="" class="text-reset notification-item">
                                    <div class="media">
                                        <div class="avatar-xs mr-3">
                                            <span class="avatar-title bg-warning rounded-circle font-size-16">
                                                <i class="mdi mdi-message"></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1 font-size-15">New Message received</h6>
                                            <div class="text-muted">
                                                <p class="mb-1 font-size-12">You have 87 unread messages</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="" class="text-reset notification-item">
                                    <div class="media">
                                        <div class="avatar-xs mr-3">
                                            <span class="avatar-title bg-info rounded-circle font-size-16">
                                                <i class="mdi mdi-martini"></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1 font-size-15">Your order is placed</h6>
                                            <div class="text-muted">
                                                <p class="mb-1 font-size-12">It is a long established fact that a reader
                                                    will
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="" class="text-reset notification-item">
                                    <div class="media">
                                        <div class="avatar-xs mr-3">
                                            <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                <i class="mdi mdi-cart-outline"></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1 font-size-15">Your order is placed</h6>
                                            <div class="text-muted">
                                                <p class="mb-1 font-size-12">Dummy text of the printing and typesetting
                                                    industry.</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="" class="text-reset notification-item">
                                    <div class="media">
                                        <div class="avatar-xs mr-3">
                                            <span class="avatar-title bg-danger rounded-circle font-size-16">
                                                <i class="mdi mdi-cart-outline"></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1 font-size-15">Your order is placed</h6>
                                            <div class="text-muted">
                                                <p class="mb-1 font-size-12">Dummy text of the printing and typesetting
                                                    industry.</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                            </div>
                            <div class="p-2 border-top">
                                <a class="btn btn-sm btn-link font-size-14 btn-block text-center"
                                    href="javascript:void(0)">
                                    <i class="mdi mdi-arrow-right-circle mr-1"></i> View all
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown d-none d-lg-inline-block ml-1">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                            <i class="mdi mdi-fullscreen"></i>
                        </button>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="/assets/images/users/user-1.jpg"
                                alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ml-1"><?=$_SESSION['name']?></span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a class="dropdown-item" href="#"><i
                                    class="dripicons-user d-inline-block text-muted mr-2"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i
                                    class="dripicons-wallet d-inline-block text-muted mr-2"></i> My Wallet</a>
                            <a class="dropdown-item d-block" href="#"><i
                                    class="dripicons-gear d-inline-block text-muted mr-2"></i>
                                Settings</a>
                            <a class="dropdown-item" href="#"><i
                                    class="dripicons-lock d-inline-block text-muted mr-2"></i> Lock screen</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i
                                    class="dripicons-exit d-inline-block text-muted mr-2"></i> Logout</a>
                        </div>
                    </div>


                </div>
            </div>
        </header>

        <?php require 'navbar.php';?>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <?php if (!empty($_SESSION['errors'])): ?>
                <div class="alert alert-danger" role="alert">
                    <ul>
                        <?php foreach ($_SESSION['errors'] as $error): ?>
                        <li><?=$error?></li>
                        <?php endforeach;?>
                    </ul>
                </div>
                <?php unset($_SESSION['errors']);endif;?>

                <?php if (!empty($_SESSION['messages'])): ?>
                <div class="alert alert-info" role="alert">
                    <ul>
                        <?php foreach ($_SESSION['messages'] as $message): ?>
                        <li><?=$message?></li>
                        <?php endforeach;?>
                    </ul>
                </div>
                <?php unset($_SESSION['messages']);endif;?>