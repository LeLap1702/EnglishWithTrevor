<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>admin</title>
    <link rel="icon" href="../assets/img/logo.png" type="image/x-icon" />
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!-- Fonts and icons -->
    <script src="https://kit.fontawesome.com/522874b971.js" crossorigin="anonymous"></script>
    <!-- CSS Files -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/atlantis.min.css">
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/videosmanagement.css">
    <link rel="stylesheet" href="../assets/css/formpost.css">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<?php
include("../manageVideo/modules.php");
$contacts = select_table("*","contact", $mysqli);
?>
<body>
    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header">
                <a href="/admin/ad/index.php" class="logo">
                    <img src="../assets/img/logo.png" style="max-width:60px"> <span class="text">TREVOR</span>
                </a>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg">
                <div class="container-fluid">
                    <div class="collapse" id="search-nav">
                        <form class="navbar-left navbar-form nav-search mr-md-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button type="submit" class="btn btn-search pr-1">
                                        <i class="fa fa-search search-icon fa-5x" style="color:black"></i>
                                    </button>
                                </div>
                                <input type="text" placeholder="Search ..." class="form-control">
                            </div>
                        </form>
                    </div>
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="/admin/manageContact/manageContact.php">
                                <i class="fa fa-envelope" style="color:white"></i>
                                <span class="notification"><?php echo count($contacts); ?></span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell " style="color:white"></i>
                                <span class="notification">9</span>
                            </a>
                        </li>
                    </ul>
            </nav>
            <!-- End Navbar -->
        </div>
        <!-- Sidebar -->
        <div class="sidebar sidebar-style-2">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <div class="user">
                        <div class="avatar-sm float-left mr-2">
                            <img src="../assets/img/profile.png" alt="..." class="avatar-img rounded-circle">
                        </div>
                        <div class="info">
                            <a data-toggle="collapse" class="text-decoration-none" href="#collapseExample" aria-expanded="true">
                                <span class="text-white ">
                                    Trevor
                                    <span>Administrator</span>
                                </span>
                            </a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <ul class="nav nav-danger">
                        <li class="nav-item active">
                            <a class="btn" href="/admin/ad/index.php">
                                <i class="fas fa-home"></i>
                                <p>HOME</p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="btn" href="/admin/manageVideo/videosmanagement.php">
                                <i class="fas fa-layer-group"></i>
                                <p class="text-white"> VIDEOS </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="btn" href="/admin/manageVideo/playlistsmanagement.php">
                                <i class="fas fa-layer-group"></i>
                                <p class="text-white"> PLAYLISTS </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="btn" href="/admin/postCommunity/postCommunity.php">
                                <i class="fas fa-th-list"></i>
                                <p class="text-white">COMMUNITY</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="btn text-white text-uppercase" data-bs-toggle="collapse" data-bs-target="#videos__manage"><i class="fas fa-pen-square"></i> landing page edit</a>
                            <ul id="videos__manage" class=" bg-dark collapse">
                                <li><a class="text-uppercase text-white" href="/Admin/landingPageEdit/videoDemo.php">Videos demo</a></li>
                                <li><a class="text-uppercase text-white" href="/Admin/landingPageEdit/usersFeedback.php">Users feedback</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="content">
                <div class="panel-header">
                    <div class="page-inner py-5">
                        <div class=" align-items-md-center text-light text-center ">
                            <h1 class="text-white pb-2 fw-bold">ADMIN</h1>
                        </div>
                    </div>
                </div>