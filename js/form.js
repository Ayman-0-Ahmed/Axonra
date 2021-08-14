function validate() {
    var email_username = document.getElementById('fname-femail').value;

    if (/\@/.test(email_username)) {
        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email_username)) {
            return (true)
        } else {
          alert("You have entered an invalid email address!");
          return (false)
        }
    } else {
        if (/^[a-zA-Z][a-zA-Z0-9_.]{5,29}$/.test(email_username)) {
          alert("This is a valid Username.");
        } else if (email_username.length == 0) {
        } else if (email_username.length < 6) {
          alert("This username has to be bigger than 6 charecters.");
        } else if (email_username.length > 30) {
          alert("This username has to be smaller than 30 charecters.");
        } else if (/^[0-9_.]$/.test(email_username.charAt(0))) {
          alert("The first should not be a number or a underscore or period")
        } else {
          alert("illegal characters.");
        }
    }
}
