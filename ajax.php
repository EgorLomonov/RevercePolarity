<?php
$name = $_POST['name']
$phone = $_POST['phone']
// Токен телеграм бота
$token = "7332479910:AAHrlZoFLj0C6Japxjcmd9FX1Ly7zH9MgOs";
// ID Чата
$chat_id = "-4230033542";
$arr = array(
    'Имя' => $name,
    'Телефон' => $phone
);
foreach($arr as $key => $value){
    $txt .= "<b>".$key."</b>".$value."%0A";
};
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");

if ($sendToTelegram){
    header('Location:index.html');
    return true
}else{
    echo('Error')
}