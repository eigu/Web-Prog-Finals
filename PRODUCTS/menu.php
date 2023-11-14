<!DOCTYPE html>
<html>
<title>Products</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<style>
p.card-text {
    font-size: 10px;
}
</style>

<body>

  <h2>Menu</h2>  
  
<div class="row row-cols-3 g-3">  
<?php
// database connection code
$con = mysqli_connect('localhost', 'root', '','online_store2');

// database insert SQL code
$sql = "SELECT * FROM products";

$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
    echo '<div class="col">';
    echo '<div class="card">';
    echo '<img src="../assets/coffee.jpg" class="card-img-top" alt="coffee" />';
    echo '<div class="card-body">';
    echo '<h5 class="card-title">'.$row["itemname"].'</h5>';
    echo '<p class="card-text">'. $row["description"].'</p>';
    echo '<p class="qty">'. $row["quantity"].'</p>';
    echo '</div>';
    echo '</div>';
    echo '</div>';

    


    // echo '<img src="../assets/coffee1.jpg" alt="Alps" style="width:100%; height:300px;">';
    // echo '<div class="w3-container w3-center">';
    // echo '<p class="itemname">'.$row["itemname"]."</p>";
    // echo '<p class="itemdesc">'. $row["description"].'</p>';
    // echo '<p class="qty">'. $row["quantity"].'</p>';
    // echo '</div>';
    // echo '</div>';
  }
} else {
  echo "0 results";
}
$con->close();

?>
</div>
</div>
</div>

</body>
</html>