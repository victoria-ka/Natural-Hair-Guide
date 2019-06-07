<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Natural Hair Guide</title>
        <meta name="description" content="A site educating users on hair types and hair care.">
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>
       
        <?php include('nav.php'); ?>
        
        <?php
			$message = "";
        	if ( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message']) ) {
				
				$contact_name = $_POST['name'];
				$contact_email = $_POST['email'];
				$contact_subject = $_POST['subject'];
                $contact_message = $_POST['message'];
				
				if ( !empty($contact_name) && !empty($contact_email) && !empty($contact_subject) && !empty($contact_message)) {
					
					$to = $contact_email;
					$body = $contact_name."\n".$contact_message;
					$headers = "From: ".$contact_email;
					
					if (mail($to, $contact_subject, $body, $headers)) {
						$message = "The message was sent successfully.";
					}
					
				}
				else {
					
					$message = "Sorry, an error occured.<br> Please include all required fields.";
					
				}
			}
        	
        
        ?>
        
        <div class="mycontainer">
           <div class="row">
                <div class="col s12">
                    <h1>Contact Us</h1>
                </div>
            </div>
            <div class="row">
                <form class="col s12 m12 l6 xl6" action="contact.php" method="POST">

                    <div class="row">
                        <div class="input-field col s12">
                            <input placeholder="John Doe" name="name" type="text" class="validate">
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input placeholder="john@doe.com" name="email" type="text" class="validate">
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input placeholder="Subject" name="subject" type="text" class="validate">
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input placeholder="Write your message here." name="message" type="text" class="validate">
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input type="submit" value="Send" class="waves-effect waves-light btn">
                        </div>
                    </div>  

                </form>

                <div class="col s12 m12 l6 xl6">
                    <img class="responsive-img" alt="natural hair pic" src="img/commcin3.jpeg">
                </div>
            </div>
        </div>
        
        <div class="footer-copyright teal lighten-2 white-text footerspacing">
            <div class="container center-align">
            © Victoria K Studio 2017 
            </div>
        </div>
        
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <script>
            $(document).ready( function() {
                $(".button-collapse").sideNav();
            });
        </script>
        
    </body>
    
</html>