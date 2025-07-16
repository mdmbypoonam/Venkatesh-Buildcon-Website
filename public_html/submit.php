<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the selected option
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $selected_option = $_POST['options'];
    
    // Email configuration
    $to = 'pridelifestylehomespune@gmail.com'; // Replace with the recipient's email address
    $subject = 'New Form Submission from Venkatesh Buildcon';
    $message = "Name : ". $name . "\r\nEmail : " . $email . "\r\nContact :" . $contact . "\r\nProject :" . $selected_option;
    $headers = 'From: ' . $email . "\r\n" . // Replace with the sender's email address
               'Reply-To:' . $email . "\r\n" . 
               'X-Mailer: PHP/' . phpversion();

    // Send email

    if(empty($name) || empty($contact) || empty($email) || empty($selected_option)){
        echo "Please fill all fields";
    }
    else{
      mail($to, $subject, $message, $headers);
    
      header('Location:thankyou.html');
    
    }
}
?>
