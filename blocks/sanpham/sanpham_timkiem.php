<?php
if (isset($_POST['search'])) {
    $idtk = $_POST['search'];
}



?>
<h3></br>Sản phẩm cần tìm:</h3>
<div class="loai-laptop-nhucau">
    <div class="box-nhucau">
    
        <!-- <div class="banner-nhucau">Nhóm sản phẩm</div> -->

        <div class="sanpham-nhucau">
            <?php
       
       
       //thực thi câu truy vấn điều kiện là sanpham.ten phải bằng chuỗi '%$idtk%' trong $idtk là biến được truyền từ trang search.php bằng phương thức post thực hiện qua form
       $sql = "select * from sanpham inner join nhomsanpham on sanpham.manhom like nhomsanpham.manhom inner join thuonghieu on sanpham.idhieu like thuonghieu.idhieu where sanpham.ten like '%$idtk%'  or nhomsanpham.tenNhom like '%$idtk%' and sanpham.tinhtrang=3 and nhomsanpham.trangthai=4 and thuonghieu.hienthi =4 order by sanpham.gia ";
       if ($r = mysqli_query($conn, $sql)) {
           if (mysqli_num_rows($r) > 0) {
               while ($sptk = mysqli_fetch_array($r)) {
                ?>
            <div class="fold-nhucau">


                <div class="hinhanh-nhucau"><a href="index.php?page=blocks/sanpham/chitietlaptop.php&idct=<?php echo $sptk['ma']?>"><img src="images/<?php echo $sptk["hinhanh"] ?>"></a></div>
                <div class="ten"><a href="index.php?page=blocks/sanpham/chitietlaptop.php&idct=<?php echo $sptk['ma']?>"><?php echo $sptk['ten'] ?></div></a>
                <div class="gia"><a href="index.php?page=blocks/sanpham/chitietlaptop.php&idct=<?php echo $sptk['ma']?>"><?php echo number_format($sptk['gia'],0,",",".") ?>₫</a> </div>
                <textarea style="overflow: hidden;
                    width: 80%;
                    height: 50%;
                    border: none;
                    margin-right:10%;
                    resize: none;
                    background-color: transparent;
                    
                    " 
                    readonly  name="" id="" >
                    <?php echo $sptk['chitiet'] ?>
                </textarea>

        </div>
            <?php
              
                }
           }
           else
           {
               echo "Sản phẩm bạn tìm kiếm không tồn tại";
           }
       
       }
    
       
     
       
       ?>

    </div>
</div>