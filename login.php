<?php include('server.php') ?> 
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=0.7">
<link rel="stylesheet" type="text/css" href="css/style1.css">
<link rel="stylesheet" type="text/css" href="css/style2.css">
	<title>Registration system PHP and MySQL</title>
</head>
<body>

<div id="mylogin-form" class="login-form">
  <div class="header-login">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
			<button class="cancelbtn btn">Cancel</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
  </div>

	<!-- 1) div text -->
<header class="first-header" id="myfirst-header">
	<div class="icon-fitness">
		<a class="icon-fitness" href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="116" height="41" viewBox="0 0 116 41"><g><g transform="translate(-390 -12)"><image width="116" height="41" transform="translate(390 12)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHQAAAApCAYAAADkig0OAAAHQUlEQVR4Xu2cbUxTVxjHrS9zitrilEFihPqyfWGuRrMYIqOLkI0NhibDic1Y1aQYtBGXKNiRjRmGED8AqSFQoyKk4W2JMGBsUTOYyodFQ6dsH+a04IeJL5NWRaaSsfzZDjlc7u05vbelCV6+KL3PPS/P7zznec5znqKZEYCf0du3Y564rxv+cV83aOaHeWatet318pLIPk1UVF8Amleb8EMDGj9kJ4kC5ODx8rKnP19Mk2onsrY1XBMe7lHSj/ouvwZkA33m/t3wIM/aOTo0pPXVnW7/5zvmbUqu5h+SKqlEA7KBPjic1+zLMsmgiIViAfxl3dkjNtjZ+lW/LDlcalQtWQnK/96VDfTezo/6Ru4ORLOGENV2cayP4Ws9Rs8h649S8ipUlib5nssGejtl4yhPF5HHm/QIjlhA0ZYKlUejvmWCDlR3xP7OvDfWdgqBasLCvAu27Sh4XH+qgPbDKlRlUGUDHfj4XQ8rIMLQFmTs+GqhaVcBIuI7OWbXbP1qV5hpVwEg47lYcKVClQ9VNlBvaWH1k/Pff8rqmgCFHKCKnU0fn6nPeXTiWCndlgqVpVnx57KBDp/vMHtKvz7F6nbuWxtbFn9RvJklJxZkqVBZWpv8XD5QRtQ6fmz5PyhiDc3rKC978m3TPqGcCpWluYnPgwoUMJbaqw1SQyJWjgBpVkRU34j7jzfFZOlt27/pvXjSsoHyJBYICES4z861m5/fGYiBiuesWO3Cv2IWKYYAwCMbftC9eHj8nzE30KHunzYj+f70Wo9x9O5ADCupAN85N/H96pHeHiMvOKnhz46I7F968puxxaD++NYAEyi2Ra+jrIzniBIsZdP5YKfTacnPz6+S6uvAgQN52dnZJXiu1+vHkh/Lly+/2dXVtZL+zNdYafmEhIQbt27dWgH5mpqapPj4+HPkXZPJdLa7uzsRv3d2dq6Mjo6+if/T74j1I2wHc6qvr7f09vaug7xWqx20WCwlZB50G/39/SsgW1lZmUs+T05Obtq9e3fJmjVrrvgEyns0CRZItCuMkkMJNC4u7pzT6UwKJFCbzVZVV1dnEdMhQFVUVGwlz65evbouMzPzrNfrDReTb2lpWS8J9JHzRMHjulNfBhOWr7bhN7WWnBzhTQ0NlLZGsbbELJSWq6ioyD169GgxPissLMwymUwOYTtCa6MtkcdC3W63pI4BKC0t7TL6jI2NvVJbW5uk0+kGU1NTLxNrtdvtW1NSUpogk52d3djR0ZFOj7etrS3darU2kjZEOxsdHNQNfJI6GCqYiI61n9nML+lfGwue6J9QA83IyHAUFRVlYUxKgUrNRepzenHRC4X+XBSoWOZmquDO/zC9XGvZlyPVX6iB0v5SKVDauoTbudj8acsV+mEiPwmo1AE/UECxlc7bEN88M2JyecpM5Hnj3m721VcogcI64e/IVq8UqMfjCTcajTeIT8S2m5WVVUK2WKEeaBeBZwiEII9tWhRosP0mYC4uthvFtlLeBcMKiuitKNA+FFaBoARRKHzpnj17Gv2NcoV+/8KFC4lok54/omzIiYGlFxF5Bwvt4MGDeQA7wUJ57zh5lS+UW7hr7/4FW7aVyX0f74USKBYLUSgUfunSpUSlQDEnHEWqqqpyhdGuVNAHHTgcjlxynEIbWARYcFMKlFQvBAroVEe5AEosCgpctmzZTRZQX1GuUA/YggGWPmNK+Uq8Cx8MeRIRww9PGdA5sYauJcXHjEpgCi00FEAxBrHEgVRiwRdQWBrxn9u3b3cQX0j7SjJHWHF7e/vYkQWLiWzHQj88Xu+DC+dgbrnTCajYti8HKH2uRFIAmR6pRUufWYUJhwnHFlw63y861Ixbkft5ezuf97oSlFqR2PvTCaiYlcoBSlsifWyhQdOJBYPB8IBYNNmKhckJDTlzwr+JpfqQenv2a49RaS53ugEVHiH8yeXSWSmxqJUYBI4xra2t68nvYhExbTyAryFHlUW2oi0zh4d0pAqBFHEhKsVNy8Mi2xklljvdgAp9l1yg0CkWR0NDg4WOWqXiA1gkkvN0RAzrxpkUFwfjQJGhWZSeWUBSfgD6amV9DCl+VppwmL/pvdPa/flmJYtCfZetgXGg5BKZvrgWln/cs5pdUlUFrK6wA7CyQKw21OdsDWjoYi/cO86IiOyjK9xpqKQU019/ql5Qs0EESmLs2EKCIaJ4YbRLQ5WTHlS/sBQoXOx2xhMLiHZRxY5q9rANCc0oip5U0W47svlha2OOPyUlQl/MHpIqoUQDEzJF2FIBDNdXvHW3rM5563JZ7ajP+TTguwTFUV42fP47s78+k+5aLcHkAxEoKWaRGDoilisHrhrdBgoVXztcQOmmsBWPDPwZg3JOnjThK/aTa5Xcf/JNQ5UiGvAbKK06ntxvIK7MVFz8GggqUNZXIfiHqUryakARUNbXIQKVv+WdjCqn4G8sEOUhYPr7N5eR+FVaqWFJH1SrfwFlapfZvySQI7sLRqJLAAAAAElFTkSuQmCC"/></g></g></svg></a>
	</div>
  <ul class="li-header">
	<li><a href="#">Home</a></li>
	<li><a href="#my-super-man-program-container">Club-Life</a><svg class="svg-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="960px" height="560px" viewBox="0 0 960 560" enable-background="new 0 0 960 560" xml:space="preserve">
		<g id="Rounded_Rectangle_33_copy_4_1_">
			<path d="M480,344.181L268.869,131.889c-15.756-15.859-41.3-15.859-57.054,0c-15.754,15.857-15.754,41.57,0,57.431l237.632,238.937   c8.395,8.451,19.562,12.254,30.553,11.698c10.993,0.556,22.159-3.247,30.555-11.698l237.631-238.937   c15.756-15.86,15.756-41.571,0-57.431s-41.299-15.859-57.051,0L480,344.181z"/>
		</g>
		</svg>
   </li>
	<li><a href="#my-red-container"  class="hover-get-started">Training</a><svg class="svg-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="960px" height="560px" viewBox="0 0 960 560" enable-background="new 0 0 960 560" xml:space="preserve">
		<g id="Rounded_Rectangle_33_copy_4_1_">
			<path d="M480,344.181L268.869,131.889c-15.756-15.859-41.3-15.859-57.054,0c-15.754,15.857-15.754,41.57,0,57.431l237.632,238.937   c8.395,8.451,19.562,12.254,30.553,11.698c10.993,0.556,22.159-3.247,30.555-11.698l237.631-238.937   c15.756-15.86,15.756-41.571,0-57.431s-41.299-15.859-57.051,0L480,344.181z"/>
		</g>
		</svg>	
		<!-- <div class="dropdown-content">
			<p>get started</p>
			<p>get started</p>
		</div> -->
