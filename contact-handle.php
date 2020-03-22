<?php
//include 'contact-handle.php';
if(isset($_POST['send'])){
	$firstname = trim($_POST["firstname"]);
	$lastname = trim($_POST["lastname"]);
	$email = trim($_POST["email"]);
	$msg = $_POST["message"];
	$gender = $_POST["gender"];
	$random = substr(md5(mt_rand()), 0, 7);
	//The name of the file that we want to create if it doesn't exist.
	$file = $firstname.$random.'.txt';
 	
	$contents=[$firstname,',',$lastname,',',$email,',',$gender,',',$msg];
	if(!is_file($file)){
	    file_put_contents($file, $contents);
		if (file_put_contents($file, $contents)){
			$msg = 'Thanks for contacting us';
		}
		
	}else{
		$id += 1;
		//$contents=[$firstname,',',$lastname,',',$email,',',$gender,',',$msg];
	    file_put_contents($file, $contents);
	}
	
	//if(empty($firstname) && empty($lastname)&& empty($email)&& empty($msg)&& empty($gender))
}
?>