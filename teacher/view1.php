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
<link rel="icon" href="st.jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="form.css">
    <script type="text/javascript">
      function validates(){

         if(document.form1.rno.value==""){
            document.getElementById('err').innerHTML=" Enter a valid register number ";
            return false;
          }
          else{
            return true;}

      }
    </script>
    <meta charset="utf-8">
    <title>View Student Details</title>
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

      <h1>  VIEW STUDENT DETAILS</h1>
    <div class="login">
    <form class="form1" name="form1" action="view.php" method="post" onsubmit="return validates()">
      <table align="center">
          <tr>
          <td><label for="rno" class="labl">Enter Student Register Number: </label></td>
          <td><input type="number" name="rno" id="rno"  class="inpt" value="" style="width:200px;" placeholder="Register Number " ></td>
        </tr>
        <tr>
            <td id="err"></td>
        </tr>
        <tr>
            <td>
              <input type="submit" class="btn" name="" value="View Details">
            </td>
        </tr>
      </table>
    </form>
    </div>
  </body>
</html>
<?php } ?>
