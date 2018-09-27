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


  @media only screen and (max-device-width: 1030px) {
      html, body {
        background: url(img/ipad_background.png);
        /*background: url(img/dark-background.png);*/
        margin: 0;
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
      #title_header{

        display: block;
        margin-top: 20px;
        margin-left: auto;
        margin-right: auto;
        width: 25%;


      }

      #game_master{

        display: block;
        margin-top: 15px;
        margin-left: auto;
        margin-right: auto;
        width: 50%;

      }



      .container_outer{

        text-align: center;
        border-radius: 100px;
        margin-left: 20px;
        margin-right: 20px;

      }

      .container_inner{

        border-radius: 50px;
        text-align: center;
        padding: 0px;
        /*margin-bottom: 50px;*/
        display: inline-block;
        width: 450px;

    }

      .container_inner_header{

        color: white;
        font-size: 4em;
        font-family: "futura";

      }

      .block{

        display: inline-block;
        text-align: center;
        margin: 5px;
        width: 80%;
        height: 60px;
        background: rgba(244,155,163,0.9);
        box-shadow: 0 30px 25px -20px rgba(0,0,0,0.70);
        border-radius: 10px;
        overflow: hidden;


      }
      .block_new{

        display: inline-block;
        text-align: center;
        margin: 5px;
        width: 80%;
        height: 60px;
        background: rgba(228,74,213,0.9);
        box-shadow: 0 30px 25px -20px rgba(0,0,0,0.70);
        border-radius: 10px;
        overflow: hidden;


      }

      .block_header{

        display: inline-block;
        text-align: center;
        margin: 5px;
        width: 80%;
        height: 50px;
        /*background: rgba(244,155,163,0.9);
        box-shadow: 0 30px 25px -20px rgba(0,0,0,0.70);*/
        /*border-radius: 10px;*/
        overflow: hidden;
        font-size: 10pt;
      }

      span {
        color:white;
      }

      .bar_item_name{
       float: left;
       height: 100%;
       font-size: 1em;
       font-family: "avenir next";
       width: 70%;

      }
      .bar_item{
       float: left;
       height: 100%;
       font-size: 1em;
       font-family: "avenir next";
       width: 20%;

      }

      .bar_item2{
       float: left;
       height: 100%;
       font-size: 1em;
       font-family: "avenir next";
       width: 20%;
       padding-top: 1%;

      }
      .bar_item3{
       float: left;
       height: 100%;
       font-size: 1em;
       font-family: "avenir next";
       width: 60%;
       padding-top: 0;

      }
      #player_name{
        font-size: 2.5em;

      }
      #robot_number{
        font-size: 2.5em;
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
        background: none;
        border: none;
        font-size: .5em;
        color: white;
        font-family: "Avenir Next";

      }

      input::placeholder{
        /*margin-top: 3%;*/
        color: white;
        /*font-size: 2em;*/
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

        margin-top: 50px;
        width: 100%;
        height: 130px;
        background-image: url(img/texture.png);
        display: inline-block;
        text-align: center;
      }

      #center_starter{

      }


      #submit{



        padding: 10px;
        border-radius: 10px;
        border-style: solid;
        border-width: thick;
        border-color: white;
        background-color: white;
        font-size: 30px;
        color: black;

      }

      #submit_names{


        width: 250px;
        height: 80px;
        margin-left: 20px;
        padding-top: 35px;
        float: left;

      }

      #reset{

        width: 80px;
        height: 80px;
        margin-left: 100px;
        padding-top: 30px;
        float: left;


      }

      #reset:active{
        opacity: 0.5;
      }
      #play{

        width: 80px;
        height: 80px;
        margin-left: 10px;
        padding-top: 30px;
        float: left;

      }
      #play:active{
        opacity: 0.5;
      }

      #pause{

        width: 80px;
        height: 80px;
        margin-left: 10px;
        padding-top: 30px;
        float: left;
      }
      #pause:active{
        opacity: 0.5;
      }

      #timer{

        width: 200px;
        height: 70px;
        margin-left: 100px;
        float: left;
        overflow: hidden;
        border-radius: 10px;
        background-color: white;
        color: black;
        font-size: 50px;
        font-weight: bold;
        font-family: "Avenir Next";

      }
    }



  </style>
  </head>


  <body>
    <div class="header_div">
      <img src="img/Battle-Bots-ipad-header.png" alt="title_header" id="title_header">
      <img src="img/game_master.png" id="game_master" alt="GAME MASTER">
    </div>

    <div id="starter">
      <div class="center_starter">
        <div id="submit_names" style="">
           <button type="button" id="submit" onclick="uploadNames()">Submit Names</button>
        </div>
        <div id="reset" style="">
          <img src="img/restart_game.png" style="width: 90%;display: block;margin-left: auto;margin-right: auto;" onclick="reset_timer()" alt="">

        </div>
        <div id="pause" style="">
          <img src="img/pause.png" style="width: 90%;display: block;margin-left: auto;margin-right: auto;" onclick="pause_timer()" id="playbtn" alt="">
        </div>
        <div id="play" style="">
          <img src="img/play.png" style="width: 90%;display: block;margin-left: auto;margin-right: auto;" onclick="start_timer()" id="playbtn" alt="">
        </div>
        <div id="timer" style="text-align:center; margin-top:30px;">
          <p id="time_stamp" style="display:block; margin-top:1%;">0:00</p>
        </div>
      </div>


    </div>
    <div class="container_outer">

      <a href="score.php"></a>
      <script type="text/javascript">

      var x = "";

      function start_timer(){

        firebase.database().ref().child('Current_game_time').once('value', function(paused){

          var is_paused = paused.val()['is_paused'];

          if (is_paused == true){

            var time = document.getElementById('time_stamp').innerHTML;
            var now = new Date().getTime();
            console.log('NOWOWOOWOW');
            console.log(time);
            var times = time.split(":");
            console.log("MS");
            var ms = 1000 * ((times[0] * 60) + (times[1]))
            console.log(ms);

            var countDownDate = ms + now;

            x = setInterval(function() {

              var now = new Date().getTime();

              var distance = countDownDate - now;

              var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
              var seconds = Math.floor((distance % (1000 * 60)) / 1000);
              var time_stamp = minutes + ":" + seconds;
              document.getElementById('time_stamp').innerHTML = time_stamp;
            }, 1000);

            firebase.database().ref().child('Current_game_time').child('is_paused').set(false);
            firebase.database().ref().child('Current_game_time').child('timer_on').set(true);

          } else {

            var milliseconds = new Date().getTime();
            console.log("starttime");
            console.log(milliseconds);

            var end_time = 600000 + milliseconds;
            console.log("endtime");
            console.log(end_time);

            firebase.database().ref().child('Current_game_time').child('finishing_time').set(end_time);
            firebase.database().ref().child('Current_game_time').child('timer_on').set(true);
            firebase.database().ref().child('Current_game_time').child('is_paused').set(false);

            // test
            firebase.database().ref().child('Current_game_time').child('playing').set(true);
            firebase.database().ref().child('Current_game_time').child('playing').set(false);

          }
        });

      }

      function reset_timer() {

        clearInterval(x);
        document.getElementById('time_stamp').innerHTML = "0:00";
        firebase.database().ref().child('Current_game_time').child('timer_on').set(false);
        firebase.database().ref().child('Current_game_time').child('is_paused').set(false);

        firebase.database().ref().child('reload').set(Math.random());




      }

      function pause_timer() {
        // firebase.database().ref().child('Current_game_time').once(function(snap) {
          // if (snap.val()['is_paused'] == false){
            clearInterval(x);
            firebase.database().ref().child('Current_game_time').child('is_paused').set(true);
            firebase.database().ref().child('Current_game_time').child('timer_on').set(false);

            // clearInterval(x);
            firebase.database().ref().child('Current_game_time').once('value', function(end_time){
                console.log("TIME");
                console.log(end_time.val()['finishing_time']);
                var end_time = end_time.val()['finishing_time'];
                var now = new Date().getTime();
                var timeleft = end_time - now;
                console.log(timeleft);
                var minutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((timeleft % (1000 * 60)) / 1000);
                console.log(minutes, "  " ,seconds);

                firebase.database().ref().child('Current_game_time').child('finishing_time').set(end_time);

            });
          // }

        // });

      }

        var time_count = firebase.database().ref().child('Current_game_time').on('value', function(snapshot2){
          var snap_players = snapshot2.val();
          clearInterval(x);

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
                      // console.log;
                      console.log(player_scores[key]["score"]);
                      console.log(player_scores[key]["name"]);
                      var name = player_scores[key]["name"];
                      var score = player_scores[key]["score"];
                      var robot_num = key;

                      if (name != ""){

                        firebase.database().ref().child('overall_scores').child(name).child("score").set(score);
                        firebase.database().ref().child('overall_scores').child(name).child("robot_num").set(robot_num);

                      }
                    }
                    // reset_timer();

                    clearInterval(x);
                    document.getElementById('time_stamp').innerHTML = "0:00";
                    firebase.database().ref().child('Current_game_time').child('timer_on').set(false);
                    firebase.database().ref().child('Current_game_time').child('is_paused').set(false);
                    firebase.database().ref().child('Current_game_time').child('finishing_time').set(15378956389520);

                    console.log("DISTANCE------------------++++++++++++");
                    console.log(distance);


                  });
                  location.reload();
                }
              }, 1000);
          } else {

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
             block.setAttribute("class","block_new");
             block.setAttribute("id", counter);

             var bar_item1 = document.createElement('div');
             bar_item1.setAttribute("class","bar_item2");
             bar_item1.setAttribute("style", "");

             var span1 = document.createElement('span');

             span1.setAttribute("class","player_name");
             span1.setAttribute("id", "player_name1");
             span1.innerHTML = counter;

             bar_item1.appendChild(span1);

             var bar_item2 = document.createElement('div');
             bar_item2.setAttribute("class","bar_item");
             bar_item2.setAttribute("style", "width: 70%; padding-top: 3%; text-align:left;");


             var span2 = document.createElement('span');
            //  span2.setAttribute("id", "robot_number");
            span2.setAttribute('style', 'font-size: 1.5em;')
            span2.innerHTML = snap_players[key]["name"];

            bar_item2.appendChild(span2);

            block.appendChild(bar_item1);
            block.appendChild(bar_item2);
            //  block.appendChild(bar_item3);

            document.getElementById('container_inner1').appendChild(block);
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

        <img src="img/current.png" alt="Current">

      </div>
      <div class="block_header">
        <div class="bar_item2" style="padding-top:4
        %;">
          <span id="" style="font-size:15pt;font-weight:bold; ">ROBOT</span>
        </div>
        <div class="bar_item3" style="padding-top: 3%;">
          <span id="" style="font-size:15pt;font-weight:bold; margin-left:-20%;">NAME</input></span>
        </div>
      </div>

    </div>

    <div class="container_inner">
      <div class="container_inner_header">
        <img src="img/next.png" alt="Current">

      </div>
      <div class="block_header">
        <div class="bar_item2" style="padding-top:4%;">
          <span id="" style="font-size:15pt;font-weight:bold; ">ROBOT</span>
        </div>
        <div class="bar_item3" style="padding-top: 3%;">
          <span id="" style="font-size:15pt;font-weight:bold; margin-left:-20%;">NAME</input></span>
        </div>
      </div>

      <div class="block">
        <div class="bar_item2">
          <span id="robot_number">1</span>
        </div>
        <div class="bar_item3">
          <span id="player_name"><input id="player_name1" onblur="check_length(this)" placeholder=""></input></span>
        </div>
      </div>

    <div class="block">
      <div class="bar_item2">
        <span id="robot_number">2</span>
      </div>
      <div class="bar_item3">
        <span id="player_name"><input id="player_name2" onblur="check_length(this)" placeholder=""></input></span>
      </div>
    </div>


    <div class="block">
      <div class="bar_item2">
        <span id="robot_number">3</span>
      </div>
      <div class="bar_item3">
        <span id="player_name"><input id="player_name3" onblur="check_length(this)" placeholder=""></input></span>
      </div>
    </div>


    <div class="block">
      <div class="bar_item2">
        <span id="robot_number">4</span>
      </div>
      <div class="bar_item3">
        <span id="player_name"><input id="player_name4" onblur="check_length(this)" placeholder=""></input></span>
      </div>
    </div>

    <div class="block">
      <div class="bar_item2">
        <span id="robot_number">5</span>
      </div>
      <div class="bar_item3">
        <span id="player_name"><input id="player_name5" onblur="check_length(this)" placeholder=""></input></span>
      </div>
    </div>

    <div class="block">
      <div class="bar_item2">
        <span id="robot_number">6</span>
      </div>
      <div class="bar_item3">
        <span id="player_name"><input id="player_name6" onblur="check_length(this)" placeholder=""></input></span>
      </div>
    </div>

    <div class="block">
      <div class="bar_item2">
        <span id="robot_number">7</span>
      </div>
      <div class="bar_item3">
        <span id="player_name"><input id="player_name7" onblur="check_length(this)" placeholder=""></input></span>
      </div>
    </div>

    <div class="block">
      <div class="bar_item2">
        <span id="robot_number">8</span>
      </div>
      <div class="bar_item3">
        <span id="player_name"><input id="player_name8" onblur="check_length(this)" placeholder=""></input></span>
      </div>
    </div>

    <script type="text/javascript">

        function check_length(characters){

          console.log(characters.value.length);
          if (characters.value.length > 20){
            alert("names cannot be more than 20 characters. :(");
            return;
          }


        }

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

          for (var names in playerData){
            console.log("NAME");
            console.log(playerData[names]['name'].length);
            if (playerData[names]['name'].length > 20 ){
              alert(names + "'s name cannot be more than 20 characters. :(");
              return;
            }
          }
          console.log("RELOADED");
          firebase.database().ref().child('Current_game_time').child('is_paused').set(false);
          firebase.database().ref().child('Current_game_time').child('timer_on').set(false);

          firebase.database().ref().child('Current').set(playerData);
          location.reload();


      }

    </script>


  </div>


  </div>
  <style media="screen">
    body,html{
      text-align: center;
    }
  </style>
  <img src="img/logoSF.png" style="width: 30%; margin-top:20px;" alt="">
  <!-- <button type="button" name="button" onclick="window.location.href = 'index.php';">Back</button> -->

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
  </body>
</html>
