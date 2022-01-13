<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ShopTT</title>
        <?php include("./assets/php/main.php"); ?>
        <link rel="stylesheet" href="./assets/style/main.css">
        <link rel="stylesheet" href="./assets/style/reset.css">
        <script  type = "text/javascript"src="./assets/javascript/main.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    </head>
    <body>
        <div id="main" class="main__webstorm box">
                <div class="backgroundimage" style="background-image: url(https://wallpapershome.com/images/pages/pic_h/23683.jpeg);"></div>
                <div class="header__navigation-column box">
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
                                <a class="box" href="login.html"><i class="far fa-user-circle"></i><h5>Tài khoản</h5></a>
                                <?php
                                    loginbox();
                                ?>
                            </div>
                        </li>
                        <li>
                            <div class="list__bar-button">
                            <a class="box" href=""><i class="fas fa-shopping-basket"></i><h5>Giỏ hàng</h5></a>
                                <div class="bar-button__container box">
                                    <div class="category__items box">
                                        <div class="cart-name">
                                            Giỏ hàng
                                        </div>
                                        <div class="cart-content">
                                            <ul>
                                                <li class="box"><div class="cart-image" style="background-image: url(./assets/img/cart-icon.jpg);"></div><div class="cart-info-product"><h3>Name</h3><h5>Thongtin</h5><h2>Gias</h2></div><button>Xóa</button></li>
                                                <li class="box"><div class="cart-image" style="background-image: url(./assets/img/cart-icon.jpg);"></div><div class="cart-info-product"><h3>Name</h3><h5>Thongtin</h5><h2>Gias</h2></div><button>Xóa</button></li>
                                                <li class="box"><div class="cart-image" style="background-image: url(./assets/img/cart-icon.jpg);"></div><div class="cart-info-product"><h3>Name</h3><h5>Thongtin</h5><h2>Gias</h2></div><button>Xóa</button></li>
                                                <li class="box"><div class="cart-image" style="background-image: url(./assets/img/cart-icon.jpg);"></div><div class="cart-info-product"><h3>Name</h3><h5>Thongtin</h5><h2>Gias</h2></div><button>Xóa</button></li>
                                                <li class="box"><div class="cart-image" style="background-image: url(./assets/img/cart-icon.jpg);"></div><div class="cart-info-product"><h3>Name</h3><h5>Thongtin</h5><h2>Gias</h2></div><button>Xóa</button></li>
                                                <li class="box"><div class="cart-image" style="background-image: url(./assets/img/cart-icon.jpg);"></div><div class="cart-info-product"><h3>Name</h3><h5>Thongtin</h5><h2>Gias</h2></div><button>Xóa</button></li>
                                                <li class="box"><div class="cart-image" style="background-image: url(./assets/img/cart-icon.jpg);"></div><div class="cart-info-product"><h3>Name</h3><h5>Thongtin</h5><h2>Gias</h2></div><button>Xóa</button></li>
                                            </ul>
                                            <div class="cart-sum box">
                                                <div class="cart-sum-name">
                                                    Tổng tiền
                                                </div>
                                                <div class="cart-sum-value">10.000.000 đ</div>
                                                <button>Thanh toán</button>
                                            </div>
                                        </div>
                                        </div>
                                </div>
                            </div>
                            </li>
                        <li>
                            <div class="list__bar-button">
                                <a class="box" href=""><i class="fas fa-star"></i><h5>Yêu thích</h5></a>
                                    <div class="bar-button__container box">
                                        <div class="category__items box">
                                        <div class="category__items-content box">
                                                Tính năng đang phát triển
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            </li>
                        <li>
                            <div class="list__bar-button">
                                <a class="box" href=""><i class="fas fa-history"></i><h5>Đã xem</h5></a>
                                    <div class="bar-button__container box">
                                        <div class="category__items box">
                                        <div class="category__items-content box">
                                                Tính năng đang phát triển
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            </li>
                        <li>
                            <div class="list__bar-button">
                                <a class="box" href=""><i class="fas fa-tag"></i><h5>Mã giảm giá</h5></a>
                                    <div class="bar-button__container box">
                                        <div class="category__items box">
                                        <div class="category__items-content box">
                                                Tính năng đang phát triển
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            </li>
                        <li>
                            <div class="list__bar-button">
                                <a class="box" href=""><i class="far fa-question-circle"></i><h5>Trợ giúp</h5></a>
                                    <div class="bar-button__container box">
                                        <div class="category__items box">
                                        <div class="category__items-content box">
                                                Tính năng đang phát triển
                                            </div>
                                        </div>
                                    </div>
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
                            <input style="text" placeholder="Tìm kiếm sản phẩm..."/>
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
                <div class="list-suggest box">
                    <ul class="box">
                        <li>Thịt, rau củ</li>
                        <li>Bách hóa</li>
                        <li>Nhà cửa</li>
                        <li>Thiết bị số</li>
                        <li>Điện thoại</li>
                        <li>Mẹ & bé</li>
                        <li>Làm đẹp</li>
                        <li>Gia dụng</li>
                        <li>Thời trang nữ</li>
                        <li>Thời trang nam</li>
                        <li>Giày nữ</li>
                        <li>Giày nam</li>
                        <li>Túi nữ</li>
                    </ul>
                </div>
            <div class="container box">
                <div class="container__sort box">
                    <ul class="sort__list box">
                        <li class="list__title">Sắp xếp theo</li>
                        <li><button>Liên quan</button></li>
                    <li><button>Mới nhất</button></li>
                        <li><button>Bán chạy</button></li>
                        <li><button class="list__expand box">Giá<i class="fas fa-chevron-down"></i></button></li>
                    </ul>
                    <ul class="sort__list box" style="margin-right: 4px;">
                        <li class="list__title">1/100</li>
                        <li style="margin : 0; font-size: 10px;"><button><i class="fas fa-arrow-left"></i></button></li>
                        <li style="margin : 0; margin-left: 1px; font-size: 10px;"><button><i class="fas fa-arrow-right"></i></button></li>
                        </ul>
                </div>
                <div class="container__banner box">
                    <div class="banner banner-slide" onclick = "changeImg()" style="background-image: url(./assets/img/banner1.png);">

                    </div>
                    <div class="banner banner-group">
                        <div class="banner-group-img" style="background-image: url(https://xuonginhanoi.vn/files/banner-web-thang-10-boclinic.jpg);">
                        </div>
                        <div class="banner-group-img" style="background-image: url(https://intphcm.com/data/upload/banner-la-gi.jpg);">
                        </div>
                    </div>
                </div>
                <div class="container__quicklink box">
                    <div class="quicklink__content box">
                        <div class="content__icon" style="background-image: url(https://salt.tikicdn.com/cache/w100/ts/upload/49/76/41/9401676bd87add6dfacd249afbede03f.png.webp);">

                        </div>
                        <div class="content__name box">
                            Bí kíp săn sale
                        </div>
                    </div>
                    <div class="quicklink__content box">
                        <div class="content__icon" style="background-image: url(https://salt.tikicdn.com/cache/w100/ts/upload/a0/0d/90/bab67b6da67117f40538fc54fb2dcb5e.png.webp);">

                        </div>
                        <div class="content__name box">
                            Đi chợ online
                        </div>
                    </div>
                    <div class="quicklink__content box">
                        <div class="content__icon" style="background-image: url(https://salt.tikicdn.com/cache/w100/ts/upload/73/50/e1/83afc85db37c472de60ebef6eceb41a7.png.webp);">

                        </div>
                        <div class="content__name box">
                            Mã giảm giá
                        </div>
                    </div>
                    <div class="quicklink__content box">
                        <div class="content__icon" style="background-image: url(https://salt.tikicdn.com/cache/w100/ts/upload/73/e0/7d/af993bdbf150763f3352ffa79e6a7117.png.webp);">

                        </div>
                        <div class="content__name box">
                            Bí kíp săn sale
                        </div>
                    </div>
                    <div class="quicklink__content box">
                        <div class="content__icon" style="background-image: url(https://salt.tikicdn.com/cache/w100/ts/upload/ce/ee/fe/a8a350727b38a1e20ce1610c5162fcb7.png.webp);">

                        </div>
                        <div class="content__name box">
                            Dịch vụ và tiện ích
                        </div>
                    </div>
                    <div class="quicklink__content box">
                        <div class="content__icon" style="background-image: url(https://salt.tikicdn.com/cache/w100/ts/upload/e4/74/3d/aafbdc961842e88bdc8cfbb08debe4fa.png.webp);">

                        </div>
                        <div class="content__name box">
                            Gói hội viên
                        </div>
                    </div>
                </div>
                <div class="quicklink__content quicklink-banner box">
                    <div class="quicklink-banner__img" style="background-image: url(https://salt.tikicdn.com/cache/w280/ts/banner/98/8d/a5/d7b61c838bed7f6f9462bb643472ef96.png.webp);">

                    </div>
                    <div class="quicklink-banner__img" style="background-image: url(https://salt.tikicdn.com/cache/w280/ts/banner/b2/eb/52/e151c1ccab1fdd4468f928fc3fa3878f.png.webp);">
                    </div>
                    <div class="quicklink-banner__img" style="background-image: url(https://salt.tikicdn.com/cache/w280/ts/banner/8b/08/68/300613b4b7bed35bf28c0d11873e3825.png.webp);">

                    </div>
                    <div class="quicklink-banner__img" style="background-image: url(https://salt.tikicdn.com/cache/w280/ts/banner/9f/51/1d/bcc1d0d50c123aa3d518a7fe9352042d.png.webp);">

                    </div>
                </div>
                <div class="container__brand-static box">
                    <h2 class="brand-static__name box">
                        <div class="icon__name" style="background-image: url(https://salt.tikicdn.com/ts/upload/ab/97/b1/a7c6657740248d396b100bc2330e98b8.png);"></div>
                        Thương hiệu chính hãng
                    </h2>
                    <div class="barnd-static__banner box">
                        <div class="banner"style="background-image: url(https://salt.tikicdn.com/cache/w750/ts/banner/79/fa/0d/8b27bf0c1d4c501ad05902e4749ffd7d.png.webp)">

                        </div>
                        <div class="banner"style="background-image: url(https://salt.tikicdn.com/cache/w750/ts/banner/c8/b4/8a/85016fe948bd5e4efa0b81abc8d2ce2f.jpg.webp)">

                        </div>
                    </div>
                        <div class="barnd-static__slick box">
                            <div class="slick__img" style="background-image: url(https://salt.tikicdn.com/cache/w200/ts/banner/b9/4f/c4/b42e0919ef39b9182f504cbbfebee4a4.png.webp);">

                            </div>
                            <div class="slick__img" style="background-image: url(https://salt.tikicdn.com/cache/w200/ts/banner/b4/e0/21/8b33e8c2895a60b06c066d4484d72af3.png.webp);">

                            </div>
                            <div class="slick__img" style="background-image: url(https://salt.tikicdn.com/cache/w200/ts/banner/a4/ca/74/2e464c83fa143ef0bd696d821055a1cc.png.webp);">

                            </div>
                            <div class="slick__img" style="background-image: url(https://salt.tikicdn.com/cache/w200/ts/banner/a4/ca/74/2e464c83fa143ef0bd696d821055a1cc.png.webp);">

                            </div>
                            <div class="slick__img" style="background-image: url(https://salt.tikicdn.com/cache/w200/ts/banner/26/2e/5f/5b52efea8acd657e557a25c59a7b14ac.png.webp);">

                            </div>
                        </div>
                    </div>
                    <div class="container__quicklink category box">
                    <div class="quicklink__content category-product box">
                        <div class="content__icon" style="background-image: url(https://salt.tikicdn.com/cache/w100/ts/category/a6/9f/45/460fdecbbe0f81da09c7da37aa08f680.png.webp);">

                        </div>
                        <div class="content__name box">
                            Thực phẩm tươi sống
                        </div>
                    </div>
                    <div class="quicklink__content category-product box">
                        <div class="content__icon" style="background-image: url(https://salt.tikicdn.com/cache/w100/ts/product/71/da/f4/d50f23524c524abdb36d15464775fa08.jpg.webp);">

                        </div>
                        <div class="content__name box">
                        Rau củ quả
                        </div>
                    </div>
                    <div class="quicklink__content category-product box">
                        <div class="content__icon" style="background-image: url(https://salt.tikicdn.com/cache/w100/ts/product/d7/75/c3/58598efbae85be1c86f9cb0e54cb021b.jpg.webp);">

                        </div>
                        <div class="content__name box">
                            Giày thể thao
                        </div>
                    </div>
                    <div class="quicklink__content category-product box">
                        <div class="content__icon" style="background-image: url(https://salt.tikicdn.com/cache/w100/ts/product/11/da/a6/96b1edc01800ae8cd3b7db8f983757f6.jpg.webp);">

                        </div>
                        <div class="content__name box">
                            Balo
                        </div>
                    </div>
                    <div class="quicklink__content category-product box">
                        <div class="content__icon" style="background-image: url(https://salt.tikicdn.com/cache/w100/ts/product/7b/c7/d3/76fefb827690701045ce6e2af9c1650d.jpg.webp);">

                        </div>
                        <div class="content__name box">
                            Bàn phím chơi game
                        </div>
                    </div>
                    <div class="quicklink__content category-product box">
                        <div class="content__icon" style="background-image: url(https://salt.tikicdn.com/cache/w100/media/catalog/product/a/_/a.u717.d20160814.t150752.482707.jpg.webp);">

                        </div>
                        <div class="content__name box">
                            Chuột không dây
                        </div>
                    </div>
                    <div class="quicklink__content category-product box">
                        <div class="content__icon" style="background-image: url(https://salt.tikicdn.com/cache/w100/ts/product/81/fb/4c/888176b3245b6bf0ec16513d3f343145.png.webp);">

                        </div>
                        <div class="content__name box">
                            Bàn phím chơi game
                        </div>
                    </div>
                    <div class="quicklink__content category-product box">
                        <div class="content__icon" style="background-image: url(https://salt.tikicdn.com/cache/w100/ts/product/b3/95/fc/70f6724a71608f645d6435ebf5e0039b.jpg.webp);">

                        </div>
                        <div class="content__name box">
                            Chuột văn phòng
                        </div>
                    </div>
                    <div class="quicklink__content category-product box">
                        <div class="content__icon" style="background-image: url(https://salt.tikicdn.com/cache/w100/ts/product/22/cb/a9/524a27dcd45e8a13ae6eecb3dfacba7c.jpg.webp);">

                        </div>
                        <div class="content__name box">
                            Sách tư duy kỹ năng sống
                        </div>
                    </div>
                    <div class="quicklink__content category-product box">
                        <div class="content__icon" style="background-image: url(https://salt.tikicdn.com/cache/w100/ts/product/07/2a/9f/f827733c48227f3779e6c829a4177bf4.jpg.webp);">

                        </div>
                        <div class="content__name box">
                            Nồi chiên
                        </div> 
                    </div>
                    <div class="quicklink__content category-product box">
                        <div class="content__icon" style="background-image: url(https://salt.tikicdn.com/cache/w100/ts/product/08/c5/46/c4533a9d0cafc5dd13c8d985acc75e44.jpg.webp);">

                        </div>
                        <div class="content__name box">
                            Chảo
                        </div>
                    </div>
                </div>
                <div class="box" style="justify-content: left; width: 98%; background-color: var(--items-color); padding-bottom: 24px; margin-top: 12px; box-shadow: 0px 0px 4px rgb(0 0 0 / 5%);">
                    <?php
                        product();
                    ?>
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
    </body>
</html>