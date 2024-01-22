<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Online-voting-system</title>
  <link rel="stylesheet" href="/voting/voting.css" />
</head>

<body>
  <div class="candidates">
    <div class="heading">
      <h1>CANDIDATES LIST</h1>
    </div>
    <div class="first-lot">
      <div class="container">
        <div class="candidates-img">
          <img src="images/art-hauntington-jzY0KRJopEI-unsplash.jpg" alt="" />
          <div class="text">
            <p class="cd-1" id="cand-1">
              <strong>AKINYI JURRYT </strong><br />
              PARTY:React
            </p>
          </div>
        </div>
        <button onclick="recordVote()" type="button" class="bt-1" id="cand-1-btn">VOTE</button>
      </div>
      <div class="container">
        <div class="candidates-img">
          <div>
            <img src="images/MTZTGvDsHFY-unsplash.jpg" alt="" />
            <div class="text">
              <p class="cd-2" id="cand-2">
                <strong> YAMUNA GOLNAZ</strong>
                <br />
                PARTY:Angular
              </p>
            </div>
            <button type="button" class="bt-2" id="cand-2-btn">VOTE</button>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="candidates-img">
          <div>
            <img src="images/jessica-felicio-_cvwXhGqG-o-unsplash.jpg" alt="" />
          </div>
          <div class="text">
            <p class="cd-3" id="cand-3">
              <strong>RADE AINARA</strong> <br />PARTY:Ember
            </p>
          </div>
          <button type="button" class="bt-3" id="cand-3-btn">VOTE</button>
        </div>
      </div>
    </div>

    <div class="second-lot">
      <div class="container">
        <div class="candidates-img">
          <div>
            <img src="images/amir-seilsepour-Pc0ToyoR5Xo-unsplash.jpg" alt="" />
            <div class="text">
              <p class="cd-4" id="cand-4"></p><strong>LAWRENCE CIRO </strong><br />PARTY:Backbone</p>
            </div>
            <button type="button" class="bt-4" id="cand-4-btn">VOTE</button>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="candidates-img">
          <div>
            <img src="images/alex-suprun-ZHvM3XIOHoE-unsplash.jpg" alt="" />
            <div class="text">
              <p class="cd-5" id="cand-5">
                <strong> MURIEL NOACH </strong> <br />PARTY:Gatsby
              </p>
            </div>
            <button type="button" class="bt-5" id="cand-5-btn">VOTE</button>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="candidates-img">
          <div>
            <img src="images/auston-mtabane-7Zn1SrNzyR8-unsplash.jpg" alt="" />
            <div class="text">
              <p class="cd-6" id="cand-6">
                <strong> ALLAN MIKO</strong> <br />PARTY:Meteor
            </div>
            </p>
          </div>
          <button type="button" class="bt-6" id="cand-6-btn">VOTE</button>
        </div>
      </div>
    </div>
  </div>
</body>

</html>