</li>
    <li><a href="#" >Contact</a><svg class="svg-arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="960px" height="560px" viewBox="0 0 960 560" enable-background="new 0 0 960 560" xml:space="preserve">
		<g id="Rounded_Rectangle_33_copy_4_1_">
			<path d="M480,344.181L268.869,131.889c-15.756-15.859-41.3-15.859-57.054,0c-15.754,15.857-15.754,41.57,0,57.431l237.632,238.937   c8.395,8.451,19.562,12.254,30.553,11.698c10.993,0.556,22.159-3.247,30.555-11.698l237.631-238.937   c15.756-15.86,15.756-41.571,0-57.431s-41.299-15.859-57.051,0L480,344.181z"/>
		</g>
		</svg></li>
		<li><button type="submit" class="btn" name="login_user" id ="mytraining-btn">Login</button></li>

  </ul>
  <div class="m-menu" id="mMenu">
		<li><a href="#">Home</a></li>
		<li><a href="#">Club-Life</a>
		<li><a href="#">Training</a></li>
		<li><a id ="mytraining-btn" href="#">Contact</a></li>
	</div>
	<div class="menu-link" id="linkMenu">
	  <img src="img/menu-icon.png" alt="menu-icon">
	</div>
</header>

  <div class="image-background">
		<img class="Tony-Norton"src="img/Tony-Norton.png" alt="Tony-Norton">
	  </div>
	  <!-- 2) 3 div column rectangle -->
	  <div class="second-content-container">
	  <div class="second-content">
		  <div class="second-content-col-1"><div class="img-p"><img src="img/first.png" alt="first"><p>MuscleMania<br>Universe Natural<br><br><a href="#">view more</a></p></div></div>
		  <div class="second-content-col-2"><div class="img-p"><img src="img/second.png" alt="second"><p>Bodyweight 2-Day Certification<br><br><a href="#">view more</a></p></div></div>
		  <div class="second-content-col-3"><div class="img-p"><img src="img/first.png" alt="first"><p>Accredited Master<br>Trainer<br><br><a href="#">view more</a></p></div></div>
	  </div>
	</div>
