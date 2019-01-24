<?php
//Load the database configuration file
include 'dbconfig.php';
//Convert JSON data into PHP variable
$userData = json_decode($_POST['userData']);
if(!empty($userData)){
    //Check whether user data already exists in database
    $prevquery = "SELECT * FROM users WHERE oauth_provider = '".$userData->oauth_provider."' AND oauth_uid = '".$userData->id."'";
    $prev_result = $db->query($prevquery); 
    //$prevResult = $db->query($prevQuery);
    $accesstoken = bin2hex(openssl_random_pseudo_bytes(32));
    if(mysqli_num_rows($prev_result) > 0){ 
        //Update user data if already exists
        $query = $db->prepare("UPDATE users SET access_token = ?, name = ?, email = ?, gender = ?, picture = ?, link = ? WHERE oauth_provider = ? AND oauth_uid = ?");
        $query->bind_param("ssssssss",$accesstoken,$userData->name,$userData->email,$userData->gender,$userData->picture->data->url,$userData->link,$userData->oauth_provider,$userData->id);
        $query->execute();
    }else{
        //Insert user data
        $query = $db->prepare("INSERT INTO users(access_token,oauth_provider,oauth_uid,name,email,gender,picture,link) VALUES(?,?,?,?,?,?,?,?)");
        $query->bind_param("ssssssss",$accesstoken,$userData->oauth_provider,$userData->id,$userData->name,$userData->email,$userData->gender,$userData->picture->data->url,$userData->link);
        $query->execute();
    }
    echo $accesstoken;
    $query->close();
    $db->close();
}
?>