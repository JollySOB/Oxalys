<!DOCTYPE HTML>
<!-- Script to process the contact form -->
<?php
	//Third party library for sending e-mail.
	require_once("PHPMailer/PHPMailerAutoload.php");

	//Get contact form data
	if (isset($_POST['name'])) {
		$sender_name = trim($_POST['name']);
		$sender_email = trim($_POST['email']);
		$sender_message = trim($_POST['message']);
		
		
		//Validate user input
		if ($_POST["spam-honeypot"] != "") {
			$response_message = "Sorry, but there was something wrong with your input, please try again.";
		}
		
		else if (!filter_var($sender_email, FILTER_VALIDATE_EMAIL)) {
			$response_message = "Please ensure that you have provided a valid e-mail address!";
		}
		
		else {
			//Try using the PHP mail funtion to send email from the web server itself. Might need to confidugre php.ini in order for mail() to work. 
			//If that does not work, use smpt server belowtry smtp servers.
			$mail = new PHPmailer();
			$mail->SMTPDebug = 0;
			/* $mail->IsSMTP();    
			$mail->SMTPAuth = True;
			$mail->SMTPSecure = 'tls';
			$mail->Host = "smtp.live.com";
			$mail->Port = 25;
			$mail->Username = "bungalo1@hotmail.com";
			$mail->Password = "";*/
			$mail->From = $sender_email;
			$mail->FromName = $sender_name;
			$mail->Body = $sender_message;
			$mail->addAddress("info@oxalys.ca");
			
			if(!$mail->send()) {
				$response_message = "Error:" . $mail->ErrorInfo;
			} 
			
			else {
				$response_message = "Thank you, your message has been sent!";
			}
		}
	}
?>

<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Oxalys Pharmaceuticals is developing therapeutics to halt, slow, or
reverse the progression of neurodegenerative diseases">
<meta name="author" content="Cody Rosevear">
<title>Oxalys Pharmaceuticals: Huntington's And Parkinson's Disease Therapeutics</title>

<!-- Core CSS -->
<link href="assets/css/styles.min.css" rel="stylesheet">

<!-- Fonts -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

<!-- JQuery via CDN -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Local fall back for jQuery in case of CDN outage -->
<script>if (!window.jQuery) {document.write('<script src="assets/js/jquery.min.js"><\/script>');}</script>

<!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
[endif]-->
</head>

<body data-spy="scroll" data-offset="0" data-target="#navbar-main">
<div id="navbar-main"> 
  <!-- Fixed navbar -->
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand smoothScroll" href="#header"><img src="assets/img/logos/OxalysLogo-min.png" alt="Oxalys Logo"/></a>
	  </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#header" class="smoothScroll">Home</a></li>
          <li> <a href="#about" class="smoothScroll">About</a></li>
          <li> <a href="#therapeutics" class="smoothScroll">Therapeutics</a></li>
          <li> <a href="#team" class="smoothScroll">Team</a></li>
          <li> <a href="#contact" class="smoothScroll">Contact</a></li>
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
			<a href="#about" class="smoothScroll btn btn-lg more-info">Learn More</a>
		</div>
	</div>
	<div id="slide2" class="slide">
	  <div class="slide-content">
		<h2>Intelligent Drug Discovery</h2>
		<h3>Targeting Causes, Not Symptoms.</h3>
		<a href="#services" class="smoothScroll btn btn-lg more-info">Our Services</a>
	  </div>
	</div>
	<div id="slide3" class="slide">
	  <div class="slide-content">
		<h2>Better Brain Health, For Longer</h2>
		<h3>More Effective Therapies</h3>
		<a href="#therapeutics" class="smoothScroll btn btn-lg more-info">Our Therapeutics</a>
	 </div>
	</div>
	<!-- Carousel indicators -->
	<ul class="carousel-indicators">
		<li id="s1indicator" class="active"></li>
		<li id="s2indicator"></li>
		<li id="s3indicator"></li>
	</ul>
</div>
<!-- /headerwrap --> 

