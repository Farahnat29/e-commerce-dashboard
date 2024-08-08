
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="megastoredb";

$conn= new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error){
    die("connection failed".$conn->connect_error);
}

if(isset($_GET['id'])){
$id=$_GET['id'];
$bit=$conn->prepare("SELECT * FROM brands WHERE id=?");
$bit->bind_param("i",$id);
$bit->execute();
$result =$bit->get_result();


if($result->num_rows>0){
    $row=$result->fetch_assoc();
}
else{
    $row = null;
    echo "No Brand  Found with the Given id";
}


}
?>