<?php
include("dbconfig.php");
if($_POST){
	$email = $db->real_escape_string($_POST['email']);
	$pwd = md5($db->real_escape_string($_POST['password']));
	$prevquery = "SELECT * from event_admins WHERE email = '".$email."'";
	$prevres = $db->query($prevquery);
	if(mysqli_num_rows($prevres)==1){
		$row = mysqli_fetch_assoc($prevres);
		if($row["pwd"]===$pwd){
			if($row["logged_in"]===0){
				$access_token = bin2hex(openssl_random_pseudo_bytes(128));
			}
			else{
				$access_token = $row["access_token"];
			}
			$logged_in = $row["logged_in"]+1;
			$query = "UPDATE event_admins SET logged_in = '".$logged_in."' WHERE email = '".$email."'";
			$res = $db->query($query);
			if($res===false) echo $db->error;
			$admin_data->access_token = $access_token;
			$admin_data->event_list = $row["event_list"];
			$admin_data->approved = $row["is_approved"];
			echo json_encode($admin_data);
		}
		else{
			echo "Incorrect password";
		}
	}
	else{
		echo "Incorrect Email";
	}

}
?>