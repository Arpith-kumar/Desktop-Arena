<?php
    include_once('Assets/PHP/partsDBController.php');
    $query = "SELECT * FROM processor";
    $db = new partsDBController($query,'Arpith', 'mite','Desktop-Arena', 'localhost:3306');
    $db->execute(); $processor = $db->getResult()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="Assets/CSS/processor.css"/>
    <title></title>
</head>
<body>

<table id="customers" onclick="load_price()">
    <thead>
        <tr>
            <th>Id</th>
            <th>Brand</th>
            <th>Model</th>
            <th>Cores</th>
            <th>Speed</th>
            <th>Price(Rs)</th>
        </tr>
    </thead>
    <tbody>

        <?php foreach ($processor as $p){ ?>
            <tr tabindex="0">
                <td><?php echo $p['id'];?></td>
                <td><?php echo $p['Brand'];?></td>
                <td><?php echo $p['Model'];?></td>
                <td><?php echo $p['Cores'];?></td>
                <td><?php echo $p['Speed'];?></td>
                <td><?php echo $p['Price'];?></td>
            </tr>
        <?php } ?>

    </tbody>
</table>
<script src="Assets/JS/processor.js"></script>
</body>
</html>