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

                $emailTo="random@domain.com";

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
    <title>Free Portfolio Webpage by Jatin Gupta</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="css/custom.css" rel="stylesheet" type="text/css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

    <link id="scrollUpTheme" rel="stylesheet" href="css/tab.css">
    <link rel="stylesheet" href="css/labs.css">





  </head>

  <body id="page-top" data-spy="scroll" data-target=".navbar-collapse">
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top ">
      <div class="container">

        <div class="navbar-header page-scroll">
             <a href="#home" class="navbar-brand logo page-scroll">Dev Gupta</a>
             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="page-scroll" href="#home"></a>        
        </div>

        <div id="navbar" class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#home" class="page-scroll">Home</a></li>
            <li><a href="#resume" class="page-scroll">Resume</a></li>
            <li><a href="#projects" class="page-scroll">Projects</a></li>
            <li><a href="#whatsnew" class="page-scroll">What's New?</a></li>
            <li><a href="#contact" class="page-scroll">Contact</a></li>

          </ul>
        </div>

      </div>
    </div>


        <div class="container contentContainer " id="home">
                <div class="row homePageTop ">
                    <div class="image_description">
                        <div class="col-md-6">
                            <div id="circular" class="text-center ">
                                <img src="images/sevenUp.jpg" alt="dev gupta" id="profile_image">
                            </div>
                        </div>

                        <div class="col-md-6 short_description space2 ">
                            <p> This is a free template, feel free to use it for your needs.</p> <p> Sed ut perspiciatis unde omnis iste natus error sit voluptatem. </p> <p> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        </div>

                    </div>     
                </div>
        </div>


        <div class="container"> 
          <div class="contentContainer " id="resume">
            <div class="resumePageTop">

              <!-- Work  -->
              <div class="work">
                  <div class="row">
                    <div class="col-md-2 work_class "><h4>Work</h4></div>
                    <div class="col-md-7 ">
                      <div class="job">
                        <div class="position_title">Awesome Guy</div>
                        <div class="company_title">XYZ Company</div>
                        <div class="job_period">March 2010 - June 2010</div>
                        <div class="job_details">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat</div>
                      </div>
                      <div class="job">
                        <div class="position_title">Smart Guy</div>
                        <div class="company_title">XYZ Company</div>
                        <div class="job_period">March 2010 - June 2010</div>
                        <div class="job_details">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat</div>
                      </div>
                      <div class="job">
                        <div class="position_title">Nerd Guy</div>
                        <div class="company_title">XYZ Company</div>
                        <div class="job_period">March 2010 - June 2010</div>
                        <div class="job_details">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat</div>
                      </div>                      
                    </div>

                    <div class="col-md-3 ">
                      <div class="skill_box">
                          <p class="skills">Skills</p>Machine Learning<br>Web Development<br>Computational Analysis<br>Statistics<br>Selenium Web driver<p></p>
                          <p class="skills">Languages</p>Python<br>Java<br>HTML/CSS/JS<br>R<br>PHP
                    </div>
                    </div>
                  </div> <!-- End Work -->
              </div>

              <!-- Education  -->
              <div class="work">
                  <div class="row">
                    <div class="col-md-2 education_class "><h4>Education</h4></div>
                    <div class="col-md-7 ">

                      <div class="job">
                        <div class="position_title">University of Waterloo</div>
                        <div class="company_title">Doctor of Philosophy</div>
                        <div class="job_period">May 2006 - March 2010</div>
                        <div class="job_details">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat</div>
                      </div>

                      <div class="job">
                        <div class="position_title">Oxford University</div>
                        <div class="company_title">Master of Science</div>
                        <div class="job_period">May 2004 - April 2006</div>
                        <div class="job_details">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat</div>
                      </div>

                      <div class="job">
                        <div class="position_title">Cambridge University</div>
                        <div class="company_title">Bachelor of Science</div>
                        <div class="job_period">May 2000 - March 2004</div>
                        <div class="job_details">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat</div>
                      </div>                      

                    </div>
                  </div> <!-- End Education -->
              </div>

            </div>
          </div>
        </div>



        <div class="container">
          <div class="contentContainer" id="projects">
            <div class="resumePageTop">

                  
                    <div><h2 id="project_page">Projects</h2></div>                    

                    <div>
                          <div class="project_title">
                              <h2><font color="#F0CA43">01</font> Project 1 Title</h2>
                          </div>
                          <div class="project_description">This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. </div>
                    </div>

                    <div>
                          <div class="project_title">
                              <h2><font color="#F0CA43">02</font> Project 2 Title</h2>
                          </div>
                          <div class="project_description">This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. </div>
                    </div>

                    <div>
                          <div class="project_title">
                              <h2><font color="#F0CA43">03</font> Project 3 Title</h2>
                          </div>
                          <div class="project_description">This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. This is project description. </div>
                    </div>
                  
           
            </div>
           </div> 
        </div>

        <div class="container">
            <div class=" contentContainer whatsnewPageTop" id="whatsnew">
              <div class="row whatsnewPageText">
                  <h2>What's New?</h2>
                  <ul>
                      <li class="whatsNewli">On June 8, 2015, I started learning Django Framework. Hoping to find a challenging project that I would be able to share with you all on my <a href="https://github.com/" target="_blank">github</a> page.
                      <li class="whatsNewli">On May 31, 2015, I finished my first challenging project using Bootstrap framework. I created a single page template with smooth scroll for personal portfolio. This template is available for free on my github <a href="https://github.com/" target="_blank">page</a>.
                      <li class="whatsNewli">On Jan 25, 2015, I finished my first challenging project using Selenium framework. I created a test suite for testing chrome browser extension. This test suite is available for free and can be accessued using the following <a href="https://github.com/" target="_blank">link</a>.
                      <li class="whatsNewli">On November 9, 2014, I created my first load testing using Jmeter. The load test file (*.jmx) can be accessed <a href="https://github.com/" target="_blank">here</a>.
                  </ul>          
             </div>
            </div>
        </div>

        <div class="container contentContainer contactPageTop" id="contactbox">

                  <div class="row">

                              <h2 id="contact" >CONTACT</h2>
                              <div class="col-md-6">


                              <?php echo $result; ?>
                        
                              <p class="lead">Looking forward to answering your email</p>
                              <form method="post" action="#error-check" id="error-check">

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your name here" value="<?php echo $_POST['name']; ?>"/>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Your email here" value="<?php echo $_POST['email']; ?>"/>
                                </div>

                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input type="text" name="subject" class="form-control" id="subject" placeholder="Your subject here" value="<?php echo $_POST['subject']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="message" class="form-control" rows="3" placeholder="Your message here"><?php echo $_POST['message']; ?></textarea>
                                </div>

                                <input type="submit" name="submit" class="btn btn-default btn-lg pull-right" value="Submit"/>

                              </form>

                        </div>

                        <div class="col-md-6" id="contact_links">                     
                              <a href="https://www.linkedin.com/" target="_blank"> <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-linkedin fa-stack-1x fa-inverse"></i></span> </a>
                              <a href="https://github.com/" target="_blank"> <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i>  <i class="fa fa-github fa-stack-1x fa-inverse"></i></span> </a>
                              <a href="https://twitter.com/" target="_blank"> <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i>  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span> </a>
                              <a href="mailto:me@devgupta.com" target="_blank"> <span class="fa-stack fa-lg">  <i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i></span> </a>
                              <p><span id="email_id">Email</span> me@devgupta.com</p>
                        </div>

                  </div>

        </div>        



        <!--Fixed footer -->
        <div class="navbar navbar-default navbar-static-bottom footer clear-navbar-inner">
          <div class="container">
                <div class="row">
                  <!--
                    <div class="col-md-6 text-center">                     
                          <a href="https://www.linkedin.com/" target="_blank"> <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-linkedin fa-stack-1x fa-inverse"></i></span> </a>
                          <a href="https://github.com/" target="_blank"> <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i>  <i class="fa fa-github fa-stack-1x fa-inverse"></i></span> </a>
                          <a href="https://twitter.com/" target="_blank"> <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i>  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span> </a>
                          <a href="mailto:me@devgupta.com" target="_blank"> <span class="fa-stack fa-lg">  <i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i></span> </a>
                          
                    </div>
                  -->
                    <div class="col-md-12 text-center copyright">
                          Copyright &copy; 2015 Dev Gupta. All Rights Reserved.
                    </div>
                    
                </div>
          </div>
        </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script>$(".contentContainer").css("min-height", $(window).height());</script>


    <!-- jQuery (necessary for scroll-up plugins) starts here-->
    <script src="js/jquery.scrollUp.min.js"></script>
    <script>

                    $(function () {
                        $.scrollUp({
                            animation: 'fade',
                            activeOverlay: '#FFFFFF',
                            scrollImg: {
                                active: true,
                                type: 'background',
                                src: 'images/top.png'
                            }
                        });
                    });
                    $('#scrollUpTheme').attr('href', 'css/image.css');
                    $('.image-switch').addClass('active');

    </script>
    <!-- jQuery (necessary for scroll-up plugins) ends here -->

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
    
    <!-- To leave any feedback, please visit http://www.jatingupta.com/ -->

  </body>
</html>