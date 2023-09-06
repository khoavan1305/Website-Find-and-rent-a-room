<?php
        
        if(isset($_SESSION['id'])&&($_SESSION['id']>0)){
            $b = new baidang();
            $getid = $b->getInfoByIdbaidang($_SESSION['id']);
        }
   
    ?>
<link rel="stylesheet" href="assets/css/styleform.css">

<div class="visit-country">
<form class="s" action="index.php?act=seach" method="post">
  <input type="search" class="sb" name="kyw" autocomplete="off" placeholder="Tìm kiếm phòng theo Quận,Huyện" />
  <button type="submit" name="timkiem" class="sbtn fa fa-search"></button>
</form>  
<div class="top">
  <a class="btn-search" href="#"><i class="fa fa-search"></i></a>
</div> <br>
  <div class="container">

    <div class="row">

      <div class="col-lg-5">
        <div class="section-heading">

          <h2 class="h2" style="width:800px">Kênh thông tin Phòng Trọ số 1 Việt Nam</h2>
          <p class="text-danger" style="font-size:20px;width:800px">Kênh thông tin Phòng Trọ số 1 Việt Nam - Website đăng tin cho thuê phòng trọ, nhà nguyên căn, căn hộ, ở
            ghép nhanh, hiệu quả với 100.000+ tin đăng và 2.500.000 lượt xem mỗi tháng.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8">
        <div class="items">
          <div class="row">
            <div class="col-lg-12">
              <!-- Slideshow container -->
              <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides " style="max-width:900px;height:500px;background-color: black;">
                  <div class="numbertext">1 / 6</div>
                  <img class="fade-in-text " src="<?php echo $getid['img'] ?>"
                    style="max-width: 700px;;height:500px;margin-left:auto;margin-right:auto;display:block">

                </div>

                <div class="mySlides " style="max-width:900px;height:500px;background-color: black;">
                  <div class="numbertext">2 / 6</div>
                  <img class="fade-in-text  " src="upload/img3.jpg"
                    style="max-width: 700px;;height:500px;margin-left:auto;margin-right:auto;display:block">
                </div>

                <div class="mySlides " style="max-width:900px;height:500px;background-color: black;">
                  <div class="numbertext">3 / 6</div>
                  <img class="fade-in-text  " src="upload/img4.jpg"
                    style="max-width: 700px;;height:500px;margin-left:auto;margin-right:auto;display:block">
                </div>
                <div class="mySlides " style="max-width:900px;height:500px;background-color: black;">
                  <div class="numbertext">4 / 6</div>
                  <img class="fade-in-text  " src="upload/img5.jpg"
                    style="max-width: 700px;;height:500px;margin-left:auto;margin-right:auto;display:block">

                </div>

                <div class="mySlides " style="max-width:900px;height:500px;background-color: black;">
                  <div class="numbertext">5 / 6</div>
                  <img class="fade-in-text  " src="upload/img6.jpg"
                    style="max-width: 700px;;height:500px;margin-left:auto;margin-right:auto;display:block">
                </div>

                <div class="mySlides " style="max-width:900px;height:500px;background-color: black;">
                  <div class="numbertext">6 / 6</div>
                  <img class="fade-in-text  " src="upload/img7.jpg"
                    style="max-width: 700px;;height:500px;margin-left:auto;margin-right:auto;display:block">
                </div>

                <!-- Next and previous buttons -->

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
              </div>
              <br>

              <!-- The dots/circles -->
              <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>
                <span class="dot" onclick="currentSlide(6)"></span>
              </div> <br>
              <h3 class="h3" style="color:#0d6efd;"><i class="fa-regular fa-star"></i><i
                  class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i
                  class="fa-regular fa-star"></i>
                <?php echo ($getid['tieude']) ?>
                <hr>
              </h3> <br>

              <p class="text-danger"  style="letter-spacing:3px;font-size:18px;color:black;"><i
                  class="fa-sharp fa-solid fa-location-dot"></i>
                <?php echo ($getid['adress']) ?>
              </p>
              <br>
              <ul class="info" style="display:inline;">

                <li class="text-danger" style="letter-spacing:3px;display:inline;">
                  <i class="fa fa-user">
                    <?php echo ($getid['tennd']) ?>
                  </i>
                </li>
                <li class="text-danger" style="letter-spacing:3px;margin-left: 50px;display:inline;"><i class="fa fa-phone"></i>
                  <?php echo ($getid['lienhe']) ?>
                </li>
                <li class="text-danger" style="letter-spacing:3px;margin-left: 50px;display:inline;"><i class="fa fa-globe"></i>
                  <?php echo ($getid['dientich']) . ' m2'?>
                </li>
                <li class="text-danger" style="letter-spacing:3px;margin-left: 50px;display:inline;"><i
                    class="fa-solid fa-location-crosshairs"></i>
                  <?php echo ($getid['huyen']).' ' . ($getid['tinh']) ?>
                </li>

              </ul> <br> <br>
              <h2 class="h3" style="color:#0d6efd;">Thông Tin mô tả</h2> <hr> <br>
              <p class="text-danger" style="font-size:20px;"> <?php echo ($getid['noidung']) ?> </p> <br>
              <h2 class="h3" style="color:#0d6efd;">Đặc điểm tin đăng</h2> <hr><br>
              <table class="table">
                <thead>
                  <tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Mã Tin</th>
                    <td>
                      <?php echo '#' .  ($getid['id']) ?>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">Khu vực</th>
                    <td>
                      <?php echo ($getid['huyen']).' ' . ($getid['tinh']) ?>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">Loại tin rao</th>
                    <td>
                      <?php echo ($getid['rolebaidang']) ?>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">Đối tượng thuê</th>
                    <td>
                      <?php echo ($getid['doituong']) ?>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">Gói tin</th>
                    <td class="text-Danger"><?php echo ($getid['rolegoi']) ?></td>
                  </tr>
                </tbody>
              </table> <br>
              <h2 class="h3" style="color:#0d6efd;">Thông tin liên hệ</h2><hr> <br>
              <table class="table">
                <thead>
                  <tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Người đăng bài</th>
                    <td>
                      <?php echo   ($getid['tennd']) ?>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">SĐT liên hệ</th>
                    <td>
                      <?php echo ($getid['lienhe']) ?>
                    </td>
                  </tr>

                </tbody>
              </table>
              <h4 class="h4">Bản đồ</h4>
              <p  class="text-Danger" style="font-size:20px">Địa chỉ: <?php  echo ($getid['adress'])  ?></p> <br>
              <div class="mapouter"><div class="gmap_canvas">
                <iframe width="800" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=<?php echo ($getid['adress']) ?>
                  &t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2yu.co">2yu</a><br><style>.mapouter{position:relative;text-align:right;height:400px;width:800px;}</style><a href="https://embedgooglemap.2yu.co">html embed google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:800px;}</style></div></div>
                <br>
                <p class="text-danger" style="font-size:13px;max-width:800px">Bạn đang xem nội dung tin đăng: " Cho thuê <?php echo ($getid['rolebaidang']).',Giá: '.number_format(($getid['giathue'])).',Đối tượng thuê: '. ($getid['doituong'])?> ". Mọi thông tin liên quan đến tin đăng này chỉ mang tính chất tham khảo. Nếu bạn có phản hồi với tin đăng này (báo xấu, tin đã cho thuê, không liên lạc được,...), vui lòng thông báo để chúng tôi có thể xử lý.</p> <br>

            </div>
            <hr>
            <h4 class="h4">Bài Đăng Liên Quan</h4>
            <hr>

            <?php 
                  foreach ($dsbd as $bd){
                      echo '<div class="item">
                      <div class="row">
                        <div class="col-lg-4 col-sm-5">
                          <div class="image" >
                           
                          <a href="index.php?act=chitietroom&id='.$bd['id'].'"> <img src="'.$bd['img'].'" alt="" style=" height:300px;width:280px;"> </a>
                          </div>
                        </div>
                       
                        <div class="col-lg-8 col-sm-7">
                          <div class="right-content">
                          <a href="index.php?act=chitietroom&id='.$bd['id'].'">   <h4 style="max-width: 500px;color:#22b3c1;">'.$bd['tieude'].'</h4></a>
                            <span style="font-size: 20px;color:red;">'.number_format($bd['giathue']).'đ</span>
                            <p style="color:black;overflow:hidden;line-height: 25px;-webkit-line-clamp: 10;height: 100px;">'.$bd['noidung'].'</p>
                            <ul class="info" >
                              <li><i class="fa fa-user"></i> '.$bd['tennd'].' </li>
                              <li><i class="fa fa-phone"></i> '.$bd['lienhe'].' </li>
                          <br>
                              <li><i class="fa fa-globe"></i> '.$bd['dientich'].'  m2 </li>
                              <li><i class="fa fa-home"></i> '.$bd['huyen'].'.'.$bd['tinh'].'</li>
                            </ul>
                            <div class="text-button">
                              <a href="index.php?act=chitietroom&id='.$bd['id'].'"> Chuyên Mục: '.$bd['rolebaidang'].' <i class="fa fa-arrow-right"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>';
                
                
              }
              ?>
               
          </div>
          
        </div>
        <div class="col-lg-12">
                <ul class="page-numbers">
                  <li><a href="#"><i class="fa fa-arrow-left"></i></a></li>
                  <li class="active"><a href="#">1</a></li>
                  <li ><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
                </ul>
              </div>
      </div>

      <div class="col-lg-4">

        <div class="side-bar-map">
          <ul class="list-group">
            <li class="list-group-item active">Danh mục cho thuê</li>
            <?php
      foreach ($dsdm as $dm) {
          echo ' <a href="index.php?act=danhmuc&id='.$dm['id'].'"> <li class="list-group-item">'.$dm['tendm'].'</li></a>
          ';
      }
  ?>  
          </ul> <br> <br>
          <ul class="list-group">
          <li class="list-group-item active">Xem theo giá</li>
  <a href="index.php?act=bdgia&id=1"><li class="list-group-item">Dưới 1 triệu</li></a>
  <a href="index.php?act=bdgia&id=2"><li class="list-group-item">Từ 1 - 2 triệu</li></a>
  <a href="index.php?act=bdgia&id=3"><li class="list-group-item">Từ 2 - 3 triệu</li></a>
  <a href="index.php?act=bdgia&id=4"><li class="list-group-item">Từ 3 - 5 triệu</li></a>
  <a href="index.php?act=bdgia&id=5"><li class="list-group-item">Từ 5 - 7 triệu</li></a>
  <a href="index.php?act=bdgia&id=6"> <li class="list-group-item">Từ 7 - 10 triệu</li></a>
  <a href="index.php?act=bdgia&id=7"> <li class="list-group-item">Từ 10 - 15 triệu</li></a>
  <a href="index.php?act=bdgia&id=8"> <li class="list-group-item">Trên 15 triệu</li></a>
          </ul> <br> <br>
          <div class="row">

            <ul class="list-group">
            <a href=""><li class="list-group-item active">Xem theo diện tích</li></a> 
 <a href="index.php?act=bddientich&id=1"> <li class="list-group-item">Dưới 20 m2</li></a> 
 <a href="index.php?act=bddientich&id=2"> <li class="list-group-item">Dưới 30 - 50 m2</li></a> 
 <a href="index.php?act=bddientich&id=3"> <li class="list-group-item">Dưới 70 - 90 m2</li></a> 
 <a href="index.php?act=bddientich&id=4"> <li class="list-group-item">trên 90 m2</li></a> 
            </ul>
            <div class="col-lg-12">

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>let slideIndex = 1;
  showSlides(slideIndex);

  // Next/previous controls
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  // Thumbnail image controls
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
  }</script>
