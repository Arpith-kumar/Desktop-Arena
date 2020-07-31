<?php
include_once ("Assets/PHP/cookieController.php");
include_once ("Assets/PHP/partsDBController.php");
//if (isset($_GET["select"])) {
//    echo '<script>';
//    echo 'alert("testG")';
//    echo '</script>';

$cookie = new cookieController("processor,motherboard,memory,storage,videocard,opticaldrive,powersupply,chassie,display,keyboard,mouse,cabincooler,cpucooler,operatingsystem");
$cookie->get();
$result = $cookie->getCookies();
//    print_r($result);
//}
if(isset($_GET["create"]))
{
//    echo '<script>';
//    echo 'alert("testP")';
//    echo '</script>';

    $desktop = new partsDBController("",'Arpith', 'mite','Desktop-Arena', 'localhost:3306');
    $desktop->createDesktop();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="Assets/CSS/summary.css"/>
    <title></title>
</head>
<body>

<table id="summary-table">
    <thead>
        <tr>
            <th colspan="2">Summary</th>
        </tr>
    </thead>
    <tbody>
    <?php for($a = 0; $a < sizeof($result); $a++) { ?>
        <tr>
            <td><?php echo $result[$a][0]." ".$result[$a][1]?></td>
            <td><?php echo $result[$a][2]?></td>
            <?php $_COOKIE['price'] = $_COOKIE['price'] + $result[$a][2]; ?>
        </tr>
    <?php } ?>
        <tr>
            <td>Price: </td>
            <td>&#x20b9; <p style="display: inline"><?php echo $_COOKIE['price'];?></p></td>
        </tr>

    </tbody>
</table>

<label for="pcname"></label><input type="text" id="pcname" placeholder="PC Name">

<div id="button-container">
<!--    <button id="get" onclick="getCookieData();">Get</button>-->
    <button id="confirm" onclick="setPCName()">Confirm</button>
</div>

<div id="snackbar">Desktop Created!</div>

<script src="Assets/JS/jquery-3.4.1.min.js"></script>
<script src="Assets/JS/summary.js"></script>
</body>
</html>
