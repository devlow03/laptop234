<?php
    if(isset($_GET["id"])){
        $id=$_GET["id"];
    }
    if(isset($_POST['capnhat-nhom'])){
        $tenNhom =$_POST['tenNhom'];
        $trangthai =$_POST['trangthai'];
       
        $sql="update nhomsanpham set tenNhom='$tenNhom',trangthai='$trangthai' where manhom='$id'";
        if($conn->query($sql)==true){
            echo 'Cập nhật nhóm thành công';
            echo '<meta http-equiv="refresh" content="10">';

        }

    }

?>

<div class="them-nhom">
    <div class="them-nhom-text"><h1>CẬP NHẬT NHÓM SẢN PHẨM</h1></div>
    <?php 
        
       $sql="select * from nhomsanpham where manhom = '$id'";    
       if($result=mysqli_query($conn,$sql))
       {
           if(mysqli_num_rows($result)>0){
               $nhom=mysqli_fetch_array($result);
                  

    ?>
    <form method="post">
        <table>
            <tr>
                <td><label>Tên nhóm:</label></td>
                

            </tr>

            <tr>
                <td><input type="text" name="tenNhom" value="<?php echo $nhom['tenNhom'] ?>"></td>
                
            </tr>
            <tr>
                <td><label for="">Tình trạng</label></td>
                </tr>
                <tr>
                
                <td> <input style="margin-left:20%;border:solid 1px red" type="radio" name="trangthai" id="" value="4">Hiển thị
                    <input  type="radio"  name="trangthai" id="" value="5">Ẩn    
                </td>
                   
                    
                </tr>
        </table>

        <div class="them"><button type="submit" name="capnhat-nhom">Cập nhật</button></div>
        <?php
           }
       }
        ?>
    </form>

</div>