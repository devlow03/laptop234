<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/laptop.css">
    <link rel="stylesheet" href="css/laptop_nhucau.css">
    <link rel="stylesheet" href="css/chitietlaptop.css">
    <link rel="stylesheet" href="css/giohang.css">
    <link rel="stylesheet" href="css/donhang.css">
    <script src="https://kit.fontawesome.com/5fa66840aa.js"></script>

    <title>Laptop New</title>
</head>

<body>
    <?php
    // nhúng file kết nối cơ sở dữ liệu
    require "conn.php";
    //tạo biến uid bằng cách sử dụng biến cookies của php
    $uid=$_COOKIE['uid'];
    //nếu ui bằng null thì cho biến uid random
    if($_COOKIE['uid'] == null){
        $uid=rand(0,10000000);
    }
    // tạo cookies với php
    setcookie('uid',$uid, time() + (86400 * 30), "/");
   


    ?>
    <div class="search">
        <?php
        // nhúng trang search vào index
        require "blocks/page/search.php"
        ?>

    </div>

    <div class="menu">
        <?php
        //nhúng trang menu vào index
        require "blocks/page/menu.php"
        ?>

    </div>

    <div class="main">

    <?php
   
     
    
    if (isset($_GET["page"])){
        require $_GET["page"];
    }
    
    
    // nếu không tồn tại thì chuyển về trang laptop.php
    else{
        require "blocks/sanpham/laptop.php";
    }
        
     ?>

    </div>
</body>

</html>