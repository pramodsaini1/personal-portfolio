<?php
if(!isset($_COOKIE["login"])){
    header("location:login_portfolio.php");
  }
else{
	$email= $_COOKIE["login"];
	$conn=mysqli_connect("localhost","root","","university");
	$rs=mysqli_query($conn,"select * from cet where email='$email'");
	if($r=mysqli_fetch_array($rs)){
?>
<!DOCTYPE html>
<html>
<title>MY PORTFOLIO WEBSITE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
. p {
     color: brown ;
	 font-size : 40px ;
	 }
.fa:hover {
    opacity: 0.7;
}
.lesson-icon {
  position: relative;
}


/* Add CSS for <p> tags inside lesson-icon */
.lesson-icon p {
  position: absolute;
  top: 90px;
  width: 100%;
  color: white;
}
.fa-facebook {
  background-color: #3b5998;
  margin-right: 10px;
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
}

.fa-twitter {
  background-color: #55acee;
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
}
.fa-linkedin {
  background: #007bb5;
  color: white;
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
}
.fa-instagram {
  background: #125688;
  color: white;
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
}


/* Add CSS for txt-contents */
.txt-contents {
  width: 80%;
  display: inline-block;
  margin-top: 20px;
  font-size: 15px;
  color: #b3aeb5;
}	 
</style>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <img src="image/Portfolio.jpg" style="width:100%">
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>ABOUT</p>
  </a>
  <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>CERTIFICATE</p>
  </a>
  <a href="#education" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-glass w3-xxlarge"></i>
    <p>EDUCATION</p>
  </a>
   <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>CONTACT</p>
  </a>
</nav>
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
    <a href="#certificate" class="w3-bar-item w3-button" style="width:25% !important">CERTIFICATE</a>
	<a href="#education" class="w3-bar-item w3-button" style="width:25% !important">EDUCATION</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
  </div>
</div>
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
  <h1 class="w3-jumbo"><span class="w3-hide-small">~ Hello World ~</span> </h1>
    <h1 class="w3-jumbo"><span class="w3-hide-small">I'm</span> Pramod Kumar Saini</h1>
    <p>WEB DEVELOPER AND COMPETITIVE PROGRAMMER</p>
    <img src="image/pramod.jpeg" alt="boy" class="w3-image" class="img-thumbnail"width="992" height="1108">
  </header>
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h2 class="w3-text-light-grey">ABOUT</h2>
    <hr style="width:200px" class="w3-opacity">
	<p>I am an undergraduate year student currently a Bachelors' course in computer science and Engineering at GOVERNMENT ENGINEERING COLLEGE BIKANER . I am always energetic and hardworking and to learn new skills . I can also call myself hardworking because whatever I do.
<br>Programing Language :: C , C++ ;</br><br>
WEB DEVELOPMENT :: HTML , CSS, JAVASCRIPT , BOOTSTRAP , JQUERY ;</br>
<br>DATA STRUCTURE AND ALGO </p></br>
<h3 class="w3-padding-16 w3-text-light-grey">My Skills</h3>
    <p class="w3-wide">HTML</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:95%"></div>
    </div>
    <p class="w3-wide">CSS</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:85%"></div>
    </div>
    <p class="w3-wide">JAVASCRIPT</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:80%"></div>
     </div>
	 <p class="w3-wide">JQUERY</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:80%"></div>
     </div>
	<p class="w3-wide">BOOTSTRAP</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:65%"></div>
    </div>
	<p class="w3-wide">DATA STRUCTURE AND ALGO</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:95%"></div>
    </div>
	<p class="w3-wide">C AND C++ Programing Language</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:98%"></div>
    </div>
    </div><br>
	<div class="w3-padding-64 w3-content" >
    <hr style="width:200px" class="w3-opacity">
	 <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-third">
        <img src="image/ruby.png" style="width:50%">
		<p> HYPERTEXT LANGUAGE</p>
        <img src="image/jQuery.png" style="width:50%">
		<p>  CASCADING STYLE</p>
		<img src="image/html.png" style="width:50%">
		<p> DATA STRUCTURE </p>
      </div>

      <div class="w3-third">
        <img src="image/html.png" style="width:50%">
		<p> JAVASCRIPT </p>
		<img src="image/ruby.png" style="width:50%">
		<p> JQUERY </p>
		 <img src="image/jQuery.png" style="width:50%">
		<p>  BOOTSTRAP</p>
      </div>
	  <div class="w3-third">
        <img src="image/html.png" style="width:50%">
		<p> C & C++ Programing  </p>
		<img src="image/ruby.png" style="width:50%">
		<p> AlGORITHM</p>
		 <img src="image/jQuery.png" style="width:50%">
		<p>  REACT AND NODE JS</p>
      </div>
    <!-- End photo grid -->
    </div>
  <!-- End Portfolio Section -->
  </div>
	<div class="w3-row w3-center w3-padding-16 w3-section w3-light-grey">
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">11+</span><br>
        Partners
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">3</span><br>
        Projects Done
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">89+</span><br>
        Happy Clients
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">150+</span><br>
        Meetings
      </div>
    </div>
	 <button class="w3-button w3-light-grey w3-padding-large w3-section">
      <i class="fa fa-download"></i> Download Resume
    </button>
    
    <!-- Grid for pricing tables -->
    <h3 class="w3-padding-16 w3-text-light-grey">My Price</h3>
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half w3-margin-bottom">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-dark-grey w3-xlarge w3-padding-32">Basic</li>
          <li class="w3-padding-16">HTML</li>
          <li class="w3-padding-16">CSS</li>
		  <li class="w3-padding-16">JAVASCRIPT</li>
		  <li class="w3-padding-16">JQUERY</li>
		  <li class="w3-padding-16">BOOTSTRAP</li>
          <li class="w3-padding-16">5GB Storage</li>
          <li class="w3-padding-16">Mail Support</li>
          <li class="w3-padding-16">
            <h2>$ 10</h2>
            <span class="w3-opacity">per month</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-white w3-padding-large w3-hover-black">Sign Up</button>
          </li>
        </ul>
      </div>
	   <div class="w3-half">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-dark-grey w3-xlarge w3-padding-32">Pro</li>
          <li class="w3-padding-16">HTML</li>
          <li class="w3-padding-16">CSS</li>
		  <li class="w3-padding-16">JAVASCRIPT</li>
		  <li class="w3-padding-16">JQUERY</li>
		  <li class="w3-padding-16">BOOTSTRAP</li>
          <li class="w3-padding-16">50GB Storage</li>
          <li class="w3-padding-16">Endless Support</li>
          <li class="w3-padding-16">
            <h2>$ 25</h2>
            <span class="w3-opacity">per month</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-white w3-padding-large w3-hover-black">Sign Up</button>
          </li>
        </ul>
      </div>
    <!-- End Grid/Pricing tables -->
    </div>
	 <h3 class="w3-padding-24 w3-text-light-grey">My Reputation</h3>  
    <img src="image/pramod.jpeg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:80px">
    <p><span class="w3-large w3-margin-right">Pramod Saini</span> WEB DEVELOPER.</p>
    <p>Pramod Saini .</p><br>
    
    <img src="image/pramod.jpeg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:80px">
    <p><span class="w3-large w3-margin-right">Pramod Saini.</span> Student  at Engineering COLLEGE.</p>
    <p>No one is better than Pramod.</p>
  <!-- End About Section -->
  </div>
  
  <!-- Portfolio Section -->
  <div class="w3-padding-64 w3-content" id="photos">
    <h2 class="w3-text-light-grey">MY CERTIFICATE</h2>
    <hr style="width:200px" class="w3-opacity">
	 <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half">
        <img src="image/HTML.jpg" style="width:100%">
        <img src="image/CSS udemy certificate.jpg" style="width:100%">
        <img src="image/JAVASCRIPT udemy certificate.jpg" style="width:100%">
		 <img src="image/HTML & CSS.png" style="width:100%">
      </div>

      <div class="w3-half">
        <img src="image/JQUERY udemy certificate.jpg" style="width:100%">
		<img src="image/BOOTSTRAP udemy certificate.jpg" style="width:100%">
        <img src="image/photoshop certificate.jpg" style="width:100%">
      </div>
    <!-- End photo grid -->
    </div>
  <!-- End Portfolio Section -->
  </div>
  <div class="w3-padding-64 w3-content" id="education">
    <h2 class="w3-text-light-grey">EDUCATION</h2>
    <hr style="width:200px" class="w3-opacity">
	 <div class="w3-row-padding" style="margin:0 -16px">
      <div >
	  <h1 class="w3-text-light-grey">.☛ BTECH IN COMPUTER SCIENCE <h1><br>
	  <h2> .GOVERNMENT ENGINEERING COLLEGE BIKANER </h2>
	  <h3> . Session : 2019-2023 </h3><br>
	  <h4> .Semester's SGPA : 1st - 7.73,2nd - 9.17 </h4><br><br>
	  </div>
	  <div >
	  <h1 class="w3-text-light-grey"> ☛ SECONDARY EDUCATION(12th) </h1><br>
	  <h2> GUDHA PUBLIC SENIOR SCONDARY SCHOOL </h2>
	  <h3> Session : 2017 - 2018 </h3><br>
	  <h4> Passing Year - 2018 : Percentage : 86% <h4> <br><br>
	  </div>
	  <div >
	  <h1 class="w3-text-light-grey">☛ SECONDARY EDUCATION(10th) </h1><br>
	  <h2> S.N PUBLIC SCHOOL </h2>
	  <h3> Session : 2015 - 2016 </h3><br>
	  <h4> Passing Year - 2016 : Percentage : 78% <h4> <br><br>
	  </div>
	  </div>
	  </div>
	  <div class="w3-padding-64 w3-content" id="education">
    <h2 class="w3-text-light-grey">HACKERRANK COMPETITIVE CODING PLATFORM</h2>
    <hr style="width:200px" class="w3-opacity">
	 <div class="w3-row-padding" style="margin:0 -16px">
	  <div class="w3-third">
	    <img src = "image/5 star.jpg" style = "width:100%">
		<p> C PROGRAMMING LANGUAGE </p>
		 <img src = "image/5 star.jpg" style = "width:100%">
		<p> 30 DAYS OF CODE </p>
		
	  </div>
	  <div class="w3-third">
	    <img src = "image/5 star.jpg" style = "width:100%">
		<p> C++ PROGRAMMING LANGUAGE </p>
		 <img src = "image/5 star.jpg" style = "width:100%">
		<p> MATHEMATICS PROBLEM </p>
	  </div>
	  <div class="w3-third">
	    <img src = "image/5 star.jpg" style = "width:100%">
		<p> PROBLEM SOLVING (DATA STRUCTURE)</p>
		 <img src = "image/5 star.jpg" style = "width:100%">
		<p> ALGORITHM PROBLEM </p>
	  </div>
	  <p class="w3-medium"><a href="https://www.hackerrank.com/pramodsaini25061" target="_blank" class="w3-hover-text-green"  ><i class='fas fa-hand-pointer' style='font-size:48px;color:red'>HACKERRANK PROFILE </i></a></p>
	  </div>
	  </div>
	
	  
	 
 <div class="w3-padding-64 w3-content" id="Blog">
    <h2 class="w3-text-light-grey">MY BLOG</h2>
    <hr style="width:200px" class="w3-opacity">
	 <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half">
        <img src="image/company.jpg" style="width:100%">
		<p>  Company Website </p>
        <img src="image/clinic.jpg" style="width:100%">
		<p>  Clinic Website </p>
        <img src="image/resume.jpg" style="width:100%">
		<p>  Resume Website </p>
		<img src="image/school.jpg" style="width:100%">
		<p>  School Website </p>
      </div>

      <div class="w3-half">
        <img src="image/library.jpg" style="width:100%">
		<p>  Library Website </p>
        <img src="image/institute.jpg" style="width:100%">
		<p>  Institute Website </p>
		<img src="image/lawyer.jpg" style="width:100%">
		<p>  Lawyer Website </p>
		<img src="image/courier.jpg" style="width:100%">
		<p>  Courier Website </p>
      </div>
    <!-- End photo grid -->
    </div>
  <!-- End Portfolio Section -->
  </div>
	
<div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-light-grey">  Contact Me</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Karni Industrial Area, Pugal Road, Bikaner, Rajasthan 334004
</p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: +91-8905648522</p>
      <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: pramodsaini25062000@mail.com</p>
    </div><br>
    <p>Let's get in touch. Send me a message:</p>

    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="Subject"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message"></p>
      <p>
        <button class="w3-button w3-light-grey w3-padding-large" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form>
  <!-- End Contact Section -->
  </div>
  
    <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
  <center>
   <a href="https://www.linkedin.com/in/pramod-saini-98813b1b4/" class="fa fa-linkedin"></a>
   <a href="https://www.instagram.com/pramodkumarsaini12/" class="fa fa-instagram"></a>
   <a href="https://www.facebook.com/profile.php?id=100060203576938" class="fa fa-facebook"></a>
<a href="https://twitter.com/PramodK82377407" class="fa fa-twitter"></a></br>
   <center><p class="w3-medium">Powered by  <br><br>Terms And Condition  Privacy Policy </br></br><a href="https://gecbinstitute.skillhoard.com/index.php" target="_blank" class="w3-hover-text-green"  ><br><br><br>gecbinstitute.Skillhoard © 2020 </br></br></br></a></p><br/>
  <!-- End footer -->
  <center> © copy 2020 <br/>
  <a href = "#"> Terms OF Service </a>
  </footer>

<!-- END PAGE CONTENT -->
</div>

</body>
</html>
<?php
}
  else{
	  header("location:logout.php");
  }
}
?>
