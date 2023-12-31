<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.box_items {
    float: left; /* hoặc sử dụng display: inline-block; */
    margin-right: 20px; /* tùy chỉnh khoảng cách giữa các sản phẩm */
    margin-left: 10px;
    height: 414px;
    width: 290px;
    border-radius: 20px;
    border: 1px solid #e0e0e6;
    background-color: #F8F8FF;
    
    }
    .banner2{
        text-align: center;
        margin-bottom: 100px;
        margin-top: 100px;
        }
    .tintucmoinhat-title{
        margin-top: 100px;
    }
    .banner img{
        height: 550px;
        width: 100%;
        margin-top: 78px;
        } 
    .pre, .next{
        cursor:pointer;
        position:absolute;
        top:50%;
        width:auto;
        padding:16px;
        color:white;
        font-weight:bold;
        font-size:18px;
        transition:0.6s ease-in-out;
        border-radius:0 3px 3px 0;
        border:none;
        
    }
    .pre:hover, .next:hover{
        background-color:rgba(0,0,0,0.8);
    }
    .next{
        right:0;
        border-radius:3px 0 0 3px;
    }
    .pre{
        left:0;
        border-radius:0 3px 3px 0;
    }
</style>
<body>
 
<div class="banner">
    <img id="banner" src="./img/anh0.jpg" alt="loii">
    <button class="pre" onclick="pre()">&#10094;</button>
    <button class="next" onclick="next()">&#10095;</button>
    </div>
</div>
</div>
<main>
        <!-- bắt đầu sản phẩm bán chạy -->
         <div class="sanphambanchay">
                <div class="sanphambanchay-title">
                    <h2># Sản phẩm bán chạy</h2>
                    <p>Top những sản phẩm được mua nhiều nhất</p>
                </div>
                <div class="sanphambanchay-product">
                        <div class="sanphambanchay-product-top">                          
                                <?php
                                   $i = 0;
                                   foreach ($sp_banchay as $sp) {
                                       extract($sp);
                                       $hinh = $img_path . $img;
                                       $linksp = "index.php?act=sanphamct&idsp=" . $id;
                                   
                                       // Xác định biến $mr dựa trên chỉ số $i
                                       $mr = ($i % 4 == 1 || $i % 4 == 0) ? "" : "mr";
                                   
                                       echo '<div class="box_items ' . $mr . '">
                                       <a href="' . $linksp . '"><img src="' . $hinh . '" alt="" width=200></a>
                                               <div class="sub">
                                                   <h2>' . $name . '</h2>
                                                   <p>' .number_format($price, 0, ',', '.'). ' VND</p>
                                                   <p style="color: blue;">Lượt xem: '.$luotxem.'</p>
                                               </div>
                                               <div class="content-button">
                                                   <a href="' . $linksp . '"><button>Xem Chi Tiết</button></a>
                                               </div>
                                               <div class="row btn_addtocart"> 
                                               <form action="index.php?act=addtocart" method="post">
                                                <input type="hidden" name="id" value="'.$id.'">
                                                <input type="hidden" name="name" value="'.$name.'">
                                                <input type="hidden" name="img" value="'.$img.'">
                                                <input type="hidden" name="price" value="'.$price.'">
                                                <input class="addcart" type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                                               </form>
                                                </div>
                                               </div>';                                  
                                       $i += 1;                                
                                       // Kiểm tra khi nào bắt đầu hàng mới
                                       if ($i % 4 == 0 && $i < count($sp_banchay)) {
                                       }
                                   
                                       if ($i >= 8) {
                                           break; // Dừng vòng lặp sau khi đã hiển thị 8 sản phẩm
                                       }
                                   }                    
                                ?>                          
                        </div>
                </div>
         </div>
        <!-- end sản phẩm bán chạy -->
         <div class="banner2"><img src="img/banner2.jpg" alt=""></div>

        <!-- bắt đầu sản phẩm mới về -->
        <div class="sanphammoive">
            <div class="sanphammoive-title">
                <h2># Sản phẩm mới về</h2>
                <p>Những sản phẩm mới nhất được shop nhập về phục vụ tín đồ</p>
            </div>
            <div class="sanphammoive-product">
                    <div class="sanphammoive-product-top">
                    <?php
                                   $i = 0;
                                   foreach ($sp_new as $sp) {
                                       extract($sp);
                                       $hinh = $img_path . $img;
                                       $linksp = "index.php?act=sanphamct&idsp=" . $id;
                                   
                                       // Xác định biến $mr dựa trên chỉ số $i
                                       $mr = ($i % 4 == 1 || $i % 4 == 0) ? "" : "mr";
                                   
                                       echo '<div class="box_items ' . $mr . '">
                                               <img src="' . $hinh . '" alt="" width=200>
                                               <div class="sub">
                                                   <h2>' . $name . '</h2>
                                                   <p>' .number_format($price, 0, ',', '.'). ' VND</p>
                                                   <p style="color: blue;">Lượt xem: '.$luotxem.'</p>
                                               </div>
                                               <div class="content-button">
                                                   <a href="' . $linksp . '"><button>Xem Chi Tiết</button></a>
                                               </div>   
                                               <div class="row btnaddtocart"> 
                                               <form action="index.php?act=addtocart" method="post">
                                                <input type="hidden" name="id" value="'.$id.'">
                                                <input type="hidden" name="name" value="'.$name.'">
                                                <input type="hidden" name="img" value="'.$img.'">
                                                <input type="hidden" name="price" value="'.$price.'">
                                                <input class="addcart" type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                                               </form>
                                            </div>                               
                                               </div>';                                  
                                       $i += 1;                                
                                       // Kiểm tra khi nào bắt đầu hàng mới
                                       if ($i % 4 == 0 && $i < count($sp_banchay)) {
                                       }
                                   
                                       if ($i >= 8) {
                                           break; // Dừng vòng lặp sau khi đã hiển thị 8 sản phẩm
                                       }
                                   }                    
                                ?>                            
                    </div>

            </div>
     </div>
    </main>
    <!-- bắt đầu tin tức mới nhất -->
