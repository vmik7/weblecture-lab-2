<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab2 - Mikerin</title>

    <link rel="stylesheet" href="style.css">
</head>
<body style="display: flex; justify-content: center; align-items: center; height: 100vh;">
<div>
<?php
    // ассоциативный массив продуктов и их цен
    $food["Apple"] = 30;
    $food["Banana"] = 130;
    $food["Cherry"] = 30;
    $food["Coconut"] = 130;
    $food["Kiwi"]= 230;
    $food["Pineapple"] = 90;
    $food["Lime"] = 90;
    $food["Lemon"] = 50;
    $food["Mango"] = 130;
    $food["Olive"] = 90;
    $food["Peach"] = 50;
    $food["Avocado"] = 230;
    $food["Cucumber"] = 30;
    $food["Carrot"] = 10;
    $food["Tomato"] = 10;
    $food["Cabbage"] = 20;
    $food["Potatoes"] = 40;
    $food["Pepper"] = 50;
    $food["Turnip"] = 20;
    $food["Haricot"] = 10;

    foreach ($food as $key => $value) {
        $ans[$value] = array();
        foreach ($food as $key1 => $value1) {
            if ($value1 == $value) {
                $ans[$value][] = $key1;
            }
        }
    }

    foreach ($ans as $key => $value) {
        echo "<div class=\"heading\">За ".$key." рублей можно купить:</div>";
        foreach ($ans[$key] as $key1 => $value1) {
            echo "<div class=\"value\">".$value1."</div>";
        }
    }

?>
</div>

</body>
</html>