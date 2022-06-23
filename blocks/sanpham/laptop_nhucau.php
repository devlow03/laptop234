<?php
if (isset($_GET["idnhom"])) {
    $id = $_GET["idnhom"];
}


?>
<div class="loai-laptop-nhucau">
    <div class="box-nhucau">
        
        <!-- <div class="banner-nhucau">Nhóm sản phẩm</div> -->

        <div class="sanpham-nhucau">
            <?php
       
       
       $sql = "select * from nhomsanpham inner join sanpham on nhomsanpham.manhom like sanpham.manhom inner join thuonghieu on sanpham.idhieu like thuonghieu.idhieu where nhomsanpham.manhom = '$id' and sanpham.tinhtrang=3 and nhomsanpham.trangthai=4 and thuonghieu.hienthi=4 order by sanpham.gia";
       if ($r = mysqli_query($conn, $sql)) {
           if (mysqli_num_rows($r) > 0) {
               while ($spn = mysqli_fetch_array($r)) {
                ?>
            <div class="fold-nhucau">


                <div class="hinhanh-nhucau"><a href="index.php?page=blocks/sanpham/chitietlaptop.php&idct=<?php echo $spn['ma'] ?>"><img src="images/<?php echo $spn["hinhanh"] ?>"></div>
                <div class="ten"><a href="index.php?page=blocks/sanpham/chitietlaptop.php&idct=<?php echo $spn['ma']?>"><?php echo $spn['ten'] ?></div></a>
                <div class="gia"><a href="index.php?page=blocks/sanpham/chitietlaptop.php&idct=<?php echo $spn['ma']?>"><?php echo number_format($spn['gia'],0,",",".")?>₫ </a> </div>
                <textarea style="overflow: hidden;
                    width: 80%;
                    height: 50%;
                    border: none;
                    margin-right:10%;
                    resize: none;
                    background-color: transparent;
                    outline:none;
                    
                    " 
                    readonly  name="" id="" >
                    <?php echo $spn['chitiet'] ?>
                </textarea>

        </div>
            <?php
              
                }
           }
       }
       
       ?>

    </div>
</div>
