<?php require_once('inc/lib.php'); ?>
<?php
            if(isset($_POST['ok'])){
                                    $user=addslashes($_POST['user']);
                                      $pass=addslashes($_POST['password']);

                                         if($user==NULL ||  $pass==NULL){
                                                       echo "<script type='text/javascript'>";
                                                        echo "alert(' Mời Nhập User & Password')";
                                                         echo "</script>";
                                            }else{
                                                    $sql="SELECT user,password FROM user WHERE user='{$user}' AND password='{$pass}'";
                                                                $query=mysqli_query($conn,$sql);
                                                                $row=mysqli_fetch_array($query,MYSQLI_ASSOC);

                                                                if($row==0){
                                                                         echo "<script type='text/javascript'>";
                                                                         echo "alert(' User & Password không đúng')";
                                                                         echo "</script>";
                                                                }else{
                                                                      $_SESSION["user"]=$user;
                                                                       header("location:thanhvien.php");
                                                                     }
                                                                      if($user=="admin" && $pass=="123456a@"){
                                                                        $_SESSION["user"]=$user;
                                                                      header('location:admin.php');
                                                                }
                                                              
                                                        }

                                            }

                                ?>
<!DOCTYPE html>
<html>
<head>
	<title>SysDney - Đăng Nhập Thành Viên</title>
	<meta charset="utf-8">
                <meta name="author" content="Tuyển giảng, quang hiếu, thế anh, hồng hải">
            <meta name="description" content="Trang web học viện ngôn ngữ sysdney">
          <meta name="keyword" content="sysdney,học viện sysdney, khóa học tiếng anh online, trung tâm đào tạo tiếng anh,học viên anh ngũ, khóa học tiếng anh giao tiếp,dang ky khoa hoc,">
        <!--css-->
            <link rel="stylesheet" type="text/css" href="js/jquery.bxslider.css">
            <link rel="stylesheet" type="text/css" href="css/styleform.css">
         <link rel="stylesheet" type="text/css" href="css/awesom/css/font-awesome.min.css">
          <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
            <link rel="icon" href="img/logo.png" type="image/x-icon"/>
        <!--jquery-->
        <script src="js/jquery.js"></script>
        <script src="js/jquery.bxslider.min.js"></script>
        <script src="js/main.js"></script>
        <script lang="javascript">(function() {var pname = ( (document.title !='')? document.title : document.querySelector('h1').innerHTML );var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async=1; ga.src = '//live.vnpgroup.net/js/web_client_box.php?hash=a40d11a8d0ee5c046117cf29d5359458&data=eyJzc29faWQiOjk3NDI2NCwiaGFzaCI6IjgxMGQ5YzdiNTBmN2RlOWM2YzhkYWUzYzYxZTJiYmU0In0-&pname='+pname;var s = document.getElementsByTagName('script');s[0].parentNode.insertBefore(ga, s[0]);})();</script>   
