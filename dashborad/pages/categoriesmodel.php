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


if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $subcategory=$_POST['subcategory'];
    $status=$_POST['status'];


$target_dir="upload/";
$target_file=$target_dir . basename($_FILES["img"]["name"]);
$imageFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));




$chech=getimagesize($_FILES["img"]["tmp_name"]);
if($chech !== false){
    if(move_uploaded_file($_FILES["img"]["tmp_name"],$target_file)){
        $img=$target_file;



$categories="INSERT INTO categories(name,subcategory,img,status)VALUES(
'$name',
'$subcategory',
'$img',
'$status'
)";

if($conn->query($categories)===TRUE){

    header("Location:categories.php");
}
else{
    echo "ERROR";
}
    }
else {
    echo "Sorry , there was an error uploading your file";
}
}
else{
    echo "File is not an img";
}
}


?>