
<?php
if (!isset($_POST['submit'])) {
  header("Location:http://localhost/Project/tlogin.php");
  die();
} else {
  ?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <link rel="icon" href="st.jpeg">
    <title>Teacher's Section</title>
    <link rel="stylesheet" href="form.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">

    <style media="screen">
      html {
        margin-top: 0;
        margin-left: 0;
        margin-right: 0;
        margin-bottom: 0;
        background-image: url(tpage-bg3.webp);
        background-repeat: repeat-y;
        background-size: 100%;
      }
      .teacher{
        margin-left: 80px;
      }
      h1 {
        font-family: 'Patrick Hand';
        font-size: 3rem;
        padding-left: 40px;
        color: #00A19D;
      }

      .middle a {
        display: inline-block;
        width: 0;
      }

      .middle {
        margin: 50px 43%;
      }

      .btn {
        position: relative;
        left: 30%;
        width: 250px;
      }

      td {
        padding: 20px;
      }

      table {
        position: absolute;
        right: 75%;
      }

      @media (max-width:900px) {
        .teacher {
          display: none;
        }
      }
    </style>
  </head>

  <body>
    <?php  
    $user = $_POST['user'];
    $pass = $_POST['pwd'];

    $conn = mysqli_connect('localhost', 'root', '');

    if (!$conn) {
      die('Could not connect: ' . mysql_error());
    }
    mysqli_select_db($conn, 'project');
    $sql = "SELECT * FROM auth WHERE course like '$user'";
    $result1 = mysqli_query($conn, $sql);
    $result = $result1->fetch_assoc();
    $rows = mysqli_num_rows($result1);
    if ($rows == 0) { ?>
      <h2 class="error">
        <?php echo ("Invalid Login"); ?>
      </h2>
      <p>
        <?php
        die("Please Enter a valid login credentials"); ?>
      </p>
      <?php
    }
    $pwd = $result['pwd'];
    if (strcmp($pwd, $pass) != 0) { ?>
      <h2 class="error">
        <?php echo ("Invalid Login"); ?>
      </h2>
      <p>
        <?php
        die("Please Enter a valid login credentials"); ?>
      </p>
      <?php
    } else {
      if (isset($_SESSION['logged_in'])) {
        session_destroy();
      }
      session_start();
      $_SESSION['logged_in'] = true;
      $_SESSION['username'] = $user;
      if($user == 'admin'){
        header("Location:http://localhost/Project/admin.php");
      }
      ?>
      <h1>Staff Section</h1>
      <div class="middle">
        <form class="" action="./logout.php" method="post">
          <table>
            <tr>
              <td><img src="add.png" height="50px" weight="50px"></img></td>
              <td><a href="teacher/add1.php">
                  <input type="button" name="add-btn" class="btn add-btn" value="Add Student Details"></a></td>
            </tr>
            <tr>
              <td><img src="marks.png" height="50px" weight="50px"></img></td>
              <td><a href="teacher/mark1.php"><input type="button" name="button" class="btn"
                    value="Update Student Marks"></a></td>
            </tr>
            <tr>
              <td><img src="view.png" height="50px" weight="50px"></img></td>
              <td><a href="teacher/view1.php"><input type="button" name="button" class="btn"
                    value="View Student Details"></a></td>
            </tr>
            <tr>
              <td><img src="attendance.png" height="50px" weight="50px"></img></td>
              <td><a href="teacher/attendance1.php"><input type="button" name="button" class="btn"
                    value="Update Attendance"></a></td>
            </tr>
            <tr>
              <td><img src="attendance.png" height="50px" weight="50px"></img></td>
              <td><a href="teacher/addsub1.php"><input type="button" name="button" class="btn"
                    value="Add Subject"></a></td>
            </tr>
            <tr>
              <td><img src="1828490.png" alt="" width="50px" height="50px"></td>
              <td><a class="" href="index.html"> <input type="submit" class="btn" name="button" value="Logout"> </a></td>
            </tr>
          </table>
        </form>
        <img src="timg3.jpeg" width=330% class="teacher" height="480px" />
      </div>
      
    </body>

    </html>
    <?php
    } ?>
<?php
} ?> 