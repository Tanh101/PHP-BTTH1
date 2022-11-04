<?php
    $myID = $_REQUEST['IDPB'];
    $tenPb = $_REQUEST['Tenpb'];
    $mota = $_REQUEST['Mota'];
    $link = mysqli_connect("localhost", "root", "") or die(mysqli_error($link));
    $db_selected = mysqli_select_db($link, "DULIEU");
    
    $rs = mysqli_query($link, "UPDATE Phongban SET Tenpb = '$tenPb', Mota = '$mota' WHERE IDPB = '$myID';");
    header("Location:UpdateStaff.php");
?>
