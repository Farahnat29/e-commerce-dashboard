<?php
$servername="localhost";
$username="root";
$password="";
$dbname="megastoredb";

$conn= new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error){
    die("connection failed".$conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD']=='POST'){
    if (isset($_POST['id'])){
        $id=$_POST['id'];

        $bit=$conn->prepare("DELETE FROM products WHERE id=?");
        $bit->bind_param("i",$id);

        if($bit->execute()){
            header("Location:products.php");
        }
        else{
            echo "Error 405";
        }
        $bit->close();
    
    }
    else {
        echo"Error 505";
    }
}




?>