<br> <br> <br> <br>
<?php
        
        if(isset($_SESSION['id'])&&($_SESSION['id']>0)){
            $u = new user();
            $user = $u->getInfoById($_SESSION['id']);
        }
    ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" int
    egrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="container-fluid">

    <div class="row">
        <nav class="col-lg-2 d-none d-lg-block bg-light sidebar">
            <div class="user_info">
                <a href="#" class="clearfix">
                    <div class="user_avatar"><img src="https://phongtro123.com/images/default-user.png"
                            style="max-width: 100px;border-radius: 100%;"></div>
                    <div class="user_meta">
                        <div class="inner">
                            <div class="text-primary">
                                <div class="text-primary" style="color: #555; font-size: 0.9rem;"></div>
                            </div>
                        </div>
                </a>
                <ul>
                    <li><span>Mã thành viên: #<?php echo $user['id'] ?></span> <span style="font-weight: 700;"></span></li>
                    <li><span>TK Chính: <?php echo $user['sodu'] ?> đ</span> <span style="font-weight: 700;"></span></li>
                </ul>
                <a class="btn btn-warning btn-sm mr-1" href="">Nạp tiền</a>
                <a class="btn btn-danger btn-sm" href="">Đăng tin</a>
            </div>
            <ul class="nav nav-sidebar">
                <li class="nav-item">
                    <a class="nav-link active" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-file-text">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <polyline points="10 9 9 9 8 9"></polyline>
                        </svg>
                        Quản lý tin đăng
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="index.php?act=capnhattt">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-edit">
                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                        </svg>
                        Sửa thông tin cá nhân
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-dollar-sign">
                            <line x1="12" y1="1" x2="12" y2="23"></line>
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                        </svg>
                        Nạp tiền vào tài khoản
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-clock">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                        Lịch sử nạp tiền
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-calendar">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg>
                        Lịch sử thanh toán
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-clipboard">
                            <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                            <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                        </svg>
                        Bảng giá dịch vụ
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-message-circle">
                            <path
                                d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                            </path>
                        </svg>
                        Liên hệ
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-user-logout" href="index.php?act=thoat">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-log-out">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                            <polyline points="16 17 21 12 16 7"></polyline>
                            <line x1="21" y1="12" x2="9" y2="12"></line>
                        </svg>
                        Thoát
                    </a>
                </li>
            </ul>
        </nav>
        <div class="d-none d-md-block" style="max-width: 1400px;">
        <h1 class="h1">Đăng tin mới</h1>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-
        2 mb-3 border-bottom" >
   
        <form action="index.php?act=baidang" method="post"class="form-horizontal js-form-submit-data js-frm-manage-post"
            data-action-url=""enctype="multipart/form-data" >
           <em style="color:red"> <?php echo $err ?></em>
            <input type="hidden" name="id" value=""> 
            <input type="hidden" name="sodu" value="<?php echo $user['sodu'] ?>"> 
            <input type="hidden" name="rolebaidang" value=""> 
            <input type="hidden" name="iduser" value="<?php echo $user['id'] ?>"> 

            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Địa chỉ cho thuê</h3>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="province_id" class="col-form-label">Tỉnh/Thành phố</label>
                                <input type="text" id="province_id" name="tinh" class="form-control js-select-tinhthanhpho" value="<?php if(isset($tinh)==true) echo $tinh ?>">
                
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="col-form-label" for="district_id">Quận/Huyện</label>
                            <input id="district_id" class="form-control js-select-quanhuyen" type="text" name="huyen" value="<?php if(isset($huyen)==true) echo $huyen ?>">
                           
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="col-form-label" for="phuongxa">Phường/Xã</label>
                            
                        
                        
                                    <input  class="form-control js-select-phuongxa" type="text" name="xa"  value="<?php if(isset($xa)==true) echo $xa ?>">
                                    </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="col-form-label" for="duong">Đường/Phố</label>
                     
                                    <input  class="form-control js-select-duong" type="text" name="xa" value="<?php if(isset($sdt)==true) echo $sdt ?>">

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="street_number" class="col-form-label">Số nhà</label>
                                <input type="text" class="form-control js-input-street-number" name="sonha"
                                    id="street_number" value="<?php if(isset($sonha)==true) echo $sonha ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="diachi" class="col-form-label">Địa chỉ chính xác</label>
                                <input type="text"  class="form-control" name="adress" id="diachi"value="<?php if(isset($adress)==true) echo $adress ?>" >
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label for="post_cat" class="col-form-label" style="font-size:23px;" >Loại Tin Đăng</label>
                        <div class="col-md-6">
                                <input type="radio" name="rolegoi" value="Gói tin VIP" > Gói tin VIP <br>
                                <input type="radio" name="rolegoi" value="Gói tin thường"> Gói tin thường <br>
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <div class="col-md-12">
                            <h3>Thông tin mô tả</h3>
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label for="post_cat" class="col-form-label" style="font-size:23px;">Loại chuyên mục</label>
                        <div class="col-md-6">
                        <?php
      foreach ($dsdm as $dm) {
          echo ' 
          <input type="radio" name="iddm" value="'.$dm['id'].'">'.$dm['tendm'].'<br>          ';
         
      }
   
  ?> 
                        </div>
                    </div>
                  
                    <div class="form-group row">
                        <label for="post_title" class="col-md-12 col-form-label">Tiêu đề</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control js-title" name="tieude" id="post_title" value="<?php if(isset($tieude)==true) echo $tieude ?>"
                                minlength="30" maxlength="120" required data-msg-required="Tiêu đề không được để trống"
                                data-msg-minlength="Tiêu đề quá ngắn" data-msg-maxlength="Tiêu đề quá dài">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="post_content" class="col-md-12 col-form-label">Nội dung mô tả</label>
                        <div class="col-md-12">
                            <textarea class="form-control js-content" name="noidung" id="post_content" rows="10"
                                required minlength="100" data-msg-required="Bạn chưa nhập nội dung"
                                data-msg-minlength="Nội dung tối thiểu 100 kí tự"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone" class="col-md-12 col-form-label">Tên liên hệ</label>
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <input id="ten_lien_he" type="text" name="tennd" class="form-control" value="<?php if(isset($tennd)==true) echo $tennd ?>"
                                   >
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone" class="col-md-12 col-form-label">Điện thoại</label>
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <input id="phone" type="number" name="lienhe" class="form-control"value="<?php if(isset($lienhe)==true) echo $lienhe ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="giachothue" class="col-md-12 col-form-label">Giá cho thuê</label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input id="giachothue" name="giathue" pattern="[0-9.]+" type="text" class="form-control" value="<?php if(isset($giathue)==true) echo $giathue ?>"
                                    required data-msg-required="Bạn chưa nhập giá phòng"
                                    data-msg-min="Giá phòng chưa đúng">
                                <div class="input-group-append">
                                    <span class="input-group-text">đồng</span>
                                </div>
                            </div>
                            <small class="form-text text-muted">Nhập đầy đủ số, ví dụ 1 triệu thì nhập là
                                1000000</small>
                        </div>
                        <label for="text_giachothue" id="text_giachothue" class="col-sm-12 control-label js-number-text"
                            style="color: red;"></label>
                    </div>
                    <div class="form-group row">
                        <label for="post_acreage" class="col-md-12 col-form-label">Diện tích</label>
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <input id="post_acreage" type="number" attern="[0-9.]+" name="dientich" max="1000"
                                    class="form-control" required data-msg-required="Bạn chưa nhập diện tích">
                                <div class="input-group-append">
                                    <span class="input-group-text">m<sup>2</sup></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="doi_tuong" class="col-md-12 col-form-label">Đối tượng cho thuê</label>
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <select class="form-control" id="post_cat" name="doituong">
                                    <option name="doituong" value="Tất cả">-- Tất cả --</option>
                                    <option name="doituong" value="Nam">Nam</option>
                                    <option name="doituong" value="Nữ">Nữ</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <div class="col-md-12">
                            <h3>Hình ảnh</h3>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <p>Cập nhật hình ảnh rõ ràng sẽ cho thuê nhanh hơn</p>
                            <div class="form-group">
                                <div for="browse_photos" class="browse_photos js-dropzone"><i
                                        class="icon-upload-image"></i><span class="js-btn-chon-anh"><input type="file" name="img" id="" ></span> 
                                </div><br><br>
                                <!-- <p>Upload nhìu ảnh</p>
                                <div for="browse_photos" class="browse_photos js-dropzone"><i
                                        class="icon-upload-image"></i><span class="js-btn-chon-anh"><input type="file" name="imgs" id="" multiple required></span>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <div class="col-md-12">
                            <input type="submit" value="Đăng Tin" class="btn btn-success mb-5 btn-lg btn-block js-btn-hoan-tat" name="dangtin">
                              
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="card mb-5" style="color: #856404; background-color: #fff3cd; border-color: #ffeeba;">
                        <div class="card-body">
                            <h4 class="card-title">Lưu ý khi đăng tin</h4>
                            <ul>
                                <li style="list-style-type: square; margin-left: 15px;">Nội dung phải viết bằng tiếng
                                    Việt có dấu</li>
                                <li style="list-style-type: square; margin-left: 15px;">Tiêu đề tin không dài quá 100 kí
                                    tự</li>
                                <li style="list-style-type: square; margin-left: 15px;">Các bạn nên điền đầy đủ thông
                                    tin vào các mục để tin đăng có hiệu quả hơn.</li>
                                <li style="list-style-type: square; margin-left: 15px;">Để tăng độ tin cậy và tin rao
                                    được nhiều người quan tâm hơn, hãy sửa vị trí tin rao của bạn trên bản đồ bằng cách
                                    kéo icon tới đúng vị trí của tin rao.</li>
                                <li style="list-style-type: square; margin-left: 15px;">Tin đăng có hình ảnh rõ ràng sẽ
                                    được xem và gọi gấp nhiều lần so với tin rao không có ảnh. Hãy đăng ảnh để được giao
                                    dịch nhanh chóng!</li>
                            </ul>
                        </div>
                    </div>

                    </div>
        </form>
        </div>
       