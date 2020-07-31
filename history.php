<?php
$a = 1;
include_once('Assets/PHP/partsDBController.php');
$query = "SELECT * FROM finshed_desktop";
$db = new partsDBController($query, 'Arpith', 'mite', 'Desktop-Arena', 'localhost:3306');
$db->execute();
$desktop = $db->getResult()

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="Assets/CSS/history.css"/>
</head>
<body>

<div id="desktop-block">

    <?php foreach ($desktop as $d) {
        $parts = explode('|', $d['Parts']);
        ?>

        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <?php if ($a >= 5) { $a = 1; } else { $a += 1; }?>
                    <?php echo "<img src=\"Assets/Images/".$a.".png\" alt=\"Avatar\" style=\"width:300px;height:300px;\">"?>
<!--                        <img src="Assets/Images/desktop1.jpg" alt="Avatar" style="width:300px;height:300px;">-->
                    <h1 style="margin-top: 50px;"><?php echo $d['Name']; ?></h1>
                </div>
                <div class="flip-card-back">

                    <table id="Specification-table">
                        <thead>
                        <th colspan="2" style="text-align: center"><h1><?php echo $d['Name']; ?></h1></th>
                        </thead>
                        <tbody>
                        <tr>
                            <td><p><b>Processor</b></p></td>
                            <td><?php echo " " . $parts[1]; ?></td>
                        </tr>
                        <tr>
                            <td><p><b>Motherboard</b></p></td>
                            <td><?php echo " " . $parts[2]; ?></td>
                        </tr>
                        <tr>
                            <td><p><b>Memory</b></p></td>
                            <td><?php echo " " . $parts[3]; ?></td>
                        </tr>
                        <tr>
                            <td><p><b>Storage</b></p></td>
                            <td><?php echo " " . $parts[4]; ?></td>
                        </tr>
                        <tr>
                            <td><p><b>Videocard</b></p></td>
                            <td><?php echo " " . $parts[5]; ?></td>
                        </tr>
                        <tr>
                            <td><p><b>Operating System</b></p></td>
                            <td><?php echo " " . $parts[sizeof($parts) - 1]; ?></td>
                        </tr>
                        <tr>
                            <td><p><b>Price(Rs.)</b></p></td>
                            <td><?php echo " " . $d['Price']; ?></td>
                        </tr>

                        </tbody>
                    </table>

                    <label class="container">
                        <input type="checkbox" class="checkbox" id=<?php echo $d['Id']; ?> >
                        <span class="checkmark"></span>
                    </label>

                </div>
            </div>
        </div>

    <?php } ?>

</div>

<script src="Assets/JS/history.js"></script>
</body>
</html>
