<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Ample Admin Lite Template by WrapPixel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
   <link href="css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="dashboard.php">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src="../img/fav.png" alt="homepage" />
                        </b>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class=" in">
                            <form role="search" class="app-search d-none d-md-block me-3">
                                <input type="text" placeholder="Search..." class="form-control mt-0">
                                <a href="" class="active">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li>
                            <a class="profile-pic" href="#">
                                <img src="plugins/images/users/varun.jpg" alt="user-img" width="36"
                                    class="img-circle"><span class="text-white font-medium">Steave</span></a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
            <?php 
    include("../config/config.php");


    if(isset($_POST["submit"])) {
        $MaHang = $_POST['MaHang'];
        $TenHang = $_POST['TenHang'];
        $Size = $_POST['Size'];
        $SlgTon = $_POST['SlgTon'];
        $GiaBan = $_POST['GiaBan'];
        $TrangThai = $_POST['TrangThai'];

        $sql_update = "UPDATE hang set TenHang = '$TenHang',Size = '$Size',SlgTon = '$SlgTon',GiaBan = '$GiaBan', NgungBan = '$TrangThai' where MaHang = '$MaHang'";
        mysqli_query($conn,$sql_update);
    }
?>


    <?php 
        include ("../config/config.php");
        if(isset($_GET['MaHang'])) {
            $MaHang = $_GET['MaHang'];
            $sql = "SELECT * FROM hang WHERE MaHang = '$MaHang'";
            $result = mysqli_query($conn,$sql);
        }
    ?>
        <?php 
        while ($row = mysqli_fetch_assoc($result)){?>
        <form class="mt-4" method="POST" action="">
            <div class="mb-3">
                <label for="TenHang" class="form-label">Tên Sản Phẩm</label>
                <input type="text" name="TenHang" class="form-control" id="TenHang" value="<?php echo $row['TenHang']; ?>">
            </div>
            <div class="mb-3">
                <label for="Size" class="form-label">Size</label>
                <input type="text" name="Size" class="form-control" id="Size" value="<?php echo $row['Size']; ?>">
            </div>
            <div class="mb-3">
                <label for="SlgTon" class="form-label">Số Lượng Tồn</label>
                <input type="text" name="SlgTon" class="form-control" id="SlgTon" value="<?php echo $row['SlgTon']; ?>">
            </div>
            <div class="mb-3">
                <label for="GiaBan" class="form-label">Giá Bán</label>
                <input type="text" name="GiaBan" class="form-control" id="GiaBan" value="<?php echo $row['GiaBan']; ?>">
            </div>
            
							<div class="form-group">
								<label>Trạng Thái</label>
								<select name="TrangThai" class="form-control" id="TrangThai">
									<option value=1> Vẫn Kinh Doanh</option>
									<option value=0>Ngừng Kinh Doanh</option>
									</select>
							</div>
                        
            <input type="hidden" name="MaHang" class="form-control" id= "MaHang" value="<?php echo $row['MaHang']; ?>">
            <button type="submit" class="btn btn-primary mt-3 mb-4" name="submit">Lưu</button>
            <button class="btn btn-success mb-2 "><a href="product.php" class="text-white">Quay Lại</a></button>
        </form>
        <?php } ?>

    </div>
    <footer class="footer text-center"> 2021 © Ample Admin brought to you by <a
                    href="https://www.wrappixel.com/">wrappixel.com</a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
</body>
</body>
</html>