<?php 
  
$sendto   = "адрес почты для получения писем";
$username = $_POST['name'];   
$usertel = $_POST['telephone']; 
  
$subject  = "Заявка с сайта";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
  
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Заявка на заказ звонка</h2>\r\n";
$msg .= "<p><strong>Имя отправителя:</strong> ".$username."</p>\r\n";
$msg .= "<p><strong>Номер телефона:</strong> ".$usertel."</p>\r\n";
$msg .= "</body></html>";
  
// отправка сообщения
if(@mail($sendto, $subject, $msg, $headers)) {
    echo "<center>Сообщение отправлено</center>";
} else {
    echo "<center>Сообщение не отправлено</center>";
}
  
?>
