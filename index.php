<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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

    <h1>Productenzzzzzzzzzzzzzzzz</h1>

    <div id="productengrid">

        <?php include 'productenarray.php'; ?>

        <?php
        //var_dump($producten);
        foreach ($producten as $product) {
            //echo $product['id'];
        ?>
            <a href="productdetail.php?nummer=<?php echo $product['id']; ?>">
                <div class="product">
                    <br />id: <?php echo $product['id']; ?>
                    <br />productnaam: <?php echo $product['titel']; ?><br />
                    &euro; prijs: <b><?php echo $product['prijs']; ?></b>
                </div>
            </a>
        <?php
        }
        ?>

        <a href="productdetail.php?id=3">
            <div class="product">
                <br />id: 3 <br />productnaam: eikenhout <br />&euro; prijs:
                <b>20</b>
            </div>
        </a>

        <a href="productdetail.php?id=5">
            <div class="product">
                <br />id: 5 <br />productnaam: donker hout <br />&euro; prijs:
                <b>14</b>
            </div>
        </a>

        <a href="productdetail.php?id=21">
            <div class="product">
                <br />id: 21 <br />productnaam: berkenhout <br />&euro; prijs:
                <b>22</b>
            </div>
        </a>

        <a href="productdetail.php?id=12">
            <div class="product">
                <br />id: 12 <br />productnaam: xxl eikenhout <br />&euro;
                prijs: <b>30</b>
            </div>
        </a>

    </div>

    <a href="winkelwagen.php">
        <div>Ga naar winkelwagen</div>
    </a>


</body>

</html>