<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>List all student information</h2>
  
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Bird of Date</th>
        <th>Place of Birth</th>
      </tr>
    </thead>
    <tbody>

    <?php 

        $sID=$_GET['sid'];
        $sName=$_GET['sName'];
        $sGender=$_GET['sGender'];
        $sBOD=$_GET['sBOD'];
        $sPOB=$_GET['sPOB'];

    
    ?>

      <tr>
        <td><?php echo $sID; ?></td>
        <td><?php echo $sName; ?></td>
        <td><?php echo $sGender; ?></td>
        <td><?php echo $sBOD; ?></td>
        <td><?php echo $sPOB; ?></td>
      </tr>
      
    </tbody>
  </table>

<a class="btn btn-primary" href="index.php">Back</a>
</div>

</body>
</html>
