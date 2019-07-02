<?php 
    include_once('config.php');
    $id=$_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <title>Read Data</title>
</head>
<body>



<div class="container">
    <h3>Read Employee Detail</h3>
      <?php
        $sqlEmp="SELECT * FROM employees WHERE id=$id";
        $result = $pdo->query($sqlEmp);
        if($result){           
            if($result->rowCount() > 0){
                while($row = $result->fetch()){
            ?>        
               <h3>ID :  <strong><?php echo $row['id']; ?></strong> </h3>
               <h3>Name : <strong><?php echo $row['name']; ?></strong></h3>
               <h3>Address : <strong><?php echo $row['address']; ?></strong></h3>
               <h3>Salary : <strong style="color:red;"><?php echo $row['salary']; ?></strong></h3>    

               <a href="index.php" class="btn btn-primary"> Back</a>               
                
                <?php
                }
            }
        }
                // Close connection
                unset($pdo);
                ?>   
    
    </div>
    
</body>
</html>