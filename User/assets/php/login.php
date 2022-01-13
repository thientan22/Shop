<?php
    $conn = new MySQLi('localhost', 'root', '', 'webstorm');

    $select_mskh = "SELECT mskh FROM khachhang";
    $result_mskh = $conn->query($select_mskh);

    $sltpass = "SELECT pass FROM khachhang";
    $rltpass = MySQLi_query($conn, $sltpass);

    $temp = 0;

    while(($value_mskh = $result_mskh->fetch_assoc()) and ($valuepass = $rltpass->fetch_assoc()))
    {
        if($_POST['user'] == $value_mskh['mskh'] and $_POST['pass'] == $valuepass['pass'])
        {
            
            // echo "<div class='boxnoti box'><div class='iconsucc'></div><h3>Đăng nhập thành công!</h3><a href='../../index.php?mskh=".$value_mskh['mskh']."' id='OK'>Đi đến trang mua sắm</a></div>";
            // echo "index.php?mskh=".$value_mskh['mskh']."";
            echo 1;
            $temp = 1;
            break; 
        }
    }
    if($temp == 0)
    {
        echo "<div class='boxnoti box'><div class='iconerr'></div><h3>Sai tên tài khản hoặc mật khẩu!</h3></div>";
    }
?>