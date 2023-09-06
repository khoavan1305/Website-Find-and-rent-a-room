<?php
        
        if(isset($_SESSION['id'])&&($_SESSION['id']>0)){
            $u = new user();
            $user = $u->getInfoById($_SESSION['id']);
        }
    ?>
        <form  action="index.php?act=updatetk"  method="post" style="width: 500px;margin-left: 600px; margin-top: 100px;">
        <div class="form-group">
            <input type="hidden" name="id" value="<?=$user['id']?>">
            <h1  style="text-align:center" class="text-primary">Cập nhật tài khoản</h1>
            <p>
                <label class="text-primary">Họ Và Tên:</label><br>
                <input  class="form-control" type="text" name="name" value="<?php echo $user['name'] ?>">
            </p>
            <p>
                <label class="text-primary"> Số Điện Thoại:</label><br>
                <input  class="form-control" readonly type="text" name="sdt"  value="<?php echo $user['sdt'] ?>">
            </p>
            <p>
                <label class="text-primary">Email:</label><br>
                <input  class="form-control" type="text" name="email" value="<?php echo $user['email'] ?>">   
            </p>
          
            <p>
                <label class="text-primary">Mật Khẩu:</label><br>
                <input  class="form-control" type="password" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"required title="Mật khẩu phải có ít nhất 1 ký tự hoa, thường và số" minlength="8" size="20" required value="<?php echo $user['pass'] ?>" >
            </p>    
             <p>
                <label class="text-primary">Loại tài khoản:</label><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <input  type="radio" name="role" value="user" checked>User  &nbsp;&nbsp;&nbsp;&nbsp;
                <input   type="radio" name="role" value="shop" > Shop   <br>
                <em style="color:red;">Chọn tk Shop để có thể đăng tin</em>
            </p>     
            <p>
                <input  class="btn btn-primary" type="submit" value="Update" name="update"><br>
                <?php if(isset($user['id'])) { ?>
                <a href="index.php?act=login"></a>
                <?php }else{?>
                <a href="index.php?act=login">Đăng nhập</a>
                <?php } ?>
            </p>
          
            </div>
        </form>
<link rel="stylesheet" href="https://cd
n.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrit
y="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">