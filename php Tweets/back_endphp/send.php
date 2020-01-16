<?php
@require('../config_file/conn.php');

if(isset($_POST['submit'])){
        $userMail=$_POST['email'];
        $tweet=$_POST['tweet'];
        
        // $userMail=mysqli_real_escape_string($conn,$_POST['email']);
        // $tweet=mysqli_real_escape_string($conn,$_POST['tweet']);

        $sql="INSERT INTO users (userMail, randomText) VALUES(' $userMail', '$tweet')";

        if(mysqli_query($conn,$sql)){
                
          header("Location: ../index.php?success");  
        }else{
            // header("Location: ../Tweet.php?failed"); 
            echo 'Error log :'. mysqli_error($conn);
        }

    }





















// header("Location: ../index.php"); ?>
