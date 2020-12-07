function Validate(login){//used to validate login
    var formData = {username: login.username.value, password: login.password.value};
    checkValidFields(formData);
    allFieldsValid();



    if (!(allFieldsValid()))//Checks if all fields valid based on rules established using regex before submitting
    {
        message("Error detected, Please to re-check fields for missing or invalid entry");
        return false;
    }
        message("All fields validated successfully, submitting form");
        return true;

    function message(msg) {//Used to generate an error message if invalid data detected
        alert(msg);
    }
    
    function checkValidFields(formData) {
        if (formData != "" && formData != null) {
            var userReg = /^[0-9a-zA-Z]+$/;
            var passReg = /^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])([a-zA-Z0-9!@#$%\^&*)(+=._-]{8,})$/;
            
            //Checks username
            if (!(userReg.test(formData['username']))) {
                    document.getElementById("username").classList.remove("txtBoxValid");
                    document.getElementById("username").classList.add("txtBoxError");
                    alert("Invalid Username entered, check characters and try again");
                }
                else if (formData['username'] != "" && formData['username'] != null) {
                    document.getElementById("username").classList.remove("txtBoxError");
                    document.getElementById("username").classList.add("txtBoxValid");
                }
            
            //checks password
            if (!(passReg.test(formData['password']))) {
                    document.getElementById("password").classList.remove("txtBoxValid");
                    document.getElementById("password").classList.add("txtBoxError");
                    alert("Invalid password entered, Password must have at least 8 characters with at least one Capital letter, at least one lower case letter and at least one number or special character.");
                }
                else if (formData['password'] != "" && formData['password'] != null) {
                    document.getElementById("password").classList.remove("txtBoxError");
                    document.getElementById("password").classList.add("txtBoxValid");
                }



            
        }

    }


    function allFieldsValid() {//checks if any error present in form
        var allFieldsValid = document.getElementsByClassName('txtBoxError');
        if (allFieldsValid.length > 0) {
            return false;
        }
        else {
            return true;

        }
    }
    



}