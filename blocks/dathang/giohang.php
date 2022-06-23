<?php
    if (isset($_POST['addcart'])) {
        $masp = $_POST['masp'];
        $soluong =$_POST['soluong'];
        $uid=$_COOKIE['uid'];
        
        $sql = "select * from giohang inner join sanpham on giohang.masp like sanpham.ma where giohang.uid = '$uid' and giohang.masp='$masp'" ;
                
        if ($result = mysqli_query($conn, $sql)) {
            //nếu sản phẩm đã tồn tại trong giỏ hàng thì tăng số lượng sản phẩm thêm một
            if (mysqli_num_rows($result) > 0) {
                while ($gh = mysqli_fetch_array($result)) {
                    $r=$gh['soluong']+1;
                    $sql="update giohang set soluong = $r where giohang.uid = '$uid' and masp='$masp'";
                    $conn->query($sql);   
                }
                // còn không có thì thêm sản phẩm vào giỏ hàng
            }
            else{
                $sql = "insert into giohang (uid,masp,soluong) values('$uid','$masp','$soluong')";
                $conn->query($sql);
                
            }
        }  
    }

?>

<div class="main-gh">


    <!-- <div class="banner-nhucau">Nhóm sản phẩm</div> -->

    <!-- <form action=""method="post"> -->
    <div class="sanpham-gh">
        <div class="title">
            <h3>Giỏ hàng</h3>
        </div>

        <?php
           
        //   lấy tất cả sản phẩm của uid trong giỏ hàng
           $sql = "select * from giohang inner join sanpham on giohang.masp like sanpham.ma where giohang.uid = '$uid'";
           //tương tự như những trang đã chú thích
           if ($result = mysqli_query($conn, $sql)) {
               if (mysqli_num_rows($result) > 0) {
                   while ($gh = mysqli_fetch_array($result)) {
                       
           ?>
        <form action="" method="post">
            <div class="fold-giohang">
                <input type="hidden" name="masp" value="<?php echo $gh['masp'] ?>">
                <input type="hidden" name="ten" value="<?php echo $gh['ten'] ?>">
                <input type="hidden" name="gia" value="<?php echo $gh['gia'] ?>">

                <input type="hidden" name="hinhanh" value="<?php echo $gh['hinhanh'] ?>">
                <input type="hidden" name="idcart" value="<?php echo $gh['idcart'] ?>">
                <input type="hidden" name="uid" value="<?php echo $gh['uid'] ?>">
                <div class="hinhanh-gh"><img src="images/<?php echo $gh["hinhanh"] ?>"></div>
                <div class="ten-sp"><?php echo $gh['ten'] ?></div></a>
                <div class="gia-sp"><?php echo number_format($gh['gia'],0,",",".") ?></a>₫ </div>

                <div class="soluong">
                    <button name="tru"> <a href=""><i class="fa-solid fa-minus"></i></a></button>
                    <?php echo $gh['soluong'] ?>
                    <button name="cong"><a href=""></a><i class="fa-solid fa-plus"></i></a></button>
                    <input type="hidden" style="margin-left:2%" name="soluong" value="<?php echo $gh['soluong'] ?>">

                </div>
                <div class="xoa-gh"><button name='xoa-sp'>Xoá</button></div>
            </div>

        </form>
        <?php   }?>

        <!-- <div class="xoa-tatca"><button type="submit" name='xoa-tatca'>Xoá tất cả</button></div>      -->
        <form action="index.php?page=blocks/dathang/donhang.php" method="post">
            <div class="frm-khachhang">
                <div class="thongtin-kh">
                    <h3>Thông tin khách hàng</h3>
                </div>
                <table border=0>
                    <tbody>
                        <tr>
                            <td><input type="radio" name="gioitinh" value="1">Anh</td>
                            <td><input type="radio" name="gioitinh" value="2">Chị</td>

                        </tr>

                        <tr>
                            <td><input type="text" name="hoten" autocomplete="off" placeholder="Nhập họ và tên"></td>

                            <td><input type="date" name="ngaysinh"></td>
                        </tr>

                        <tr>
                            <td><input type="text" name="diachi" autocomplete="off" placeholder="Nhập đia chỉ"></td>
                            <td><input type="text" name="sodt" autocomplete="off" placeholder="Nhập số điện thoại"></td>
                        </tr>
                        <tr>
                            <td><?php 
                                    $sql="select sum(gia * soluong)as tongtien from giohang inner join sanpham on giohang.masp like sanpham.ma where uid ='$uid'";
                                    $result=mysqli_query($conn,$sql);
                                    if ($result = mysqli_query($conn, $sql)) {
                                        if (mysqli_num_rows($result) > 0) {
                                            while ($r = mysqli_fetch_array($result)) {
                                    
                                 ?>
                             
                                <input type="hidden" name="tongtien" value="<?php echo $r['tongtien'] ?>">
                                <p>Tổng tiền: <?php echo number_format($r['tongtien'],0,",",".")  ?>₫ </p>
                                <?php 
                                            }
                                        }
                                    }

                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="btn-dathang"><a href=""><button type="submit" name="dathang">Đặt
                                            hàng</button></a></div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <?php
                }
                else{
                    echo "Không có sản phẩm nào trong giỏ hàng";
                }
            }
            ?>
            <!-- </form> -->
    </div>
    <?php 

    $sql="select * from giohang inner join sanpham on giohang.masp like sanpham.ma where uid = $uid";
    $result=mysqli_query($conn,$sql);
    if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            while ($r = mysqli_fetch_array($result)) {
    ?>

    <input type="hidden" name="masp" value="<?php echo $r['ma'] ?>">
    <input type="hidden" name="ten" value="<?php echo $r['ten'] ?>">
    <input type="hidden" name="gia" value="<?php echo $r['gia'] ?>">
    <input type="hidden" name="hinhanh" value="<?php echo $r['hinhanh'] ?>">

    <?php 
            }
        }
    }


    ?>


    





    </form>
