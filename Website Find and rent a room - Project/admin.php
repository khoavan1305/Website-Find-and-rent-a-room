<?php    
    session_start();
    ob_start();
    if(isset($_SESSION['role'])&&($_SESSION['role']=="admin")){

    include "model/connect.php";
    include "model/user.php";
    include "model/baidang.php";

    $bd = new baidang();
    $tk = new user();
    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act) {
            //show bài đăng

            case 'qlbaidang':
                $showallbd = $bd->getBaidang() ;
                include "admin/qlbaidang.php";
                break;

                //del bài đăng

            case 'deletebd':
                if($_GET['id']){
                    $id=$_GET['id'];
                    $bd->deletebd($id);
                }
                $showallbd = $bd->getBaidang() ;
                include "admin/qlbaidang.php";
                break;

                //show tài khoản

            case 'qltaikhoan':
                $showalltk = $tk->getUsers() ;
                include "admin/qltaikhoan.php";
                break;

                //del tài khoản

            case 'deletetk':
                if($_GET['id']){
                    $id=$_GET['id'];
                    $tk->deleteUser($id);
                }
                $showalltk = $tk->getUsers() ;
                include "admin/qltaikhoan.php";
                break;
            case 'updatetk':
                
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $getkq=$tk->getInfoById($id);
                    include "admin/updatetk.php"; 
                }
                if(isset($_POST['update'])&&($_POST['update'])){
                    $id=$_POST['id'];
                    $name=$_POST['name'];
                    $sdt=$_POST['sdt'];
                    $email=$_POST['email'];
                    $pass=$_POST['pass'];
                    $role=$_POST['role'];
                $update = $tk->updateUser($id,$name,$sdt,$email,$pass,$role);
                    $showalltk=$tk->getUsers() ;
                    include "admin/qltaikhoan.php";
                }
                break;
            default:
                include "view/login.php";
                break;
        }
    }else{
        include "admin/home.php";
      }

    include "./admin/header.php";
    include "./admin/footer.php";
    }else{
        header('location:index.php');
    }
?>