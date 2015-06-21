<?php

  if($_POST["submit"]) {

    if(!$_POST['name']) {
        $error="<br />Please enter your name"; 
    }

    if (!$_POST['email']) {
        $error.="<br />Please enter your email address";
     }

    if (!$_POST['subject']) {
        $error.="<br />Please enter your subject";
     }

    if (!$_POST['message']) {
        $error.="<br />Please enter your message";
     }


    if ($_POST['email']!="" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
       $error.="<br />Please enter a valid email address";
     }
      
    if ($error) {
       $result='<div class="alert alert-danger"><strong>There were error(s) in your form:</strong>'.$error.'</div>';
     } 

    else {

                $emailTo="jgupta@brightedge.com";

                $subject = $_POST["subject"];

                $body= $_POST["message"];

                $headers="Sender's email address: ".$_POST["email"];


         if (mail($emailTo, $subject, "Name: ".$_POST['name'].
                                    " Email: ".$_POST['email'].
                                    " Message: ".$_POST['message'])) {

        $result='<div class="alert alert-success"><strong>Thank you!</strong> I\'ll be in touch soon.</div>';

      } else {

        $result='<div class="alert alert-danger">Sorry, there was an error sending your message. Please try again later.</div>';

     }
   }

  }

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Email from contact form</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">

      .emailForm {
        margin-top: 20px;
      }

      #form {
        padding-bottom: 20px;
      }

    </style>

  </head>

  <body>


        <div class="container ">

                  <div class="row">

                       <div class="col-md-6 col-md-offset-3 emailForm">

                          <h2>CONTACT</h2>

                              <?php echo $result; ?>

                              <p class="lead">Looking forward to answering your email</p>

                              <form method="post">

                                <div class="form-group">
                                    <label for="name">Your Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Your name" value="<?php echo $_POST['name']; ?>"/>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" name="email" class="form-control" placeholder="Your email" value="<?php echo $_POST['email']; ?>"/>
                                </div>

                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input type="text" name="subject" class="form-control" placeholder="Your subject" value="<?php echo $_POST['subject']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea class="form-control" name="message" rows="3" placeholder="Your message"><?php echo $_POST['message']; ?></textarea>
                                </div>

                                <input type="submit" name="submit" class="btn btn-success btn-lg pull-right" value="Submit"/>

                              </form>

                        </div>

                  </div>
            
          </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>