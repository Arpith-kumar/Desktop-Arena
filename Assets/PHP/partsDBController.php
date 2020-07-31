<?php

class partsDBController
{
    private $user;
    private $password;
    private $database;
    private $host;
    private $query;
    private $connection;
    private $data;
    private $result;

    private $parts;
    private $price;
    private $name;

    public function __construct($query, $user, $password, $database, $host)
    {
        $this->query = $query;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;
        $this->host = $host;
    }

    public function execute()
    {
        $this->connection = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if (!$this->connection) {
            echo "Connection Error : " . mysqli_connect_error();
        }

        $this->data = mysqli_query($this->connection, $this->query);
        $this->result = mysqli_fetch_all($this->data, MYSQLI_ASSOC);

        $this->connection->close();
    }

    public function createDesktop()
    {

        if (isset($_COOKIE['processor'])) {
            $p = explode(",", $_COOKIE['processor']);
            $this->parts .= "|" . $p[0] . $p[1] . "~" . $p[3];
            $this->price += $p[2];

        }
        if (isset($_COOKIE['motherboard'])) {
            $p = explode(",", $_COOKIE['motherboard']);
            $this->parts .= "|" . $p[0] . $p[1] . "~" . $p[3];
            $this->price += $p[2];

        }
        if (isset($_COOKIE['memory'])) {
            $p = explode(",", $_COOKIE['memory']);
            $this->parts .= "|" . $p[0] . $p[1] . "~" . $p[3];
            $this->price += $p[2];

        }
        if (isset($_COOKIE['storage'])) {
            $p = explode(",", $_COOKIE['storage']);
            $this->parts .= "|" . $p[0] . $p[1] . "~" . $p[3];
            $this->price += $p[2];

        }
        if (isset($_COOKIE['videocard'])) {
            $p = explode(",", $_COOKIE['videocard']);
            $this->parts .= "|" . $p[0] . $p[1] . "~" . $p[3];
            $this->price += $p[2];

        }
        if (isset($_COOKIE['opticaldrive'])) {
            $p = explode(",", $_COOKIE['opticaldrive']);
            $this->parts .= "|" . $p[0] . $p[1] . "~" . $p[3];
            $this->price += $p[2];

        }
        if (isset($_COOKIE['powersupply'])) {
            $p = explode(",", $_COOKIE['powersupply']);
            $this->parts .= "|" . $p[0] . $p[1] . "~" . $p[3];
            $this->price += $p[2];

        }
        if (isset($_COOKIE['chassie'])) {
            $p = explode(",", $_COOKIE['chassie']);
            $this->parts .= "|" . $p[0] . $p[1] . "~" . $p[3];
            $this->price += $p[2];

        }
        if (isset($_COOKIE['display'])) {
            $p = explode(",", $_COOKIE['display']);
            $this->parts .= "|" . $p[0] . $p[1] . "~" . $p[3];
            $this->price += $p[2];

        }
        if (isset($_COOKIE['keyboard'])) {
            $p = explode(",", $_COOKIE['keyboard']);
            $this->parts .= "|" . $p[0] . $p[1] . "~" . $p[3];
            $this->price += $p[2];

        }
        if (isset($_COOKIE['mouse'])) {
            $p = explode(",", $_COOKIE['mouse']);
            $this->parts .= "|" . $p[0] . $p[1] . "~" . $p[3];
            $this->price += $p[2];

        }
        if (isset($_COOKIE['cabincooler'])) {
            $p = explode(",", $_COOKIE['cabincooler']);
            $this->parts .= "|" . $p[0] . $p[1] . "~" . $p[3];
            $this->price += $p[2];

        }
        if (isset($_COOKIE['cpucooler'])) {
            $p = explode(",", $_COOKIE['cpucooler']);
            $this->parts .= "|" . $p[0] . $p[1] . "~" . $p[3];
            $this->price += $p[2];

        }
        if (isset($_COOKIE['operatingsystem'])) {
            $p = explode(",", $_COOKIE['operatingsystem']);
            $this->parts .= "|" . $p[0] . $p[1] . "~" . $p[3];
            $this->price += $p[2];
        }

        if (isset($_COOKIE['pcname'])) {
            $this->name = $_COOKIE['pcname'];
        }


        $connection_ = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if (!$connection_) {
            echo "Connection Error : " . mysqli_connect_error();
        }

//        $this->price =strval($this->price);

        $q = "INSERT INTO `finshed_desktop` (`Name`,`Parts`,`Price`) VALUES ('$this->name','$this->parts', $this->price)";

        if (mysqli_query($connection_, $q)) {
//            echo '<script>';
//            echo 'alert("testP")';
//            echo '</script>';
        } else {
//            echo '<script>';
//            echo 'alert("testF")';
//            echo '</script>';
        }

        $connection_->close();
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }
}