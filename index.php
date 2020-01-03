<?php

require __DIR__ . '/lib_ext/autoload.php';

use Notificacao\Email;

$novoEmail = new Email;
$novoEmail->sendMail();
?>