<?php
$servername="localhost";
$username="root";
$password="";
$dbname="megastoredb";

$conn= new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error){
    die("connection failed".$conn->connect_error);
}

if($_SERVER['REQUEST_METHOD']==='POST'){
    if(isset($_POST['id'])){
    $id=$_POST['id'];

     $del=$conn->prepare("DELETE FROM brands WHERE id=?");
     $del->bind_param("i",$id);

     if($del->execute()){
        header("Location:brands.php");
     }
     else{
        echo "Error 405";

     }
    }
    else{
        echo "Error 505";

    }

}
   