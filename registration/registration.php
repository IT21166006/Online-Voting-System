<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <link rel="stylesheet" href="registration.css">
  <script type="text/javascript" src="registration.php"></script>
</head>

<body>

  <form>
    <div class="lpage">
      <div class="rgsterimg">
        <img src="vote.jpg" width="500px" height="750px">
      </div>
      <hr>
      <div id="input">
        <div>
          <input class="input1" type="text" placeholder="students vote registration number" required>
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" required>
          <!--add user name-->
          <label for="email"><b>Voter's User name</b></label>
          <input type="text" id="fname" name="fname" required><br><br>
          <label class="gen" for="gender"><b>Gender</b></label>
          <select name="gender" id="gender" required>
            <option value="male">male</option>
            <option value="female">female</option>
          </select>
          <label class="1stp" for="psw"><b>Password</b></label>
          <input type="password" id="myInput" placeholder="Enter Password" onChange="onChange()" name="psw" required>
          <input type="checkbox" onclick="myFunction()">Show Password

          <input type="password" id="cofirm" placeholder="Repeat Password" onChange="onChange()" name="psw-repeat" required>

          <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:25px"> Remember me
          </label>
          <div class="clearfix">
            <a href="/auth" class="href"><button onclick="link()" type="submit" class="signupbtn">
                Sign up
              </button></a>
          </div>
        </div>
  </form>
  <div class="finishing">
    <p class="already">already have an account</p>
    <a href="login.php" type="submit" class="login">login</a>
  </div>

</body>

</html>