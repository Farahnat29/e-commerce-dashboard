<?php
$servername="localhost";
$username="root";
$password="";
$dbname="megastoredb";



$conn= new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error){
    die("connection failed".$conn->connect_error);

}
else{
    echo "Connected Successfully";
}



$brands="INSERT INTO brands(name,img,status)
    VALUES(
      '$_POST[name]',
          '$_POST[img]',
            '$_POST[status]'

)";

if($conn->query($brands)===TRUE){
    header("Location:brands.php");
}
else{
    echo "ERROR";
}
?>