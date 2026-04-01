<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php include 'header.php'; ?>

    <?php
    $bestelde_product = $_GET['id'];
    echo 'besteld = ' . $bestelde_product;

    $_SESSION["winkelwagen"][$bestelde_product] = 1;

    //header('Location:  productoverzicht.php');




    //print_r($_SESSION["winkelwagen"]);

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
?>


</body>

</html>