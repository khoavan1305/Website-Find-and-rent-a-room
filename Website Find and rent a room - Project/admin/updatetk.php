<?php
        
        if(isset($_SESSION['id'])&&($_SESSION['id']>0)){
            $u = new user();
            $user = $u->getInfoById($_SESSION['id']);
        }

    ?>
    <br><br><br><br><br>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" int
egrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <div class="container-fluid">
        
        <div class="row">
            <nav class="col-lg-2 d-none d-lg-block bg-light sidebar">
                <div class="user_info" style="height:400px">
                    <a href="#" class="clearfix">
                        <div class="user_avatar"><img src="https://phongtro123.com/images/default-user.png" style="max-width: 100px;border-radius: 100%;"></div>
                        <div class="user_meta">
                            <div class="inner">					
                                <div class="text-primary"><?php echo $user['name'] ?></div>
                                <div class="text-primary" style="color: #555; font-size: 0.9rem;"style="overflow:hidden;"><?php echo $user['sdt'] ?></div>
                            </div>
                        </div>
                    </a>
                    <ul>
                <ul class="nav nav-sidebar">
                    <li class="nav-item">
                        <a class="nav-link active" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                        Quản lý tin đăng
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-check"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg>
                        Quản lý tài khoản
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
            <form action="admin.php?act=updatetk" method="post">
            <label for="">Nhập tên:</label>
            <input type="text" name="name" id="" value="<?php echo $getkq['name'] ;?>"> <br>
            <input type="hidden" name="id" id="" value="<?php echo $getkq['id'] ;?>"> 
            <label for="">Nhập SDT:</label>
            <input type="text" name="sdt" id="" value="<?php echo $getkq['sdt'] ?>">
            <input type="hidden" name="id" id="" value="<?php echo $getkq['id'] ;?>">  <br>
            <label for="">Nhập Email:</label>
            <input type="text" name="email" id="" value="<?php echo $getkq['email'] ?>"> 
            <input type="hidden" name="id" id="" value="<?php echo $getkq['id'] ;?>"> <br>
            <label for="">Nhập PassWord:</label>
            <input type="text" name="pass" id="" value="<?php echo $getkq['pass'] ?>"><input type="hidden" name="id" id="" value="<?php echo $getkq['id'] ;?>"> <br>
            <label for="">Chọn Loại TK:</label>
            <input type="radio" name="role" id="" value="user">User
            <input type="radio" name="role" id="" value="shop">Shop
            <input type="radio" name="role" id="" value="admin">Admin <br>
            <input type="submit" value="Update" name="update">
        </form>
                <div class="table-responsive">
                <table class="table table_post_listing table-bordered _table-hover">
                        <thead>
                            <tr>
                                <th>ID User</th>
                                <th >Name</th>
                                <th>SĐT </th>
                                <th>Email</th>
                                <th >PassWord</th>
                                <th >Loại Tài Khoản</th>
                                <th >Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                       echo '
                       <tr>
                          <td>'.$getkq['id'].'</td>
                          <td>'.$getkq['name'].'</td>
                          <td>'.$getkq['sdt'].'</td>
                          <td>'.$getkq['email'].'</td>
                          <td>'.$getkq['pass'].'</td>
                          <td>'.$getkq['role'].'</td>
                          <td>
                          <a href="admin.php?act=deletetk&id='.$getkq['id'].'">Xóa |</a>
                          <a href="admin.php?act=updatetk&id='.$getkq['id'].'">Sửa</a>
                          </td>
                       </tr>
                   ' ;
                
                         
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
