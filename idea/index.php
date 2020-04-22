<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
?>



<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Online courses</title>
  
  
 
  <style>
  
  *
{
  margin: 0;
  padding: 0;
}
body
{
  background-color: blue;
  font-family: sans-serif;
}
#nav-bar
{
  position: sticky;
  
 top: 0;
  z-index: 10;
}
.navbar
{
  /*  background-image: linear-gradient( grey,black,white,pink,green);*/
 background-image: linear-gradient( to bottom left,#cc99ff,#330066,#26004d,#52143d,#66194d);
  padding: 0 !important;
}
.navbar-nav li
{
  padding: 0 10px;
}
.navbar-nav li a
{
  color: #fff !important;
  font-weight: 600;
  float: right;
  text-align: left;
}
.fa-bars
{
  color:#fff;
  font-size: 30px !important;
}
.navbar-toggler
{
  outline: none !important;
}
.navbar-brand
{
  color: white;
  font-size: 30px !important;
}






/*---------second section-----*/

#nav-bar2
{
 
  position: static;
  top: -50;
  z-index: 10;
  height: 200px;
  width:150px;
}
.navbar2
{
  position: sticky;
 height: 1080px;
 width:150px;
  background-image: linear-gradient( #99003d, #26004d,#7a1f5c);
  /*background-image: linear-gradient( grey,black);*/
  padding: 0 !important;

}
.navbar-nav2
{
 position: sticky;
    list-style-type: none;
}
.navbar-nav2 li
{
  padding: 0 10px;
}
.navbar-nav2 li a
{

  color: #fff !important;
  font-weight: 600;

  text-align: center;
  
}


.navbar-brand2
{
  color: black;
  font-size: 25px !important;

}




/*-------3rdsection---*/
#nav-bar3
{
 
  position: static;

  z-index: 10;
  height:;
  width:150px;
  float:right;
}
.navbar3
{
top:500px;
  position: absolute;
 height: 1080px;
 width:150px;
  background-image: linear-gradient( #99003d, #26004d,#7a1f5c);
  /*background-image: linear-gradient( grey,black);*/
  padding: 0 !important;

}
.navbar-nav3
{
 position: sticky;
    list-style-type: none;
}
.navbar-nav3 li
{
  padding: 0 10px;
}
.navbar-nav3 li a
{

  color: #fff !important;
  font-weight: 600;

  text-align: center;
}


.navbar-brand3
{
  color: black;
  font-size: 25px !important;

}













/*-------divedit----*/
.divedit{
  border: 2px solid red;
  margin-left:300px ;
  margin-top:-100px;
  height: 200px;
  width: 1000px;
  
  border-radius: 10px;
  color: white;
}

.divedit1{

  margin-left:300px ;
  margin-top:-100px;
  height:220px;
  width:200px;
  
  background-color: white;
}



.divedit2{

  margin-left:300px ;
  margin-top:-220px;
  height:220px;
  width:200px;
  position:absolute;
  right:40%;
  background-color: white;
}

.divedit3{

  margin-left:300px ;
  margin-top:-220px;
  height:220px;
  width:200px;
  position:absolute;
  right:15%;
  background-color: white;
}


.divedit4{

  margin-left:300px ;
  margin-top:-100px;
  height:220px;
  width:200px;
  position:absolute;
   bottom:-120px;
  background-color: white;
}


.divedit5{

  margin-left:300px ;
  margin-top:-220px;
  height:220px;
  width:200px;
  position:absolute;
  right:40%;
  bottom:-120px;
  background-color: white;
}




.divedit6{

  margin-left:300px ;
  margin-top:-220px;
  height:220px;
  width:200px;
  position:absolute;
  right:15%;
  bottom:-120px;
  background-color: white;
}

.divedit7{

  margin-left:300px ;
  margin-top:-100px;
  height:220px;
  width:200px;
  position:absolute;
   bottom:-420px;
  background-color: white;
}

.divedit8{

  margin-left:300px ;
  margin-top:-220px;
  height:220px;
  width:200px;
  position:absolute;
  right:40%;
  bottom:-420px;
  background-color: white;
}
.divedit9{

  margin-left:300px ;
  margin-top:-220px;
  height:220px;
  width:200px;
  position:absolute;
  right:15%;
  bottom:-420px;
  background-color: white;
}

.divedit10{

  margin-left:300px ;
  margin-top:-100px;
  height:220px;
  width:200px;
  position:absolute;
   bottom:-720px;
  background-color: white;
}

.divedit11{

  margin-left:300px ;
  margin-top:-220px;
  height:220px;
  width:200px;
  position:absolute;
  right:40%;
  bottom:-720px;
  background-color: white;
}
.divedit12{

  margin-left:300px ;
  margin-top:-220px;
  height:220px;
  width:200px;
  position:absolute;
  right:15%;
  bottom:-720px;
  background-color: white;
}







/*--------------image----*/


  body	{
  background:url(img/idea2.jpg) top right no-repeat;
   background-attachment:fixed;
   background-repeat: no-repeat;
   background-size: cover;

 }

#left-border
{

}

.left-border-div ul1 li
{
  list-style-type: none;
   border: 2px solid white;
   height:200px;
   width: 150px;
}
.left-border-div ul1 li ul2 li
{
    display:block;
    padding:15px;
}
.left-border-div ul1 li ul2 li a
{
  text-decoration: none;
}





.new ul{
 list-style-type:none;

}
.new ul li{
position:sticky;
margin-right:100px;
z-index:10;
display:inline;

}
.new ul li a{
text-decoration:none;
color:white ;
font-family:sans-serif

}
  .new1{
 background-image:
        linear-gradient(-45deg,#fcad03,#b59551,#968154);
   padding: 0 !important;
   width:100%;
   height:100%;
  }
  
  
  
  
 .logo {
  border-radius: 10%;
  padding:5px;
}










#about {
  font-family: Arial, Helvetica, sans-serif;
 position:relative;
 bottom:-1080px;
   background-color: #474e5d;
   border-radius: 23%;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
  margin-left:70px;

}
.column2 {
  float:right ;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
  margin-left:250px;

}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
  
}



.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
   
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
























  </style>
  
  
  
  
  
    <title>idea</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
  
  
  
  

  
  
  
  
  
  
  
  
  	<section class="new1">
 <marquee direction="left" height="" width=""  bgcolor=" #4e495c"; style="color:white; font-family:sans-serif ">Trending Online Courses☟</marquee>  
<marquee direction="left" height="" width="" bgcolor="" onmouseover="stop()" onmouseout="start()" >
  <div class="new" >
    <ul >
      <li >
        <a  href="https://www.udemy.com/course/machinelearning/learn/lecture/14750910?start=1#overview">ML</a>
      </li>
      <li >
        <a href="https://www.edx.org/course/artificial-intelligence-ai">AI</a>
      </li>
      <li >
        <a  href="https://www.edx.org/course/introduction-to-cybersecurity">Cs</a>
      </li>
    </ul>

  </div>
  </marquee> 
  </section>
  
  
  
  
  
  
  
  
  
  
  
 

    <section id="nav-bar">
      <nav class="navbar navbar-expand-lg navbar-light">
  <img src="img/logo.jpg" height="55px" width="55px" class="logo">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
  aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars"></i>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">ABOUT US</a>
		
		
		<?php


if(isset($_SESSION['username'])) {
echo '	
	     <li class="nav-item">
        <a class="nav-link" href="index.php? logout=`1` " >LOGOUT</a>
      </li> ';
	
}
	
	
else {
	
	echo   ' 
	        <li class="nav-item">
        <a class="nav-link" href="login.php">LOGIN</a>
      </li>';
      echo '<li class="nav-itemnav-item">
        <a class="nav-link" href="register.php">SIGNUP</a>
      </li>' ;
	  
}
?>
	  
    </ul>
  

  </div>
</nav>
    </section>






  
 <section id="nav-bar2">
      <nav class="navbar2 navbar-expand-lg navbar-light">
    <span class="navbar-brand2" >Best books to refer</span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav2"
    aria-controls="navbarNav2" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav2">
    <ul class="navbar-nav2 ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="https://courses.csail.mit.edu/6.034f/ai3/rest.pdf">AI</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.cs.ubbcluj.ro/~gabis/ml/ml-books/McGrawHill%20-%20Machine%20Learning%20-Tom%20Mitchell.pdf">ML</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://www.uou.ac.in/sites/default/files/slm/Introduction-cyber-security.pdf">Cyber security</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.cs.utah.edu/~hari/teaching/bigdata/book96-Dongarra-MPI.The.Complete.Reference.pdf">MPI</a>
      </li>
    </ul>

    </div>
    </nav>
	
	
	
	
	
	
	
	 <section id="nav-bar3">
      <nav class="navbar3 navbar-expand-lg navbar-light">
    <span class="navbar-brand3" >certification courses</span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav2"
    aria-controls="navbarNav3" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav3">
    <ul class="navbar-nav3 ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="https://www.udemy.com/course/machinelearning/learn/lecture/14750910?start=1#overview">ML</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.edx.org/course/artificial-intelligence-ai">AI</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.edx.org/course/html5-and-css-fundamentals">W&IT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.edx.org/course/introduction-to-cybersecurity">Cyber security</a>
      </li>
    </ul>

    </div>
    </nav>
  </section>
	
	
	
  </section>
</html>
































<section>

<h1 style="color:white; margin-left:600px; position:absolute; top:130px;">COURSES</h1>

  <section>
      <div class="divedit1">
       <a href=" https://www.edx.org/course/html5-and-css-fundamentals">
	   <img src="img/hc.jpeg"  width="200" height="200" alt="data science"/ >
	   <br>
	   <p style="text-align:center">HTML & CSS</p> </a>
    </div>



  </section>
  <section>
      <div class="divedit2">
       <a href="https://courses.edx.org/dashboard/programs/ddaa80c5-3cb0-4b6d-ad56-7d67ba9753bf/">
	   <img src="img/aai.JPEG"  width="200" height="200" alt="data science"/ >
	   <br>
	   <p style="text-align:center">APPLIED AI</p> </a>
    </div>



  </section>

  <section>
      <div class="divedit3">
       <a href="https://www.edx.org/course/python-basics-for-data-science">
	   <img src="img/py.jpeg"  width="200" height="200" alt="data science"/ >
	   <br>
	   <p style="text-align:center">BASIC PYTHON</p> </a>
    </div>

<section>
      <div class="divedit4">
       <a href="https://www.edx.org/course/artificial-intelligence-ai">
	   <img src="img/ai.jpeg"  width="200" height="200" alt="data science"/ >
	   <br>
	   <p style="text-align:center">AI</p> </a>
    </div>


  </section>

<section>
      <div class="divedit5">
       <a href="https://courses.edx.org/dashboard/programs/3c32e3e0-b6fe-4ee4-bd4f-210c6339e074/">
	   <img src="img/data1.jpg"  width="200" height="200" alt="data science"/ >
	   <br>
	   <p style="text-align:center">DATA SCIENCE</p> </a>
    </div>


  </section>



<section>
      <div class="divedit6">
       <a href="https://www.edx.org/course/introduction-to-c-3">
	   <img src="img/c++.jpeg"  width="200" height="200" alt="data science"/ >
	   <br>
	   <p style="text-align:center">INTRODUCTION TO C++</p> </a>
    </div>


  </section>

<section>
      <div class="divedit7">
       <a href="https://www.edx.org/course/introduction-to-the-internet-of-things-iot">
	   <img src="img/iot.jpeg"  width="200" height="200" alt="data science"/ >
	   <br>
	   <p style="text-align:center">BASIC IOT</p> </a>
    </div>


  </section>
  
  <section>
      <div class="divedit8">
       <a href="https://www.edx.org/course/introduction-to-cybersecurity">
	   <img src="img/cs.jpeg"  width="200" height="200" alt="data science"/ >
	   <br>
	   <p style="text-align:center">CYBER SECURITY</p> </a>
    </div>


  </section>
  
  
  <section>
      <div class="divedit9">
       <a href="https://www.edx.org/course/developmental-robotics">
	   <img src="img/robot.jpeg"  width="200" height="200" alt="data science"/ >
	   <br>
	   <p style="text-align:center">ROBOT DEVELOPMENT</p> </a>
    </div>


  </section>
  <section>
      <div class="divedit10">
       <a href="https://www.edx.org/course/4g-network-essentials">
	   <img src="img/4g.jpeg"  width="200" height="200" alt="data science"/ >
	   <br>
	   <p style="text-align:center">4G NETWORK ESSENTIAL</p> </a>
    </div>


  </section>
  
    <section>
      <div class="divedit11">
       <a href="https://www.edx.org/course/smart-grids-modeling">
	   <img src="img/sgrid.jpeg"  width="200" height="200" alt="data science"/ >
	   <br>
	   <p style="text-align:center">SMART GRIDS</p> </a>
    </div>


  </section>
  
      <section>
      <div class="divedit12">
       <a href="https://www.edx.org/course/digital-design">
	   <img src="img/dd.jpg"  width="200" height="200" alt="data science"/ >
	   <br>
	   <p style="text-align:center">DIGITAL DESIGNS</p> </a>
    </div>


  </section>

</section>














    <section id="about">



<div class="about-section">
  <h1>About Us Page</h1>
  <p>This website is officially created  in association with csi hackathon team  </p>
  <p></p>
</div>

<h2 style="text-align:center; color:white;">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">

      <div class="container">
        <h2>Devisetty venkata sai Yeswanth</h2>
        <p class="title">developer</p>
        <p>student of Brindavan Institute of technology and science</p>
        <p>devisetty.yeswanth@gmail.com</p>
        <p><button class="button">9059403965</button></p>
      </div>
    </div>
  </div>


  
  <div class="column2">
    <div class="card">
    
      <div class="container">
        <h2>Kuruva vamsee sreeram kumar</h2>
        <p class="title">Developer</p>
        <p>student of Brindavan Institute of technology and science</p>
        <p>vamseesreeramkumar@hotmail.com<p>
        <p><button class="button">8499908290</button></p>
      </div>
    </div>
  </div>
</div>



    </section>
  </body>
</html>
