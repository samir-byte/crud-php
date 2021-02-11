<?php
     
     $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "crud";

        $con = mysqli_connect($servername,$username,$password,$db);
        if (!$con){
            die ("connection not establised".mysqli_connect_error());
        }





?>