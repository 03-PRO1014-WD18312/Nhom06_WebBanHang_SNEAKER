<?php
if(isset($_SESSION['user'])){
    extract($_SESSION['user']);
 if($role == 1){
?>
<h1>xin chào đây là trang admin</h1>

<a href="../index.php"><input class="btn btn-primary" type="button" value="Thoát"></a>
<?php }}else{
       echo "Bạn không có quyền đăng nhập admin";
       header('location:../index.php');
    } ?>