</head>
<body>
            <a href="#top"></a>
    <div id="top">
        <div id="top-content">
            <div class="top-left">
                <a href="#" ><i class="fa fa-map-marker"></i> Số 126 Lê Hồng Phong , Nam Định </a>|     
            <a href="#" ><i class="fa fa-envelope-square"></i> Anhngusysdney@gmail.com </a>| 
            <a href="#" ><i class="fa fa-bell"></i> 8H00 - 20H00 </a>| 
            <a href="#"> <i class="fa fa-phone"></i> 0934555000</a>
        </div><!--top-left-->
        <div class="top-right">
            <a href="#" title="facebook"><i class="fa fa-facebook"></i> </a>  
            <a href="#" title="Twitter"><i class="fa fa-twitter"></i> </a> 
            <a href="#" title="google"><i class="fa fa-google"></i> </a> 
            <a href="#" title="youtube"><i class="fa fa-youtube"></i> </a>  
        </div><!--top-right-->
       </div><!--top-content-->
    </div><!--too-->
    <div id="header">
         <div id="header-content">
            <div class="logo">
            <a href="index.php" title="Trang Chủ"><img src="img/logo.png" title="Trang Chủ Sysdney"></a>
        </div><!--logo-->
        <div class="menu">
            <ul>
                <li><a href="index.php">TRANG CHỦ</a></li>
                <li><a href="#">GIỚI THIỆU</a></li>
                <li><a href="#">KHÓA HỌC</a></li>
                <li><a href="#">TIN TỨC</a></li>
                <li><a href="#">TUYỂN DỤNG</a></li>
                <li><a href="#">LIÊN HỆ</a></li>
            </ul>
        </div><!--menu-->
        <div class="search">
            <div class="dangky">
                <a href="dangki.php" title="Đăng Ký"><i class="fa fa-sign-in"></i></a>
            </div><!--login-->
            <div class="login">
                <a href="dangnhap.php" title="Đăng Nhập"><i class="fa fa-user"></i></a>
            </div><!--login-->
            <button id="btn" title="Tìm Kiếm"><i class="fa fa-search"></i></button>
            <div class="search-btn">
                <form method="post" action="search.php">
                    <input type="search" name="search" placeholder="Bạn Tìm Gì Nào">
                </form> 

            </div><!--search-btn-->

        </div><!--search-->

         </div><!--header-content-->
    </div><!--header-->

    <!--menu scroll-->
    <div id="header-scroll">
         <div id="header-content-scroll">
            <div class="logo">
            <a href="index.php" title="Trang Chủ"><img src="img/logo.png" title="Trang Chủ Sysdney"></a>
        </div><!--logo-->
        <div class="menu">
            <ul>
                <li><a href="index.php"> TRANG CHỦ</a></li>
                <li><a href="#">GIỚI THIỆU</a></li>
                <li><a href="#">KHÓA HỌC</a></li>
                <li><a href="#">TIN TỨC</a></li>
                <li><a href="#">TUYỂN DỤNG</a></li>
                <li><a href="#">LIÊN HỆ</a></li>
            </ul>
        </div><!--menu-->
        <div class="search">
            <div class="dangky">
                <a href="dangki.php" title="Đăng Ký"><i class="fa fa-sign-in"></i></a>
            </div><!--login-->
            <div class="login">
                <a href="dangnhap.php" title="Đăng Nhập"><i class="fa fa-user"></i></a>
            </div><!--login-->
            <button id="btn" title="Tìm Kiếm"><i class="fa fa-search"></i></button>
            <div class="search-btn">
                <form method="post" action="search.php">
                    <input type="search" name="search" placeholder="Bạn Tìm Gì Nào">
                </form> 

            </div><!--search-btn-->
        </div><!--search-->

         </div><!--header-content-->
    </div><!--header-->
    
    <div style="clear:left;"></div>


    <div id="main">
                <div id="main-left">
                                <div id="title"><i class="fa fa-user"></i> Đăng Nhập</div>
                                <form method="POST" action="">
                                        <label><h4><i class="fa fa-user"></i> Nhập User</h4>
                                                 <input type="text" name="user" placeholder="Nhập User">
                                        </label>
                                        <label><h4><i class="fa fa-code"></i> Nhập Password</h4>
                                                <input type="password" name="password" placeholder="Nhập Password">
                                        </label>
                                        <center><button type="submit" name="ok"><i class="fa fa-user"></i> Đăng Nhập</button></center>


                                </form>

                </div><!--main-left-->

                <div id="main-right">
                             <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FAnh-Ng%E1%BB%AF-Sysdney-Uneti-355153618240660%2F&tabs=Anh%20Ng%E1%BB%AF%20Sysdney&width=500&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

                </div><!--main-right-->


    </div><!--main-->

    <div style="clear:left;"></div>

     <div id="bottom" style="margin-top:200px;">

            <div class="bottom-title">
                <ul>
                    <li><a href="#">Trang Chủ</a></li>
                    <li><a href="#">Giới Thiệu</a></li>
                    <li><a href="#">Khóa Học</a></li>
                    <li><a href="#">Tin Tức</a></li>
                    <li><a href="#">Tuyển Dụng</a></li>
                    <li><a href="#">Liên Hệ</a></li>


                </ul>
            </div><!--bottom-title-->
            <div class="bottom-content">
            Coppyright 2017 &copy; Tuyển Giảng - Quang Hiếu - Hồng Hải - Thế anh
            </div><!--bottom-content-->

    </div><!--bottom-->
    <div id="updown">
        <div class="updown-header">
                <a href="#top"><i class="fa fa-chevron-up" id="down6"></i></a>

        </div><!--updown-header-->
    </div><!--updown-->
</body>
</html>