<?php

$to = 'theophile@captp.fr';
$subject = 'Test';
$message = 'Hello!';
$headers = 'From: theophile@simplondevgrenoble.nohost.me' . "\r\n" .
           'Reply-To: theophile@simplondevgrenoble.nohost.me' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $message, $headers)) {
  echo 'Success';
} else {
  echo 'Error';
}