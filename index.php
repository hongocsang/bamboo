<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trang chu</title>
    <style>
        .khung {
            color: blue;
            border-collapse: collapse;
        }
        .khung td {
            padding: 2px;
        }

    </style>
</head>
<body>
    <?php
        $ho_ten = 'Nguyen Van A';
        $sdt = '0909123456';
        $cccd = 123456789;
        $dia_chi = '01 Ly Tu Trong';
        $a = 10;
        $b = 3;
        $tong = $a + $b;
        $hieu = $a - $b;
        $thuong = $a / $b;
        $tich = $a * $b;
        $chia_lay_du = $a % $b;

    ?>
    <table border="1" class="khung">
        <tr>
            <td>ho ten</td>
            <td><?php echo $ho_ten ?></td>
        </tr>
        <tr>
            <td>sdt</td>
            <td><?php echo $sdt ?></td>
        </tr>
        <tr>
            <td>cccd</td>
            <td><?= $cccd ?></td>
        </tr>
        <tr>
            <td>dia chi</td>
            <td><?= $dia_chi ?></td>
        </tr>
    </table>

    <!-- <ul>
        <li>ho ten: <?=$ho_ten ?></li>
        <li>so dien thoai: <?=$sdt ?></li>
        <li>cccd: <?=$cccd ?></li>
        <li>dia chi: <?=$dia_chi ?></li>
    </ul> -->

    <ol>
        <li>ho ten: <?=$ho_ten ?></li>
        <li>so dien thoai: <?=$sdt ?></li>
        <li>cccd: <?=$cccd ?></li>
        <li>dia chi: <?=$dia_chi ?></li>
    </ol>

    <h1>tinh toan</h1><br />
    tong: <?= $tong ?> <br />
    hieu: <?= $hieu ?> <br />
    thuong: <?= $thuong ?> <br />
    tich: <?= $tich ?> <br />
    chia lay du: <?= $chia_lay_du ?> <br />
</body>
</html>