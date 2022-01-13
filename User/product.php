<!DOCTYPE html>
<html>
    <head>
        <title>
            San pham
        </title>
        <?php
            include("./assets/php/main.php");
        ?>
        <meta charset="utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="./assets/style/product.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">
    </head>
    <body>
        <div id="main">
            <div class="backgroundimage" style="background-image: url(https://wallpapershome.com/images/pages/pic_h/23683.jpeg)"></div>
            <div class="header__navigation-column">
                <ul class="navigation-column__list box">
                    <li>
                        <div class="list__bar-button">
                            <a class="box"  href=""><i class="fas fa-bars"></i><h5>Danh mục sản phẩm</h5></a>
                             <div class="bar-button__container box">
                                <div class="category__items box">
                                    <?php
                                        listproduct();
                                    ?>
                                </div>
                             </div>
                        </div>
                    </li>
                    <li>
                        <div class="list__bar-button list__bar-user">
                            <a class="box" href=""><i class="far fa-user-circle"></i><h5>Tài khoản</h5></a>
                            <div class="bar-button__container user-login box">
                            <div class="bar-button__container user-logout box">
                                <div class="category__items user-logout box" style="align-content: flex-start;">
                                   <div class="user-logout__content">
                                        <div class="user-logout__header box">
                                            <div class="user-logout__image" style="background-image: url('./assets/img/user-logout.jpg');"></div>
                                            <div class="user-logout__name">Nguyễn Trần Thiên Tân</div>
                                            <button>Đăng xuất</button>
                                        </div>
                                       <div class="user-logout__container">
                                           <div class="logout-container__content">
                                               <h4>Địa chỉ giao hàng</h4>
                                               <h3 style="color: red;">Hẻm 70/20, Trần Hưng Đạo, Ninh Kiều , Cần Thơ</h3>
                                           </div>
                                           <div class="logout-container__content">
                                               <h4>Số lượng giao dịch</h4>
                                               <h3>120 đơn hàng</h3>
                                           </div>
                                           <div class="logout-container__content">
                                               <h4>Đơn hàng chờ vận chuyển</h4>
                                               <h3>5 đang vận chuyển, 4 đang giao hàng</h3>
                                           </div>
                                       </div>
                                    </div>
                                </div>
                             </div>
                        </div>
                    </li>
                    <li>
                        <div class="list__bar-button">
                           <a class="box" href="cart.php?mskh=<?php echo $_GET['mskh']; ?>"><i class="fas fa-shopping-basket"></i><h5>Giỏ hàng</h5></a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="header__navigation-row  box">
                <div class="navigation-row__title box">
                    <h2 class="title__name">Thiên Tân</h2>
                </div>
                <div class="navigation-row__search box">
                    <div class="search__container box">
                        <input placeholder="Tìm kiếm sản phẩm..."/>
                        <div>
                            <div class="select__product-show">
                                <div class="box" style="justify-content: space-between;">
                                     <h5>Tất cả sản phẩm</h5>
                                    <i class="down fas fa-arrow-down"></i>
                                </div>
                                <div class="select__product-hide box">
                                    <a href="">Đồ điện tử</a>
                                    <a href="">Quần áo</a>
                                    <a href="">Thực phẩm</a>
                                </div>
                            </div>
                        </div>
                        <i class="fas fa-search"></i>
                    </div>
                </div>
            </div>
            <div class="container box">
                <div class="product">
                    <div class="box_product">
                        <div>
                            <div class="product_info_sp">
                                <?php
                                    imgproduct();
                                ?>
                                <div class="product_info">
                                    <?php
                                        nameproduct();
                                    ?>
                                    <div class="info-rate">
                                        <i class='fas fa-star'></i>
                                        <i class='fas fa-star'></i>
                                        <i class='fas fa-star'></i>
                                        <i class='fas fa-star'></i>
                                        <i class='fas fa-star'></i>
                                    </div>
                                    
                                    <div class="info-price">
                                        <?php
                                            priceproduct();
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="product-delivery">
                                <div class="delivery-header">Tuỳ chọn giao hàng<div id='boxlo'>Thay đổi địa chỉ</div></div>
                                <ul class="delivery_list">
                                    <li><p><i class="fas fa-map-marker-alt"></i></p><h5>
                                        <?php
                                        $conn = new MySQLi('localhost', 'root', '', 'webstorm');

                                        $sltmskh = "SELECT mskh FROM diachikh";
                                        $rltmskh = MySQLi_query($conn, $sltmskh);

                                        $sltdiachi = "SELECT diachi FROM diachikh";
                                        $rltdiachi = MySQLi_query($conn, $sltdiachi);

                                        while(($valuemskh = $rltmskh->fetch_assoc()) and ($valuediachi = $rltdiachi->fetch_assoc()))
                                        {
                                            if($valuemskh['mskh'] == $_GET['mskh'])
                                            {
                                                echo $valuediachi['diachi'];
                                            }
                                        }
                                        ?>
                                    </h5></li>
                                    <li><p><i class="fas fa-globe-europe"></i></p><h5>Giao hang tu nuoc ngoai</h5></li>
                                    <li><p><i class="fas fa-hourglass"></i></p><h5>Van chuyen nhanh</h5></li>
                                    <li><p><i class="fas fa-money-check-alt"></i></p></i><h5>Thanh toan khi nhan hang</h5></li>
                                </ul>
                            </div>
                        </div>
                        <div class="buy">
                                <div class="buy_head">
                                    <div class="buy-button">Màu<button>Trắng</button><button>Cam</button><Button>Vàng</Button></div>
                                    <div class="buy-button space">Size<button>S</button><button>M</button><Button>L</Button></div>
                                    <div class="buy-button space"><div>Số lượng</div><div class="icon-down">-</div><input type="text" class="quantity" name="" value="1" id=""><div class="icon-up">+</div></div>
                                </div>
                                <div class="buy_container">
                                    <div class="buy_add"><button>Thêm vào giỏ hàng</button></div>
                                    <div class="buy_buy"><button>Mua ngay</button></div>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="info-shop">
                    <div class="shop_img"></div>
                    <div class="shop_name">
                        <div class="name-shop">
                            <h2>Aarron</h2>
                            <h5>Online</h5>
                        </div>
                        <button><i class="fas fa-comments"></i>Chat ngay</button>
                        <button><i class="fas fa-shopping-bag"></i>Xem shop</button>
                    </div>
                    <div class="info-shop_line"></div>
                    <div class="evaluate">
                        <div class="title">Đánh giá<div>273</div></div>
                        <div class="title">Tỉ lệ phản hồi<div>94%</div></div>
                        <div class="title">Tham gia<div>2 năm</div></div>
                        <div class="title">Sản phẩm<div>2173</div></div>
                        <div class="title">Thời gian phản hồi<div>30 phút</div></div>
                        <div class="title">Người theo dõi<div>9,3k</div></div>
                    </div>
                </div>
                <div class="decription">
                    <div class="decription_info">
                        <div class="decription_info_title"><h2>Mô tả sản phẩm</h2></div>
                        <?php
                        decriptionproduct();
                        ?>
                        </div>
                           
                    <div class="decription_key-sale">
                        <h2 class="key-sale_title">Mã giảm giá</h2>
                        <div class="key-sale_container">
                            <div class="key-sale_container_info">
                                <h3>Giảm 20k</h3>
                                <h4>Đơn tối thiểu 800k</h4>
                                <h5>HSD: 15/9/2022</h5>
                            </div>
                            <div class="key-sale_button">
                                <button>Lưu</button>
                            </div>
                        </div>
                        <div class="key-sale_container">
                            <div class="key-sale_container_info">
                                <h3>Giảm 20k</h3>
                                <h4>Đơn tối thiểu 800k</h4>
                                <h5>HSD: 15/9/2022</h5>
                            </div>
                            <div class="key-sale_button">
                                <button>Lưu</button>
                            </div>
                        </div>
                    </div>
                    <div class="img-demo-product">
                        <?php
                            imgprerese();
                        ?>
                    </div>
                </div>
                <div class="rate">
                    <div class="rate_container">
                        <div class="container_show">
                            <h1>5<i class="fas fa-star"></i></h1>
                            <h5>Trong tổng số 260 đánh giá</h5>
                        </div>
                        <div class="container_user-rate">
                            <h4>Đánh giá của bạn</h4>
                            <div class="user-rate_star">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comment">
                    <div style="width: 100%; border-bottom: 1px solid; border-color: rgba(0, 0, 0, 0.1); margin-bottom: 12px;">
                        <div class="comment_user">
                            <div class="img-usr"></div>
                            <div class="inf-usr">
                                <h4>Hoàng Hồ</h4>
                                <div class="rate-usr">
                                    <h5 class="rate_title">Đánh giá</h5>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h5>Loại hàng</h5>
                            </div>
                        </div>
                        <div class="comment_container">
                            <h5>Bình luận</h5>
                            <p>Sản phẩm tốt, rất đẹp</p>
                        </div>  
                    </div>
                    <div style="width: 100%; border-bottom: 1px solid; border-color: rgba(0, 0, 0, 0.1); margin-bottom: 12px;">
                        <div class="comment_user">
                            <div class="img-usr"></div>
                            <div class="inf-usr">
                                <h4>Nguyễn Trần Thiên Tân</h4>
                                <div class="rate-usr">
                                    <h5 class="rate_title">Đánh giá</h5>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h5>Loại hàng</h5>
                            </div>
                        </div>
                        <div class="comment_container">
                            <h5>Bình luận</h5>
                            <p>Cửa hàng uy tín, sẽ tiếp tục ủng hộ</p>
                        </div>  
                    </div>
                    <div style="width: 100%; border-bottom: 1px solid; border-color: rgba(0, 0, 0, 0.1); margin-bottom: 12px;">
                        <div class="comment_user">
                            <div class="img-usr"></div>
                            <div class="inf-usr">
                                <h4>Duy Lê</h4>
                                <div class="rate-usr">
                                    <h5 class="rate_title">Đánh giá</h5>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h5>Loại hàng</h5>
                            </div>
                        </div>
                        <div class="comment_container">
                            <h5>Bình luận</h5>
                            <p>Giao hàng đúng hẹn, hỗ trợ tốt</p>
                        </div>  
                    </div>
                </div>
            </div>
            <div class="footer box">
                <div class="footer-content">
                    <h2>Hỗ trợ khách hàng</h2>
                    <ul class="fotter-content__support-user">
                        <li><h3>Hotline chăm sóc khách hàng: 1900-6035</h3>(1000đ/phút , 8-21h kể cả T7, CN)</li>
                        <li>Gửi yêu cầu hỗ trợ</li>
                        <li>Hướng dẫn đặt hàng</li>
                        <li>Phương thức vận chuyển</li>
                        <li>Chính sách đổi trả</li>
                        <li>Hướng dẫn trả góp</li>
                        <li>Hỗ trợ khách hàng: hotro@tiki.vn</li>
                    </ul>
                </div>
                <div class="footer-content">
                    <h2>VỀ TIKI</h2>
                    <ul class="fotter-content__support-user">
                        <li>Giới thiệu Tiki</li>
                        <li>Tuyển Dụng</li> 
                        <li>Chính sách bảo mật thanh toán</li>
                        <li>Chính sách bảo mật thông tin cá nhân</li>
                        <li>Chính sách giải quyết khiếu nại</li>
                    </ul>
                </div>
                <div class="footer-content">
                    <h2>HỢP TÁC VÀ LIÊN KẾT</h2>
                    <ul class="fotter-content__support-user">
                        <li>Quy chế hoạt động Sàn GDTMĐT</li>
                        <li>Bán hàng cùng Tiki</li>
                    </ul>
                </div>
                <div class="footer-content">
                    <h2>PHƯƠNG THỨC THANH TOÁN</h2>
                    <div class="div-buy box">
                        <div class="img-buy" style="background-image: url(https://frontend.tikicdn.com/_desktop-next/static/img/footer/visa.svg);"></div>
                        <div class="img-buy" style="background-image: url(https://frontend.tikicdn.com/_desktop-next/static/img/footer/mastercard.svg);"></div>
                        <div class="img-buy" style="background-image: url(https://frontend.tikicdn.com/_desktop-next/static/img/footer/jcb.svg);"></div>
                        <div class="img-buy" style="background-image: url(https://frontend.tikicdn.com/_desktop-next/static/img/footer/cash.svg);"></div>
                        <div class="img-buy" style="background-image: url(https://frontend.tikicdn.com/_desktop-next/static/img/footer/internet-banking.svg);"></div>
                        <div class="img-buy" style="background-image: url(https://frontend.tikicdn.com/_desktop-next/static/img/footer/installment.svg);"></div>
                    </div>
                </div>
                <div class="footer-content footer__down box">
                    <h2>TẢI ỨNG DỤNG TRÊN ĐIỆN THOẠI</h2>
                        <div class="footer-content__down download-chplay" style="background-image: url(https://frontend.tikicdn.com/_desktop-next/static/img/icons/appstore.png);"></div>
                        <div class="footer-content__down download-chplay" style="background-image: url(https://frontend.tikicdn.com/_desktop-next/static/img/icons/playstore.png);"></div>
                </div>
        </div>
        </div>
        <div id="boxinputlo" class="boxinputlo acti">
            <input id="location" type="text" placeholder="Nhập địa chỉ mới...">
            <div class="update box">Cập nhật</div>
        </div>
        <div class="temp">
            <input type="text" id ="mskh" value="<?php
            echo $_GET['mskh'];
            ?>">
            <input type="text" id ="masp" value="<?php echo $_GET['masp']; ?>">
        </div>
        <div id="result" class="box"></div>
    </body>
    <script src="./ajax/ajaxproduct.js"></script>
</html>