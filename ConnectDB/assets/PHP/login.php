<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>form11</title>
    <style>
        html {
            font-size: 62.5%;
            line-height: 1.2;
            background-color: aquamarine;
        }

        .container {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 2.4rem;
            text-align: center;
        }

        .input-field {
            margin-left: 80px;
            width: 200px;
            height: 24px;
            margin-top: 12px;
        }

        .container .btn-confirm {
            margin-left: 160px;
            margin-top: 20px;
            

        }

        p {
            margin-left: 140px;
        }

        .btn-submit {
            padding: 6px 20px;  
        }
    </style>

    <!-- <script lang="javascript">
        function validate(){
            var user = document.login.username.value;
            var pass = document.login.password.value;
            if(user.trim().length == 0 && pass.trim().length == 0){
                window.alert("không được để trống tên tài khoản và mật khẩu");
            }else if(pass.trim().length == 0) {
                window.alert("không được để trống mật khẩu");
            }else if(user.trim().length == 0){
                window.alert("không được để trống tên tài khoản");
            }
        }
        function reset(){

            document.login.username.value = "";
            document.login.password.value = "";
        }
    </script> -->

</head>

<body>
    
    <form class="container" action="xulylogin.php?status=<?php echo $_GET['status'];?>" method="POST">
        <p>Login</p>
        <div>
            <label class="">Username</label>
            <input class="input-field" type="text" name="username" value="" placeholder="username">
        </div>

        <div>
            <label class="">Password</label>
            <input class="input-field" type="password" name="password" value="" placeholder="password">
        </div>

        <div class="btn-confirm">
            <input class="btn-submit" type="submit" name="btnCheck" value="OK" onclick="validate()">
            <input class="btn-submit" type="submit" name="btnReset" value="Reset" onclick="reset()">
        </div>

    </form>
</body>

</html>