<!DOCTYPE html>
<html lang="en">
<head>
  <title>The Group Lasso</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body{
	  background-color:#EAFBF2;
  }
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
	.navbar-brand {
  padding: 0px; /* firefox bug fix */
}
.img{
	
}
.h,.p1{
	text-align:center;
	
}
.p1{
	line-height:2em;
	font-size:17pt;
}
.h{
	font-size:29pt;
	
}
.h1{text-align:left;}
	.p{
		text-align:justify;
		font-family:cursive;
		line-height:2em;
		font-size:17pt;
	}
.navbar-brand>img {
  height: 100px;
  padding-top:-2px;
  padding-bottom: 25px;
  padding-right:15px;
   /* firefox bug fix */
  width: 100px;
}
#welcome{
	  align:center;
	  margin-top:0px;
	  font-size:30pt;
	  padding-top:0px;
	  font-family:cursive;
	  animation-duration: 2.5s;
  animation-name: slidein;
  animation-iteration-count:infinite;
  
  }
  @keyframes slidein {
  from {
    color:#FF33FC;
  }
  
  to {
   color:#3FFF33;
  }
}

    .carousel-inner img {
      width: 100%; /* Set width to 100% */
      min-height: 200px;
    }
	.padd{margin-top:100px;}
	 .navbar {
      padding-top: 15px;
      padding-bottom: 30px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 15px;
      letter-spacing: 5px;
  }

    /* Hide the carousel text when the screen is less than 600 pixels wide */
    @media (max-width: 600px) {
      .carousel-caption {
        display: none; 
      }
    }
  </style>
</head>
<body>

<?php
//include 'includes/nav.php';
require( dirname( __FILE__ ) . '/includes/nav.php' );
?>

<div class="container padd">
<div class="row">
  <div class="col-sm-12">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="http://ectmobile.com/media/it%20photo.jpg" style="width:100%; height:320px; " alt="Image">
          <div class="carousel-caption">
            <h3 id = "welcome">Lasso Technologies Ltd</h3>
            <p></p>
          </div>      
        </div>

        <div class="item">
          <img src="images1/cherry_bunch.jpg" style="width:100%; height:320px;" alt="Image">
          <div class="carousel-caption">
            <h3 id = "welcome">Lasso Coffee</h3>
            <p></p>
          </div>      
        </div>
		 <div class="item">
          <img src="http://www.thewp-group.co.uk/res/Wind20Turbine20Wallpaper__yvt2.jpg" style="width:100%; height:320px;" alt="Image">
          <div class="carousel-caption">
            <h3 id = "welcome">Lasso Energy</h3>
            <p></p>
          </div>      
        </div>
		 <div class="item">
          <img src="http://www.rbselectronics.co.uk/images/rbs_main.jpg" style="width:100%; height:320px;" alt="Image">
          <div class="carousel-caption">
            <h3 id = "welcome">Lasso Electronics</h3>
            <p></p>
          </div>      
        </div>
         <div class="item">
          <img src="http://www.shirinasal.com/UploadedFiles/Products/ProductBigs/4374.jpg" style="width:100%; height:320px;" alt="Image">
          <div class="carousel-caption">
            <h3 id = "welcome">Amyra International Ltd</h3>
            <p></p>
          </div>      
        </div>
		
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  
  
  <!--
  
  if you need this, remember to change col-sm-12 to col-sm-8
  
  <div class="col-sm-4">
    <div class="well">
      <p>Lasso Technologies</p>
    </div>
    <div class="well">
       <p>Lasso Coffee</p>
    </div>
    <div class="well">
       <p>Lasso Electronics</p>
    </div>
	<div class="well">
       <p>Lasso Electronics</p>
    </div>
	<div class="well">
       <p>Lasso Electronics</p>
    </div>
  </div>
  -->
</div>
<hr>
</div>

<div class="container text-center">    
  <div class="row">
    <div class="col-sm-12">
      <h3 class = "h">We Make IT Happen</h3>
      <p class="p1">The Lasso Group Is a Group of Companies that are devoted to working with business leaders and project managers on 
	  improving business processes by effectively identifying and managing 
	  risks and putting in place effective management structures and controls – thus elevating the likelihood of achieving set objectives.</p>
    </div></div>
	<br>
	<div class="row" id = "tech">
	<div class="col-sm-8">
      <h3 class = "h1" >Lasso Technologies Limited </h3>
      <p class="p">An information and communication technology (ICT) service provider offering innovative products that help make theorld a smarter and more convenient place.
	  Specializes in delivering SAP ERP and related products as a consulting firm Supports and delivers cloud computing in its vast ICT environment and data centers.</p>
    </div>
	<div class="col-sm-4">
	
	<img src = "http://ectmobile.com/media/it%20photo.jpg" alt = "Codes" class="img-circle" width="304" height="236">
	</div>
	</div>
		<br>
	<div class="row" id= "ener">
	<div class="col-sm-8">
      <h3 class = "h1" >Lasso Energy </h3>
      <p class="p">
