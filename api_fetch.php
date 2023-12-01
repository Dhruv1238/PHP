<?php
if (isset($_POST['username']) && $_POST['username'] != "") {
  $username = $_POST['username'];
  //echo $username;
  //  $url = "http://localhost/PHP/api_main.php?username=".$username;
  //echo $url;

  // $user_id_fetch = $result['user_id'];
  // $user_type_fetch = $result['user_type'];
  // $username_fetch = $result['username'];


  // echo "<table>";
  // echo "<tr><td>User ID:</td><td>$user_id_fetch</td></tr>";
  // echo "<tr><td>User Type:</td><td>$user_type_fetch</td></tr>";
  // echo "<tr><td>Username:</td><td>$username_fetch</td></tr>";
  // echo "</table>";
}

$url = "http://localhost/PHP/restAPI/api.php";

$client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($client);

$result = json_decode($response, true);
foreach($result as $product){
  echo "<br>";
  print_r($product);
}
