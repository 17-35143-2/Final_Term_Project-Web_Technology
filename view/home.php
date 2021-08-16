<!DOCTYPE html>
<html>
  <head>
    <title>Home</title>
    <!-- Stylesheet  -->
<link rel="stylesheet" type="text/css" href="../view/css/style.css">
        
        <!-- Header  -->
<h6 id="Header"><?php include '../view/header/header.php';?></h6>

                     <!-- boostrap stylesheet -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Font Awesome Icon -->
  <script src="https://kit.fontawesome.com/d1431afd26.js" crossorigin="anonymous"></script>


    </head>
  
                     <!-- Navbar Start  -->
                     <nav class=" navbar navbar-expand-lg    sticky-top  navbar-dark bg-dark ">
                <div class="container">
                <a class="navbar-brand" href="#"><img src="../images/houselogo.jpg" alt="" width="40"></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav nav justify-content-center  me-auto mb-2 mb-lg-0">
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
                                <a class="nav-link text-white" href="../view/update.php">UPDATE</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-white" href="../view/add tenant.php">TENANT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../controller/logoutcheck.php">LOGOUT</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-white" href="#catagories">CATAGORIES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#question">QUESTION</a>
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
                      

<main class="overflow-hidden">
     <!-- image slider  -->
 <section>
            <div class="container">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item p-5 active">
                            <div class="row p-5 panda-bg-info-backgraound bg-gradient d-flex align-items-center">
                                <div class="col-lg-7">
                                    <h1>Rental Apartment</h1>
                                    <p>The buildings were fabricated with both precast and 3D printed components. The buildings stand as the first complete structures of their kind fabricated using construction 3D printing technologies.</p>
                                    <h1 class="sqt">1200sqt</h1>
                                    <button class="btn btn-warning-backgraound text-white">Buy Now</button>
                                </div>
                                <div class="col-lg-5">
                                    <img src="../view/images/house 1.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item p-5">
                            <div class="row p-5 panda-bg-info-backgraound bg-gradient d-flex align-items-center">
                                <div class="col-lg-7">
                                    <h1>Rental Apartment</h1>
                                  
                                    <p>The process of 3D printing houses is more efficient in terms of energy and material usage when compared to traditional construction.</p>
                                    <h1 class="sqt">1400sqt</h1>
                                    <button class="btn btn-warning-backgraound text-white">Buy Now</button>
                                </div>
                                <div class="col-lg-5">
                                    <img src="../view/images/house  5.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item p-5">
                            <div class="row p-5 panda-bg-info-backgraound bg-gradient d-flex align-items-center">
                                <div class="col-lg-7">
                                <h1>Rental Apartment</h1>

                                    <p>The buildings were fabricated with both precast and 3D printed components. The buildings stand as the first complete structures of their kind fabricated using construction 3D printing technologies.</p>
                                    <h1 class="sqt">1600sqt</h1>
                                    <button class="btn btn-warning-backgraound text-white">Buy Now</button>
                                </div>
                                <div class="col-lg-5">
                                    <img src="../view/images/house 6.jpg" class="d-block w-100" alt="...">
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
                                <!-- image slider end  -->

         <!-- House Catagories  -->
         <section class="fetured" id="catagories">
            <h1 class="text-center"> House <span class="orange">Catagories</span></h1>
            <div class="row row-cols-1 row-cols-md-3 g-5 p-5">
                <div class="col">
                    <div class="card h-100 shadow p-3 mb-5 bg-body rounded border border-danger border border-3 rounded">
                        <img src="../view/images/house2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">3d House</h5>
                            <p class="card-text">The process of 3D printing houses is more efficient in terms of energy and material usage when compared to traditional construction.</p>
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
<h1>1200sqt</h1>
                                        <h2>৳ 20,000</h2>
                                        <p>In this rental apartment, here are two bedrooms, one dining,one kitchen,one belcony two washroom available.
   <span class="red"> 24/7 electricity, gas, water faciliyy available. Also the security is very high.</span>
 </p>
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
                    <div class="card h-100 shadow p-3 mb-5 bg-body rounded border border-danger border border-3 rounded">
                        <img src="../view/images/house 3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">3d House</h5>
                            <p class="card-text">The buildings were fabricated with both precast and 3D printed components. The buildings stand as the first complete structures of their kind fabricated using construction 3D printing technologies.</p>
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
                                    <h1>1400sqt</h1>
                                        <h2>৳ 25,000</h2>
                                        <p>This apartment is perfect for family members.It includes one masterbedroom, two bedroom,living room, dining room,one kitchen,two belcony,three bathrooms.
   <span class="red"> This apartment provides a great service of electricity, generator, Wi-Fi connection, gas,water, strong security and an open space for gardening.</span></p>
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
                    <div class="card h-100 shadow p-3 mb-5 bg-body rounded border border-danger border border-3 rounded">
                        <img src="../view/images/house 4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">3d House</h5>
                            <p class="card-text">The purpose of a good 3D planning software is to enable clients to visualize their house, valorizing the layout and design which makes it realistic, life-like images, which reassure the client of their choice and bring them closer to signing the final sale agreement</p>
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
                                    <h1>1200sqt</h1>
                                        <h2>৳ 30,000</h2>
                                        <p>This apartment is very big and has open space which has three bedrooms, an open kitchen,reading room, dining, drawing, belcony, three washrooms.
   <span class="red"> This apartment is expensive and very good environment for living. In the west side, there is a great view by opening big window. The service, facility all are highly required. Also there is a swimming pool in the roof top.</span></p>
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
        <section class="frequent" id="question">
   
                <h1 class="frequent_header text-center">Frequently Asked <span class="orange">Questions</span></h1>
               <br>
                    
                        <div class="accordion " id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">
                                        What are the most important things tenant should follow during rent an apartment?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        <strong>
    Tenants must have to keep the House  clean. They should not disturb their neighbours by noise or something. The rent should be clear within the first weak of the month and shiuld follow the rules and safety of the building 
.
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item ">
                                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseThree">
                                        What are the most important things tenant should follow during rent an apartment?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-headingThree">
                                    <div class="accordion-body">
                                        <strong>
    Tenants must have to keep the House  clean. They should not disturb their neighbours by noise or something. The rent should be clear within the first weak of the month and shiuld follow the rules and safety of the building .
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseThree">
                                        What are the most important things tenant should follow during rent an apartment?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-headingThree">
                                    <div class="accordion-body">
                                        <strong>
    Tenants must have to keep the House  clean. They should not disturb their neighbours by noise or something. The rent should be clear within the first weak of the month and shiuld follow the rules and safety of the building 
.
                                    </div>
                                </div>
                            </div>
                        </div>

                
                
            </div>
        </section> 
        <footer>
    <section class="footer">
        <div class="footer-logo">
            <a href="#"><img src="../view/images/house logo.png"  alt="" width="130"></a>

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
    <?php include '../view/footer/footer.php';?> 
</footer>
</main>
<!-- boostrap script  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>


</html>