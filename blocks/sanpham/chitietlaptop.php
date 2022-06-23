<?php

if (isset($_GET["idct"])) {
    $id = $_GET["idct"];
}
?>



<div class="main-chitiet">
    <?php       //không dùng vòng lặp while vì trang này chỉ cần lấy ra 1 sản phẩm
                $sql = "select * from sanpham where ma='$id'";
                if ($r = mysqli_query($conn, $sql)) {
                    if (mysqli_num_rows($r) > 0) {
                        $sp = mysqli_fetch_array($r)
                         ?>
       <form action="index.php?page=blocks/dathang/giohang.php&$_COOKIE['uid']" method="post">
        <div class="box-chitiet">
            <div class="khung-hinh">
             
                <div class="ten-sp"><?php echo $sp['ten'] ?></div>
                <img style="width: 100%;" src="images/<?php echo $sp['hinhanh'] ?>" alt="" srcset="">
                <textarea style="overflow:hidden;width:107%;height:20%;font-size:1.2em;border:none;resize:none"
                    readonly><?php echo $sp['thongtin'] ?>
         
         </textarea>
            </div>

            <div class="khung-gia">
                <div class="gia-laptop">
                    <div style="font-size: 1.5em;color:#000000">Giá:</div>
                    <div style="font-size:2.5em;margin-left:5%"> <?php echo number_format($sp['gia'],0,",",".") ?>₫</div>
                </div>
                <div class="khung-khuyen-mai">
                    <div class="khuyen-mai">Khuyến mãi trị giá 550.000₫ </br>Giá và khuyến mãi dự kiến áp dụng đến 23:00
                        30/04</div>
                    <textarea style="width:98%;height:83.5%;margin-top:3%;
                              border: solid 1px #dad8d8;
                              resize:none;
                              overflow: hidden;
                              background-color: rgb(0 0 0 / 6%);
                              /* background-color: #10aaf1; */
                              border-radius:4px;
                              padding-left:1%;
                              color:#000000;
                              padding-top:3%;
                              outline:none;
                            
                             " readonly>1.Balo Laptop (Hết quà hoàn tiền 100.000₫)
2.Giảm giá 10% cho Máy in, LCD khi mua kèm Laptop
         
         
3.Mua Office bản quyền giá chỉ từ 990,000đ Xem chi tiết
         
         
4.Nhập mã TGDD giảm 5% tối đa 400.000đ cho đơn hàng từ 500.000đ trở lên khi thanh toán qua Ví Moca trên ứng dụng Grab
                    </textarea>
                       <input type="hidden" name="masp" value="<?php echo $sp['ma'] ?>">
                <input type="hidden" name="tensp" value="<?php echo $sp['ten'] ?>">
                 <input type="hidden" name="hinhanh" value="<?php echo $sp['hinhanh'] ?>">
                 <input type="hidden" name="gia" value="<?php echo $sp['gia'] ?>">
                 Số lượng:<input  type="number" style="width:7%;text-align:center" id="soluong" name="soluong" min="1" max="100" value="1">
                    
                        <div class="nut-mua"><a href=""></a><button type="submit" name="addcart">THÊM VÀO GIỎ HÀNG</button></a></div>
                    </div>

                </div>


            </div>


        </div>
    </form>
    <?php               
                        }
                    
                  
       
                }

     ?>
</div>