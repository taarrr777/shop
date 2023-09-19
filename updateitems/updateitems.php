<?php

include_once '../connect.php';

$selectNames = <<<SQL
SELECT `id`, `name` FROM `items`;
SQL;
$result = mysqli_query($connect, $selectNames);


if (isset($_GET['submit_item'])){
  $id = $_GET['option'];
}


$selectItem = <<<SQL
SELECT * FROM `items` WHERE `id` = {$id};
SQL;
$itemResult = mysqli_query($connect, $selectItem);
$itemR = mysqli_fetch_assoc($itemResult);
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
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">

  <link rel="stylesheet" href="../assets/css/templatemo-hexashop.css">

  <link rel="stylesheet" href="../assets/css/owl-carousel.css">

  <link rel="stylesheet" href="../assets/css/lightbox.css">



  <!-- Custom CSS -->
  <link rel="stylesheet" href="../custom/custom.css">

  <!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
</head>

<body>



  <!-- ***** Header Start ***** -->
  <?php include_once '../header.php'; ?>
  <br>

  <div class="subscribe">
    <div class="container">

      <!-- <span id="selected_id"></span> -->

      <div class="row">
        <form action="" method="get">
          <select id="select" class="form-select" aria-label="Default select example" name="option">
            <option>- Select Item -</option>
            <?php while ($r = mysqli_fetch_assoc($result)) { ?>
              <option value="<?php echo $r['id']; ?>">
                <?php echo $r['name']; ?>
              </option>
            <?php } ?>
          </select>
          <input type="submit" name="submit_item" value="Submit" id="submit_item">
        </form>

        <div class="col-lg-8">
          <form id="subscribe" action="updateitemsaction.php" method="post">
            <div class="row">
              <div class="col-lg-5 mb-2">
                <fieldset>
                  <input name="name" type="text" id="name" value="<?php echo $itemR['name'] ?>">
                </fieldset>
                <fieldset>
                  <input name="id" type="hidden" id="name" value="<?php echo $itemR['id'] ?>">
                </fieldset>
              </div>
              <div class="col-lg-5 mb-2">
                <fieldset>
                  <input name="description" type="text" id="name" value="<?php echo $itemR['description'] ?>">
                </fieldset>
              </div>
              <div class="col-lg-5 mb-2">
                <fieldset>
                  <input name="img_main" type="text" id="name" value="<?php echo $itemR['img_main'] ?>">
                </fieldset>
              </div>
              <div class="col-lg-5 mb-2">
                <fieldset>
                  <input name="img_second" type="text" id="name" value="<?php echo $itemR['img_second'] ?>">
                </fieldset>
              </div>
              <div class="col-lg-5 mb-2">
                <fieldset>
                  <input name="rating" type="text" id="text" value="<?php echo $itemR['rating'] ?>">
                </fieldset>
              </div>
              <div class="col-lg-5 mb-2">
                <fieldset>
                  <input name="price" type="text" id="name" value="<?php echo $itemR['price'] ?>">
                </fieldset>
              </div>
              <div class="col-lg-5 mb-2">
                <fieldset>
                  <input name="sex" type="text" id="name" value="<?php echo $itemR['sex'] ?>">
                </fieldset>
              </div>
              <div class="col-lg-5 mb-2">
                <fieldset>
                  <input name="for_kids" type="text" id="name" value="<?php echo $itemR['for_kids'] ?>">
                </fieldset>
              </div>
              <div class="col-lg-10">
                <fieldset>
                  <input name="item_count" type="text" id="name" value="<?php echo $itemR['item_count'] ?>">
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
  <?php include_once '../footer.php'; ?>

  <script src="../custom/custom.js" defer></script>



