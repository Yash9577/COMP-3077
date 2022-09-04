
document.getElementById("submitButton").addEventListener("click", (e) => {
  var firstname = document.getElementById('firstname');
  var lastname = document.getElementById('lastname');
  var password = document.getElementById('password');
  var confirmpassword = document.getElementById('confirmpassword');
  var email = document.getElementById('email');
  var phone = document.getElementById('phone');



  function containsSpecialChars(str) {
    const specialChars = /[`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~12345678910]/;
    return specialChars.test(str);
  }




  if (firstname.value.length < 4) {
    //e.preventDefault();
    console.log(firstname.value);
    alert('firstname should be more than 4 characters');
    firstname.focus();

  }
  // firstname.focus();}
  if (containsSpecialChars(firstname.value)) {
    alert('string contains special character');
  }

  if (lastname.value.length < 4) {
    //e.preventDefault();
    alert('lastname should be more than 4 characters');
    lastname.focus();

  }
  if (containsSpecialChars(lastname.value)) {
    //e.preventDefault();
    alert('string contains special characters');
  }



  if (!email.value.includes(".com") || !email.value.includes("@")) {
    // e.preventDefault();
    alert("Email is not in proper format");
    //email.focus();
  }


  if (phone.value.substring(3, 4) != '-' || phone.value.substring(7, 8) != '-') {
    alert("Number enter not in default format");
    return false;
  }


  if(password.value === '') {
    alert('Password must be filled');
  } else if(password.value.length < 8) {
    alert('Minimal password length is 8 characters');
  } else if(password.value !== confirm.value) {
    alert('password does not match');  
  }
})