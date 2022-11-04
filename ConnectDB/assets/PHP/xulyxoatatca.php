<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $myID = $_REQUEST['IDNV'];
    $link = mysqli_connect("localhost", "root", "") or die(mysqli_error($link));
    $db_selected = mysqli_select_db($link, "DULIEU");
    $rs = mysqli_query($link, "SELECT * FROM NHANVIEN");
    while($row = mysqli_fetch_array($rs, MYSQLI_BOTH)){
        $myID = $_REQUEST[$row['IDNV']];
        $rs1 = mysqli_query($link,"DELETE FROM NHANVIEN WHERE IDNV = '$myID'");
    }
    mysqli_free_result($rs);
    mysqli_close($link);
    header("Location: deleteAll.php");
    ?>
</body>

</html>