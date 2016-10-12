function checkpassword()
{
  if (document.getElementById('pass') == document.getElementById('cpass'))
  {
    alert("Your password match");
  }
  else{
    alert("Your password did not match!");
  }
}
