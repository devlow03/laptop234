
<!-- vanphongnoibat -->

<div class="loai-laptop">
    <div class="box">
        
        <div class="banner"><div style="margin-top:0.5%;font-size:1.2em"> <h1 style="margin-left:3%">Văn phòng</h1>  </div></div>

        <div class="sanpham">
            
            <?php

            
       
     
       $sql = "select * from sanpham inner join nhomsanpham on sanpham.manhom like nhomsanpham.manhom inner join thuonghieu on sanpham.idhieu like thuonghieu.idhieu where sanpham.idnoibat=1 and sanpham.manhom=1 and sanpham.tinhtrang=3 and nhomsanpham.trangthai=4 and thuonghieu.hienthi =4 order by sanpham.gia";
       

       if ($r = mysqli_query($conn, $sql)) {
           if (mysqli_num_rows($r) > 0) {
               while ($sp = mysqli_fetch_array($r)) {
                ?>
            <div class="fold">

                
                <div class="hinhanh"><a  href="index.php?page=blocks/sanpham/chitietlaptop.php&idct=<?php echo $sp['ma'] ?>" ><img src="images/<?php echo $sp["hinhanh"] ?>" ></a></div>
                <!-- từ trang index truyền qua 1 biến page=blocks/sanpham/chitietlaptop.php và truyền thêm 1 biến idct được lấy từ $sp = mysqli_fetch_array($r) -->
                <div class="ten"><a href="index.php?page=blocks/sanpham/chitietlaptop.php&idct=<?php echo $sp['ma'] ?>"><?php echo $sp['ten'] ?></div></a>
                <div class="gia"><a href="index.php?page=blocks/sanpham/chitietlaptop.php&idct=<?php echo $sp['ma'] ?>"><?php echo number_format($sp['gia'],0,",",".") ?>₫ </a></div>
                <textarea style="overflow: hidden;
                    width: 50%;
                    height: 100%;
                    border:none;
                    margin-right:45%;
                    resize:none;
                    background-color: transparent;
                    outline:none;
                    font-size:0.9em
                    " 
                    readonly  name="" id="" >
                    <?php echo $sp['chitiet'] ?>
                </textarea>
                

        </div>
            <?php
              
                }
           }
       }
       
       ?>

    </div>
</div>


<!-- gamingnoibat -->
<div class="loai-laptop">
    <div class="box">

    <div class="banner"><div style="margin-top:0.5%;font-size:1.2em"><h1 style="margin-left:3%">Gaming</h1></div></div>

        <div class="sanpham">
            <?php
       
     
       $sql = "select * from sanpham inner join nhomsanpham on sanpham.manhom like nhomsanpham.manhom inner join thuonghieu on sanpham.idhieu like thuonghieu.idhieu where sanpham.idnoibat=1 and sanpham.manhom=2 and tinhtrang=3 and nhomsanpham.trangthai=4 and thuonghieu.hienthi =4 order by sanpham.gia";
       if ($r = mysqli_query($conn, $sql)) {
           if (mysqli_num_rows($r) > 0) {
               while ($sp = mysqli_fetch_array($r)) {
                ?>
            <div class="fold">


            <div class="hinhanh"><a  href="index.php?page=blocks/sanpham/chitietlaptop.php&idct=<?php echo $sp['ma'] ?>" ><img src="images/<?php echo $sp["hinhanh"] ?>" ></a></div>
                <div class="ten"><a href="index.php?page=blocks/sanpham/chitietlaptop.php&idct=<?php echo $sp['ma'] ?>"><?php echo $sp['ten'] ?></div></a>
                <div class="gia"><a href="index.php?page=blocks/sanpham/chitietlaptop.php&idct=<?php echo $sp['ma'] ?>"><?php echo number_format($sp['gia'],0,",",".") ?>₫ </a></div>
                <textarea style="overflow: hidden;
                    width: 50%;
                    height: 150%;
                    border:none;
                    margin-right:45%;
                    resize:none;
                    background-color: transparent;
                    font-size:0.9em"
                    " 
                    readonly  name="" id="" >
                    <?php echo $sp['chitiet'] ?>
                </textarea>


        </div>
            <?php
              
                }
           }
       }
       
       ?>

    </div>
