<?php 

    function getuserinfo($user, $pass){
        $conn = pdo_get_connection();
        $stmt = $conn->prepare("SELECT * FROM center_user WHERE user_name ='".$user."' AND pass ='".$pass."'");
        $stmt->execute();
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt ->fetchAll();
        if (count($kq) > 0)
            return $kq[0]['role'];
        else
            return 0;
    }
    function checkUser($user, $pass){
        $conn = pdo_get_connection();
        $stmt = $conn->prepare("SELECT * FROM center_user WHERE user_name ='".$user."' AND pass ='".$pass."'");
        $stmt->execute();
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt ->fetchAll();
        return $kq;
    }
    
    function checkOnline($tk_id){
        $conn = pdo_get_connection();
        $stmt = $conn->prepare("SELECT * FROM user_online WHERE tk_id = '".$tk_id."' ");
        $stmt->execute();
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $tk = $stmt ->fetchAll();
        return $tk;
    }

?>