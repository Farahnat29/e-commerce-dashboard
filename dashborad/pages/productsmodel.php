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
    $description=$_POST['description'];
    $brand=$_POST['brand'];
    $categories=$_POST['categories'];
    $tax=$_POST['tax'];
    $tags=$_POST['tags'];
    $price=$_POST['price'];
    $special_price=$_POST['special_price'];
    $sku=$_POST['sku'];
    $stock=$_POST['stock'];
    $attributes=$_POST['attributes'];
    $meta_titile=$_POST['meta_titile'];
    $meta_description=$_POST['meta_description'];
    $status=$_POST['status'];


    $target_dir="upload/";
    $target_file=$target_dir . basename($_FILES["img"]["name"]);
    $imageFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));




    $chech=getimagesize($_FILES["img"]["tmp_name"]);
    if($chech !== false){
        if(move_uploaded_file($_FILES["img"]["tmp_name"],$target_file)){
            $img=$target_file;
    


$pro="INSERT INTO products (name,description,brand,categories,tax,tags,price,special_price,sku,stock,img,attributes,meta_titile,meta_description,status)
VALUES(
          '$name',
           '$description',
            '$brand',
             '$categories',
              '$tax',
               '$tags',
                '$price',
                 '$special_price',
                  '$sku',
                   '$stock',
                    '$img',
                     '$attributes',
                      '$meta_titile',
                       '$meta_description',
                        '$status' 
)";
if($conn->query($pro)===TRUE){
   header("Location:products.php");
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