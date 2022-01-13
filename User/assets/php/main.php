<?php

    $GLOBALS['conn'] = new mysqli ('localhost', 'root', '', 'webstorm');

    function product()
    {
        $selectmshh ="SELECT mshh FROM hanghoa";
        $resultmshh = $GLOBALS['conn']->query($selectmshh);

        while($tablemshh = $resultmshh->fetch_assoc())
        {

            $valuemshh = $tablemshh['mshh'];

            $selecttenhinh = "SELECT tenhinh FROM hinhhanghoa WHERE mshh ='$valuemshh'";
            $resulttenhinh = MySQLi_query($GLOBALS['conn'], $selecttenhinh);
            $tabletenhinh = $resulttenhinh->fetch_assoc();
            $valuetenhinh = substr($tabletenhinh['tenhinh'], 7, strlen($tabletenhinh['tenhinh']));

            $selectgia = "SELECT gia FROM hanghoa WHERE mshh ='$valuemshh'";
            $resultgia = MySQLi_query($GLOBALS['conn'], $selectgia);
            $tablegia = $resultgia->fetch_assoc();
            $valuegia = $tablegia['gia'];

            $selecttenhh = "SELECT tenhh FROM hanghoa WHERE mshh ='$valuemshh'";
            $resulttenhh = MySQLi_query($GLOBALS['conn'], $selecttenhh);
            $tabletenhh = $resulttenhh->fetch_assoc();
            $valuetenhh = $tabletenhh['tenhh'];

            echo
            "
                <div class='box-product__product-div box'>
                        <div class='product-div__product'>
                            <a class='link__product' href='./product.php?masp=".$valuemshh."&mskh=".$_GET['mskh']."'>
                                <div class='product__image' style='background-image: url(".$valuetenhinh.");'>
                                <div class='product-sale box'>-50%</div>
                                </div>
                                <div class='product-rate box'>
                                    <div class='box'>
                                        <i class='fas fa-star'></i>
                                        <i class='fas fa-star'></i>
                                        <i class='fas fa-star'></i>
                                        <i class='fas fa-star'></i>
                                        <i class='fas fa-star'></i>
                                    </div> 
                                    <div class='product-sold'>10k</div>
                                </div>
                                <div class='price-discount box'>".$valuegia.".vnđ</div>
                                <div class='product__content'>
                                <h5>".$valuetenhh."</h5>
                                </div>
                            </a>
                        </div>
                </div>
            ";
        }
    }

    function name()
    {
    $conn = new MySQLi('localhost', 'root', '', 'webstorm');

    $select_hotenkh = "SELECT hotenkh FROM khachhang";
    $result_hotenkh = $conn->query($select_hotenkh);

    $select_mskh = "SELECT mskh FROM khachhang";
    $result_mskh = $conn->query($select_mskh);

    while(true)
        {
            $value_mskh = $result_mskh->fetch_assoc();
            $value_hotenkh = $result_hotenkh->fetch_assoc();
            if($_GET['mskh'] == $value_mskh['mskh'])
            {
                return $value_hotenkh['hotenkh'];
            }
        }
    }

    function listproduct()
    {
        $conn = new mysqli ('localhost', 'root', '', 'webstorm');
        $sql = "SELECT tenloaihang FROM loaihanghoa";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc())
        {
            echo
            "
                <div class='category__items-content box'>
                    <i class='fas fa-car'></i>".$row['tenloaihang']."
                </div>
            ";
        }
    }
    function nameproduct()
    {
        $conn = new mysqli('localhost', 'root', '', 'webstorm');

        $select_mshh = "SELECT mshh FROM hanghoa";
        $result_mshh = $conn->query($select_mshh);

        $select_tenhh = "SELECT tenhh FROM hanghoa";
        $result_tenhh = $conn->query($select_tenhh);

        while(true)
        {
            $value_mshh = $result_mshh->fetch_assoc();
            $value_tenhh = $result_tenhh->fetch_assoc();

            if($value_mshh['mshh'] == $_GET['masp'])
            {
                echo "
                <div class='info_name'>".$value_tenhh['tenhh']."</div>
                ";
                break;
            }
        }
    }

    function imgproduct()
    {
        $conn = new mysqli('localhost', 'root', '', 'webstorm');

        $slt_mshh = "SELECT mshh FROM hinhhanghoa";
        $rlt_mshh = $conn->query($slt_mshh);
    
        $slt_tenhinh = "SELECT tenhinh FROM hinhhanghoa";
        $rlt_tenhinh = $conn->query($slt_tenhinh);
        
        while(true)
        {
            $value_mshh = $rlt_mshh->fetch_assoc();
            $value_tenhinh = $rlt_tenhinh->fetch_assoc();
            
            if(($_GET['masp'] == $value_mshh['mshh']) and (substr($value_tenhinh['tenhinh'], 0, 7) == 'profile'))
            {
                echo "<div class='product_img' style = 'background-image: url(".substr($value_tenhinh['tenhinh'], 7, strlen($value_tenhinh['tenhinh'])).")';></div>";
                break;
            }
        }
    }

    function decriptionproduct()
    {
        $conn = new MySQLi ('localhost', 'root', '', 'webstorm');

        $select_mshh = "SELECT mshh FROM hanghoa";
        $result_mshh = $conn->query($select_mshh);

        $select_mota = "SELECT mota FROM hanghoa";
        $result_mota = $conn->query($select_mota);

    while(true)
        {
            $value_mshh = $result_mshh->fetch_assoc();
            $value_mota = $result_mota->fetch_assoc();
            if($value_mshh['mshh'] == $_GET['masp'])
            {
                echo "
                <p>".$value_mota['mota']."</p>
                ";
                break;
            }
        }
    }

    function loginbox()
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
    function imgprerese()
    {
        $conn = new mysqli('localhost', 'root', '', 'webstorm');

        $select_mshh = "SELECT mshh FROM hinhhanghoa";
        $result_mshh = $conn->query($select_mshh);
    
        $select_tenhinh = "SELECT tenhinh FROM hinhhanghoa";
        $result_tenhinh = $conn->query($select_tenhinh);
        
        while($value_mshh = $result_mshh->fetch_assoc())
        {
            $value_tenhinh = $result_tenhinh->fetch_assoc();
            if($_GET['masp'] == $value_mshh['mshh'] & substr($value_tenhinh['tenhinh'], 0, 7) != 'profile')
            {
                echo
                "
                    <div class='img-pr' style='background-image: url(".$value_tenhinh['tenhinh'].");'></div>
                ";
            }
        }
    }
    $temp = -1;
    if(isset($_GET['func']))
    {
        $temp = $_GET['func'];
    }
    switch($temp)
    {
        case 1:
            {
                updatelocation();
                break;
            }
        case 2:
            {
                addcart();
                break;
            }
        case 3:
            {
                cart();
                break;
            }
        case 4:
            {
                deletecart();
                break;
            }
        case 5:
            {
                finish();
                break;
            }
    }

    function finish()
    {
        $mskh = $_GET['mskh'];

        $selectsodon = "SELECT sodondathang FROM dathang";
        $resultsodon = MySQLi_query($GLOBALS['conn'], $selectsodon);
        $valuesodon = $resultsodon->fetch_assoc();
        if($valuesodon == NULL)
        {
            $insertdathang = "INSERT INTO dathang(sodondathang, mskh, msnv, ngaydh, ngaygh, trangthaidh) VALUES('1', '$mskh', 'root', '', '', '-1')";
            if(MySQLi_query($GLOBALS['conn'], $insertdathang))
            {
                $selectallgiohang = "SELECT mshh FROM giohang WHERE mskh = '$mskh'";
                $resultallgiohang = MySQLi_query($GLOBALS['conn'], $selectallgiohang);
                while($tableallgiohang = $resultallgiohang->fetch_assoc())
                {
                    $valuemshhgiohang = $tableallgiohang['mshh'];

                    echo $valuemshhgiohang;

                    $selectsoluong = "SELECT soluong FROM giohang WHERE mshh = '$valuemshhgiohang'";
                    $resultsoluong = MySQLi_query($GLOBALS['conn'], $selectsoluong);
                    $tablesoluong = $resultsoluong->fetch_assoc();

                    $valuesoluong = $tablesoluong['soluong'];

                    $selectgia = "SELECT gia FROM hanghoa WHERE mshh = '$valuemshhgiohang'";
                    $resultgia = MySQLi_query($GLOBALS['conn'], $selectgia);
                    $tablegia = $resultgia->fetch_assoc();

                    $valuegiadathang = $tablegia['gia'];

                    $insertchitiet = "INSERT INTO chitietdathang(sodondathang, mshh, soluong, giadathang, giamgia) VALUES('1', '$valuemshhgiohang', '$valuesoluong', '$valuegiadathang', '')";
                    if(MySQLi_query($GLOBALS['conn'], $insertchitiet))
                    {
                        echo "<div class='notification box'><div class='iconsucc'></div><div class='inf box'>Đơn hàng đã gửi đến shop</div></div>";
                        $deleteproductgiohang = "DELETE FROM giohang WHERE mshh = '$valuemshhgiohang'";
                        MySQLi_query($GLOBALS['conn'], $deleteproductgiohang);
                    }
                    else
                    {
                        echo MySQLi_error($GLOBALS['conn']);
                    }
                }
            }
            else
            {
                echo MySQLi_error($GLOBALS['conn']);
            }
        }
        else
        {
            $selectlastsodon = "SELECT * FROM dathang ORDER BY sodondathang DESC LIMIT 1";
            $resultlastsodon = MySQLi_query($GLOBALS['conn'], $selectlastsodon);

            $tablelastsodon = $resultlastsodon->fetch_assoc();
            $tempsodondathang = $tablelastsodon['sodondathang'] + 1;

            $insertdathang = "INSERT INTO dathang(sodondathang, mskh, msnv, ngaydh, ngaygh, trangthaidh) VALUES('$tempsodondathang', '$mskh', 'root', '', '', '-1')";

            if(MySQLi_query($GLOBALS['conn'], $insertdathang))
            {
                $selectallgiohang = "SELECT mshh FROM giohang WHERE mskh = '$mskh'";
                $resultallgiohang = MySQLi_query($GLOBALS['conn'], $selectallgiohang);
                while($tableallgiohang = $resultallgiohang->fetch_assoc())
                {
                    $valuemshhgiohang = $tableallgiohang['mshh'];

                    $selectsoluong = "SELECT soluong FROM giohang WHERE mshh = '$valuemshhgiohang'";
                    $resultsoluong = MySQLi_query($GLOBALS['conn'], $selectsoluong);
                    $tablesoluong = $resultsoluong->fetch_assoc();

                    $valuesoluong = $tablesoluong['soluong'];

                    $selectgia = "SELECT gia FROM hanghoa WHERE mshh = '$valuemshhgiohang'";
                    $resultgia = MySQLi_query($GLOBALS['conn'], $selectgia);
                    $tablegia = $resultgia->fetch_assoc();

                    $valuegiadathang = $tablegia['gia'];

                    $insertchitiet = "INSERT INTO chitietdathang(sodondathang, mshh, soluong, giadathang, giamgia) VALUES('$tempsodondathang', '$valuemshhgiohang', '$valuesoluong', '$valuegiadathang', '')";
                    if(MySQLi_query($GLOBALS['conn'], $insertchitiet))
                    {
                        echo "<div class='notification box'><div class='iconsucc'></div><div class='inf box'>Đơn hàng đã gửi đến shop</div></div>";
                        $deleteproductgiohang = "DELETE FROM giohang WHERE mshh = '$valuemshhgiohang'";
                        MySQLi_query($GLOBALS['conn'], $deleteproductgiohang);
                    }
                    else
                    {
                        echo MySQLi_error($GLOBALS['conn']);
                    }
                }
            }
            else
            {
                echo MySQLi_error($GLOBALS['conn']);
            }

        }
    }

    function updatelocation()
    {
        
        $location = $_GET['location'];
        $mskh = $_GET['mskh'];

        $sltmadc = "SELECT madc FROM diachikh WHERE mskh ='$mskh'";
        $rltmadc = MySQLi_query($GLOBALS['conn'], $sltmadc);
        $tblmadc = $rltmadc->fetch_assoc();
        $value = $tblmadc['madc'];

        $delmskh = "DELETE FROM diachikh WHERE mskh = '$mskh'";
        $istloaction = "INSERT INTO diachikh(madc, diachi, mskh) VALUES ('$value', '$location', '$mskh')";
        if(MySQLi_query($GLOBALS['conn'], $delmskh) and (MySQLi_query($GLOBALS['conn'], $istloaction)))
        {
            echo "Success";
        }
        else
        {
            echo MySQLi_error($GLOBALS['conn']);
        }
    }

    function priceproduct()
    {
        $selectprice = "SELECT gia FROM hanghoa WHERE mshh = '$_GET[masp]'";
        $resultprice = MySQLi_query($GLOBALS['conn'], $selectprice);
        $tableprice = $resultprice->fetch_assoc();
        echo $tableprice['gia'];
    }

    function addcart()
    {
        $mskh = $_GET['mskh'];
        $masp = $_GET['masp'];
        $soluong = $_GET['soluong'];

        $insertcart ="INSERT INTO giohang(mskh, mshh, soluong) VALUES('$mskh', '$masp', '$soluong')";
        if(MySQLi_query($GLOBALS['conn'], $insertcart))
        {
            echo "<div class='inf box'><div class='successimg'></div><div class='namesuccess box'>Thành công</div></div>";
        }
        else
        {
            echo "<div class='inf box'><div class='errorimg'></div><div class='namesuccess'>".MySQLi_error($GLOBALS['conn'])."</div></div>";
        }
    }
    function cart()
    {
        $selectmshh = "SELECT mshh FROM giohang WHERE mskh = '$_GET[mskh]'";
        $resultmshh = MySQLi_query($GLOBALS['conn'], $selectmshh);
        while($tablemshh = $resultmshh->fetch_assoc())
        {
                $mshh = $tablemshh['mshh'];
                $selectnamehh = "SELECT tenhh FROM hanghoa WHERE mshh = '$mshh'";
                $resultnamehh  = MySQLi_query($GLOBALS['conn'], $selectnamehh);
                $tablenamehh = $resultnamehh->fetch_assoc();
                $mshh =  $tablemshh['mshh'];


                $selectgiahh = "SELECT gia FROM hanghoa WHERE mshh = '$mshh'";
                $resultgiahh  = MySQLi_query($GLOBALS['conn'], $selectgiahh);
                $tablegiahh = $resultgiahh->fetch_assoc();

                $selectsoluong = "SELECT soluong FROM giohang WHERE mskh = '$_GET[mskh]'";
                $resultsoluong  = MySQLi_query($GLOBALS['conn'], $selectsoluong);
                $tablesoluong = $resultsoluong->fetch_assoc();

                $selecthinhhh = "SELECT tenhinh FROM hinhhanghoa WHERE mshh = '$mshh'";
                $resulthinhhh  = MySQLi_query($GLOBALS['conn'], $selecthinhhh);
                $tablehinhhh = $resulthinhhh->fetch_assoc();

                $valuenamehh = $tablenamehh['tenhh'];
                $valuegia =  $tablegiahh['gia'];
                $valuesoluong = $tablesoluong['soluong'];
                $valuetenhinh = substr($tablehinhhh['tenhinh'], 7, strlen($tablehinhhh['tenhinh']));

                echo "
                    <div class='list_product box'>
                        <div class='product_img-name box'>
                            <div class='img' style='background-image: url(".$valuetenhinh.")'></div>
                            <div class='name box'>".$valuenamehh."</div>
                        </div>
                        <div class='product_price box'>".$valuegia." vnđ</div>
                        <input class='tempvaluegia' value=".$valuegia.">
                        <div class='product_quantity box'><span>-</span><input id='".$valuesoluong."' type='text' value=".$valuesoluong."><span>+</span></div>
                        <div class='product_amount box' datavalue='".$valuesoluong * $valuegia."'>".$valuesoluong * $valuegia." vnđ</div>
                        <div class='product_action box'>
                            <button onclick=deletehanghoa('$mshh')>Xoá</button>
                        </div>
                    </div>
                ";
        }
    }
    function deletecart()
    {
        echo $_GET['mshh'];
        $deletecart = "DELETE FROM giohang WHERE mshh = '$_GET[mshh]'";
       MySQLi_query($GLOBALS['conn'], $deletecart);
    }
?>