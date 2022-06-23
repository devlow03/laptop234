<?php
    
    

    if(isset($_POST['dathang'])){
        
            $uid=$_COOKIE['uid'];
            $hoten=$_POST['hoten'];
            $ngaysinh=$_POST['ngaysinh'];
            $diachi=$_POST['diachi'];
            $sodt=$_POST['sodt'];
            $gioitinh=$_POST['gioitinh'];
            $tongtien=$_POST['tongtien'];
            $iddon=rand(0,10000000);
    
            $donhang="insert into donhang(iddon,gioitinh,hoten,ngaysinh,diachi,sodt,tongtien,uid) values ('$iddon','$gioitinh','$hoten','$ngaysinh','$diachi','$sodt','$tongtien','$uid')";
            $conn->query($donhang);
            $sql="select * from giohang inner join sanpham on giohang.masp like sanpham.ma  where uid = $uid";
            $r=mysqli_query($conn,$sql);
            while($a=mysqli_fetch_array($r)){
                $masp=$a['masp'];
                $tensp=$a['ten'];
                $hinhanh=$a['hinhanh'];
                $soluong=$a['soluong'];
                $gia=$a['gia'];
                
                
                $chitietdon="insert into chitietdonhang(masp,tensp,hinhanh,soluong,gia,iddon,uid) values('$masp','$tensp','$hinhanh','$soluong','$gia','$iddon','$uid')";
                $conn->query($chitietdon);
                $xoagh= "delete from giohang where uid = '$uid'";
                $conn->query($xoagh);
             
            
            
            }
        }
        
      


    


?>
<div class="main-gh">


    <!-- <div class="banner-nhucau">Nhóm sản phẩm</div> -->

    <!-- <form action=""method="post"> -->
    <div class="sanpham-gh">
        <div class="title">
            
           <h3>Đơn hàng</h3>
        </div>

        <?php
           
        //   lấy tất cả sản phẩm của uid trong giỏ hàng
           $sql = "select * from chitietdonhang where uid='$uid'  ";
           //tương tự như những trang đã chú thích
           if ($result = mysqli_query($conn, $sql)) {
               if (mysqli_num_rows($result) > 0) {
                   while ($dh = mysqli_fetch_array($result)) {
                       
           ?>
        
            <div class="fold-giohang">
              
                <div class="hinhanh-gh"><img src="images/<?php echo $dh['hinhanh'] ?>"></div>
                <div class="ten-sp"><?php echo $dh['tensp'] ?></div></a>
                <div class="gia-sp"><?php echo number_format($dh['gia'],0,",",".") ?></a>₫ </div>

                <div class="soluong">
                 
                 số lượng:   <?php echo $dh['soluong'] ?>
                   

                </div>
               
            </div>

       
        
            <?php }
                  }
               
                }
            
            ?>
        <!-- <div class="xoa-tatca"><button type="submit" name='xoa-tatca'>Xoá tất cả</button></div>      -->
            <?php
             $sql = "select * from donhang where uid='$uid' ";
             if ($result = mysqli_query($conn, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                    ($dh = mysqli_fetch_array($result)) 
            
            ?>
            <form action="" method="post">
            <div class="frm-khachhang">
                <div class="thongtin-kh">
                    <h3>Thông tin khách hàng</h3>
                </div>
                <table border=0>
                    <tbody>
                        

                        <tr>
                            <td><input type="text" style="border:none"  readonly name="hoten" autocomplete="off" value="Khách hàng:<?php echo $dh['hoten'] ?>"></td>

                            <td><input type="date" style="border:none"  readonly name="ngaysinh" value="<?php echo $dh['ngaysinh'] ?>"></td>
                        </tr>

                        <tr>
                            <td><input type="text" style="border:none" readonly name="diachi" autocomplete="off" value="Địa chỉ:<?php echo $dh['diachi'] ?>"></td>
                            <td><input type="text" style="border:none"  readonly name="sodt" autocomplete="off" value="Số điện thoại:<?php echo $dh['sodt'] ?>"></td>
                        </tr>
                        <tr>
                           
                             
                               
                                <p>Tổng tiền: <?php echo number_format($dh['tongtien'],0,",",".")  ?>₫ </p>
                               
                            </td>
                        </tr>
                        <tr>
                            <!-- <td>
                                <div class="btn-dathang"><a href=""><button type="button" name="xoadonhang">Hủy đơn hàng</button></a></div>
                            </td> -->
                        </tr>
                    </tbody>
                </table>
            </div>
            </form>
            <?php
                
            }
            else{
                echo'Không tồn tại đơn hàng';
            }
               
        }
            ?>
            <!-- </form> -->
    </div>
</div>
<?php
// if(isset($_POST['xoadonhang']))
// $uid=$_COOKIE['uid'];
// $sql="delete chitietdonhang,donhang from chitietdonhang inner join donhang on chitietdonhang.iddon like donhang.iddon where donhang.uid='$uid' and chitietdonhang.uid='$uid'";
// if($conn->query($sql)==true){
    
  
// }
?>