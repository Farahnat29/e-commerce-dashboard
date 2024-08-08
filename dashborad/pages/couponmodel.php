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


$coupon="INSERT INTO coupon(name,code,discount_type,value,start_date,end_date,status)
    VALUES(
      '$_POST[name]',
        '$_POST[code]',
          '$_POST[discount_type]',
          '$_POST[value]',
          '$_POST[start_date]',
          '$_POST[end_date]',
            '$_POST[status]'

)";

if($conn->query($coupon)===TRUE){
   header("Location:coupon.php");
}
else{
    echo "ERROR";
}
