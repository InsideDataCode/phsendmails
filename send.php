<?php

require_once('PHPMAILER/PHPMailerAutoload.php');

function phpMailerSend($to, $theme, $subject, $content) {
    
    $mail = new PHPMailer;
    $mail->isSMTP();                                    
    $mail->Host = 'smtp.gmail.com';  
    $mail->SMTPAuth = true;                               
    $mail->Username = 'mygmail@gmail.com'; // The email from what emails will sent         
    $mail->Password = 'mycorrespondant password';  // Its password                   


    $mail->setFrom('mygmail@gmail.com', $theme);   /*Repeat your Email and theme
                                                    can like PHPMailer and subject
                                                    use of PHPMailer 
                                                    */
    $mail->addAddress($to);     // The recipient   
    $mail->isHTML(true);        // Enable use html in the message

    $mail->Subject = $subject;  // The subject mentionned before for example
    $mail->Body    = $content;  // The message itself

    // Sending
    $result = '';
    if(!$mail->send()) {
        $result = 'Message could not be sent !<br>Mailer Error: ';
        return $result;
    } else {
        $result = 'Message has been sent';
        return $result;
    }
}

    
if ( isset($_POST['mailto']) && !empty($_POST['mailto'])) {

   $subject = $_POST['subject'];
   $content = $_POST['content'];
   $theme = $_POST['theme'];
   $to = htmlspecialchars($_POST['mailto']);

   $result = phpMailerSend($to, $theme, $subject, $content);

   echo "<h1>".$result."</h1>";
} else {

    echo "<h1>Data were filled in the fields !</h1>";
}