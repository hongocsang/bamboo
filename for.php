<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        for ($i=0; $i < 100; $i++) { 
            echo $i .'---';
        }
        echo '<br /><br />';
        for ($i=100; $i > 0; $i--) { 
            echo $i .'---';
        }

        echo '<br /><br />';
        for ($i=0; $i < 10; $i++) { 
            for ($j=0; $j <= $i; $j++) { 
                echo '*';
            }
            echo '<br />';
        }
        echo '<br /><br />';

        for ($i=0; $i <= 100; $i++) { 
            if ($i%2 == 0) {
                echo $i .'===';
                //continue;
                //break;
            }
        }
    ?>
</body>
</html>