<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSMS</title>
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="./css/bootstrap/css/bootstrap.min.css">
    <!-- font awesome  -->
    <link rel="stylesheet" href="./css/fontawesome/css/all.min.css">
    <!-- google font  -->

    <!-- custom css  -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>


    <!-- Navigation Bar  -->
    <nav class="navbar navbar-expand-sm navbar-light   fixed-top    " style="background-color:rgb(47, 161, 255);">
        <a href="index.php" class="navbar-brand " style="color: aliceblue;">OSMS</a>
        <span class="navbar-text" style="color: aliceblue;">Customer happiness is our aim</span>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
            <span class="navbar-toggler-icon">
            </span>
        </button>
        <div class="collapse navbar-collapse pl-5" id="myMenu">
            <ul class="navbar-nav pl-5 custom-nav">
                <li class="nav-item"><a href="" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="#Registration" class="nav-link">Registration</a></li>
                <li class="nav-item"><a href="./requester/requesterLogin.php" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </nav>
    <!-- Navigation End  -->


    <!-- start header jumbotron  -->


    <header class="jumbotron back-image" style="background-image: url(./images/bg.jpg);">
        <div class="myclass mainHeading">

            <h1 class="text-uppercase font-weight-bold">Welcome To OSMS</h1>
            <p class="font-italic">Customer's Happiness is our aim</p>
            <a href="./requester/requesterLogin.php" class="btn btn-success mr-4">Login </a>
            <a href="#Registration" class="btn btn-danger mr-5">Sign Up</a>
        </div>
    </header>


    <!-- end header jumbotron  -->

    <!-- start introduction section  -->
    <div class="container" id="Services">
        <div class="jumbotron">
            <h3 class="text-center">OSMS Services</h3>
            <p class="intro">this is dummy text this is dummy text this is dummy text this is dummy text this is dummy text this is dummy text this is dummy text this is dummy text this is dummy text</p>
        </div>
    </div>

    <!-- end introduction section  -->

    <!-- start services section  -->

    <div class="container text-center border-bottom">
        <h2>Our Services</h2>
        <div class="row  mt-4 mb-4">
            <div class="col-sm-4 ">
                <a href=""><i class="fas fa-tv fa-8x text-success"></i></a>
                <h4 class="mt-4">Electronic appliances</h4>
            </div>
            <div class="col-sm-4">
                <a href=""><i class="fas fa-sliders-h fa-8x text-primary"></i></a>
                <h4 class="mt-4">Preventive Maintenance</h4>

            </div>
            <div class="col-sm-4">
                <a href=""><i class="fas fa-cogs fa-8x text-info"></i></a>
                <h4 class="mt-4">Fault Repair</h4>

            </div>
        </div>
    </div>

    <!-- End services section  -->

    <!-- start registration form  -->
    <?php 
    include('UserRegistration.php');
     ?> 


    <!-- End registration form  -->


    <!-- start happy customer  -->
    <div class="jumbotron bg-danger">
        <div class="container">
            <h2 class="text-center text-white ">Happy Customers</h2>
            <div class="row mt-5">
                <div class="col-lg-3 col-sm-6">
                    <div class="card shadow-lg mb-2">
                        <div class="card-body  text-center">
                            <img src="./images/bhaiii.jpg" alt="avt" class="img-fluid" style="border-radius: 80px;">
                            <h4 class="card-title mt-4">Vikram Singh</h4>
                            <p class="card-text">“Something I really appreciate about you is your aptitude for problem solving in a proactive way.” </p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card shadow-lg mb-2">
                        <div class="card-body  text-center">
                            <img src="./images/aadesh.jpg" alt="avt" class="img-fluid" style="border-radius: 100px;">
                            <h4 class="card-title mt-4">Aadesh Gupta</h4>
                            <p class="card-text">“You have the power within your reach to create what you desire.” </p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card shadow-lg mb-2">
                        <div class="card-body  text-center">
                            <img src="./images/pramod.jpg" alt="avt" class="img-fluid" style="border-radius: 100px;">
                            <h4 class="card-title mt-4">Pramod yadav</h4>
                            <p class="card-text">“You are amazing person with unique talents. Have faith in your abilities.” </p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card shadow-lg mb-2">
                        <div class="card-body  text-center">
                            <img src="./images/vikram.jpg" alt="avt" class="img-fluid" style="border-radius: 100px;">
                            <h4 class="card-title mt-4">Vikram Sharma</h4>
                            <p class="card-text">“You can be all that you wish to be. The power is in your own hands.”</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End happy customer  -->

    <!-- contacct us section start  -->
    
    <div class="container" id="Contact">
        <h2 class="text-center mb-4">Contact Us</h2>
        <div class="row">
            <!--start first column -->

            <?php include('contactForm.php') ?>



            <!-- End First column -->
            <div class="col-md-4 text-center">
                <strong>Headquater:</strong><br>
                OSMS pvt ltd,<br>
                Bhopal <br> Madhya Pradesh 462001
                <br>Mo.8966933600 <br>
                <a href="https://www.google.com" target="_blank">www.google.com</a>
            </div>
        </div>
    </div>
    <!-- contacct us section end -->
    <!-- footer section  -->

    <footer class="container-fluid  bg-dark mt-5">
        <div class="container text-white">
            <div class="row py-3">
                <div class="col-md-6">
                    <span class="pr-2">Follow Us:</span>
                    <a href="#" target="_blank" class="pr-2 fi-color "><i class="fab fa-facebook-f "></i></a>
                    <a href="#" target="_blank" class="pr-2 fi-color "><i class="fab fa-twitter"></i></a>
                    <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>

                </div>
                <div class="col-md-6 text-right">
                    <small class="">Dsigned By Santosh Singh &copy;2020 </small>
                    <small class="ml-2"><a href="#">Admin Login</a></small>
                </div>
            </div>
        </div>
    </footer>



    <!-- footer section  -->


    <!-- javascript  -->
    <script src="./css/bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="./css/fontawesome/js/all.min.js"></script>
</body>

</html>