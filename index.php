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
      background: url(img/leadboard_2x_alt.png);
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

    /*TOP LEFT LOGO*/
    #SF_logo{

      display: inline-block;
      width: 15%;
      margin-left: 5%;

      margin-right: 5%;
      vertical-align: top;
      margin-top: 150px;
    }

    /*HEADER IMAGE*/
    #codey{


      margin-top: 100px;
      display: inline-block;

      /*margin-left: 15%;*/
      /*float: left;*/
      width: 50%;
      /*width: auto;*/


    }

    /*TIMING*/
    #timer{

      /*text-align: center;*/
      display: inline-block;
      margin-top: 4%;
      margin-left: 8%;
      margin-right: 8%;
      /*margin-bottom: 100px;*/
      vertical-align: top;
      font-size: 100px;
      /*float: left;*/

      /* float: none; */
      /*margin-top: -140px;*/
    }



    .header_div{


    }

    /*OUTSIDE CONTAINER HOLDING PLAYER COLUNMS*/
    .container_outer{
      /* margin: 0 auto; */


      text-align: center;
      /*background: url(img/leadboard_2x_alt.png);*/

      border-radius: 100px;

      padding-top: 200px;

      /*margin-left: 200px;*/
      /*margin-right: 200px;*/
      margin-bottom: 200px;
    }

    /*INDIVIDUAL COLUMNS*/
    .container_inner{

      border-radius: 50px;
      text-align: center;

      margin-bottom: 200px;
      display: inline-block;

      /* max-width: 900px;
      min-width: 700px; */
      width: 1400px;


  }

    /*COLUMN HEADERS*/
    .container_inner_header{
      color: black;
      font-size: 4em;
      font-family: "futura";
    }

    /*COLUMN ROWS*/
    .block{
      display: inline-block;
      text-align: center;
      margin: 20px;
      width: 80%;
      height: 100px;
      background: rgba(0,0,0,0.9);
      box-shadow: 0 30px 25px -20px rgba(0,0,0,0.70);
      border-radius: 50px;

    }
    span {
      color:white;
    }

    /*CONTAINERS WITHIN ROWS*/
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

      color: white;
      font-size: 50px;

    }

    #all-time{

      /*width: 50%;*/
      height: 70px;
      margin-bottom: 20px;

    }

    #current{
      /*width: 70%;*/
      height: 70px;
      margin-bottom: 20px;

    }

  </style>
  </head>

  <body>


     <script type="text/javascript">

       var current_players = firebase.database().ref().child('Current').once('value', function(snapshot) {
          //  console.log(snapshot.val());
           var snap_players = snapshot.val();
           var counter = 0;
           for (var key in snap_players) {
            //  console.log(key);
            //  console.log(snap_players[key]["name"]);
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

            // console.log(counter);



            var bar_item2 = document.createElement('div');
            //  bar_item2.class = "bar_item";
            bar_item2.setAttribute("class","bar_item");
            bar_item2.setAttribute("style", "width: 45%; padding: 0;");
            bar_item2.innerHTML = '<span id="player_points">0</span><br/>';



            block.appendChild(bar_item);
            block.appendChild(bar_item2);
            document.getElementById('container_inner1').appendChild(block);

           }
         });

        //  PULLS CURRENT SCORES

         var current_score = firebase.database().ref().child('Current').on('value', function(snapshot) {

           var snap_score = snapshot.val();
           var counter = 0;
           for (var key in snap_score) {

             var player_number = key.charAt(6);

             var block = document.getElementById(player_number);


             block.childNodes[1].childNodes[0].innerHTML = snap_score[key]["score"];


           }
         });

        //  PULLS OVER PLAYER SCORES

         var overall_player_scores = firebase.database().ref().child('overall_scores').once('value', function(snapshot) {
            //  console.log(snapshot.val());
             var snap_players = snapshot.val();

             var overall_player = [];
             for (var key in snap_players) {


                overall_player.push([key, snap_players[key]["score"]]);

             }


             bubble_sort(overall_player);
             console.log("overall");
             // console.log(key);
             console.log(overall_player);
             var counter = 0;
             for (var row = 0; row < 8; row ++){


              counter += 1;

              var block = document.createElement('div');
              block.setAttribute("class","block");
              // block.setAttribute("id", counter);

              var bar_item = document.createElement('div');
              bar_item.setAttribute("class","bar_item");
              bar_item.setAttribute("style", "width: 50%; padding-top: 3%; padding-left: 5%;");


              var span1 = document.createElement('span');
              var span2 = document.createElement('span');

              span1.setAttribute("class","player_name_overall");
              // span1.setAttribute("id", "player_name1");
              span1.innerHTML = overall_player[row][0];

              span2.setAttribute("class", "robot_number_overall");
              span2.innerHTML = "Robot " + counter;

              var line_break = document.createElement('br');

              bar_item.appendChild(span1);
              bar_item.appendChild(line_break);
              bar_item.appendChild(span2);

              // console.log(counter);


              var bar_item2 = document.createElement('div');
              //  bar_item2.class = "bar_item";
              bar_item2.setAttribute("class","bar_item");
              bar_item2.setAttribute("style", "width: 45%; padding: 0;");

              // bar_item2.innerHTML = '<span id="player_points">0</span><br/>';

              var span3 = document.createElement('span');
              span3.setAttribute('id',"player_points");
              span3.innerHTML = overall_player[row][1];

              bar_item2.appendChild(span3);
             //  var player_points = document.createElement('span');
             //  player_points.id = "player_points";
             //  player_points.innerHTML = "12";

             //  bar_item.appendChild(player_name);
             //  bar_item.appendChild(robot_number);
             //  bar_item2.appendChild(player_points);

              block.appendChild(bar_item);
              block.appendChild(bar_item2);
              document.getElementById('container_inner2').appendChild(block);

             }
           });

          //  SORTING ALG
           function bubble_sort(arr){
             console.log("SOTRING BEGUN");
             while(counter != 0){
             	 var counter = 0;
               for (var i = 0; i < arr.length - 1; i++){

                 var first = arr[i][1];
                 var second = arr[i + 1][1];
                 if (first < second){
                    var temp = arr[i];
                    arr[i] = arr[i + 1];
                    arr[i + 1] = temp;
                    counter += 1;
                 }
               }
             }
             return arr;
           }

          //  TIMER

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
                   document.getElementById('timer').innerHTML = time_stamp;
                   counter += 1;
                   console.log(time_stamp);
                   // Display the result in the element with id="demo"
                   // document.getElementById("demo").innerHTML = days + "d " + hours + "h "
                   // + minutes + "m " + seconds + "s ";

                   // If the count down is finished, write some text
                   if (distance < 0) {
                     clearInterval(x);
                    //  var current_players = firebase.database().ref().child('Current').once('value', function(snapshot) {
                     //
                    //    var player_scores = snapshot.val();
                    //    for (var key in player_scores) {
                    //      console.log("INFO");
                    //      console.log(player_scores[key]["score"]);
                    //      console.log(player_scores[key]["name"]);
                    //      var name = player_scores[key]["name"];
                    //      var score = player_scores[key]["score"];
                     //
                     //
                    //      firebase.database().ref().child('overall_scores').child(name).child("score").set(score);
                    //    }
                    //  });

                   }
                 }, 1000);
             }
             // }
           });

     </script>

     <!-- HEADER -->
    <div class="header_div">

      <img src="img/logoSF.png" id="SF_logo" alt="">
      <img src="img/Battle_Bots_leaderboard_header.png" alt="codey-robot" id="codey">
      <h1 id="timer">0:00</h1>

    </div>


    <div class="container_outer">

    <div class="container_inner" id="container_inner1">

      <div class="container_inner_header">

        <img src="img/current.svg" id="current" alt="">

      </div>
      <div class="block">
        <div class="rank">

        </div>
        <div class="bar_item_this" style="width: 50%; padding-top: 3%; padding-left: 5%;">
          <span class="player_name_overall">TESTING</span><br />
          <span class="robot_number_overall">7th</span>
        </div>
        <div class="robot_num">

        </div>
        <div class="bar_item_this" style="width: 45%; padding: 0;">
          <span id="player_points">12</span><br />
        </div>
      </div>

      <style media="screen">
      .bar_item_this{
        /* display: inline-block; */
        float: left;
        height: 100%;
        font-family: "futura";
      }
      .robot_num{

      }
      </style>

  </div>




  <div class="container_inner" id="container_inner2">
    <!-- BEGINS PLAYER BLOCK -->
    <div class="container_inner_header">

      <img src="img/all-time.svg" id="all-time" alt="">

    </div>


</div>

</div>
  <button type="button" name="button" onclick="window.location.href = 'admin.php';">to ADMIN PAGE</button>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
  </body>
</html>
