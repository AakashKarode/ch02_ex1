<?php
      $product_description=(INPUT_POST,'product_description');
      $list_price=(INPUT_POST,'list_price');
      $discount_percent=(INPUT_POST,'discount_percent');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>This page is under construction</h1>

        <label>Product Description:</label>
        <span><?php echo ''; ?></span><br>

        <label>List Price:</label>
        <span><?php echo ''; ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo ''; ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo ''; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo ''; ?></span><br>
    </main>
</body>
</html>