<?php
    if(isset($_GET["id"])){
        $id=$_GET["id"];
    }
    if(isset($_POST['capnhat-hieu'])){
        $tenhieu =$_POST['tenhieu'];
        $hienthi =$_POST['hienthi'];
        
        $sql="update thuonghieu set tenhieu='$tenhieu',hienthi='$hienthi' where idhieu='$id'";
        if($conn->query($sql)==true){
            echo 'Cập nhật thương hiệu thành công';
            echo '<meta http-equiv="refresh" content="10">';
            
        }

    }

?>

<div class="them-nhom">
    <div class="them-nhom-text"><h1>CẬP NHẬT THƯƠNG HIỆU</h1></div>
    <?php 
     
       $sql="select * from thuonghieu where idhieu = '$id'";    
       if($result=mysqli_query($conn,$sql))
       {
           if(mysqli_num_rows($result)>0){
               $hieu=mysqli_fetch_array($result);
                  

    ?>
    <form method="post">
        <table>
            <tr>
                <td><label>Tên hiệu:</label></td>
                

            </tr>

            <tr>
                <td><input type="text" name="tenhieu" value="<?php echo $hieu['tenhieu'] ?>"></td>
                
            </tr>
            <tr>
                <td><label for="">Tình trạng</label></td>
                </tr>
                <tr>
                
                <td> <input style="margin-left:20%;border:solid 1px red" type="radio" name="hienthi" id="" value="4">Hiển thị
                    <input  type="radio"  name="hienthi" id="" value="5">Ẩn    
                </td>
                   
                    
                </tr>
        </table>

        <div class="them"><button type="submit" name="capnhat-hieu">Cập nhật</button></div>
        <?php
           }
       }
        ?>
    </form>

</div>