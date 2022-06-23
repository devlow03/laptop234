<div class="hienthi-nhom">
    <div class="tieude-admin">
        <h1>DANH SÁCH NHÓM SẢN PHẨM</h1>
    </div>
    <div class="themnhom"><a href="admin.php?page=block/themnhom.php"><button>Thêm nhóm</button></a></div>

    <form action="" method="post">
        <table border=1>
            <thead>
                <tr>
                    <th>Mã</th>
                    <th>Tên nhóm</th>
                    <th style="width:10%">Trạng thái</th>


                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    
                   $sql="select * from nhomsanpham";    
                   if($result=mysqli_query($conn,$sql))
                   {
                       if(mysqli_num_rows($result)>0){
                           while($nhom=mysqli_fetch_array($result)){
                               ?>
                <tr>
                    <td style="width:5%;text-align:center"name="$id"><?php echo $nhom['manhom'] ?></td>
                    <td style="text-align:center"><?php echo $nhom['tenNhom'] ?></td>
                    <td style="text-align:center"><?php echo $nhom['trangthai'] ?></td>

                    <td style="width:14%">
                      
                        <a style="text-decoration:none;color:blue" href="admin.php?page=block/capnhatnhom.php&id=<?php echo $nhom['manhom'] ?>">Chỉnh sửa</a>
                       
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