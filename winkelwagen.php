<?php


session_start();


if (!isset($_SESSION['winkelwagen'])) {
    $_SESSION['winkelwagen'] = [];
}


if (isset($_GET['id'])) {
    $bestelde_product = $_GET['id'];
    echo "binnenkomende id = " . $bestelde_product;
    echo "<br>";

    // bestaat het product al in winkelwagen, dan aantal ophogen, anders op 1 zetten
    if (isset($_SESSION['winkelwagen'][$bestelde_product])) {
        $_SESSION['winkelwagen'][$bestelde_product]++;
    } else {
        $_SESSION['winkelwagen'][$bestelde_product] = 1;
    }
}

if (isset($_GET['delete'])) {
    $delete_product = $_GET['delete'];
    unset($_SESSION['winkelwagen'][$delete_product]);
}


echo '<pre>de SESSION-array ziet er zo uit:<br>';
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

    <?php include 'header.php'; ?>

    <h1>dit is winkelwagen</h1>

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
                echo "subtotaal = &euro; " .  $subtotaal;
                echo "<br>";

    ?>
                <a href="winkelwagen.php?delete=<?php echo $product_id_in_winkelwagen; ?>" style="background-color: red">Verwijderen</a>
                <br>

    <?php

                $totaal += $subtotaal;
            }
        }

        echo "<br>";
    }

    echo "totaal van de hele bestelling is " . $totaal;

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


    //    session_destroy();

    ?>




</body>

</html>