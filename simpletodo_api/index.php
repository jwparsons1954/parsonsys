<?php
// Define path to data folder
define('DATA_PATH', realpath(dirname(__FILE__).'/data'));
 
//include our models
include_once 'models/TodoItem.php';
 
//wrap the whole thing in a try-catch block to catch any wayward exceptions!
try {
    //*UPDATED*
    //get the encrypted request
    $enc_request = $_REQUEST['enc_request'];
     
    //get the provided app id
    $app_id = $_REQUEST['app_id'];
     
    //check first if the app id exists in the list of applications
    if( !isset($applications[$app_id]) ) {
        throw new Exception('Application does not exist!');
    }
     
    //decrypt the request
    $params = json_decode(trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $applications[$app_id], base64_decode($enc_request), MCRYPT_MODE_ECB)));
     
    //check if the request is valid by checking if it's an array and looking for the controller and action
    if( $params == false || isset($params->controller) == false || isset($params->action) == false ) {
        throw new Exception('Request is not valid');
    }
     
    //cast it into an array
    $params = (array) $params; 
	// catch( Exception $e ) {
    //catch any exceptions and report the problem
    $result = array();
    $result['success'] = false;
    $result['errormsg'] = $e->getMessage();
}
 
//echo the result of the API call
echo json_encode($result);
exit();