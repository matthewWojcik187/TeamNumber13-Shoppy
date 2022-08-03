function val(){
  	// Get the elements of the form
    let email = document.getElementById('email').value;
    let pass = document.getElementById('password').value;
    let cpass = document.getElementById('cpassword').value;
    // Email regex
    var emailreg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

  	// Ensure the email is valid
    if(!emailreg.test(email)){
        alert('Enter a valid email');
        return false;
    }

  	// Ensure the password has at least 8 characters, a number, and captial letter, a lower case and a sybmol
    if(pass.length < 8 || !pass.match(/[a-z]/g) || !pass.match(/[A-Z]/g) || !pass.match(/[0-9]/g) || !pass.match(/[!@#$%^&*]/g)){
        alert('Enter a valid password');
        return false;
    }

    // Checking to see if confirm password matches the password
    if(cpass != pass){
        alert('Passwords must match');
        return false;
    }

    return true;
}