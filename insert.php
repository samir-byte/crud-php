<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        include 'conn.php';
        
            
            $title = $_POST['title'];
            $desc = $_POST['descs'];

            $sql = "INSERT INTO `notes` (`title`, `description`) VALUES ('$title', '$desc');";

            $result = mysqli_query($con,$sql);
            if ($result){
                echo '<div class="alert alert-success" role="alert">
                Note successfully added!
              </div>';
            }
            else {
                echo '<div class="alert alert-danger" role="alert">
                Note adding failed!
              </div>';
            }
        
    }


?>