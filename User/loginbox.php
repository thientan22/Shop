<?php
    include("./assets/php/user/name.php");
    if(is_null($value_user))
    {
        echo $value_user;
        echo "
        <div class='bar-button__container user-login box'>
            <div class='category__items user-login box'>
            <div class='category__items-content box user-login'>
                    <div style='padding: 12px;'>
                        <h5><i class='fas fa-user'></i>Bạn chưa đăng nhập</h5>
                    </div>
                <div class='box' style='padding: 12px; width: 100%; justify-content: center;'>
                    <a href=login.html><button style='margin: 0px 4px; border: none; padding: 8px;'>Đăng nhập</button></a>
                    <button style='margin: 0px 4px; border: none; padding: 8px;'>Đăng kí</button>
                </div>
                </div>
            </div>
        </div>
        ";
    }
    else
    {
        echo "
        <div class='bar-button__container user-logout box'>
            <div class='category__items user-logout box' style='align-content: flex-start;'>
            <div class='user-logout__content'>
                    <div class='user-logout__header box'>
                        <div class='user-logout__image' style='background-image: url(./assets/img/user-logout.jpg);'></div>
                        <div class='user-logout__name'>".name()."
                        </div>
                        <button>Đăng xuất</button>
                    </div>
                <div class='user-logout__container'>
                    <div class='logout-container__content'>
                        <h4>Địa chỉ giao hàng</h4>
                        <h3 style='color: red;'>Hẻm 70/20, Trần Hưng Đạo, Ninh Kiều , Cần Thơ</h3>
                    </div>
                    <div class='logout-container__content'>
                        <h4>Số lượng giao dịch</h4>
                        <h3>120 đơn hàng</h3>
                    </div>
                    <div class='logout-container__content'>
                        <h4>Đơn hàng chờ vận chuyển</h4>
                        <h3>5 đang vận chuyển, 4 đang giao hàng</h3>
                    </div>
                </div>
                </div>
            </div>
        </div>
        ";
    }
?>

