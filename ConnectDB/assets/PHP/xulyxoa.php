<?php
    $idnv = $_REQUEST['IDNV'];
    $link = mysqli_connect("localhost", "root", "") or die(mysqli_error($link));
    $db_selected = mysqli_select_db($link, "DULIEU");
    $rs = mysqli_query($link, "DELETE FROM NHANVIEN WHERE IDNV = '$idnv'");
    header("Location: delete.php");
?>