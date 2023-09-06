<br> <br> <br> <br>
<?php
        
        if(isset($_SESSION['id'])&&($_SESSION['id']>0)){
            $u = new user();
            $user = $u->getInfoById($_SESSION['id']);
        }
    ?> 
        <form  action="index.php?act=dangky"  method="post" style="width: 500px;margin-left: 600px; margin-top: 100px;">
        <div class="form-group row" >
            <label style="max-width: 440px;margin:0px auto" style="color:red;" for="user_phone" class=" alert-info"><?php echo $err?></label>
           
        </div>
        <div class="form-group">
            <h1  style="text-align:center" class="text-primary">ĐĂNG KÝ TÀI KHOẢN</h1>
            <p>
                <label class="text-primary">Họ Và Tên:</label><br>
                <input  class="form-control" type="text" name="name"pattern="((?=.*[a-z])(?=.*[A-Z]).{3,}"required value="<?php if(isset($name)==true) echo $name ?>">
            </p>
            <p>
                <label class="text-primary"> Số Điện Thoại:</label><br>
                <input  class="form-control" type="text" name="sdt" minlength="10" title="SĐT phải có 10 ký tự số" pattern="[0-9]{10,11}"required value="<?php if(isset($sdt)==true) echo $sdt ?>">
                <em class="text-danger"><?php echo $errsdt ?></em>

            </p>
            <p>
                <label class="text-primary">Email:</label><br>
                <input  class="form-control" type="text" name="email" pattern=".+@gmail.com" size="30" placeholder="Ex:Name@gmail.com" required title="Hãy nhập đúng Email - Ex:Name@gmail.com" value="<?php if(isset($email)==true) echo $email ?>">   
            </p>
          
            <p>
                <label class="text-primary">Mật Khẩu:</label><br>
                <input  class="form-control" type="password" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"required title="Mật khẩu phải có ít nhất 1 ký tự hoa, thường và số" minlength="8" size="20" required value="<?php if(isset($pass)==true) echo $pass ?>">
            </p>    
            <p>
                <label class="text-primary">Nhập Lại Mật Khẩu:</label><br>
                <input  class="form-control" type="password" name="rpass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"required title="Mật khẩu phải có ít nhất 1 ký tự hoa, thường và số" minlength="8" size="20" required>
            </p>    
             <p>
                <label class="text-primary">Loại tài khoản:</label><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <input  type="radio" name="role" value="user" checked>Tìm kiếm  &nbsp;&nbsp;&nbsp;&nbsp;
                <input   type="radio" name="role" value="shop" > Chính chủ đăng tin  
            </p>     
            <p>
                <input  class="btn btn-primary" type="submit" value="Đăng Ký" name="dangky"><br>
                <a href="index.php?act=login">Đăng nhập</a>
            </p>
          
            </div>
        </form>
<link rel="stylesheet" href="https://cd
n.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrit
y="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">