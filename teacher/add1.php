<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:http://localhost/Project/tlogin.php');
    exit;
}
else{
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
<link rel="icon" href="st.jpeg">
    <title>Student Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
    <script type="text/javascript">
      function validates(){
          if(document.form1.nme.value==""){
            document.getElementById('err').innerHTML="Name is Mandatory";
            return false;
          }
          else if(document.form1.rno.value==""){
            document.getElementById('err').innerHTML="Invalid Register Number";
            return false;
          }
          else if(document.form1.mob.value==""||document.form1.mob.value.length!=10){
            document.getElementById('err').innerHTML="Invaid Mobile Number";
            return false;
          }
          else if(document.form1.dob.value==""){
            document.getElementById('err').innerHTML="Date of Birth is Invalid";
            return false;
          }else if (document.form1.dept.value=="nothing") {
            document.getElementById('err').innerHTML="Enter Department";
            return false;
          }else if (document.form1.bgrp.value=="nothing") {
            document.getElementById('err').innerHTML="Enter Blood Group";
            return false;
          }else{
            return true;
          }
      }
    </script>
    <style media="screen">
    table{
      background-color: #F0F5F9;
      border-radius: 15px;
      width: 39%;
    }
      body{
      margin-top:0;
      margin-left:0;
      margin-right:0;
      margin-bottom:0;
      background-image: url(tpage-bg3.webp);
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
td{
  padding: 10px 30px;
}
#err{
  margin-left:auto;
  font-weight: bold;
  color:red;
}
.inpt{
  font-family: 'Roboto', sans-serif;
  color: #333;
  font-size: 1.2rem;
	margin: 0 auto;
  padding: 0.8rem 2rem;
  border-radius: 0.5rem;
  background-color: rgb(255, 255, 255);
  border: none;
  width: 100%;
  display: block;
  border-bottom: 0.3rem solid transparent;
  transition: all 0.3s;
}
.labl{
  font-family: 'Kanit', serif;
  font-weight:light;
  font-size: 1.5rem;
}
.btn {
  background-color: #c2fbd7;
  border-radius: 50px;
  box-shadow: rgba(44, 187, 99, .2) 0 -25px 18px -14px inset,rgba(44, 187, 99, .15) 0 1px 2px,rgba(44, 187, 99, .15) 0 2px 4px,rgba(44, 187, 99, .15) 0 4px 8px,rgba(44, 187, 99, .15) 0 8px 16px,rgba(44, 187, 99, .15) 0 16px 32px;
  color: green;
  cursor: pointer;
  display: inline-block;
  font-family: CerebriSans-Regular,-apple-system,system-ui,Roboto,sans-serif;
  font-weight: bold;
  padding: 7px 20px;
  text-align: center;
  text-decoration: none;
  transition: all 250ms;
  border: 0;
  font-size: 20px;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  margin-left: 70%;
}

.btn:hover {
  box-shadow: rgba(44,187,99,.35) 0 -25px 18px -14px inset,rgba(44,187,99,.25) 0 1px 2px,rgba(44,187,99,.25) 0 2px 4px,rgba(44,187,99,.25) 0 4px 8px,rgba(44,187,99,.25) 0 8px 16px,rgba(44,187,99,.25) 0 16px 32px;
  transform: scale(1.05) rotate(-1deg);
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
}
    </style>
  </head>
  <body>
  <h1>
      ADD STUDENT DETAILS
  </h1>
  <div class="middle">
  <form class="form1" name="form1" action="add.php" method="post" onsubmit="return validates()">
    <table align="center">
      <tr>
        <td><label for="nme" class="labl">Enter Student Name</label></td>
        <td><input type="text" name="nme" id="nme" value="" class="inpt" style="width:200px;" placeholder="-----Name-----"></td>
      </tr>
      <tr>
        <td><label for="rno" class="labl">Enter Student Register Number</label></td>
        <td><input type="number" class="inpt" name="rno" id="rno" value="" style="width:200px;" placeholder="Roll Number"></td>
      </tr>
      <tr>
        <td><label for="dob" class="labl">Enter Student Date of Birth</label></td>
        <td><input type="date" class="inpt" name="dob" id="dob" value="" style="width:202px;"></td>
      </tr>
      <tr>
        <td><label for="mob" class="labl">Enter Student Mobile Number</label></td>
        <td><input type="number" class="inpt" name="mob" id="mob" value="" style="width:200px;" placeholder="----Mobile----"></td>
      </tr>
      <tr>
        <td><label for="dept" class="labl">Enter Department</label></td>
        <td><select class="dept form-select form-select-lg mb-3" aria-label=".form-select-lg example"  id="dept" name="dept" style="width:208px;">
            <option value="nothing">---Select---</option>
            <option value="Computer Science and Engineering">Computer Science and Engineering</option>
            <option value="Information Technology">Information Technology</option>
            <option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
            <option value="Electrical and Electronics Engineering">Electrical and Electronics Engineering</option>
            <option value="Mechanical Engineering">Mechanical Engineering</option>
            <option value="Civil Engineering">Civil Engineering</option>
        </select></td>
      </tr>
      <tr>
        <td><label for="bgrp" class="labl">Enter Blood Group</label></td>
        <td><select class=" bgrp form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="bgrp" name="bgrp" style="width:208px;">
            <option value="nothing">---Select---</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select></td>
      </tr>
      <tr colspan="2">
          <td id="err"></td>
      </tr>
      <tr colspan="2">
          <td>
            <input type="submit" class="btn" name="" value="Add Records">
          </td>
      </tr>
    </table>
  </form>
  </div>
    </body>
</html>
<?php } ?>
