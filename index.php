<?php
    $message_sent = false;
    
    if (isset($_POST['email']) && $_POST['email'] != '') {
        
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $userName = $_POST['name'];
            $userEmail = $_POST['email'];
            $userPhoneNumber = $_POST['phoneNumber'];
            $howToHelp = $_POST['howToHelp'];
            $subject = "Request For Qoutation";
        
            $to = "info@harmsedigital.co.za";
            $body = "";
        
            $body .= "From $userName". "\r\n";
            $body .= "Email: $userEmail". "\r\n";
            $body .= "Phone Number: $userPhoneNumber". "\r\n";
            $body .= "Message: $howToHelp". "\r\n";
        
            mail($to, $subject, $body);

            $message_sent = true;
        }
    }
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/App.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <title>Harmse Digital Communications | Digital Printing, Marketing and VOIP Solutions</title>
</head>
<body>
    <header class="fixedToTop w-100">
        <div class="quickCTA">
            <ul class="d-flex flex-row mr-auto my-0">
                <li><a href="tel:0615592567" class="quickCTAlinks"><i class="fas fa-phone-alt"></i> 061 559 2567</a></li>
                <span class="mx-3"></span>
                <li><a href="mailto:info@harmsedigital.co.za" class="quickCTAlinks d-none d-md-block d-lg-block d-md-block"><i class="far fa-envelope"></i>  info@harmsedigital.co.za</a></li>
            </ul>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light d-flex flex-column whiteBG">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img class="img-fluid" width="150px" src="./img/harmse-digital-logo.png"/>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/index.php">Home</a>
                        </li>

<!--                         <li class="nav-item">
                            <a class="nav-link" href="/index.php">About us</a>
                        </li> -->

                        <li class="nav-item">
                            <a class="nav-link" href="/printing.php">Printing</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/marketing.php">Marketing</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/voip.php">VOIP</a>
                        </li>

                        <button class="yellowBtn ml-2" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Contact us</button>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section>
        <header>
            <div class="heroImg d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="textHero">ELEVATE YOUR</h1>
                <h1 class="textBlueBG heroText textHero tochange" id="temp"></h1>
                <h1 class="textHero">WITH US</h1>

                <div class="d-flex">
                    <a class="yellowPinkBtn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Get a qoute</a>
<!--                     <span class="mx-4"></span> -->
<!--                     <a class="whiteBlueBtn">Learn more</a> -->
                </div>
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Fill in the form and we will contact you within 24hrs</h5>
                        </div>
                        <div class="modal-body">
                            <form method="POST" class="d-flex flex-column">
                                <input name="name" class="myInput" type="text" placeholder=" Name">
                                <input name="email" class="mt-3 myInput" type="email" placeholder=" Email">
                                <input name="phoneNumber" class="mt-3 myInput" type="tel" placeholder=" Phone number">

                                <textarea name="howToHelp" class="mt-3 myInput" placeholder=" How can we help you?"></textarea>
                                
                                <button type="submit" class="yellowPinkBtn mt-3">Send</button>
                            </form>
                        </div>
<!--                         <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div> -->
                    </div>
                    </div>
                </div>
  
            </div>
        </header>

        <article class="container py-5">
            <header class="text-center py-3">
                <h1 class="headerOne">What We Do</h1>
                <h1 class="blueLine"></h1>
                <p>This is how we help your grow your business</p>
            </header>

            <div class="row text-center">
                <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 my-3">
                    <a href="./printing.php" class="d-flex flex-column align-items-center">
                        <div class="roundBlueBG d-flex justify-content-center align-items-center">
                            <img src="/img/printing.png" class="img-fluid" width="75px"/>
                        </div>
                        <p class="pt-2">Printing</p>
                    </a>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 my-3">
                    <a href="./marketing.php" class="d-flex flex-column align-items-center">
                        <div class="roundBlueBG d-flex justify-content-center align-items-center">
                            <img src="/img/marketing.png" class="img-fluid" width="65px"/>
                        </div>
                        <p class="pt-2">Marketing</p>
                    </a>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 my-3">
                    <a href="./voip.php" class="d-flex flex-column align-items-center">
                        <div class="roundBlueBG d-flex justify-content-center align-items-center">
                            <img src="/img/voip.png" class="img-fluid" width="75px"/>
                        </div>
                        <p class="pt-2">VOIP</p>
                    </a>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 my-3">
                    <a href="./innovative.html" class="d-flex flex-column align-items-center">
                        <div class="roundBlueBG d-flex justify-content-center align-items-center">
                            <img src="/img/harmse-innovative-logo-block.png" class="img-fluid" width="65px"/>
                        </div>
                        <p class="pt-2">Innovative Notions</p>
                    </a>
                </div>
            </div>
        </article>

        <article class="aboutUsSection py-5">
            <div class="row mx-5 my-3">
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <img src="/img/about-image.jpg" class="img-fluid" />
                </div>

                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 d-flex flex-column justify-content-center pt-3">
                    <h1>About us</h1>
                    <p>We are a group of professionals providing quality services to businesses across South Africa. We provide custom made Print, Design and Marketing Solutions as well as VolP Solutions for your brand and service that your provide, in accordance with the vision of your company.</p>

                    <div>
                        <a class="whitePurpleBtn" class="yellowPinkBtn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Get a qoute</a>
                    </div>
                </div>
            </div>
        </article>

        <article class="py-5 pinkBackGround">
            <div class="text-center">
                <h1 class="whiteText">Stay Connected</h1>
                <p class="whiteText">Subscribe to our newsletter</p>

                <form class="d-flex justify-content-center">
                    <input class="myInput" placeholder="Type your email here" type="email"></input>
                    <a class="whiteBlueBtn ml-2">Subscribe</a>
                </form>
            </div>
        </article>

        <footer class="footer row text-center py-3 mx-4">
            <div class="col-sm-12 col-md-12 col-xl-4 col-lg-4 pt-4">
                <h4>About us</h4>
                <div class="blueLine"></div>
                <div class="d-flex flex-column">
                    <a href="#" class="blueLink">Our Story</a>
                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-xl-4 col-lg-4 pt-4">
                <div>
                    <h4>Products & Services</h4>
                    <div class="blueLine"></div>
                    <div class="d-flex flex-column">
                        <a href="#" class="blueLink">Printing</a>
                        <a href="#" class="blueLink">Marketing</a>
                        <a href="#" class="blueLink">VOIP</a>
                        <a href="#" class="blueLink">Innovative Notions</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-xl-4 col-lg-4 pt-4">
                <h4>Contact</h4>
                <div class="blueLine"></div>
                <div class="d-flex flex-column">
                    <p class="my-0 py-0"><a href="tel:061 559 2567"><i class="fas fa-phone-alt"></i> 061 559 2567</a></p>
                    <p class="my-0 py-0"><a href="mailto:info@harmsedigital.co.za"><i class="far fa-envelope"></i>  info@harmsedigital.co.za</a></p>
                    <p class="my-0 py-0"><i class="fas fa-map-marker-alt"></i> Cape Town, South Africa</p>
                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-xl-12 col-lg-12 py-4">
                <img src="/img/harmse-digital-logo-greyscale.png" class="img-fluid" width="200px"/>
            </div>

            <div class="h-divider text-center d-flex flex-column flex-wrap px-3">
                <p class="py-2 responsiveText">2021 Harmse Digital Communications | Web Design by <a href="#" class="blueLink">ONLive</a></p>
            </div>
        </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>