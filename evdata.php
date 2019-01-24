<?php
include('dbconfig.php');
$ev_name = array("1","2","3","4","5","6","7","8");
$ev_info = array();
foreach($ev_name as $name){
	$prevquery = "SELECT ev_name,ev_content,ev_venue,ev_time,ev_prize,ev_coords from events where ev_name = '".$name."'";
	$row = $db->query($prevquery);
	echo($db->error);
	if(mysqli_num_rows($row)>0){
		$res = mysqli_fetch_assoc($row);
		array_push($ev_info,$res);
	}
	else{
		array_push($ev_info,array("ev_content" => "0","ev_name" => $name));	//check not performed
	}
}
echo json_encode($ev_info);
$db->close();
?>