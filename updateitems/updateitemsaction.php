<?php

include '../connect.php';

$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$img1 = $_POST['img_main'];
$img2 = $_POST['img_second'];
$rating = $_POST['rating'];
$price = $_POST['price'];
$sex = $_POST['sex'];
$for_kids = $_POST['for_kids'];
$count = $_POST['item_count'];


if(!empty($name) && $name !== " "){
    $sql = <<<SQL
    UPDATE `items` SET `name` = '{$name}' WHERE `id` = $id;
SQL;
    mysqli_query($connect, $sql);
}

if(!empty($description) && $description !== " "){
    $sql = <<<SQL
    UPDATE `items` SET `description` = '{$description}' WHERE `id` = $id;
SQL;
    mysqli_query($connect, $sql);
}

if(!empty($img1) && $img1 !== " "){
    $sql = <<<SQL
    UPDATE `items` SET `img_main` = '{$img1}' WHERE `id` = $id;
SQL;
    mysqli_query($connect, $sql);
}

if(!empty($img2) && $img2 !== " "){
    $sql = <<<SQL
    UPDATE `items` SET `img_second` = '{$img2}' WHERE `id` = $id;
SQL;
    mysqli_query($connect, $sql);
}

if(!empty($rating) && $rating !== " "){
    if (is_numeric($rating)) {
    echo true;
    $rating = intval($rating);
}
    $sql = <<<SQL
    UPDATE `items` SET `rating` = {$rating} WHERE `id` = $id; 
SQL;
    mysqli_query($connect, $sql);
}

if(!empty($price) && $price !== " "){
    if (is_numeric($price)) {
    echo true;
    $price = intval($price);
}
    $sql = <<<SQL
    UPDATE `items` SET `price` = {$price} WHERE `id` = $id;
SQL;
    mysqli_query($connect, $sql);
}

if(!empty($sex) && $sex !== " "){
    if (is_numeric($sex)) {
    echo true;
    $sex = intval($sex);
}
    $sql = <<<SQL
    UPDATE `items` SET `sex` = {$sex} WHERE `id` = $id;
SQL;
    mysqli_query($connect, $sql);
}

if(!empty($for_kids) && $for_kids !== " "){
    if (is_numeric($for_kids)) {
    echo true;
    $for_kids = intval($for_kids);
}
    $sql = <<<SQL
    UPDATE `items` SET `for_kids` = {$for_kids} WHERE `id` = $id;
SQL;
    mysqli_query($connect, $sql);
}

if(!empty($count) && $count !== " "){
    if (is_numeric($count)) {
    echo true;
    $count = intval($count);
}
    $sql = <<<SQL
    UPDATE `items` SET `item_count` = {$count} WHERE `id` = $id;
SQL;
    mysqli_query($connect, $sql);
}

header("Location: ../index.php");

?>