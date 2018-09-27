<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Robot Scoreboard</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=font1|font2|etc" type="text/css">
    <link rel="stylesheet" href="css/bots.css" type="text/css">

    <script src="https://www.gstatic.com/firebasejs/5.4.0/firebase.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.4.1/firebase-database.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>


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

  </head>

  <body>


     <script type="text/javascript">

       var current_players = firebase.database().ref().child('Current').once('value', function(snapshot) {

           var snap_players = snapshot.val();

           var counter = 0;
           for (var key in snap_players) {
            //  console.log(key);
            //  console.log(snap_players[key]["name"]);
            counter += 1;

            var block = document.createElement('div');
            block.setAttribute("class","block");
            block.setAttribute("id", counter);

            var bar_item1 = document.createElement('div');
            bar_item1.setAttribute("class","bar_item_row1");
            bar_item1.setAttribute("style", "margin-top:1%;");

            var span1 = document.createElement('span');

            span1.setAttribute("class","robot_number_overall");
            // span1.setAttribute("id", "player_name1");
            span1.innerHTML = counter;

            bar_item1.appendChild(span1);
            // block.appendChild(bar_item1);

            var bar_item2 = document.createElement('div');
            bar_item2.setAttribute("class","bar_item_row");
            bar_item2.setAttribute("style", "width: 40%;margin-right:5%; margin-top: 1%; text-align:left;");

            var span2 = document.createElement('span');

            span2.setAttribute("class", "player_name_overall");
            span2.innerHTML = snap_players[key]["name"];

            // bar_item.appendChild(line_break);
            bar_item2.appendChild(span2);
            // block.appendChild(bar_item2);

            var bar_item3 = document.createElement('div');
            //  bar_item2.class = "bar_item";
            bar_item3.setAttribute("class","bar_item_row");
            bar_item3.setAttribute("style", "margin-top:1%;");
            // bar_item3.innerHTML = '<span id="player_points">0</span><br/>';

            var span3 = document.createElement('span');

            span3.setAttribute('class','robot_num');
            span3.innerHTML = counter;
            bar_item3.appendChild(span3);
            // block.appendChild(bar_item3);

            var bar_item4 = document.createElement('div');
            bar_item4.setAttribute("class","bar_item_row");
            bar_item4.setAttribute("style", "margin-top: 1%;");
            var span4 = document.createElement('span');
            span4.innerHTML = "+" + snap_players[key]["score"];

            bar_item4.appendChild(span4);
//
            var fill = document.createElement('div');
            fill.setAttribute('class','fill');

            fill.appendChild(bar_item1);
            fill.appendChild(bar_item2);
            fill.appendChild(bar_item3);
            fill.appendChild(bar_item4);

            block.appendChild(fill);

            var bar_item5 = document.createElement('div');
            bar_item5.setAttribute("class","bar_item_row");
            // bar_item5.setAttribute("style", "width: 10%;display:inline-block;");
            bar_item5.setAttribute("style", "width: 10%;font-size:2.5em;position:relative;top:-100%;padding-top:1%;");


            var span5 = document.createElement('span');
            span5.innerHTML = "";

            // bar_item5.setAttribute("style","position: absolute; width 100px; height100px;");
            bar_item5.appendChild(span5);
            block.appendChild(bar_item5);

            // block.appendChild(bar_item4);
            document.getElementById('container_inner_reset').appendChild(block);

           }
         });

        //  function reset_current_players(){
        //    console.log('RESET -------- RESET');
        //   document.getElementById('container_inner_reset').innerHTML = "";
        //   firebase.database().ref().child('Current').once('value', function(snapshot) {
        //       //  console.log(snapshot.val());
        //        var snap_players = snapshot.val();
        //        var counter = 0;
        //        for (var key in snap_players) {
        //         //  console.log(key);
        //         //  console.log(snap_players[key]["name"]);
        //         counter += 1;
         //
        //         var block = document.createElement('div');
        //         block.setAttribute("class","block");
        //         block.setAttribute("id", counter);
         //
        //         var bar_item1 = document.createElement('div');
        //         bar_item1.setAttribute("class","bar_item_row");
        //         bar_item1.setAttribute("style", "margin-top:2%;");
         //
         //
        //         var span1 = document.createElement('span');
         //
        //         span1.setAttribute("class","robot_number_overall");
        //         // span1.setAttribute("id", "player_name1");
        //         span1.innerHTML = counter;
         //
         //
        //         bar_item1.appendChild(span1);
        //         block.appendChild(bar_item1);
         //
        //         var bar_item2 = document.createElement('div');
        //         bar_item2.setAttribute("class","bar_item_row");
        //         bar_item2.setAttribute("style", "width: 40%; margin-top: 2%;");
         //
         //
        //         var span2 = document.createElement('span');
         //
        //         span2.setAttribute("class", "player_name_overall");
        //         span2.innerHTML = snap_players[key]["name"];
         //
         //
        //         // bar_item.appendChild(line_break);
        //         bar_item2.appendChild(span2);
        //         block.appendChild(bar_item2);
         //
         //
        //         var bar_item3 = document.createElement('div');
        //         //  bar_item2.class = "bar_item";
        //         bar_item3.setAttribute("class","bar_item_row");
        //         bar_item3.setAttribute("style", "margin-top:2%;");
        //         // bar_item3.innerHTML = '<span id="player_points">0</span><br/>';
         //
        //         var span3 = document.createElement('span');
         //
        //         span3.setAttribute('class','robot_num');
        //         span3.innerHTML = counter;
        //         bar_item3.appendChild(span3);
        //         block.appendChild(bar_item3);
         //
        //         var bar_item4 = document.createElement('div');
        //         bar_item4.setAttribute("class","bar_item_row");
        //         bar_item4.setAttribute("style", "margin-top:2%;");
        //         var span4 = document.createElement('span');
        //         span4.innerHTML = snap_players[key]["score"];
         //
        //         bar_item4.appendChild(span4);
        //         block.appendChild(bar_item4);
        //         document.getElementById('container_inner1').appendChild(block);
         //
        //        }
        //      });
        //  }

        //  PULLS CURRENT SCORES
         var current_score = firebase.database().ref().child('Current').on('value', function(snapshot) {

           var snap_score = snapshot.val();
           var counter = 0;
           for (var key in snap_score) {
              // console.log(counter);

             var player_number = key.charAt(6);
             var block = document.getElementById(player_number);
             var old_score = block.childNodes[0].childNodes[3].childNodes[0].innerHTML;
             var new_score = snap_score[key]["score"];

             var difference = new_score - old_score;

             if (difference > 0){
              //  block.childNodes[1].childNodes[0].classList.remove('hidden');
               //  console.log(block.childNodes[3].childNodes[0]);
              //  var el = document.querySelector('.js-fade');
              //   if (el.classList.contains('is-paused')){
              //    el.classList.remove('is-paused');
              //   }
                // block.childNodes[1].childNodes[0].innerHTML = "";
                // block.childNodes[1].childNodes[0].classList.remove('hidden');

                block.childNodes[0].childNodes[3].childNodes[0].innerHTML = "+" + snap_score[key]["score"];

                // console.log(<span class="hidden">asdfasdf</span>);
                // block.childNodes[1].innerHTML = "<span class='hidden'>asdfasdf</span>";
                // "+"+ difference;""
                // <span> <span>
                block.childNodes[1].childNodes[0].innerHTML = "+" + difference;
                block.childNodes[1].childNodes[0].classList.add('hidden');

                setTimeout(function () {

                  document.getElementsByClassName('hidden')[0].innerHTML = "";
                  document.getElementsByClassName('hidden')[0].classList.remove('hidden');

                }, 500);

                // change the rank in the div
                // change the css top attribute

             }
             counter += 1;
           }
         });

        //  PULLS OVER PLAYER SCORES

         var overall_player_scores = firebase.database().ref().child('overall_scores').once('value', function(snapshot) {
            //  console.log(snapshot.val());
             var snap_players = snapshot.val();

             var overall_player = [];
             for (var key in snap_players) {


                overall_player.push([key, snap_players[key]["score"], snap_players[key]["robot_num"]]);

             }

             //SORTING ALGORITHM
             bubble_sort(overall_player);

             var counter = 0;
             for (var row = 0; row < 8; row ++){


              counter += 1;

              var block = document.createElement('div');
              block.setAttribute("class","block");

              var bar_item1 = document.createElement('div');
              bar_item1.setAttribute("class","bar_item_row1");
              bar_item1.setAttribute("style", "margin-top:1%;");

              var span1 = document.createElement('span');

              span1.setAttribute("class","robot_number_overall");

              span1.innerHTML = counter;

              bar_item1.appendChild(span1);
              // block.appendChild(bar_item1);

              var bar_item2 = document.createElement('div');
              bar_item2.setAttribute("class","bar_item_row");
              bar_item2.setAttribute("style", "width: 40%; margin-top: 1%; margin-right:5%; text-align:left;");

              var span2 = document.createElement('span');

              span2.setAttribute("class", "player_name_overall");
              span2.innerHTML = overall_player[row][0];

              bar_item2.appendChild(span2);
              // block.appendChild(bar_item2);

              var bar_item3 = document.createElement('div');
              bar_item3.setAttribute("class","bar_item_row");
              bar_item3.setAttribute("style", "margin-top:1%;");

              var span3 = document.createElement('span');

              span3.setAttribute('class','robot_num');
              var R_num = overall_player[row][2].charAt(6);;
              span3.innerHTML = R_num;
              bar_item3.appendChild(span3);
              // block.appendChild(bar_item3);


              var bar_item4 = document.createElement('div');
              bar_item4.setAttribute("class","bar_item_row");
              bar_item4.setAttribute("style", "margin-top:1%;");
              var span4 = document.createElement('span');
              span4.innerHTML =  "+" + overall_player[row][1];


              bar_item4.appendChild(span4);

              var fill = document.createElement('div');
              fill.setAttribute('class','fill');
              fill.appendChild(bar_item1);
              fill.appendChild(bar_item2);
              fill.appendChild(bar_item3);
              fill.appendChild(bar_item4);


              if (counter < 4) {
                fill.setAttribute("style", "background-color:rgba(0,174,169,0.9);");
              }

              block.appendChild(fill);

              var bar_item5 = document.createElement('div');
              // bar_item5.setAttribute("class","bar_item_row");
              bar_item5.setAttribute("style", "width: 10%;font-size:2.5em;position:relative;top:-100%;");

              // var span5 = document.createElement('span');
              // span5.innerHTML = "";
              // bar_item5.appendChild(span5);

              block.appendChild(bar_item5);
              document.getElementById('container_inner2').appendChild(block);


             }
           });


          // newer sort
          function bubble_sort2(arr){
            return arr.sort( (a, b) => a.score - b.score);
          }

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

            //  var finishing_time = snapshot2.val()['finishing_time'];
             var is_paused = snapshot2.val()['is_paused'];

             if (is_paused == true){

              //  var time = document.getElementById('timer').innerHTML;
              //  var now = new Date().getTime();
              //  console.log('NOWOWOOWOW');
              //  console.log(time);
              //  var times = time.split(":");
              //  console.log("MS");
              //  var ms = 1000 * ((times[0] * 60) + (times[1]))
              //  console.log(ms);
              //
              //  var countDownDate = ms + now;
              //
              //  x = setInterval(function() {
              //
              //    var now = new Date().getTime();
              //    var distance = countDownDate - now;
              //    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
              //    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
              //    var time_stamp = minutes + ":" + seconds;
                 clearInterval(x);
                //  document.getElementById('timer').innerHTML = time_stamp;

              //  }, 1000);

              //  firebase.database().ref().child('Current_game_time').child('is_paused').set(false);
              //  firebase.database().ref().child('Current_game_time').child('timer_on').set(true);

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

     <!-- HEADER -->
    <div class="header_div">

      <img src="img/logoSF.png" id="SF_logo" alt="">
      <img src="img/index_header.png" alt="codey-robot" id="codey">
      <h1 id="timer">0:00</h1>

    </div>


    <div class="container_outer">

    <div class="container_inner" id="container_inner1">

      <div class="container_inner_header">

        <img src="img/current.svg" id="current" alt="">

      </div>
      <div class="block_header">
        <div class="bar_item_HEADER" style="text-align:left;">
          <span class="robot_number_overall">RANK</span>
        </div>

        <div class="bar_item_HEADER"  style="width: 10%;margin-right:23%;text-align:left;">
          <span class="player_name_overall">NAME</span>
        </div>

        <div class="bar_item_HEADER" style="">
          <span class="robot_num">ROBOT</span>
        </div>

        <div class="bar_item_HEADER" style="">
          <span>SCORE</span><br />
        </div>
      </div>
      <div id="container_inner_reset">

      </div>


      <style media="screen">
      .bar_item_HEADER{
         /*display: inline-block;*/
        float: left;
        height: 100%;
        font-size: 2em;
        /*font-family: "avenir next";*/
        width: 20%;
      }
      .bar_item_row{
         /*display: inline-block;*/
        float: left;
        height: 100%;
        font-size: 2.5em;
        /*font-family: "avenir next";*/
        width: 20%;
      }
      .bar_item_row1{
         /*display: inline-block;*/
        float: left;
        height: 100%;
        font-size: 2.5em;
        /*font-family: "avenir next";*/
        width: 10%;
        margin-right: 5%;
      }
      .robot_num{

      }
      .block_header{
        display: inline-block;
        text-align: center;
        /*margin: 5px;*/

        width: 90%;
        height: 60px;
        /*background: rgba(0,0,0,0.9);*/
        /*box-shadow: 0 30px 25px -20px rgba(0,0,0,0.70);*/
        border-radius: 50px;

      }
      </style>

  </div>




  <div class="container_inner" id="container_inner2">
    <!-- BEGINS PLAYER BLOCK -->
    <div class="container_inner_header">

      <img src="img/all-time.svg" id="all-time" alt="">

    </div>
    <div class="block_header">
      <div class="bar_item_HEADER" style="text-align:left;">
        <span class="robot_number_overall">RANK</span>
      </div>

      <div class="bar_item_HEADER" style="width: 10%;margin-right:23%; text-align:left;">
        <span class="player_name_overall">NAME</span>
      </div>

      <div class="bar_item_HEADER" style="">
        <span class="robot_num">ROBOT</span>
      </div>

      <div class="bar_item_HEADER" style="">
        <span>SCORE</span><br />
      </div>
    </div>

</div>
</div>

  </body>
</html>
