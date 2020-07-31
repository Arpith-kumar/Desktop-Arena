<?php
include_once('Assets/PHP/partsDBController.php');

class comapreController
{

    private $part;
    private $model1;
    private $model2;

    function __construct($part, $model1, $model2)
    {
        $this->part = $part;
        $this->model1 = $model1;
        $this->model2 = $model2;
    }

    function evaluate()
    {
        $d1 = explode("~", $this->model1)[1];
        $d2 = explode("~", $this->model2)[1];
        $query01 = "SELECT `Price` FROM `$this->part` WHERE Id = $d1";
        $query02 = "SELECT `Price` FROM `$this->part` WHERE Id = $d2";


        $db1 = new partsDBController($query01, 'Arpith', 'mite', 'Desktop-Arena', 'localhost:3306');
        $db1->execute();
        $result1 = $db1->getResult();

        $db2 = new partsDBController($query02, 'Arpith', 'mite', 'Desktop-Arena', 'localhost:3306');
        $db2->execute();
        $result2 = $db2->getResult();

        return $result1[0]['Price'] >= $result2[0]['Price'];


    }
}