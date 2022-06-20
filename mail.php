<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'mailer/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(); // نقوم بحذف كلمة true من بين القوسين

   //Server settings
//    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //
   $mail->isSMTP();                                            //
   $mail->Host       = 'smtp.gmail.com';                     //هنا نضع كلمة gmail بدلاً من example لتحديد أن البريد الذي سيستقبل هو من النوع gmail
   $mail->SMTPAuth   = true;                                   // 
   $mail->Username   = 'kksleman50@gmail.com';                     //هنا نضع اسم المستخدم الذي نريد أن نرسل له الرسالة 
   $mail->Password   = 'vclfxunvuxhcvada';                               //هنا نضع كلمة المرور للحساب
   $mail->SMTPSecure = 'ssl';            //نقوم بالتعديل على هذه القيمة ونجعلها 'ssl'
   $mail->Port       = 465;                                    // هنا نضع ال port الذي يدعمه ال gmail وهو 465

   //Content
   $mail->isHTML(true);
   $mail->Charset = "UTF-8";  // من خلال هذه ال function يتم دعم اللغة العربية 
