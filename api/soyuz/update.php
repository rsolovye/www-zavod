<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

//Creating Array for JSON response
$response = array();
 
// Check if we got the field from the user
if (isset($_GET['level']) && isset($_GET['station'])) {
 
    $level = $_GET['level'];
    $station= $_GET['station'];
    
 
    // Include data base connect class
    $filepath = realpath (dirname(__FILE__));
    require_once($filepath."/db_connect.php");

    // Connecting to database
    $db = new DB_CONNECT();
 $date = new DateTime();
$ts =  $date->format('Y-m-d H:i:s');
 $sql = "INSERT INTO `water_tank` (`id`, `level`, `station`, `timestamp`) VALUES (DEFAULT,".(int)$level.", '".$station."', '".$ts."');";
//echo $sql;
//.$d."', '".$t."')";
//String sql_q="INSERT INTO `water_tank` (`level`, `station`, `timestamp`) VALUES ('" . $level . "','" . $station . "', now())";
    // Fire SQL query to update LED status data by id
    $result = mysql_query($sql);
//echo $result; 
    // Check for succesfull execution of query and no results found
    if ($result) {
        // successfully updation of LED status (status)
        $response["success"] = 1;
        $response["message"] = "ADDED NEW WATER LEVEL VALUE TO DB";
 
        // Show JSON response
        echo json_encode($response);
    } else {
 
    }
} else {
    // If required parameter is missing
    $response["success"] = 0;
    $response["message"] = "Parameter(s) are missing. Please check the request";
 
    // Show JSON response
    echo json_encode($response);
}
?>
