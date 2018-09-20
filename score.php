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
  @media only screen and (max-device-width: 1030px) {

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

      padding-top: 100px;

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

    .minus {
      display: table-cell;
      /*margin: auto;*/
      /*text-align: center;*/
    }
    .player_points{

      display: table-cell;
      /*margin-top: 10px;/*/
      /*margin: auto;*/
      /*padding-top: 20px;*/
      /*text-align: center;*/

    }
    .plus{
      display: table-cell;
      /*margin: auto;*/
      /*text-align: center;*/

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


  }

  @media only screen and (min-device-width: 1030px) {
      /* For general iPad layouts */
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

      .minus {
        display: table-cell;
        /*margin: auto;*/
        /*text-align: center;*/
      }
      .player_points{

        display: table-cell;
        /*margin-top: 10px;/*/
        /*margin: auto;*/
        /*padding-top: 20px;*/
        /*text-align: center;*/

      }
      .plus{
        display: table-cell;
        /*margin: auto;*/
        /*text-align: center;*/

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

       var current_players = firebase.database().ref().child('Current').once('value', function(snapshot) {
          //  console.log(snapshot.val());
           var snap_players = snapshot.val();
           var counter = 0;
           for (var key in snap_players) {
             console.log(key);
            if (counter <= 3){

             console.log(snap_players[key]["name"]);
             // var name =
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

             var bar_item2 = document.createElement('div');
             bar_item2.setAttribute("class","bar_item");
             bar_item2.setAttribute("style", "width: 45%; padding: 0; display: table;");

             //MINUS
             var minus_div = document.createElement('div');
             var minus = document.createElement('img');
             minus.setAttribute('src','img/minus.png');
             minus.setAttribute('style', 'width: 25%;');
             minus_div.setAttribute('onclick', 'subtract_score()');
             minus_div.setAttribute('onclick', "subtract_score(this.parentElement.parentElement)");
             minus_div.setAttribute('class','minus');


             //SCORE
             var span3_div = document.createElement('div');
             var span3 = document.createElement('span');
             span3.innerHTML = snap_players[key]["score"];
             span3.setAttribute("id", "score_keeper");
             span3_div.setAttribute("class", "player_points");
             span3.setAttribute("style", "font-size: 5em;");


             // var break2 = document.createElement('br');

             //PLUS
             var plus_div = document.createElement('div');
             var plus = document.createElement('img');
             plus.setAttribute('src','img/plus.png');
             plus.setAttribute('style', 'width: 25%;');
             plus_div.setAttribute('onclick', "add_score(this.parentElement.parentElement)");
             plus_div.setAttribute('class','plus');

             minus_div.appendChild(minus);
             span3_div.appendChild(span3);
             plus_div.appendChild(plus);

             bar_item2.appendChild(minus_div);
             bar_item2.appendChild(span3_div);
             bar_item2.appendChild(plus_div);

             // bar_item2.appendChild(break2);

            //  var player_points = document.createElement('span');
            //  player_points.id = "player_points";
            //  player_points.innerHTML = "12";

            //  bar_item.appendChild(player_name);
            //  bar_item.appendChild(robot_number);
            //  bar_item2.appendChild(player_points);

             block.appendChild(bar_item);
             block.appendChild(bar_item2);
             document.getElementById('container_inner1').appendChild(block);
            }

           }
         });


         function add_score(row){
          //  console.log(row);
           var player_number = "player" + row.id;
           var old_score = row.childNodes[1].childNodes[1].children[0].innerHTML;
          //  console.log(old_score);

           var new_score = parseInt(old_score) + 1;
           console.log(new_score);
           row.childNodes[1].childNodes[1].children[0].innerHTML = new_score;
          //  row.childNodes[1].childNodes[1].children[0].innerHTML = 4;
           firebase.database().ref().child('Current').child(player_number).child('score').set(new_score);

         }

         function subtract_score(row){
           console.log("subtract");
           var player_number = "player" + row.id;
           var old_score = row.childNodes[1].childNodes[1].children[0].innerHTML;
           var new_score = parseInt(old_score) - 1;
           console.log(new_score);
          row.childNodes[1].childNodes[1].children[0].innerHTML = new_score;
          firebase.database().ref().child('Current').child(player_number).child('score').set(new_score);

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


    <div class="header_div">

      <img src="img/Header.png" alt="codey-robot" id="codey">
      <!-- <div class="player_header"> -->

      <!-- </div> -->
      <h1 id="timer">0:00</h1>

    </div>

    <div class="container_outer">
    <div class="container_inner" id="container_inner1">

      <div class="container_inner_header">
        Current Game
      </div>



    </div>
    </div>

  <button type="button" name="button" onclick="window.location.href = 'admin.php';">to ADMIN PAGE</button>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
  </body>
</html>
