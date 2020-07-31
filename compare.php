<?php
include_once('Assets/PHP/partsDBController.php');
include_once('Assets/PHP/comapreController.php');

$id = explode(",", $_COOKIE['desktopID']);

$query1 = "SELECT * FROM `finshed_desktop` WHERE id=" . $id[0];
$query2 = "SELECT * FROM `finshed_desktop` WHERE id=" . $id[1];

$db1 = new partsDBController($query1, 'Arpith', 'mite', 'Desktop-Arena', 'localhost:3306');
$db1->execute();
$result1 = $db1->getResult();

$db2 = new partsDBController($query2, 'Arpith', 'mite', 'Desktop-Arena', 'localhost:3306');
$db2->execute();
$result2 = $db2->getResult();

$pp = explode(",", "0,processor,motherboard,ram,storage,graphics_card,optical_drive,power_supply,cabinet,display,keyboard,mouse,cabinet_cooler,cpu_cooler,operating_system");
$score1 = 0;
$score2 = 0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="Assets/CSS/compare.css"/>
    <title></title>
</head>
<body>

<div id="desktop-container">
    <table id="Result-table-header">
        <thead>
        <tr>
            <td style="background-color: #e6e6e6; width: 25%;">COMPARING DESKTOPS</td>
            <td>
                <img src="Assets/Images/2.png" alt="Avatar" style="width:80px;height:80px;"><br>
                <?php echo $result1[0]['Name']; ?>
            </td>
            <td>
                <img src="Assets/Images/3.png" alt="Avatar" style="width:80px;height:80px;"><br>
                <?php echo $result2[0]['Name']; ?>
            </td>
        </tr>
        </thead>
    </table>
</div>

<div id="desktop-display">
    <table id="Result-table-body">
        <tbody>
        <?php foreach ($result1 as $r1) {
            foreach ($result2 as $r2) {
                $part1 = explode("|", $r1['Parts']);
                $part2 = explode("|", $r2['Parts']);
                for ($a = 1; $a < sizeof($pp); $a++) {
                    $part = $pp[$a];
                    $p1 = $part1[$a];
                    $p2 = $part2[$a];
                    $control = new comapreController($part, $p1, $p2);
                    $r = $control->evaluate();
                    ?>
                    <tr>
                        <td style="background-color: #e6e6e6; width: 25%; text-align: center;"><?php echo str_replace("_", " ", strtoupper($part)); ?></td>
                        <?php if ($r) { ?>
                            <td style="background-color: #88ff85;"><?php echo explode("~", $p1)[0]; ?></td>
                            <td><?php echo explode("~", $p2)[0];
                                $score1 += 1; ?></td>
                        <?php } else { ?>
                            <td><?php echo explode("~", $p1)[0];
                                $score2 += 1; ?></td>
                            <td style="background-color: #88ff85;"><?php echo explode("~", $p2)[0]; ?></td>
                        <?php } ?>
                    </tr>

                <?php }
            }
        } ?>
        </tbody>
    </table>
</div>


<div id="result-container">
    <table id="result-table">
        <thead>
        <tr>
            <td style="background-color: #e6e6e6; width: 25%;">RESULTS</td>
            <?php if($score1 > $score2) {?>
                <td>
                    <img src="Assets/Images/2.png" alt="Avatar" style="width:60px;height:60px;"><br>
                    <?php echo $result1[0]['Name']; ?><br>
                    <img src="Assets/Images/rating.png" alt="Avatar" style="width:80px;height:80px;"><br>
                </td>
                <td>
                    <img src="Assets/Images/3.png" alt="Avatar" style="width:60px;height:60px;"><br>
                    <?php echo $result2[0]['Name']; ?>
            <?php }else {?>
                <td>
                    <img src="Assets/Images/2.png" alt="Avatar" style="width:60px;height:60px;"><br>
                    <?php echo $result1[0]['Name']; ?>
                </td>
                <td>
                    <img src="Assets/Images/3.png" alt="Avatar" style="width:60px;height:60px;"><br>
                    <?php echo $result2[0]['Name']; ?><br>
                    <img src="Assets/Images/rating.png" alt="Avatar" style="width:80px;height:80px;"><br>
                    <?php }?>
            </td>
        </tr>
        </thead>
    </table>
</div>

<script src="Assets/JS/history.js"></script>
</body>
</html>

<?php echo $score1; ?>
<br>
<?php echo $score2; ?>
