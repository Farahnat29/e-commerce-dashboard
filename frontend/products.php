<?php include 'header.php';?>

<div class="container">
        <div class="row">

        <?php
 
    $servername ="localhost";
    $username ="root";
    $password ="";
    $dbname ="megastoredb";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $bit="SELECT * FROM products";
    $result=$conn->query($bit);

    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            echo'<div class="col-sm-4">';
            echo '<h5 class="card-body"><h5>';
            echo '<div class="card">';
            echo '<div class="card-body"';
            echo '<h5 class="card-title">'.$row["name"].'<h5>';
            echo '<img src="http://localhost/megastore/dashborad/pages/' . $row["img"] . '" >';

            echo '<p class="card-body">'.$row["description"].'<p>';
            echo '<p class="card-text">$'.$row["price"].'<p>';
            echo '<a href="#" class="btn btn-primary">ADD TO CART </a>';
            echo '<a href="details.php?id='.$row["id"].'" class="btn btn-danger">view </a>';
            echo'</div>';
            echo'</div>';
            echo'</div>';


        }
    }
    else{
        echo " 0 Result" ;
    }
        ?>


</div>

<?php include 'footer.php';?>