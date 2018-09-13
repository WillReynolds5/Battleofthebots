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


      margin-top: 100px;
      display: block;
      margin-left: 15%;
      width: 70%;
      /* float: left; */
      /* margin-left: 300px; */

    }


    #timer{
      text-align: center;
      /*float: left;*/

      /* float: none; */
      margin-top: -140px;
    }

    .header_div{


    }

    .container_outer{
      /* margin: 0 auto; */


      text-align: center;
      background: url(img/green-bkgrnd.svg);

      border-radius: 100px;

      padding-top: 200px;

      margin-left: 200px;
      margin-right: 200px;
      margin-bottom: 200px;
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
      color: black;
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
      border-radius: 50px;

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

    .player_name{
      font-size: 2.5em;

    }
    #robot_number{
      font-size: 2em;
    }
    #player_points{
      font-size: 7em;
    }

    .robot_number_overall{
      font-size: 3em;
      /*float: left;*/
      display: inline;
    }

    .player_name_overall{

      color: blue;
      /*display: inline;*/
/*
      float: left;
      margin-right: 20px;*/

    }

  </style>
  </head>

  <body>

    <?php

    //
    // $db = parse_url(getenv("postgres://wckbjkatwgwayc:e9dc7f4d1cf9861d914c506ccd37f1da02def8c72a6a8f8c0731e0589c49517f@ec2-54-163-246-5.compute-1.amazonaws.com:5432/dd5t43u6pmho8r"));
    // $db["path"] = ltrim($db["path"], "/");
    // echo $db;

      // $host        = "ec2-54-163-246-5.compute-1.amazonaws.com";
      // $port        = "port=5432";
      // $dbname      = "postgresql-solid-54577";
      // $credentials = "user=wckbjkatwgwayc password=e9dc7f4d1cf9861d914c506ccd37f1da02def8c72a6a8f8c0731e0589c49517f";
      //
      // $db = pg_connect( " $url $host $port $dbname $credentials"  );
      // if(!$db){
      //    echo "Error : Unable to open database\n";
      // } else {
      //    echo "Opened database successfully\n";
      // }
      // return $db;

     ?>
     <script type="text/javascript">

       var current_players = firebase.database().ref().child('Current').on('value', function(snapshot) {
           console.log(snapshot.val());
           var snap_players = snapshot.val();

           console.log(snap_players);

           var players = document.getElementsByClassName('player_name');
           // console.log(players.);
           for (var i in players){
              console.log(players[i].id);
              // players[i].id = ;
              console.log(snap_players[i]);
           }
         });

     </script>

    <div class="header_div">

      <img src="img/Header.png" alt="codey-robot" id="codey">
      <!-- <div class="player_header"> -->

      <!-- </div> -->
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
            <span class="player_name" id="player_name1" ></span><br />
            <span id="robot_number">Robot #3</span>
          </div>
          <div class="bar_item" style="width: 45%; padding: 0;">
            <span id="player_points">12</span><br/>
          </div>
        </div>
    <!-- END PLAYER BLOCK -->

    <!-- BEGINS PLAYER BLOCK -->
    <div class="block">
      <div class="bar_item" style="width: 50%; padding-top: 3%; padding-left: 5%;">
        <span class="player_name" id="player_name2">people persons</span><br />
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
        <span id="player_name3" class="player_name">people persons</span><br />
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
        <span id="player_name4" class="player_name">people persons</span><br />
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
        <span id="player_name5" class="player_name">people persons</span><br />
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
        <span id="player_name6" class="player_name">people persons</span><br />
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
        <span id="player_name7" class="player_name">people persons</span><br />
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
        <span id="player_name8" class="player_name">people persons</span><br />
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
        <span id="player_name9" class="player_name">people persons</span><br />
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
        <span id="player_name10" class="player_name">people persons</span><br />
        <span id="robot_number">Robot #3</span>
      </div>
      <div class="bar_item" style="width: 45%; padding: 0;">
        <span id="player_points">12</span><br />
      </div>
    </div>
    <!-- END PLAYER BLOCK -->

  </div>



  <div class="container_inner">
    <!-- BEGINS PLAYER BLOCK -->
    <div class="container_inner_header">
      Overall

    </div>
    <div class="block">
      <div class="bar_item" style="width: 50%; padding-top: 3%; padding-left: 5%;">
        <span class="player_name_overall">people persons</span><br />
        <span class="robot_number_overall">1st</span>
      </div>
      <div class="bar_item" style="width: 45%; padding: 0;">
        <span id="player_points">12</span><br />
      </div>
    </div>
    <!-- END PLAYER BLOCK -->

    <!-- BEGINS PLAYER BLOCK -->
    <div class="block">
      <div class="bar_item" style="width: 50%; padding-top: 3%; padding-left: 5%;">
        <span class="player_name_overall">people p  persons</span><br />
        <span class="robot_number_overall">2nd</span>
      </div>
      <div class="bar_item" style="width: 45%; padding: 0;">
        <span id="player_points">12</span><br />
      </div>
    </div>
    <!-- END PLAYER BLOCK -->

    <!-- BEGINS PLAYER BLOCK -->
    <div class="block">
      <div class="bar_item" style="width: 50%; padding-top: 3%; padding-left: 5%;">
        <span class="player_name_overall">people personitony</span><br />
        <span class="robot_number_overall">3rd</span>
      </div>
      <div class="bar_item" style="width: 45%; padding: 0;">
        <span id="player_points">12</span><br />
      </div>
    </div>
    <!-- END PLAYER BLOCK -->
    <!-- BEGINS PLAYER BLOCK -->
    <div class="block">
      <div class="bar_item" style="width: 50%; padding-top: 3%; padding-left: 5%;">
        <span class="player_name_overall">people personitony</span><br />
        <span class="robot_number_overall">4th</span>
      </div>
      <div class="bar_item" style="width: 45%; padding: 0;">
        <span id="player_points">12</span><br />
      </div>
    </div>
    <!-- END PLAYER BLOCK -->
    <!-- BEGINS PLAYER BLOCK -->
    <div class="block">
      <div class="bar_item" style="width: 50%; padding-top: 3%; padding-left: 5%;">
        <span class="player_name_overall">people personitony</span><br />
        <span class="robot_number_overall">5th</span>
      </div>
      <div class="bar_item" style="width: 45%; padding: 0;">
        <span id="player_points">12</span><br />
      </div>
    </div>
    <!-- END PLAYER BLOCK -->
    <!-- BEGINS PLAYER BLOCK -->
    <div class="block">
      <div class="bar_item" style="width: 50%; padding-top: 3%; padding-left: 5%;">
        <span id="player_name">people personitony</span><br />
        <span class="robot_number_overall">6th</span>
      </div>
      <div class="bar_item" style="width: 45%; padding: 0;">
        <span id="player_points">12</span><br />
      </div>
    </div>
    <!-- END PLAYER BLOCK -->
    <!-- BEGINS PLAYER BLOCK -->
    <div class="block">
      <div class="bar_item" style="width: 50%; padding-top: 3%; padding-left: 5%;">
        <span class="player_name_overall">people personitony</span><br />
        <span class="robot_number_overall">7th</span>
      </div>
      <div class="bar_item" style="width: 45%; padding: 0;">
        <span id="player_points">12</span><br />
      </div>
    </div>
    <!-- END PLAYER BLOCK -->
    <!-- BEGINS PLAYER BLOCK -->
    <div class="block">
      <div class="bar_item" style="width: 50%; padding-top: 3%; padding-left: 5%;">
        <span class="player_name_overall">people personitony</span><br />
        <span class="robot_number_overall">8th</span>
      </div>
      <div class="bar_item" style="width: 45%; padding: 0;">
        <span id="player_points">12</span><br />
      </div>
    </div>
    <!-- END PLAYER BLOCK -->
    <!-- BEGINS PLAYER BLOCK -->
    <div class="block">
      <div class="bar_item" style="width: 50%; padding-top: 3%; padding-left: 5%;">
        <span class="player_name_overall">people personitony</span><br />
        <span class="robot_number_overall">9th</span>
      </div>
      <div class="bar_item" style="width: 45%; padding: 0;">
        <span id="player_points">12</span><br />
      </div>
    </div>
    <!-- END PLAYER BLOCK -->
    <!-- BEGINS PLAYER BLOCK -->
    <div class="block">
      <div class="bar_item" style="width: 50%; padding-top: 3%; padding-left: 5%;">
        <span class="player_name_overall">people personitony</span><br />
        <span class="robot_number_overall">10th</span>
      </div>
      <div class="bar_item" style="width: 45%; padding: 0;">
        <span id="player_points">12</span><br />
      </div>
    </div>
    <!-- END PLAYER BLOCK -->




</div>

</div>
<button type="button" name="button" onclick="window.location.href = 'admin.php';">to ADMIN PAGE</button>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
  </body>
</html>