<!-- 3) div text --super man program>-->
	<div class="super-man-program-container" id="my-super-man-program-container">
		<div class="super-man-program">
		<p class="text-red">20 MINUTES. 20 DAYS.<br>20 INCHES.†</p>
		<img src="img/3-lines.png" alt="#">
		<p class="super-man-pr">My Super-Man program uses supersets in which exercises for 
			opposing muscle groups are paired together. With SS8, the supersets pair exercises 
			for the same muscle group. This is technically called a “compound set,” a term coined
			 by the late Joe Weider over 50 years ago.</p>
		</div>
	</div>
<!-- 4) video>-->
<div class="video-container" id="my-video-container">
	<div class="border-video">
		<video controls>
			<source src="video/videoplayback.mp4" type="video/mp4">
				<source src="movie.ogg" type="video/ogg">
			  Your browser does not support the video tag.
	</video>
   </div>
</div>
<!-- 5)red content -->

	<div class="red-main-container">
					<p class="white-text">Discover how real science is applied to training programs, nutrition plans 
							and supplementation to get you to your goals as quickly as possible</p>
					<p class="red" id="myred">GET STARTED!</p>

<!-- SINGN UP FORM -->
<!-- <div class="modal-container" id="mymodal">
			<form class="modal-content" metod="POST" action="register.php">
				<div class="form-container">
				 <label for="username">Username</label>
                 <input type="text" name="username">
                 
				 <label for="email">Email</label>
                 <input type="text" name="password1">

                 <label for="password">Password</label>
                 <input type="password" name="password1">

                 <label for="password-repeat">Repeat your password</label>
                 <input type="password" name="password2">
                 
				 <div class="clearfix">
						<button type="submit" name="submit" class="signupbtn"  style="background-color:#e74c3c;">Sign Up</button>
						<button type="button" class="cancelbtn">Cancel</button>
					</div>
				</div>
			</form>
		</div> -->





<!-- SINGN UP FORM -->
				</div>

	<div class="smoll-text-container">
					<div class="smool-text">
The Harrison twins are International Fitness Models and Personal Trainers. They have been training now for a number of years and have a vast amount of knowledge 
						on diet and training and how to get the best results possible for their clients</div>
			<img class="rings" src="img/two-rings.png" alt="two-rings">
		    <img class="link-icons-image" src="img/link-icons-image.png" alt="link-image">
