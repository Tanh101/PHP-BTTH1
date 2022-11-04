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
    $link = mysqli_connect("localhost", "root", "") or die(mysqli_error($link));
    $db_selected = mysqli_select_db($link, "DULIEU");
    $rs = mysqli_query($link, "SELECT * FROM PHONGBAN");
    echo '<form action="xulycapnhat.php">';
    echo '<table border = "1" width = "100%">';
    echo '<caption>Du lieu bang phong ban</Caption>';
    echo '<TR>
        <TH>IDPB</TH>
        <TH>Ten phong ban</TH>
        <TH>Mo ta</TH>
        <TH>Cap nhat thong tin</TH>
        </TR>';
        while ($row = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
            echo '<TR>
            <TD>' . $row['IDPB'] . '</TD>' .
            '<TD>' . $row['Tenpb'] . '</TD>' .
            '<TD>' . $row['Mota'] . '</TD>' .
            '<TD><a href="form_capnhat.php?IDPB='.$row['IDPB'].'" style="display: flex;
            float: right;
            width: 60%;">Update</a></TD>' .
            '</TR>';
            
        }
        echo '</table>';
        echo '</form>';
        mysqli_free_result($rs);
        mysqli_close($link);
        ?>
</body>

</html>