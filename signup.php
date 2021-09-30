<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Ayman Ahmed">
    <meta name="description" content="Sign Up for Axonra">
    <meta name="keywords" content="Sign Up to Axonra, Sign Up for Axonra, Axonra Sign Up, Sign Up for Axonra, Signup to Axonra, Signup for Axonra, Axonra Signup">

    <title>Sign Up</title>

    <link rel="shortcut icon" href="assets/favicon.png">
    <link rel="stylesheet" href="css/signup.css">
  </head>
  <body>
    <div class="form-outline"></div>
    <form action="includes\signup.inc.php" method="post">
      <label class="text-label" for="first-name">First Name</label>
      <input class="text-input" type="text" name="firstName" id="first-name" placeholder="Write your First Name">
      <label class="text-label" for="last-name">Last Name</label>
      <input class="text-input" type="text" name="lastName" id="last-name" placeholder="Write your Last Name">
      <label class="text-label" for="username">Username</label>
      <input class="text-input" type="username" name="username" id="username" placeholder="Make a Username">
      <label class="text-label" for="email">Email</label>
      <input class="text-input" type="email" name="email" id="email" placeholder="Enter your E-mail">
      <label class="text-label" for="password">Password</label>
      <input class="text-input" type="password" name="password" id="password" placeholder="Make a Password">
      <img class="hide-show" src="assets/show.svg" id="show_icon" onclick="show_hide()">
      <label class="text-label" for="repeat-password">Repeat Password</label>
      <input class="text-input" type="password" name="passwodRepeat" id="repeat-password" placeholder="Repeat the Password">
      <label class="text-label" for="gender" id="genderLabel">Gender</label>
      <input class="genderDrop" type="button" name="genderSelect" id="gender" value="Male" onclick="genderDrop()">
      <div class="gender-option" id="gender-option">
        <label class="text-label" for="male">Male</label>
        <input type="radio" name="gender" id="male" value="Male" onclick="genderClose()">
        <label class="text-label" for="female">Female</label>
        <input type="radio" name="gender" id="female" value="Female" onclick="genderClose()">
        <label class="text-label" for="unknown">Rather Not Say</label>
        <input type="radio" name="gender" id="unknown" value="Rather Not Say" onclick="genderClose()" checked>
      </div>
      <label class="text-label" for="birthday">Birthday</label>
      <input type="date" name="birthday" id="birthday">
      <input class="remember" type="checkbox" name="remember" id="remember">
      <label class="remember-label" for="remember">Keep Me Signed In</label>
      <input class="sign-up" type="submit" name="signup" value="Sign Up">
      <a class="signin" href="signup.html">Sign In Insted</a>
    </form>
    <script type="text/javascript">
      let gender = document.getElementById('gender');
      let genderMale = document.getElementById('male');
      let genderFemale = document.getElementById('female');
      let genderUnknown = document.getElementById('unknown');
      let password = document.getElementById('password');
      var show_icon = document.getElementById('show_icon');
      var hidden = true;

      function genderDrop() {
        document.getElementById('gender-option').classList.toggle("show");
      }

      function genderClose() {
        if (genderMale.checked) {
          gender.value = genderMale.value;
        } else if (genderFemale.checked) {
          gender.value = genderFemale.value;
        } else {
          gender.value = genderUnknown.value;
        }
        document.getElementById('gender-option').classList.toggle("show");
      }

      function show_hide() {
        if (hidden) {
          password.setAttribute("type", "text");
          show_icon.setAttribute("src", "assets/hide.svg");
          show_icon.setAttribute("class", "show-hide");
          hidden = false;
        } else {
          password.setAttribute("type", "password");
          show_icon.setAttribute("src", "assets/show.svg");
          show_icon.setAttribute("class", "hide-show");
          hidden = true;
        }
      }
    </script>
  </body>
</html>