</div>
<!-- 6)4-ring-plus-container -->
<div class="four-ring-plus-container">
	
	<div class="ring-plus-content">
		<img src="img/ring_plus.png" alt="ring_plus">
		<p>Why a high protein diet of 1.5g per pound of bodyweight has significant muscle 
			building and weight loss benefits without any harmful effects.</p>
		</div>
		
		<div class="ring-plus-content">
		<img src="img/ring_plus.png" alt="ring_plus">
	     <p>Your body is smart. Eventually, it will adapt to the stress of whatever training you are using and stop responding. Your 3 sets of 10 reps might work fine initially, but they won’t work forever. Your training needs to be smarter than your body. My programs are designed to keep the body stressed and 
				responding, so you will keep getting results.</p>
			</div>
		
		<div class="ring-plus-content">
		<img src="img/ring_plus.png" alt="ring_plus">
		<p>Why my supplement company, JYM Supplement Science forced the industry to change. Ending common
			 practices like protein spiking, prop formulas, and concentrated formulas.</p>
		    </div>
		<div class="ring-plus-content">
		<img src="img/ring_plus.png" alt="ring_plus">
		<p>And much, much more that you can discover when you take your free 7 day trial
			 membership as well as the app included with your membership.</p>
			</div>
	</div>

</div>
<!-- 7)4-rigth section -->
<section class="red-container" id="my-red-container">
	<div class="row-one">20 Minute Body is more than just workouts, 
			it’s mind over body and finding your</div>
	<div class="row-two">FITNESS FROM WITHIN.</div>
	<div class="row-tree">
		<p class="right-left">Lose Fat</p>
		<div class="border"></div>
		<p class="middle">Gain Strength</p>
		<div class="border"></div>
		<p class="right-left">Build Muscle</p>
	</div>
	<div class="row-four">If you’re looking to burn some serious fat and you’re not afraid of a little intensity, you’ve come to the right program. Super Shredded 8 (“SS8” for short) is an 8-week get-lean plan based mainly on supersets – 
		but it’s so much more than that. If I had to sum up what Super Shredded 8 is, I would say it's a combination of my Show Time, 1-2-3 Lean and Un-Rested Development programs. That’s quite a hybrid, huh?<br>
<br>
			My Super-Man program uses supersets in which exercises for opposing muscle
			 groups are paired together. With SS8, the supersets pair exercises for the 
			 same muscle group. This is technically called a “compound set,” a term coined 
			 by the late Joe Weider over 50 years ago. But nowadays, the lifting community basically
			  calls any pairing of two exercises with no rest in between a superset, so I’ll stick 
			  with the more modern verbiage.  </div>
</section>
<!-- 8)4-# rules>-->
<!-- <div class="panel-container"> -->
<div class="panel-content-1-3-row" id="batton-one"> 
		<div class="accordion btn-1">Rule #1: Eat A LOT of <span>Protein</span></div>
	<div class="panel n-1">
			<p>My Super-Man program uses supersets in which exercises for opposing muscle groups are paired together. With SS8, the supersets pair exercises for the same muscle group. This is technically called a “compound set,” a term coined by the late Joe Weider over 50 years ago. But nowadays, the lifting community basically calls any pairing of two exercises with
				 no rest in between a superset, so I’ll stick with the more modern verbiage.  </p>
	</div>
</div>

<div class="panel-content-2-row">
	<div class="accordion btn-2">Rule #2: Eat <span>Frequently</span></div>
	<div class="panel n-2">
			<p>My Super-Man program uses supersets in which exercises for opposing muscle groups are paired together. With SS8, the supersets pair exercises for the same muscle group. This is technically called a “compound set,” a term coined by the late Joe Weider over 50 years ago. But nowadays, the lifting community basically calls any pairing of two exercises with
				 no rest in between a superset, so I’ll stick with the more modern verbiage.  </p>
	</div>
</div>
	<div class="panel-content-1-3-row">
	<div class="accordion btn-3">Rule #3: Get Ample <span>Fats</span></div>
	<div class="panel n-3">
			<p>My Super-Man program uses supersets in which exercises for opposing muscle groups are paired together. With SS8, the supersets pair exercises for the same muscle group. This is technically called a “compound set,” a term coined by the late Joe Weider over 50 years ago. But nowadays, the lifting community basically calls any pairing of two exercises with 
				no rest in between a superset, so I’ll stick with the more modern verbiage.  </p>
	</div>
</div>


<!-- 9)footer -->
<footer class="footer">
	<!-- <div class="footer-content"> -->
			<div class="footer-h3">
					<h3>Contact terms and conditions privacy policy help</h3>
				</div>
	<div class="footer-p">
	<!-- </div> -->
		<p>Copyright @ 2018. All rights reserved.| Site by Themexpert</p>
	</div>
</footer>







<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="JS/script.js"></script>


	



</body>
</html>		















