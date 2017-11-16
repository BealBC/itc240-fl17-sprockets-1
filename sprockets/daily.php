<?php include 'includes/config.php'?>

<?php
//daily php code goes here
	
if(isset($_GET['day']))
{//show selected day
	$day = $_GET['day'];
}else{
	$day = date('l');
}	

?>

<?php include 'includes/header.php'?>
	<h3>Daily</h3>

<p><a href = "?day=Monday">Monday</a></p>
<p><a href = "?day=Tuesday">Tuesday</a></p>
<p><a href = "?day=Wednesday">Wednesday</a></p>
	
<?php include 'includes/footer.php'?>