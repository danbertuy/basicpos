<?php

function get_con(){
    $username="root";
    $pass="";
    $dbname="db_basicpos";
    
    return $con = new mysqli("localhost",$username,$pass,$dbname);

}