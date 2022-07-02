<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .het-hang {background: red; color:blue;}
    </style>
</head>
<body>
    <?php
        $sanpham1  = array(
            'sp_ma' => 1,
            'sp_ten' => 'aaaaaaaaaa',
            'sp_gia' => 123456789,
            'sp_soluong' => 9
        );
        $sanpham2 = [
            'sp_ma' => 2,
            'sp_ten' => 'bbbbbbbbbb',
            'sp_gia' => 987654321,
            'sp_soluong' => 22
        ];
        $sanpham3 = [
            'sp_ma' => 3,
            'sp_ten' => 'ccccccccccc',
            'sp_gia' => 456789123,
            'sp_soluong' => 33
        ];
        $sanpham4 = [
            'sp_ma' => 4,
            'sp_ten' => 'dddddddddd',
            'sp_gia' => 789123456,
            'sp_soluong' => 44
        ];
        $sanpham5 = [
            'sp_ma' => 5,
            'sp_ten' => 'eeeeeeeeee',
            'sp_gia' => 321654987,
            'sp_soluong' => 55
        ];
        $sanpham6 = [
            'sp_ma' => 6,
            'sp_ten' => 'ffffffffff',
            'sp_gia' => 654987321,
            'sp_soluong' => 66
        ];

        //mảng của mảng
        $arrListProducts = [
            $sanpham1,
            $sanpham2,
            $sanpham3,
            $sanpham4,
            $sanpham5,
            $sanpham6
        ];
    ?>

    <table border="1">
        <tr>
            <th>Mã Sản Phẩm</th>
            <th>Tên Sản Phẩm</th>
            <th>Giá</th>
            <th>số Lượng</th>
        </tr>
        <?php for ($i=0; $i < count($arrListProducts); $i++): ?>
        <?php if($arrListProducts[$i]['sp_soluong'] <= 10): ?>
            <tr class="het-hang">
        <?php else: ?>
            <tr>
        <?php endif; ?>  
            <td>
                <?php echo $arrListProducts[$i]['sp_ma'] ?>
            </td>
            <td>
                <?= $arrListProducts[$i]['sp_ten'] ?>
            </td>
            <td>
                <?= $arrListProducts[$i]['sp_gia'] ?>
            </td>
            <td>
                <?= $arrListProducts[$i]['sp_soluong'] ?>
            </td>
        </tr>
        <?php endfor; ?>
    </table>

    <table border="1">
        <tr>
            <th>STT</th>
            <th>Mã Sản Phẩm</th>
            <th>Tên Sản Phẩm</th>
            <th>Giá</th>
            <th>số Lượng</th>
        </tr>
        <?php foreach ($arrListProducts as $index => $sp): ?>
        <?php //foreach ($arrListProducts as $sp): ?>   
        <?php if($sp['sp_soluong'] <= 10): ?>
            <tr class="het-hang">
        <?php else: ?>
            <tr>
        <?php endif; ?>  
            <td>
                <?= $index ?>
            </td>
            <td>
                <?php echo $sp['sp_ma'] ?>
            </td>
            <td>
                <?= $sp['sp_ten'] ?>
            </td>
            <td>
                <?= $sp['sp_gia'] ?>
            </td>
            <td>
                <?= $sp['sp_soluong'] ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>