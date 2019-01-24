<?php
include 'dbconfig.php';

$prevquery = "SELECT * FROM users WHERE oauth_uid='".$_POST['oauth_uid']."'";
$prevresult = $db->query($prevquery);
if($prevresult->num_rows>0){
	$query = "UPDATE users SET oauth_provider='google' where oauth_uid='".$_POST['oauth_uid']."'";
	$update = $db->query($query);
}
	//console.log('User is logged in');
?>