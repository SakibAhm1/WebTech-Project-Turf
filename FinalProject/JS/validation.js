    function validateFirstName(fname) {
        if (fname == "")
            alert("Firstname cannot be empty");
        else if (/^[a-zA-Z]+$/.test(fname) == false)
            alert("Name cannot contain any number or symbol");
        else    
            return true;
        return false;
    };

    function validateLastName(lname) {
        if (lname == "")
            alert("Lastname cannot be empty");
        else if (/^[a-zA-Z]+$/.test(lname) == false)
            alert("Name cannot contain any number or symbol");
        else    
            return true;
        return false;
    };

    function validateEmail(emailaddress){
        if (emailaddress == "")
            alert("Email Field cannot be empty");
        else if(/^[a-zA-Z][a-zA-Z0-9_]+[@]+[a-zA-Z]+[.]+[a-zA-Z.]+[a-zA-Z]$/.test(emailaddress) == false)
            alert("Invalid Email Address");
        else 
            return true;
        return false;
    };

    function validatePassword(pass){
        if (pass == "")
            alert("Password Field cannot be empty");
        else if (pass.length < 8)
            alert("Password length must be atleast 8");
        else if (/[a-zA-z]/.test(pass) == false)
            alert("Password must contain atleast one alphabet");
        else if (/[0-9]/.test(pass) == false)
            alert("Password must contain atleast one number");
        else if (/[!@#$%^&*]/.test(pass) == false)
            alert("Password must contain atleast one special character");
        else 
            return true;
        return false;
    };
    function validatePhone(phn) {
        if (phn == "")
            alert("Phone Number cannot be empty");
        else if (/^[0-9]{11}$/.test(phn) == false)
            alert("Invalid Phone Number");
        else    
            return true;
        return false;
    };

    function validateGender(gend){
        if (gend == "")
            alert("Gender field cannot be empty");
        else if (/^[a-zA-Z]+$/.test(gend) == false)
            alert("Gender cannot contain any number or symbol");
        else    
            return true;
        return false;
    };
function validation()
{
    var firstname = document.getElementById('firstname').value;
    var lastname = document.getElementById('lastname').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var phone = document.getElementById('phone').value;
    var gender = document.getElementById('gender').value;
    alert("validation");
    if(validateFirstName(firstname)== false)
        return false;
    if(validateLastName(lastname)== false)
        return false;
    if(validateEmail(email)== false)
        return false;
    if(validatePassword(password)== false)
        return false;
    if(validatePhone(phone)== false)
        return false;
    if(validateGender(gender)== false)
        return false;
    return true;
}
