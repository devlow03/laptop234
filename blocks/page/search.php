<div class="web-name">
    <div><a href="index.php">
            <h3>Laptop 456</h3>
        </a></div>
</div>
<div class="search-bar">
    <form action="index.php?page=blocks/sanpham/sanpham_timkiem.php" method="post">
       
        <input type="text" name="search" placeholder="Nhập sản phẩm cần tìm..">
        <button type="submit" name="btn-search"><a><i class="fa-solid fa-magnifying-glass"></i></a></button>
    </form>

</div>
<div class="fold-laptop">

    <ul>
        <?php
       
      
     
       $sql = "select * from nhomsanpham where trangthai=4 ";
       if ($r = mysqli_query($conn, $sql)) {
           if (mysqli_num_rows($r) > 0) {
               while ($sp = mysqli_fetch_array($r)) {
                ?>
        <li> <a 
                href="index.php?page=blocks/sanpham/laptop_nhucau.php&idnhom=<?php echo $sp["manhom"] ?>"><?php echo $sp['tenNhom'] ?></a>
                <?php
            }
        }
    }
        ?>      
              
    </ul>

</div>

<div class="ico-gh"><a 
       "  href="index.php?page=blocks/dathang/giohang.php&&$_COOKIE['uid']"><i class="fa-solid fa-cart-shopping"></i>Giỏ hàng</a></div>


<?php


?>