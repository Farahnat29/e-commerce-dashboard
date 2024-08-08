


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="megastoredb";



$conn= new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error){
    die("connection failed".$conn->connect_error);

}
$mega="SELECT id,name,img,status FROM brands";
$result=$conn->query($mega);
if($result->num_rows>0){
  while($row=$result->fetch_assoc()){
    echo"<tr>";
    echo"<td>".$row["id"]. "</td>";
    echo"<td>".$row["name"]. "</td>";
    echo"<td>".$row["img"]. "</td>";
    echo"<td>".$row["status"]. "</td>";
    echo "<td>
    <form action='deldetbrand.php' method='POST'>
    <button type='submit' name='id' value='".$row["id"]."' class='btn btn-danger'>DELETE </button>
    </td>";
    echo "<td>
    <form action ='updatebrand.php' method='POST'>
    <button type='submit' name='id' value='".$row["id"]."' class='btn btn-primary'>Update</button>
    </form>

  
    </td>";
    echo <"td <a href="updatebrand.php?id=<?php echo $row['id']; ?>">update </a></td>";

    echo"</tr>";
  }
}
else{
  echo "Error";
}
?>

</body>
</html>