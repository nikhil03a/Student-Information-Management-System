function validate(){
  var usr = document.myform.user.value;
  var pass =document.myform.pwd.value;
  if(usr=="1111" && pass=="1111")
  {
    return true;
  }
  else if(usr=="2222" && pass=="2222")
  {
    return true;
  }else if(usr=="3333" && pass=="3333")
  {
    return true;
  }else if(usr=="4444" && pass=="4444")
  {
    return true;
  }else if(usr=="5555" && pass=="5555")
  {
    return true;
  }else{
    document.getElementById('demo').innerHTML="Invalid User Id or Password";
    return false;
  }
}
