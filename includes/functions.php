// Put all your functions in this file

<?php

//SendMessage Function
    
function sendMessage($message,$recepient_id,$contact) {
    
    //You can get Beem apiKey and secretKey after completing a free registration on Beem's website (https://login.beem.africa/#!/register)


    $api_key='#';
    $secret_key = '#';
    
    // The data to send to the API
            $postData = array(
                'source_addr' => 'INFO', // You can request a sender name from beem
                'encoding'=>0,
                'schedule_time' => '',
                'message' => $message,
                'recipients' => [array('recipient_id' => $recepient_id,'dest_addr'=>$contact)]
            );
            //.... Api url
            $Url ='https://apisms.beem.africa/v1/send';
            
            // Setup cURL
            $ch = curl_init($Url);
            error_reporting(E_ALL);
            ini_set('display_errors', 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt_array($ch, array(
                CURLOPT_POST => TRUE,
                CURLOPT_RETURNTRANSFER => TRUE,
                CURLOPT_HTTPHEADER => array(
                    'Authorization:Basic ' . base64_encode("$beem_api_key:$beem_secret_key"),
                    'Content-Type: application/json'
                ),
                CURLOPT_POSTFIELDS => json_encode($postData)
            ));
            
            // Send the request
            $response = curl_exec($ch);
        }

?>
