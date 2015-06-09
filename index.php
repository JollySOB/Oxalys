<?php
	
	//Third party library for sending e-mail.
	require_once("PHPMailer/class.phpmailer.php");
	require_once("PHPMailer/class.smtp.php");
	
	//Constants
	$spam_test_answer = 12;
	
	//Get contact form data
	if (isset($_POST['name'])) {
		$name = trim($_POST['name']);
		$email = trim($_POST['email']);
		$message = trim($_POST['message']);
		
		
		//Validate user input
		if ($_POST["spam-honeypot"] != "") {
			$response_message = "Sorry, but there was something wrong with your input, please try again.";
		}
		
		else if ($_POST['spam-test'] != $spam_test_answer) {
			$response_message = "Please make sure to correctly answer the question below!";
		}
		
		else {
			$response_message = "Thank you, your message has been sent!";
		
			//Send the e-mail.
			/* $mail = new PHPmailer();
			//$mail->SMTPDebug = 3;
			$mail->IsSMTP();    
			$mail->SMTPAuth = true;
			$mail->SMTPSecure = 'tls';
			$mail->Host = "smtp.gmail.com";
			$mail->Port = 587;
			$mail->Username = "contactcommunityfund@gmail.com";
			$mail->Password = "community693";
			$mail->From = $sender_email;
			$mail->FromName = $sender_name;
			$mail->Body = $email_body;
			$mail->addAddress("contactcommunityfund@gmail.com");                                                     
			$mail->Subject = "User Commentary"; //Maybe add a new input field to the contact form later? */
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>ALPHA</title>

<!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="assets/css/main.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<link href="assets/css/animate-custom.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
<script src="assets/js/jquery.min.js"></script>
<!-- TODO: determine if we actually need this script<script type="text/javascript" src="assets/js/modernizr.custom.js"></script> -->

<!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body data-spy="scroll" data-offset="0" data-target="#navbar-main">
<div id="navbar-main"> 
  <!-- Fixed navbar -->
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="#home">ALPHA</a> </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#home" class="smoothScroll">Home</a></li>
          <li> <a href="#about" class="smoothScroll"> About</a></li>
          <li> <a href="#services" class="smoothScroll"> Services</a></li>
          <li> <a href="#portfolio" class="smoothScroll"> Portfolio</a></li>
          <li> <a href="#team" class="smoothScroll"> Team</a></li>
          <li> <a href="#contact" class="smoothScroll"> Contact</a></li>
        </ul>
      </div>
      <!--/.nav-collapse --> 
    </div>
  </div>
</div>

<!-- ==== HEADERWRAP ==== -->
<div id="header">
	<span id="left-nav" class="glyphicon glyphicon-chevron-left"></span>
	<span id="right-nav" class="glyphicon glyphicon-chevron-right"></span>
	<div id="slide1" class="slide active-slide" name="home">
	  <header class="clearfix"> <i class="fa fa-language icon"></i>
		<h1>Creative & High Quality</h1>
		<p>Lorem ipsum dolor sit amet, cu menandri molestiae voluptaria eam,<br>
		  invidunt reprehendunt nec ei. Sonet regione consulatu vel id.</p>
		<a href="#portfolio" class="smoothScroll btn btn-lg">See Our Works</a> </header>
	</div>
	<div id="slide2" class="slide" name="home">
	  <header class="clearfix"> <i class="fa fa-language icon"></i>
		<h1>Creative & High Quality</h1>
		<p>Lorem ipsum dolor sit amet, cu menandri molestiae voluptaria eam,<br>
		  invidunt reprehendunt nec ei. Sonet regione consulatu vel id.</p>
		<a href="#portfolio" class="smoothScroll btn btn-lg">See Our Works</a> </header>
	</div>
	<div id="slide3" class="slide" name="home">
	  <header class="clearfix"> <i class="fa fa-language icon"></i>
		<h1>Creative & High Quality</h1>
		<p>Lorem ipsum dolor sit amet, cu menandri molestiae voluptaria eam,<br>
		  invidunt reprehendunt nec ei. Sonet regione consulatu vel id.</p>
		<a href="#portfolio" class="smoothScroll btn btn-lg">See Our Works</a> </header>
	</div>
</div>
<!-- /headerwrap --> 

<!-- ==== ABOUT ==== -->
<div id="about" name="about">
  <div class="container">
    <div class="row white">
      <h2 class="centered">ABOUT US</h2>
      <hr>
      <div class="col-md-6"> <img class="img-responsive" src="assets/img/about/about1.jpg" align=""> </div>
      <div class="col-md-6">
        <h3>Who we are</h3>
        <p>Lorem ipsum dolor sit amet, quo meis audire placerat eu, te eos porro veniam. An everti maiorum detracto mea. Eu eos dicam voluptaria, erant bonorum albucius et per, ei sapientem accommodare est. Saepe dolorum constituam ei vel. Te sit malorum ceteros repudiandae, ne tritani adipisci vis.</p>
        <h3>Why choose us?</h3>
        <p>Lorem ipsum dolor sit amet, quo meis audire placerat eu, te eos porro veniam. An everti maiorum detracto mea. Eu eos dicam voluptaria, erant bonorum albucius et per, ei sapientem accommodare est. Saepe dolorum constituam ei vel.</p>
      </div>
    </div>
    <!-- row --> 
  </div>
</div>
<!-- container --> 

<!-- ==== SERVICES ==== -->
<div id="services" name="services">
  <div class="container">
    <div class="row">
      <h2 class="centered">OUR SERVICES</h2>
      <hr>
      <div class="col-lg-8 col-lg-offset-2">
        <p class="large">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
      </div>
      <div class="col-lg-4 callout"> <i class="fa fa-desktop fa-3x"></i>
        <h3>Responsive Design</h3>
        <p>Erat imperdiet dissentias ea usu, alia aliquid corrumpit ea qui. Eu vim oratio conclusionemque, vel at errem nominavi delicatissimi.</p>
      </div>
      <div class="col-lg-4 callout"> <i class="fa fa-gears fa-3x"></i>
        <h3>Web Development</h3>
        <p>Erat imperdiet dissentias ea usu, alia aliquid corrumpit ea qui. Eu vim oratio conclusionemque, vel at errem nominavi delicatissimi.</p>
      </div>
      <div class="col-lg-4 callout"> <i class="fa fa-dot-circle-o fa-3x"></i>
        <h3>Social Marketing</h3>
        <p>Erat imperdiet dissentias ea usu, alia aliquid corrumpit ea qui. Eu vim oratio conclusionemque, vel at errem nominavi delicatissimi.</p>
      </div>
    </div>
    <!-- row --> 
  </div>
</div>
<!-- container --> 

<!-- ==== PORTFOLIO ==== -->
<div id="portfolio" name="portfolio">
  <div class="container">
    <div class="row">
      <h2 class="centered">OUR PORTFOLIO</h2>
      <hr>
      <div class="col-lg-8 col-lg-offset-2 centered">
        <p class="large">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
      </div>
    </div>
    <!-- /row -->
    <div class="container">
      <div class="row"> 
        
        <!-- PORTFOLIO IMAGE 1 -->
        <div class="col-md-4 ">
          <div class="grid mask">
            <figure> <img class="img-responsive" src="assets/img/portfolio/folio01.jpg" alt="">
              <figcaption>
                <h5>UX / UI</h5>
                <a data-toggle="modal" href="#myModal" class="btn btn-default">More Details</a> </figcaption>
              <!-- /figcaption --> 
            </figure>
            <!-- /figure --> 
          </div>
          <!-- /grid-mask --> 
        </div>
        
        <!-- MODAL SHOW THE PORTFOLIO IMAGE. In this demo, all links point to this modal. You should create
						      a modal for each of your projects. -->
        
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Project Title</h4>
              </div>
              <div class="modal-body">
                <p><img class="img-responsive" src="assets/img/portfolio/folio01-preview.jpg" alt=""></p>
                <p>Lorem ipsum dolor sit amet, quo meis audire placerat eu, te eos porro veniam. An everti maiorum detracto mea. Eu eos dicam voluptaria, erant bonorum albucius et per, ei sapientem accommodare est. Saepe dolorum constituam ei vel</p>
                <p><b><a href="#">Visit Site</a></b></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content --> 
          </div>
          <!-- /.modal-dialog --> 
        </div>
        <!-- /.modal --> 
        
        <!-- PORTFOLIO IMAGE 2 -->
        <div class="col-md-4">
          <div class="grid mask">
            <figure> <img class="img-responsive" src="assets/img/portfolio/folio02.jpg" alt="">
              <figcaption>
                <h5>CONCEPT</h5>
                <a data-toggle="modal" href="#myModal" class="btn btn-default">More Details</a> </figcaption>
              <!-- /figcaption --> 
            </figure>
            <!-- /figure --> 
          </div>
          <!-- /grid-mask --> 
        </div>
        
        <!-- PORTFOLIO IMAGE 3 -->
        <div class="col-md-4">
          <div class="grid mask">
            <figure> <img class="img-responsive" src="assets/img/portfolio/folio03.jpg" alt="">
              <figcaption>
                <h5>UX / UI</h5>
                <a data-toggle="modal" href="#myModal" class="btn btn-default">More Details</a> </figcaption>
              <!-- /figcaption --> 
            </figure>
            <!-- /figure --> 
          </div>
          <!-- /grid-mask --> 
        </div>
      </div>
      <!-- /row --> 
      
      <!-- PORTFOLIO IMAGE 4 -->
      <div class="row">
        <div class="col-md-4 ">
          <div class="grid mask">
            <figure> <img class="img-responsive" src="assets/img/portfolio/folio04.jpg" alt="">
              <figcaption>
                <h5>CONCEPT</h5>
                <a data-toggle="modal" href="#myModal" class="btn btn-default">More Details</a> </figcaption>
              <!-- /figcaption --> 
            </figure>
            <!-- /figure --> 
          </div>
          <!-- /grid-mask --> 
        </div>
        
        <!-- PORTFOLIO IMAGE 5 -->
        <div class="col-md-4">
          <div class="grid mask">
            <figure> <img class="img-responsive" src="assets/img/portfolio/folio05.jpg" alt="">
              <figcaption>
                <h5>UX / UI</h5>
                <a data-toggle="modal" href="#myModal" class="btn btn-default">More Details</a> </figcaption>
              <!-- /figcaption --> 
            </figure>
            <!-- /figure --> 
          </div>
          <!-- /grid-mask --> 
        </div>
        
        <!-- PORTFOLIO IMAGE 6 -->
        <div class="col-md-4">
          <div class="grid mask">
            <figure> <img class="img-responsive" src="assets/img/portfolio/folio06.jpg" alt="">
              <figcaption>
                <h5>CMS INTEGRATION</h5>
                <a data-toggle="modal" href="#myModal" class="btn btn-default">More Details</a> </figcaption>
              <!-- /figcaption --> 
            </figure>
            <!-- /figure --> 
          </div>
          <!-- /grid-mask --> 
        </div>
        <!-- /col --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /row --> 
  </div>
</div>
<!-- /container --> 

<!-- ==== TEAM MEMBERS ==== -->
<div id="team" name="team">
  <div class="container">
    <div class="row centered">
      <h2 class="centered">MEET OUR TEAM</h2>
      <hr>
      <div class="col-lg-3 centered"> <img class="img img-circle" src="assets/img/team/team01.jpg" height="120px" width="120px" alt="">
        <h4><strong>Jessica</strong></h4>
        <p>Albucius consectetuer eu nam. Saepe legendos vulputate eu quo, id mea comprehensam signifer.</p>
        <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> </div>
      <div class="col-lg-3 centered"> <img class="img img-circle" src="assets/img/team/team02.jpg" height="120px" width="120px" alt="">
        <h4><b>Mike</b></h4>
        <p>Albucius consectetuer eu nam. Saepe legendos vulputate eu quo, id mea comprehensam signifer.</p>
        <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> </div>
      <div class="col-lg-3 centered"> <img class="img img-circle" src="assets/img/team/team03.jpg" height="120px" width="120px" alt="">
        <h4><b>Michele</b></h4>
        <p>Albucius consectetuer eu nam. Saepe legendos vulputate eu quo, id mea comprehensam signifer.</p>
        <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> </div>
      <div class="col-lg-3 centered"> <img class="img img-circle" src="assets/img/team/team04.jpg" height="120px" width="120px" alt="">
        <h4><b>Larry</b></h4>
        <p>Albucius consectetuer eu nam. Saepe legendos vulputate eu quo, id mea comprehensam signifer.</p>
        <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> </div>
      <div class="col-lg-8 col-lg-offset-2 centered">
        <p class="large">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
      </div>
    </div>
  </div>
  <!-- row --> 
</div>
<!-- container --> 

<!-- ==== CONTACT ==== -->
<div id="contact" name="contact">
  <div class="container">
    <div class="row">
      <h2 class="centered">CONTACT US</h2>
      <hr>
      <div class="col-md-4 centered"> <i class="fa fa-map-marker fa-2x"></i>
        <p>321 Awesome Street<br>
          New York, NY 17022</p>
      </div>
      <div class="col-md-4"> <i class="fa fa-envelope-o fa-2x"></i>
        <p>info@companyname.com</p>
      </div>
      <div class="col-md-4"> <i class="fa fa-phone fa-2x"></i>
        <p> +1 800 123 1234</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 centered">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
        <form id="contact" method="post" class="form" role="form">
          <div class="row">
            <div class="col-xs-6 col-md-6 form-group">
              <input class="form-control" id="name" name="name" placeholder="Name" type="text" required />
            </div>
            <div class="col-xs-6 col-md-6 form-group">
              <input class="form-control" id="email" name="email" placeholder="Email" type="email" required />
            </div>
          </div>
          <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea>
		  <?php
			if (isset($_POST['name'])) {
				echo "<p>$response_message</p></span>";
			}
			echo "<p>Please answer the following question and type your answer below. 7 + 5 = ?<p>";
		  ?>
		  <div class="row">
			<div class="col-xs-6 col-md-6 form-group">
				<input id="spam-test" class="form-control" name="spam-test" type="text" placeholder="Your answer here:" required />
			</div>
		  </div>
		  <div class="row">
			<div class="col-xs-6 col-md-6 form-group">
				<input class="form-control" id="spam-honeypot" name="spam-honeypot" type="text" placeholder="PLEASE LEAVE THIS FIELD BLANK!!!">
			</div>
		  </div>
		  <div>
			<input type="hidden" name="contact_request" value="1">
		  </div>
            <div class="col-xs-12 col-md-12">
				<button id="contact-button" class="" type="submit">Send Message</button>
            </div>
        </form>
        <!-- form --> 
      </div>
    </div>
    <!-- row --> 
    
  </div>
</div>
<!-- container -->

<div id="footerwrap">
  <div class="container">
    <div class="row">
      <div class="col-md-8"> <span class="copyright">Copyright &copy; 2015 Your Website Name. Design by <a href="http://www.templategarden.com" rel="nofollow">TemplateGarden</a></span> </div>
      <div class="col-md-4">
        <ul class="list-inline social-buttons">
          <li><a href="#"><i class="fa fa-twitter"></i></a> </li>
          <li><a href="#"><i class="fa fa-facebook"></i></a> </li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a> </li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a> </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 

<script type="text/javascript" src="assets/js/bootstrap.min.js"></script> 
<!--<script type="text/javascript" src="assets/js/retina.js"></script>--> 
<!--404 WHY? ASSES WHETHER IT IS NEEDED <script type="text/javascript" src="jquery.easing.1.3.js"></script>--> 
<script type="text/javascript" src="assets/js/smoothscroll.min.js"></script> 
<script type="text/javascript" src="assets/js/jquery-func.min.js"></script>
<!-- Script is small enough not to warrant its own file and an extra request.-->
<script>var $FIRST_SLIDE=$("#slide1");var $LAST_SLIDE=$("#slide3");var $currentSlide=$("#slide1");$("#left-nav").click(function(){$currentSlide.removeClass("active-slide");if($currentSlide.attr("id")==$FIRST_SLIDE.attr("id")){$LAST_SLIDE.addClass("active-slide");$currentSlide=$LAST_SLIDE}else{$currentSlide.prev().addClass("active-slide");$currentSlide=$currentSlide.prev()}});$("#right-nav").click(function(){$currentSlide.removeClass("active-slide");if($currentSlide.attr("id")==$LAST_SLIDE.attr("id")){$FIRST_SLIDE.addClass("active-slide");$currentSlide=$FIRST_SLIDE}else{$currentSlide.next().addClass("active-slide");$currentSlide=$currentSlide.next()}});</script>
<?php
	if (isset($_POST["name"])) {
		echo '<script type="text/javascript">window.scrollTo(0,document.body.scrollHeight);</script>';
	}
?>
</body>
</html>
