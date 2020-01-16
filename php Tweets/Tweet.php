

<!DOCTYPE html>
<html lang="en">

<?php include('head&foot/header.php');?>

<section id='form' class="container #ea80fc purple accent-1" >
<h4 class="center">Post Tweet</h4>
<form id='form_sec' class="white" action="back_endphp/send.php" method="POST" >
<input type="text" placeholder="E-mail"  name="email">
<input type="text" placeholder='random text'  name='tweet'>
<div class="center">
    <input type="submit" name="submit" value="post" class="btn brand">
</div>
 
</form>
</section>


<?php include('head&foot/footer.php'); ?>

</html>