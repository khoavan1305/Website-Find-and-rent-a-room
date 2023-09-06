<br> <br> <br> <br>
<?php
        
        if(isset($_SESSION['id'])&&($_SESSION['id']>0)){
            $u = new user();
            $user = $u->getInfoById($_SESSION['id']);
        }
    ?>
<form  action="index.php?act=login" method="post" style="width: 500px;margin-left: 600px; margin-top: 100px;" >

            <div class="form-group">
                <h1 >ĐĂNG NHẬP TÀI KHOẢN</h1>
                <label  for="">Tên Đăng Nhập:</label> <br>
                <input  class="form-control" type="text" name="sdt" id="" minlength="10" title="SĐT phải có 10 ký tự số" pattern="[0-9]{10,11}"required  value="<?php if(isset($sdt)==true) echo $sdt ?>"> <br>
                <label for="">Mật Khẩu:</label> <br>
                <input  class="form-control" type="password" name="pass" id="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"required title="Mật khẩu phải có ít nhất 1 ký tự hoa, thường và số" minlength="8" size="20" required> <br>
                <input  class="btn btn-primary" type="submit" name="dangnhap" value="Đăng Nhập" class="button"><br>
                <a href="index.php?act=dangky" class="register">Bạn chưa có tài khoản ?</a><br>
            </form>
            </div>
    
<link rel="stylesheet" href="https://cd
n.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrit
y="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">