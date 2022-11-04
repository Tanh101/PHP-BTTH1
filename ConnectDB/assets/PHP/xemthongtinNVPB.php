<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/app.css">
    <script>
    
    </script>
</head>

<body>
    <table border="1" width="100%">
        <caption>Du lieu bang nhan vien</Caption>
        <TR>
            <TH>IDNV</TH>
            <TH>Ho ten</TH>
            <TH>IDPB</TH>
            <TH>Dia chi</TH>
        </TR>

        <?php
        $mapb = $_REQUEST['IDPB'];
        $link = mysqli_connect("localhost", "root", "") or die(mysqli_error($link));
        $db_selected = mysqli_select_db($link, "DULIEU");
        if ($mapb == "") {
            $rs = mysqli_query($link, "SELECT * FROM NHANVIEN");
        } else {
            $rs = mysqli_query($link, "SELECT * FROM NHANVIEN WHERE IDPB = '$mapb'");
        }
        while ($row = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
            echo '<TR>
                    <TD>' . $row['IDNV'] . '</TD>' .
                '<TD>' . $row['Hoten'] . '</TD>' .
                '<TD>' . $row['IDPB'] . '</TD>' .
                '<TD>' . $row['Diachi'] . '</TD></TR>';
        }
        mysqli_free_result($rs);
        mysqli_close($link);
        ?>
    </table>
    <div class="">
        <a id="btn-back" href="./xemthongtinPB.php">BACK</a>
    </div>

</body>

</html>