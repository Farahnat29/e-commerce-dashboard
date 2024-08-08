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
/*
$bit="CREATE DATABASE flutterdb";
if ($conn->query($bit)===TRUE){
    echo "DATABASE created Successfully";
}
else{
    echo " Error Creating DataBase";
}
    *//*
$bit="CREATE TABLE products(
id INT(11) AUTO_INCREMENT PRIMARY KEY,
name VARCHAR (50),
description VARCHAR(225),
brand VARCHAR(50),
categories VARCHAR(50),
tax VARCHAR(50),
tags VARCHAR(50),
price VARCHAR(50),
special_price VARCHAR(50),
sku VARCHAR(50),
stock VARCHAR(50),
media VARCHAR(50),
attributes VARCHAR(50),
meta_titile VARCHAR(50),
meta_description VARCHAR(50),
status VARCHAR (50)
)";
*/

/*

$bit ="CREATE TABLE categories(
id INT (11) AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(50),
subcategory VARCHAR(50),
image VARCHAR(50),
status VARCHAR(50)


)";

*/
/*
$bit ="CREATE TABLE brands(
    id INT (11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    subcategory VARCHAR(50),
    image VARCHAR(50),
    status VARCHAR(50)
    
    
    )";

    */
/*
    $bit ="CREATE TABLE tags(
        id INT (11) AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50)
        
        
)";
*/
/*
$bit ="CREATE TABLE orders(
    id INT (11) AUTO_INCREMENT PRIMARY KEY,
    customer_name VARCHAR(50),
    customer_email VARCHAR(50),
    total VARCHAR(50),
    status VARCHAR(50)
    
    
    )";

    */

    /*
    $bit ="CREATE TABLE coupon(
        id INT (11) AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50),
        code VARCHAR(50),
        discount_type VARCHAR(50),
        value VARCHAR(50),
        start_date VARCHAR(50),
        end_date VARCHAR(50),
        status VARCHAR(50)
        
        
        )";
*/
/*
$bit ="CREATE TABLE users(
    id INT (11) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    fname VARCHAR(50),
    lname VARCHAR(50),
    email VARCHAR(50),
    phone VARCHAR(50),
    roles VARCHAR(50),
    password VARCHAR(50),
    adderss VARCHAR(50)
    
    
    )";
*/
/*
$bit ="CREATE TABLE roles(
    id INT (11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    permissions VARCHAR(50)
    )";
if($conn->query($bit)===TRUE){
    echo "TABLE products created Successfully";

}
else{
    echo "ERROR creating Table";
}

*/
/*
 //Insert Products
 $pro="INSERT INTO products (name,description,brand,categories,tax,tags,price,special_price,sku,stock,media,attributes,meta_titile,meta_description,status)
 VALUES(
           '$_POST[name]',
            '$_POST[description]',
             '$_POST[brand]',
              '$_POST[categories]',
               '$_POST[tax]',
                '$_POST[tags]',
                 '$_POST[price]',
                  '$_POST[special_price]',
                   '$_POST[sku]',
                    '$_POST[stock]',
                     '$_POST[media]',
                      '$_POST[attributes]',
                       '$_POST[meta_titile]',
                        '$_POST[meta_description]',
                         '$_POST[status]' 
 )";
if($conn->query($pro)===TRUE){
    echo "New RECORD CREATED SUCCESSFULLY";
}
else{
    echo "ERROR";
}


//insert brands

$brands="INSERT INTO brands(name,image,status)
    VALUES(
      '$_POST[name]',
          '$_POST[image]',
            '$_POST[status]'

)";

if($conn->query($brands)===TRUE){
    echo "New RECORD CREATED SUCCESSFULLY";
}
else{
    echo "ERROR";
}


//insert categories

$categories="INSERT INTO categories(name,subcategory,image,status)
    VALUES(
      '$_POST[name]',
        '$_POST[subcategory]',
          '$_POST[image]',
            '$_POST[status]'

)";

if($conn->query($categories)===TRUE){
    echo "New RECORD CREATED SUCCESSFULLY";
}
else{
    echo "ERROR";
}


//insert coupon

$coupon="INSERT INTO coupon(name,code,discount_type,value,start_date,end_date,status)
    VALUES(
      '$_POST[name]',
        '$_POST[code]',
          '$_POST[discount_type]',
          '$_POST[value]'
          '$_POST[start_date]'
          '$_POST[end_date]'
            '$_POST[status]'

)";

if($conn->query($coupon)===TRUE){
    echo "New RECORD CREATED SUCCESSFULLY";
}
else{
    echo "ERROR";
}

/*
//insert orders

$orders="INSERT INTO order(customer_name,customer_email,total,status)
    VALUES(
      '$_POST[customer_name]',
        '$_POST[cocustomer_emailde]',
          '$_POST[total]',
            '$_POST[status]'

)";

if($conn->query($orders)===TRUE){
    echo "New RECORD CREATED SUCCESSFULLY";
}
else{
    echo "ERROR";
}

//insert tags

$tags="INSERT INTO tags(name)
    VALUES(
      '$_POST[name]',
 

)";

if($conn->query($tags)===TRUE){
    echo "New RECORD CREATED SUCCESSFULLY";
}
else{
    echo "ERROR";
}

//insert roles

$roles="INSERT INTO roles(name,permissions)
    VALUES(
      '$_POST[name]',
      '$_POST[permissions]'
 

)";

if($conn->query($roles)===TRUE){
    echo "New RECORD CREATED SUCCESSFULLY";
}
else{
    echo "ERROR";
}


<?php

$servername="localhost";
$username="root";
$password="";
$dbname="flutterdb";

//Create Connection

$conn= new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error){
    die("connection failed".$conn->connect_error);

}
else{
    echo "Connected Successfully";
}
/*
if ($_SERVER['REQUEST_METHOD']== 'POST' && isset($_FILES['image'])){
    $target_dir="upload/";
    $image_name=basename($_FILES["image"]["name"]);

    $target_file=$target_dir .$image_name;

    $imageFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $allowed_types=array("jpg","png","jpeg","gif");

    if(in_array($imageFileType,$allowed_types)){
        if(move_uploaded_file($_FILES["image"]["tmp_name"],$target_file)){

            $img="INSERT INTO images(image_name,image_path)VALUES('$image_name','$target_file')";

            if ($conn->query($img)===TRUE){
                echo "New image Recored Created Successfully";
            }
            else {
                echo "ERROR INSERTING IMAGE record ";
            }
        }
        else {
            echo "error uploading the file";
        }
    }
    else {
        echo "INVALID FILE TYPE";
    }
}

$conn->close();
*/

?>