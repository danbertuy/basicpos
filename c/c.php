<?php
session_start();
if(isset($_GET['action'])){
    if($_GET['action']=="add_item"){
        require '../m/Item.php';
        
        $code= htmlspecialchars($_POST['item_code']);
        $name= htmlspecialchars($_POST['item_name']);
        $brand= htmlspecialchars($_POST['item_brand']);
        $price= htmlspecialchars($_POST['item_price']);
        $quantity= htmlspecialchars($_POST['item_quantity']);
        
        $item = new Item();
        $item->addItem($code, $name, $brand, $price, $quantity);
        header("location:../index.php");
    }
    else if($_GET['action']=="getitems"){
        require '../m/Item.php';
        echo Item::getItems();
    }
    else if($_GET['action']=="start_transaction"){
        
    }
    else{
        header("location:../index.php");
    }
}
else{
    header("location:../index.php");
}