<!-- ==== ABOUT ==== -->
<div id="about">
  <div class="container">
      <h2 class="centered">ABOUT US</h2>
	  <ul class="list-inline social-buttons">
          <li><a href="https://twitter.com/oxalyspharma"><i class="fa fa-twitter"></i></a></li>
          <li><a href="https://www.youtube.com/channel/UCqJLCemo9ig7YIUMxgjMOXQ"><i class="fa fa-youtube"></i></a></li>
          <li><a href="https://plus.google.com/103310619318075487517/about"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="https://www.linkedin.com/company/oxalys-pharmaceuticals"><i class="fa fa-linkedin"></i></a></li>
		  <li><a href="https://instagram.com/oxalyspharma/"><i class="fa fa-instagram"></i></a></li>
        </ul>
      <div class="col-md-6">
        <h3>Everyone's Health Matters</h3>
        <p>At Oxalys Pharmaceuticals, we believe that everyone should be able to access truly effective therapies for brain health.  This includes people with rare genetic or age-related neurodegenerative disorders.  We aim to develop therapies that are simple to administer, and that can halt, slow, or reverse the course of brain degeneration.</p>
      </div>
	  <div class="col-md-6">
		<h3>Who we are</h3>
        <p>Oxalys was founded by scientists passionate for brain health.  Our drug discovery methods and first pipeline therapeutics originated from research at the Massachusetts Institute of Technology (MIT).  We work collaboratively with global industry experts and leaders in neurology to develop breakthrough and transformative therapies.  Our drug development has been supported by the Michael J Fox Foundation and the National Research Council of Canada.</p>
      </div>
    </div>
</div>
<!-- container --> 

<!-- ==== SERVICES ==== -->
<div id="services">
  <div class="container">
    <div class="row">
      <h2 class="centered">OUR SERVICES</h2>
      <div class="col-lg-8 col-lg-offset-2">
        <p class="large">Our drug discovery technology enables us to seek cures for neurodegenerative disease. We replicate the genetic triggers of neurodegeneration in cultured neuronal cells, and identify compounds that reverse the disease process. This process is rapid and efficient: we are able to test thousands of compounds at a time in a miniaturized format. We offer this drug discovery service to academic and industry partners on a contract basis. <a class="smoothScroll" href="#contact">Contact us</a> for inquiries.</p>
      </div>
    <!-- row --> 
  </div>
</div>
</div>
<!-- container --> 


<!-- ==== TEAM MEMBERS ==== -->
<div id="team">
  <div class="container">
    <div class="row centered">
      <h2 class="centered">OUR TEAM</h2>
      <hr>
      <div class="col-lg-3 centered"> <img class="img img-circle" src="assets/img/team/KSThumbnail.jpg" alt="Katherine Sepp Photo">
        <h4><strong>Katharine Sepp, PhD</strong></h4>
        <p>Chief Executive Officer & Co-founder</p>
		<a data-toggle="modal" href="#modal1" class="btn btn-default">Bio</a>
	 </div>
      <div class="col-lg-3 centered"> <img class="img img-circle" src="assets/img/team/JSThumbnail-min.jpg" alt="Joost Shulte Photo">
        <h4><b>Joost Shulte, PhD</b></h4>
        <p>Chief Scientific Officer & Co-founder</p>
		<a data-toggle="modal" href="#modal2" class="btn btn-default">Bio</a>
	  </div>
      <div class="col-lg-3 centered"> <img class="img img-circle" src="assets/img/team/JMVThumbnail-min.jpg" alt="Jean-Marie Vallet Photo">
        <h4><b>Jean-Marie Vallet, MBA, PhD</b></h4>
        <p>Director</p>
		<a data-toggle="modal" href="#modal3" class="btn btn-default">Bio</a>
      </div>
	  <div class="col-lg-3 centered"> <img class="img img-circle" src="assets/img/team/MRThumbnail-min.jpg" alt="Marc Rioult Photo">
        <h4><b>Mark Rioult, MBA, PhD</b></h4>
        <p>Director</p>
		<a data-toggle="modal" href="#modal4" class="btn btn-default">Bio</a>
	  </div>
      <div class="col-lg-8 col-lg-offset-2 centered">
        <p class="large">The Oxalys team has a shared passion for developing truly effective therapies for neurodegenerative disease.  We combine our diverse talents and experience to create breakthrough solutions through constructive collaboration.</p>
      </div>
    </div>
  </div>
  <!-- row --> 
