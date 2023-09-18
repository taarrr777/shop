<?php

include_once 'connect.php';

$selectNames = <<<SQL
SELECT `name` FROM `items`;
SQL;
$result = mysqli_query($conn, $selectNames);
?>


 <!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

<title>Hexashop Ecommerce HTML CSS Template</title>


<!-- Additional CSS Files -->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

<link rel="stylesheet" href="assets/css/templatemo-hexashop.css">

<link rel="stylesheet" href="assets/css/owl-carousel.css">

<link rel="stylesheet" href="assets/css/lightbox.css">
<!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
</head>

<body>

    

    <!-- ***** Header Start ***** -->
    <?php include_once 'header.php'; ?>
    <br>

    <div class="subscribe">
        <div class="container">

        <select class="form-select" aria-label="Default select example">
            <option selected>- Select Item -</option>
                <?php // while($r = mysqli_fetch_assoc($result)){ ?>
                    <option value="1">One</option>
                <?php // } ?>
        </select>

            <div class="row">
                <div class="col-lg-8">
                    <form id="subscribe" action="updateitemsaction.php" method="post">
                        <div class="row">
                          <div class="col-lg-5 mb-2">
                            <fieldset>
                              <input name="name" type="text" id="name" placeholder="Name">
                            </fieldset>
                          </div>
                          <div class="col-lg-5 mb-2">
                            <fieldset>
                              <input name="description" type="text" id="name" placeholder="Description">
                            </fieldset>
                          </div>
                          <div class="col-lg-5 mb-2">
                            <fieldset>
                              <input name="img_main" type="text" id="name" placeholder="img path">
                            </fieldset>
                          </div>
                          <div class="col-lg-5 mb-2">
                            <fieldset>
                              <input name="img_second" type="text" id="name" placeholder="img path">
                            </fieldset>
                          </div>
                          <div class="col-lg-5 mb-2">
                            <fieldset>
                              <input name="rating" type="text" id="text" placeholder="Rating">
                            </fieldset>
                          </div>
                          <div class="col-lg-5 mb-2">
                            <fieldset>
                              <input name="price" type="text" id="name" placeholder="Price">
                            </fieldset>
                          </div>
                          <div class="col-lg-5 mb-2">
                            <fieldset>
                              <input name="sex" type="text" id="name" placeholder="0 - male, 1 - female">
                            </fieldset>
                          </div>
                          <div class="col-lg-5 mb-2">
                            <fieldset>
                              <input name="for_kids" type="text" id="name" placeholder="0 - false, 1 - true">
                            </fieldset>
                          </div>
                          <div class="col-lg-10">
                            <fieldset>
                              <input name="item_count" type="text" id="name" placeholder="Item Count">
                            </fieldset>
                          </div>
                          <div class="col-lg-2">
                            <fieldset>
                              <button type="submit" id="form-submit" class="main-dark-button"><i class="fa fa-paper-plane"></i></button>
                            </fieldset>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- ***** Footer Start ***** -->
    <?php include_once 'footer.php'; ?>
