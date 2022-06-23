
<!DOCTYPE html>
<html lang="en">
<?php
    require"../conn.php";
     //tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
    if (!isset($_SESSION['user'])) {
        header('Location: login.php');
    }
    

?>



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/themnhom.css">
    <link rel="stylesheet" href="css/themsanpham.css">
    <link rel="stylesheet" href="css/captaikhoan.css">
    <link rel="stylesheet" href="css/hienthisanpham.css">
    <link rel="stylesheet" href="css/hienthinhom.css">

    <title>Document</title>
</head>

<body>
    
    <div class="admin">
        <div class="title-admin"><h1>QUẢN LÍ BÁN HÀNG</h1></div>

    

     
        <div class="menu">
            <ul>
               
                

                  

                <li><a href="../../laptopnew/index.php">Trang bán hàng</a></li>
                <li><a href="admin.php?page=block/hienthisanpham.php">Danh sách sản phẩm</a></li>
                <li><a href="admin.php?page=block/hienthinhom.php">Danh sách nhóm</a></li>
                <li><a href="admin.php?page=block/hienthithuonghieu.php">Danh sách thương hiệu</a></li>
                <li><a href="admin.php?page=block/danhsachdonhang.php">Danh sách đơn hàng</a></li>

                
                <?php
                    // if($user['quyen'] == 1){
                    //     echo '<li class="tk"><a href="admin.php?page=captaikhoan.php&id=1">cấp tài khoản</a></li>';
                        
                       
                        
                        
                    // }
                ?>

                <li style="padding-left:10em"><a>Hello, admin</a>
                </li>

                <li style="padding-left:1em"><a style="color: red;" href="logout.php">Thoát</a></li>
            </ul>
        </div>

    </div>


    <div class="admin-main">
        <?php
        if (isset($_GET["page"])){
            require $_GET["page"];
        }
        else{
            require "block/hienthisanpham.php";
        }
        
        
            
        
        ?>

    </div>

    </div>









</body>

</html>