</div>
<!-- container -->


<!-- === THERAPEUTICS INFO === -->
<div id="therapeutics">
	<div class="container">
		<div class="row">
			<h2 class="centered">OUR THERAPEUTICS</h2>
			<div class="col-lg-8 col-lg-offset-2">
				<p class="large">Our therapeutics are developed to treat disease progression, not just symptoms. These ‘neuroprotective’ compounds inhibit biological processes that accelerate brain aging.  In this way, brain health and function can be retained longer. Our most advanced pipeline therapeutic, OXD4, is highly neuroprotective in preclinical tests, and is applicable to multiple neurodegenerative diseases.  We are developing it first for Huntington’s disease, which represents the fastest route to clinical use.  Applications to additional disorders, such as Parkinson’s disease, will closely follow.</p>
			</div>
		</div>
	</div>
</div>

<!-- ===== MODAL WINDOWS FOR TEAM BIOGRAPHIES ===== -->
              
        <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Katharine Sepp</h4>
              </div>
              <div class="modal-body">
                <p><img class="img-responsive" src="assets/img/team/KSThumbnail.jpg" alt="Katharine Sepp Photo"></p>
                <p>Dr. Katharine Sepp co-founded Oxalys Pharmaceuticals as a result of her breakthrough discoveries at MIT and Harvard Medical School.  She is deeply committed to developing neurodegeneration therapies that positively transform the lives of patients and their families.  To translate applied neurodegeneration research discoveries into clinical treatments for neurodegenerative disease, she developed the business plans, raised the company’s seed funding, and established collaborations with partners including Atuka, the Michael J Fox Foundation, the National Research Council of Canada, and the Hospital for Sick Children.  For Oxalys business development, she entered the company into the CTA@Boston accelerator at the Cambridge Innovation Center, sponsored by the Canada Consulate of Boston, and working closely with the Canadian Entrepreneurs of New England.  She also connects Oxalys with patient advocacy groups including the Huntington Society of Canada and the European HD Network.  Dr. Sepp was a fellow of the Canadian Institutes of Health Research (CIHR) and the Rick Hansen Neurotrauma Initiative.  She holds a PhD in neuroscience from the University of British Columbia.</p> 
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
       
	   <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modal2" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Joost Schulte</h4>
              </div>
              <div class="modal-body">
                <p><img class="img-responsive" src="assets/img/team/JSThumbnail.jpg" alt="Jooste Schulte Photo"></p>
                <p>Dr. Joost Schulte is a neuroscientist with 20 years experience, and prior to co-founding Oxalys he has been active in neurodegeneration pharmaceutical R and D in both academic and industrial settings.  As a research scientist at EnVivo Pharmaceuticals (Cambridge, MA), he developed novel assays for therapeutics screening in Huntington’s, Parkinson’s and Alzheimer’s disease models, leading to the company’s first patented IP.   He then developed a Huntington’s disease high-content drug discovery platform at MIT and the Broad Institute in Cambridge, MA. The platform was applied to screening libraries at the Harvard Medical School DRSC and ICCB-L to discover the Oxalys pipeline therapeutics.  He has worked with the Harvard Catalyst Program in Translational Medicine and the European Huntington’s Disease Network to develop the clinical trial protocols for Oxalys’ Huntington’s disease upcoming clinical trial.  He holds a PhD in neuroscience from the University of British Columbia and carried out his postdoctoral research at MIT.  Dr. Schulte has been supported by the Rick Hansen Neurotrauma Initiative, National Science and Engineering Research Council (NSERC) and the Ontario Brain Institute/Ontario Centres of Excellence.</p>
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
		
		<div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="modal3" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Jean-Marie Vallet</h4>
              </div>
              <div class="modal-body">
                <p><img class="img-responsive" src="assets/img/team/JMVThumbnail-min.jpg" alt="Jean-Marie Vallet Photo"></p>
                <p>Dr. Jean-Marie Vallet is a French-American life sciences executive with more than 30 years of experience in various roles, including R and D, sales and marketing, administration, corporate development and licensing.  He started as a genetic engineer at Battelle Institute in 1985 after obtaining his Ph.D. in Molecular Biology and joined the pharmaceutical industry after obtaining his MBA in 1988.  Starting in Europe (Switzerland, France, and Germany), he relocated to the US in 1994 for a senior corporate business development position with Warner Lambert.  Passionate for innovation and entrepreneurship, he left the world of “Big Pharmas” for the biotech industry with Guilford Pharmaceuticals in 2002 and with EnVivo Pharmaceuticals in 2006, both specialized in neurosciences.  JM retired in 2011 from EnVivo to start Cyrma Ventures LLC, a small consulting firm providing corporate development and financing services to emerging life science companies.  Since 2007, Dr. Vallet is an Advisor to the French Government for Trade and Commerce and an active mentor of several European biotech companies expanding their business in the US (NETVA, Venture Leaders YEi).  Jean-Marie is a board member of four emerging companies: HepatoChem, Ogenx, Ronoc Patent, and Oxalys, and a member of the LaunchPad Venture Group, a Boston group of angel investors, since 2011.  He is also a co-founder of Innovate-America, a mini-fund designed to support ground-breaking protein technology from MIT.</p>
                <p><b><a href="https://www.linkedin.com/in/jmvallet1">LinkedIn</a></b></p>
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
		
		<div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="modal4" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Mark Rioult</h4>
              </div>
              <div class="modal-body">
                <p><img class="img-responsive" src="assets/img/team/MRThumbnail-min.jpg" alt="Mark Rioult Photo"></p>
                <p>Dr. Marc Rioult has been involved in the development of technologies and technology-based companies, in the creation of startups, and in technology acquisition and commercialization for over twelve years. Working mainly in the life and medical sciences, he has also experience in nanotechnologies, electronics, software, chemicals, microfluidics, and consumer products.  He is currently Managing Director at 3DM Inc, the US subsidiary of the 3DM Group, Japan, and is doing business development in the US and in Europe. Prior to this, he was a Technology Licensing Officer at MIT where he managed and developed a portfolio of inventions, IP, licenses, and facilitated the creation of over ten startups. Before joining MIT, he worked consecutively for two consulting firms engaged in IP and technology transactions for enterprises ranging from global Fortune 500 clients to startups. Prior to this, he co-led a small software company for two years after having left academic research in neuroscience.  Dr. Rioult has a PhD in neuroscience and an MS in biology and biomedical engineering from the Federal Institute of Technology (ETH) in Zurich, and an MBA from the executive MBA program at Boston University. He has published and lectured internationally on scientific and business topics and has co-organized two international scientific symposiums.</p>
                <p><b><a href="https://www.linkedin.com/pub/marc-g-rioult/0/75/472">LinkedIn</a></b></p>
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
		
		<!-- Support Buttons Modal -->
		<div class="modal fade" id="support-modal" tabindex="-1" role="dialog" aria-labelledby="support-modal" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Investors And Supporters</h4>
			  </div>
				<div class="modal-body">
					<p>You can be part of the solution for developing effective therapeutics!
					   Oxalys seeks equity investments of greater than $1M from private investors, and considers risk-sharing partnerships from industry. 
					   Oxalys is also significantly supported by its friends of neurodegeneration research. All friends support goes directly to research and development.
					   Friends can support us by contacting us, or via our PayPal donate link below.
					</p>
				</div>
              <div class="modal-footer">
				<a href="https://www.google.ca/maps/place/112+College+St,+University+of+Toronto+-+St.+George+Campus,+Toronto,+ON+M5G+1L6/@43.6603996,-79.389428,17z/data=!3m1!4b1!4m2!3m1!1s0x882b34b7c6a387e9:0xf6ed00694e7c9c93">
					<p>112 College Street - Suite 411<br>
					   Toronto Ontario M5G 1L6
					</p>
				</a>
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="8ZBCAF2PJFM3E">
					<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="Pay Pal Donate" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form> 
              </div>
            </div>
            <!-- /.modal-content --> 
          </div>
          <!-- /.modal-dialog --> 
        </div>
        <!-- /.modal --> 
 

