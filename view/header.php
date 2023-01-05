<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if (isset($page_name)) {echo ($page_name);}?></title>
    <!-- <link rel="shortcut icon" href="image/logo150.png" type="image/x-icon"> -->
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/duan.css">
    <link rel="stylesheet" href="CSS/khudan.css">
    <link rel="stylesheet" href="CSS/tintuc.css">
    <link rel="stylesheet" href="CSS/lienhe.css">
    <link rel="stylesheet" href="CSS/login.css">
    <link rel="stylesheet" href="CSS/thuvien.css">
    <link rel="stylesheet" href="CSS/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" 
        crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/tachyons/css/tachyons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/tachyons-animate.css">
</head>
<body>
    
    <!-- <div id="menuIns">
        <ul>
        <li><a href="https://github.com/TanDuy03" target="_blank"><i class="fa-solid fa-xmark"></i>Kiểm tra</a></li>
        <li><a href="https://github.com/TanDuy03" target="_blank"><i class="fa-solid fa-xmark"></i>Kiểm tra</a></li>
        <li><a href="https://github.com/TanDuy03" target="_blank"><i class="fa-solid fa-xmark"></i>Kiểm tra</a></li>
        <li><a href="https://github.com/TanDuy03" target="_blank"><i class="fa-solid fa-xmark"></i>Kiểm tra</a></li>
        <li><a href="https://github.com/TanDuy03" target="_blank"><i class="fa-solid fa-xmark"></i>Kiểm tra</a></li>
        </ul>
    </div>
    <style>
        #menuIns{
            position: fixed;
            top:50%;
            left:50%;
            width:200px;
            display: none;
            z-index: 999999;
        }
        #menuIns ul{
            padding:0;
            margin: 0;
            list-style: none;
        }
        #menuIns li i{
            margin-right: 15px;
            margin-left: 10px;
        }
        #menuIns li{
            padding:10px;
            background-color: #016f86;
            border-bottom: 1px solid #ffffff;
            color:#fff;
            transition: 0.5s;
            opacity: 0;
            animation: showmenu 0.5s ease-in-out 1 forwards;
        }
        #menuIns li a{
            color:#ffffff;
        }
        #menuIns li:nth-child(2){
            animation-delay: 0.2s;
        }
        #menuIns li:nth-child(3){
            animation-delay: 0.4s;
        }
        #menuIns li:nth-child(4){
            animation-delay: 0.6s;
        }
        #menuIns li:nth-child(5){
            animation-delay: 0.8s;
        }
        #menuIns li:hover{
            background-color: #525F6C;
            transform: translate(0,-10px);
        }
        #menuIns li a:hover{
            text-decoration: none;
        }
        @keyframes showmenu{
            from{
                opacity: 0;
                transform: translate(0,20px);
            }to{
                opacity: 1;
                transform: translate(0,0);
            }
        }
    </style>
    <script>
        let menu = document.getElementById('menuIns');
        document.addEventListener('contextmenu', function(event){
            menu.style.display = 'block';
            menu.style.top = event.y + 'px';
            menu.style.left = event.x + 'px';
            event.preventDefault();
        })
        document.addEventListener('click', function(event){
            menu.style.display = 'none';
        })
    </script> -->
    <script>
        document.addEventListener("contextmenu", function(e){
            e.preventDefault();
        })
    </script>
    <div class="wrapper" id="navbar">
        <nav>
            <input type="checkbox" id="show-search">
            <input type="checkbox" id="show-menu">
            <label for="show-menu" class="menu-icon"><i class="fa-solid fa-bars"></i></label>
            <div class="content">
                <div class="logo"><a href="./index.php"><img src="image/logo150.png" alt=""></a></div>
                <ul class="links" id="myActive">
                    <li class="btn_active <?php if($page_at == 'gioi_thieu') echo('active_hd')?>">
                        <a href="index.php?act=gioithieu" class="desktop-link">Giới thiệu</a>
                        <input type="checkbox" id="show-features">
                        <label for="show-features">Giới thiệu</label>
                        <ul class="subMenu">
                            <li class="noActive"><a href="#">CÔNG TY CỔ PHẦN CENTERHOME</a></li>
                            <li><a href="#">TẦM NHÌN, SỨ MỆNH, GIÁ TRỊ CỐT LÕI</a></li>
                        </ul>
                    </li>
                    <li class="btn_active <?php if($page_at == 'du_an') echo('active_hd')?>"><a href="index.php?act=duan">Dự án</a></li>
                    <li class="btn_active <?php if($page_at == 'qh_dt') echo('active_hd')?>"><a href="index.php?act=quanhedautu">Quan hệ đầu tư</a></li>
                    <li class="btn_active <?php if($page_at == 'tin_tuc') echo('active_hd')?>">
                        <a href="index.php?act=tintuc" class="desktop-link">Tin tức</a>
                        <input type="checkbox" id="show-services">
                        <label for="show-services">Tin tức</label>
                        <ul class="subMenu">
                            <li><a href="#">Thị trường BĐS </a></li>
                            <li><a href="#">Tin nội bộ</a></li>
                        </ul>
                    </li>
                    <li class="btn_active <?php if($page_at == 'thu_vien') echo('active_hd')?>"><a href="index.php?act=thuvien">Thư viện</a></li>
                    <li class="btn_active <?php if($page_at == 'tuyen_dung') echo('active_hd')?>">
                        <a href="index.php?act=tuyendung" class="desktop-link">Tuyển dụng</a>
                        <input type="checkbox" id="show-job">
                        <label for="show-job">Tuyển dụng</label>
                        <ul class="subMenu">
                            <li><a href="#">Tuyển dụng Digital Marketing</a></li>
                            <li><a href="#">Tuyển 20 nhân viên kinh doanh & quản lý</a></li>
                            <li><a href="#">Tuyển dụng Lễ Tân Kiêm Hành Chánh</a></li>
                        </ul>
                    </li>
                    <li class="btn_active <?php if($page_at == 'lien_he') echo('active_hd')?>"><a href="index.php?act=lienhe">Liên hệ</a></li>
                </ul>
            </div>                
            <label for="show-search" class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></label>
            <form action="#" class="search-box">
                <input type="text" placeholder="Tìm kiếm tại đây..." required>
                <button type="submit" class="go-icon"><i class="fa-solid fa-arrow-right"></i></button>
            </form>
        </nav>
    </div>

