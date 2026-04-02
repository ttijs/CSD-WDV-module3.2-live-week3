<?php
session_start();


// $_SESSION['winkelmandje'] = [
//     3 => 5,
//     2 => 1
// ];

$binnenkomende_id = $_GET['id'];

//$_SESSION['winkelmandje'][$binnenkomende_id] = 1;
if (isset($_SESSION['winkelmandje'][$binnenkomende_id]) ) {
    $_SESSION['winkelmandje'][$binnenkomende_id]++;
} else {
    $_SESSION['winkelmandje'][$binnenkomende_id] = 1;
}



foreach ($_SESSION['winkelmandje'] as $artikel_in_winkelmand => $aantal) {
    echo 'winkelmand-inhoud: ';
    echo $artikel_in_winkelmand;
    echo " zit zovaak in de winkelmand: " . $aantal;
    echo "<br>";
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
  <h1>bestelpagina</h1>  
<?php
    echo $_GET['id'];
?>

</body>
</html>