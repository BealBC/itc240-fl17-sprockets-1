<?php
//form1.php

if(isset($_POST["FirstName"]))
{//if data, show it
	$FirstName = $_POST["FirstName"];
	$LastName = $_POST["LastName"];
	$Email = $_POST["Email"];
	
	echo "
	<p>You have received a message from $FirstName $LastName.</p>
	<p>Ben's email address is $Email.</p>
	
	";
		
    //echo $_POST["FirstName"];
	/*
	echo '<pre>';
	var_dump($_POST);
	echo '<pre>';
	*/
}else{//show form
    echo '
    <form action="" method="post">
    <label>
    First Name:<br />
    <input 
    type="text" 
    name="FirstName" 
    placeholder="Put First Name here" 
    required="required" 
    tabindex="10" 
    title="First Name is required" 
    />
    </label>
    <br />
    
    <label>
    Last Name:<br />
    <input 
    type="text" 
    name="LastName" 
    placeholder="Put Last Name here" 
    required="required" 
    tabindex="20" 
    title="Last Name is required" 
    />
    </label>
    <br />
    
    <label>
    Email:<br />
    <input 
    type="email" 
    name="Email" 
    placeholder="Put Email here" 
    required="required" 
    tabindex="30" 
    title="Email is required" 
    />
    </label>
    <br />
    <input type="submit" />
    </form>
    ';
}





