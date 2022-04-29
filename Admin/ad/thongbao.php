
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Videos management</title>
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


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header">
                <a href="index.html" class="logo">
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
                            <a class="nav-link">
                                <i class="fa fa-envelope" style="color:white"></i>
                                <span class="notification">4</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell " style="color:white"></i>
                                <span class="notification">4</span>
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
                                <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                    <span class="text-white">
									                      Trevor
									                      <span>Administrator</span>
                                    </span>
                                </a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <ul class="nav nav-danger">
                            <li class="nav-item" >
                                <a class="btn" href="index.php">
                                    <i class="fas fa-home"></i>
                                    <p>HOME</p>
                                </a>
                            </li>
                            <li class="nav-item active">
                                <a class="btn" href="videosmanagement.php">
                                    <i class="fas fa-layer-group"></i>
                                    <p class="text-white"> VIDEOS MANAGEMENT</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="btn" href="#">
                                    <i class="fas fa-th-list"></i>
                                    <p class="text-white">Chức năng 2</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="btn" href="#">
                                    <i class="fas fa-pen-square"></i>
                                    <p class="text-white">Chức năng 3</p>
                                </a>
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
                    <div class="container-fluid">
                      <div class="container">  
                      
                        <table class="table">
                          <thead>
                            <h1 id="title">MANAGE VIDEOS</h1>
                            <tr>
                              <th >Email</th>
                              <th >contact</th>
                              
                            </tr>
                          </thead>
                          <tbody>
                            <?php      
                              echo "<th> nguyet.ho23@student.passerellesnumeriques.org</th>";
                              echo "<th> I sent you a new contact</th>";
                            ?>  
                          </tbody>
                        </table>
                      
	                    
                      </div>
                    </div>
                </div>
            </div>
        </div>
      </div> 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
