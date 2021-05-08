<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		
#main{
	background-color: yellow;
	position: absolute;
	top: 50%;
	left:50%;
	transform: translate(-50%,-50%);
	width:600px;
	padding: 30px;
	box-sizing: border-box;
	border-radius: 10px;
	box-shadow:0 15px 50px rgba(0,0,0,.2);
	/*background-color: #e5e4d7;
	margin-left: 10px;
	margin-right: 320px;
	margin-bottom: 10px;
	margin-top:10px;
	border-radius: 5px;
	padding: 20px;
	font-size: 110%;*/
}
#main2{
	width: 120px;
	height: 145px;
	background: url(img/1234.jpg);
	border-radius: 50%;
	float:left;
	shape-outside:square();
	margin: 50px 30px 30px 0; 
	box-shadow: 0 0 15px #999999;

}
p{
	margin:25px;
	padding: 5px;
	text-align: justify;
	line-height: 22px;
}
h1{
	margin: 0 0 20px;
	padding: 0;
	font-size: 30px;
}
.social-menu ul {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 0;
    margin-top: 150px;
    display: flex;
}
.social-menu ul li {
    list-style: none;
    margin: 0 10px;
}
.social-menu ul li .fa {
    color: #000000;
    font-size: 25px;
    line-height: 50px;
    transition: .5s;
}
.social-menu ul li .fa:hover {
    color: #ffffff;
}
.social-menu ul li a {
    position: relative;
    display: block;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: pink;
    text-align: center;
    transition: 0.5s;
    transform: translate(0,0px);
    box-shadow: 0px 7px 5px rgba(0, 0, 0, 0.5);
}
.social-menu ul li a:hover {
    transform: rotate(0deg) skew(0deg) translate(0, -10px);
}
.social-menu ul li:nth-child(1) a:hover {
background-color:#f5f105;
background-image: linear-gradient(315deg, #f5f105 0%, #bbdbbe 74%);}
.social-menu ul li:nth-child(2) a:hover {
background-color: #f5f105;
background-image: linear-gradient(315deg, #f5f105 0%, #bbdbbe 74%);}
.social-menu ul li:nth-child(3) a:hover {
background-color: #f5f105;
background-image: linear-gradient(315deg, #f5f105 0%, #bbdbbe 74%);}

img{margin-top: 9px; 
 } 
 .nv ul{
 	float:right;
			list-style-type: none;
			margin-top: 25px;
			margin-right: 100px;
 }
 .nv ul li{
display:inline-block;
 }
 .nv ul li a{
 text-decoration: none;
			padding:5px 10px;
			border:1px solid black;
			border-width: 2px;
			transition: 0.6s ease;
			position: relative;
		    display: inline-block;
		    padding: 12px 36px;
		    margin: 10px 0;
		    text-decoration: none;
		    text-transform: uppercase;
		    font-size: 18px;
		    letter-spacing: 2px;
		    border-radius: 7px;
		    color: white;
		    
    
 }
 .nv ul li a:hover{
 	color: orange;
 	background-color: #9dc5c3;
    background-image: linear-gradient(315deg, #9dc5c3 0%, #5e5c5c 74%);
		}

	</style>
	<title>myself</title>
 
 
</head>
<body style="background-color:black">
	<div  class="nv">
	<ul >
				<li class="active"><a  href="index.php" >Home</a></li> </ul></div>
	
			<div id="main">
				<div id="main2"></div>
				<h2> Mr Raunit Singh</h2>
				<!--img id="image2" src="C:\xampp\htdocs\banking\raunit\img\1234.jpg" align="left"-->


			    <p> I am an intern in sparks foudation.I have knowledge of different
programming languages like java , python , c. I know HTML,CSS,javascript,sql.
			
			<br>I am preparing for SDE roles for that I am learning data structures, algorithms
			I am making this website as task 1 given by sparks foudation.
			This gave me a best experience in making
			website.


			    <br>

				<center><h3 style="margin-top:-25px;">Get in touch with me</h3></center>
				<center><h3 style="margin-top:-15px;">tap to follow</h3></center>
			  </p>

			</div>
<div class="social-menu">
  <ul>
    <li><a href=""><i class="fa fa-facebook"><img src="img/fb.png"></i></a></li>
    <li><a href=""><i class="fa fa-twitter"><img src="img/youtube.png"></i></a></li>
    <li><a href=""><i class="fa fa-instagram"><img src="img/twitter.png"></i></a></li>
    
  </ul>
</div>





</body>
</html>