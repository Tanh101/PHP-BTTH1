<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .find-staff {
            
        }
    </style>
</head>


<body>
    <form action="" method="POST">
        <div class="find-staff">

            <label for="cars">Chon loai tim kiem:</label>
            <select name="inforOption" id="cars">
                <option value="IDNV">IDNV</option>
                <option value="Hoten">Họ Tên</option>
                <option value="IDPB">IDPB</option>
                <option value="Diachi">Địa Chỉ</option>
            </select>
            <br><br>
            <label>Nhap thong tin: </label><br>
            <input type="text" class="find-staff" value="" name="staffInfor">
            <input type="submit" value="Find" />
        </div>
    </form>
    <?php
    $link = mysqli_connect("localhost", "root", "") or die(mysqli_error($link));
    $db_selected = mysqli_select_db($link, "DULIEU");
    if (!empty($_REQUEST['staffInfor']) && !empty($_REQUEST['staffInfor'])) {
        $selectOption = mysqli_real_escape_string($link, $_POST['inforOption']);
        $term = mysqli_real_escape_string($link, $_POST['staffInfor']);
        if (strcmp($selectOption, "Hoten") == 0) {
            $rs = mysqli_query($link, "SELECT * FROM NHANVIEN WHERE $selectOption LIKE '%$term'");
        } else if(strcmp($selectOption, "Diachi") == 0) {
            $rs = mysqli_query($link, "SELECT * FROM NHANVIEN WHERE $selectOption LIKE '%$term'");
        }
        else {

            if ($term == "") {
                $rs = mysqli_query($link, "SELECT * FROM NHANVIEN");
            } else {
                $rs = mysqli_query($link, "SELECT * FROM NHANVIEN WHERE $selectOption = '$term'");
            }
        }
        echo '<table border = "1" width = "100%">';
        echo '<caption>Du lieu bang nhan vien</Caption>';
        echo '<TR>
        <TH>IDNV</TH>
        <TH>Ho ten</TH>
        <TH>IDPB</TH>
        <TH>Dia chi</TH>
        </TR>';
        while ($row = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
            echo '<TR>
                    <TD>' . $row['IDNV'] . '</TD>' .
                '<TD>' . $row['Hoten'] . '</TD>' .
                '<TD>' . $row['IDPB'] . '</TD>' .
                '<TD>' . $row['Diachi'] . '</TD></TR>';
        }
        mysqli_free_result($rs);
        mysqli_close($link);
    }
    ?>
</body>

</html>