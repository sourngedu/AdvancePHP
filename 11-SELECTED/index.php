<?php 
    include_once('config.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>Bootstrap Example</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

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

<div class="container">
<div class="page-header clearfix">
    <h2 class="pull-left">Employees Details</h2>
    <a href="create.php" class="btn btn-success pull-right">Add New Employee</a>
</div>

<table class="table">
<?php
    $sqlEmp="SELECT * FROM employees";
    $result = $pdo->query($sqlEmp);
    if($result){
        ?>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Salary</th>
    </tr>
    </thead>
    <tbody>  
        <?php 
        if($result->rowCount() > 0){
            while($row = $result->fetch()){
        ?>        
            <tr class="success">
                <td><?php echo $row['id']; ?></td>
                <td>  <a href="read.php?id=<?php echo $row['id']; ?>" title='Detail <?php echo $row['name']; ?>' data-toggle='tooltip'>  <?php echo $row['name']; ?></a> </td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['salary']; ?></td>
                <td>
                    
                   <a href="read.php?id=<?php echo $row['id']; ?>" title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>
                   <a href="update.php?id=<?php echo $row['id']; ?>" title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>
                   <a href="delete.php?id=<?php echo $row['id']; ?>" title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>
                    
                </td>

            </tr>
            <?php
            }
        }
    }
            // Close connection
            unset($pdo);
            ?>
    
    
    </tbody>  


</table>
</div>

</body>
</html>

