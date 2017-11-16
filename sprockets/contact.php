<?php include 'includes/config.php'?>
<?php include 'includes/header.php'?>

<hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">Contact
          <strong>Form</strong>
        </h2>
<hr class="divider">

<?php
	
$to='bbeal003@seattlecentral.edu';

if(isset($_POST["FirstName"]))
{//if data, show it
    
    $FirstName = clean_post('FirstName');
    $LastName = clean_post('LastName');
    $Email = clean_post('Email');
    $Comments = clean_post('Comments');
    
    
    /*
    $FirstName = $_POST["FirstName"];
    $LastName = $_POST["LastName"];
    $Email = $_POST["Email"];
    $Comments = $_POST["Comments"];
    */
    
    $myText = "The user has entered their information as follows:" . PHP_EOL . PHP_EOL; //double newlines 
    $myText .= $FirstName . " " . $LastName . PHP_EOL;
    $myText .= $Comments . PHP_EOL;
       
    
    $to      = 'bbeal003@seattlecentral.edu';
    $subject = 'ITC240 Contact Form';
    $headers = 'From: noreply@newmanix.com' . PHP_EOL .
        'Reply-To: ' . $Email . PHP_EOL .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $myText, $headers);
    
    echo '
	<h4>Your message was successfully sent!</h4>
	<p>We\'ll get back to you shortly within 48 hours.</p>
	<p><a href="">Exit</a></p>
	';
    
}else{//show form
    echo '
        
        <form action="" method="post">
          <div class="row">
            <div class="form-group col-lg-4">
              <label class="text-heading">First Name</label>
              <input type="text" name="FirstName" autofocus required class="form-control">
            </div>
            <div class="form-group col-lg-4">
              <label class="text-heading">Last Name</label>
              <input type="text" name="LastName" required class="form-control">
            </div>
            <div class="form-group col-lg-4">
              <label class="text-heading">Email Address</label>
              <input type="email" name="Email" required class="form-control">
            </div>            
            <div class="clearfix"></div>
            <div class="form-group col-lg-12">
              <label class="text-heading">Comments</label>
              <textarea class="form-control" name="Comments" rows="6"></textarea>
            </div>
            <div class="form-group col-lg-12">
              <button type="submit" class="btn btn-secondary">Submit</button>
            </div>
          </div>
        </form>
    ';
}    
    
?>
<?php 

include 'includes/footer.php';

function clean_post($key){
    
    if(isset($_POST[$key])){
        return strip_tags(trim($_POST[$key]));
     }else{
        return '';
    }
 
}



?>