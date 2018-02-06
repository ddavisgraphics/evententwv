<?php
    if(isset($_POST)){
        $mailTo = "EvenTentWV@gmail.com";

        $subject  = "EvenTent Contact Form - ";
        $subject .= strip_tags($_POST['subject']);

        $name    = strip_tags($_POST['name']);
        $email   = strip_tags($_POST['email']);
        $phone   = strip_tags($_POST['phone']);
        $human   = strip_tags($_POST['human']);
        $message = strip_tags($_POST['message']);

        $messageTop = "From: $name \n";
        $messageTop .= "Email: $email \n";
        $messageTop .= "Phone: $phone \n";
        $messageTop .= "Message: \n";
        $messageTop .= "--------------- \n";
        $messageTop .= $message;


        if ($_POST['submit'] && $human == '4') {
            if (mail ($mailTo, $subject, $messageTop)) {
              	header('Location: /?sent=true');
		exit;
            }
            else {
                header('Location: /?sent=false');
		exit;
            }
        }
        else if ($_POST['submit'] && $human != '4') {
            	header('Location: /?spam=failed');
		exit;
        }

    } else {
        header('Location: /?sent=false');
        die();
    }


?>