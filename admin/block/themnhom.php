<?php 
if (isset($_POST['btn-themnhom'])) {
    # code...
    $tenNhom=$_POST['tenNhom'];
    
    $sql="insert into nhomsanpham(tenNhom) values('$tenNhom')";
    if($conn->query($sql)==true){
        echo 'Thêm nhóm thành công';
    }
}


?>
<div class="them-nhom">
    <div class="them-nhom-text">THÊM NHÓM</div>
    <form method="post">
        <table>
            <tr>
                <td><label>Tên nhóm:</label></td>
                

            </tr>

            <tr>
                <td><input type="text" name="tenNhom" ></td>
                
            </tr>
        </table>

        <div class="them"><button type="submit" name="btn-themnhom">Thêm</button></div>
    </form>
</div>

