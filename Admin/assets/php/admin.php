<?php

    $GLOBALS['conn'] = new MySQLi('localhost', 'root', '', 'webstorm');

    switch ($_POST['func'])
    {
        case 1:
            {
                sectors();
                break;
            }
        case 2:
            {
                product();
                break;
            }
        case 3:
            {
                staff();
                break;
            }
        case 4:
            {
                client();
                break;
            }
        case 5:
            {
                findproduct();
                break;
            }
        case 6:
            {
                delete();
                break;
            }
            case 7:
                {
                    listdonhang();
                    break;
                }
            case 8:
                {
                    acceptdonhang();
                    break;
                }
            case 9:
                {
                    listdonhangdaxacnhan();
                    break;
                }
            case 10:
                {
                    xacnhangiaohang();
                    break;
                } 
            case 11:
                {
                    allpro();
                    break;
                }
            case 12:
                {
                    countallproduct();
                    break;
                }
            case 13:
                {
                    countallfinish();
                    break;
                }
            case 14:
                {
                    countallrunning();
                    break;
                }
            case 15:
                {
                    countalltrans();
                    break;
                }
    }

    function countalltrans()
    {
        $select = "SELECT * FROM dathang WHERE trangthaidh = '0'";
        $result = MySQLi_query($GLOBALS['conn'], $select);

        $count = 0;

        while($result->fetch_assoc())
        {
            $count ++;
        }
        echo $count;
    }

    function countallrunning()
    {
        $select = "SELECT * FROM dathang WHERE trangthaidh = '-1'";
        $result = MySQLi_query($GLOBALS['conn'], $select);

        $count = 0;

        while($result->fetch_assoc())
        {
            $count ++;
        }
        echo $count;
    }

    function countallfinish()
    {
        $select = "SELECT * FROM dathang WHERE trangthaidh = '1'";
        $result = MySQLi_query($GLOBALS['conn'], $select);

        $count = 0;

        while($result->fetch_assoc())
        {
            $count ++;
        }
        echo $count;
    }

    function countallproduct()
    {
        $selectpr = "SELECT mshh FROM hanghoa";
        $resultpr = MySQLi_query($GLOBALS['conn'], $selectpr);

        $count = 0;

        while($resultpr->fetch_assoc())
        {
            $count ++;
        }
        echo $count;
    }

    function allpro()
    {
        $selectall = "SELECT * FROM hanghoa";
        $resultall = MySQLi_query($GLOBALS['conn'], $selectall);

        while($tableall = $resultall->fetch_assoc())
        {
            $selecthinh = "SELECT tenhinh FROM hinhhanghoa WHERE mshh ='$tableall[mshh]'";
            $resulthinh = MySQLi_query($GLOBALS['conn'], $selecthinh);
    
            $tablehinh = $resulthinh->fetch_assoc();
    
            $temphinh = substr($tablehinh['tenhinh'], 7, strlen($tablehinh['tenhinh']));
    
            echo
            "
            <div class='itemsallp box'>
                <div class='picturehh' style ='background-image: url(".$temphinh.")'></div>
                <div class='maloaihang'>Mã: ".$tableall['mshh']."</div>
                <div class='maloaihang'>ML: ".$tableall['maloaihang']."</div>
                <div class='tenhh'>Tên: ".$tableall['tenhh']."</div>
                <div class='giahh'>Giá: ".$tableall['gia']."</div>
            </div>
            ";
        }
    }

    function listdonhangdaxacnhan()
    {
        $selectdonhangcxn = "SELECT * FROM dathang WHERE trangthaidh = '0'";
        $resultdonhangcxn = MySQLi_query($GLOBALS['conn'], $selectdonhangcxn);

        while($tabledonhangcxn = $resultdonhangcxn->fetch_assoc())
        {
            $selecttenkh = "SELECT hotenkh FROM khachhang WHERE mskh = '$tabledonhangcxn[mskh]'";
            $resulttenkh = MySQLi_query($GLOBALS['conn'], $selecttenkh);

            $tabletenkh = $resulttenkh->fetch_assoc();

            $selectdiachi = "SELECT diachi FROM diachikh WHERE mskh = '$tabledonhangcxn[mskh]'";
            $resultdiachi = MySQLi_query($GLOBALS['conn'], $selectdiachi);
            
            $tablediachi = $resultdiachi->fetch_assoc();

            $selectchitietdathang = "SELECT * FROM chitietdathang WHERE sodondathang = '$tabledonhangcxn[sodondathang]'";
            $resultchitietdathang = MySQLi_query($GLOBALS['conn'], $selectchitietdathang);
            
            echo
            "
            <div class='iditems box'>
                <div class='sodondathang box'>Đơn đặt hàng số ".$tabledonhangcxn['sodondathang']."
                    <div class='xacnhandon' onclick=xacnhangiaohang('$tabledonhangcxn[sodondathang]')>Xác nhận giao hàng</div>
                </div>
                <div class='tenkhachhang'>Họ và tên khách hàng: ".$tabletenkh['hotenkh']."</div>
                <div class='tenkhachhang'>Địa chỉ: ".$tablediachi['diachi']."</div>
            ";

            while($tablechitietdathang = $resultchitietdathang->fetch_assoc())
            {
                $selecttenhh = "SELECT tenhh FROM hanghoa WHERE mshh = '$tablechitietdathang[mshh]'";
                $resulttenhh = MySQLi_query($GLOBALS['conn'], $selecttenhh);
                $tabletenhh = $resulttenhh->fetch_assoc();

                echo
                "
                
                    <div class='danhsachhanghoa box'>
                        <div class='tenhhad'>".$tabletenhh['tenhh']."</div>
                        <div class='soluongad'>Số lượng: ".$tablechitietdathang['soluong']."</div>
                        <div class='giad'>Giá: ".$tablechitietdathang['giadathang']."</div>
                    </div>
                    
                ";
            }
            echo
            "
                <div class='trangthaidathang box' style='color: green;'>Đã xác nhận</div>
            </div>
            <div class='space'></div>
            ";
        }
    }

    function acceptdonhang()
    {
        $msdonhang = $_POST['masodon'];
        $updatedonhang = "UPDATE dathang SET trangthaidh = '0' WHERE sodondathang = '$msdonhang'";
        MySQLi_query($GLOBALS['conn'], $updatedonhang);
        listdonhang();
    }

    function xacnhangiaohang()
    {
        $msdonhang = $_POST['masodon'];
        $updatedonhang = "UPDATE dathang SET trangthaidh = '1' WHERE sodondathang = '$msdonhang'";
        MySQLi_query($GLOBALS['conn'], $updatedonhang);
        $selectdonhangcxn = "SELECT * FROM dathang WHERE trangthaidh = '0'";
        $resultdonhangcxn = MySQLi_query($GLOBALS['conn'], $selectdonhangcxn);

        while($tabledonhangcxn = $resultdonhangcxn->fetch_assoc())
        {
            $selecttenkh = "SELECT hotenkh FROM khachhang WHERE mskh = '$tabledonhangcxn[mskh]'";
            $resulttenkh = MySQLi_query($GLOBALS['conn'], $selecttenkh);
            
            $tabletenkh = $resulttenkh->fetch_assoc();

            $selectchitietdathang = "SELECT * FROM chitietdathang WHERE sodondathang = '$tabledonhangcxn[sodondathang]'";
            $resultchitietdathang = MySQLi_query($GLOBALS['conn'], $selectchitietdathang);
            
            echo
            "
            <div class='iditems box'>
                <div class='sodondathang box'>Đơn đặt hàng số ".$tabledonhangcxn['sodondathang']."
                    <div class='xacnhandon' onclick=xacnhandon('$tabledonhangcxn[sodondathang]')>Xác nhận đơn hàng</div>
                </div>
                <div class='tenkhachhang'>Họ và tên khách hàng: ".$tabletenkh['hotenkh']."</div>
            ";

            while($tablechitietdathang = $resultchitietdathang->fetch_assoc())
            {
                $selecttenhh = "SELECT tenhh FROM hanghoa WHERE mshh = '$tablechitietdathang[mshh]'";
                $resulttenhh = MySQLi_query($GLOBALS['conn'], $selecttenhh);
                $tabletenhh = $resulttenhh->fetch_assoc();

                echo
                "
                
                    <div class='danhsachhanghoa box'>
                        <div class='tenhhad'>".$tabletenhh['tenhh']."</div>
                        <div class='soluongad'>Số lượng: ".$tablechitietdathang['soluong']."</div>
                        <div class='giad'>Giá: ".$tablechitietdathang['giadathang']."</div>
                    </div>
                    
                ";
            }
            echo
            "
                <div class='trangthaidathang box' style='color: red;'>Chưa xác nhận</div>
            </div>
            <div class='space'></div>
            ";
        }
    }

    function listdonhang()
    {
        $selectdonhangcxn = "SELECT * FROM dathang WHERE trangthaidh = '-1'";
        $resultdonhangcxn = MySQLi_query($GLOBALS['conn'], $selectdonhangcxn);

        while($tabledonhangcxn = $resultdonhangcxn->fetch_assoc())
        {
            $selectdiachi = "SELECT diachi FROM diachikh WHERE mskh = '$tabledonhangcxn[mskh]'";
            $resultdiachi = MySQLi_query($GLOBALS['conn'], $selectdiachi);
            
            $tablediachi = $resultdiachi->fetch_assoc();

            $selecttenkh = "SELECT hotenkh FROM khachhang WHERE mskh = '$tabledonhangcxn[mskh]'";
            $resulttenkh = MySQLi_query($GLOBALS['conn'], $selecttenkh);
            
            $tabletenkh = $resulttenkh->fetch_assoc();

            $selectchitietdathang = "SELECT * FROM chitietdathang WHERE sodondathang = '$tabledonhangcxn[sodondathang]'";
            $resultchitietdathang = MySQLi_query($GLOBALS['conn'], $selectchitietdathang);
            
            echo
            "
            <div class='iditems box'>
                <div class='sodondathang box'>Đơn đặt hàng số ".$tabledonhangcxn['sodondathang']."
                    <div class='xacnhandon' onclick=xacnhandon('$tabledonhangcxn[sodondathang]')>Xác nhận đơn hàng</div>
                </div>
                <div class='tenkhachhang'>Họ và tên khách hàng: ".$tabletenkh['hotenkh']."</div>
                <div class='tenkhachhang'>Địa chỉ: ".$tablediachi['diachi']."</div>
            ";

            while($tablechitietdathang = $resultchitietdathang->fetch_assoc())
            {
                $selecttenhh = "SELECT tenhh FROM hanghoa WHERE mshh = '$tablechitietdathang[mshh]'";
                $resulttenhh = MySQLi_query($GLOBALS['conn'], $selecttenhh);
                $tabletenhh = $resulttenhh->fetch_assoc();

                echo
                "
                
                    <div class='danhsachhanghoa box'>
                        <div class='tenhhad'>".$tabletenhh['tenhh']."</div>
                        <div class='soluongad'>Số lượng: ".$tablechitietdathang['soluong']."</div>
                        <div class='giad'>Giá: ".$tablechitietdathang['giadathang']."</div>
                    </div>
                    
                ";
            }
            echo
            "
                <div class='trangthaidathang box' style='color: red;'>Chưa xác nhận</div>
            </div>
            <div class='space'></div>
            ";
        }
    }

    function delete()
    {
        $conn = new MySQLi('localhost', 'root', '', 'webstorm');

        $deletepicture = "DELETE FROM hinhhanghoa WHERE mshh = '$_POST[valuedelete]'";
        $deleteproduct = "DELETE FROM hanghoa WHERE mshh = '$_POST[valuedelete]'";

        if(MySQLi_query($conn, $deletepicture) && MySQLi_query($conn, $deleteproduct))
        {
            echo
            "
            Đã xoá thành công
            ";
        }
    }

    function findproduct()
    {
        $conn = new MySQLi('localhost', 'root', '', 'webstorm');

        $sltmshh = "SELECT mshh FROM hanghoa";
        $rltmshh = MySQLi_query($conn, $sltmshh);

        $slttenhh = "SELECT tenhh FROM hanghoa";
        $rlttenhh = MySQLi_query($conn, $slttenhh);

        $sltmshhhinh = "SELECT mshh FROM hinhhanghoa";
        $rltmshhhinh = MySQLi_query($conn, $sltmshhhinh);

        $slttenhinh = "SELECT tenhinh FROM hinhhanghoa";
        $rlttenhinh = MySQLi_query($conn, $slttenhinh);

        while(($valuemshhhinh = $rltmshhhinh->fetch_assoc()) && ($valuetenhinh = $rlttenhinh->fetch_assoc()))
        {
            if($_POST['mshh'] == $valuemshhhinh['mshh'])
            {
                if(substr($valuetenhinh['tenhinh'], 0, 7) == 'profile')
                {
                    echo 
                    "
                    <div class = 'delpicture' style = 'background-image: url(".substr($valuetenhinh['tenhinh'], 7, strlen($valuetenhinh['tenhinh'])).");'></div>
                    ";
                }
                else
                {
                    echo 
                    "
                    <div class = 'delpicture' style = 'background-image: url(".$valuetenhinh['tenhinh'].")'></div>
                    ";
                }
            }
        }

        $temp = 1;
        while(($valuemshh = $rltmshh->fetch_assoc()) && ($valuetenhh = $rlttenhh->fetch_assoc()))
        {
            if($_POST['mshh'] == $valuemshh['mshh'])
            {
                $temp = 0; 
                echo "
                <h5>".$valuetenhh['tenhh']."</h5>
                <input id='resultfindsuccess' value =".$_POST['mshh']." style='display: none;'>
                <div id='acceptdelete' onclick='acceptdelete()'>Xác nhận xoá</div>             
                ";
                break;
            }
        }
        if($temp == 1)
        {
            echo
            "
                Mã số hàng hoá không tồn tại!!!
            ";
        }
    }

    function client()
    {
        $conn = new MySQLi('localhost', 'root', '', 'webstorm');

        $mskh = $_POST['mskh'];
        $ten = $_POST['ten'];
        $pass = $_POST['pass'];
        $cty = $_POST['cty'];
        $sdt = $_POST['sdt'];
        $fax = $_POST['fax'];
        $malocation = $_POST['malocation'];
        $location = $_POST['location'];

        $addclient = "INSERT INTO khachhang(mskh, hotenkh, pass, tencongty, sodienthoai, sofax) VALUES ('$mskh', '$ten', '$pass', '$cty', '$sdt', '$fax')";
        $addlocal = "INSERT INTO diachikh(madc, diachi, mskh) VALUES ('$malocation', '$location', '$mskh')";
        {
            if(MySQLi_query($conn, $addclient) and MySQLi_query($conn, $addlocal))
            {
                resultsuccess();
            }
            else
            {
                resulterror(MySQLi_error($conn));
            }
        }
    }

    function product()
    {
        $conn = new MySQLi('localhost', 'root', '', 'webstorm');

        $maloaihang = $_POST['maloaihang'];
        $masohanghoa = $_POST['masohanghoa'];
        $tenhanghoa = $_POST['tenhanghoa'];
        $motahanghoa = $_POST['motahanghoa'];
        $giahanghoa = $_POST['giahanghoa'];
        $mahinhdaidien = $_POST['mahinhhanghoa'];
        $hinhdaidien = "profile" . $_POST['hinhdaidien'];
        $mahinhhanghoa1 = $mahinhdaidien . "1";
        $hinhhanghoa1 = $_POST['hinhhanghoa1'];
        $mahinhhanghoa2 =$mahinhdaidien . "2";
        $hinhhanghoa2 = $_POST['hinhhanghoa2'];
        $mahinhhanghoa3 = $mahinhdaidien . '3';
        $hinhhanghoa3 = $_POST['hinhhanghoa3'];
        $mahinhhanghoa4 = $mahinhdaidien . "4";
        $hinhhanghoa4 = $_POST['hinhhanghoa4'];
        $soluonghanghoa = $_POST['soluonghanghoa'];

        $addhinh = array(
        "INSERT INTO hinhhanghoa(mahinh, tenhinh, mshh) VALUES ('$mahinhdaidien', '$hinhdaidien', '$masohanghoa')",
        "INSERT INTO hinhhanghoa(mahinh, tenhinh, mshh) VALUES ('$mahinhhanghoa1', '$hinhhanghoa1', '$masohanghoa')",
        "INSERT INTO hinhhanghoa(mahinh, tenhinh, mshh) VALUES ('$mahinhhanghoa2', '$hinhhanghoa2', '$masohanghoa')",
        "INSERT INTO hinhhanghoa(mahinh, tenhinh, mshh) VALUES ('$mahinhhanghoa3', '$hinhhanghoa3', '$masohanghoa')",
        "INSERT INTO hinhhanghoa(mahinh, tenhinh, mshh) VALUES ('$mahinhhanghoa4', '$hinhhanghoa4', '$masohanghoa')"
        );

        $addproduct = "INSERT INTO hanghoa(mshh, tenhh, mota, gia, soluonghang, maloaihang) VALUES ('$masohanghoa', '$tenhanghoa', '$motahanghoa', '$giahanghoa', '$soluonghanghoa', '$maloaihang')";

        if(MySQLi_query($conn, $addproduct))
        {
            resultsuccess();
        }
        else
        {
            resulterror(MySQLi_error($conn));
        }
        
        for($i = 0 ; $i < count($addhinh) ; $i++)
        {
            if(MySQLi_query($conn, $addhinh[$i]))
            {
                resultsuccess();
            }
            else
            {
                resulterror(MySQLi_error($conn));
            }
        }
    }

    function sectors()
    {
        $conn = new MySQLi('localhost', 'root', '', 'webstorm');

        $maloaihang = $_POST['maloaihang'];
        $tenloaihang = $_POST['tenloaihang'];

        $addsectors = "INSERT INTO loaihanghoa(maloaihang, tenloaihang) VALUES ('$maloaihang', '$tenloaihang')";
        if(MySQLi_query($conn, $addsectors))
        {
            resultsuccess();
        }
        else
        {
            resulterror(MySQLi_error($conn));
        }
    }

    function staff()
    {
        $conn = new MySQLi('localhost', 'root', '', 'webstorm');

        $msnv = $_POST['msnv'];
        $ten = $_POST['ten'];
        $chucvu = $_POST['chucvu'];
        $diachi = $_POST['diachi'];
        $sdt = $_POST['sdt'];

        $addstaff = "INSERT INTO nhanvien(msnv, hotennv, chucvu, diachi, sodienthoai) VALUES ('$msnv', '$ten', '$chucvu', '$diachi', '$sdt')";
        if(MySQLi_query($conn, $addstaff))
        {
            resultsuccess();
        }
        else
        {
            resulterror(MySQLi_error($conn));
        }
    }
    function resultsuccess()
    {
        echo "<div class='notification box'><i class='fas fa-check'></i>Success</div>";
    }
    function resulterror($err)
    {
        echo "<div class='notification box'>".$err."</div>";
    }
?>