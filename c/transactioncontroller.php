<?php
session_start();
if(isset($_GET['action'])){
    if($_GET['action']=="get_item"){
        require '../m/Item.php';
        
        $code= htmlspecialchars($_POST['item_code']);
        $item = new Item();
        $item->addItem($code, $name, $brand, $price, $quantity);
        header("location:../index.php");
    }
    else if($_GET['action']=="getitems"){
        require '../m/Item.php';
        echo Item::getItems();
    }
    else{
        header("location:../index.php");
    }
}
else{
    header("location:../index.php");
}