<?php
session_start();
ob_start();

// echo "hello" .$_POST['fullname'];

if (isset($_POST['email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $name = $_POST['name'];
    $email_to = "info@shramukoverseas.net";
    $email_subject = "Contact From Shrimukoverseas";

    function died($error) {
    // your error code can go here
    echo "We are very sorry, but there were error(s) found with the form you submitted. ";
    echo "These errors appear below.<br /><br />";
    echo $error . "<br /><br />";
    echo "Please go back and fix these errors.<br /><br />";
    die();
    }

    // validation expected data exists
    if (!isset($_POST['email']) ||
        !isset($_POST['name'])) {
    died('We are sorry, but there appears to be a problem with the form you submitted.');
    }


                    $fullname = $_POST['name']; // required
                   // $contact = $_POST['mobile']; // required
                    $emailid = $_POST['email']; // required
                    $message = $_POST['message']; // not required
                    
    
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    if (!preg_match($email_exp, $emailid)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
    }
    $string_exp = "/^[A-Za-z .'-]+$/";
    if (!preg_match($string_exp, $fullname)) {
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
    }

    if (strlen($error_message) > 0) {
    died($error_message);
    }

    function clean_string($string) {
    $bad = array("content-type", "bcc:", "to:", "cc:", "href");
    return str_replace($bad, "", $string);
    }
    $email_message = "";
                    $email_message .= "Name : ".clean_string($fullname)."\n";
                  //  $email_message .= "Contact  : ".clean_string($contact)."\n";
                    $email_message .= "Email ID  : ".clean_string($emailid)."\n";
                    $email_message .= "Message : ".clean_string($message)."\n";
                  



// create email headers
    $headers = 'From: ' . $emailid . "\r\n" .
        'Reply-To: ' . $emailid . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
    ?>






    <!-- <div style="font-size:13px; font-weight:bold; font-family:Arial, Helvetica, sans-serif; margin-bottom:10px; "><a href="home.html">Home</a> l  <a href="contact_us.html">Contact us</a></div>
    -->
    <?php
}


$message = '<div class="alert alert-success alert-dismissable" style="position: fixed;bottom: 10px;right: 100px;z-index:9999; font-size: 14px;">
                <a href="#" class="close" data-dismiss="alert" aria-label="close" style="margin-left: 5px;">×</a>
                Your enquiry has been sent successfully!
            </div>';




$_SESSION['message'] = $message;
//print_r($email_message);die;
header("Location: index.php"); /* Redirect browser */
exit();
?>