$(document)
.on("submit", "form.js-register", function(event) {
  event.preventDefault();

  var _form = $(this);
  var _error = $(".js-error", _form);

  var data = {
    email: $("input[type='email']", _form).val(),
    password: $("input[type='password']", _form).val()
  };

  if(data.email.length < 6) {
    _error
      .text("Vennligst oppgi en gyldig e-post")
      .show();
    return false;
  } else if (data.password.length < 11) {
    _error
      .text("Vennligt oppgi passord med minimum 11 tegn")
      .show();
    return false;
  }

  //Hvis koden kommer så langt kan vi starte Ajax-delen
  _error.hide();
  
  return false;
})
