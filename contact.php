<?php
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    //Load Composer's autoloader
    require 'vendor/autoload.php';
    
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    $name = $_POST['first_name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    try {
        //Server settings
        $mail->SMTPDebug = false;          //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp-relay.sendinblue.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'richlystudiosit@gmail.com';                     //SMTP username
        $mail->Password   = 'd0vRb6BzSOjFm5gD';                               //SMTP password
        $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('richlystudiosit@gmail.com', 'Richly Studios');
        $mail->addAddress('deoobomby@gmail.com');     //Add a recipient
    
        $body = "<p><h1>Hello this is a message coming from Elyseclean website (<span style='color: orange;'> Contact section</span>)</h1> \r".
        "Customer Name: ".$name."<br>\r".
        "Customer Email: ".$email."<br>\r".
        "Customer Subject: ".$subject."<br>\r".
        "Customer Message: ".$message."<br>\r"
        ."</p>\r";
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'This is a test email';
        $mail->Body    = $body;
        $mail->AltBody = strip_tags($body);
    
        $mail->send();
        
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS v5.2.0-beta1 -->
        <link rel="stylesheet" href="./assets/vender/bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- BoxIcons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css" integrity="sha512-pVCM5+SN2+qwj36KonHToF2p1oIvoU3bsqxphdOIWMYmgr4ZqD3t5DjKvvetKhXGc/ZG5REYTT6ltKfExEei/Q==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />

    <!-- owl-carosel css-->
    <link rel="stylesheet" href="./assets/vender/owl-carosel/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/vender/owl-carosel/owl.theme.default.min.css">

    <!--  Swiper css  -->
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!--  Swiper css  -->

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- CSS -->

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <title>Thank you!</title>
</head>
<body>
<header id="header">
        <nav class="navbar navbar-expand-sm navbar-light fixed-top bgcolor">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <h1 style="
                    padding-top: 0px;">Elyse<span>clean</span></h1>
                </a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">ABOUT</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#services" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        SERVICES
                      </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="pages/carpet.html">CARPET CLEANING</a></li>
                                <li><a class="dropdown-item" href="pages/deep.html">DEEP CLEANING</a></li>
                                <li><a class="dropdown-item" href="pages/desinfecting.html">DESINFECTING SERVICE</a></li>
                                <li><a class="dropdown-item" href="pages/house.html">HOUSE CLEANING</a></li>
                                <li><a class="dropdown-item" href="pages/Move.html">MOVING</a></li>
                                <li><a class="dropdown-item" href="pages/office.html">OFFICE & COMMERCIAL</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">BLOG</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--Message-->
        <div class="container" style="position: relative; top: 100px;">
            <h1 class="text-center text-dark">Thanks for being awesome!</h1>
            <h2 class="text-center" style="font-size: 16px;">Thank you <span style="color: var(--brand);"><?php echo $_POST['first_name']?></span> for being awesome! </h2>
            <p class="contact-text text-center py-3">
                We have received your message and would like to thank you for writing to us. If your inquiry is urgent, please use the telephone number listed below to talk to one of our staff members.
                <br>
                <span style="color: var(--brand);"> (424) 465-1228</span><br>
                Otherwise, we will reply by email as soon as possible.
                <br>
                Talk to you soon!
            </p>
        </div>
    </header>






    <!-------------x Footer section x-------------->
    <footer class="footer-distributed" style="position: relative; top: 200px;">
        <div class="footer-left">
            <h3>ElyseClean<span>logo</span></h3>
            <p class="footer-links">
                <a href="#" class="link-1">Home</a>
                <!--<a href="#">Blog</a>-->
                <a href="#services">Services</a>
                <a href="#about">About</a>
                <!--<a href="#">Faq</a>-->
                <a href="#contact">Contact</a>
            </p>
            <p class="footer-company-name" style="color: #fff;">
                <a style="color: #fff;" href="https://www.flaticon.com/free-icons/carpet" title="carpet icons">Carpet icons created by Freepik - Flaticon</a> <br>
                <br> ElyseClean &copy; 2022</p>
        </div>
        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker" style="background: var(--brand);"></i>
                <p style="padding-top: 0;"><span><!--432 S. Ts Ave--></span> California USA</p>
            </div>
            <div>
                <i class="fa fa-phone" style="background: var(--brand);"></i>
                <p style="padding-top: 0;">(424) 465-1228</p>
            </div>
            <div>
                <!--<i class="fa fa-envelope"></i>-->
                <!--<p><a href="mailto:richlystudiosit@gmail.com">richlystudiosit@gmail.com</a></p>-->
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about" style="color: #fff;">
                <span>About the company</span> Reliable house cleaning professionals serving the greater seattle area. Professionalism is vital in order to achieve our high standards of quality and meticulous attention to detail.
                <div class="footer-icons">
                    <a href="#" style="background: var(--brand);"><i class="fa fa-facebook"></i></a>
                    <a href="#" style="background: var(--brand);"><i class="fa fa-twitter" style="background: var(--brand);"></i></a>
                    <a href="#" style="background: var(--brand);"><i class="fa fa-linkedin"></i></a>
                    <a href="#" style="background: var(--brand);"><i class="fa fa-instagram" aria-hidden="true"></i></i></a>
                </div>
        </div>
    </footer>
    <!--------x Footer section x-------------->

    <!------------jquery--------->
    <script src="assets/vender/jquery/jquery.js"></script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <!-- JavaScript Bundle with Popper -->    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- BoxIcons js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/dist/boxicons.min.js" integrity="sha512-y8/3lysXD6CUJkBj4RZM7o9U0t35voPBOSRHLvlUZ2zmU+NLQhezEpe/pMeFxfpRJY7RmlTv67DYhphyiyxBRA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- owl-carosel js -->
    <script src="./assets/vender/owl-carosel/owl.carousel.min.js"></script>
    <!-- Javascript script -->
    <script src="assets/js/main.js"></script>
    <!-- Javascript script -->
</body>
</html>