<div class="tintucmoinhat-title">
            <h2># Tin mới nhất</h2>
            <p>Nơi cập nhật những xu hướng thời trang mới nhất cho bạn</p>
        </div>

    <div class="tintucmoinhat">
        <div class="tintucmoinhat-left">
             <div class="tintucmoinhat-img">
                <img src="img/3.png" alt="" width="580">
             </div>
             <div class="tintucmoinhat-content">
                <h2>Giới trẻ Việt rộ mốt đi dép cá rô phi</h2>
                <p>22/10/2019</p>
                <div class="line"></div>
                <p>Trào lưu của giới trẻ thường bất ngờ xuất hiện mà chẳng cần lý do. <br>
                    Một bài hát, một câu nói, thậm chí một chiếc áo… cũng có thể trở <br>
                    thành xu hướng. Mới đây, ảnh chụp đôi dép nhựa màu xanh,...</p>
             </div>
        </div>

        <div class="tintucmoinhat-right">
            <div class="tintucmoinhat-right-top">
                <div class="tintucmoinhat-content-right">
                    <img src="img/tinmoi1.jpg" alt="" width="250" height="230">
                    <h2>Chọn giày dép lúc nào cũng vừa in chân</h2>
                    <p>22/10/2019</p>
                    <div class="line"></div>
                </div>
                <div class="tintucmoinhat-content-right">
                    <img src="img/anh3.jpg" alt="" width="250" height="230">
                    <h2>Chọn giày dép lúc nào cũng vừa in chân</h2>
                    <p>22/10/2019</p>
                    <div class="line"></div>
                </div>
            </div>
            <div class="tintucmoinhat-right-bottom">
                <div class="tintucmoinhat-content-right">
                    <img src="img/anh2.jpg" alt="" width="250" height="230">
                    <h2>Chọn giày dép lúc nào cũng vừa in chân</h2>
                    <p>22/10/2019</p>
                    <div class="line"></div>
                </div>
                <div class="tintucmoinhat-content-right">
                    <img src="img/tinmoi.jpg" alt="" width="250" height="230">
                    <h2>Chọn giày dép lúc nào cũng vừa in chân</h2>
                    <p>22/10/2019</p>
                    <div class="line"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- hết tin tức mới nhất -->

       
</body>
</html>