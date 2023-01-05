<?php
    session_start();
    if (!isset($_SESSION['tongtruycap'])){
        ($_SESSION['tongtruycap'] = 0);
    }else{
        $_SESSION['tongtruycap'] += 1;
    }
    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            case 'gioithieu':
                include_once "view/gioithieu.php";
                break;
            case 'duan':
                include_once "view/duan.php";
                break;
            case 'khudancu':
                include_once "view/khudancu.php";
                break;
            case 'quanhedautu':
                include_once "view/quanhedautu.php";
                break;
            case 'tintuc':
                include_once "view/tintuc.php";
                break;
            case 'thuvien':
                include_once "view/thuvien.php";
                break;
            case 'tuyendung':
                include_once "view/tuyendung.php";
                break;
            case 'lienhe':
                include_once "view/lienhe.php";
                break;
            case 'exit':
                session_unset();
                session_destroy();
                header("location: trangquantri/login.php");
                break;
            default:
                include_once "view/home.php";
                break;
            }
    }else{
        include_once "view/home.php";
    }

    include_once "view/footer.php";
?>