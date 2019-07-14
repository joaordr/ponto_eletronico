<?php

require SISTEMA_DIR . '../../resources/php_libs/phpmailer/Exception.php';
require SISTEMA_DIR . '../../resources/php_libs/phpmailer/PHPMailer.php';
require SISTEMA_DIR . '../../resources/php_libs/phpmailer/SMTP.php';

class Email
{
    protected static $mail;

    private function __construct()
    {
        self::$mail = new \PHPMailer\PHPMailer\PHPMailer(false);  // Passing `true` enables exceptions

        //Server settings
        self::$mail->SMTPDebug = 0;
        self::$mail->isSMTP();                                      // Set mailer to use SMTP
        self::$mail->Host = 'smtp.umbler.com';                      // Specify main and backup SMTP servers
        self::$mail->SMTPAuth = true;                               // Enable SMTP authentication
        self::$mail->Username = 'suporte@baconware.com.br';         // SMTP username
        self::$mail->Password = 'joao@luciano*baconware';           // SMTP password
        self::$mail->SMTPSecure = 'tsl';                            // Enable TLS encryption, `ssl` also accepted
        self::$mail->Port = 587;                                    // TCP port to connect to
        //Recipients
        self::$mail->setFrom('suporte@baconware.com.br', 'SPE');
        //Content
        self::$mail->isHTML(true);
    }

    /**
     * @param string $destinatario
     * @param string $conteudo
     * @param string $assunto
     *
     * @throws Exception
     */
    public static function Enviar($destinatario, $conteudo, $assunto)
    {
        if (!self::$mail) {
            new Email();
        }

        try {
            self::$mail->addAddress($destinatario); // destinatario

            self::$mail->Subject = $assunto;
            self::$mail->Body = $conteudo;
            self::$mail->send();

        } catch (Exception $ex) {
            throw $ex;
        }
    }


}




