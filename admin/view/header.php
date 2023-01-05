<?php

    if (isset($_SESSION['role']) && ($_SESSION['role']==1)) {
    echo "<script>
            setTimeout(() => {
                alert('Reload sau 5 giây');
            },120000)
        </script>";
        echo header("refresh: 125; url=../index.php?act=exit");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" 
    integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</head>
<body>
    <div class="wrapper">

        <nav id="sidebar">
            <div class="sidebar-header">
                <a href="index.php"><h3>CenterHome</h3></a>
            </div>
            <div>
                <p style="background-color: #FFC145; padding:10px 20px; color:#fff;">Xin chào, <span style="color: #ffffff; text-transform:capitalize; font-weight:bold;"><?php echo $_SESSION['user_name']; ?></span></p>
            </div>
            <ul class="list-unstyled components">
                <li class="<?php if($padmin == 'trang_chu') echo "active" ?>">
                    <a href="index.php"><i class="fa-solid fa-house"></i> Trang chủ</a>
                </li>
                <li class="<?php if($padmin == 'bai_viet') echo "active" ?>">
                    <a href="index.php?act=baiviet"><i class="fa-solid fa-blog"></i> Bài viết</a>
                </li>
                <li class="<?php if($padmin == 'binh_luan') echo "active" ?>">
                    <a href="index.php?act=binhluan"><i class="fa-regular fa-comment"></i> Bình luận</a>
                </li>
                <li>
                    <a href="#"><i class="fa-solid fa-chart-line"></i> Thống kê</a>
                </li>
                <li>
                    <a href="#"><i class="fa-solid fa-headset"></i> Hỗ trợ</a>
                </li>
            </ul>

            <div class="xemThem">
                <a href="#">Xem thêm</a>
            </div>
            <div class="xemThem">
                <a href="../index.php?act=exit">Đăng xuất</a>
            </div>
        </nav>

        <script>
            $(document).ready(function () {
                $('#sidebarMenu').on('click', function () {
                    $('#sidebar').toggleClass('active');
                });
            });
        </script>

        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarMenu" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Menu</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa-solid fa-chart-line"></i> Biểu đồ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa-regular fa-user"></i> Tài khoản</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa-solid fa-gear"></i> Cài đặt</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

<?php 
}else{
    header("location: ../../view/notpage.php");
}
 ?>