<?php
	$to = 'mpaulus88@gmail.com';
    $from = $_POST['mail'];
    $message= $_POST['message'];
    $subject= 'message depuis mon portfolio';
      $message = wordwrap($message, 70);
     $headers = 'From:'.$from . "\r\n" .
     'Reply-To:'.$from . "\r\n" .
     'X-Mailer: PHP/' . phpversion();
 $sended = mail($to, $subject, $message, $headers);
 if($sended)
 {
$url= $_POST['url'].'?sended=true';
var_dump($url);
header('Location: '.$url);

 }
 else
 {
 
 $url= $_POST['url'].'?sended=false';
header('Location: '.$url);
var_dump($url);
}
