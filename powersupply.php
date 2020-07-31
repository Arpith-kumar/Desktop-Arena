<?php
include_once('Assets/PHP/partsDBController.php');
$query = "SELECT * FROM `power_supply`";
$db = new partsDBController($query,'Arpith', 'mite','Desktop-Arena', 'localhost:3306');
$db->execute(); $processor = $db->getResult()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="Assets/CSS/powersupply.css"/>
    <title></title>
</head>
<body>

<table id="customers" onclick="load_price()">
    <thead>
    <tr>
        <th>Id</th>
        <th>Brand</th>
        <th>Model</th>
        <th>Power</th>
        <th>Efficiency</th>
        <th>Price(Rs)</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($processor as $p){ ?>
        <tr tabindex="0">
            <td><?php echo $p['Id'];?></td>
            <td><?php echo $p['Brand'];?></td>
            <td><?php echo $p['Model'];?></td>
            <td><?php echo $p['Power'];?></td>
            <td><?php echo $p['Efficiency'];?></td>
            <td><?php echo $p['Price'];?></td>
        </tr>
    <?php } ?>

    </tbody>
</table>
<script src="Assets/JS/powersupply.js"></script>
</body>
</html>
