
<?php 
// Include config file
include_once('config.php');

include_once ('config/session.php'); 



// Save Category

$cname=$icon="";
$cname_err=$icon_err="";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
   
    // Validate address
    $input_cname = trim($_POST["cname"]);
    if(empty($input_cname)){
        $cname_err = "Please enter an Category.";     
    } else{
        $cname = $input_cname;
    }

    // Validate address
    $input_icon = trim($_POST["icon"]);
    if(empty($input_icon)){
        $icon_err = "Please enter an Last Name.";     
    } else{
        $icon = $input_icon;
    }


    // ត្រួតពិនិត្យ​ error មុន​ពេល​បញ្ចូល​ទិន្ន​ន័យ​ទៅ​ក្នុង​ table user
    if(empty($cname_err) && empty($icon_err)){
    // Prepare an insert statement
        $sql = "INSERT INTO category (name, icon,status) VALUES (:cname,:icon,:status)";
 
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":cname", $param_cname);
            $stmt->bindParam(":icon", $param_icon);
            $stmt->bindParam(":status", $param_status);
      
            
            // Set parameters
            $param_cname = $cname;
            $param_icon = $icon;
            $param_status = trim($_POST["status"]);
           
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Records created successfully. Redirect to landing page
                header("location: categories.php");
                exit();
                // echo "Hello Success !";
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        unset($stmt);

    }

    // Close connection
    unset($pdo);
}



?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>All Posts</title>

<!-- Custom fonts for this template -->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/sb-admin-2.min.css" rel="stylesheet">

<!-- Custom styles for this page -->
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">




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

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <?php include_once('includes/sidebar.php'); ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <?php include_once('includes/topbar.php'); ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

        <!-- Page Heading -->
       
         
                    <!-- Form Create -->
                 
                            <div class="row">
                                <div class="col-md-4">
                                    <h3>Category List</h3> 


                                </div>
                                <div class="col-md-8">  
                                <h1 class="h3 mb-2 text-gray-800">Create Category</h1>                            
                                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">   
                                        <div class="form-group">
                                            <label>Category Name</label>
                                            <input type="text" name="cname" class="form-control">  
                                            <span><?php echo $cname_err; ?></span>                  
                                        </div>
                                        <div class="form-group">
                                            <label>Icon</label>
                                            <input type="text" name="icon" class="form-control"> 
                                            <span class="help-block"><?php echo $icon_err;?></span>                   
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                           <select name="status" id="status" class="form-control">
                                               <option value="1">Active</option>
                                               <option value="0">Disactive</option>

                                           </select>
                                            
                                        </div>
                                     

                  

                                        <!-- <input type="submit" class="btn btn-primary" value="Save"> -->
                                        <input type="submit" class="btn btn-primary" value="Submit">
                                        <a href="index.php" class="btn btn-default">Cancel</a>
    
                                    </form>          
            
                                </div>    
        
                            </div>


                    <!-- End Form Create -->
     
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
        </div>
        </div>
    </footer>
    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<?php include_once('includes/logout_model.php') ?>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>

</body>

</html>
