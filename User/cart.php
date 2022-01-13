<!DOCTYPE html>
<html>
    <head>
        <title>Cart</title>
        <meta charset="utf-8">
        <script src="./assets/ajax/jscart.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="./assets/style/cart.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">
    </head>
    <body>
        <div id="main" class="box">
            <div class="backgroundimage" style="background-image: url(./assets/img/backgroundcart.png)"></div>
            <div class="container box">
                <div class="container_header box">
                    <i class="fas fa-shopping-cart"></i>
                    <h1>Giỏ hàng của bạn</h1>
                </div>
                <div class="container_content box">
                    <div class="content_product box">
                        <div class="info_title box">
                            <ul class="box">
                                <li class="li productname">Sản phẩm</li>
                                <li class="li price">Đơn giá</li>
                                <li class="li quantity">Số lượng</li>
                                <li class="li amount">Số tiền</li>
                                <li class="li action">Thao tác</li>
                            </ul>
                        </div>
                    </div>
                    <div id="result"></div>
                </div>
                <div class="navigation box">
                <div class="navigation_content box">
                    <div class="navigation-header box">
                        <h1>Tổng thanh toán</h1>
                        <h5>(</h5><h5 id="soluonghanghoa"></h5><h5>Sản phẩm)</h5>
                    </div>
                    <div class="amount-of-money box">
                        <span id="sumcart"></span>
                    </div>
                    <div class="button-buy">
                        <button id="thanhtoan">Thanh toán</button>
                    </div>
                </div>
            </div>
        <input type="text" class="tempmskh" value=<?php echo $_GET['mskh']?>>
        <div id="noti" class="notibox box">
        </div>
    </body>
    <script>
        var mskh = $('.tempmskh').val();
        function deletehanghoa(datai)
        {
            $.get
            (
                "./assets/php/main.php",
                {mshh:datai, func: 4},
                function(data)
                {
                    location.reload();
                }
            )
        }

        $('#thanhtoan').on('click',
        function()
        {
            document.getElementById('noti').style.display = "flex";
            $.get
            (
                "./assets/php/main.php",
                {mskh:mskh, func: 5},
                function(data)
                {
                    $('#noti').html(data);
                }
            )
            setTimeout
            (
                function()
                {
                    location.reload();
                },
                1500
            )
        })

        $.get
        (
            "./assets/php/main.php",
            {mskh: mskh, func: 3},
            function(data)
            {
                $('#result').html(data);
            }
        )
        setTimeout
        (
            function()
            {
                var sums = document.querySelectorAll(".product_amount");
                var sum = 0;
                document.getElementById('soluonghanghoa').innerHTML = sums.length;
                for (var i = 0; i< sums.length; i++)
                {
                    sum += Number(sums[i].getAttribute("datavalue"));
                }
                document.getElementById('sumcart').innerHTML = sum + " vnđ";
            }
            ,100
        )
    </script>
    
</html>