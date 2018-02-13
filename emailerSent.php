<?php
include  'Emailer.php';

$newEmail = new Emailer(); //instantiation a new object/variable

$newEmail->setSendTo("rmcdonell@dmacc.edu");

echo $newEmail->getSendTo();

$newEmail = new Emailer();
$newEmail->setSentFrom("rmcdonell@yahoo.com");
echo $newEmail->getSentFrom();

$newEmail = new Emailer();
$newEmail->setEmailMsg("rmcdonell@yahoo.com");
echo $newEmail->getemailMsg();

$newEmail = new Emailer();
$newEmail->setEmailSubject("rmcdonell@yahoo.com");
echo $newEmail->getEmailSubject();
