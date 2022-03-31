
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
      $sql_cmd = "SELECT *, CONCAT(prefix,id) as LocationID FROM locations";
        $result = mysqli_query($con,$sql_cmd);
        
    ?>
    <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"> -->
    <!-- Launch demo modal -->
  <!-- </button> -->
  <?php
  while($row = mysqli_fetch_assoc($result)) {
  $sid = $row['supplierID']
  ?>
  <a href="#" data-toggle="modal" data-target="#exampleModalCenter"><?php echo $sid ?></a>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <h5>Popover in a modal</h5>
            
            <p>This <a href="#" role="button" class="btn btn-secondary popover-test" title="Popover title" data-content="Popover body content is set in this attribute.">button</a> triggers a popover on click.</p>
            <hr>
            <?php 
              $id = substr($sid,3,6);
              // $id = gettype($row['supplierID']);
              echo $id." is the numerical id of the supplier";
              $temp = "SELECT * from supplier where id = $id";
              $res = mysqli_query($con,$temp);
              while($row1 = mysqli_fetch_assoc($res)) {
                foreach ($row1 as $i){
                  echo $i.'<br>';
                } 
              }
            ?>
            <h5>Tooltips in a modal</h5>
            <p><a href="#" class="tooltip-test" title="Tooltip">This link</a> and <a href="#" class="tooltip-test" title="Tooltip">that link</a> have tooltips on hover.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <?php

  }

  ?>
</body>
</html>