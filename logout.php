<?php
include 'dbconfig.php';
if($_POST){
	$uid = $_POST['auth_uid'];
	$access_token = $_POST['token'];
	if($uid && $access_token){
		$query = "SELECT * FROM fb_users WHERE oauth_uid = '".$uid."'";
		$result = $db->query($query);
		if(mysqli_num_rows($result)===1){
			$row = mysqli_fetch_assoc($result);
			if($row["access_token"]===$access_token){
				if(!$update_query = $db->prepare("UPDATE fb_users SET access_token = NULL WHERE oauth_uid=?")){
					echo $db->error;
				}
				if(!$update_query->bind_param("s",$uid)){
					echo $db->error;
				}
				if(!$update_query->execute()){
					echo $db->error;
				}
				echo "true";
			}
			else{
				echo "incorrect token";
			}
		}
		else{
			echo "User doesnot exist";
		}
	}
	else{
		echo "false";
	}
}
else{
	echo "false";
}


?>