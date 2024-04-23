<?php
require 'dbcon.php';
class Item{
    function addItem($code,$name,$brand,$price,$quantity){
        $con= get_con();
        
        $sql=$con->prepare("INSERT INTO product(code,name,brand,price,stock) VALUES(?,?,?,?,?)");
        $sql->bind_param("sssdi",$code,$name,$brand,$price,$quantity);
        return $sql->execute();
    }
    public static function getItems(){
        $con= get_con();
        //queries
        $sql="SELECT code,name,brand,price,stock FROM product";
 
        $result=$con->query($sql);

        while($row = mysqli_fetch_assoc($result)){
            $rows[]=array("code"=>$row["code"],"name"=>$row["name"],"brand"=>$row["brand"],"price"=>$row["price"],"stock"=>$row["stock"]);
        }
        return $result;
    }
    public static function echoItems(){
        $con= get_con();
        //queries
        $sql="SELECT code,name,brand,price,stock FROM product";
 
        $result=$con->query($sql);
       
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";    
            echo "<td>".$row['code']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['brand']."</td>";
            echo "<td>".$row['price']."</td>";
            echo "<td>".$row['stock']."</td>";
            echo "</tr>";
        }
       
    }
}