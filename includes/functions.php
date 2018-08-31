<?php include "db.php";?>
<?php 

function createMeeting(){
    
    if(isset($_POST['submit'])){
    global $connection;
    $meeting_name = $_POST['name'];
    $meeting_firma = $_POST['firma'];
    $meeting_email = $_POST['email'];
    $meeting_telefon = $_POST['telefon'];
    $meeting_date = $_POST['date'];
    $meeting_time = $_POST['time'];
        
    $query = "INSERT INTO meetings(meeting_name,meeting_firma,meeting_email,meeting_telefon,meeting_date,meeting_time,meeting_status)";
    $query .= "VALUES('{$meeting_name}','{$meeting_firma}','{$meeting_email}','{$meeting_telefon}','{$meeting_date}','{$meeting_time}','for approval')";
    $result = mysqli_query($connection,$query);
        
        if($result){
            echo "Meeting created!";
        } else {
            die("Fail!") . mysqli_error($connection);
        }
    
      
require 'PHPMailerAutoload.php';
require 'site_mail.php';
        
$mail = new PHPMailer;

$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com;';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = EMAIL;                 // SMTP username
$mail->Password = PASS;                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom(EMAIL, 'GolinPG');
$mail->addAddress('ickaim@gmail.com', 'User');                    // Name is optional
$mail->addReplyTo(EMAIL);

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'New meeting';
$mail->Body    = '<div>Meeting</div>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}    
  
        
    }
    
}

?>