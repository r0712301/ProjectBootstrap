<?php
// $studentemail = htmlspecialchars($_POST['to']);
// $subject = "Your subject";
// // $subject = htmlspecialchars($_POST['subject']);
// $message= "Your message";
// // $message= htmlspecialchars($_POST['message']);
// $headers[] = 'MIME-Version: 1.0';
// $headers[] = 'Content-type: text/html; charset=iso-8859-1';
// $headers[] = 'From: Name-here <from@yourdomain.be>';
// $headers[] = 'Cc: ccmail@yourdomain.be';
// // using mail function and returns boolean
// $send = mail($studentemail, $subject, $txt, implode("\r\n", $headers));
// if ($send) {
// $response = "Mail sent successfully";
// } else {
// $response = "Mail not sent";
// }
// echo json_encode($response);

$mailto = htmlspecialchars($_POST['email']);
$mailfrom = "yannickvaneckbe@yannickvaneck.be";
$subject = htmlspecialchars($_POST['subject']);
$message = htmlspecialchars($_POST['content']);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output Contact</title>
</head>
<body>
<p>Aangezien mijn mailing nog niet werkt, print ik hier uw informatie terug.</p>
<p><?php echo $mailto?></p>
<!-- echo "<p>", $mailto, "</p>"; -->
<!-- echo "<p>", $subject, "</p>"; -->
<p><?php echo $subject?></p>
<!-- echo "<p>", $message, "</p>"; -->
<p><?php echo $message?></p>
<a href="contact.html" data-toggle="tooltip" data-placement="top" title="Contact">Contact</a>
</body>
</html>