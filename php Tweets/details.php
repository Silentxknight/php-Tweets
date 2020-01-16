<?php
 require('config_file/conn.php');

if(isset($_POST['del'])){
	$id_to_del=mysqli_real_escape_string($conn, $_POST['id_to_del']);
	$sql="DELETE FROM users WHERE id=$id_to_del ";
	if(mysqli_query($conn, $sql)){
		header('Location: index.php');

	}else{
		echo "query Error".mysqli_error($conn);
	}
}















if(isset($_GET['id'])){

$id= mysqli_real_escape_string($conn,$_GET['id']);

$sql= "SELECT * FROM users WHERE id = $id";
$result=mysqli_query($conn,$sql);
$detailss=mysqli_fetch_assoc($result);

// print_r($detailss);

mysqli_free_result($result);
mysqli_close($conn);




?>


<!DOCTYPE html>
<html lang="en">


<?php include('head&foot/header.php');?>

<div class="container center">
	<?php if($detailss):?>
		<div class="center white"  style="margin: 20px;padding:10px ">
			<h5>Wrote By: <?php echo htmlspecialchars ($detailss['userMail']); ?></h4>
		<p><?php echo htmlspecialchars($detailss['randomText'])?></p>
		</div>
		<?php else: ?>
		<div class="container white"><h2 class="center" >Sorry No Tweets</h2></div>
		<?php endif; ?>	


		<form action="details.php" method="POST">
			<input type="hidden" name="id_to_del" value="<?php echo $detailss['id'] ?>">
	<input type="submit" name="del" class="btn center brand" value="Delete Tweet">


		</form>
	</div>





      
<?php include('head&foot/footer.php'); ?>

</html>

<?php }
else{ ?>
<h1>404</h1>

<?php }?>