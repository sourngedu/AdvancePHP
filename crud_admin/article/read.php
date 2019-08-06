<?php
// Attempt select query execution
$sql = "SELECT * FROM article where id=".$_GET['id'];
$result = $pdo->query($sql);
if($result){
if($result->rowCount() > 0){   
    while($row = $result->fetch()){
    ?>  

<div>

<!-- <a  class="float-right"href="">Add New</a> -->
<a href="home.php?page=article&frm=create" class="btn btn-success btn-sm btn-icon-split float-right">
    <span class="icon text-white-50">
    <i class="fas fa-plus"></i>
    </span>
    <span class="text">Add New Article</span>
</a>
</div>


<div  style="margin-top: 50px;">  
<h4><?php echo $row['title']; ?></h4>
   

            <div class="row">
            <img style="width:100%;" src="article/upload/<?php echo $row['photo']; ?>" alt="">


              
                    <?php echo $row['detail']; ?>

               
            </div>
        
            
        
     

</div>
<?php
    }
    }
}
        
        // Close connection
        // unset($pdo);
    ?>