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


if(!empty($name) && $name !== " "){

    mysqli_query($connect, $sql);
}

if(!empty($description) && $description !== " "){

    mysqli_query($connect, $sql);
}

if(!empty($img1) && $img1 !== " "){

    mysqli_query($connect, $sql);
}

if(!empty($img2) && $img2 !== " "){

    mysqli_query($connect, $sql);
}

if(!empty($rating) && $rating !== " "){
    if (is_numeric($rating)) {
    echo true;
    $rating = intval($rating);
}

    mysqli_query($connect, $sql);
}

if(!empty($price) && $price !== " "){
    if (is_numeric($price)) {
    echo true;
    $price = intval($price);
}

    mysqli_query($connect, $sql);
}

if(!empty($sex) && $sex !== " "){
    if (is_numeric($sex)) {
    echo true;
    $sex = intval($sex);
}

    mysqli_query($connect, $sql);
}

if(!empty($for_kids) && $for_kids !== " "){
    if (is_numeric($for_kids)) {
    echo true;
    $for_kids = intval($for_kids);
}

    mysqli_query($connect, $sql);
}

if(!empty($count) && $count !== " "){
    if (is_numeric($count)) {
    echo true;
    $count = intval($count);
}

    mysqli_query($connect, $sql);
}

?>