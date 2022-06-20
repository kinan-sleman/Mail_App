<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="p-3">
    <form method="POST" enctype="multipart/form-data">
        Email :<input class="form-control"  type="email" name="email" required/>
        Subject :<input class="form-control"  type="text" name="subject" required/>
        <br />
        Body :<textarea class="form-control"  name="Body" required></textarea>
        <br />
        <input class="form-control"  type="file" name="file" required/>
        <br />
        <button class="btn btn-outline-warning w-100 m-3 d-block" type="submit" name="send">send message</button>
    </form>
    
    </div>
    
</body>
</html>


<?php 
    require_once "mail.php";
    $mail->setFrom('kksleman50@gmail.com', 'kinan sleman'); // اسم المرسل وبريده الإلكتروني
    if(isset($_POST['send'])){
        $mail->addAddress($_POST['email']); // البريد الإلكتروني المرسل إليه
        $mail->Subject = $_POST['subject'];    // message content 
        $mail->Body = $_POST['Body'];    // message content
        move_uploaded_file($_FILES['file']['tmp_name'],"files/".$_FILES['file']['name']); 
        $mail->addAttachment('files/'.$_FILES['file']['name']);
        $mail->send(); // من خلالها يتم إرسال الرسالة
        unlink("files/".$_FILES['file']['name']); // لحذف النسخة المؤقتة من الملف الذي تم نقله إلى المجلد
        echo 'Message has been sent';
        header('location: index.php',true); // من خلال هذا ال object لن يتم تكرار إرسال الرسالة في حال تم تحديث الصفحة والزر مضغوط     
    }
?>