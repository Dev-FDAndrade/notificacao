<?php

namespace Notificacao;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Email {

    private $mail = stdClass::class;

    public function __construct() {
        $this->mail = new PHPMailer(true);
        $this->mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $this->mail->isSMTP();                                            // Send using SMTP
        $this->mail->Host = 'smtp1.example.com';                    // Set the SMTP server to send through
        $this->mail->SMTPAuth = true;                                   // Enable SMTP authentication
        $this->mail->Username = 'user@example.com';                     // SMTP username
        $this->mail->Password = 'secret';                               // SMTP password
        $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $this->mail->Port = 587;                                    // TCP port to connect to
    }

    public function sendMail() {
        echo 'Email Enviado!';
    }

}