<style>
  * {
    box-sizing: border-box
  }

  /* Slideshow container */
  .slideshow-container {
    max-width: 1000px;
    position: relative;
    margin: auto;
  }

  /* Hide the images by default */
  .mySlides {
    display: none;
  }

  /* Next & previous buttons */
  .prev,
  .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    margin-top: -22px;
    padding: 16px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
  }

  /* Position the "next button" to the right */
  .next {
    right: 0px;
    border-radius: 3px 0 0 3px;
  }

  /* On hover, add a black background color with a little bit see-through */
  .prev:hover,
  .next:hover {
    background-color: rgba(0, 0, 0, 0.8);
  }

  /* Caption text */
  .text {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
  }

  /* Number text (1/3 etc) */
  .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
  }

  /* The dots/bullets/indicators */
  .dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
  }

  .active,
  .dot:hover {
    background-color: #717171;
  }

  /* Fading animation */

  .fade-in-text {
    font-family: Arial;
    font-size: 60px;
    animation: fadeIn 5s;
    -webkit-animation: fadeIn 5s;
    -moz-animation: fadeIn 5s;
    -o-animation: fadeIn 5s;
    -ms-animation: fadeIn 5s;
  }

  @keyframes fadeIn {
    0% {
      opacity: 0;
    }

    100% {
      opacity: 1;
    }
  }

  @-moz-keyframes fadeIn {
    0% {
      opacity: 0;
    }

    100% {
      opacity: 1;
    }
  }

  @-webkit-keyframes fadeIn {
    0% {
      opacity: 0;
    }

    100% {
      opacity: 1;
    }
  }

  @-o-keyframes fadeIn {
    0% {
      opacity: 0;
    }

    100% {
      opacity: 1;
    }
  }

  @-ms-keyframes fadeIn {
    0% {
      opacity: 0;
    }

    100% {
      opacity: 1;
    }
  }
</style>