</div>

    <?php
// tăng,giảm số lượng sản phẩm có trong giỏ hàng
//nếu tồn tại $_POST['cong']) hoặc $_POST['tru'] được truyền từ form có button có name là cong hoặc trừ 
//thực hiện lấy tất cả dữ liệu trong giohang với điều kiện uid = '$uid' và idcart='$idcart'
//sau đó thực hiện câu lệnh update để cập nhật lại số lượng
if (isset($_POST['cong'])) {
    $masp = $_POST['masp'];
    $soluong =$_POST['soluong'];
    $uid=$_COOKIE['uid'];
    $idcart=$_POST['idcart'];
    $sql = "select * from giohang  where uid = '$uid' and idcart='$idcart'" ;
            
    if ($result = mysqli_query($conn, $sql)) {
        
        if (mysqli_num_rows($result) > 0) {
            while ($gh = mysqli_fetch_array($result)) {

                $t=$gh['soluong']+1;
                $sql="update giohang set soluong = $t where giohang.uid = '$uid' and idcart='$idcart'";
                $conn->query($sql); //thực thi truy vấn
                //auto refesh
                echo '<meta http-equiv="refresh" content="0">';
               
            }  
        }
      
    }  
}

if (isset($_POST['tru'])) {
    $masp = $_POST['masp'];
    $soluong =$_POST['soluong'];
    $uid=$_COOKIE['uid'];
    $idcart=$_POST['idcart'];
    $sql = "select * from giohang  where uid = '$uid' and idcart='$idcart'" ;
            
    if ($result = mysqli_query($conn, $sql)) {
        
        if (mysqli_num_rows($result) > 0) {
            while ($gh = mysqli_fetch_array($result)) {
                $g=$gh['soluong']-1;
                $sql="update giohang set soluong = $g where giohang.uid = '$uid' and idcart='$idcart'";
                $conn->query($sql);
                echo '<meta http-equiv="refresh" content="0">';
                $xoa="delete from giohang where idcart = '$idcart' and uid='$uid' and soluong=0";
                mysqli_query($conn,$xoa);
                //auto refesh
                echo '<meta http-equiv="refresh" content="0">';
               
            }   
        }
    
    }   
}

?>


    <!-- xóa sản phẩm trong  giỏ hàng -->
<?php
//Nếu tồn tại $_POST['xoa-sp'] đc truyền từ form có button với name là xoa-sp
//thì gán $idcart = $_POST['idcart'] và  $uid = $_COOKIE['uid']
//sau đó thực hiện câu truy vấn xóa sản phẩm ở giỏ hàng điều kiện idcart = '$idcart' và uid='$uid'
   
if(isset($_POST['xoa-sp'])){
    $idcart = $_POST['idcart'];
    $uid = $_COOKIE['uid'];
    $xoa="delete from giohang where idcart = '$idcart' and uid='$uid'";
    //thực thi truy vấn
    mysqli_query($conn,$xoa);
    //auto refesh 
    echo '<meta http-equiv="refresh" content="0">';

}
?>

 
