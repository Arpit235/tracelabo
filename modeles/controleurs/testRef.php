<?php

session_start();
include "config.php";


echo substr($_SERVER['HTTP_REFERER'],33,2);

?>
