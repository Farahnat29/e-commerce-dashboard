<?php
$servername="localhost";
$username="root";
$password="";
$dbname="myD";

//create connection 

$conn =new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error){
    die("connection falid" .$conn->connect_error);
}

$bit="SELECT id,username,email FROM userss";
$result=$conn->query($bit);
if($result->num_rows>0){
    while ($row=$result->fetch_assoc()){
        echo "id:".$row['id']."-Username: ".$row['username']."email:".$row['email']."<br>";
    }

}
else {
echo"0 result";
}

$mega="DELETE FROM userss WHERE id=5";
if ($conn->query($mega)===TRUE){
    echo "Record Deleted Successfully";

}
else{
    echo"Error !";
}

$update="UPDATE userss SET email='mrbit@bit.com' WHERE id=6";
if ($conn->query($update)===TRUE){
    echo "Record updates Successfully";

}
else{
    echo"Error !";
}
?>