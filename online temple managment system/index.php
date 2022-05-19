<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Page</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<style>

body{

background-image:url("img/back.jpg");

}
.footer{
background-color:#fcb900;
width:100%;

}
.header{
background-color:#fcb900;
width:100%;

}
.copyrights{
width:100%;
color:black;

}
h3{
font-size:20px;
color:#dc3545;
}
#icon{
margin-left:24%;
margin-bottom:12px;
margin-top:10px;
}
li a{
text-transform:uppercase;
font-weight:bold;


}
ul{

background-color:#fcb900;
}

</style>

</head>
<body>


<div class="header">
			<div class="container">
					<div class="row">

						<div class="col-lg-6">
								<img src="img/icon.png" width="70" height="70" id="icon" class="rounded" border="0" alt="">
								<h3>Online Temple Management System</h3>
						</div>

						<div class="col-lg-6">
								<input type="submit" value="New Users" style="margin-left:70%;margin-top:10%;color:white;" class="btn btn-outline-danger"/>
						</div>

						</div>


					</div>
			</div>
</div>










<!-- nav bar -->

<div id="nav1" >

<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" style="color:white;"aria-current="page" href="index.php">Home</a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" style="color:white;"href="ourfestivals.php">Our Festivals</a>
  </li>
<li class="nav-item">
    <a class="nav-link" style="color:white;"href="temple.php">Temple</a>
  </li>
<li class="nav-item">
    <a class="nav-link" style="color:white;" href="contact.php">Contact Us</a>
  </li>
 <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" style="color:white;"data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Login</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="login.php">User Login</a></li>
      
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="adminlogin.php">Admin login</a></li>
    </ul>
  </li>
  
</ul>
</div>



<!-- slide show -->



<div class="container" style="margin-top:6px;">

	<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/slide1.jpg" width="1700" height="500" alt="Los Angeles" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="img/slide2.jpg" width="1700" height="500"alt="Chicago" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="img/slide3.jpg" width="1700" height="500"alt="New York" class="d-block w-100">
    </div>
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>


<div class="row" style="margin-top:30px;">

<div class="col-lg-6">
<h2 style="text-align:center;">About Us</h2>
<p style="text-align:justify;margin-top:10px;">On the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they also coordinate with your current document look.
You can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.
To change the overall look of your document,to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they also coordinate with your current document look.
You can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.
</p>
</div>

<div class="col-lg-6">

<img src="img/about.png"  style="margin-top:40px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"class="img-thumbnail rounded mx-auto d-block"width="450" height="400" border="0" alt="">
</div>

</div>




<hr>
<h1 style="text-align:center;color:#dc3545;"> GALLARY </h1>

<div class="row" style="margin-top:20px;">
	<div class="col-lg-4">
      <img src="img/p1.jpg" class="img-thumbnail"width="300" height="200" border="0" alt="">
	</div>
	<div class="col-lg-4">
<img src="img/p2.jpg" class="img-thumbnail"width="300" height="200" border="0" alt="">
		</div>
	<div class="col-lg-4">
<img src="img/p3.jpg"class="img-thumbnail" width="300" height="200" border="0" alt="">
		</div>

</div>
<div class="row" style="margin-top:20px;">
	<div class="col-lg-4">
      <img src="img/p4.jpg" class="img-thumbnail"width="300" height="200" border="0" alt="">
	</div>
	<div class="col-lg-4">
<img src="img/p5.jpg" class="img-thumbnail"width="300" height="200" border="0" alt="">
		</div>
	<div class="col-lg-4">
<img src="img/p6.jpg"class="img-thumbnail" width="300" height="200" border="0" alt="">
		</div>

</div>



</div>

<HR>



<div class="footer" style="margin-top:20px;">
		
<div class="container"style="margin-top:20px;">
		<div class="row"style="margin-top:20px;">

					
                 
<!-- first part-->
				<div class="col-lg-6"style="margin-top:25px;">

                 <h3>OUR LOCATION</H3>
			<P>
<PRE>
Address Tirumala Tirupati Devasthanams

TTD Administrative Building K.T. 

Road Tirupati 517 501. 

Andhra Pradesh India. 

Phone Numbers for call Centre (24/7)
</PRE>
			</P>

				</div>
 
<!-- second part-->
				<div class="col-lg-6">

<div class="row">


<div class="col-lg-6"style="margin-top:25px;">

<h3> OUR TEMPLE </H3>
<ul>
<li> HOME </li>
<li> OUR FESTIVALS </li>
<li> TEMPLE </li>
<li> CONTACT US  </li>
<li> LOGIN </li>


</ul>
</div>



<div class="col-lg-6"style="margin-top:25px;">

<h3> GET CONNECTE </H3>

<i class="fa fa-facebook-square fa-lg" style="margin-right:10px;"></i>Facebook <br>
<i class="fa fa-twitter fa-lg"style="margin-right:10px;"></i>Twitter<br>

<i class="fa fa-youtube fa-lg"style="margin-right:10px;"></i>YouTube<br>



<i class="fa fa-instagram fa-lg"style="margin-right:10px;"></i>Instagram


</ul>
</div>


</div>





				</div>
 



		</div>
</div>

</div>
<div class="copyrights" style="background-color:black;">

<p style="text-align:center;color:white;"> <i class="fa fa-copyright"></i> copy rights 2021-2022</p>
</div>
</div>

</body>
</html>