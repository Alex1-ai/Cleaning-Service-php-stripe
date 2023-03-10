
<!--
  $numero = 12;
  //SANITIZE GET ARRAY
    $get = filter_var_array($_GET, FILTER_SANITIZE_URL);
    $servicetype = $get['servicetype'];
    $frequency = $get['frequency'];
    $bedroom = $get['bedroom'];
    $bathroom = $get['bathroom'];
    $half_bathroom = $get['half_bathroom'];
    $sq_ft = $get['sq_ft'];
    $total = 78;*/
-->
<?php 
    //sanitize get array
    $get = filter_var_array($_GET, FILTER_SANITIZE_URL);
    $serviceType = $get['serviceType'];
    $frequency = $get['frequency'];
    $bedroom = $get['bedroom'];
    $bathroom = $get['bathroom'];
    $half_bath = $get['half_bath'];
    $sq_ft = $get['sq_ft'];
    $hearUs = $get['hearUs'];
    $zipcode = $get['zipcode'];
    $firstname = $get['firstname'];
    $lastname = $get['lastname'];
    $Email = $get['Email'];
    $address = $get['address'];
    $phone = $get['phone'];
    $apartUnit = $get['apartUnit'];
    $inputDate = $get['inputDate'];
    $propertyType = $get['propertyType'];


    

    //globalization
    

    

    //function to compute the ticket
    function compute($plusBed, $plusBath, $plusHalf, $plusSq, $total_service_price){
        $serTo = ($plusBed * 20.00) + ($plusBath * 35.00) + ($plusHalf * 15.00) + ($plusSq * 40.00) + $total_service_price;
        $freDis = (($serTo *10)/100)/* + ($plusBed * 20.00) + ($plusBath * 35.00) + ($plusHalf * 15.00) + ($plusSq * 40.00)*/;
        $disTo = $serTo;
        $conv = ($disTo*3)/100;
        $Tot = $serTo + $conv;
        $Rec = $Tot - $freDis;

        
        /*echo "<hr><br>";
        echo "Service total ", number_format($serTo, 2), " <br>";
        echo "Frequency discount ", number_format($freDis, 2), " <br>";
        echo "Discounted total ", number_format($disTo, 2), " <br>";
        echo "Convenience Fee ", number_format($conv, 2), " <br>";
        echo "Total ", number_format($Tot, 2), " <br>";
        echo "Recurring Total ", number_format($Rec, 2), " <br>";*/

        global $TOTAL;
        $TOTAL = $Tot;
    }


    //switch case to choose service type price
    switch ($serviceType){
        case 1:
            $total_service_price = 190.00;
            $bedroomVal = intval($bedroom);
            $bathroomVal = intval($bathroom);
            $halfBathVal = intval($half_bath);
            $sqFtVal = intval($sq_ft);
            compute($bedroomVal, $bathroomVal, $halfBathVal, $sqFtVal, $total_service_price);
            break;
        case 2:
            $total_service_price = 395.00;
            $bedroomVal = intval($bedroom);
            $bathroomVal = intval($bathroom);
            $halfBathVal = intval($half_bath);
            $sqFtVal = intval($sq_ft);
            compute($bedroomVal, $bathroomVal, $halfBathVal, $sqFtVal, $total_service_price);
            break;
        case 3:
            $total_service_price = 475.00;
            $bedroomVal = intval($bedroom);
            $bathroomVal = intval($bathroom);
            $halfBathVal = intval($half_bath);
            $sqFtVal = intval($sq_ft);
            compute($bedroomVal, $bathroomVal, $halfBathVal, $sqFtVal, $total_service_price);
            break;
        default:
            echo "error";
            break;
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="../assets/vender/bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  <!-- BoxIcons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css" integrity="sha512-pVCM5+SN2+qwj36KonHToF2p1oIvoU3bsqxphdOIWMYmgr4ZqD3t5DjKvvetKhXGc/ZG5REYTT6ltKfExEei/Q==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet' />

    <!-- owl-carosel css-->
    <link rel="stylesheet" href="../assets/vender/owl-carosel/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/vender/owl-carosel/owl.theme.default.min.css">

    <!--  Swiper css  -->
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!--  Swiper css  -->

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- CSS -->

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

  <title>Pay Page</title>
</head>
<body>
    <header id="header">
      <nav class="navbar navbar-expand-sm navbar-light fixed-top bgcolor">
          <div class="container">
              <a class="navbar-brand" href="../index.html">
                  <h1 style="padding-top: 0px;">Elyse<span>clean</span></h1>
              </a>
              <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
              <div class="collapse navbar-collapse" id="collapsibleNavId">
                  <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                      <li class="nav-item">
                          <a class="nav-link active" href="../index.html#">HOME</a>
                      </li>
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="../index.html#services" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      SERVICES
                    </a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="../pages/carpet.html">CARPET CLEANING</a></li>
                              <li><a class="dropdown-item" href="../pages/deep.html">DEEP CLEANING</a></li>
                              <li><a class="dropdown-item" href="../pages/desinfecting.html">DESINFECTING SERVICE</a></li>
                              <li><a class="dropdown-item" href="../pages/house.html">HOUSE CLEANING</a></li>
                              <li><a class="dropdown-item" href="../pages/Move.html">MOVING</a></li>
                              <li><a class="dropdown-item" href="../pages/office.html">OFFICE & COMMERCIAL</a></li>
                          </ul>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="../index.html#contact">CONTACT</a>
                      </li>
              </div>
          </div>
      </nav>
    </header>
  <div class="container pb-5" style="margin-top: 100px;" style="">
    <h2 class="my-4 text-center">Complete your Booking</h2>
    <div class="container text-center" style="width: 500px;">
      <!--<table class="table table-borderless">
        <thead>
          <tr>
            
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Industry</th>
            <td scope="col">Residential Cleaning</td>
          </tr>
          <tr>
            <th scope="row">Service</th>
            <td><?php echo $servicetype; ?></td>
          </tr>
          <tr>
            <th scope="row">Frequency</th>
            <td colspan="2"><?php echo $frequency; ?></td>
          </tr>
          <tr>
            <th scope="row">Bedrooms</th>
            <td colspan="2"><?php echo $bedroom; ?>.</td>
          </tr>
          <tr>
            <th scope="row">Bathrooms</th>
            <td colspan="2"><?php echo $bathroom; ?></td>
          </tr>
          <tr>
            <th scope="row">Half Baths</th>
            <td colspan="2"><?php echo $half_bathroom; ?></td>
          </tr>
          <tr>
            <th scope="row">Sq Feet</th>
            <td colspan="2"><?php echo $sq_ft; ?></td>
          </tr>
          <tr style="font-size: 36px; color: var(--brand);">
            <th scope="row">Total</th>
            <td colspan="2">$<?php echo $numero?></td>
          </tr>
        </tbody>
      </table>-->
      <h2 class="my-4 text-center">Complete your Booking</h2>
        <div class="container text-center" style="width: 500px;">
          <table class="table table-borderless">
            <thead>
              <tr>
                
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Industry</th>
                <td scope="col">Residential Cleaning</td>
              </tr>
              <tr>
                <th scope="row">Service</th>
                <td>
                    <?php switch($serviceType){
                        case 1:
                            echo "Standard cleaning";
                            break;
                        case 2:
                            echo "Deep cleaning";
                            break;
                        case 3:
                            echo "Move In/Out cleaning";
                            break;
                        default:
                            echo "Awesome world";
                    }?>
                </td>
              </tr>
              <tr>
                <th scope="row">Frequency</th>
                <td colspan="2">
                <?php switch($frequency){
                        case 1:
                            if($serviceType == 1){
                                echo "Every week";
                            }
                            break;
                        case 2:
                            if($serviceType == 2){
                                echo "One Time";
                            }else{
                                echo "Every 2 weeks";}
                            break;
                        case 3:
                            if($serviceType == 3){
                                echo "One Time";
                            }else{
                                echo "Every 4 weeks";
                            }
                            break;
                        default:
                            echo "One Time";
                    }?>
                </td>
              </tr>
              <tr>
                <th scope="row">Bedrooms</th>
                <td colspan="2"><?php echo $bedroom; ?></td>
              </tr>
              <tr>
                <th scope="row">Bathrooms</th>
                <td colspan="2"><?php echo $bathroom; ?></td>
              </tr>
              <tr>
                <th scope="row">Half Baths</th>
                <td colspan="2"><?php echo $half_bath; ?></td>
              </tr>
              <tr>
                <th scope="row">Sq Feet</th>
                <td colspan="2">
                    <?php switch($sq_ft){
                        case 1:
                            echo "1 - 999 Sq Ft";
                            break;
                        case 2:
                            echo "1000 - 1499 Sq Ft";
                            break;
                        case 3:
                            echo "1500 - 1999 Sq Ft";
                            break;
                        case 4:
                            echo "2000 - 2499 Sq Ft";
                            break;
                        case 5:
                            echo "2500 - 2999 Sq Ft";
                            break;
                        case 6:
                            echo "3000 - 3499 Sq Ft";
                            break;
                        default:
                            echo "Awesome world";
                    }?></td>
              </tr>
              <tr style="font-size: 36px; color: var(--brand);">
                <th scope="row" style="color: blue">Total</th>
                <td colspan="2" style="color: blue">$<?php echo $TOTAL?></td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>
    <h2 class="my-5 text-center">Please enter your informations</h2>
    <div class="container" style="width: 500px;">
      <form action="./charge.php" method="post" id="payment-form">
        <div class="form-row">
        <select  id="propertyType" name="firstname" class="form-select border-1 " style="height: 55px; display: none;">
            <option selected type="text "><?php echo $firstname?></option>
        </select>
        <select  id="propertyType" name="lastname" class="form-select border-1 " style="height: 55px; display: none;">
            <option selected type="text "><?php echo $lastname ?></option>
        </select>
        <select  id="propertyType" name="Email" class="form-select border-1 " style="height: 55px; display: none;">
            <option selected type="text "><?php echo $Email?></option>
        </select>
        <select  id="propertyType" name="address" class="form-select border-1 " style="height: 55px; display: none;">
            <option selected type="text "><?php echo $address?></option>
        </select>
        <select  id="propertyType" name="phone" class="form-select border-1 " style="height: 55px; display: none;">
            <option selected type="text "><?php echo $phone?></option>
        </select>
        <select  id="propertyType" name="apartUnit" class="form-select border-1 " style="height: 55px; display: none;">
            <option selected type="text "><?php echo gettype($apartUnit)?></option>
        </select>
        <select  id="propertyType" name="inputDate" class="form-select border-1 " style="height: 55px; display: none;">
            <option selected type="text "><?php echo $inputDate?></option>
        </select>
        <select  id="propertyType" name="hearUs" class="form-select border-1 " style="height: 55px; display: none;">
            <option selected type="text "><?php echo $hearUs?></option>
        </select>
        <select  id="propertyType" name="zipcode" class="form-select border-1 " style="height: 55px; display: none;">
            <option selected type="text "><?php echo $zipcode?></option>
        </select>
        <select  id="propertyType" name="propertyType" class="form-select border-1 " style="height: 55px; display: none;">
            <option selected type="text "><?php echo $propertyType?></option>
        </select>
        <select  id="propertyType" name="frequency" class="form-select border-1 " style="height: 55px; display: none;">
            <option selected type="text "><?php echo $frequency?></option>
        </select>
        <select  id="propertyType" name="bedroom" class="form-select border-1 " style="height: 55px; display: none;">
            <option selected type="text "><?php echo $bedroom?></option>
        </select>
        <select  id="propertyType" name="bathroom" class="form-select border-1 " style="height: 55px; display: none;">
            <option selected type="text "><?php echo $bathroom?></option>
        </select>
        <select  id="propertyType" name="half_bath" class="form-select border-1 " style="height: 55px; display: none;">
            <option selected type="text "><?php echo $half_bath?></option>
        </select>
        <select  id="propertyType" name="sq_ft" class="form-select border-1 " style="height: 55px; display: none;">
            <option selected type="text "><?php echo $sq_ft?></option>
        </select>
        <select  id="propertyType" name="serviceType" class="form-select border-1 " style="height: 55px; display: none;">
            <option selected type="text "><?php echo $serviceType?></option>
        </select>
        <select  id="propertyType" name="totalCount" class="form-select border-1 " style="height: 55px; display: none;">
            <option selected type="text "><?php echo $TOTAL?></option>
        </select>
        <input type="text" name="first_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="First Name">
        <input type="text" name="last_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Last Name">
        <input type="email" name="email" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Email Address">
          <div id="card-element" class="form-control">
            <!-- a Stripe Element will be inserted here. -->
          </div>

          <!-- Used to display form errors -->
          <div id="card-errors" role="alert"></div>
        </div>
        <p class="mt-4">Accept <a href=""style="color: blue; text-decoration: none;">Terms & Condition </a>and <a href=""style="color: blue; text-decoration: none;">Privacy Policy</a></p>
        <p>By entering any information, you affirm you have read & agree to the Terms of Service & Privacy Policy. You also agree & authorize Queen Bee Cleaning to contact you for updates/or promotional purposes.</p>
        <button>Submit Payment</button>
      </form>
    </div>
  </div>

    <!-------------x Footer section x-------------->
    <footer class="footer-distributed">

        <div class="footer-left">

            <h3>ElyseClean<span>logo</span></h3>

            <p class="footer-links">
                <a href="../index.html#" class="link-1">Home</a>

                <!--<a href="#">Blog</a>-->

                <a href="../index.html#services">Services</a>

                <a href="../index.html#about">About</a>

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
    <!-------------x Footer section x-------------->


<!------------jquery--------->
<script src="../assets/vender/jquery/jquery.js "></script>
<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js " integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk " crossorigin="anonymous "></script>
<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js " integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk " crossorigin="anonymous "></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js " integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa " crossorigin="anonymous "></script>
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js "></script>
<!-- BoxIcons js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/dist/boxicons.min.js " integrity="sha512-y8/3lysXD6CUJkBj4RZM7o9U0t35voPBOSRHLvlUZ2zmU+NLQhezEpe/pMeFxfpRJY7RmlTv67DYhphyiyxBRA==" crossorigin=" anonymous " referrerpolicy="no-referrer "></script>
<!-- owl-carosel js -->
<script src="../assets/vender/owl-carosel/owl.carousel.min.js "></script>
<!-- Javascript script -->
<script src="../assets/js/main.js "></script>
<!-- Javascript script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://js.stripe.com/v3/"></script>
<script src="./js/charge.js"></script>
<script src="../test/test.js"></script>
</body>
</html>