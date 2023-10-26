<?php
header("Content-Type:application/json");
if (isset($_GET['username']) && $_GET['username']!="") {
 $con = mysqli_connect("localhost","root", "","API_TEST");
    if (mysqli_connect_errno()){
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 die();
 }
 $un = $_GET['username'];

 $result = mysqli_query($con,"DELETE FROM users WHERE username='$un'");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);

 $user_id = $row['user_id'];
 $user_type = $row['user_type'];
 $username = $row['username'];

 response($user_id,$user_type,$username);

 mysqli_close($con);
 }else{
 response(NULL, NULL, NULL);
 }
}else{
 response(NULL, NULL, NULL);
 }
 
function response($user_id,$user_type,$username){
 $response['user_id'] = $user_id;
 $response['user_type'] = $user_type;
 $response['username'] = $username;

 $json_response = json_encode($response);
 echo $json_response;
}
?>