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
    <h3>Update Employee</h3>
    <?php
        $sqlEmp="SELECT * FROM employees WHERE id=$id";
        $result = $pdo->query($sqlEmp);
        if($result){           
            if($result->rowCount() > 0){
                while($row = $result->fetch()){
                    
                    $id=$row['id'];
                    $name=$row['name'];
                    $address=$row['address'];
                    $salary=$row['salary'];
                }
            }
        }
            
    ?>   


<?php 

if(isset($_POST['btnSave'])){

    $id=$_POST['id'];
    $name=$_POST['name'];
    $address=$_POST['address'];
    $salary=$_POST['salary'];


    // Check input errors before inserting in database
    // if(empty($name_err) && empty($address_err) && empty($salary_err)){
        // Prepare an update statement
        $sql = "UPDATE employees SET name=:name, address=:address, salary=:salary WHERE id=:id";
 
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":name", $param_name);
            $stmt->bindParam(":address", $param_address);
            $stmt->bindParam(":salary", $param_salary);
            $stmt->bindParam(":id", $param_id);
            
            // Set parameters
            $param_name = $name;
            $param_address = $address;
            $param_salary = $salary;
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Records updated successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
}

// Close connection
unset($pdo);

?>
    




    <div class="row">
        <div class="col-md-4">
        
        </div>
        <div class="col-md-8">
        <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                <div class="form-group ">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                    <span class="help-block"></span>
                </div>
                <div class="form-group ">
                    <label>Address</label>
                    <textarea name="address" class="form-control"><?php echo $address; ?></textarea>
                    <span class="help-block"></span>
                </div>
                <div class="form-group ">
                    <label>Salary</label>
                    <input type="text" name="salary" class="form-control" value="<?php echo $salary; ?>">
                    <span class="help-block"></span>
                </div>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="submit" name="btnSave" class="btn btn-primary" value="Update">
                <a href="index.php" class="btn btn-default">Cancel</a>
            
            </form>
        </div>
    </div>


    </div>
    
</body>
</html>