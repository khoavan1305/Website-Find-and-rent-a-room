<?php
    class baidang extends connect{
        //Khởi tạo thuộc tính cho lớp users
           
        private $tinh = null;
        private $huyen = null;
        private $xa = null;
        private $sonha = null;
        private $adress = null;
        private $rolebaidang = null;
        private $tieude = null;
        private $noidung = null;
        private $giathue = null;
        private $dientich = null;
        private $doituong = null;
        private $img = null;
        private $tennd = null;
        private $lienhe = null;
        private $iddm = null;
        private $iduser = null;
     
            
      
         //Khai báo phương thức lấy danh sách user
            function getBaidang($rolegoi) 
            { 
                $sql = "SELECT * FROM tbl_baidang  ";
                if($rolegoi=="0"){ $sql.=" WHERE rolegoi LIKE 'g%p' order by id desc limit 5";
                }
                else{
                    $sql.="  WHERE rolegoi LIKE 'g%g' order by id asc limit 3";
                }
                $kq=parent::getall($sql);
                return $kq;
            }   
            function getBaidangForDm($iddm) 
            { 
                $sql = "SELECT * FROM tbl_baidang WHERE 1";
                if($iddm>0){ $sql.=" AND iddm=".$iddm;
                }else{
                    $sql.=" order by id desc LIMIT 1";
                }
                $kq=parent::getall($sql);
                return $kq;
            }   
            function getBaidangForIduser($iduser) 
            { 
                $sql = "SELECT * FROM tbl_baidang WHERE 1";
                if($iduser>0){ $sql.=" AND iduser=".$iduser;
                }else{
                    $sql.=" order by id desc LIMIT 1";
                }
                $kq=parent::getall($sql);
                return $kq;
            }   
            function seachbd($kyw="") 
            { 
                $sql = "SELECT * FROM tbl_baidang WHERE huyen";
                if($kyw!=""){ $sql.=" LIKE '%".$kyw."%'";
                }
                $kq=parent::getall($sql);
                return $kq;
            }  
            function getBaidangForGia($id) 
            { 
                $sql = "SELECT * FROM tbl_baidang WHERE giathue ";
                if($id == 1){
                    $sql.=" BETWEEN 0 AND 1000000";
                }
                if($id == 2){
                    $sql.=" BETWEEN 1000000 AND 2000000";
                }
                if($id == 3){
                    $sql.=" BETWEEN 2000000 AND 3000000";
                }
                if($id == 4){
                    $sql.=" BETWEEN 3000000 AND 5000000";
                }
                if($id == 5){
                    $sql.=" BETWEEN 5000000 AND 7000000";
                }
                if($id == 6){
                    $sql.=" BETWEEN 7000000 AND 10000000";
                }
                if($id == 7){
                    $sql.=" BETWEEN 10000000 AND 15000000";
                }
                if($id == 8){
                    $sql.=" BETWEEN 15000000 AND 10000000000";
                }
               
                $kq=parent::getall($sql);
                return $kq;
            }   
            function getBaidangForDienTich($id) 
            { 
                $sql = "SELECT * FROM tbl_baidang WHERE dientich ";
                if($id == 1){
                    $sql.=" BETWEEN 0 AND 20";
                }
                if($id == 2){
                    $sql.=" BETWEEN 30 AND 50";
                }
                if($id == 3){
                    $sql.=" BETWEEN 70 AND 90";
                }
                if($id == 4){
                    $sql.=" BETWEEN 90 AND 5000000";
                }
                
                $kq=parent::getall($sql);
                return $kq;
            }   
            
            function getInfoByIdbaidang($id)
             {
                $sql = "SELECT * FROM tbl_baidang WHERE id='".$id."'";
                $kq = parent::getone($sql);
                return $kq;
             }  
             
         //  Khai báo phương thức đăng ký tài khoản
             function insertBaidang($iddm,$iduser,$tinh,$huyen,$xa,$sonha,$adress,$rolebaidang,$tieude,$noidung,$giathue,$dientich,$doituong,$img,$tennd,$lienhe,$rolegoi)
              { 
                $sql = "INSERT INTO tbl_baidang(iddm,iduser,tinh,huyen,xa,sonha,adress,rolebaidang,tieude,noidung,giathue,dientich,doituong,img,tennd,lienhe,rolegoi) 
                VALUES ('$iddm','$iduser','$tinh','$huyen','$xa','$sonha','$adress','$rolebaidang','$tieude','$noidung','$giathue','$dientich','$doituong','$img','$tennd','$lienhe','$rolegoi')";
                parent::exec($sql);
              }   
             
              function deletebd($id){
                $sql = "DELETE FROM tbl_baidang WHERE id='$id'";
                parent::exec($sql);
              }
             
    }


?>