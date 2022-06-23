<div class="hien-sanpham">
<div class="tieude-admin"><h1>DANH SÁCH SẢN PHẨM</h1></div>
<div class="themsp"><a href="admin.php?page=block/themsanpham.php"><button>Thêm sản phẩm</button></a></div>
    <form action="" method="post">
    
        <table border=1>
            <thead>
                <tr>
                    <th>Mã</th>
                    <th>Hình ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>

                    <th>Chi tiết</th>
                    <th>Tên nhóm</th>
                    <th style="width:10%">Thương hiệu</th>
                    <th style="width:10%">Nổi bật</th>
                    <th style="width:10%">Tình trạng</th>

                    <th>Chức năng</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php

                
                $sql = "select * from sanpham inner join nhomsanpham on sanpham.manhom like nhomsanpham.manhom inner join thuonghieu on sanpham.idhieu like thuonghieu.idhieu order by sanpham.gia";
                if ($r = mysqli_query($conn, $sql)) {
                    if (mysqli_num_rows($r) > 0) {
                        while ($sanp = mysqli_fetch_array($r)) {
                ?>
                            <tr>
                                <td><?php echo $sanp['ma'] ?></td>
                                   <td style="width:20"><img src="../images/<?php echo $sanp['hinhanh'] ?>" alt="" width="75px"></td>
                                <td><?php echo $sanp['ten'] ?></td>
                             
                                <td style="color: blue;width:10% ;"><?php echo number_format($sanp['gia'],0,",",".") ?>₫</td>

                                <td><?php echo $sanp['chitiet'] ?></td>
                                <td style="width:10%;text-align:center"><?php echo $sanp['tenNhom'] ?></td>
                                <td style="text-align:center"><?php echo $sanp['tenhieu'] ?></td>
                                <td style="text-align:center"><?php echo $sanp['idnoibat'] ?></td>
                                <td style="text-align:center"><?php echo $sanp['tinhtrang'] ?></td>
                                <td style="width:10%;text-align:center">
                             
                                <a href="admin.php?page=block/capnhatsanpham.php&idsp=<?php echo $sanp['ma'] ?>">Chỉnh sửa</a>
                              
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