<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.ico">

    <title>EduZone Services</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet"> 
    <link href="dist/slick/slick-theme.css" rel="stylesheet">
    <link href="dist/slick/slick.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Vollkorn" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>
    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
     <link href="contact-us.css" rel="stylesheet">   
  </head>

  <body>
    <header>
      <div class="header-top">
        <div class="container">
          <div class="logo">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <a href="index.html" class="logo-img"><img src="images/logo.png"></a>
              </div>
              <div class="col-lg-offset-4 col-lg-2 col-md-6 col-sm-6 col-xs-6">
                <div class="social-icons">
                  <ul>
                     <li><a href="https://www.facebook.com/Eduzoneoverseascareers/" class="facebook" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="https://twitter.com/eduzone2" class="twitter" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCMAADi_Q7MUcJArypYmDj4w?view_as=subscriber" class="youtube" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="header-bott">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button">                
              <div class="bar1"></div>
              <div class="bar2"></div>
              <div class="bar3"></div>                
            </button>

            <div class="collapse navbar-collapse">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about-us.html">About Us</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" href="services.html">Services</a>
                  <ul class="dropdown-list">
                    <li><a class="nav-link" href="services.html">Study in Abroad</a></li>
                    <li><a class="nav-link" href="Settle-in-abroad.html">Settle in Abroad</a></li>
                    <li><a class="nav-link" href="Work-in-abroad.html">Work in Abroad</a></li>
                    <li><a class="nav-link" href="Visit-abroad.html">Visit Abroad</a></li>
                  </ul>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="contact-us.php">Contact Us</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
      <main role="main" class="main">
        <div class="container">
          <div class="contact-us">
            <?php
              $action=$_REQUEST['action'];
                if ($action=="") /** display the contact form */
              {
            ?>
             <h1>Submit Your Qwery</h1>
            <form action="" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="action" value="submit">
              <div class="half left cf">
                <input type="text" name="name" id="input-name" placeholder="Name" required >
                <input type="email" name="email" id="input-email" placeholder="Email address" required>
                <input type="text" name="mobile" id="input-mobile" placeholder="Mobile" required>
              </div>
              <div class="half right cf">
                <input type="text" name="subject" id="input-subject" placeholder="Subject" required>
                <textarea  name="message" type="text" id="input-message" placeholder="Message" required></textarea>
              </div>
              <div class="">
                <input type="file" name="attach1" id="attach1" required />
              </div>
                <input type="submit" value="Submit" id="input-submit">
            </form>
          <?php
            }
            else{
              /* send the submitted data */

            
                $to = "eduzonecareers@gmail.com"; 
                $from = $_POST['email']; 
                $name = $_POST['name'];
                $mobile = $_POST['mobile'];
                $subject = $_POST['subject'];
                $message = $name . " " . $mobile . " wrote the following:" . "\n\n" . $_POST['message'];

                //$headers = "From:" . $from;
                //mail($to,$subject,$message,$headers);
                if(sendEmailWithAttachments($to,$from,$name,$mobile,$subject,$message)){
                ?>
                <div class="alert alert-success">
                   Thank you <strong><?php echo $name ?></strong>, we will contact you shortly.
                </div>
                <?php
                  }
                  else{
                      echo "Failed to send the email...";
                }            
            }
          ?>
          </div>
          <div class="map">
            <div class="row">
              <div class="col-lg-6">
                <address class="vcard">
                   <div class="adr">
                      <div class="addr">H.No 3-6-717/1, Street No:12</div>
                      <div class="addr">HimayathNagar Opp: Union Bank lane</div > 
                      <div class="addr">Hyderabad, 500029</div >
                      <div class="addr">Telangana, India</div >
                      <div class="addr">Tel: 040 4854 7848</div>
                      <div class="addr">Tel: +91 991 299 3201</div>
                      <div class="addr">hr@eduzone.co.in</div>
                      <div class="addr">eduzonecareers@gmail.com</div>
                   </div>             
                </address>
              </div>
              <div class="col-lg-6">
                <div id="googleMaps" style="width:100%;height:300px;"></div>
              </div>
            </div>
          </div>
        </div>
      </main>
      <footer>
        <div class="footer-main">
          <div class="container">
            <div class="footer-inner">
              <div class="row">
                <div class="col-lg-3">               
                  <div class="pages">
                    <ul>
                      <li><h4>Pages</h4></li>
                      <li><a href="#">About Us</a></li>
                      <li><a href="#">Services</a></li>
                      <li><a href="#">Latest News</a></li>
                      <li><a href="#">People</a></li>
                      <li><a href="#">Contact Us</a></li>
                    </ul>
                  </div>              
                </div>
                <div class="col-lg-3">
                  <div class="Terms">
                    <ul>
                      <li><h4>Terms</h4></li>
                      <li><a href="#">FAQ's</a></li>
                      <li><a href="#">Terms & Conditions</a></li>
                      <li><a href="#">Privecy & Policy</a></li>
                      <li><a href="#">Lience Policy</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 site-bottom-2">
                                   
                  <h4 class="widget-title">Twitter feed</h4>
                  <div class="twitter-feed">
                    <div class="twitter-feed-icon">
                      <i class="fa fa-twitter"></i>
                    </div>
                    <div class="twitter-feed-content">
                      <p>Our every products has a grate discount. Get 50% discount to get started with <a href="">#Wordpress</a> <a href="">#discount</a><br><a href="">http://t.co/Wa8Hg98Okg</a></p>
                    </div>
                  </div>
                  <div class="twitter-feed">
                    <div class="twitter-feed-icon">
                      <i class="fa fa-twitter"></i>
                    </div>
                    <div class="twitter-feed-content">
                      <p><a href="">@RidoyRajoan</a> Hi Weblos, I need a website to build. Can you help me?</p>
                    </div>
                  </div>
                  <div class="twitter-feed">
                    <div class="twitter-feed-icon">
                      <i class="fa fa-twitter"></i>
                    </div>
                    <div class="twitter-feed-content bor-btm-none">
                      <p>Themerio: <a href="">#design</a> vs <a href="">#analysis</a> which one you will prefer? <br><a href="">http://t.co/Zo71Uh9ObG</a></p>
                    </div>
                  </div>                               
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/slick/slick.js" type="text/javascript" charset="utf-8"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="script.js"></script>
    <script>
      function myMap() {
      var mapProp= {
          center:new google.maps.LatLng(51.508742,-0.120850),
          zoom:15,
      };
      var map=new google.maps.Map(document.getElementById("googleMaps"),mapProp);
      }
    </script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
  </body>
