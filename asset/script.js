function signupcheck() {
  var username = document.signupPatient.username.value;
  var password = document.signupPatient.password.value;
  var email = document.signupPatient.email.value;

  if (username == null || username == '') {
    alert("userName can't be blank");
    return;
  } else if (password.length < 6) {
    alert('Password must be at least 6 characters long');
    return;
  } else if (email == null || email == '') {
    alert("email can't be blank");
    return;
  } else {
    return document.signupPatient.submit();
  }
}

function loginCheck() {
  var username = document.signinPatient.username.value;
  var password = document.signinpatient.password.value;

  if (username == null || username == '') {
    alert("userName can't be blank");
    return;
  } else if (password.length < 6) {
    alert('Password must be at least 6 characters long');
    return;
  } else {
    return document.signinpatient.submit();
  }
}
