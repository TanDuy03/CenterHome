<?php

    ob_start();
    session_start();
    include "../model/pdo.php";
    include "../model/taikhoan.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang quản trị</title>
    <link rel="shortcut icon" href="../image/logo150.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="form__login">
        <div class="form__input">
            <h1>Administrator</h1>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" onsubmit="valiPass()">
                <div class="form-group">
                    <input type="text" class="form-control" id="username" placeholder="Tên đăng nhập" name="user">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password" placeholder="Mật khẩu" name="pass" onkeyup="valiPass()">
                    <p id="mess">Mật khẩu <span id="strent"></span></p>
                    <i class="fa-regular fa-eye" onclick="changePass()"></i>
                    <i class="fa-solid fa-eye-slash" onclick="changePass()"></i>
                </div>
                <div class="form-group">
                    <input type="submit" name="dangnhap" class="form-control" id="btnLogin" value="Đăng nhập" onclick="validateForm()">
                </div>
                <?php 
                    if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                        function validate($data){
                            $data = trim($data);
                            $data = stripslashes($data);
                            $data = htmlspecialchars($data);
                            return $data;
                        }

                        $user = validate($_POST['user']);
                        $pass = validate($_POST['pass']);

                        if((empty($user))&&(empty($pass))){
                            echo("Bạn chưa nhập thông tin");
                            exit();
                        }elseif(empty($user)){
                            echo("Tên đăng nhập trống");
                            exit();
                        }elseif(empty($pass)){
                            echo("Mật khẩu trống");
                            exit();
                        }else{
                            $role = getuserinfo($user, $pass);
                            if($role === 1){
                                $check = checkUser($user, $pass);
                                if(($check[0]['user_name'] === $user)&&($check[0]['pass'] === $pass)){
                                    $_SESSION['user_name'] = $check[0]['user_name'];
                                    $_SESSION['pass'] = $check[0]['pass'];
                                    $_SESSION['id'] = $check[0]['id'];
                                    $_SESSION['role'] = $check[0]['role'];
                                    header("location: ../admin/index.php");
                                }else{
                                    echo("Login failed!");
                                }
                            }elseif($role === 2){
                                echo ("user");
                            }else{
                                echo ("Tên đăng nhập hoặc mật khẩu không đúng");
                            }
                        }
                  
                    }
                ?>
            </form>
            <div style="position:absolute; bottom:5px; left:33%" id="quen_pass">
                <a href="quen_mk.php">Quên mật khẩu?</a>
            </div>
        </div>
    </div>
    <script>
        let password = document.getElementById("password");
        let username = document.getElementById("username");
        let mess = document.getElementById("mess");
        let btnLogin = document.getElementById("btnLogin");
        let strent = document.getElementById("strent");
        function changePass(){
            password.type = password.type == 'text' ? 'password' : 'text';
        }
        // function validateForm(){
        //     if(password.value.length == ""){
        //         mess.style.display = 'block';
        //     }
        // }
        function valiPass(){
            if (password.value.length == "") {
                strent.style.color = 'red';
                strent.innerHTML = 'không được để trống';
            }else if(password.value.length < 5){
                mess.style.display = 'block';
                strent.style.color = 'orange';
                strent.innerHTML = 'yếu';
            }
            else{
                mess.style.display = 'none';
            }
        }
    </script>
    <!--  -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>