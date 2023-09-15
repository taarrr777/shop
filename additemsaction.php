<?php

include 'connect.php';

$name = $_POST['name'];
$description = $_POST['description'];
$img1 = $_POST['img_main'];
$img2 = $_POST['img_second'];
$rating = $_POST['rating'];
$price = $_POST['price'];
$sex = $_POST['sex'];
$for_kids = $_POST['for_kids'];
$count = $_POST['item_count'];


if (is_numeric($rating)) {
    echo true;
    $rating = intval($rating);
}

if (is_numeric($price)) {
    echo true;
    $price = intval($price);
}

if (is_numeric($sex)) {
    echo true;
    $sex = intval($sex);
}

if (is_numeric($for_kids)) {
    echo true;
    $for_kids = intval($for_kids);
}

if (is_numeric($count)) {
    echo true;
    $count = intval($count);
}

$sql = <<<SQL
    INSERT INTO `items`(`name`, `description`, `img_main`, `img_second`, `rating`, `price`, `sex`, `for_kids`, `item_count`)
     VALUES ('{$name}', '{$description}', '{$img1}', '{$img2}', {$rating}, {$price}, {$sex}, {$for_kids}, {$count})
SQL;

$result = mysqli_query($connect, $sql);
if($result){
    header("Location: index.php");
    die();
}
else{
    mysqli_error($connect);
}


// mysqli_close($)