<!-- ==== CONTACT ==== -->
<div id="contact">
  <div class="container">
    <div class="row">
      <h2 class="centered">CONTACT US</h2>
		  <div class="col-md-4"> 
			<i class="fa fa-map-marker fa-2x"></i>
			<a href="https://www.google.ca/maps/place/112+College+St,+University+of+Toronto+-+St.+George+Campus,+Toronto,+ON+M5G+1L6/@43.6603996,-79.389428,17z/data=!3m1!4b1!4m2!3m1!1s0x882b34b7c6a387e9:0xf6ed00694e7c9c93">
			<p>112 College Street - Suite 411<br>
			  Toronto Ontario M5G 1L6</p></a>
		  </div>
		  <div class="col-md-4"> 
			<i class="fa fa-envelope-o fa-2x"></i>
			<p>info@oxalys.ca</p>
		  </div>
		  <div id="support-btn" class="col-md-4">
			<i class="fa fa-exchange fa-2x"></i>
			<a data-toggle="modal" href="#support-modal" class="btn btn-default">Investors & Supporters</a>
		  </div>
    </div>
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 centered">
	  <?php
			if ($_SERVER['REQUEST_METHOD'] == "POST") {
				echo "<p>$response_message</p>";
			}
	  ?>
        <form id="contact-form" method="post" action="index.php#contact" class="form">
          <div class="row">
            <div class="col-xs-6 col-md-6 form-group">
              <input class="form-control" id="name" name="name" placeholder="Name" type="text" required />
            </div>
            <div class="col-xs-6 col-md-6 form-group">
              <input class="form-control" id="email" name="email" placeholder="Email" type="email" required />
            </div>
          </div>
          <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5" required></textarea>
		  <div class="row">
				<button class="btn btn-lg" type="submit">Send Message</button>
				<div id="spam-honeypot-container" class="col-xs-6 col-md-6 form-group">
					<input id="spam-honeypot" class="form-control" name="spam-honeypot" type="text" placeholder="LEAVE BLANK!!!">
				</div>
		  </div>
        </form>
	  </div>
        <!-- form --> 
    </div>
    <!-- row --> 
    
  </div>
