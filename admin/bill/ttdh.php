<?php
if(isset($_SESSION['user'])){
    extract($_SESSION['user']);
 if($role == 1){

    if(is_array($dh)){
        extract($dh);
    }
?>
<form method="post" action="index.php?act=updatettdh">
     <label for="n">Nhập : <br> 0,Chưa xác nhận <br>1,Đang giao hàng <br> 2,Hoàn tất</label>
     <input type="text" name="n" id="n">
     <input type="submit" value="OK" name="capnhat-tt">
     <input type="hidden" name="id" value="<?php if(isset($id)&&($id > 0)) echo $id ;?>">
 </form>

<!-- Hiển thị giá trị $ttdh -->
 <td><?php echo isset($ttdh_value) ? $ttdh_value : ''; ?></td>

 <?php }}else{
       echo "Bạn không có quyền đăng nhập admin";
       header('location:../index.php');
    } ?>
