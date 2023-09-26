<?php
include "view/header.php";
if (isset($_GET['act']) && $_GET['act']!= "") {
    // nếu như phải có act trên url thì tôi mới nhảy vào đây
   $act =  $_GET['act'];
   switch ($act) {
       case 'sanphamct':
           include "view/chitietsanpham.php";
        break;
   }
} else {
    include "view/home.php";
}
//include "view/chitietsanpham.php";
include "view/footer.php";
//
?>

