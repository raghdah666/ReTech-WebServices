<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; 

function sendEmail($projectName, $clientName, $message, $mobile, $email) {
    $mail = new PHPMailer(true);

    try {
        // إعدادات السيرفر
        $mail->isSMTP();
        $mail->Host = "in-v3.mailjet.com"; // خادم SMTP ل Mailjet
        $mail->SMTPAuth = true;
        $mail->Username = "c0895d97344cfe127740e1e870fa410b"; // استخدم API Key الخاص بك
        $mail->Password = "789ee24c4abfd53732037363324e139d"; // استخدم API Secret الخاص بك
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // استخدم SSL
        $mail->Port = 587; // المنفذ

        // إعداد المرسل
        $mail->setFrom('raghdazaki39@gmail.com', 'ReTech');

        // إضافة عنوان البريد الإلكتروني المدخل كمستلم
        $mail->addAddress('raghdah.rz@gmail.com', 'Site Owner'); // البريد الإلكتروني لصاحب الموقع

        // إعداد محتوى البريد لصاحب الموقع
        $mail->isHTML(true);
        $mail->Subject = 'New Project Request';
        $mail->Body = "
            <h3>New Project Request</h3>
            <p><strong>Project Name:</strong> {$projectName}</p>
            <p><strong>Client Name:</strong> {$clientName}</p>
            <p><strong>Client Mobile:</strong> {$mobile}</p>
            <p><strong>Client Email:</strong> {$email}</p>
            <p><strong>Message:</strong> {$message}</p>
        ";

        // إرسال البريد إلى صاحب الموقع
        $mail->send();

        // إعداد رسالة تأكيد للمستخدم
        $mail->clearAddresses(); // مسح عناوين البريد المدخلة
        $mail->addAddress($email, $clientName); // إعادة إضافة عنوان البريد للمستخدم

        // إعداد محتوى البريد للمستخدم
        $mail->Subject = 'Thank You for Your Request!';
        $mail->Body = "
            <h3>Thank You for Your Request!</h3>
            <p>Dear {$clientName},</p>
            <p>Thank you for your project request. Here are the details:</p>
            <p><strong>Project Name:</strong> {$projectName}</p>
            <p><strong>Client Name:</strong> {$clientName}</p>
            <p><strong>Client Mobile:</strong> {$mobile}</p>
            <p><strong>Client Email:</strong> {$email}</p>
            <p><strong>Message:</strong> {$message}</p>
            <p>If you wish to modify your request, please feel free to send a new request.</p>
            <p>Best Regards,<br>ReTech Team</p>
        ";

        // إرسال البريد إلى المستخدم
        $mail->send();
        
        echo 'success';
    } catch (Exception $e) {
        error_log("Mailer Error: {$mail->ErrorInfo}");
        echo 'error: ' . $mail->ErrorInfo;
    }
}
