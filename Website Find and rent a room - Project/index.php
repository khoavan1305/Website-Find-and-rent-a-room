<?php
    session_start();
    include "model/connect.php";
    include "model/user.php";
    include "model/baidang.php";
    include "model/danhmuc.php";
    $bd = new baidang();
    $showbd = $bd->getBaidang(0);
    $showbdbt = $bd->getBaidang(1);
    $dm = new danhmuc();
    $dsdm = $dm->getallDm();
    $update = new user();
    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act) {
          case 'login': 
            $err = "";
            $login = new user();
            if(isset($_POST['dangnhap']) && $_POST['dangnhap']){
                $sdt=$_POST['sdt'];
                $pass=$_POST['pass'];
                $infouser=$login->checklogin($sdt,$pass);
                    $_SESSION['id']=$infouser['id'];
                    $_SESSION['role']=$infouser['role'];
                    $_SESSION['pass']=$infouser['pass'];
                    if($_SESSION['role']=='shop'){
                      header('Location: index.php');
                    }else if($_SESSION['role']=='user'){
                      header('Location: index.php');
                    }
                    else if($_SESSION['role']=='admin'){
                      header('Location: admin.php');
                    }
                    else{
                    header('Location: index.php?act=login');
                  }          
          }   
            include "view/login.php";
            break;
          case 'dangky':
            $err = "";
            $errname="";$errsdt="";$errpass="";$erremail="";$errrpass="";
            $dangky = new user();
          if(isset($_POST['dangky']) && $_POST['dangky']){
              $name=$_POST['name'];
              $sdt=$_POST['sdt'];
              $pass=$_POST['pass'];
              $rpass=$_POST['rpass'];
              $email=$_POST['email'];
              $role=$_POST['role'];
            if(empty($name)){
                $err.="Bạn chưa nhập name<br>";
            }
            if(empty($sdt)){
                $err.="Bạn chưa nhập sdt<br>";
            }
            if(empty($pass)){
                $err.="Bạn chưa nhập password<br>";
            }
            if(empty($email)){
                $err.="Bạn chưa nhập email<br>";
            }
            if($pass != $rpass){
                $err.="mật khẩu nhập lại k đúng<br>";
            }
            if(empty($err)){
             $dangky->insertUser($name,$sdt,$email,$pass,$role);
              header('Location: index.php?act=login');
             }
          }
              include "view/dangky.php";
              break;
          case 'updatetk':
            include "view/updatetk.php";
            $update = new user();
            if(isset($_POST['update']) && $_POST['update']){
            $id=$_POST['id'];
            $name=$_POST['name'];
            $sdt=$_POST['sdt'];
            $pass=$_POST['pass'];
            $email=$_POST['email'];
            $role=$_POST['role'];  
            $update->updateUser($id,$name,$sdt,$email,$pass,$role);
            $_SESSION['role']=$role;
            if(($_SESSION['role']=='shop')){
              header('location:index.php?act=quanlybaidang');
            }else{
              header('location:index.php');
            }
            }
            break;
          case 'updatetkshop':
            if(isset($_POST['capnhat']) && $_POST['capnhat']){
            $id=$_POST['id'];
            $name=$_POST['name'];
            $sdt=$_POST['sdt'];
            $email=$_POST['email'];
            $capnhat = new user();
            $capnhat->updateShop($id,$name,$sdt,$email);
            }
            include "view/shop/capnhattt.php";
            break;
          case 'quanlybaidang':
            if(isset($_GET['id'])&&($_GET['id']>0)){
              $id=$_GET['id'];
              $dsbd = $bd->getBaidangForIduser($id);
          }
            if(isset($_SESSION['role'])&&($_SESSION['role']=='shop')){
              
              include "view/shop/quanlybaidang.php";
            }else{
              header('location:index.php?act=updatetk');
            }
            break;
          case 'thoat':
            session_destroy();
            header('Location: index.php');
            break;
          case 'baidang':
            $err = "";
            $baidang = new baidang();
            $us = new user();
            if(isset($_POST['dangtin']) && $_POST['dangtin']){
              $iddm = $_POST['iddm'];
              $iduser = $_POST['iduser'];
              $tinh = $_POST['tinh'];
              $huyen = $_POST['huyen'];
              $xa = $_POST['xa'];
              $sonha = $_POST['sonha'];
              $adress = $_POST['adress'];
              $rolebaidang = $_POST['rolebaidang'];
              $tieude = $_POST['tieude'];
              $noidung = $_POST['noidung'];
              $giathue = $_POST['giathue'];
              $dientich = $_POST['dientich'];
              $doituong = $_POST['doituong'];
              $tennd = $_POST['tennd'];
              $lienhe = $_POST['lienhe'];
              $rolegoi = $_POST['rolegoi'];
              $sodu = $_POST['sodu'];
              $target_dir = "upload/";
              $target_file = $target_dir . basename($_FILES["img"]["name"]);
              $img=$target_file;
              $uploadOk = 1;
              $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
              // Allow certain file formats
              if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
              && $imageFileType != "gif" ) {
              // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
              $uploadOk = 0;
              }
              move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
              if($iddm == 1){
                $rolebaidang ="Cho thuê phòng trọ";
              }
              if($iddm == 2){
                $rolebaidang ="Cho thuê nhà nguyên căn";
              }
              if($iddm == 3){
                $rolebaidang ="Cho thuê căn hộ";
              }
              if($iddm == 4){
                $rolebaidang ="Cho thuê căn hộ mini";
              }
              if($iddm == 6){
                $rolebaidang ="Cho thuê căn hộ dịch vụ";
              }
              if($iddm == 7){
                $rolebaidang ="Cho thuê mặt bằng";
              }
              if($iddm == 8){
                $rolebaidang ="Tìm người ở ghép";
              }
            if($rolegoi == "Gói tin VIP" && $sodu >= 15000){
                $err ="";
              $sodu = $sodu - 15000;
              $baidang->insertBaidang($iddm,$iduser,$tinh,$huyen,$xa,$sonha,$adress,$rolebaidang,
              $tieude,$noidung,$giathue,$dientich,$doituong,$img,$tennd,$lienhe,$rolegoi);
              $update->updateSodu($iduser,$sodu);
            }
            else if($rolegoi == "Gói tin thường" && $sodu >= 5000){
              $err ="";
              $sodu = $sodu - 5000;
              $baidang->insertBaidang($iddm,$iduser,$tinh,$huyen,$xa,$sonha,$adress,$rolebaidang,
              $tieude,$noidung,$giathue,$dientich,$doituong,$img,$tennd,$lienhe,$rolegoi);
              $update->updateSodu($iduser,$sodu);
            }
            else{
              $err = 'Số dư bạn không đủ để đăng bài';
            }
            }
            include "view/shop/baidang.php";
            break;
          case 'capnhattt':
    
            include "view/shop/capnhattt.php";
            break;
          case 'doimatkhau':
            $loi="";
            $dmk = new user();
            $login = new user();
            if(isset($_POST['dmk'])&&($_POST['dmk'])){
              $id=$_POST['id'];
              $pass=$_POST['pass'];
              $newpass=$_POST['newpass'];
              $rnewpass=$_POST['rnewpass'];
              $sdt=$_POST['sdt'];
              $infouser=$login->checklogin($sdt,$pass);
              $_SESSION['pass']=$infouser['pass'];
              if(  $_SESSION['pass']!= $pass ){$loi.="Mật khẩu cũ sai rồi <br>";}
              else if(strlen($newpass)<6){$loi.="Mật khẩu mới ngắn quá <br>";}
             else if($newpass!=$rnewpass){$loi.="Nhập lại mật khẩu không đúng <br>";}
              else{
                $pass = $newpass;
                $dmk->updatemk($sdt,$pass);
                $loi="Đổi mk thành công";
              }
            }
            include "view/shop/doimatkhau.php";
            break;
            case'chitietroom':
              $baidang = new baidang();
              if(isset($_GET['id'])){
                $id = $_GET['id'];
                $getid = $baidang->getInfoByIdbaidang($id);
                $getiddm = $getid['iddm'];
                $dsbd = $bd->getBaidangForDm($getiddm);
                $_SESSION['id'] = $getid['id'];
              }
              include "view/chitietroom.php";
            break;
            case'danhmuc':
              if(isset($_GET['id'])&&($_GET['id']>0)){
                $id=$_GET['id'];
                $dsbd = $bd->getBaidangForDm($id);
            }
            include "view/baidangdm.php";
            break;
            case'bdgia':
            if(isset($_GET['id'])&&($_GET['id']>0)){
              $id=$_GET['id'];
              $dsbd = $bd->getBaidangForGia($id);
            }
            include "view/baidanggia.php";
            break;
            case'bddientich':
            if(isset($_GET['id'])&&($_GET['id']>0)){
              $id=$_GET['id'];
              $dsbd = $bd->getBaidangForDienTich($id);
            }
            include "view/baidangdt.php";
            break;
            case'seach':
            if(isset($_POST['kyw'])&&($_POST['kyw']) != ""){
              $kyw = $_POST['kyw'];
              $dsbd = $bd->seachbd($kyw); 
            }else{
              $kyw = "";
              include "view/home.php";
              break;  
            }
            include "view/seachbd.php";
            break;
            case 'deletebd':
              if(isset($_GET['id'])&&($_GET['id']>0)){
                $id=$_GET['id'];
                $bd->deletebd($id); 
            }
            header('Location: index.php');
            break;
          default:
          include "view/login.php";
          break;
        }
      }else{
        include "view/home.php";
      }
    include "view/header.php";
    include "view/footer.php";
?>