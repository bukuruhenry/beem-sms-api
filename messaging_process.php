<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';

$full_name = array();
$phone_number = array(); //Used in user_table.php file

$sql_users = mysqli_query($con, "SELECT fullname,phonenumber FROM users"); //Assuming I already have a database with a users table


// Post Request from messaging.js file

if (isset($_POST["users"])) {

	$value = json_decode($_POST["users"]);
    $count_values    = count($value->phonenumber_item);
    
    for ($i = 0; $i < $count_values;) {
        
        $name    = $value->fullname_item[$i];
        $phone   = $value->phonenumber_item[$i];
        
        $message = 'Hello, '.$name.', Message Here'; // The message will start with Hello, Receivers name ... and you can customize this
            
        $i++;
            
        sendMessage($message,$i,$phone); //Function defined in functions.php file

            
        }
        
    }

?>