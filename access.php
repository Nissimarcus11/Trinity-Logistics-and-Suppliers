
<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php
require 'connect.php';
$option = $_GET['view'];



if($option != ""){
    if($option == "s"){
        $sql_cmd = "SELECT *, CONCAT(prefix,id) as SupplierID FROM supplier";
    
        $result = mysqli_query($con,$sql_cmd);

        while($row = mysqli_fetch_assoc($result)) {
        echo '<div class=" col-sm-12 col-md-6 col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/supp.jpg" alt="">
                        </div>
                        <div class="down-content">';

                            echo '<span>'. $row['SupplierID'] . '</span>
                                <h4>'.$row['name'].'</h4>
                                <p>'.$row['email'].'</p>
                                <p>'.$row['phone'].'</p>
                                <p>'.$row['description'].'</p>

                        </div>
                    </div>
                </div>';

        }
    }
    else if($option == "l"){
        $sql_cmd = "SELECT *, CONCAT(prefix,id) as LocationID FROM locations";
        $result = mysqli_query($con,$sql_cmd);
        while($row = mysqli_fetch_assoc($result)) {
            echo '<div class=" col-sm-12 col-md-6 col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">';
                echo '<iframe src="https://maps.google.com/maps?q='.$row['latitude'].','.$row['longitude'].'&z=15&output=embed" width="auto" height="auto" frameborder="0" style="border:0"></iframe>';
                echo '</div>
                <div class="down-content">';

                    echo '<span>'. $row['LocationID'] . '</span>
                        <h4>Supplier: <a href="#">'.$row['supplierID'].'</a></h4>
                        <p>'.$row['address'].', '.$row['district'].', '.$row['state'].'<br> '.$row['pincode'].'.'.'</p>
                        <p>'.$row['Description'].'</p>

                </div>
                
         </div>
    </div>';

    }
}
else{
    $sql_cmd = "SELECT * from `product locations`";
    $result = mysqli_query($con,$sql_cmd);
    while($row = mysqli_fetch_assoc($result)) {
        $sid = $row['SupplierID'];
        $LOCid = substr($row['LocationID'],3,6);
        $query = "SELECT * from locations WHERE id = $LOCid";
        $res = mysqli_query($con,$query); 
        while($locrow = mysqli_fetch_assoc($res)) {
            $lat = $locrow['latitude'];
            $long = $locrow['longitude'];
            
        }
        
        $id = substr($sid,3,6);
        // echo $id." is the numerical id of the supplier";
        $temp = "SELECT name, email from supplier where id = $id";
        $res = mysqli_query($con,$temp);
        
        while($row1 = mysqli_fetch_assoc($res)) {
          $data = "";
          foreach ($row1 as $i){
            $data = $data.$i.'<br>';
          } 
        }
            echo '<div class=" col-sm-12 col-md-6 col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/product.jpg" alt="">
                        </div>
                        <div class="down-content">';
                        
                            echo '<span>'. $row['ProductID'] . '</span>
                                <h4>'.$row['Name'].'</h4>
                                <p> Supplied by <a href="#">'.$sid.'</a></p>
                                <p> Available at <a href="https://maps.google.com/?q='.$lat.','.$long.'" target = "blank">'.$row['LocationID'].'</a></p>
                                <p>'.$row['description'].'</p>
                                <hr>
                                <p id="SupplierDetails">'.$data.'</p>


                        </div>
                    </div>
                </div>';
                
                
                
        
        
    
    }
    
}
}


mysqli_close($con);
?>
</body>
</html>