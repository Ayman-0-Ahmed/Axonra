function validate() {
    var email_username = document.getElementById('fname-femail').value;

    if (/\@/.test(email_username)) {
        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email_username)) {
            return (true)
        }
        console.log("You have entered an invalid email address!");
        return (false)
    } else {

        if (/^\w+([\.-]?\w+)\w+([\.-]?\w+)/.test(email_username)) {
            alert("You didn't enter a phone number.");
            error = "You didn't enter a phone number.";
        } else if (isNaN(parseInt(stripped))) {
            phone = "";
            error = "The phone number contains illegal characters.";
            alert("illegal characters.");
        } else if (!(stripped.length == 10)) {
            alert("wrong length");
            phone = "";
            error = "The phone number is the wrong length. Make sure you included an area code.\n";
        }
    }
}
