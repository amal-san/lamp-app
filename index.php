<?php
   session_start();
   $user = $_SESSION['username'];
   $date = date_default_timezone_set('Asia/Kolkata');
   $today = date('Y-m-d h:m:s');
   if(!isset($user))
   {
    // not logged in
    header('Location: login.html');
    exit();
   }
   $msg = "You have visited this page ". $today;


?>
<!DOCTYPE html>
<html>
<head>
<title>Typerex</title>
<link href="txtstyle.css" rel="stylesheet" type="text/css" />
<script type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript">
</script>
</script>
</script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

  <body>

  <div id ="head" class ="head">
    <div id = "Title">
  <h1 style="color:white; text-align:center"> Typerex </h1>
</div>
  <div id = "home" class = "home">
    <i class="fa fa-home" style="font-size:38px;color:white;align:center;"onclick="location.href ='Profile_page.html';"></i>
  </div>
  <div id = "login" class = "login">
  <i class="fa fa-user-circle-o" style="font-size:35px;color:white;align:right;"onclick="logout();"></i>
  <br>
  </div>
</div>
  <br>
    <div id="list">
      <p1 id = "para" style="color:black"></p>

    </div>
    <br>
  <div id = "typing">
	 <form id = "myform">
    Type here:  <input id="my-text-box" type = "text" style="font-size: 15pt; height: 30px; width:500px; " disabled>     </input>
	 </form>
       <div id = "start">
         <button id="startClock" onclick="stbutton()"> Start </button><br><br>
          <span id="count">60</span> seconds remaining
	  <div id="messages" style="white-space:pre;"></div>
      <div id = "error"  style ="white-space;pre;"></div>
      <div id ="wpm" style ="white-space;pre;"></div>
      </div>
      </div>
      <div id="alert"style="display: none;">
        <div id="crosign">
        <i class="fa fa-close" style="font-size:20px;text-align:justify;"onclick="query();document.location.reload(true);"></i>
      </div>
        <h1 style="text-align:center">Completed!!</h1>
        <h2 id = "Wordsper"style="text-align:center; font-size:60px;">0</h2>
        <h3 id = "wpm" style="text-align:center;font-size:20px;font-weight:bold;">WPM</h3>
        <br>
        <div class="wrapper">
        <button id="alertbt" onclick="query();document.location.reload(true);"style="color:white">Try again</button>
      </div>
      </div>
	 <?php  echo ( $msg );
          ?>

      <script>
	  window.onload = function() {
	  const myInput = document.getElementById('my-text-box');
      myInput.onpaste = function(e) {
      e.preventDefault();
            }
       }
       var p = ['Merciful God! the Count has been to him, and there is some new scheme of terror afoot! Later.--I went after my round to Van Helsing and told him my suspicion. He grew very grave; and, after thinking the matter over for a while asked me to take him to Renfield. I did so. As we came to the door we heard the lunatic within singing gaily, as he used to do in the time which now seems so long ago.','When we entered we saw with amazement that he had spread out his sugar as of old; theflies, lethargic with the autumn, were beginning to buzz into the room. We tried to make him talk of the subject of our previous conversation, but he would not attend. He went on with his singing, just as though we had not been present. He had got a scrap of paper and was folding it into a note-book.',
       'When I was seated, I found myself much at a loss what to say; yet, after a short silence, assuming all the courage in my power, "Will you not, my Lord," said I, "think me trifling and capricious, should I own I have repented the promise I made, and should I entreat your Lordship not to insist upon my strict performance of it?"',
       'As he was entirely silent, and profoundly attentive, I continued to speak without interruption.The gravity and coldness with which he asked this question very much abashed me. But Lord Orville is the most delicate of men! and, presently recollecting himself, he added, "I mean not to speak with indifference of any friend of yours,-far from it; any such will always command my good wishes:',
       'Do you think, my dear sir, I did not, at that moment, require all my resolution to guard me from frankly telling him whatever he wished to hear?  yet I rejoice that I did not; for, added to the actual wrong I should have done, Lord Orville himself, when he had heard, would, I am sure, have blamed me. Fortunately, this thought occurred to me;',
       'He was proceeding in this complimentary style, when we were met by the Captain; who no sooner perceived Sir Clement, than he hastened up to him, gave him a hearty shake of the hand, a cordial slap on the back, and some other equally gentle tokens of satisfaction, assuring him of his great joy at his visit, and declaring he was as glad to see him as if he had been a messenger who brought news that a French ship was sunk.',
       '"Now, though I by no means approve of so many foreigners continually flocking into our country," added he, addressing himself to the Captain, "yet I could not help pitying the poor wretch, because he did not know enough of English to make his defence; however, I found it impossible to assist him; for the mob would not suffer me to interfere. In truth, I am afraid he was but roughly handled."',
       'I will not, therefore, enter into a contest from which I have nothing to expect but altercation and impertinence. As soon would I discuss the effect of sound with the deaf, or the nature of colours with the blind, as aim at illuminating with conviction a mind so warped by prejudice, so much the slave of unruly and illiberal passions. Unused as she is to control, persuasion would but harden, and opposition incense her.',
       'She cannot do better herself than to remain quiet and inactive in the affair: the long and mutual animosity between her and Sir John will make her interference merely productive of debates and ill-will. Neither would I have Evelina appear till summoned. And as to myself, I must wholly decline acting; though I will, with unwearied zeal, devote all my thoughts to giving counsel:',
       'Will you, my dear Madam, forgive the freedom of an old man, if I own myself greatly surprised, that you could, even for a moment, listen to a plan so violent, so public, so totally repugnant to all female delicacy? I am satisfied your Ladyship has not weighed this project. There was a time, indeed, when to assert the innocence of Lady Belmont, and to blazon to the world the wrongs, not guilt, by which she suffered',
       'Never can I consent to have this dear and timid girl brought forward to the notice of the world by such a method; a method which will subject her to all the impertinence of curiosity, the sneers of conjecture, and the stings of ridicule. And for what?-the attainment of wealth which she does not want, and the gratification of vanity which she does not feel. A child to appear against a father!-no, Madam, old and infirm as I am,',
       'Far different had been the motives which would have stimulated her unhappy mother to such a proceeding; all her felicity in this world was irretrievably lost; her life was become a burthen to her; and her fair fame, which she had early been taught to prize above all other things, had received a mortal wound: therefore, to clear her own honour, and to secure from blemish the birth of her child, was all the good which fortune had reserved herself the power of bestowing.'
]
function get_random() {
<?php
$method = 'GET'; //change to 'POST' for post method
$url = 'https://litipsum.com/api/1';

$context = stream_context_create(array(
        'http' => array(
            'method' => "$method",
            'header' => 'Content-Type: application/x-www-form-urlencoded'))
    );
$response = file_get_contents($url, false, $context);
$response = (string)$response;
?>
}

       var x = Math.floor(Math.random() * 11);

       randpara = p[x];

       document.getElementById('para').innerHTML = randpara

       var text = randpara

      var input = document.querySelector('#my-text-box');

      var messages = document.querySelector('#messages');

      var error = document.querySelector('#error');

      var l = text.length;

      var wpm = document.querySelector('#wpm')

      var $para = $('#para');

      input.addEventListener('input', function() {
	       var i = 0;
	       var errors = 0;
	       var correct = 0;
		   var j=0;
		   var word = document.getElementById("para").innerHTML;
	        for(i=0;i<text.length;i++) {

		          if(input.value[i] == text[i]) {


                        correct +=1;
                        var newinp = input.value[i];
  		           // messages.textContent =  correct+ '\n';
	               }
	               else {

	                   //error.textContent = l - correct +'\n';

	               }

	          }
            var finalwpm = correct/5;
            document.getElementById('Wordsper').innerHTML = finalwpm;


               });
               $("#startClock").click( function(){
                 $("#my-text-box").focus();
                 var counter = 2;
                 setInterval(function() {
                   counter--;
                   if (counter >= 0) {
                     span = document.getElementById("count");
                     span.innerHTML = counter;


                   }
                   if (counter === 0) {
                  document.getElementById("my-text-box").disabled = true;
                  document.getElementById("alert").style.display = "block";
                  clearInterval(counter);
                }
              }, 1000);
            })
            function stbutton() {
              document.getElementById("my-text-box").disabled = false;
              document.getElementById("startClock").disabled = true;
              document.getElementById("alert").style.display ="none";

            }
            function remove() {
              document.getElementById("startClock").disabled = false;
              document.getElementById("alert").style.display ="none";

            }
            function query() {
              <?php

              $servername = "localhost";
              $username = "root";
              $password = "Amal@123";
              $dbname = "typerex";

              // Create connection
              $conn = new mysqli($servername, $username, $password, $dbname);




              // Check connection
              if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
              }
              session_start();
              $user = $_SESSION['username'];
              $date = date_default_timezone_set('Asia/Kolkata');
              $today = date('Y-m-d h:m:s');


              $sql = "INSERT INTO wpm (username,date) VALUES ('$user','$today')";
              if (mysqli_query($conn, $sql)) {

                header("Refresh:0");

                }
              error_reporting(E_ALL);
              ini_set('display_errors', 'On');

              $conn->close();
              ?>

            }
            function logout() {
              <?php
                    session_start(); 

              	   // Destroy Session 
              	   $_SESSION = [];  
              	   session_unset();
              	   session_destroy(); 

              	   header("Location:http://localhost/temp.github.io/login.html");
              	   exit();

              ?>

          }
</script>
  </body>
</html>

