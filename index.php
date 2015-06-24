<?php
	
	//Third party library for sending e-mail.
	require_once("PHPMailer/class.phpmailer.php");
	require_once("PHPMailer/class.smtp.php");
	
	//Constants
	//$spam_test_answer = 12;
	
	//Get contact form data
	if (isset($_POST['name'])) {
		$name = trim($_POST['name']);
		$email = trim($_POST['email']);
		$message = trim($_POST['message']);
		
		
		//Validate user input
		if ($_POST["spam-honeypot"] != "") {
			$response_message = "Sorry, but there was something wrong with your input, please try again.";
		}
		
		/* else if ($_POST['spam-test'] != $spam_test_answer) {
			$response_message = "Please make sure to correctly answer the question below!";
		} */
		
		else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$response_message = "Please ensure that you have provided a valid e-mail address!";
		}
		
		else {
			$response_message = "Thank you, your message has been sent!";
			//Temp location use the one below once contact form is set up
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
			$mail->From = $email;
			$mail->FromName = $name;
			$mail->Body = $message;
			$mail->addAddress("contactcommunityfund@gmail.com");                                                     
			$mail->Subject = "User Commentary"; //Maybe add a new input field to the contact form later? */
			
			/* if(!$mail->send()) {
				$response_message = "Error:" . $mail->ErrorInfo;
			} 
			
			else {
				$response_message = "Thank you, your message has been sent!";
			} */
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Oxalys Pharmaceuticals is developing therapeutics to halt, slow, or
reverse the progression of neurodegenerative disease">
<meta name="author" content="Cody Rosevear">
<title>Oxalys Pharmaceuticals: Huntington's And Parkinson's Disease Therapeutics</title>

<!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="assets/css/main.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<!-- <link href="assets/css/animate-custom.css" rel="stylesheet"> -->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>

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
        <a class="navbar-brand" href="#home"><img src="assets/img/LogoSmaller.png" alt="Logo"/></a>
	  </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a id="home-link" href="#slide1" class="smoothScroll">Home</a></li>
          <li> <a href="#about" class="smoothScroll"> About</a></li>
          <li> <a href="#services" class="smoothScroll"> Services</a></li>
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
	<!-- Carousel navigation arrows -->
	<span id="left-nav" class="glyphicon glyphicon-chevron-left"></span>
	<span id="right-nav" class="glyphicon glyphicon-chevron-right"></span>
	<!-- Carousel slide content -->
	<div id="slide1" class="slide">
		<div id="active-content" class="slide-content">
			<h2>Oxalys Pharmaceuticals</h2>
			<h3>Everyone's Health Matters</h3>
			<a href="#about" class="smoothScroll btn btn-lg more-info">Learn More</a> </header>
		</div>
	</div>
	<div id="slide2" class="slide">
	  <div class="slide-content">
		<h2>Intelligent Drug Discovery</h2>
		<h3>Targeting Causes, Not Symptoms.</h3>
		<a href="#services" class="smoothScroll btn btn-lg more-info">Our Services</a> </header>
	  </div>
	</div>
	<div id="slide3" class="slide">
	  <div class="slide-content">
		<h2>Better Brain Health, For Longer</h2>
		<h3>Targeting Diseases, Not Symptoms</h3>
		<a href="#team" class="smoothScroll btn btn-lg more-info">Our Team</a> </header>
	 </div>
	</div>
	<!-- Carousel indicators -->
	<ul class="carousel-indicators">
		<li class="active"></li>
		<li></li>
		<li></li>
	</ul>
</div>
<!-- /headerwrap --> 

<!-- ==== ABOUT ==== -->
<div id="about" name="about">
  <div class="container">
    <div class="row white">
      <h2 class="centered">ABOUT US</h2>
      <hr>
      <div class="col-md-6"> <img class="img-responsive" src="assets/img/about/about1.jpg" alt=""> </div>
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

<!-- ===== MODAL WINDOWS FOR TEAM BIOGRAPHIES ===== -->
              
        <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Katharine Sepp</h4>
              </div>
              <div class="modal-body">
                <p><img class="img-responsive" src="assets/img/team/KSPhotoBorder.jpg" alt="Katharine Sepp Photo"></p>
                <p>Dr. Katharine Sepp co-founded Oxalys Pharmaceuticals as a result of her breakthrough discoveries at MIT and Harvard Medical School.  She is deeply committed to developing neurodegeneration therapies that positively transform the lives of patients and their families.  To translate applied neurodegeneration research discoveries into clinical treatments for neurodegenerative disease, she developed the business plans, raised the company’s seed funding, and established collaborations with partners including Atuka, the Michael J Fox Foundation, the National Research Council of Canada, and the Hospital for Sick Children.  For Oxalys business development, she entered the company into the CTA@Boston accelerator at the Cambridge Innovation Center, sponsored by the Canada Consulate of Boston, and working closely with the Canadian Entrepreneurs of New England.  She also connects Oxalys with patient advocacy groups including the Huntington Society of Canada and the European HD Network.  Dr. Sepp was a fellow of the Canadian Institutes of Health Research (CIHR) and the Rick Hansen Neurotrauma Initiative.  She holds a PhD in neuroscience from the University of British Columbia. </p> 
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
       
	   <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Joost Schulte</h4>
              </div>
              <div class="modal-body">
                <p><img class="img-responsive" src="assets/img/team/JSPhotoBorder.jpg" alt="Jooste Schulte Photo"></p>
                <p>Dr. Joost Schulte is a neuroscientist with 20 years experience, and prior to co-founding Oxalys he has been active in neurodegeneration pharmaceutical R&D in both academic and industrial settings.  As a research scientist at EnVivo Pharmaceuticals (Cambridge, MA), he developed novel assays for therapeutics screening in Huntington’s, Parkinson’s and Alzheimer’s disease models, leading to the company’s first patented IP.   He then developed a Huntington’s disease high-content drug discovery platform at MIT and the Broad Institute in Cambridge, MA. The platform was applied to screening libraries at the Harvard Medical School DRSC and ICCB-L to discover the Oxalys pipeline therapeutics.  He has worked with the Harvard Catalyst Program in Translational Medicine and the European Huntington’s Disease Network to develop the clinical trial protocols for Oxalys’ Huntington’s disease upcoming clinical trial.  He holds a PhD in neuroscience from the University of British Columbia and carried out his postdoctoral research at MIT.  Dr. Schulte has been supported by the Rick Hansen Neurotrauma Initiative, National Science and Engineering Research Council (NSERC) and the Ontario Brain Institute/Ontario Centres of Excellence.</p>
                <p><b><a href="#">External links!</a></b></p>
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
		
		<div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Jean-Marie Vallet</h4>
              </div>
              <div class="modal-body">
                <p><img class="img-responsive" src="assets/img/team/JMVPhotoBorder.jpg" alt="Jean-Marie Vallet Photo"></p>
                <p>Dr. Jean-Marie Vallet is a French-American life sciences executive with more than 30 years of experience in various roles, including R&D, sales & marketing, administration, corporate development and licensing.  He started as a genetic engineer at Battelle Institute in 1985 after obtaining his Ph.D. in Molecular Biology and joined the pharmaceutical industry after obtaining his MBA in 1988.  Starting in Europe (Switzerland, France, and Germany), he relocated to the US in 1994 for a senior corporate business development position with Warner Lambert.  Passionate for innovation and entrepreneurship, he left the world of “Big Pharmas” for the biotech industry with Guilford Pharmaceuticals in 2002 and with EnVivo Pharmaceuticals in 2006, both specialized in neurosciences.  JM retired in 2011 from EnVivo to start Cyrma Ventures LLC, a small consulting firm providing corporate development and financing services to emerging life science companies.  Since 2007, Dr. Vallet is an Advisor to the French Government for Trade and Commerce and an active mentor of several European biotech companies expanding their business in the US (NETVA, Venture Leaders YEi).  Jean-Marie is a board member of four emerging companies: HepatoChem, Ogenx, Ronoc Patent, and Oxalys, and a member of the LaunchPad Venture Group, a Boston group of angel investors, since 2011.  He is also a co-founder of Innovate-America, a mini-fund designed to support ground-breaking protein technology from MIT.</p>
                <p><b><a href="#">External links!</a></b></p>
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
		
		<div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Mark Rioult</h4>
              </div>
              <div class="modal-body">
                <p><img class="img-responsive" src="assets/img/team/MRPhotoBorder.jpg" alt="Mark Rioult Photo"></p>
                <p>Dr. Marc Rioult has been involved in the development of technologies and technology-based companies, in the creation of startups, and in technology acquisition and commercialization for over twelve years. Working mainly in the life and medical sciences, he has also experience in nanotechnologies, electronics, software, chemicals, microfluidics, and consumer products.  He is currently Managing Director at 3DM Inc, the US subsidiary of the 3DM Group, Japan, and is doing business development in the US and in Europe. Prior to this, he was a Technology Licensing Officer at MIT where he managed and developed a portfolio of inventions, IP, licenses, and facilitated the creation of over ten startups. Before joining MIT, he worked consecutively for two consulting firms engaged in IP and technology transactions for enterprises ranging from global Fortune 500 clients to startups. Prior to this, he co-led a small software company for two years after having left academic research in neuroscience.  Dr. Rioult has a PhD in neuroscience and an MS in biology and biomedical engineering from the Federal Institute of Technology (ETH) in Zurich, and an MBA from the executive MBA program at Boston University. He has published and lectured internationally on scientific and business topics and has co-organized two international scientific symposiums.</p>
                <p><b><a href="#">External links!</a></b></p>
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

<!-- ==== TEAM MEMBERS ==== -->
<div id="team" name="team">
  <div class="container">
    <div class="row centered">
      <h2 class="centered">MEET OUR TEAM</h2>
      <hr>
      <div class="col-lg-3 centered"> <img class="img img-circle" src="assets/img/team/KSThumbnail.jpg" height="120px" width="120px" alt="">
        <h4><strong>Dr Katharine Sepp, PhD</strong></h4>
        <p>Chief Executive Officer & Co-founder</p>
		<a data-toggle="modal" href="#modal1" class="btn btn-default">Bio</a>
	 </div>
      <div class="col-lg-3 centered"> <img class="img img-circle" src="assets/img/team/JSThumbnail.jpg" height="120px" width="120px" alt="">
        <h4><b>Joost Shulte, PhD</b></h4>
        <p>Chief Scientific Officer & Co-founder</p>
		<a data-toggle="modal" href="#modal2" class="btn btn-default">Bio</a>
	  </div>
      <div class="col-lg-3 centered"> <img class="img img-circle" src="assets/img/team/JMVThumbnail.jpg" height="120px" width="120px" alt="">
        <h4><b>Jean-Marie Vallet, MBA, PhD</b></h4>
        <p>Director</p>
		<a data-toggle="modal" href="#modal3" class="btn btn-default">Bio</a>
      </div>
	  <div class="col-lg-3 centered"> <img class="img img-circle" src="assets/img/team/MRThumbnail.jpg" height="120px" width="120px" alt="">
        <h4><b>Mark Rioult, MBA, PhD</b></h4>
        <p>Director</p>
		<a data-toggle="modal" href="#modal4" class="btn btn-default">Bio</a>
	  </div>
      <div class="col-lg-8 col-lg-offset-2 centered">
        <p class="large">The Oxalys team has a shared passion for developing truly effective therapies for neurodegenerative disease.  We combine our diverse talents and experience to create breakthrough solutions through constructive collaboration. </p>
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
        <p>112 College Street - Suite 411<br>
          Toronto Ontario M5G 1:6</p>
      </div>
      <div class="col-md-4"> <i class="fa fa-envelope-o fa-2x"></i>
        <p>info@oxalys.ca</p>
      </div>
      <div class="col-md-4"> <i class="fa fa-phone fa-2x"></i>
        <p> +1 800 123 1234</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 centered">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
        <form id="contact" method="post" action="index.php#contact" class="form" role="form">
          <div class="row">
            <div class="col-xs-6 col-md-6 form-group">
              <input class="form-control" id="name" name="name" placeholder="Name" type="text" required />
            </div>
            <div class="col-xs-6 col-md-6 form-group">
              <input class="form-control" id="email" name="email" placeholder="Email" type="email" required />
            </div>
          </div>
          <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea>
		  <!--<div class="row"><div class="col-xs-6 col-md-6 form-group"><input id="spam-test" class="form-control" name="spam-test" type="text" placeholder="Your answer here:" required /></div></div>-->
		  <div class="row">
			<?php
				if ($_SERVER['REQUEST_METHOD'] == "POST") {
					echo "<br><p>$response_message</p>";
				}
				//echo "<p>Please answer the following question and type your answer below. 7 + 5 = ?<p>";
			?>
			<div id="spam-honeypot-container" class="col-xs-6 col-md-6 form-group">
				<input id="spam-honeypot" class="form-control" name="spam-honeypot" type="text" placeholder="PLEASE LEAVE THIS FIELD BLANK!!!">
			</div>
				<button class="btn btn-lg" type="submit">Send Message</button>
		  </div>
	</div>
        </form>
        <!-- form --> 
    </div>
    <!-- row --> 
    
  </div>
</div>
<!-- container -->

<div id="footerwrap">
  <div class="container">
    <div class="row">
      <div class="col-md-8"> 
		<span class="copyright">Copyright &copy; 2015 Oxalys Pharmaceuticals</span>
		<span class="copyright">Original Template Design by <a href="http://www.templategarden.com" rel="nofollow">TemplateGarden</a></span>
	  </div>
      <div class="col-md-4">
        <ul class="list-inline social-buttons">
          <li><a href="https://twitter.com/oxalyspharma"><i class="fa fa-twitter"></i></a></li>
          <li><a href="https://www.youtube.com/channel/UCg3a0elR1aO_6-eQfJuCC2g"><i class="fa fa-youtube"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a> </li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a> </li>
		  <br>
		  <li>Arrow icons provided by <a href="http://glyphicons.com/">Glyphicons</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/retina.js"></script>
<script type="text/javascript" src="assets/js/smoothscroll.js"></script> 
<script type="text/javascript" src="assets/js/jquery-func.js"></script>
<script type="text/javascript" src="assets/js/interact.js"></script>
<script type="text/javascript" src="assets/js/carousel.js"></script>
<?php
	/* if (isset($_POST["name"])) {
		echo '<script type="text/javascript">window.scrollTo(0,document.body.scrollHeight);</script>';
	} */
?>
</body>
</html>
