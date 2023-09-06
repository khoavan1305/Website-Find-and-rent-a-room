<?php
    class danhmuc extends connect{
        private $tendm = null;

         function getallDm() 
            { 
                $sql = "select * from tbl_danhmuc ";
                $kq=parent::getall($sql);
                return $kq;
            }   
            
           
       
              
             
    }


?>