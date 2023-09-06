<?php
    class user extends connect{
        //Khởi tạo thuộc tính cho lớp users
           
        private $name = null;
        private $sdt = null;
        private $email = null;
        private $pass = null;
        private $role = null;
     
            
      
         //Khai báo phương thức lấy danh sách user
            function getUsers() 
            { 
                $sql = "select * from tbl_user order by id desc";
                $kq=parent::getall($sql);
                return $kq;
            }   
            
         //  Khai báo phương thức lấy thông tin tài khoản đăng nhập
          function checklogin($sdt,$pass)
          {
             $sql = "select * from tbl_user where sdt='".$sdt."' and pass='".$pass."'";
             $kq = parent::getone($sql);
             return $kq;
          } 
         //Khai báo phương thức lấy thông tin tài khoản đăng nhập 
            function getInfoById($id)
             {
                $sql = "SELECT * FROM tbl_user WHERE id='".$id."'";
                $kq = parent::getone($sql);
                return $kq;
             }  
             
         //  Khai báo phương thức đăng ký tài khoản
             function insertUser($name,$sdt,$email,$pass,$role)
              { 
                $sql = "INSERT INTO tbl_user(name,sdt,email,pass,role) VALUES ('$name','$sdt','$email','$pass','$role')";
                parent::exec($sql);
              }   
             function insertsodu($sodu)
              { 
                $sql = "INSERT INTO tbl_user(sodu) VALUES ('$sodu')";
                parent::exec($sql);
              }   
             
         //   Khai báo phương thức chỉnh sửa tài khoản
            function updateUser($id,$name,$sdt,$email,$pass,$role)
             { 
                $sql = "UPDATE tbl_user SET id='$id', name='$name',sdt='$sdt',email='$email',pass='$pass',role='$role' WHERE id='$id'";
                parent::exec($sql);
             }
            function updateSodu($id,$sodu)
             { 
                $sql = "UPDATE tbl_user SET id='$id', sodu='$sodu' WHERE id='$id'";
                parent::exec($sql);
             }
            function updateShop($id,$name,$sdt,$email)
             { 
                $sql = "UPDATE tbl_user SET id='$id', name='$name',sdt='$sdt',email='$email' WHERE id='$id'";
                parent::exec($sql);
             }
            function updatemk($sdt,$pass)
             { 
                $sql = "UPDATE tbl_user SET sdt='$sdt',pass='$pass' WHERE sdt='$sdt'";
                parent::exec($sql);
             }
            
           
              //Khai báo phương thức xoá tài khoản
            function deleteUser($id)
             {
                $sql = "delete from tbl_user where id = '$id'";
                parent::exec($sql);
             }
             
    }



?>