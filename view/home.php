<!DOCTYPE html>
<html>
  <head>
    <title>Home</title>
    <!-- Stylesheet  -->
<link rel="stylesheet" type="text/css" href="../css/style.css">
        
        <!-- Header  -->
<h6 id="Header"><?php include '../header/header.php';?></h6>

                     <!-- boostrap stylesheet -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Font Awesome Icon -->
  <script src="https://kit.fontawesome.com/d1431afd26.js" crossorigin="anonymous"></script>


    </head>
  
                     <!-- Navbar Start  -->
                     <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark ">
                <div class="container">

                   
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav justify-content-center  mx-5 p-0 ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">

                                <a class="nav-link text-white" href="../view/reg.php">REGISTRATION</a>


                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../view/login.php">LOG IN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../view/profile.php">PROFILE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../view/application.php">ONLINE APPLICATION</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../view/search.php">SEARCH</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../view/update.php">UPDATE PROFILE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../view/add tenant.php">TENANT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../control/logoutcheck.php">LOGOUT</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-white" href="#catagories">CATAGORIES</a>
                            </li>
                        </ul>
                               
                    </div>



                </div>
            </nav>


                    <!-- Navbar End  -->
                    <br>
<body>

                       <!-- Heading  -->
<h1 class="home"> <span class="orange">Welcome </span> To Our Rental Property Managemen System   </h1>
                      

 <!-- image slider  -->
 <section>
            <div class="container">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item p-5 active">
                            <div class="row p-5 panda-bg-info-backgraound bg-gradient d-flex align-items-center">
                                <div class="col-lg-7">
                                    <h1>Mega LCD TV For Sports</h1>
                                    <p>This is the best tv in the world for people who just want to waste time in front
                                        of tv.</p>
                                    <h1 class="price">$1200</h1>
                                    <button class="btn btn-warning-backgraound text-white">Buy Now</button>
                                </div>
                                <div class="col-lg-5">
                                    <img src="../images/house 1.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item p-5">
                            <div class="row p-5 panda-bg-info-backgraound bg-gradient d-flex align-items-center">
                                <div class="col-lg-7">
                                    <h1>Cool Dude Headphone</h1>
                                    <p>This is the best headphone in the world for people who just want to waste time in
                                        front of funky world</p>
                                    <h1>$420</h1>
                                    <button class="btn btn-warning-backgraound text-white">Buy Now</button>
                                </div>
                                <div class="col-lg-5">
                                    <img src="../images/house  5.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item p-5">
                            <div class="row p-5 panda-bg-info-backgraound bg-gradient d-flex align-items-center">
                                <div class="col-lg-7">
                                    <h1>X-Box for your living room</h1>
                                    <p>This is the best x-box in the world for people who just want to waste time in
                                        front of fake sports.</p>
                                    <h1>$600</h1>
                                    <button class="btn btn-warning-backgraound text-white">Buy Now</button>
                                </div>
                                <div class="col-lg-5">
                                    <img src="../images/house 6.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>

         <!-- House Catagories  -->
         <section class="fetured" id="catagories">
            <h1 class="text-center"> House <span class="orange">Catagories</span></h1>
            <div class="row row-cols-1 row-cols-md-3 g-5 p-5">
                <div class="col">
                    <div class="card h-100">
                        <img src="../images/house2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Ducati XDIAVEL S-73</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non omnis
                                magnam error ad amet id!</p>
                        </div>
                       
                        <div class="card-footer">
 <!-- Read More Button  -->

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-danger" id="latest" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Read More
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">House Details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <h2>৳ 538,000</h2>
                                        <p>Key Features: The Indonesian HONDA CBR 150R is the fans’ favorite offering
                                            from
                                            Bangladesh Honda Private Limited. This bike features a 150 cc segment engine
                                            and
                                            aggressive approach to its Super Sports styling. With its attractive
                                            styling, it
                                            snatches the attention of people.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="../images/house 3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Motorcycles & Scooters</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non omnis
                                magnam error ad amet id!</p>
                        </div>
                        <div class="card-footer">
<!-- Read More Button  -->

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-danger" id="latest" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Read More
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">House Details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <h2>৳ 538,000</h2>
                                        <p>Key Features: The Indonesian HONDA CBR 150R is the fans’ favorite offering
                                            from
                                            Bangladesh Honda Private Limited. This bike features a 150 cc segment engine
                                            and
                                            aggressive approach to its Super Sports styling. With its attractive
                                            styling, it
                                            snatches the attention of people.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>

                                    </div>
                                </div>
                            </div>
                        </div>                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="../images/house 4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">2021 Honda CBR500R</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non omnis
                                magnam error ad amet id!</p>
                        </div>
                        <div class="card-footer">
<!-- Read More Button  -->

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-danger" id="latest" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Read More
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">House Details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <h2>৳ 538,000</h2>
                                        <p>Key Features: The Indonesian HONDA CBR 150R is the fans’ favorite offering
                                            from
                                            Bangladesh Honda Private Limited. This bike features a 150 cc segment engine
                                            and
                                            aggressive approach to its Super Sports styling. With its attractive
                                            styling, it
                                            snatches the attention of people.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>

                                    </div>
                                </div>
                            </div>
                        </div>                        </div>
                    </div>
                </div>
            </div>
        </section>

                   <!-- Frequently  -->
        <section class="frequent">
   
                <h1 class="frequent_header text-center">Frequently Asked <span class="orange">Questions</span></h1>
               <br>
                    
                        <div class="accordion " id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">
                                        What are t he most impor tant t hings I should
                                        know about riding a bike?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        <strong>Safety First! Always obey t he rules of t he road. Obey all traffic
                                            signals, signs, and laws. Get in t he mindset of “driving” your
                                            bike—not just “riding” your bike. This will help you be a more
                                            focused and legally compliant bike rider.
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item ">
                                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseThree">
                                        My bike has been in storage is it safe to ride?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-headingThree">
                                    <div class="accordion-body">
                                        <strong>Safety First! Always obey t he rules of t he road. Obey all traffic
                                            signals, signs, and laws. Get in t he mindset of “driving” your
                                            bike—not just “riding” your bike. This will help you be a more
                                            focused and legally compliant bike rider.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseThree">
                                        What rules should I follow when riding my bike?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-headingThree">
                                    <div class="accordion-body">
                                        <strong>Safety First! Always obey t he rules of t he road. Obey all traffic
                                            signals, signs, and laws. Get in t he mindset of “driving” your
                                            bike—not just “riding” your bike. This will help you be a more
                                            focused and legally compliant bike rider.
                                    </div>
                                </div>
                            </div>
                        </div>

                
                
            </div>
        </section> 
        <footer>
    <section class="footer">
        <div class="footer-logo">
            <a href="#"><img src="images/Logo.png" alt=""></a>

            <!-- font awesome icon  -->
            <div class="icon">
            
                <a href="#"><i class="fab fa-google"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <!-- copyright -->
            </div>
            
        </div>


    </section>
    <?php include '../footer/footer.php';?> 
</footer>
        
<!-- boostrap script  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>


</html>