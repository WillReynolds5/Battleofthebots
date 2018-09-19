<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Robot Scoreboard</title>
    <!-- <link rel="stylesheet" href="//fonts.googleapis.com/css?family=font1|font2|etc" type="text/css"> -->

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
      /*background: url(img/dark-background.png);*/
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



    .container_outer{
      /* margin: 0 auto; */

      text-align: center;
      background: url(img/green-bkgrnd.svg);

      border-radius: 100px;

      padding-top: 200px;

      margin-left: 200px;
      margin-right: 200px;
      margin-bottom: 200px;
      /*margin: 200px;*/


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
      /*text-align: center;*/
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

    .player_name{
      font-size: 2.5em;

    }

    .bar_item1{
      padding-top: 4%;
      padding-left: 40%;
      margin: auto;
      font-family: "futura";
      float: left;
      height: 100%;
    }
    input {
      width: 100%;
      height: 40px;
      border-radius: 10px;
    }

    #submit{
      /*float: none;*/
      width: 10%;
      height: 50px;
      padding: 10px;
      margin-bottom: 0px;
      margin-left: 10px;
      border-radius: 10px;
      border-style: solid;
      border-width: thick;
      border-color: black;
      background-color: rgba(0, 0, 0, 0);
      font-size: 10px;

      /*text-align: center;*/
      /*margin-top: 100px;*/
      /*clear: both;*/
    }

    /*Button*/
    a.button1{
     display:inline-block;
     padding:0.35em 1.2em;
     border:0.1em solid #FFFFFF;
     margin:0 0.3em 0.3em 0;
     border-radius:0.12em;
     box-sizing: border-box;
     text-decoration:none;
     font-family:'Roboto',sans-serif;
     font-weight:300;
     color:#FFFFFF;
     text-align:center;
     transition: all 0.2s;
    }
    a.button1:hover{
     color:#000000;
     background-color:#FFFFFF;
    }
    @media all and (max-width:30em){
     a.button1{
      display:block;
      margin:0.4em auto;
     }
    }

    .header_div{

      text-align: center;

    }

    #starter{
      margin-left: 40%;
      margin-bottom: 150px;
      width: 500px;
      display: block;
      text-align: center;
      position: absolute;
    }

    #timer{

      /*width: 200px;*/
      /*float: left;*/
      /*margin-bottom: 0px;*/
      width: 120px;
      height: 80px;
      /*background-color: red;*/
      margin: 10px;
      /*padding: 20px;*/

      display: inline-block;
      text-align: center;
    }

    #reset{

      /*float: left;*/
      /*margin-bottom: 0px;*/
      /*text-align: center;*/

      width: 100px;
      height: 80px;
      /*background-color: red;*/
      margin: 10px;

      /*padding: 20px;*/
      padding-top: 50px;

      display: inline-block;
      text-align: center;

    }
    #play{

      /*float: left;*/
      /*margin-bottom: 0px;*/
      /*text-align: center;*/
      width: 100px;
      height: 80px;
      /*background-color: red;*/

      margin: 10px;

      padding-top: 50px;

      display: inline-block;
      text-align: center;
    }

  </style>
  </head>


  <body>
    <div class="header_div">
      <img src="img/Header.png" alt="codey-robot" id="codey">
      <div id="starter">
        <div id="reset">
          <img src="img/reset_black.png" style="width: 50px;" id="" onclick="reset_timer()" alt="">

        </div>
        <div id="timer">
          <h2 id="time_stamp" style="font-size:50px; color: black; font-family:'futura';">0:00</h2>

        </div>
        <div id="play">
          <img src="img/play_black.png" style="width: 50px;" onclick="start_timer()" id="playbtn" alt="">

          <script type="text/javascript">
            // document.getElementById("playbtn").addEventListener("click", start_timer());
          </script>

        </div>
      </div>


    </div>

    <div class="container_outer">

      <a href="score.php"></a>
      <script type="text/javascript">

      var x = "";

      function reset_timer() {

        clearInterval(x);
        document.getElementById('time_stamp').innerHTML = "0:00";
        firebase.database().ref().child('Current_game_time').child('timer_on').set(false);


      }

        var time_count = firebase.database().ref().child('Current_game_time').on('value', function(snapshot2){
          var snap_players = snapshot2.val();

          if (snap_players["timer_on"] == true){

            var counter = 0;

            // for (var key in snap_players) {
              console.log("TIMER");
              // console.log(key.value);
              var countDownDate = snap_players["finishing_time"];

              x = setInterval(function() {

                // Get todays date and time
                var now = new Date().getTime();

                // Find the distance between now and the count down date
                var distance = countDownDate - now;

                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                console.log("minutes: ", minutes, "seconds: ", seconds );
                var time_stamp = minutes + ":" + seconds;
                document.getElementById('time_stamp').innerHTML = time_stamp;
                counter += 1;
                console.log(time_stamp);
                // Display the result in the element with id="demo"
                // document.getElementById("demo").innerHTML = days + "d " + hours + "h "
                // + minutes + "m " + seconds + "s ";

                // If the count down is finished, write some text
                if (distance < 0) {
                  clearInterval(x);
                  var current_players = firebase.database().ref().child('Current').once('value', function(snapshot) {

                    var player_scores = snapshot.val();
                    for (var key in player_scores) {
                      console.log("INFO");
                      console.log(player_scores[key]["score"]);
                      console.log(player_scores[key]["name"]);
                      var name = player_scores[key]["name"];
                      var score = player_scores[key]["score"];


                      firebase.database().ref().child('overall_scores').child(name).child("score").set(score);
                    }
                  });

                }
              }, 1000);
          }
          // }
        });

        var current_players = firebase.database().ref().child('Current').once('value', function(snapshot) {
           //  console.log(snapshot.val());
            var snap_players = snapshot.val();
            var counter = 0;
            for (var key in snap_players) {
              console.log(key);
              console.log(snap_players[key]["name"]);

             counter += 1;

             var block = document.createElement('div');
             block.setAttribute("class","block");
             block.setAttribute("id", counter);

             var bar_item = document.createElement('div');
             bar_item.setAttribute("class","bar_item");
             bar_item.setAttribute("style", "width: 50%; padding-top: 3%; padding-left: 5%;");


             var span1 = document.createElement('span');
             var span2 = document.createElement('span');

             span1.setAttribute("class","player_name");
             span1.setAttribute("id", "player_name1");
             span1.innerHTML = snap_players[key]["name"];

             span2.setAttribute("id", "robot_number");
             span2.innerHTML = "Robot " + counter;

             var line_break = document.createElement('br');

             bar_item.appendChild(span1);
             bar_item.appendChild(line_break);
             bar_item.appendChild(span2);

             console.log(counter);

             // bar_item.innerHTML = '<span class="player_name" id="player_name1"></span><br /><span id="robot_number">asdfasdfa</span>';
            //  var player_name = document.createElement('span');
            //  player_name.id = "player_name1";
            //  player_name.class = "player_name";
            //  player_name.innerHTML = "player holder";
            //  var robot_number = document.createElement('span');
            //  robot_number.id = "player_name";
            //  robot_number.innerHTML = "robot #__";


             var bar_item2 = document.createElement('div');
             //  bar_item2.class = "bar_item";
             bar_item2.setAttribute("class","bar_item");
             bar_item2.setAttribute("style", "width: 45%; padding: 0;");
            //  bar_item2.innerHTML = '<span id="player_points">12</span><br/>';

             //SCORE
             var span3 = document.createElement('span');
             span3.innerHTML = snap_players[key]["score"];
             span3.setAttribute("id", "player_points");
            //  span3.setAttribute("style", "font-size: 5em;");
             bar_item2.appendChild(span3);


            //  var player_points = document.createElement('span');
            //  player_points.id = "player_points";
            //  player_points.innerHTML = "12";

            //  bar_item.appendChild(player_name);
            //  bar_item.appendChild(robot_number);
            //  bar_item2.appendChild(player_points);

            // var line_break = document.createElement('br');


            // bar_item.appendChild(line_break);
             block.appendChild(bar_item);
             block.appendChild(bar_item2);
             document.getElementById('container_inner1').appendChild(block);

            }
          });
          var current_score = firebase.database().ref().child('Current').on('value', function(snapshot) {

           //  var score_board = document.getElementById("container_inner1");
           //  while (score_board.firstChild) {
           //      myNode.removeChild(myNode.firstChild);
           //  }
            var snap_score = snapshot.val();
            var counter = 0;
            for (var key in snap_score) {


             //  console.log("key");
             //  console.log(key);

              var player_number = key.charAt(6);
             //  console.log(player_number);

              var block = document.getElementById(player_number);
              console.log("block");
              console.log();

              console.log(block.childNodes[1].childNodes[0]);
              console.log();
              block.childNodes[1].childNodes[0].innerHTML = snap_score[key]["score"];


            }
          });

          function testing(){
            var current_players = firebase.database().ref().child('Current').once('value', function(snapshot) {

              var player_scores = snapshot.val();
              for (var key in player_scores) {
                console.log("INFO");
                console.log(player_scores[key]["score"]);
                console.log(player_scores[key]["name"]);
                var name = player_scores[key]["name"];
                var score = player_scores[key]["score"];


                firebase.database().ref().child('overall_scores').child(name).child("score").set(score);
              }
            });
          }
      </script>

    <!-- CURRENT PLAYERS -->
    <div class="container_inner" id="container_inner1">
      <div class="container_inner_header" onclick="testing()">

        Current Game

      </div>
    </div>

    <div class="container_inner">
      <div class="container_inner_header">
        Next Game<button type="submit" name="button" id="submit" onclick="uploadNames()">Submit</button>

      </div>
    <!-- BEGINS PLAYER BLOCK -->
        <div class="block">
          <div class="bar_item1" >
            <span id="player_name"><input id="player_name1"></input></span><br />
            <span id="robot_number">Robot 1</span>
          </div>
          <!-- <div class="bar_item" style="width: 45%; padding: 0;">
            <span id="player_points">12</span><br />
          </div> -->
        </div>
    <!-- END PLAYER BLOCK -->

    <!-- BEGINS PLAYER BLOCK -->
    <div class="block">
      <div class="bar_item1" >
        <span id="player_name"><input id="player_name2"></input></span><br />
        <span id="robot_number">Robot 2</span>
      </div>
      <!-- <div class="bar_item" style="width: 45%; padding: 0;">
        <span id="player_points">12</span><br />
      </div> -->
    </div>
    <!-- END PLAYER BLOCK -->

    <!-- BEGINS PLAYER BLOCK -->
    <div class="block">
      <div class="bar_item1" >
        <span id="player_name"><input id="player_name3"></input></span><br />
        <span id="robot_number">Robot 3</span>
      </div>
      <!-- <div class="bar_item" style="width: 45%; padding: 0;">
        <span id="player_points">12</span><br />
      </div> -->
    </div>
    <!-- END PLAYER BLOCK -->

    <!-- BEGINS PLAYER BLOCK -->
    <div class="block">
      <div class="bar_item1" >
        <span id="player_name"><input id="player_name4"></input></span><br />
        <span id="robot_number">Robot 4</span>
      </div>
      <!-- <div class="bar_item" style="width: 45%; padding: 0;">
        <span id="player_points">12</span><br />
      </div> -->
    </div>
    <!-- END PLAYER BLOCK -->


    <!-- BEGINS PLAYER BLOCK -->
    <div class="block">
      <div class="bar_item1" >
        <span id="player_name"><input id="player_name5"></input></span><br />
        <span id="robot_number">Robot 5</span>
      </div>
      <!-- <div class="bar_item" style="width: 45%; padding: 0;">
        <span id="player_points">12</span><br />
      </div> -->
    </div>
    <!-- END PLAYER BLOCK -->

    <!-- BEGINS PLAYER BLOCK -->
    <div class="block">
      <div class="bar_item1" >
        <span id="player_name"><input id="player_name6"></input></span><br />
        <span id="robot_number">Robot 6</span>
      </div>
      <!-- <div class="bar_item" style="width: 45%; padding: 0;">
        <span id="player_points">12</span><br />
      </div> -->
    </div>
    <!-- END PLAYER BLOCK -->

    <!-- BEGINS PLAYER BLOCK -->
    <div class="block">
      <div class="bar_item1" >
        <span id="player_name"><input id="player_name7"></input></span><br />
        <span id="robot_number">Robot 7</span>
      </div>
      <!-- <div class="bar_item" style="width: 45%; padding: 0;">
        <span id="player_points">12</span><br />
      </div> -->
    </div>
    <!-- END PLAYER BLOCK -->

    <!-- BEGINS PLAYER BLOCK -->
    <div class="block">
      <div class="bar_item1" >
        <span id="player_name"><input id="player_name8"></input></span><br />
        <span id="robot_number">Robot 8</span>
      </div>
      <!-- <div class="bar_item" style="width: 45%; padding: 0;">
        <span id="player_points">12</span><br />
      </div> -->
    </div>
    <!-- END PLAYER BLOCK -->

    <script type="text/javascript">


        function uploadNames() {


          var playerNames_1 = document.getElementsByTagName('input')[0].value;
          var playerNames_2 = document.getElementsByTagName('input')[1].value;
          var playerNames_3 = document.getElementsByTagName('input')[2].value;
          var playerNames_4 = document.getElementsByTagName('input')[3].value;
          var playerNames_5 = document.getElementsByTagName('input')[4].value;
          var playerNames_6 = document.getElementsByTagName('input')[5].value;
          var playerNames_7 = document.getElementsByTagName('input')[6].value;
          var playerNames_8 = document.getElementsByTagName('input')[7].value;

          console.log(playerNames_1);
          var playerData = {
            player1 : {
              'name': playerNames_1,
              'score': 0
            },
            player2 :{
              'name': playerNames_2,
              'score': 0
            },
            player3 :{
              'name': playerNames_3,
              'score': 0
            },
            player4 :{
              'name': playerNames_4,
              'score': 0
            },
            player5 :{
              'name': playerNames_5,
              'score': 0
            },
            player6 :{
              'name': playerNames_6,
              'score': 0
            },
            player7 :{
              'name': playerNames_7,
              'score': 0
            },
            player8 :{
              'name': playerNames_8,
              'score': 0
            }
          };
          firebase.database().ref().child('Current').set(playerData);
          location.reload();

      }

      function start_timer(){

        var milliseconds = new Date().getTime();
        console.log("starttime");
        console.log(milliseconds);

        var end_time = 600000 + milliseconds
        console.log("endtime");
        console.log(end_time);

        firebase.database().ref().child('Current_game_time').child('finishing_time').set(end_time);
        firebase.database().ref().child('Current_game_time').child('timer_on').set(true);

      }




        // document.getElementsByTagName('textarea')
        // var playerNames = document.getElementsByTagName('textarea');

        // object.addEventListener("click", myScript);
        // for (var textarea in playerNames){
        //
        //   document.getElementById(playerNames[textarea].id).addEventListener("blur", function() {
        //       console.log(this.getAttribute('id'));
        //       console.log(this.value);
        //       var playerData = {
        //         'name': this.value,
        //         'score': 0
        //       };
        //
        //       firebase.database().ref().child('Current').child(this.getAttribute('id')).set(playerData);
        //
        //   }, false);
        //
        // }


    </script>


  </div>


  </div>
  <!-- <button type="button" name="button" onclick="window.location.href = 'index.php';">Back</button> -->

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
  </body>
</html>
