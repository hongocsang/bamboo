<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểu dữ liệu</title>
</head>
<body>
    
    <!-- <?php
        $a= 25 / 7;
        echo $a . '<br />'; 

        /* ép kiểu */
        //cách 1
        echo (int)$a;
        echo '<br />';
        //cách 2
        settype($a, 'float');
        echo $a;
        echo '<br />';

        /* Kiểm tra kiểu */
        // '10' = 10
        $diem = '10';
        if (is_numeric($diem)) {
            echo 'dữ liệu đúng';
        }else{
           echo 'dữ liệu sai'; 
        }

        echo '<br />';
        //con số nào khác 0 là true, còn 0 là false
        $da_dang_nhap = true;
        if($da_dang_nhap == true) {
            echo 'đã đăng nhập';
        }else {
            echo 'chưa đăng nhập';
        }
    ?> -->

    <?php
    $hoTen = 'Nguyễn Văn A';
    $daDangNhap = false;
    ?>

    <?php if($daDangNhap): ?>
        <h1>Xin chào <?= $hoTen ?></h1>
    <?php else: ?>
        <form action="#"></form>
        <form id="formSignIn" name="formSignIn" action="#" method="post">
            Tên đăng nhập:
            <input type="text" name="txtUser" id="txtUser">
            <br /><br />
            Mật Khẩu
            <input type="password" name="txtPass" id="txtPass">
            <br /><br />
            <button name="btnSignIn" id="btnSignIn">Đăng nhập</button>
        </form>
    <?php endif; ?>
    <br />
    <?php
    $ketQua = -10;
    ?>
    kết quả: 
    <?php if($ketQua >= 0 && $ketQua < 3): ?>
        <span> Tạch</span>
    <?php elseif($ketQua >= 3 && $ketQua < 5): ?>
        <span> tb</span>
    <?php elseif($ketQua >= 5 && $ketQua < 7): ?>
        <span> kha</span>
    <?php elseif($ketQua >= 7 && $ketQua < 9): ?>
        <span> gioi</span>
    <?php elseif($ketQua >= 9 && $ketQua <= 10): ?>
        <span> xuat sac</span>
    <?php else: ?>
        <span> ket qua loi</span>    
    <?php endif; ?>

</body>
</html>