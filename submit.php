<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form data
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];
  
  // Set up the recipient email address
  $to = "jadayoubi1977@gmail.com"; // Replace with your email address
  
  // Set up the email headers
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";
  
  // Send the email
  $success = mail($to, $subject, $message, $headers);
  
  // Check if the email was sent successfully
  if ($success) {
    echo "Message sent successfully!";
  } else {
    echo "There was a problem sending the message.";
  }
}
?>