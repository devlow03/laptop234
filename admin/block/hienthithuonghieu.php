<div class="hienthi-nhom">
    <div class="tieude-admin">
        <h1 style="margin-bottom:3%">DANH SÁCH THƯƠNG HIỆU</h1>
    </div>
    <!-- <div class="themnhom"><a href="admin.php?page=block/themnhom.php"><button>Thêm nhóm</button></a></div> -->

    <form action="" method="post">
        <table border=1>
            <thead>
                <tr>
                    <th>Mã</th>
                    <th>Tên thương hiệu</th>
                    <th style="width:10%">Hiển thị</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php
                   
                   $sql="select * from thuonghieu";    
                   if($result=mysqli_query($conn,$sql))
                   {
                       if(mysqli_num_rows($result)>0){
                           while($nhom=mysqli_fetch_array($result)){
                               ?>
                <tr>
                    <td name="$id"><?php echo $nhom['idhieu'] ?></td>
                    <td style="text-align:center"><?php echo $nhom['tenhieu'] ?></td>
                    <td style="text-align:center"><?php echo $nhom['hienthi'] ?></td>
                    

                    <td style="text-align:center">
                      
                        <a style="text-decoration:none;color:blue" href="admin.php?page=block/capnhathieu.php&id=<?php echo $nhom['idhieu'] ?>">Chỉnh sửa</a>
                      
                    </td>
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