</html>
<?php
function sendEmailWithAttachments($to,$from,$name,$mobile,$subject,$message){     
  if(isset($_FILES)) {
    $allowedExtensions = array("pdf","doc","docx","gif","jpeg","jpg","JPG","png","PNG","rtf","txt","xml");
 
    $files = array();
    foreach($_FILES as $name=>$file) {
        if($file['size']>=5242880)//5mb
        {
            $fileSize=$file['size'];
            return false;
        }
        $file_name = $file['name']; 
        $temp_name = $file['tmp_name'];
        $file_type = $file['type'];
        $path_parts = pathinfo($file_name);
        $ext = $path_parts['extension'];
        if(!in_array($ext,$allowedExtensions)) {
            return false;
            die("File $file_name has the extensions $ext which is not allowed");
        }

        //move the file to the server, cannot be skipped
        $server_file="/tmp/$path_parts[basename]";
        move_uploaded_file($temp_name,$server_file);
        array_push($files,$server_file);
        //array_push($files,$temp_name);
    }

    // email fields
    $headers = "From: $from";


    // boundary 
    $semi_rand = md5(time()); 
    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 

    // headers for attachment 
    $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 

    // multipart boundary 
    $message = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/plain; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n"; 
    $message .= "--{$mime_boundary}\n";

    // preparing attachments
    for($x=0;$x<count($files);$x++){
        $file = fopen($files[$x],"rb");
        $data = fread($file,filesize($files[$x]));
        fclose($file);
        $data = chunk_split(base64_encode($data));
        $message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$files[$x]\"\n" . 
        "Content-Disposition: attachment;\n" . " filename=\"$files[$x]\"\n" . 
        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
        $message .= "--{$mime_boundary}\n";
    }
    return @mail($to, $subject, $message, $headers); 
    }
}
