<?php
include("../controllers/customer_controller.php");

// Collecting form data
if(isset($_POST["login"])){


    // Variable to capture the name value for each user input.
    $customer_email = $_POST["cemail"];
    $customer_pass = $_POST["cpass"];
    $login =loginCustomer_ctr($customer_email);

        if($login != false){
            if (password_verify($customer_pass,$login['customer_pass']) ){

                      
                       $_SESSION['id']= $login['customer_pass'];
                         // redirect to login
                            header('Location:../index.php');
            }
            else{
                session_start();
$_SESSION['error']='Invalid credentials';
                header('Location:login.php');
            }
                    }
                    else{
                        session_start();
$_SESSION['error']='Invalid credentials';
                        header('Location:login.php');
                    }
        


    }


?>