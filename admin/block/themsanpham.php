<?php
    

    if (isset($_POST['them'])) {
        $tensp=$_POST['tensp'];
       
        $chitiet=$_POST['chitiet'];
        $tennhom=$_POST['tennhom'];
        $tenhieu=$_POST['tenhieu'];
        $noibat=$_POST['noibat'];
        $chitiet=$_POST['chitiet'];
        $thongtin=$_POST['thongtin'];

    }
    if(isset($_FILES['anh'])){
        $file=$_FILES['anh'];
        $file_name=$file['name'];
        move_uploaded_file($file['tmp_name'],'../images/' .$file_name);
    }

    if(isset($_POST['gia'])){
        $gia=$_POST['gia'];
    }


       
        $sql="insert into sanpham(ten,gia,hinhanh,chitiet,thongtin,manhom,idhieu,idnoibat) 
        values('$tensp','$gia','$file_name','$chitiet','$thongtin','$tennhom','$tenhieu','$noibat')";
        
        if($conn->query($sql)==true){
            echo 'Thêm sản phẩm thành công';
        }
       
       
 
        
           
            
       
       
        
            
        
      
    
   
?>

<div class="them-sanpham">
        <div class="txt-them"><h1>THÊM SẢN PHẨM</h1></div>
        <form   method="post" enctype="multipart/form-data">
            <table >
                <tr>
                    <td><label for="ten" >Tên sản phẩm:</label></td>
                    <td><label style="margin-left:35%" for="hinhanh">Hình ảnh:</label></td>
                </tr>

                <tr>
                    <td><input type="text" name="tensp" ></td>
                    <td><input type="file"  name="anh"></td>
                </tr>

                <tr>
                   
                    <td><label for="gia">Giá:</label></td>
                    <!-- <td><label for="danhsach-sp">Danh sách nhóm</label></td> -->
                    
                </tr>

                <tr>
                  
                   
                    <td><input type="text" name="gia" ></td>
                    <td><select style="margin-left:35%" name="tennhom" id="">
                        <option >Chọn nhóm sản phẩm</option>
                    <?php $conn=mysqli_connect("localhost","root","","laptop");
                        mysqli_query($conn,"set names utf8");
                      
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

                <td><select name="tenhieu" id="">
                    <option >Chọn thương hiệu</option>
                <?php $conn=mysqli_connect("localhost","root","","laptop");
                    mysqli_query($conn,"set names utf8");
                
                    $sql="select * from thuonghieu";
                    $query=mysqli_query($conn,$sql); 
                    while($row=mysqli_fetch_array($query))
                    {
                    ?>
                        <option value="<?php echo $row['idhieu'] ?>"><?php echo $row['tenhieu'];?> </option>
                    <?php
                    }

    
?>
    
   


</select></td>
                </tr>

                <tr>
                    <td><input type="radio" name="noibat" id="" value="1">Nổi bật</td>
                    <td><input type="radio" name="noibat" id="" value="0">Không</td>
                </tr>

                
                <tr>
                    <td ><label  for ="chitiet"></label>Chi tiết sản phẩm:</label></td>
                </tr>

                <tr>
                    <td><textarea name="chitiet" cols="30" rows="10"></textarea></td>
                </tr>

                <tr>
                    <td ><label  for ="chitiet"></label>Thông tin sản phẩm:</label></td>
                </tr>

                <tr>
                    <td><textarea name="thongtin" cols="30" rows="10"></textarea></td>
                </tr>
                
               
                    
                
            </table>
            <div class="btn-themsp"><button type="submit" name="them">Thêm</button></div>
            
        </form>
      

       
    


</div>

