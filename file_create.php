<?php
// file_create.php by Michael Akintuyosi
//Copyright(c) 2016
?> 
<?php
class Login{
	public $message;
	public $username;
	
	public function redirect_to($newlocation){
		header("Location: {$newlocation}");
		exit;
	}
	function __construct(){
		return $this->sign_in();
	}
	private function sign_in(){
		if(isset($_POST['submit'])){
			//successful login
			
			$username = trim($_POST['username']);
            $password = trim($_POST['password']);

			if($username=='mike' && $password=='secret'){
				$this->redirect_to('basic.html');
			} else{
				return $this->message = "There were some errors! Please check and Try again";
			}
		} else {
			return $this->username = "";
			return $this->message = "Please Log in ";
		}
	}


}
    $login = new Login();


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Form</title>
	</head>
	<body>
	<h1> Simple OOP Log in</h1>
      
      <form action="file_create.php" method="post">
		  Username: <input type="text" name="username" value="<?php echo htmlspecialchars($login->username); ?>" /><br /><br />
		  Password: <input type="password" name="password" value="" /><br />
			<br />
		  <input type="submit" name="submit" value="Submit" />
		</form>
		<p> <?php echo "$login->message"; ?><br /> </p>

	</body>
</html>