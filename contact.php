<?php



// Email address verification, do not edit.
function isEmail($email) {
	return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|me|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i",$email));
}
if(isset($_POST['submit'])){


	if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

	$first_name     = $_POST['fname'];
	$last_name     = $_POST['lname'];
	$email    = $_POST['email'];
	$subject  = $_POST['subject'];
	$message = $_POST['message'];
	
	if(trim($first_name) == '') {
		echo '<div class="error_message">Attention! You must enter your name.</div>';
		exit();
	}  else if(trim($email) == '') {
		echo '<div class="error_message">Attention! Please enter a valid email address.</div>';
		exit();
	} else if(!isEmail($email)) {
		echo '<div class="error_message">Attention! You have enter an invalid e-mail address, try again.</div>';
		exit();
	}
	
	if(trim($message) == '') {
		echo '<div class="error_message">Attention! Please enter your message.</div>';
		exit();
	}
	
	
	
	// Configuration option.
	// Enter the email address that you want to emails to be sent to.
	// Example $address = "joe.doe@yourdomain.com";
	
	//$address = "example@themeforest.net";
	$address = "bellofidele@gmail.com";
	//$address = "ifoppag_infos@yahoo.com";
	
	
	// Configuration option.
	// i.e. The standard subject will appear as, "You've been contacted by John Doe."
	
	// Example, $e_subject = '$name . ' has contacted you via Your Website.';
	
	$e_subject = 'You\'ve been contacted by ' . $first_name . '.';
	
	
	// Configuration option.
	// You can change this if you feel that you need to.
	// Developers, you may wish to add more fields to the form, in which case you must be sure to add them here.
	
	$e_body = "You have been contacted by $first_name. $first_name, for this project." . PHP_EOL . PHP_EOL;
	$e_content = "\"$message\"" . PHP_EOL . PHP_EOL;
	$e_reply = "You can contact $first_name via email, $email ";
	
	$msg = wordwrap( $e_body . $e_content . $e_reply, 70 );
	
	$headers = "From: $email" . PHP_EOL;
	$headers .= "Reply-To: $email" . PHP_EOL;
	$headers .= "MIME-Version: 1.0" . PHP_EOL;
	$headers .= "Content-type: text/plain; charset=utf-8" . PHP_EOL;
	$headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;
	
	if(mail($address, $e_subject, $msg, $headers)) {
	
		// Email has sent successfully, echo a success page.
	
		echo "<fieldset>";
		echo "<div id='success_page'>";
		echo "<h1>Email Sent Successfully.</h1>";
		echo "<p>Thank you <strong>$first_name</strong>, your message has been submitted to us.</p>";
		echo "</div>";
		echo "</fieldset>";
	
	} else {
	
		echo 'ERROR!';
	
	}

}

?>

<?php require "vues/entete.php" ; ?>
<div class="conter1">
<div id="getintouch" class="section wb wow fadeIn" style="padding-bottom:0;">
       <br><br><br> <br><br><br><br> <div class="container">
            <div class="heading">
               <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
               <h2>Contact</h2>
            </div>
         </div>
     

		 <aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(images/img_bg_4.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-12 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section"> Contactez Nous</h1>
									
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<div id="fh5co-contact">
		<div class="container">
			<div class="row">
			
				<div class="col-md-12 animate-box">
					<h3></h3>
					<form action="" method="POST">
					<div class="row">
          <div class="col-lg-6">
            <div class="recent">
              <h3>Envoyez un message</h3>
            </div>
           <!-- <div id="sendmessage">Your message has been sent. Thank you!</div> -->
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom" data-rule="minlen:4" data-msg="Entrez 4 caractère minimum" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" data-rule="email" data-msg="Entrez une adresse email valide" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Objet" data-rule="minlen:4" data-msg="Entrez  au moins 8 caractère en objet" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>

              <div class="text-center"><button type="submit"  name="submit" class="btn btn-primary btn-lg">Envoyer Message</button></div>
            </form>
          </div>

          <div class="col-lg-6">
            <div class="recent">
              <h3></h3>
            </div>
            <div class="">
              <p>Pour nous contacter veuillez remplir ce formulaire et nous envoyer votre message</p>
              <p>Un cadre de l'administration de l'IFOPPAG va vous repondre dans un bref delai !!!!!!</p>

              
            </div>
          </div>
        </div>
					</form>	
					<br>	
				</div>
			</div>
			
		</div>
	</div>
<?php require "vues/footer.php";   ?>