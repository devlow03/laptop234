<?php
    

    if (isset($_GET['idsp'])) {
        $id=$_GET['idsp'];
       }
       if(isset($_POST['capnhat-sp'])){
        $tensp=$_POST['tensp'];
       $chitiet=$_POST['chitiet'];
       $tennhom=$_POST['tennhom'];
       $tenhieu=$_POST['tenhieu'];
       $noibat=$_POST['noibat'];
       $tinhtrang=$_POST['tinhtrang'];
       $chitiet=$_POST['chitiet'];
       $thongtin=$_POST['thongtin'];
       $gia=$_POST['gia'];
       $file=$_FILES['anh'];
       $file_name=$file['name'];
       move_uploaded_file($file['tmp_name'],'../images/' .$file_name);
       $sql="update sanpham set ten='$tensp',gia='$gia',hinhanh='$file_name',chitiet='$chitiet',thongtin='$thongtin',manhom='$tennhom',idhieu='$tenhieu',idnoibat='$noibat',tinhtrang='$tinhtrang'
       where ma = '$id'";
       
       if($conn->query($sql)==true){
           echo 'Cập nhật sản phẩm thành công';
           echo '<meta http-equiv="refresh" content="10">';
           
       }
       
    }  
   
?>

<div class="them-sanpham">
        <div class="txt-them"><h1>CẬP NHẬT SẢN PHẨM</h1></div>
        <?php 

         
            $sql="select * from sanpham where ma ='$id' ";    
            if($result=mysqli_query($conn,$sql))
            {
            if(mysqli_num_rows($result)>0){
                $sanpham=mysqli_fetch_array($result)
           

        ?>
        <form   method="post" enctype="multipart/form-data">
            <table >
                <tr>
                    <td><label for="ten" >Tên sản phẩm:<?php ?></label></td>
                    <td><label style="margin-left:35%" for="hinhanh">Hình ảnh:</label></td>
                </tr>

                <tr>
                    <td><input type="text" name="tensp" value="<?php echo $sanpham['ten'] ?>"></td>
                    <td><input type="file"  name="anh" value="<?php echo $sanpham['hinhanh'] ?>"></td>
                </tr>

                <tr>
                   
                    <td><label for="gia">Giá</label></td>
                    <!-- <td><label for="danhsach-sp">Danh sách nhóm</label></td> -->
                    
                </tr>

                <tr>
                    <td><input type="text" name="gia" value="<?php echo $sanpham['gia'] ?>"></td>
                    <td><select style="margin-left:35%" name="tennhom" >
                        <option >Chọn nhóm sản phẩm</option>
                         <?php 
                        $sql="select * from nhomsanpham";
                        $query=mysqli_query($conn,$sql); 
                        while($row=mysqli_fetch_array($query))
                        {
                        ?>
                            <option value="<?php echo $row['manhom'] ?>"><?php echo $row['tenNhom'];?> </option>
                        <?php
                        }

                        
                    ?>
                </tr>

                <tr>
                    </select></td>

                    <td ><select  name="tenhieu" id="" value>
                        <option  >Chọn thương hiệu</option>
                        <?php 
                    
                        $sql="select * from thuonghieu ";
                        $query=mysqli_query($conn,$sql); 
                        while($row=mysqli_fetch_array($query))
                        {
                        ?>
                            <option value="<?php echo $row['idhieu'] ?>"><?php echo $row['tenhieu'];?> </option>
                        <?php
                        }

        
    ?>
                    </select></td>
                <tr>
                    
                </tr>
                </tr>

                <tr>
                    <td><input type="radio" name="noibat" id="" value="1">Nổi bật</td>
                    <td><input type="radio" name="noibat" id="" value="0">Không</td>
                </tr>
                <tr>
                <td><label for="">Tình trạng</label></td>
                </tr>
                <tr>
                
                    <td><input type="radio" name="tinhtrang" id="" value="2">Ẩn</td>
                    <td><input type="radio" name="tinhtrang" id="" value="3">Hiện</td>
                </tr>

                
                <tr>
                    <td ><label  for ="chitiet"></label>Chi tiết sản phẩm:</label></td>
                </tr>

                <tr>
                    <td><textarea name="chitiet" cols="30" rows="10"><?php echo $sanpham['chitiet'] ?></textarea></td>
                </tr>

                <tr>
                    <td ><label  for ="chitiet"></label>Thông tin sản phẩm:</label></td>
                </tr>

                <tr>
                    <td><textarea name="thongtin" cols="30" rows="10"><?php echo $sanpham['thongtin'] ?></textarea></td>
                </tr>
                
               
                    
                
            </table>
            <div class="btn-themsp"><button type="submit" name="capnhat-sp">Cập nhật</button></div>
            
        </form>
        <?php 
            }
        }

        ?>
</div>
