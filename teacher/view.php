<?php 
  session_start();
  $username = $_SESSION['username'];
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="icon" href="st.jpeg">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=IM+Fell+English+SC&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=IM+Fell+English+SC&family=Rokkitt:wght@100;300&display=swap" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=BioRhyme&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
  <script type="text/javascript">
        function openprofile(){
          document.getElementById("profile").style.display="block";
          document.getElementById("p-button").style.borderColor=" #FF5C58";
          document.getElementById("m-button").style.borderColor="#DFF6FF";
          document.getElementById("marks").style.display="none";
        }
        function openmarks(){
          document.getElementById("marks").style.display="block";
          document.getElementById("profile").style.display="none";
          document.getElementById("m-button").style.borderColor=" #FF5C58";
          document.getElementById("p-button").style.borderColor="#DFF6FF";
        }
  </script>
    <meta charset="UTF-8">
    <title>Student Details</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 3px outset black;
            border-radius: 10px;
        }
        body{
          background-image: url(tpage-bg3.webp);
          background-size: 100%;
          background-repeat: no-repeat;
          margin-left: 25px;
        }
        .p-button,.m-button{
          transition-property: all;
          transition-duration: 0.5s;
          display: inline-block;
        }
        .p-button:hover,.m-button:hover{
            background-color: #DFF6FF;
              width: 45%;
              height: 42px;
        }
        .heading {
            text-align: center;
            color: #006600;
            font-size: 180%;
            font-family: 'Patrick Hand';
        }
        .profile,.marks{
        }
        .tab{
          width: 77%;
          margin-left: 16%;
          margin-bottom: 0;
        }
        .profile{
          background-color: #F0F5F9;
          padding: 25px;
          border: 5px solid #FF5C58;
          margin: 0 auto 0 auto;
          border-radius: 8px;
          width: 65%;
        }
        .p-button{
          border-width: 5px 5px 1px 5px;
          border-style: solid;
          border-radius: 8px;
          border-color:#FF5C58;
          font-family: 'BioRhyme', serif;
          font-size: 80%;
          font-weight: bold;
          width: 44%;
        }
        .m-button{
          border-width: 5px 5px 1px 5px;
          border-style: solid;
          border-radius: 8px;
          border-color:#ffffff;
          font-family: 'BioRhyme', serif;
          font-size: 80%;
          font-weight: bold;
          width: 44%;
        }
        .marks{
          background-color: #F0F5F9;
          padding: 25px;
          border: 5px solid #FF5C58;
          margin: 0 auto 0 auto;
          border-radius: 8px;
          padding:7%;
          width: 60%;
        }
        h1{
          font-family: 'Patrick Hand';
          color:#623448;
        }
        h2{
          font-family: 'IM Fell English SC', serif;
        }
        p{
          font-family: 'Rokkitt', serif;
          font-size: 25px;
        }
        button{
          width: 12.5rem;
          height: 35px;
        }
        h2.error{
          color:red;
        }
        td {
            background-color: #FF9292;
        }
        th,td {
            font-weight: bold;
            padding: 10px;
            text-align: center;
            border-radius: 10px;
        }
        th{
          background-color: #39A2DB;
            font-family: 'BioRhyme';

        }

        td {
            font-weight: lighter;
              font-family: 'BioRhyme';
        }
        @media (max-width:900px){
          h1{
            font-size: 2rem;
          }
          .marks{
            width: 50%;
          }
          table{
            width: 10%;
          }
        }
    </style>
</head>
<body>
  <?php
  $rno = $_POST['rno'];
  $conn = mysqli_connect('localhost', 'root', '');
  if(! $conn ) {
        die('Could not connect: ' . mysql_error());
  }else{$sql = "SELECT * FROM $username
      WHERE rno =$rno";
   mysqli_select_db($conn,'project');
   $result1 = mysqli_query($conn,$sql);
   $rows = mysqli_num_rows($result1);
   if($rows==0){?>
     <h2 class="error"><?php echo("Invalid Register Number");?></h2>
     <p><?php
     die("Please Enter a valid register number");?>
     </p>
     <?php
   }
   }
     ?>
     <div class="heading">
 <h1>STUDENT DETAILS</h1>
     </div>

     <div class="tab">
        <button type="button" id="p-button" class="p-button" name="profile" onclick="openprofile()">Profile</button>
        <button type="button" name="marks" id="m-button" class="m-button" onclick="openmarks()">Attendance and Marks</button>
     </div>
     <div class="profile" id="profile" style="display:block;">
       <?php $result=$result1->fetch_assoc()?>
       <h2>NAME</h2><p><?php echo $result['name'];?></p>
       <h2>REGISTER NUMBER</h2><p><?php echo $result['rno'];?></p>
       <h2>DATE OF BIRTH</h2><p><?php echo $result['dob'];?></p>
       <h2>MOBILE</h2><p><?php echo $result['mob'];?></p>
       <h2>DEPARTMENT</h2><p><?php echo $result['dept'];?></p>
       <h2>BLOOD GROUP</h2><p><?php echo $result['bgrp'];?></p>
     </div>
<div class="marks" id="marks" style="display:none;">
  <table>
      <tr>
          <th>Subject</th>
          <th>Assessment Marks (40)</th>
          <th>Mid Semester Marks (20)</th>
          <th>End Semester Marks (20)</th>
          <th>Total Marks (100)</th>
          <th>Attendance(%)</th>
      </tr>
      <?php
            $subjectQuery = "SELECT subject FROM subjects WHERE course = '$username'";
            $subjectResult = mysqli_query($conn, $subjectQuery);

            while ($subjectRow = mysqli_fetch_assoc($subjectResult)) {
                $subject = $subjectRow['subject'];
                $assColumn = $subject . "ass";
                $midColumn = $subject . "mid";
                $endColumn = $subject . "ed";
                $attColumn = $subject . "att";

                $marksQuery = "SELECT $assColumn, $midColumn, $endColumn, $attColumn FROM $username WHERE rno = $rno";
                $marksResult = mysqli_query($conn, $marksQuery);
                $marksRow = mysqli_fetch_assoc($marksResult);
        ?>
                <tr>
                    <th><?php echo $subject; ?></th>
                    <td><?php echo $marksRow[$assColumn]; ?></td>
                    <td><?php echo $marksRow[$midColumn]; ?></td>
                    <td><?php echo $marksRow[$endColumn]; ?></td>
                    <td><?php echo  $marksRow[$assColumn]+ $marksRow[$midColumn]+$marksRow[$endColumn]?></td>
                    <td><?php echo $marksRow[$attColumn]; ?></td>
                </tr>
        <?php
            }
        ?>
  </table>
</div>
</body>

</html>
<?php
   mysqli_close($conn);
?>
