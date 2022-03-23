<?php
 
if($_POST) {

    $name = filter_var($_POST["name"], FILTER_DEFAULT);
    $email = filter_var($_POST["email"], FILTER_DEFAULT);
    $contact = filter_var($_POST["mobile-number"], FILTER_DEFAULT);
    $modal = filter_var($_POST["modal"], FILTER_DEFAULT);
    $state = filter_var($_POST["state"], FILTER_DEFAULT);
    $city = filter_var($_POST["city"], FILTER_DEFAULT);

  

  $to = "info@mini-metro.com"; // your mail here
  $email = $email;
  $subject = 'Mini Metro Enquiry';
  $body = "Name: $name\nE-mail: $email\nContact-Number: $contact\nModal: $modal\nState: $state\nCity: $city";
  
  //mail headers are mandatory for sending email
  $headers = 'From: ' .$email . "\r\n". 
  'Reply-To: ' . $email. "\r\n" . 
  'X-Mailer: PHP/' . phpversion();
 
  if(@mail($to, $subject, $body, $headers)) {
    $output = json_encode(array('success' => true));
    die($output);
  } else {
    $output = json_encode(array('success' => false));
    die($output);
  }
}


