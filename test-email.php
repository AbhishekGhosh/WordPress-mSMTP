<?php

$to = "recipient@gmail.com";
$from = "sender@hotmail.com";
$subj = "sending email using php mail() function";
$body = "This email is sent using php mail() function. This proves that your msmtp service is correctly configured with php.";

mail($to, $subj, $body);
?>
