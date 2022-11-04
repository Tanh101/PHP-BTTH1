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
    $myID = $_REQUEST['IDPB'];
    $link = mysqli_connect("localhost", "root", "") or die(mysqli_error($link));
    $db_selected = mysqli_select_db($link, "DULIEU");
    $rs = mysqli_query($link, "SELECT * FROM PHONGBAN WHERE IDPB = '$myID'");
    $row=mysqli_fetch_array($rs, MYSQLI_BOTH);
    ?>
    <form action="xulycapnhat.php?IDPB=<?php echo $row['IDPB']; ?> " method="POST">
    <table width = '100'% border="0">
        <tr>
            <td>Ma phong ban</td>
            <td>
                <input type="text" size="20" name="IDPB" readonly value="<?php echo $row['IDPB'];?>">
            </td>

        </tr>
        <tr>
            <td>Ten phong ban</td>
            <td>
                <input type="text" size="20" name="Tenpb" value="<?php echo $row['Tenpb'];?>">
            </td>

        </tr>
        <tr>
            <td>Mo ta</td>
            <td>
                <input type="text" size="20" name="Mota" value="<?php echo $row['Mota'];?>">
            </td>

        </tr>
        <tr align="center">
            <td colspan="2">
                <input type="submit" value="OK">
                <input type="reset" value="reset">
            </td>

        </tr>

    </table>
    </form>

</body>

</html>