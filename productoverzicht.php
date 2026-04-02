<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .product {
            border: 1px solid black;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <?php include 'header.php'; ?>

    <h1>Producten</h1>

    <?php

    include "productenarray.php";


    foreach ($producten as $product) {

        // echo '<a href="productdetail.php?id=' . $product['id'] . '">';
        // echo '<div class="product">';
        // echo $product['id'];
        // echo "<br>producttitel: " . $product['titel'];
        // echo "<br>prijs:" . $product['prijs'];
        // echo '</div>';
        // echo '</a>';

    ?>
        <a href="productdetail.php?id=<?php echo $product['id']; ?>">
            <div class="product">
                <br>id: <?php echo $product['id']; ?>
                <br>producttitel: <?php echo $product['titel']; ?>
                <br>&euro; prijs: <b><?php echo $product['prijs']; ?></b>
            </div>
        </a>

    <?php

    }



    ?>


    <a href="winkelwagen.php">
        <div>Ga naar winkelwagen</div>
    </a>




</body>

</html>