<?php
include_once('Assets/PHP/partsDBController.php');
$query = "SELECT * FROM `cpu_cooler`";
$db = new partsDBController($query,'Arpith', 'mite','Desktop-Arena', 'localhost:3306');
$db->execute(); $processor = $db->getResult()
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="Assets/CSS/cpucooler.css"/>
        <title></title>
    </head>
    <body>

    <table id="customers" onclick="load_price()">
        <thead>
        <tr>
            <th>Id</th>
            <th>Brand</th>
            <th>Model</th>
            <th>Cooler_Type</th>
            <th>Airflow</th>
            <th>Noice</th>
            <th>Price(Rs)</th>
        </tr>
        </thead>
        <tbody>

        <?php foreach ($processor as $p){ ?>
            <tr tabindex="0">
                <td><?php echo $p['Id'];?></td>
                <td><?php echo $p['Brand'];?></td>
                <td><?php echo $p['Model'];?></td>
                <td><?php echo $p['Cooler_Type'];?></td>
                <td><?php echo $p['Airflow'];?></td>
                <td><?php echo $p['Noice'];?></td>
                <td><?php echo $p['Price'];?></td>
            </tr>
        <?php } ?>

        </tbody>
    </table>
    <script src="Assets/JS/cpucooler.js"></script>
    </body>
    </html>
<?php
