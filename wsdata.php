<?php
include('dbconfig.php');
$ws_name = array("1","2","3","4");
$ws_info = array();
foreach($ws_name as $name){
	$prevquery = "SELECT ws_name,ws_content,ws_venue,ws_time,ws_coords from workshops where ws_name = '".$name."'";
	$row = $db->query($prevquery);
	echo($db->error);
	if(mysqli_num_rows($row)>0){
		$res = mysqli_fetch_assoc($row);
		array_push($ws_info,$res);
	}
	else{
		array_push($ws_info,array("ws_content" => "0","ws_name" => $name));	//check not performed
	}
}
echo json_encode($ws_info);
$db->close();
?>