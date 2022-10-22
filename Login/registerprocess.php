
<?php
include("../controllers/customer_controller.php");

// Collecting form data
// GET is used by default so define the type of method
// POST is used for secure information transmission.
if(isset($_POST["register"])){

    // Variable to capture the name value for each user input.
    $customer_name = $_POST["cname"];
    $customer_email = $_POST["cemail"];
    $customer_pass = $_POST["cpass"];
    $customer_pass = password_hash($customer_pass,PASSWORD_DEFAULT);
    $customer_country = $_POST["ccountry"];
    $customer_city = $_POST["ccity"];
    $customer_city = $_POST["ccontact"];
    $customer_image = $_POST["cimage"];
    $user_role = $_POST["urole"];

    



    // Call a controller
    registerCustomer_ctr($customer_name, $customer_email, $customer_pass, $customer_country, $customer_city, $customer_contact, $customer_image, $user_role);

    // redirect to login
    header('Location:./login.php');

}else{
    echo "Something went wrong";
}


?>