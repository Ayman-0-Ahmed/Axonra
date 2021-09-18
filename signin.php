<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Ayman Ahmed">
    <meta name="description" content="Login to Axonra">
    <meta name="keywords" content="Login to Axonra, Axonra Login, Axonra Sign In, Axonra Signin, Sign in to Axonra">

    <title>Login</title>

    <link rel="shortcut icon" href="assets/favicon.png">
    <link rel="stylesheet" href="css/form.css">
  </head>
  <body>
    <div class="form-outline"></div>
    <form class="" action="signin.php" method="get">
      <div class="first"></div>
      <label class="text-label email" for="fname-femail">Username or Email</label>
      <input class="text-input" type="text" name="email-username" id="fname-femail" placeholder="Enter your Username or Email" required><br>
      <label class="text-label password" for="fpassword">Password</label>
      <input class="text-input" type="password" name="password" id="fpassword" placeholder="Enter your Password" required>
      <img class="hide-show" id="show_icon" src="assets/show.svg" onclick="show_hide()"></object>
      <input class="remember" type="checkbox" name="remember" id="fremember">
      <label class="remember-label" for="fremember">Keep Me Signed In</label>
      <input class="sign-in" type="submit" onclick="validate()" name="signin" value="Sign In">
      <a class="signup" href="signup.html">Create an account</a>
    </form>

    <?php  ?>
  </body>
</html>
