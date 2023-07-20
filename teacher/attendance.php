<?php 
session_start();
$username = $_SESSION['username'];
?>

<html>
<head>
  <title>Update Attendance</title>
<link rel="icon" href="st.jpeg">
  <link href="https://fonts.googleapis.com/css2?family=IM+Fell+English+SC&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=IM+Fell+English+SC&family=Rokkitt:wght@100;300&display=swap" rel="stylesheet" />
  <style>
  html{
    background-image: url('tpage-bg3.webp');
  }
  h1{
    font-family: 'Patrick Hand';
    font-size: 3rem;
    padding-left: 40px;
    color: #00A19D;
    padding-top: 30px;
    padding-bottom: 50px;
    font-weight: bold;
  }
  h2{
    font-family: 'IM Fell English SC', serif;
    padding-left: 40px;
    color: red;
    padding-top: 30px;
    font-size: 1.7rem;
  }
  p{
    font-family: 'Rokkitt', serif;
    padding-left: 40px;
    font-size: 1.5rem;
  }
  @media (max-width:1100px){
    h1{
      font-size: 2rem;
    }
    .labl{
      font-size: 1.2rem;
    }
    .inpt{
      font-size: 1rem;
    }
  </style>
</head>
<?php
$rno = $_POST['rno'];
$sub = $_POST['sub'];
$att = $_POST['att'];
$conn = mysqli_connect('localhost', 'root', '');
if(! $conn ) {
      die('Could not connect: ' . mysql_error());
}
$sql = "SELECT * FROM $username
    WHERE rno =$rno";
 mysqli_select_db($conn,'project');
 $result1 = mysqli_query($conn,$sql);
 $rows = mysqli_num_rows($result1);
 if($rows==0){?>
   <h2><?php echo("Invalid Register Number");?></h2>
   <p><?php
   echo("Please Enter a valid register number");?>
   </p>
   <?php
 } else {
  $sql = "UPDATE $username
      SET {$sub}att=$att
      WHERE rno =$rno";
   mysqli_select_db($conn,'project');
   mysqli_query($conn,$sql);?>
   <h1><?php echo "Updated data successfully\n";?></h1><?php
   mysqli_close($conn);
}?>
</html>
