<!DOCTYPE html>
<html lang="en">
<head>
    <style>
       div .card{
            border-radius:50%;
        }
        </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">

        <?php
 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "megastoredb";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $bit="SELECT * FROM categories";
    $result=$conn->query($bit);

    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            echo'<div class="col-sm-4">';
            echo '<div class="card">';
            echo '<div class="card-body"';
            echo '<img src="http://localhost/wamp64/www/megastore/dashborad/pages/'.$row["img"].'">';
            echo '<h5 class="card-title">'.$row["name"].'<h5>';
            echo '<p class="card-body">'.$row["subcategory"].'<p>';
            echo '<p class="card-text">$'.$row["img"].'<p>';
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
</body>
</html>