<h1>ReTech-WebServices</h1>
<p>Multilingual Dynamic web page showcasing the range of services offered with Email Notifications.</p> 
<h2>Features</h2>
<ul>
  <li><strong>Services Page:</strong>
    Dynamic page showcasing the range of services offered.</li> <li><strong>Portfolio Gallery:</strong>
      A section displaying images and descriptions of previous projects.</li> <li><strong>Service Request Form:</strong> A form that allows users to request services, sending notifications upon submission.</li> 
  <li><strong>Email Notifications:</strong> Utilizes PHPMailer to notify the site owner and user who request the service when requests.</li>
</ul>
<img src="https://github.com/user-attachments/assets/4c69fdb0-1b20-4bed-915e-e2fb7b7f9f3b" alt="Screenshot_12-12-2024_42025_localhost" width="400" height="auto"> 
<h2>To Run It on Localhost</h2>
<ol>
  <li><strong>Create database</strong> named "retech".</li> 
  <li><strong>Modify the server and email data</strong> 
  in the file <code>sendEmail.php</code>:(I relied on the <a href="https://www.mailjet.com/" target="_blank" rel="noopener noreferrer">Mailjet"</a>  server To send email notifications) 
    <pre> <code> 
      $mail->Host = "in-v3.mailjet.com"; // Change it to suit the server you want to use. 
      $mail->Username = ""; // Use your API Key or username $mail->Password = ""; // Use your API Secret or pass 
      $mail->setFrom('From-Email@example.com', 'ReTech'); // email to send from // إضافة عنوان البريد الإلكتروني المدخل كمستلم 
      $mail->addAddress('To-Email@example.com', 'Site Owner'); // owner email to receive </code>