Lasso Energy Limited Specializes in Solar and Wind energy production Oil and gas marketing.
Specializes in Solar, Wind, Geothermal energy production. 
In underdeveloped countries with scarce electricity, Lasso Energy can provide much needed electricity..</p>
    </div>
	
	<div class="col-sm-4">
	
	<img src = "http://www.thewp-group.co.uk/res/Wind20Turbine20Wallpaper__yvt2.jpg" alt = "Turbine" class="img-circle" width="304" height="236">
	</div>
	</div>
		<br>
	<div class="row" id = "coff">
	<div class="col-sm-8">
      <h3 class = "h1" >Lasso Coffee </h3>
      <p class="p">

Lasso Coffee Limited Packaging of coffee (ground and roasted coffee) for export and
 Local consumption Specializes in processing and marketing Kenyan coffee.</p>
    </div>
	<div class="col-sm-4">
	
	<img src = "images1/cherry_bunch.jpg" alt = "Cherries" class="img-circle" width="304" height="236">
	</div>
	</div>
	<br>
	<div class="row" id = "elec">
	<div class="col-sm-8">
      <h3 class = "h1" >Lasso Electronics</h3>
      <p class="p">
Lasso Electronics Limited Leads the global digital market in high-tech electronics manufacturing and digital media through innovative, 
reliable products and services, 
talented people and a relentless pursuit of discovery had enabled this sector to live to the standards that the entire group subscribes to..</p>
    </div>
	<div class="col-sm-4">
	
	<img src = "http://www.rbselectronics.co.uk/images/rbs_main.jpg" 40681alt = "Electronics" class="img-circle" width="304" height="236">
	</div>
	
	</div>
		<br>
	<div class="row"  id = "inter">
	<div class="col-sm-8">
      <h3 class = "h1">Amyra International Ltd</h3>
      <p class="p">

A story of sweetness and the taste of life .With the trust and loyalty shown by consumers in KENYA AND THE WORLD. We continue to grow day 
by day through our  hard work for the satisfaction and the good health of the consumers as the main asset to the company.</p>
    </div>
	
	<div class="col-sm-4">
	
	<img src = "images1/40681.jpg" alt = "Amyra" class="img-circle" width="304" height="236">
	</div>
	</div>
	</div>



<!--
<div class="container text-center">    
  <h3>What We Do</h3>
  <br>
  <div class="row">
    <div class="col-sm-3">
      <img src="http://www.dangote.com/images/danglogo.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Current Project</p>
    </div>
    <div class="col-sm-3"> 
      <img src="http://www.dangote.com/images/danglogo.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Project 2</p>    
    </div>
    <div class="col-sm-3">
      <div class="well">
       <p>Some text..</p>
      </div>
      <div class="well">
       <p>Some text..</p>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="well">
       <p>Some text..</p>
      </div>
      <div class="well">
       <p>Some text..</p>
      </div>
    </div>  
  </div>
  <hr>
</div>
-->
<div class="container text-center">    
  <h3 style = "color:#0F8708;">Our Partners</h3>
  <br>
  <div class="row">
    <div class="col-sm-2">
      <img src="images1/arm-shirinasal.png" class="img-responsive" style="width:70%" alt="Image">
      <p></p>
    </div>
    <div class="col-sm-2"> 
      <img src="images1/KPMG1.png" class="img-responsive" style="width:70%" alt="Image">
      <p></p>    
    </div>
    <div class="col-sm-2"> 
      <img src="images1/logo-eim.png" class="img-responsive" style="width:70%" alt="Image">
      <p></p>
    </div>
    <div class="col-sm-2"> 
      <img src="images1/logo-odin-energy.gif" class="img-responsive" style="width:70%" alt="Image">
      <p></p>
    </div> 
    <div class="col-sm-2"> 
      <img src="images1/sap-logo.png.adapt_.72_36.false_.png" class="img-responsive" style="width:70%" alt="Image">
      <p></p>
    </div>     
    <div class="col-sm-2"> 
      <!--<img src="images1/" class="img-responsive" style="width:100%" alt=""> -->
      <p></p>
    </div> 
  </div>
</div><br>


<footer class="container-fluid text-center">
  <p><img src = "http://bestanimations.com/Animals/Mammals/Horses/animated-horse-gif-14.gif"></p>
</footer>

</body>
</html>
