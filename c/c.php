<?php
session_start();
if(isset($_GET['action'])){
    if($_GET['action']=="add_item"){
        echo "ello";
    }
    else{
        header("location:../index.php");
    }
}
else{
    header("location:../index.php");
}
