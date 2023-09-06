<?php
        
        if(isset($_SESSION['id'])&&($_SESSION['id']>0)){
            $u = new user();
            $user = $u->getInfoById($_SESSION['id']);
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<style>
    .logo>img{
      width: 300px;
    }

</style>
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>WoOx Travel Bootstrap 5 Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-woox-travel.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 580 Woox Travel

https://templatemo.com/tm-580-woox-travel

-->

  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky" style="height: 85px;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav"  style="width: 1400px">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.php" class="logo" style="height: 85px;" >
                        <img src="assets/images/logo.png" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul  class="nav" >
                      
                        <li><a href="index.php" >Trang Chủ</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="deals.php">Deals</a></li>
                        <li><a href="reservation.php">Reservation</a></li>
                        <?php   
                          if(isset($user['id'])&&($user['id'])) { ?>
                        <div class="user_avatar"><img src="https://phongtro123.com/images/default-user.png" style="max-width: 50px;border-radius: 100%;"></div>
                        <li><a href="index.php?act=quanlybaidang"><?php echo $user['role']?></a>
                            
                      </li>
                        <?php }
                         ?>
                        <?php if(isset($user['id'])) { ?>
                              <?php if(isset($_SESSION['role'])=='shop'){ ?>
                            <li><a href="index.php?act=quanlybaidang&id=<?php echo $user['id'] ?>"> Quản Lý Tài Khoản </a></li>
                              <?php }else{?>
                             <li><a href="index.php?act=updatetk"> Quản Lý Tài Khoản</a></li>
                              <?php } ?>
                          <li><a href="index.php?act=thoat"> Thoát</a></li>
                        <?php }else{?>
                          <li><a href="index.php?act=login"> Đăng Nhập</a></li>
                        <?php } ?>
                         
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
    
  </header>
  
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  
      <nav>
        <div class="controls">
          <label for="banner1"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text"></span></label>
          <label for="banner2"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text"></span></label>
          <label for="banner3"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text"></span></label>
          <label for="banner4"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text"></span></label>
        </div>
      </nav>
    </div>
  </section>
