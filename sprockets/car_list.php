<?php
//customer_list.php - shows a list of customer data
?>
<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>

<h1><?=$pageID?></h1>
<?php
	
require 'includes/Pager.php'; #allows pagination 

$config->loadhead .= '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';
	
	
#reference images for pager
$prev = '<img src="' . $config->virtual_path . '/images/arrow_prev.gif" border="0" />';
$next = '<img src="' . $config->virtual_path . '/images/arrow_next.gif" border="0" />';

//$prev = '<i class="fa fa-chevron-circle-left"></i>';
//$next = '<i class="fa fa-chevron-circle-right"></i>';
	
$sql = "select * from classicCars";
//we connect to the db here
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

//we extract the data here
$myPager = new Pager(10,'',$prev,$next,'');
$sql = $myPager->loadSQL($sql,$iConn);  #load SQL, pass in existing connection, add offset
$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn))); 

if(mysqli_num_rows($result) > 0)
{//show records

    while($row = mysqli_fetch_assoc($result))
    {
        echo "<p>";
       echo "Year: <b>" . $row['Year'] . "</b><br />";
       echo "Make: <b>" . $row['Make'] . "</b><br />";
       echo "Model: <b>" . $row['Model'] . "</b><br />";
        
        echo '<a href="car_view.php?id=' . $row['ClassicCarID'] . '">' . $row['Year'] . '</a>';
        
        echo '</p>';
    }    

}else{//inform there are no records
    echo '<p>There are currently no cars</p>';
}
	
//release web server resources
@mysqli_free_result($result);

//close connection to mysql
@mysqli_close($iConn);

echo $myPager->showNAV();//show pager if enough records
	
?>

<?php include 'includes/footer.php';?>