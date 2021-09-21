
<!DOCTYPE html>
<html lang="en">
<head>
    
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<?php
    
    
      require '../connect.php';
      $sql_cmd = "SELECT * from `product locations`";
        $result = mysqli_query($con,$sql_cmd);
    
  if($row = mysqli_fetch_assoc($result)) {
    echo '<div class="container" style="margin: 30px; padding: 30px; border: 2px solid black; width: 200px;">';  
              $sid = $row['SupplierID'];
              $id = substr($sid,3,6);
              echo $id." is the numerical id of the supplier<br>";
              $temp = "SELECT name, email, phone from supplier where id = $id";
              $res = mysqli_query($con,$temp);
              
              while($row1 = mysqli_fetch_assoc($res)) {
                $data = "";
                foreach ($row1 as $i){
                  $data = $data.$i.'<br>';
                } 
              }
              echo '<a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">Toggle popover</a><br>';
              echo $data;
              echo '</div>';

       
  }
  

?>


</body>
</html>