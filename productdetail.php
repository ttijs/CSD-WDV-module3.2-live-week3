<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php include 'header.php'; ?>

    <h1>Product detail</h1>

    <?php

      
    $binnenkomende_id = $_GET['nummer'];

    // echo '<p>';
    // echo 'binnendkomende id = ' . $binnenkomende_id;
    // echo '</p>';

    include "productenarray.php";

    foreach ($producten as $product) {
       if ($binnenkomende_id == $product['id']) {

            //echo '<a href="productdetail.php?id=' . $product['id'] . '">';
            echo '<div class="product">';
            echo 'product id: ' . $product['id'];
            echo "<br>productnaam: " . $product['titel'];
            echo "<br>prijs:" . $product['prijs'];
            echo '</div>';
            //echo '</a>';

            echo '<br>';

            echo '<a href="winkelwagen.php?id=' . $product['id'] . '">';
            echo '<div class="bestelknop">';
            echo "bestel prouduct";
            echo '</div>';
            echo '</a>';
       }
    }



    ?>

</body>

</html>