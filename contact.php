<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- bootstrap styling -->
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./scss/bootstrap.scss" />
    <!--icon -->
    <link rel="icon" href="./img/LOGO.ico" type="image/x-icon" />
<!-- 
    <link rel="stylesheet" href="/css/debug.css"> -->
    <!-- styling -->
    <link rel="stylesheet" href="./css/style.css" />

    <!-- Google Fonts Alegreya -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Alegreya+Sans&display=swap"
      rel="stylesheet"
    />

     <!--Font Awesome-->
      <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"
    />

    
    <title>Contact Us</title>
  </head>
  <body >

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top ">
      <div class="container-fluid">
        <a class="navbar-brand" href="./index.html">  
          <img
            src="./img/LOGO.png"
            alt="Anura baby care logo"
            width="50"
            height="auto
            "
            class="d-inline-block align-self-center m-1"
          />
          <strong style="padding-left: 15px ">Anura Baby Care</strong>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="./index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./aboutus.html">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./catbrand.html">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./location.html">Store Locator</a>
            </li>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./contact.html">Contact Us</a>
          </li>
            </li>
          </ul>
          <ul class="navbar-nav icon">
            <li class="nav-item">
              <a
                href="https://www.facebook.com/anurapharmacy"
                class="nav-link"
                target="_blank"
              >
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- BOX -->



<div class="container center mt-5 light-col-bg shadow-lg  "
style="border-top-right-radius:15px; border-top-left-radius:15px;max-width: 900px;">
    <div class="row mt-4">
        
        <h1 class="center mb-0 fw-bold" style="text-shadow: 7px 6px 10px rgba(150, 150, 150, 0.5);"> Get in touch with us!</h1>
        <h5 class="center ">Call us, Follow us, Mail us or Visit us.</h5>
   
    </div>

    </div>


    <div class="container light-col-bg  mb-xl-5 shadow-lg 
    "
     style="border-bottom-right-radius:15px; border-bottom-left-radius:15px;max-width: 900px;">
        <div class="row center">
          <div class="col center m-4 primary-col-bg shadow" id="numbers">
            <p class="mt-3"> 
            <i class="fas fa-phone pb-3 " style="display: block;text-align: center;"></i>
           
                Gampaha - (033) 25254587<br>
                Yakkala - (033) 47556984<br>
                Keels - (033) 47556985 <br>
                Oruthota Rd - (033) 47556986 <br>

            </p>

          </div>
          <div class="col center m-4 primary-col-bg shadow" id="numbers" style="padding: 18px;">
            <p>
               <i class="fas fa-envelope  pb-3" style="display: block;text-align: center;" ></i>
               
                anurapharmacy@gmail.com<br>
                anurababycare@gmail.com<br>
                anurapharmacycosmetic@gmail.com<br>
                
                </p>
          </div>
        </div>
        <div class="row me-3 ms-3 rounded-3 center ">
            <form action="message.php" method="POST"
            name=Contactus class="primary-col-bg shadow form" 
            style="color: white;padding: 1.5em 1.5em 0 1.5em;margin-bottom: 2.7em;border-radius: 15px;max-width: 800px;">
                <div class="row">

                    <div class="col-sm-6">
                
                      <div class="form-group mb-3">
                        <label for="fname">Name </label>
                        <input type="text" class="form-control" name="fname" id="fname" required>
                      </div>
                     
                      <div class="form-group mb-3">
                        <label for="email">Mail</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                      </div>
                      <div class="form-group mb-3">
                        <label for="contactno">Phone</label>
                        <input type="contactno" class="form-control" id="contactno" name="contactno"  required>
                      </div>
                
                    </div>
                
                    <div class="col-sm-6">
                
                      <div class="form-group mb-3">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" class="form-control" rows="7" required></textarea>
                      </div>
                     
                    </div>
                 <div class="row py-4">
                    <div class="form-group center">
                        <button type="submit" name="submit" id="submit" value="Send" class="btn btn-info pull-right" required="required">Send</button>
                      </div>
                 </div>
                </form>
                  </div>


                
         

        </div>
        
      </div>



<!-- footer -->
<div class=" pt-5 pb-5 footer" style="margin-top:280px;">
  <div class="container" >
    <div class="row">
      <div class="col-lg-5 col-xs-12 about-company">
        <img
            src="./img/LOGO.png"
            alt="Anura baby care logo"
            width="50"
            height="auto
            "
            class="d-inline-block align-self-center m-1"
          />
        <h2 style="font-weight: 600;letter-spacing: 1px ;">Anura Baby Care</h2> 
        <p class="pr-5 text-white-50" style="width: 390px;">Your Quality Babycare Provider. </p>
        <p><a href="#"><i class="fa fa-facebook-square mr-1"></i></a><a href="#"><i class="fa fa-linkedin-square"></i></a></p>
      </div>
      <div class="col-lg-3 col-xs-12 links">
        <h4 class="mt-lg-0 mt-sm-3">Sitemap</h4>
          <ul class="m-0 p-0">
            <li>- <a href="./index.html">Home</a></li>
            <li>- <a href="./aboutus.html">About Us</a></li>
            <li>- <a href="./catbrand.html">Products</a></li>
            <li>- <a href="./location.html">Store Locator</a></li>
            <li>- <a href="./contact.html">Contact Us</a></li>
          </ul>
      </div>
      <div class="col-lg-4 col-xs-12 location">
        <h4 class="mt-lg-0 mt-sm-4">Location</h4>
        <p>No 14, Ranathunge Road, Gampaha. </p>
        <p class="mb-0"><i class="fa fa-phone   pe-3"></i> 
          <a id="call2"
          target="_blank"
          href="tel:033-2525-2525">
          (033) 25254587</a> <br>
          
        <i class="fas fa-envelope mt-2 pe-3" 
          "></i><a href="mailto:anurababycare@ymail.com" >
            anurababycare@ymail.com
          </a>
          </p>
          <a  class=""
          href="https://www.facebook.com/anurapharmacy"
          class="nav-link"
          target="_blank"
        >
        <p class="mt-1" style="text-align: start;"> <i class="fab fa-facebook-f pe-4 "></i>
            Follow us on Facebook
          </p>
        </a>
      </div>
    </div>
    <div class="row mt-lg-5">
      <div class="col copyright">
        <p class=""><small class="text-white-50">© 2021. All Rights Reserved. Anura Pharmacy.</small></p>
      </div>
    </div>
  </div>
  







    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"
  ></script>



    </body>
    </html>