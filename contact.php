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
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>Output Contact</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-mine">
    <div class="container">
      <a class="navbar-brand" href="index.html"><img src="/images/favicon_cropped.jpg" class="img" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="CV.html">CV</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ervaring.html">Ervaring</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="hobby.html">Hobby's</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="contact.html">Contact</a>
          </li>

        </ul>

      </div>
    </div>
  </nav>

<p>Aangezien mijn mailing nog niet werkt, print ik hier uw informatie terug.</p>
<p><?php echo $mailto?></p>
<!-- echo "<p>", $mailto, "</p>"; -->
<!-- echo "<p>", $subject, "</p>"; -->
<p><?php echo $subject?></p>
<!-- echo "<p>", $message, "</p>"; -->
<p><?php echo $message?></p>
<a href="contact.html" data-toggle="tooltip" data-placement="top" title="Contact" class="btn btn-primary">Contact</a>

<footer class="footer mt-auto fixed-bottom py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p><a href="https://www.linkedin.com/in/yannick-van-eck-1864aa251/" target="_blank"><i
                class="fa fa-linkedin-square" style="font-size:24px"></i></a> Mijn LinkedIn profiel</p>
          <p>&copy; Yannick van Eck</p>
        </div>
        <div class="col-md-6 align-right">
          <p id="mail">r0712301@student.thomasmore.be</p>
        </div>
      </div>
    </div>
  </footer>
<script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>