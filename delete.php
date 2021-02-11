<?php
    include 'conn.php';
    if (!empty($_GET['id'])){
    
    
    $id = $_GET['id'];

    $sql = "DELETE FROM `notes` WHERE sn=$id";
    $result = mysqli_query($con,$sql);
    if($result){
        echo '<div class="alert alert-danger" role="alert">
        Record deleted successfully!
      </div>';
    }
    
}
   // header('location: index.php');


?>