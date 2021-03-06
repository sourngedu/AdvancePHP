
<div>
<h4 class="m-0 font-weight-bold text-primary float-left">User List</h4>
<!-- <a  class="float-right"href="">Add New</a> -->
<a href="home.php?page=category&frm=create" class="btn btn-success btn-sm btn-icon-split float-right">
    <span class="icon text-white-50">
    <i class="fas fa-plus"></i>
    </span>
    <span class="text">Add New User</span>
</a>
</div>
<div class="table-responsive" style="margin-top: 50px;">  
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
    <!-- <table class="table table-bordered" style="margin-top: 50px;"> -->
    <?php
        // Attempt select query execution
        $sql = "SELECT * FROM users";
        $result = $pdo->query($sql);
        if($result){
        if($result->rowCount() > 0){
        ?>

        <thead>
            <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>UserName</th>
                    
            <th>Action</th>
            </tr>
        </thead>

        <tfoot>
            <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>UserName</th>
                    
            <th>Action</th>
            </tr>
        </tfoot>

        <tbody>
            <?php
            while($row = $result->fetch()){
            ?>    
                <tr class="success">
                    <td><?php echo $row['id']?></td>
                    <td><a href="read.php?id=<?php echo $row['id']; ?>" title='Detail <?php echo $row['full_name']?>' data-toggle='tooltip' ><?php echo $row['full_name']?></a></td>
                    <td><?php echo $row['username']?></td>
                                
                    <td>
                        <a href="read.php?id=<?php echo $row['id']; ?>" class="btn btn-info btn-sm">
                            <i class="fas fa-eye"></i> 
                        </a>
                        
                        <a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-success btn-sm">
                            <i class="fas fa-check"></i> 
                        </a>
                        <a class='btn btn-danger btn-sm' href="delete.php?id=<?php echo $row['id']; ?>" title='Delete Record' data-toggle='tooltip'><i class="fas fa-trash"></i> </a>
                    </td>

                </tr>
        
                <?php
            }
            }
        }
        
                            // Close connection
                            // unset($pdo);
            ?>
            </tbody>
    </table>
</div>