<?php
$servername="localhost";
$username="root";
$passwrod="";
$dbname="mydata";


//create connection 
$conn = new mysqli($servername,$username,$passwrod,$dbname);

if($conn->connect_error){
    die ("connection falid" . $conn->connect_error);
}


$bit="SELECT id,username,email FROM users ";
$result=$conn->query($bit);

if ($result->num_rows>0){
    while ($row=$result->fetch_assoc()){
        echo "id:" .$row["id"]." "." -username" .$row["username"]. " ". "email:" .$row["email"]."<br>";
    }
}
else{
    echo"0 result";
}


$mega="DELETE FROM users WHERE id=1 ";
if ($conn->query($mega)===TRUE){
    echo "Record Deleted Successfully";
}
else {
    "Error deleting record";
}

$x="UPDATE users SET email='x@mrbit.om' WHERE id=2";
if ($conn->query($x)===TRUE){
    echo "Record updated  Successfully";
}
else {
    "Error updating record";
}
?>