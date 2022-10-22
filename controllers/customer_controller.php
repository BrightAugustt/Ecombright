<?php
//connect to the user account class
include("../classes/customer_class.php");

//sanitize data




//--INSERT--//
function registerCustomer_ctr($customer_name, $customer_email, $customer_pass, $customer_country, $customer_city, $customer_contact, $customer_image, $user_role){

    // Create an instance of the class
    $add_customer = new general_class();

     return $add_customer->add_customer($customer_name, $customer_email, $customer_pass, $customer_country, $customer_city, $customer_contact, $customer_image, $user_role);

}
//--verify--//
function loginCustomer_ctr($customer_email){

    // Create an instance of the class
    $verify_customer = new general_class();

     return $verify_customer->verify_customer($customer_email);

}
//--UPDATE--//

//--DELETE--//

?>