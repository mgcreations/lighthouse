<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $quote = $_POST['quote'];
    $message = $_POST['message'];

    $formcontent = "From : $name \n Email: $email \n Phone: $phone \n Message: $message";

    $recipient = "info@lhd1.co.za";
    $subject = "Quote Request for $quote";
    $mailheader = "From: $email \r\n";

    mail($recipient,$subject,$formcontent, $mailheader) or die("Error!");
		
		if (!$_POST['submit_pay'] == 'Submit_pay') 
		{
			header('Location: https://www.lhdsportswear.co.za/thank_you.html');
			
		}

    ?>