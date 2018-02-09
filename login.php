<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
if (!empty($_POST["email"]) && !empty($_POST["psw"]) ) {
$email = trim($_POST["email"]);
$psw = trim($_POST["psw"]);

 
	$id =  md5($_POST["email"].$_POST["psw"]);
  	$file = file_get_contents('http://localhost/tut/file.db');
    $file = json_decode($file, true);

	
	if (array_key_exists($id,$file)){  
	
	die('login Successfully');
	
	}
	else { die('login does not exist');}
	
	
}  


  } 
?>

<form  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" style="border:1px solid #ccc">
  <div class="container">
    <h1>LOGIN</h1>
   <hr>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>
<hr>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <div class="clearfix">
       <input type="submit" name="submit" value="Submit">
    </div>
  </div>
</form>