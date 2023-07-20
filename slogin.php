<?php
$conn = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn, 'project');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="icon" href="st.jpeg">
  <title>Student's Login Login</title>
  <link rel="icon" href="">
  <script type="text/javascript">
    function validate() {
      var usr = document.sform.user.value;
      var pass = document.sform.pwd.value;
      if (usr == "" || pass == "") {
        document.getElementById('demo').innerHTML = "Invalid User Id or Password";
        return false;
      } else {
        $
        return true;
      }
    }
  </script>
  <style media="screen">
    .heading {
      font-size: 30px;
      height: 200px;
      padding-top: 50px;
      text-align: center;
    }

    h1 {
      text-align: center;
      font-family: monospace;
    }

    table {
      margin: 0 auto 0 40%;
      border-radius: 5px;
      border-spacing: 20px;
    }

    td {
      width: 220px;
      height: 50px;
      font-family: monospace;
      font-size: 150%;
      text-align: left;
    }

    img {
      position: absolute;
      left: 0;
      right: auto;
    }

    body {
      position: relative;
      background-color: #EC994B;
      background-image: linear-gradient(to left top, #0af6e7, #4ef4fc, #7ff0ff, #a8ecff, #c8e8ff, #c7e7fe, #c7e6fe, #c6e5fd, #a5e6ff, #7ce8ff, #4ceaf3, #0beadc);
      background-repeat: no-repeat;
      background-size: cover;
      height: 700px;
    }

    label {
      margin-left: 40%;
      font-size: 125%;
    }

    input:focus {
      box-shadow: 0px 0px 3px 1px #a2d7fc;
    }

    .sub {
      width: 86%;
      height: 30px;
      margin-top: 10px;
      margin-left: 7%;
      border-radius: 5px;
      background: rgb(224, 243, 250);
      background: -webkit-linear-gradient(rgba(224, 243, 250, 1) 0%, rgba(216, 240, 252, 1) 50%, rgba(184, 226, 246, 1) 51%, rgba(182, 223, 253, 1) 100%);
      background: -o-linear-gradient(rgba(224, 243, 250, 1) 0%, rgba(216, 240, 252, 1) 50%, rgba(184, 226, 246, 1) 51%, rgba(182, 223, 253, 1) 100%);
      background: linear-gradient(rgba(224, 243, 250, 1) 0%, rgba(216, 240, 252, 1) 50%, rgba(184, 226, 246, 1) 51%, rgba(182, 223, 253, 1) 100%);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#e0f3fa', endColorstr='#b6dffd', GradientType=0);
      border: 1px solid #b6dffd;
      color: black;
      text-transform: uppercase;
      box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.7);
      text-shadow: 0px 1px 1px white;
      font-size: 12px;
    }

    .sub:hover {
      text-shadow: 0px 0px 1px gray;
    }

    .sub:active {
      background: rgb(162, 215, 252);
      background: -moz-linear-gradient(top, rgba(162, 215, 252, 1) 0%, rgba(164, 219, 244, 1) 49%, rgba(194, 231, 250, 1) 50%, rgba(203, 235, 247, 1) 100%);
      background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(162, 215, 252, 1)), color-stop(49%, rgba(164, 219, 244, 1)), color-stop(50%, rgba(194, 231, 250, 1)), color-stop(100%, rgba(203, 235, 247, 1)));
      background: -webkit-linear-gradient(top, rgba(162, 215, 252, 1) 0%, rgba(164, 219, 244, 1) 49%, rgba(194, 231, 250, 1) 50%, rgba(203, 235, 247, 1) 100%);
      background: -o-linear-gradient(top, rgba(162, 215, 252, 1) 0%, rgba(164, 219, 244, 1) 49%, rgba(194, 231, 250, 1) 50%, rgba(203, 235, 247, 1) 100%);
      background: -ms-linear-gradient(top, rgba(162, 215, 252, 1) 0%, rgba(164, 219, 244, 1) 49%, rgba(194, 231, 250, 1) 50%, rgba(203, 235, 247, 1) 100%);
      background: linear-gradient(to bottom, rgba(162, 215, 252, 1) 0%, rgba(164, 219, 244, 1) 49%, rgba(194, 231, 250, 1) 50%, rgba(203, 235, 247, 1) 100%);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#a2d7fc', endColorstr='#cbebf7', GradientType=0);
      margin-top: 10px;
      box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.7) inset;
    }

    form {
      width: 80%;
      text-align: center;
      margin-left: 10%;
    }

    html {
      background-image: url("login-bg.jpg");
      background-repeat: y-repeat;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }

    h1:before {
      display: inline-block;
      content: " ";
      margin-right: 15px;
      width: 60px;
      height: 6px;
      font-size: 300%;
      border-top-width: 5%;
      border-top-style: solid;
      border-top-color: #333;
    }

    body:before {
      content: " ";
      box-shadow: 0px 0px 100px black inset;
      width: 100%;
      height: 100%;
      display: block;
      top: 0px;
      left: 0px;
      position: fixed;
    }

    h1:after {
      display: inline-block;
      margin-left: 15px;
      width: 60px;
      height: 6px;
      border-top-width: 5%;
      border-top-style: solid;
      border-top-color: #333;
    }

    body:before,
    body:after {
      display: none;
      background: rgba(0, 0, 0, 0);
      position: absolute;
      width: 55%;
      height: 30px;
    }

    body:before {
      margin-top: -12px;
      margin-left: -45px;
      -webkit-transform: rotate(-25deg);
      -moz-transform: rotate(-25deg);
      -o-transform: rotate(-25deg);
      transform: rotate(-25deg);
    }

    body:after {
      margin-top: -230px;
      margin-left: 240px;
      -webkit-transform: rotate(32deg);
      -moz-transform: rotate(32deg);
      -o-transform: rotate(32deg);
      transform: rotate(32deg);
    }

    body {
      background: rgb(255, 255, 255);
      background: -moz-linear-gradient(top, rgba(255, 255, 255, 1) 0%, rgba(244, 244, 244, 1) 100%);
      background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(255, 255, 255, 1)), color-stop(100%, rgba(244, 244, 244, 1)));
      background: -webkit-linear-gradient(top, rgba(255, 255, 255, 1) 0%, rgba(244, 244, 244, 1) 100%);
      background: -o-linear-gradient(top, rgba(255, 255, 255, 1) 0%, rgba(244, 244, 244, 1) 100%);
      background: -ms-linear-gradient(top, rgba(255, 255, 255, 1) 0%, rgba(244, 244, 244, 1) 100%);
      background: linear-gradient(to bottom, rgba(255, 255, 255, 1) 0%, rgba(244, 244, 244, 1) 100%);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#f4f4f4', GradientType=0);
      width: 400px;
      height: 250px;
      position: absolute;
      top: 32%;
      left: 12%;
      color: #333;
      font-size: 1rem;
      box-shadow: 0px 6px 8px rgba(0, 0, 0, 0.5);
      border-radius: 15px;

    }

    p {
      color: red;
      text-align: center;
    }

    input,
    select {
      width: 100%;
      height: 25px;
      border-radius: 5px;
      border: 1px solid #e1e1e1;
      margin-bottom: 10px;
      text-indent: 10px;
      outline: none;
      -webkit-transition: box-shadow 1s;
      -moz-transition: box-shadow 1s;
      -o-transition: box-shadow 1s;
      transition: box-shadow 1s;
    }
  </style>
</head>

<body>
  <h1> STUDENT LOGIN </h1>
  <form class="" onsubmit="return validate()" action="spage.php" name="sform" method="post">
    <input type="text" name="user" class="ps" id="user" value="" placeholder="User Id">

    <select class="sub form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="name" name="name">
      <option value="">--Select--</option>
      <?php
      $query = "SELECT name,course from auth";
      $r = mysqli_query($conn, $query);
      while ($row = mysqli_fetch_assoc($r)) {
        $name = $row['name'];
        $course = $row['course'];
        if($name!="Admin"){?>
        <option value="<?php echo $course ?>"><?php echo $name ?></option>
        <?php }?>
      <?php
      }
      ?>
    </select>
    <input type="password" class="ps" name="pwd" id="pwd" value="" placeholder="Password">
    <input type="submit" class="sub" name="submit" value="SUBMIT">
  </form>
  <p id="demo"></p><br>
</body>

</html>