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
    $rs = mysqli_query($link, "SELECT * FROM NHANVIEN");
    echo '<form action="">';
    echo '<table border = "1" width = "100%">';
    echo '<caption>Du lieu bang phong ban</Caption>';
    echo '<TR>
        <TH>IDNV</TH>
        <TH>Ho ten</TH>
        <TH>IDPB</TH>
        <TH>Dia chi</TH>
        <TH>Xoa nhan vien tin</TH>
        </TR>';
    while ($row = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
        echo '<TR>
            <TD>' . $row['IDNV'] . '</TD>' .
            '<TD>' . $row['Hoten'] . '</TD>' .
            '<TD>' . $row['IDPB'] . '</TD>' .
            '<TD>' . $row['Diachi'] . '</TD>' .
            '<TD><a href="xulyxoaAll.php?IDNV='. $row['IDNV'].'" style="display: flex;
            float: right;
            width: 60%;">Delete</a></TD>'.
            '</TR>';
    }
    echo '</table>';
    echo '</form>';
    mysqli_free_result($rs);
    mysqli_close($link);
    ?>
</body>
<a href="" style=""></a>

</html>