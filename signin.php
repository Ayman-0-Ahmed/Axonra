<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Ayman Ahmed">
    <meta name="description" content="Login to Axonra">
    <meta name="keywords" content="Login to Axonra, Axonra Login, Axonra Sign In, Axonra Signin, Sign in to Axonra">

    <title>Sign In</title>

    <link rel="shortcut icon" href="assets/favicon.png">
    <link rel="stylesheet" href="css/signin.css">
  </head>
  <body>
    <div class="form-outline"></div>
    <form action="signin.inc.php" method="post">
      <div class="first"></div>
      <label class="text-label email" for="name-femail">Username or Email</label>
      <input class="text-input" type="text" id="name-email" placeholder="Enter your Username or Email" required><br>
      <label class="text-label password" for="password">Password</label>
      <input class="text-input" type="password" id="password" placeholder="Enter your Password" required>
      <img class="hide-show" id="show_icon" src="assets/show.svg" onclick="show_hide()">
      <input class="remember" type="checkbox" id="remember" checked>
      <label class="remember-label" for="remember">Keep Me Signed In</label>
      <input class="sign-in" type="submit" onclick="validate()" name="signin" value="Sign In">
      <a class="signup" href="signup.html">Create an account</a>
    </form>
    <script src="js/form.js" charset="utf-8"></script>
  </body>
</html>
