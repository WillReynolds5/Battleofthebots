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
      background: url(img/ipad_background.png);
      margin: 0;

    }

    #codey{


      margin-top: 20px;
      display: inline-block;
      /*margin-left: 0;*/
      width: 50%;
    }


    #timer{

      margin-top: 20px;
      display: inline-block;
      margin-left: 15%;

      font-size: 70px;
      font-family: "futura";
      color: rgba(249, 159, 97, 1.0);
      /*display: block;*/

    }

    #scorer{
      margin-top: 50px;
      text-align: center;
      display: block;
      margin-left: auto;
      margin-right: auto;
    }

    .header_div{


    }

    .container_outer{
      /* margin: 0 auto; */


      text-align: center;
      border-radius: 100px;
      padding-top: 20px;
      margin-left: 50px;
      margin-right: 50px;
      /*margin-bottom: 50px;*/
    }


    .bar_item_row_header{
      /*display: inline-block;*/
     float: left;
     /*height: 100%;*/
     font-size: 1.5em;
     /*font-family: "avenir next";*/
     width: 15%;
     /*text-align: left;*/
     font-family: "Avenir Next";
     font-weight: bold;
    }

    .bar_item_row{
       /*display: inline-block;*/
      float: left;
      /*height: 100%;*/
      font-size: 1.5em;
      /*font-family: "avenir next";*/
      /*width: 31%;*/
      text-align: left;
      font-family: "Avenir Next";
    }
    .container_inner{

      border-radius: 50px;
      text-align: center;

      padding: 0px;
      /* background: rgba(0,0,0,.48); */
      /*margin-bottom: 200px;*/
      display: inline-block;

      width: 900px;


  }
    .container_inner_header{
      color: black;
      font-size: 4em;
      font-family: "futura";
      margin-top: 50px;
    }

    .block{
      display: inline-block;
      text-align: center;
      margin: 25px;
      width: 90%;
      height: 90px;
      /*background: rgba(83, 206, 218, 0.9);*/
      /*box-shadow: 0 30px 25px -20px rgba(0,0,0,0.70);*/
      /*border-radius: 10px;*/

    }

    .block_header{

      display: inline-block;
      text-align: center;
      margin-top: 50px;
      /*margin: 10px;*/
      width: 90%;
      height: 50px;
      /*background: rgba(83, 206, 218, 0.9);*/
      /*box-shadow: 0 30px 25px -20px rgba(0,0,0,0.70);*/
      border-radius: 10px;
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


    .player_points{

      display: table-cell;
      /*margin-top: 10px;/*/
      /*margin: auto;*/
      /*padding-top: 20px;*/
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

    #Case{
      width:47%;
      height:100px;
      background: rgba(249,159,97,0.9);
      box-shadow: 0 30px 25px -20px rgba(0,0,0,0.70);
      border-radius: 10px;
      /*display: inline-block;*/
      float: left;

    }

    #bar_item_4{

        /*padding-top: 3%;
        padding-left: 1%;*/

        width:12%;
        height:100px;

        background: rgba(249,159,97,0.9);
        box-shadow: 0 30px 25px -20px rgba(0,0,0,0.70);
        border-radius: 10px;
        /*display:inline-block;*/
        float: left;
        margin-left: 30px;
    }
    .minus {
      /*display: table-cell;*/
      padding-top: 30%;
      padding-left: 35%;
      /*margin: auto;*/
      /*text-align: center;*/
    }

    .plus{
      /*display: table-cell;*/
      /*margin: auto;*/
      /*text-align: center;*/
      padding-top: 30%;
      padding-left: 30%;
    }


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
            counter += 1;

            if (counter <= 4){

              console.log(snap_players[key]["name"]);

              var block = document.createElement('div');
              block.setAttribute("class","block");
              block.setAttribute("id", counter);

              var Case = document.createElement('div');
              Case.setAttribute('style','');
              Case.setAttribute('id','Case');

              var bar_item1 = document.createElement('div');
              bar_item1.setAttribute("class","bar_item_row");
              bar_item1.setAttribute("style", " padding-top: 4%; padding-left: 5%; width:15%;");

              var span1 = document.createElement('span');
              span1.setAttribute("id", "robot_number");
              span1.innerHTML = counter;
              bar_item1.appendChild(span1);

              var bar_item2 = document.createElement('div');
              bar_item2.setAttribute("class","bar_item_row");
              bar_item2.setAttribute("style", "font-size: 1.7em; padding-top: 8%;width:50%; text-align:center;");

              var span2 = document.createElement('span');
              //  span2.setAttribute("class","player_name");
              span2.setAttribute("id", "player_name1");
              span2.innerHTML = snap_players[key]["name"];
              bar_item2.appendChild(span2);

              console.log(counter);

              //SCORE
              var bar_item3 = document.createElement('div');
              bar_item3.setAttribute("class","bar_item_row");
              bar_item3.setAttribute("style", "padding-top: 4%; padding-left:2%;");

              var span3_div = document.createElement('div');
              var span3 = document.createElement('span');
              console.log("SCORE");
              // log
              span3.innerHTML = "+" + snap_players[key]["score"];
              span3.setAttribute("id", "score_keeper");
              span3_div.setAttribute("class", "player_points");
              span3.setAttribute("style", "font-size: 2em;");

              span3_div.appendChild(span3);
              bar_item3.appendChild(span3_div);

              //CASING
              Case.appendChild(bar_item1);
              Case.appendChild(bar_item2);
              Case.appendChild(bar_item3);

              //MINUS
              var bar_item4 = document.createElement('div');
              bar_item4.setAttribute("class","bar_item_row");
              bar_item4.setAttribute("id","bar_item_4");
              bar_item4.setAttribute("style", "");

              var minus_div = document.createElement('div');
              var minus = document.createElement('img');
              minus.setAttribute('src','img/minus.png');
              minus.setAttribute('style', 'width: 50%;');
              minus_div.setAttribute('onclick', "subtract_score(this.parentElement.parentElement)");
              minus_div.setAttribute('class','minus');

              minus_div.appendChild(minus);
              bar_item4.appendChild(minus_div);


              var bar_item5 = document.createElement('div');
              bar_item5.setAttribute("class","bar_item_row");
              bar_item5.setAttribute("id","bar_item_4");
              bar_item5.setAttribute("style", "");

              //PLUS
              var plus_div = document.createElement('div');
              var plus = document.createElement('img');
              plus.setAttribute('src','img/balloon.png');
              plus.setAttribute('style', 'width: 50%;');

              bar_item5.setAttribute('onclick', "add_score(this.parentElement)");
              plus_div.setAttribute('class','plus');

              plus_div.appendChild(plus);
              bar_item5.appendChild(plus_div);

              var bar_item6 = document.createElement('div');
              bar_item6.setAttribute("class","bar_item_row");
              bar_item6.setAttribute("id","bar_item_4");
              bar_item6.setAttribute("style", "");

              //FLIP
              var flip_div = document.createElement('div');
              var flip = document.createElement('img');
              flip.setAttribute('src','img/flip.png');
              flip.setAttribute('style', 'width: 60%;');

              flip_div.setAttribute('onclick', "add_2_score(this.parentElement.parentElement)");
              flip_div.setAttribute('class','plus');
              flip_div.setAttribute('onclick', "add_2_score(this.parentElement.parentElement)");


              flip_div.appendChild(flip);
              bar_item6.appendChild(flip_div);

              block.appendChild(Case);

              block.appendChild(bar_item4);
              block.appendChild(bar_item5);
              block.appendChild(bar_item6);

              document.getElementById('container_inner_reset').appendChild(block);

            }
           }
         });

         function reset_current_players(){
           document.getElementById('container_inner_reset').innerHTML = "";
           var current_players = firebase.database().ref().child('Current').once('value', function(snapshot) {
              //  console.log(snapshot.val());
               var snap_players = snapshot.val();
               var counter = 0;
               for (var key in snap_players) {
                //  console.log(key);
                counter += 1;

                if (counter <= 4){

                  console.log(snap_players[key]["name"]);

                  var block = document.createElement('div');
                  block.setAttribute("class","block");
                  block.setAttribute("id", counter);

                  var Case = document.createElement('div');
                  Case.setAttribute('style','');
                  Case.setAttribute('id','Case');

                  var bar_item1 = document.createElement('div');
                  bar_item1.setAttribute("class","bar_item_row");
                  bar_item1.setAttribute("style", " padding-top: 4%; padding-left: 5%; width:15%;");

                  var span1 = document.createElement('span');
                  span1.setAttribute("id", "robot_number");
                  span1.innerHTML = counter;
                  bar_item1.appendChild(span1);

                  var bar_item2 = document.createElement('div');
                  bar_item2.setAttribute("class","bar_item_row");
                  bar_item2.setAttribute("style", "font-size: 1.7em; padding-top: 8%;width:50%; text-align:center;");

                  var span2 = document.createElement('span');
                  //  span2.setAttribute("class","player_name");
                  span2.setAttribute("id", "player_name1");
                  span2.innerHTML = snap_players[key]["name"];
                  bar_item2.appendChild(span2);

                  console.log(counter);

                  //SCORE
                  var bar_item3 = document.createElement('div');
                  bar_item3.setAttribute("class","bar_item_row");
                  bar_item3.setAttribute("style", "padding-top: 4%; padding-left:2%;");

                  var span3_div = document.createElement('div');
                  var span3 = document.createElement('span');
                  console.log("SCORE");
                  // log
                  span3.innerHTML = "+" + snap_players[key]["score"];
                  span3.setAttribute("id", "score_keeper");
                  span3_div.setAttribute("class", "player_points");
                  span3.setAttribute("style", "font-size: 2em;");

                  span3_div.appendChild(span3);
                  bar_item3.appendChild(span3_div);

                  //CASING
                  Case.appendChild(bar_item1);
                  Case.appendChild(bar_item2);
                  Case.appendChild(bar_item3);

                  //MINUS
                  var bar_item4 = document.createElement('div');
                  bar_item4.setAttribute("class","bar_item_row");
                  bar_item4.setAttribute("id","bar_item_4");
                  bar_item4.setAttribute("style", "");

                  var minus_div = document.createElement('div');
                  var minus = document.createElement('img');
                  minus.setAttribute('src','img/minus.png');
                  minus.setAttribute('style', 'width: 50%;');
                  minus_div.setAttribute('onclick', "subtract_score(this.parentElement.parentElement)");
                  minus_div.setAttribute('class','minus');

                  minus_div.appendChild(minus);
                  bar_item4.appendChild(minus_div);


                  var bar_item5 = document.createElement('div');
                  bar_item5.setAttribute("class","bar_item_row");
                  bar_item5.setAttribute("id","bar_item_4");
                  bar_item5.setAttribute("style", "");

                  //PLUS
                  var plus_div = document.createElement('div');
                  var plus = document.createElement('img');
                  plus.setAttribute('src','img/balloon.png');
                  plus.setAttribute('style', 'width: 50%;');

                  bar_item5.setAttribute('onclick', "add_score(this.parentElement)");
                  plus_div.setAttribute('class','plus');

                  plus_div.appendChild(plus);
                  bar_item5.appendChild(plus_div);

                  var bar_item6 = document.createElement('div');
                  bar_item6.setAttribute("class","bar_item_row");
                  bar_item6.setAttribute("id","bar_item_4");
                  bar_item6.setAttribute("style", "");

                  //FLIP
                  var flip_div = document.createElement('div');
                  var flip = document.createElement('img');
                  flip.setAttribute('src','img/flip.png');
                  flip.setAttribute('style', 'width: 60%;');

                  flip_div.setAttribute('onclick', "add_2_score(this.parentElement.parentElement)");
                  flip_div.setAttribute('class','plus');
                  flip_div.setAttribute('onclick', "add_2_score(this.parentElement.parentElement)");


                  flip_div.appendChild(flip);
                  bar_item6.appendChild(flip_div);

                  block.appendChild(Case);

                  block.appendChild(bar_item4);
                  block.appendChild(bar_item5);
                  block.appendChild(bar_item6);

                  document.getElementById('container_inner_reset').appendChild(block);

                }
               }
             });
         }


         function add_score(row){

           var player_number = "player" + row.id;
           console.log("ROW");
           console.log(player_number);
           console.log(row.childNodes[0].childNodes[2].children[0].childNodes[0].innerHTML);
           var old_score = row.childNodes[0].childNodes[2].children[0].childNodes[0].innerHTML;
           old_score = old_score.replace('+','');

           var new_score = parseInt(old_score) + 1;
           console.log(new_score);
           row.childNodes[0].childNodes[2].children[0].childNodes[0].innerHTML = "+" +new_score;
           firebase.database().ref().child('Current').child(player_number).child('score').set(new_score);

         }

         function add_2_score(row) {

            var player_number = "player" + row.id;
            console.log("ROW");
            console.log(player_number);
            console.log(row.childNodes[0].childNodes[2].children[0].childNodes[0].innerHTML);
            var old_score = row.childNodes[0].childNodes[2].children[0].childNodes[0].innerHTML;
            old_score = old_score.replace('+','');

            var new_score = parseInt(old_score) + 3;
            console.log(new_score);
            row.childNodes[0].childNodes[2].children[0].childNodes[0].innerHTML = "+" +new_score;
            firebase.database().ref().child('Current').child(player_number).child('score').set(new_score);


         }

         function subtract_score(row){

            var player_number = "player" + row.id;
            console.log("ROW");
            console.log(player_number);
            console.log(row.childNodes[0].childNodes[2].children[0].childNodes[0].innerHTML);
            var old_score = row.childNodes[0].childNodes[2].children[0].childNodes[0].innerHTML;
            old_score = old_score.replace('+','');

            var new_score = parseInt(old_score) - 1;
            console.log(new_score);
            row.childNodes[0].childNodes[2].children[0].childNodes[0].innerHTML = "+" + new_score;
            firebase.database().ref().child('Current').child(player_number).child('score').set(new_score);

         }

         //  TIMER

          var time_count = firebase.database().ref().child('Current_game_time').on('value', function(snapshot2){

           //  var finishing_time = snapshot2.val()['finishing_time'];
            var is_paused = snapshot2.val()['is_paused'];

            if (is_paused == true){
                clearInterval(x);
            } else{

              var is_on = snapshot2.val()['timer_on'];
              console.log(is_on);

              if (is_on == true){


                 var counter = 0;
                  console.log("TIMER");
                  // console.log(key.value);
                  var countDownDate = snapshot2.val()['finishing_time'];

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

                    if (distance < 0) {
                      clearInterval(x);
                     //  firebase.database().ref().child('Current_game_time').child('finishing_time').set(snap_players["finishing_time"]+1000000000);
                     console.log(now);
                     console.log(distance);
                     location.reload();

                    }
                  }, 1000);
            }else{
               document.getElementById('timer').innerHTML = "0:00";

              }
            }
          });

          firebase.database().ref().child('Current_game_time').on('value', function(reload){
            var playing = reload.val()['playing'];
            console.log("PLAYING");
            console.log(playing);
            if (playing == true){
             location.reload();
            }

          });
     </script>


    <div class="header_div">

      <img src="img/Battle-Bots-ipad-header.png" alt="codey-robot" id="codey">
      <span id="timer">0:00</span>
      <img src="img/scorer_one.png" id="scorer" alt="">

    </div>

    <div class="container_outer">
    <div class="container_inner" id="container_inner1">

      <div class="container_inner_header">

        <img src="img/current.png" style="width:50%;" alt="Current">

      </div>

      <div class="block_header" >
        <div class="bar_item_row_header">
          <span style="text-align: left;">ROBOT</span>
        </div>
        <div class="bar_item_row_header">
          <span style="text-align: left;">NAME</span>
        </div>
        <div class="bar_item_row_header" style="margin-left:2%;">
          <span style="text-align: left;">SCORE</span>
        </div>
        <div class="bar_item_row_header" style="margin-left:5%;text-align: left;">
          <span style="">OOPS</span><span style="text-align:center;"></br>-1</span>
        </div>
        <div class="bar_item_row_header" style="margin-left:-2%;text-align: left;">
          <span style="">BALLOON</span><span></br>+1</span>
        </div>
        <div class="bar_item_row_header" style="margin-left:5%;text-align: left;">
          <span style="">FLIP</span><span></br>+3</span>
        </div>

      </div>
      <div id="container_inner_reset">

      </div>

    </div>
    </div>
    <style media="screen">
      body,html{
        text-align: center;
      }
    </style>
    <img src="img/logoSF.png" style="width: 30%; margin-top:50px;" alt="">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
  </body>
</html>
