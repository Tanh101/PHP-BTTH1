<?php
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $status = $_REQUEST['status'];
    echo $username;
    echo $password;
    $link = mysqli_connect("localhost", "root", "") or die(mysqli_error($link));
    $db_selected = mysqli_select_db($link, "DULIEU");
    $rs = mysqli_query($link, "SELECT username FROM account WHERE username ='$username' AND password ='$password'");
    $row = mysqli_num_rows($rs);
    if($row > 0 AND strcmp($status, "update") == 0){
        header("Location:UpdateStaff.php");
    }else if($row > 0 AND strcmp($status, "delete") == 0){
        header("Location:delete.php");
    }else if($row > 0 AND strcmp($status,"deleteAll") ==0) {
        header("Loaction:deleteAll.php");
    }
