<div class="hien-sanpham">
<div class="tieude-admin"><h1>DANH SÁCH ĐƠN HÀNG</h1></div>

    <form action="" method="post">
    
        <table border=1>
            <thead>
                <tr>
                    <th>id người dùng</th>
                    <th>Họ tên</th>
                    <th>Giới tính</th>
                    <th>Ngày sinh</th>
                    <th>Địa chỉ </th>

                    <th>Số điện thoại</th>
                    <th>Tổng tiền</th>
                   

                 
                    
                </tr>
            </thead>
            <tbody>
                <?php

                
                $sql = "select * from donhang ";
                if ($r = mysqli_query($conn, $sql)) {
                    if (mysqli_num_rows($r) > 0) {
                        while ($sanp = mysqli_fetch_array($r)) {
                ?>
                            <tr>
                                <td style="width:10%";><?php echo $sanp['uid'] ?></td>
                                 
                                <td style="width:10%;text-align:center"><?php echo $sanp['hoten'] ?></td>
                                <td style="width:10%;text-align:center"><?php echo $sanp['gioitinh'] ?></td>
                                <td style="width:10%;text-align:center"><?php echo $sanp['ngaysinh'] ?></td>
                                <td style="width:10%;text-align:center"><?php echo $sanp['diachi'] ?></td>
                                <td style="width:10%;text-align:center"><?php echo $sanp['sodt'] ?></td>
                                
                             
                                <td style="color: blue;width:10% ;"><?php echo number_format($sanp['tongtien'],0,",",".") ?>₫</td>

                              
                             
                               
                              
                                </td>
                                

                            </tr>

                            <tr>

                            </tr>
                <?php
                        }
                

                    }
                }
              

                ?>

            </tbody>

        </table>
    </form>
</div>