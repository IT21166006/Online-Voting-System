<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="image">
    <div class="overlay">
      <div class="navbar">
        <h2>BlueTech Vote <span></span></h2>
        <div class="navlink">
          <a id="nav" href="#">Home</a>
          <a id="nav" href="#">contacts</a>
          <a id="nav" href="#">About</a>
          <a href="/login/login.php" class="btn btn-sign-in">Sign In</a>
        </div>
      </div>
      <div class="text">
        <h1>vote <span>now</span></h1>
        <p>blueTech Vote is a secure online voting platform that makes it easy to vote for their leaders. We're the leading provider of ranked choice elections, which help achieve more democratic outcomes by better representing the will of our voters.</p><br>
        <p>from anywhere at the comfort of their places.</p>
      </div>
      <div class="one">
        <p>Voting Starts After:</p>
        <p id="demo"></p>
      </div>
    </div>
  </div>
  </div>
  <div class="info">
    <h1 id="inf">What Entails our Voting</h1>
    <div class="entails">
      <div class="box-one">
        <img class="imon" src="./im/on1.jpeg" alt="" height="60px" width="50px">
        <h2>Online Election</h2>
        <p>Send your voters an email with secure, single-use voting links that ensure only authorized voters can
          vote, once.</p>
      </div>
      <div class="box-one">
        <img class="imon" src="./im/on2.jpeg" alt="" height="60px" width="50px">
        <h2>Automated Ballot Counts</h2>
        <p>Count ranked ballots that you've already collected (using e.g., paper ballots or your own vote
          collection software).</p>
      </div>
      <div class="box-one">
        <img class="imon" src="./im/on3.jpeg" alt="" height="60px" width="50px">
        <h2>Oline polls</h2>
        <p>Create a personalized poll that anyone can vote on, and publicize it using your website, email, or
          social media.</p>
      </div>
    </div>
  </div>
  <div class="setup">
    <div class="settx">
      <h2>Easy to Set Up and Vote</h2><br>
      <p>We make it super easy for our students to set an election and to cast their votes.</p><br>
      <p>When the election starts, each of the registered voter is allowed to secretly login. The voter then just clicks that link to be immediately taken to the voting page. Because our process is so easy for voters, we get a higher percentage of voters to actually vote.</p><br>
      <p>Our interface allows both regular (check box) voting and (drag and drop) ranked choice voting. You can try the voting interface in the example ballots that follow or by casting a vote in our demonstration poll.
      </p>
    </div>
    <div class="setimg">
      <img src="./im/set.jpeg" alt="" height="420" width="400">
    </div>
  </div>
  <div class="transparent">
    <div class="transimg">
      <img src="./im/trans.png" alt="" height="370" width="350">
    </div>
    <div class="trans">
      <h2>Transparent Results</h2><br>
      <p>Students love the clear and transparent results OpaVote will enable you to provide them with. At the end of your election, you'll get the raw ballots as well as a detailed report with counts automatically done for you. The step by step explanation of these counts are based on the voting method you used, and interactive graphics allow you can see the fine-grained details at each step.
      </p><br>
      <p>You can try a report's look and feel by looking at the results of our demonstration poll.</p>
    </div>
  </div>
  <div class="info2">
    <h1 id="inf">Security Information</h1>
    <div class="entails">
      <div class="box-one">
        <img class="imon" src="./im/att.jpg" alt="" height="60px" width="50px">
        <h2>No attack</h2>
        <p>We offer the strongest possible guarantee of voter anonymity: we simply do not track who votes for what; only who votes, and what the vote is</p>
      </div>
      <div class="box-one">
        <img class="imon" src="./im/pas.png" alt="" height="60px" width="50px">
        <h2>Encryption</h2>
        <p>Our voting sites are encrypted so our voters can enjoy complete security and privacy while voting.</p>
      </div>
      <div class="box-one">
        <img class="imon" src="./im/pr.jpeg" alt="" height="60px" width="50px">
        <h2>Private</h2>
        <p>Create a personalized poll that anyone can vote on, and publicize it using your website, email, or
          social media.</p>
      </div>
    </div>
    <div class="foot">
      <p>&copy; 2022 bluetech.ac.ke</p>
      <h3>Proudly designed by BlueTech Campus.</h3>
    </div>
    <script src="js/script.js"></script>
</body>

</html>