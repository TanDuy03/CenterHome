<?php 
    // session_start();
    
    if (isset($_SESSION['role']) && ($_SESSION['role']==1)) {
        $padmin = "trang_chu"; include "header.php";

?>

           <h1>Đang cập nhập</h1>
        </div>
    </div>

<?php 
}else{
    header("location: ../../view/notpage.php");
}
 ?>