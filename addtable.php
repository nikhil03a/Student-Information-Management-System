<html>

<head>
  <title>Add Course</title>
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
$name = $_POST['name'];
$course = $_POST['course'];
$pwd = $_POST['pwd'];
$conn = new mysqli('localhost', 'root', '', 'project');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {
  $stmt = $conn->prepare("insert into auth (course,pwd,name)
  values(?,?,?)");
  $stmt->bind_param("sis", $course, $pwd, $name);
  $stmt->execute();
  $query = $conn->prepare("create table $course as (select * from student)");
  $query->execute();
?>
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