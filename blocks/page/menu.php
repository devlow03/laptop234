
<div class="brand-name">
    <ul>
    <?php
        $sql="select * from thuonghieu where hienthi=4";
        if ($r = mysqli_query($conn, $sql)) {
            if (mysqli_num_rows($r) > 0) {
                while ($hieu = mysqli_fetch_array($r)) {
                 ?>
            <li><a href="index.php?page=blocks/sanpham/laptop_thuonghieu.php&idhieu=<?php echo$hieu['idhieu'] ?>"><?php echo $hieu['tenhieu'] ?></a> 
                
            </li>
            <?php
                }
            }
        }
    ?>
    <a style="margin-left:5%;margin-top:0.5%" href="index.php?page=blocks/dathang/donhang.php&$_COOKIE['uid']">Đơn hàng</a>    
    </ul>
    
</div>