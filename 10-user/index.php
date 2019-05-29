
<?php
 // Include config file
 require_once "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <div class="page-header clearfix">
                        <h2 class="pull-left">User Details</h2>
                        <a href="create.php" class="btn btn-success pull-right">Add New User</a>
                    </div>



<?php
    // Attempt select query execution
    $sql = "SELECT * FROM user";
    if($result = $pdo->query($sql)){
        if($result->rowCount() > 0){
?>
                    

                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                    </tr>
                    </thead>
                    <tbody>
            <?php 
                 while($record = $result->fetch()){
            ?>
                    <tr>
                        <td><?php echo $record['id']; ?></td>
                        <td><?php echo $record['first_name']; ?></td>
                        <td><?php echo $record['last_name']; ?></td>
                        <td><?php echo $record['email']; ?></td>
                    </tr>

                 <?php } ?>      


                    </tbody>
                </table>              


 <?php 
        }
    }
 ?>
                
                </div>
            </div>        
        </div>
    </div>
</body>
</html>