</div>
<!-- macbooknoibat -->
<div class="loai-laptop">
    
    <div class="box">

    <div class="banner"><div style="margin-top:0.5%;font-size:1.2em"><h1 style="margin-left:3%">Macbook</h1></div></div>


        <div class="sanpham">
            <?php
       
       $conn = mysqli_connect("localhost", "root", "", "laptop");
       mysqli_query($conn, "set names utf8");
       $sql = "select * from sanpham inner join nhomsanpham on sanpham.manhom like nhomsanpham.manhom inner join thuonghieu on sanpham.idhieu like thuonghieu.idhieu where sanpham.idnoibat=1 and sanpham.manhom=3 and sanpham.tinhtrang=3 and nhomsanpham.trangthai=4 and thuonghieu.hienthi =4 order by sanpham.gia";
       if ($r = mysqli_query($conn, $sql)) {
           if (mysqli_num_rows($r) > 0) {
               while ($sp = mysqli_fetch_array($r)) {
                ?>
            <div class="fold">


            <div class="hinhanh"><a  href="index.php?page=blocks/sanpham/chitietlaptop.php&idct=<?php echo $sp['ma'] ?>" ><img src="images/<?php echo $sp["hinhanh"] ?>" ></a></div>
                <div class="ten"><a href="index.php?page=blocks/sanpham/chitietlaptop.php&idct=<?php echo $sp['ma'] ?>"><?php echo $sp['ten'] ?></div></a>
                <div class="gia"><a href="index.php?page=blocks/sanpham/chitietlaptop.php&idct=<?php echo $sp['ma'] ?>"><?php echo number_format($sp['gia'],0,",",".") ?>₫ </a></div>
                <textarea style="overflow: hidden;
                    width: 50%;
                    height: 50%;
                    border:none;
                    margin-right:45%;
                    resize:none;
                    background-color: transparent;
                    font-size:0.9em
                    " 
                    readonly  name="" id="" >
                    <?php echo $sp['chitiet'] ?>
                </textarea>


        </div>
            <?php
              
                }
           }
       }
       
       ?>

    </div>
</div>

<!-- mongnhenoibat -->
<div class="loai-laptop">
    <div class="box">

    <div class="banner"><div style="margin-top:0.5%;font-size:1.2em"><h1 style="margin-left:3%">Mỏng nhẹ</h1></div></div>


        <div class="sanpham">
            <?php
       
       $conn = mysqli_connect("localhost", "root", "", "laptop");
       mysqli_query($conn, "set names utf8");
       $sql = "select * from sanpham inner join nhomsanpham on sanpham.manhom like nhomsanpham.manhom inner join thuonghieu on sanpham.idhieu like thuonghieu.idhieu where sanpham.idnoibat=1 and sanpham.manhom=4 and sanpham.tinhtrang=3 and nhomsanpham.trangthai=4 and thuonghieu.hienthi =4 order by sanpham.gia";
       if ($r = mysqli_query($conn, $sql)) {
           if (mysqli_num_rows($r) > 0) {
               while ($sp = mysqli_fetch_array($r)) {
                ?>
            <div class="fold">


            <div class="hinhanh"><a  href="index.php?page=blocks/sanpham/chitietlaptop.php&idct=<?php echo $sp['ma'] ?>" ><img src="images/<?php echo $sp["hinhanh"] ?>" ></a></div>
                <div class="ten"><a href="index.php?page=blocks/sanpham/chitietlaptop.php&idct=<?php echo $sp['ma'] ?>"><?php echo $sp['ten'] ?></div></a>
                <div class="gia"><a href="index.php?page=blocks/sanpham/chitietlaptop.php&idct=<?php echo $sp['ma'] ?>"><?php echo number_format($sp['gia'],0,",",".") ?>₫ </a></div>
                <textarea style="overflow: hidden;
                     width: 50%;
                    height: 40%;
                    border: none;
                    margin-right:40%;
                    background-color: transparent;
                    resize: none;
                    font-size:0.9em" 
                    readonly  name="" id="" >
                    <?php echo $sp['chitiet'] ?>
                </textarea>

        </div>
            <?php
              
                }
           }
       }
       
       ?>

    </div>
</div>

<!-- caocapnoibat -->

<div class="loai-laptop">
    <div class="box">

    <div class="banner"><div style="margin-top:0.5%;font-size:1.2em"><h1 style="margin-left:3%">Cao cấp</h1></div></div>


        <div class="sanpham">
            <?php
       
       $conn = mysqli_connect("localhost", "root", "", "laptop");
       mysqli_query($conn, "set names utf8");
       $sql = "select * from sanpham inner join nhomsanpham on sanpham.manhom like nhomsanpham.manhom inner join thuonghieu on sanpham.idhieu like thuonghieu.idhieu where sanpham.idnoibat=1 and sanpham.manhom=5 and sanpham.tinhtrang=3 and nhomsanpham.trangthai=4 and thuonghieu.hienthi =4 order by sanpham.gia  ";
       if ($r = mysqli_query($conn, $sql)) {
           if (mysqli_num_rows($r) > 0) {
               while ($sp = mysqli_fetch_array($r)) {
                ?>
            <div class="fold">


            <div class="hinhanh"><a  href="index.php?page=blocks/sanpham/chitietlaptop.php&idct=<?php echo $sp['ma'] ?>" ><img src="images/<?php echo $sp["hinhanh"] ?>" ></a></div>
                <div class="ten"><a href="index.php?page=blocks/sanpham/chitietlaptop.php&idct=<?php echo $sp['ma'] ?>"><?php echo $sp['ten'] ?></div></a>
                <div class="gia"><a href="index.php?page=blocks/sanpham/chitietlaptop.php&idct=<?php echo $sp['ma'] ?>"><?php echo number_format($sp['gia'],0,",",".")?>₫ </a></div>
              
                <textarea style="overflow: hidden;
                     width: 50%;
                    height: 40%;
                    border: none;
                    margin-right:40%;
                    background-color: transparent;
                    resize: none;
                    font-size:0.9em" 
                    readonly  name="" id="" >
                    <?php echo $sp['chitiet'] ?>
                </textarea>
               



        </div>
            <?php
              
                }
           }
       }
       
       ?>

    </div>
</div>




            