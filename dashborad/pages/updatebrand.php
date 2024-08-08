<?php
$servername="localhost";
$username="root";
$password="";
$dbname="megastoredb";

$conn= new mysqli($servername,$username,$password,$dbname);


if ($conn->connect_error){
  die("connection failed".$conn->connect_error);

}


if(count($_POST)>0){
  mysqli_query($conn,"UPDATE brands SET  name='".$_POST['name']."', img='".$_POST['img']."',password='".$_POST['status']."' WHERE id='".$_POST["id"]."'");
$message="RECORD MODIFIED Successfully";

}


$result=mysqli_query($conn,"SELECT * FROM brands WHERE id='".$_GET['id']."'");
$row=mysqli_fetch_array($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form role="form" action="brandsmodel.php" method="post">
  <div >
    <?php
    if(isset($message)) {
      echo $message; 
    }
    ?>
</div>

               
                <div class="mb-3">
                  <input type="text" name="name" value="<?php echo $row['name'];?>" class="form-control form-control-lg" placeholder="name" >
                </div>
               
                <div class="mb-3">
                  <input type="file" name="img" value="<?php echo $row['img'];?>" class="form-control form-control-lg">
                </div>
                <div class="mb-3">
                  <input type="text" name="status" value="<?php echo $row['status'];?>" class="form-control form-control-lg" placeholder="Password" >
                </div>
                <div class="text-center">
                  <input type="submit" class="btn btn-dark">
                </div>
              </form>
</body>
</html>