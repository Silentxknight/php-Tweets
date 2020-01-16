
<!DOCTYPE html>
<html lang="en">

<?php include('head&foot/header.php');
      include('config_file/conn.php');

$sql="SELECT  userMail, randomText, id FROM users ORDER BY id"; 

$result = mysqli_query($conn,$sql);

$data = mysqli_fetch_all($result,MYSQLI_ASSOC);

// print_r($data);

?>

<div class="container">
    <div class="row">
      <?php foreach($data as $twt){ ?>
        
        <div class="col s6 md3 ">
            <div class="card">
             <div class="card-content center">
                <h6><?php echo htmlspecialchars($twt['userMail']) ?></h6>
                <div><p><?php echo htmlspecialchars($twt['randomText']) ?></p></div>
             </div>
             <div class="card-action right-align">
                <a href="details.php?id=<?php echo $twt['id']?>" class="brand-text">Details</a>
             </div>
            </div>
        </div>

      <?php }?>
    </div>

</div>




<?php include('head&foot/footer.php'); ?>

</html>