<?php
    $users = [
        ["title" => "laravel", "price" => 40],
        ["title" => "symfony", "price" => 50],
        ["title" => "node js", "price" => 20],
        ["title" => "react js", "price" => 10, "coupon" => "MYFANS"],
        ["title" => "angular", "price" => 70]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>My Flag chip courses</h1>
    <ul>
        <?php
            foreach ($users as $values) {
                if($values["price"] == 10)
                    break;
                if($values["price"] > 10){
                    echo "<li> <ul>";
                    foreach ($values as $key => $value) {
                        echo "<li> $key : $value </li>";
                    }
                    echo "</ul> </li> <br/>";
                }
            }
        ?>
    </ul>
</body>
</html>