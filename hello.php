<?php
$to = "rmcdonell@yahoo.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: admin@gobobbygo.com" . "\r\n" .
"CC: rmcdonell@dmacc.edu";

mail($to,$subject,$txt,$headers);
?>
