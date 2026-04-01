<?php

session_start();

if (!isset($_SESSION['winkelwagen'])) {
    $_SESSION['winkelwagen'] = [];
}


$bestelde_product = $_GET['id'];

echo $bestelde_product;


if ( isset( $_SESSION['winkelwagen'][$bestelde_product] ) ) {
    $_SESSION['winkelwagen'][$bestelde_product]++;    
} else {
    $_SESSION['winkelwagen'][$bestelde_product] = 1;
}

echo '<pre>de SESSION-array ziet er zo uit:';
print_r($_SESSION);
echo '</pre>';

// session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    dit is winkelwagen

<hr>

        <?php include 'productenarray.php'; ?>


        <?php 

        $totaal = 0;
        foreach ($producten as $product) {
            // echo $product['titel'];
            // echo "<br>";
            foreach ($_SESSION['winkelwagen'] as $product_id_in_winkelwagen => $aantal_in_winkelwagen) {

                if ($product_id_in_winkelwagen == $product['id']) {
                    $subtotaal = 0;
                    echo $product_id_in_winkelwagen;
                    echo " is zovaak besteld: ";    
                    echo $aantal_in_winkelwagen;
                    echo "<br>";
                    echo " en deze heet " . $product['titel'];
                    echo "<br>";
                    echo " en deze kost " . $product['prijs'];
                    echo "<br>";

                    $subtotaal = $product['prijs'] * $aantal_in_winkelwagen;
                    $totaal += $subtotaal;

                    echo "subtotaal = &euro; " .  $subtotaal;
                    echo "<br>";
                }
            }

            echo "<br>";
        }

echo "totaal is " . $totaal;

        ?>














        <?php

        exit();
        foreach ($producten as $product) {
            //echo $product['id'];
            // alleen als het product ook in de session zit, wil ik die weergeven
            foreach ($_SESSION['winkelwagen'] as $artikel_in_winkelwagen => $aantal) {
                //echo 'artikel in winkelwagen: ' . $artikel_in_winkelwagen . "<br>";
                //echo 'aantal daarvan is : ' . $aantal . "<br>";

                if ($artikel_in_winkelwagen == $product['id']) {
                    echo $product['id'];
                    echo " zit in " . $aantal . " keer in winkelwagen <br>";
                }
            }
        }
        ?>




</body>
</html>