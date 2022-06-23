<?php
    

    require"../conn.php";
   
  

    //kiểm tra nếu người dùng đã ấn nút đăng nhập mới xử lí

    if(isset($_POST['Login'])){
        //lấy thông tin người dùng
        $user =$_POST['user'];
        $pass=$_POST['pass'];
        
        
       
       
        if($user==""||$pass==""){
            echo "username hoặc password bạn không được để trống!";
        }
        else{
            $sql="select * from taikhoan where user='$user' and pass='$pass'";
            $query=mysqli_query($conn,$sql);
            
            if(mysqli_num_rows($query)==0){
                echo "username hoặc password không đúng!";
            }
            else{
              
                //lưu username
                $_SESSION['user']=$user;
               
                
                
                header('Location:admin.php');
                

            }
        }


    }
   
   
    
?>