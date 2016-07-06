<?php
/*
 * A controller to handle the contact page processing
 */
 session_start();

if($_POST['action'] == 'Send'){
 // now to collect data from the form
    var_dump($_POST);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $captcha = $_POST['cap_code'];
    
    // this block checks for empty fields
    if(empty($name) || empty($email) || empty(subject) || empty(message)){
        $errors['fields'] = 'All fields are required, please check the form.';
    }
    
    // this block checks the captcha code matches the picture.
    if($_SESSION['security_code'] != $_POST['cap_code'] && !empty($_SESSION['security_code'])){
       $errors['security'] = 'Sorry, the code you entered does not match the image.';
    }
    
    // if there are errors, return to to page to fix them.
    if (!empty($errors)){
        include 'contact.php';
        exit;
    }
    
    // Assemble the massge
    $finalmessage = "Name: $name \n";
    $finalmessage .= "Email: $email \n"; 
    $finalmessage .= "Subject: $subject \n";
    $finalmessage .= "Message: \n $message";
    
    // Send the message.
    $to = 'pepitotkm@gmail.com';
    $from = "From: $email";
    $result = mail($to, $subject, $finalmessage, $from);
    
    // let the sender know what happened
    if ($result == TRUE){
        $errors[] = "Thank you for contacting us.";
    }else {
        $errors[] = "Sorry $name, but there was an error and the message was not sent.";
    }
    
    // remove all values that were stored
    unset($name);
    unset($email);
    unset($subject);
    unset($message);
    unset($captcha);
    
    // display the contact page with the new message
    include 'contact.php';
    exit;
    
} else {
 include 'contact.php';
 exit;
}
?>