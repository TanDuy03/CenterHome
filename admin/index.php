<?php
    session_start();
    if ((isset($_SESSION['role'])) && ($_SESSION['role'] == 1)) {
        // echo header("refresh: 5; url=../index.php?act=exit");
        if(isset($_GET['act'])){
            $act = $_GET['act'];
            switch ($act) {
                case 'binhluan':
                    include "binhluan/list.php";
                    break;
                case 'baiviet':
                    include "baiviet/list.php";
                    break;
                default:
                    include "view/home.php";
                    break;
            }
        }else{
            include "view/home.php";
        }

        include "view/footer.php";
        
    }else{
        header("location: ../view/notpage.php");
    }
?>
