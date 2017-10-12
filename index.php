<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

/*use app\srp\wrong\BirthdayLayout;
use app\srp\wrong\EmailSender;

$emailSender = new EmailSender(new BirthdayLayout);
$emailSender->sendMails();*/

use app\srp\right\BirthdayLayout;
use app\srp\right\EmailSender;
use app\srp\right\parser\ClientJSON;
use app\srp\right\parser\ClientXML;

$emailSender = new EmailSender(new BirthdayLayout, new ClientJSON);
$emailSender->sendMails();