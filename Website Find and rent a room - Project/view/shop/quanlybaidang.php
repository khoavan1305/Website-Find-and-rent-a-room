 <br>   <br> <br> <br> 
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
                        <div class="user_avatar"><img src="https://phongtro123.com/images/default-user.png" style="max-width: 100px;border-radius: 100%;"></div>
                        <div class="user_meta">
                            <div class="inner">					
                                <div class="text-primary"><?php echo $user['name'] ?></div>
                                <div class="text-primary" style="color: #555; font-size: 0.9rem;"><?php echo $user['sdt'] ?></div>
                            </div>
                        </div>
                    </a>
                    <ul>
                        <li><span>Mã thành viên: #<?php echo $user['id'] ?></span> <span style="font-weight: 700;"></span></li>
                        <li><span>TK Chính: <?php echo $user['sodu'] ?> đ</span> <span style="font-weight: 700;"></span></li>
                                            </ul>
                    <a class="btn btn-warning btn-sm mr-1" href="">Nạp tiền</a>
                    <a class="btn btn-danger btn-sm" href="index.php?act=baidang">Đăng tin</a>
    			</div>
                <ul class="nav nav-sidebar">
                    <li class="nav-item">
                        <a class="nav-link active" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                        Quản lý tin đăng
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="index.php?act=capnhattt">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                        Sửa thông tin cá nhân
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                        Nạp tiền vào tài khoản
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                        Lịch sử nạp tiền
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                        Lịch sử thanh toán
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                        Bảng giá dịch vụ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                        Liên hệ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-user-logout" href="index.php?act=thoat">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                        Thoát
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="d-none d-md-block" style="max-width: 1400px;">
                <div class="table-responsive">
                    <table class="table table_post_listing table-bordered _table-hover">
                        <thead>
                        <tr>
                                <th>Mã tin</th>
                                <th >Địa chỉ</th>
                                <th>Loại tin</th>
                                <th>Tiêu đề</th>
                                <th >Giá thuê</th>
                                <th >Tên NĐ</th>
                                <th >Liên hệ</th>
                                <th >Edit</th>
                            </tr>
                        </thead>
                        <?php 
                        foreach( $dsbd as $bd) 
                       echo '<tbody>
                       <tr>
                          <td>'.$bd['id'].'</td>
                          <td>'.$bd['adress'].'</td>
                          <td>'.$bd['rolebaidang'].'</td>
                          <td>'.$bd['tieude'].'</td>
                          <td>'.number_format($bd['giathue']).'đ</td>
                          <td>'.$bd['tennd'].'</td>
                          <td>'.$bd['lienhe'].'</td>
                          <td>
                          <a href="index.php?act=deletebd&id='.$bd['id'].'">Xóa</a><hr>
                       </tr>
                   </tbody>' ;
                        ?>
                    </table>
                </div>
            </div>
            <script src="./scr.js"></script>

            <!-- <td colspan="7">Bạn chưa có tin đăng nào. Bấm <a href="index.php?act=baidang">vào đây</a> để bắt đầu đăng tin</td> -->

