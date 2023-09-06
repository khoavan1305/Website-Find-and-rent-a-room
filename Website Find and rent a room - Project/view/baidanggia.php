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
  <a href="index.php?act=bdgia&id=1"> <li class="list-group-item">Dưới 1 triệu</li></a>
  <a href="index.php?act=bdgia&id=2"> <li class="list-group-item">Từ 1 - 2 triệu</li></a>
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
