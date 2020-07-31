<?php

class cookieController
{
    private $cnames;
    private $carray = array();
    private $part = array();
    private $result = array();

    public function __construct($cnames)
    {
        $this->cnames = $cnames;
    }

    function get()
    {
        $this->carray = explode(",", $this->cnames);
        $index = 0;
        foreach ($this->carray as $data) {
            if (isset($_COOKIE[$data])) {
                $this->part = explode(",", $_COOKIE[$data]);
                $this->result[$index] = $this->part;
                $index += 1;

            } else {
//                echo '<script>';
//                echo 'alert("' . strtoupper($data) . ' Not Selected!")';
//                echo '</script>';
            }
        }
    }

    function getCookies()
    {
        return $this->result;
    }
}

