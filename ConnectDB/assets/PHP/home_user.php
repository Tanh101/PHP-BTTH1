<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T2</title>
    <style>
        div {
            text-align: center;
            font-size: 22px;
            position: fixed;
            margin-top: 100px;
        }

        a {
            line-height: 2.4;
            text-decoration: none;
            color: red;
        }

        a:hover {
            color: cornflowerblue;
        }
    </style>
</head>

<body>

    <form action="login.php" method="POST">
        <div>
            <a href="../PHP/f3.php" target="frame3">Trang chủ</a><br>
            <a href="../PHP/xemthongtinNV.php" target="frame3">Xem nhan vien</a><br>
            <a href="../PHP/xemthongtinPB.php" target="frame3">Xem phong ban</a><br>
            <a href="../PHP/timkiemNV.php" target="frame3">Tìm kiếm</a><br>
            <?php
            echo '<a href="../PHP//login.php?status=update" target="frame3">Cập nhật</a><br>';
            echo '<a href="../PHP//login.php?status=delete" target="frame3">Xoa nhan vien</a><br>';
            echo '<a href="../PHP//login.php?status=delete_all" target="frame3">Xoa tat ca</a><br>';
            ?>
        </div>
    </form>
</body>

</html>