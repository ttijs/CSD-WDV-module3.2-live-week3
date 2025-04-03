<?php
session_start();

if (isset($_GET['leegmaken']) && $_GET['leegmaken'] == 1) {
    session_unset();
}
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

    <h1>winkelwagen</h1>

    <?php
    // Echo session variables that were set on previous page
    echo "winkelwageninhoud: ";

    //print_r($_SESSION["winkelwagen"]);

    if (isset($_SESSION["winkelwagen"])) {
        foreach ($_SESSION["winkelwagen"] as $product_in_winkelwagen) {
            // echo "product: " . $product_in_winkelwagen;
            // echo "<br>";

            include "productenarray.php";

            foreach ($productarray as $product) {
                if ($product_in_winkelwagen == $product['id']) {
    ?>
                    <a href="productdetail.php?id=<?php echo $product['id']; ?>" style="margin-bottom: 30px; display: block">
                        <div class="product">
                            product id = <?php echo $product['id']; ?>
                            <br>productnaam: <?php echo $product['naam']; ?>
                            <br>prijs:<?php echo $product['prijs']; ?>
                        </div>
                    </a>



    <?php
                }
            }
        }
    }
    ?>

    <br><br>
    <a href="winkelwagen.php?leegmaken=1" style="border: 1px solid red; padding: 5px">winkelwagen leegmaken</a>
    <br>

</body>

</html>