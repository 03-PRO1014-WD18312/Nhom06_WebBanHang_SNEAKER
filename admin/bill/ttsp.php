<?php
  if(is_array($sp)){
    extract($sp);
}
if(isset($_SESSION['user'])){
    extract($_SESSION['user']);
 if($role == 1){
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Quản lý sản phẩm</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
<style>
    table{
        border: 1px solid black;
        width: 1000px;
        text-align: center;
    }
    table tr td{
        border: 1px solid #DDDFCC;
    }
    table tr th{
        border: 1px solid black;
    }
    table tr th{
 height: 50px;
 border: 1px solid #DDDFCC;
 background-color: #FFFFCC;
}
table tr td{
  background-color: #FFFFFF;
}
</style>
</head>
<body>
<div class="container mt-5">
            <h2 class="mb-4">Đơn Hàng</h2>
        <div class="row2 form_content ">
            <table>
                <tr>
                    <th>Mã SP</th>
                    <th>ẢNH</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>SỐ LƯỢNG</th>
                    <th>GIÁ</th>
                </tr>
            <?php
                foreach ($sp as $sp) {
                    extract($sp);
                    $hinhsp= "../upload/".$img;
                    if (is_file($hinhsp)) {
                    $hinhsp = "<img src= '" .$hinhsp."'width = '100px' height ='100px'>";
                }else{
                    $hinhsp = "No file image!"; 
                }
                    echo ' <tr>
                    <td>'.$idpro.'</td>
                    <td>'.$hinhsp.'</td>
                    <td>'.$name.'</td>
                    <td>'.$soluong.'</td>
                    <td>'.number_format($price, 0, ',', '.'). ' VND</td>
                </tr>';
                }
                
                ?>
            </table>
            <a href="index.php?act=listbill">Quay lại bill</a>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
<?php }}else{
       echo "Bạn không có quyền đăng nhập admin";
       header('location:../index.php');
    } ?>