<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Robot Scoreboard</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=font1|font2|etc" type="text/css">

  <script src="https://www.gstatic.com/firebasejs/5.4.0/firebase.js"></script>
  <script src="https://www.gstatic.com/firebasejs/5.4.1/firebase-database.js"></script>

  <script>
    // Initialize Firebase
    var config = {
      apiKey: "AIzaSyC2fP9VoN6mOOKgmuEgj7DLylJPYSCEsi8",
      authDomain: "robot-scoreboard-5226d.firebaseapp.com",
      databaseURL: "https://robot-scoreboard-5226d.firebaseio.com",
      projectId: "robot-scoreboard-5226d",
      storageBucket: "robot-scoreboard-5226d.appspot.com",
      messagingSenderId: "837813444460"
    };
    firebase.initializeApp(config);
  </script>

  <style type="text/css">

    html, body {
      background: black;
      background: url(img/dark-background.png);
    }
    h1{
      font-size: 70px;
      font-family: "futura";
      /* margin-top: 200px; */
      /* margin-top: 600px; */
      color: white;
      display: block;
      /* position: relative; */




    }
    #codey{
      /* margin-top: 100px; */
      display: block;
      margin-left: 20%;
      width: 60%;
      /* float: left; */
      /* margin-left: 300px; */

    }
    #timer{
      text-align: center;

      /* float: none; */
    }

    .header_div{


    }

    .container_outer{
      /* margin: 0 auto; */


      text-align: center;
      background: black;

      border-radius: 100px;

      padding-top: 200px;

      margin-left: 50px;
      margin-right: 50px;
      margin-bottom: 50px;
    }

    .container_inner{

      /* margin-top: 200 */
      /* margin-left: 2.5%;
      margin-right: 2.5%; */
      border-radius: 50px;
      text-align: center;
      /* -webkit-box-shadow: 0 0 10px 30px rgba(0,0,0,0.50) inset; */
      /* -moz-box-shadow: 0 0 10px 30px rgba(0,0,0,0.50) inset; */
      /* box-shadow: 0 0 100px 50px rgba(0,0,0,0.50); */

      padding: 0px;
      /* background: rgba(0,0,0,.48); */
      margin-bottom: 200px;
      display: inline-block;

      /* max-width: 900px;
      min-width: 700px; */
      width: 900px;


  }
    .container_inner_header{
      color: white;
      font-size: 4em;
      font-family: "futura";
    }

    .block{
      display: inline-block;
      text-align: center;
      margin: 20px;
      width: 80%;
      height: 150px;
      background: rgba(0,0,0,0.9);
      box-shadow: 0 30px 25px -20px rgba(0,0,0,0.70);
      /* border-radius: 50px; */
      border-bottom: solid;
      border-color: white;
    }

    span {
      color:white;
    }

    .bar_item{
      /* display: inline-block; */
      float: left;
      height: 100%;
      font-family: "futura";
    }

    #player_name{
      font-size: 2.5em;

    }
    #robot_number{
      font-size: 2em;
    }
    #player_points{
      font-size: 7em;
    }

  </style>
  </head>


  <body>




    <div class="header_div">

      <h1 id="timer">0:00</h1>

    </div>

    <div class="container_outer">

    <div class="container_inner">
      <div class="container_inner_header">
        Current Game

      </div>
    <!-- BEGINS PLAYER BLOCK -->
        <div class="block">
          <div class="bar_item" style="width: 50%; padding-top: 3%; padding-left: 5%;">
            <span id="player_name"><textarea id="player_name1"></textarea></span><br />
            <span id="robot_number">Robot #3</span>
          </div>
          <div class="bar_item" style="width: 45%; padding: 0;">
            <span id="player_points">12</span><br />
          </div>
        </div>
    <!-- END PLAYER BLOCK -->

    <!-- BEGINS PLAYER BLOCK -->
    <div class="block">
      <div class="bar_item" style="width: 50%; padding-top: 3%; padding-left: 5%;">
        <span id="player_name"><textarea id="player_name2"></textarea></span><br />
        <span id="robot_number">Robot #3</span>
      </div>
      <div class="bar_item" style="width: 45%; padding: 0;">
        <span id="player_points">12</span><br />
      </div>
    </div>
    <!-- END PLAYER BLOCK -->

    <!-- BEGINS PLAYER BLOCK -->
    <div class="block">
      <div class="bar_item" style="width: 50%; padding-top: 3%; padding-left: 5%;">
        <span id="player_name"><textarea id="player_name3"></textarea></span><br />
        <span id="robot_number">Robot #3</span>
      </div>
      <div class="bar_item" style="width: 45%; padding: 0;">
        <span id="player_points">12</span><br />
      </div>
    </div>
    <!-- END PLAYER BLOCK -->

    <!-- BEGINS PLAYER BLOCK -->
    <div class="block">
      <div class="bar_item" style="width: 50%; padding-top: 3%; padding-left: 5%;">
        <span id="player_name"><textarea id="player_name4"></textarea></span><br />
        <span id="robot_number">Robot #3</span>
      </div>
      <div class="bar_item" style="width: 45%; padding: 0;">
        <span id="player_points">12</span><br />
      </div>
    </div>
    <!-- END PLAYER BLOCK -->

    <!-- BEGINS PLAYER BLOCK -->
    <div class="block">
      <div class="bar_item" style="width: 50%; padding-top: 3%; padding-left: 5%;">
        <span id="player_name"><textarea id="player_name4"></textarea></span><br />
        <span id="robot_number">Robot #3</span>
      </div>
      <div class="bar_item" style="width: 45%; padding: 0;">
        <span id="player_points">12</span><br />
      </div>
    </div>
    <!-- END PLAYER BLOCK -->

    <!-- BEGINS PLAYER BLOCK -->
    <div class="block">
      <div class="bar_item" style="width: 50%; padding-top: 3%; padding-left: 5%;">
        <span id="player_name"><textarea id="player_name5"></textarea></span><br />
        <span id="robot_number">Robot #3</span>
      </div>
      <div class="bar_item" style="width: 45%; padding: 0;">
        <span id="player_points">12</span><br />
      </div>
    </div>
    <!-- END PLAYER BLOCK -->

    <!-- BEGINS PLAYER BLOCK -->
    <div class="block">
      <div class="bar_item" style="width: 50%; padding-top: 3%; padding-left: 5%;">
        <span id="player_name"><textarea id="player_name6"></textarea></span><br />
        <span id="robot_number">Robot #3</span>
      </div>
      <div class="bar_item" style="width: 45%; padding: 0;">
        <span id="player_points">12</span><br />
      </div>
    </div>
    <!-- END PLAYER BLOCK -->

    <!-- BEGINS PLAYER BLOCK -->
    <div class="block">
      <div class="bar_item" style="width: 50%; padding-top: 3%; padding-left: 5%;">
        <span id="player_name"><textarea id="player_name7"></textarea></span><br />
        <span id="robot_number">Robot #3</span>
      </div>
      <div class="bar_item" style="width: 45%; padding: 0;">
        <span id="player_points">12</span><br />
      </div>
    </div>
    <!-- END PLAYER BLOCK -->

    <!-- BEGINS PLAYER BLOCK -->
    <div class="block">
      <div class="bar_item" style="width: 50%; padding-top: 3%; padding-left: 5%;">
        <span id="player_name"><textarea id="player_name8"></textarea></span><br />
        <span id="robot_number">Robot #3</span>
      </div>
      <div class="bar_item" style="width: 45%; padding: 0;">
        <span id="player_points">12</span><br />
      </div>
    </div>
    <!-- END PLAYER BLOCK -->

    <!-- BEGINS PLAYER BLOCK -->
    <div class="block">
      <div class="bar_item" style="width: 50%; padding-top: 3%; padding-left: 5%;">
        <span id="player_name"><textarea id="player_name9"></textarea></span><br />
        <span id="robot_number">Robot #3</span>
      </div>
      <div class="bar_item" style="width: 45%; padding: 0;">
        <span id="player_points">12</span><br />
      </div>
    </div>
    <!-- END PLAYER BLOCK -->

    <script type="text/javascript">

        // document.getElementsByTagName('textarea')
        var playerNames = document.getElementsByTagName('textarea');

        for (var textarea in playerNames){

          document.getElementById(playerNames[textarea].id).addEventListener("blur", function() {
              console.log(this.getAttribute('id'));
              console.log(this.value);
              var playerData = {
                'name': this.value,
                'score': 0
              };

              firebase.database().ref().child('Current').child(this.getAttribute('id')).set(playerData);

          }, false);

        }


    </script>

  </div>
  </div>
  <button type="button" name="button" onclick="window.location.href = 'index.php';">Back</button>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
  </body>
</html>
