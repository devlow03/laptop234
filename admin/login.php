<head>
    <link rel="stylesheet" href="css/login.css">
</head>
<?php 
require"../conn.php";
if(isset($_SESSION['user'])){
    header("Location:admin.php");
}

?>
<body  background="images/background-login.jpg">
    <?php
       
      ?>
    <main>
        <div class="container">
            <div class="title"><h2></h2></div>
            <div class="login-form">
               
                <form action="" method="post">
                    <h1>Xin chào!</h1>
                    <div class="input-box">
                        <i></i>
                        <input type="text" name="user" placeholder="Nhập username">
                    </div>
                    <div class="input-box">
                        <i></i>
                        <input type="password" name="pass" placeholder="Nhập password">
                    </div>
                    <!-- Nhúng hàm xử lí login  -->
                    <p style="color:blue;font-size:0.8em;margin-bottom:5%"><?php  require "xulilogin.php"; ?></p>
                    <div class="btn-box">
                        <button type="submit" name="Login">
                            Đăng nhập
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>

</body>