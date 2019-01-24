<?php
	include 'dbconfig.php';
	if($_POST){
		$uid = $db->real_escape_string($_POST['uid']);
		$access_token = $db->real_escape_string($_POST['access_token']);
		$clg = $db->real_escape_string($_POST['clg']);
		$phnum = $db->real_escape_string($_POST['phnum']);
		$pf_filled = 1;
		$prev_query = "SELECT * FROM fb_users WHERE oauth_uid = '".$uid."'";
		$result = $db->query($prev_query);
		if(mysqli_num_rows($result)===1){
			$row = mysqli_fetch_assoc($result);
			if($row["access_token"]===$access_token){
				$query = $db->prepare("UPDATE fb_users SET college = ?, phnum = ?, pf_filled = ? WHERE oauth_uid = ?");
		        if($query===false) echo $db->error;
		        $rc = $query->bind_param("ssis",$clg,$phnum,$pf_filled,$uid);
		        if($rc===false) echo $db->error;
		        $status = $query->execute();
		        if($status === false) echo $db->error;
		        echo $row['id'];
			}
			else{
				echo "-1";
			}
		}
		else{
			echo "-1";
		}

	}
?>