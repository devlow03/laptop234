<?php
if (isset($_GET["idhieu"])) {
    $id = $_GET["idhieu"];
}


?>
<div class="loai-laptop-nhucau">
    <div class="box-nhucau">
        
        <!-- <div class="banner-nhucau">Nhóm sản phẩm</div> -->

        <div class="sanpham-nhucau">
            <?php
       

       $sql = "select * from sanpham inner join thuonghieu on thuonghieu.idhieu like sanpham.idhieu inner join nhomsanpham on sanpham.manhom like nhomsanpham.manhom  where sanpham.idhieu = '$id' and sanpham.tinhtrang=3 and thuonghieu.hienthi=4  and nhomsanpham.trangthai=4 order by sanpham.gia";
       if ($r = mysqli_query($conn, $sql)) {
           if (mysqli_num_rows($r) > 0) {
               while ($sphieu = mysqli_fetch_array($r)) {
                ?>
            <div class="fold-nhucau">


                <div class="hinhanh-nhucau"><a href="index.php?page=blocks/sanphamlaptop.php&idsph=<?php echo $sphieu['ma'] ?>"><img src="images/<?php echo $sphieu["hinhanh"] ?>"></div>
                <div class="ten"><a href="index.php?page=blocks/sanpham/chitietlaptop.php&idct=<?php echo $sphieu['ma'] ?>"><?php echo $sphieu['ten'] ?></div></a>
                <div class="gia"><a href="index.php?page=blocks/sanpham/chitietlaptop.php&idct=<?php echo $sphieu['ma'] ?>"><?php echo number_format($sphieu['gia'],0,",",".") ?>₫ </a> </div>
                <textarea style="overflow: hidden;
                    width: 80%;
                    height: 45%;
                    border: none;
                    margin-right:10%;
                    resize:none;
                    background-color: transparent;
                    outline:none;
                    " 
                    readonly  name="" id="" >
                    <?php echo $sphieu['chitiet'] ?>
                </textarea>
        </div>
            <?php
              
                }
           }
       }
       
       ?>

    </div>
</div>
