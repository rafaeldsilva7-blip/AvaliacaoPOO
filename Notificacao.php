<?php

class Notificacao{
    public string $notificacao;

    public function enviarMensagem($mensagem){
        echo"Mensagem enviada!";
    }

}

class Email extends Notificacao{

    public function enviarMensagem($mensagem){
        echo $mensagem;
    }
}

class SMS extends Notificacao{

    public function enviarMensagem($mensagem){
        echo $mensagem;
    }
}

$email = new Email();
$email->enviarMensagem("Mensagem E-mail enviada");

echo"<BR><BR>";

$sms = new SMS();
$sms->enviarMensagem("Mensagem SMS enviada");