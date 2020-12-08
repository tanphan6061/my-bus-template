<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta
            name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Đặt vé xe khách | TNZ CORP</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../assets/css/custom.css"/>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/gijgo.min.js" type="text/javascript"></script>
    <link href="../assets/css/gijgo.min.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/css/carousel.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="../assets/css/font-awesome.css">
    <script src="../assets/js/sweetalert.min.js"></script>
    <!--    <link href="assets/css/mdb.min.css" rel="stylesheet" type="text/css"/>-->

</head>
<body>
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="../">TNZ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tin tức</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Về chúng tôi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Liên hệ</a>
                </li>
            </ul>
            <?php if (isset($_SESSION['logged'])): ?>
                <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
                    <li class="nav-item dropdown">
                        <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Xin chào <?php echo $_SESSION['me']['ho_ten'];?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="bd-versions">
                            <a class="dropdown-item" href="../client/thongtincanhan.php">Thông tin cá nhân</a>
                            <a class="dropdown-item" href="../client/lichsudatve.php">Lịch sử đặt vé</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../client/logout.php">Đăng xuất</a>
                        </div>
                    </li>
                </ul>
            <?php else: ?>
                <a href="../client/login.php" class="btn btn-primary my-2 my-sm-0" type="submit">Đăng nhập</a>
            <?php endif; ?>
        </div>
    </nav>
</header>
