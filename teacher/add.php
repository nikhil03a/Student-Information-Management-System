<html>

<head>
  <title>Update Marks</title>
  <link rel="icon" href="st.jpeg">
  <link href="https://fonts.googleapis.com/css2?family=IM+Fell+English+SC&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=IM+Fell+English+SC&family=Rokkitt:wght@100;300&display=swap"
    rel="stylesheet" />
  <style>
    html {
      background-image: url('tpage-bg3.webp');
    }

    h1 {
      font-family: 'Patrick Hand';
      font-size: 3rem;
      padding-left: 40px;
      color: #00A19D;
      padding-top: 30px;
      font-weight: bold;
    }

    h2 {
      font-family: 'IM Fell English SC', serif;
      padding-left: 40px;
      color: red;
      padding-top: 30px;
      font-size: 1.7rem;
    }

    p {
      font-family: 'Rokkitt', serif;
      padding-left: 40px;
      font-size: 1.5rem;
    }

    @media (max-width:1100px) {
      h1 {
        font-size: 2rem;
      }
    }
  </style>
</head>
<?php
session_start();
$username = $_SESSION['username'];
$name = $_POST['nme'];
$rno = $_POST['rno'];
$dob = $_POST['dob'];
$mob = $_POST['mob'];
$dept = $_POST['dept'];
$bgrp = $_POST['bgrp'];
$conn = new mysqli('localhost', 'root', '', 'project');
$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$randomString = '';

for ($i = 1; $i <= 6; $i++) {
  $index = rand(0, strlen($characters) - 1);
  $randomString .= $characters[$index];
}
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {
  $stmt = $conn->prepare("insert into $username (name,rno,dob,mob,dept,bgrp,pwd)
  values(?,?,?,?,?,?,?)");
  $stmt->bind_param("sisisss", $name, $rno, $dob, $mob, $dept, $bgrp, $randomString);
  $stmt->execute();
  require_once 'C:/xampp/htdocs/Project/php-rest-api-master/autoload.php';
  //  $MessageBird = new MessageBird\Client('dTcyLL6w3eB4z2p8TqFSn8aAr');
  //  $Message = new \MessageBird\Objects\Message();
  // $Message->originator = 'TestMessage';
  // $Message->recipients = array(+916379066510);
  // $Message->body = 'You have been registered successfully in Student Information Management System. Your register Number is '.$rno .' and your password is '.$randomString.' . Please dont share your login credentials with anyone. Thank you';
  // $MessageBird->messages->create($Message);?>
  <h1>
    <?php echo "Updated data successfully\n"; ?>
  </h1>
  <?php
  $_SERVER['HTTP_REFERER'];
  $stmt->close();
  $conn->close();
}
?>

</html>