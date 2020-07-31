<?php
include_once('Assets/PHP/partsDBController.php');
$query = "SELECT * FROM `operating_system`";
$db = new partsDBController($query,'Arpith', 'mite','Desktop-Arena', 'localhost:3306');
$db->execute(); $processor = $db->getResult()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="Assets/CSS/operatingsystem.css"/>
    <title></title>
</head>
<body>

<table id="customers" onclick="load_price()">
    <thead>
    <tr>
        <th>Id</th>
        <th>Operating System</th>
        <th>Architecture</th>
        <th>Developer</th>
        <th>Price(Rs)</th>
    </thead>
    <tbody>

    <?php foreach ($processor as $p){ ?>
        <tr tabindex="0">
            <td><?php echo $p['Id'];?></td>
            <td><?php echo $p['Operating_System'];?></td>
            <td><?php echo $p['Architecture'];?></td>
            <td><?php echo $p['Developer'];?></td>
            <td><?php echo $p['Price'];?></td>
        </tr>
    <?php } ?>

    </tbody>
</table>
<script src="Assets/JS/operatingsystem.js"></script>
</body>
</html>