</div>
<!-- container -->

<div id="footerwrap">
  <div class="row">
	<span id="footer-nav" class="glyphicon glyphicon-chevron-up"></span>
  </div>
  <div class="container">
    <div class="row">
		<h3>Supporting Us</h3>
		<div class="col-md-6">
			<a href="http://www.impactcentre.ca/"><img style="width: 200px"src="assets/img/logos/ImpactCentreLogo.png" alt="Impact Centre"></a>
		</div>
		<div class="col-md-6">
			<a href="http://www.marsdd.com/"><img src="assets/img/logos/MaRSLogo.png" alt="MaRS"></a>
		</div>
		<div class="col-md-6">
			<a href="http://riccentre.ca/"><img src="assets/img/logos/RICCentreLogo.png" alt="RIC Centre"></a>
		</div>
	  </div>
	  <div>
		<ul class="list-inline">
			<li><span class="copyright">Copyright &copy; 2015 Oxalys Pharmaceuticals</span></li>
			<li><span class="copyright">Original Template Design by <a href="http://www.templategarden.com" rel="nofollow">TemplateGarden</a></span></li>
			<li><span class="copyright">Icons provided by <a href="http://glyphicons.com/">Glyphicons</a> and <a href="http://fontawesome.io">Dave Gandy</a></span></li>
			<li><span class="copyright">Photos: Dreamstime, Silmara Albi</span></li>
			<li><span class="copyright">Designed and Developed by Cody Rosevear</span></li>
	    </ul>
	  </div>
    </div>
</div>
<!-- Scripts placed at the end of the document so that the pages load faster --> 
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/smoothscroll.min.js"></script>
<script type="text/javascript" src="assets/js/slides.min.js"></script>
</body>
</html>