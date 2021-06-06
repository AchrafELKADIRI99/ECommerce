function checkfields() {
    var element1 = document.getElementById(emailfield);
    var element2 = document.getElementById(passwordfield);

   /* var emailfield = document.forms.emailfield.value;
  var passwordfield = document.forms.passwordfield.value;*/
  function verif() {
    if (element1 == "") {
      alert("Please insert your email!");
      return false;
    }
    if (element2 == "") {
      alert("Please insert your password!");
      return false;
    
  }
}}
