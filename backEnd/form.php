<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WHA STORE</title>

    <!-- All CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">

 

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><span class="text-warning">WHA</span>STORE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Branches</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                   <a href=".\login.html"> <button class="btn  btn-warning ">LogOut</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/home-1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5>WHA STORE</h5>
                    <p>We're a family-owned store offering quality clothing, accessories, and home goods. Our friendly
                        staff is here to help you find what you need and make your shopping experience enjoyable.</p>
                    <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/home-2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5>Appliances</h5>
                    <p>Best Appliences to buy at affordable prices </p>
                    <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/home-3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5>Gaming Gadgets</h5>
                    <p>Unlock a gaming experience unlike any other with our gaming Gadgets</p>
                    <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- about section starts -->
    <section id="about" class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="about-img">
                        <img src="img/about.jpg" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="about-text">
                        <h2>We Provide the Best Quality <br /> Services Ever</h2>
                        <p>
                        <ul>
                            <li>Customer service</li>
                            <li>In-store Events</li>
                            <li>Personalization</li>
                            <li>Online presence</li>
                            <li>Delivery and shipping</li>
                            <li>Loyalty programs</li>
                            <li>Financing options</li>
                            <li>Product demonstrations</li>
                            <li>Repair services</li>
                            <li>Gift Wraping</li>
                            <li>Custumization</li>

                        </ul>
                        </p>
                        <a href="#" class="btn btn-warning">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section Ends. -->

    <!-- services section Starts -->
    <section class="services section-padding" id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Our Services</h2>
                        <p>Our Services Includes</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <i class="bi bi-laptop"></i>
                            <h3 class="card-title">Best Quality</h3>
                            <p class="lead">We provide top-quality services that are user-friendly, efficient, and safe.
                                Our commitment to conserving resources and ensuring customer satisfaction ensures
                                long-lasting value.</p>
                            <button class="btn bg-warning text-dark">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <i class="bi bi-journal"></i>
                            <h3 class="card-title">Sustainability</h3>
                            <p class="lead">Our store is committed to sustainability. We use resources responsibly and
                                promote eco-friendly practices. Shop with us for a sustainable and eco-friendly shopping
                                experience.</p>
                            <button class="btn bg-warning text-dark">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <i class="bi bi-intersect"></i>
                            <h3 class="card-title">Delivery & Shipping</h3>
                            <p class="lead">We provide fast and reliable delivery and shipping services, using trusted
                                carriers to ensure your orders arrive safely and on time.Enjoy hassle-free shipping and
                                delivery with us.</p>
                            <button class="btn bg-warning text-dark">Read More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services section Ends -->

    <!-- portfolio strats -->
    <section id="portfolio" class="portfolio section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Our Branches</h2>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                            <div class="img-area mb-4">
                                <img src="img/project-1.jpg" class="img-fluid" alt="">
                            </div>
                            <h3 class="card-title">USA Branch</h3>
                            <p class="lead"></p>
                            <button class="btn bg-warning text-dark">Learn More</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                            <div class="img-area mb-4">
                                <img src="img/project-2.jpg" class="img-fluid" alt="">
                            </div>
                            <h3 class="card-title">Dubai Branch</h3>
                            <p class="lead"></p>
                            <button class="btn bg-warning text-dark">learn More</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                            <div class="img-area mb-4">
                                <img src="img/project-3.jpg" class="img-fluid" alt="">
                            </div>
                            <h3 class="card-title">Turkey Branch</h3>
                            <p class="lead"></p>
                            <button class="btn bg-warning text-dark">Learn More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <!-- team starts -->
    <section class="team section-padding" id="team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Our Team</h2>
                        <p>We Have High Qualified Team</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="img/team-1.jpg" alt="" class="img-fluid rounded-circle">
                            <h3 class="card-title py-2">Wassay Ahmad</h3>
                            <p class="card-text"></p>


                            <p class="socials">
    <a href="https://twitter.com/AhmadWassay" target="_blank" rel="noopener noreferrer">
        <i class="bi bi-twitter text-dark mx-1"></i>
    </a>

    <a href="https://www.facebook.com/saim.hassan.96" target="_blank" rel="noopener noreferrer">
        <i class="bi bi-facebook text-dark mx-1"></i>
    </a>

    <a href="https://www.linkedin.com/in/wassay-ahmad-qureshi-a3568a248/" target="_blank" rel="noopener noreferrer">
        <i class="bi bi-linkedin text-dark mx-1"></i>
    </a>

    <a href="https://www.instagram.com/wassayqureshi_official/" target="_blank" rel="noopener noreferrer">
        <i class="bi bi-instagram text-dark mx-1"></i>
    </a>
</p>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="img/team-2.jpeg" alt="" class="img-fluid rounded-circle">
                            <h3 class="card-title py-2">Abdullah</h3>
                            <p class="card-text"></p>
                            <p class="socials">
                                <i class="bi bi-twitter text-dark mx-1"></i>
                                <i class="bi bi-facebook text-dark mx-1"></i>
                                <i class="bi bi-linkedin text-dark mx-1"></i>
                                <i class="bi bi-instagram text-dark mx-1"></i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="img/team-3.jpeg" alt="" class="img-fluid rounded-circle">
                            <h3 class="card-title py-2">Hassan Iqbal</h3>
                            <p class="card-text"></p>
                            <p class="socials">
                                <i class="bi bi-twitter text-dark mx-1"></i>
                                <i class="bi bi-facebook text-dark mx-1"></i>
                                <i class="bi bi-linkedin text-dark mx-1"></i>
                                <i class="bi bi-instagram text-dark mx-1"></i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="img/team-4.jpeg" alt="" class="img-fluid rounded-circle">
                            <h3 class="card-title py-2">Salan</h3>
                            <p class="card-text"></p>
                            <p class="socials">
                                <i class="bi bi-twitter text-dark mx-1"></i>
                                <i class="bi bi-facebook text-dark mx-1"></i>
                                <i class="bi bi-linkedin text-dark mx-1"></i>
                                <i class="bi bi-instagram text-dark mx-1"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team ends -->
    <!-- Contact starts -->
    

    <section id="contact" class="contact section-padding">
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Contact Us</h2>
                        <p>You can submit your queries by filling form</p>
                    </div>
                </div>
            </div>
<!-- PHP For Contact Us -->
            <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $desc = $_POST['desc'];
        
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "whastore";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
        
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `contactus` (`srNo.`, `name`, `email`, `message`) VALUES ('', '$name', '$email', '$desc')";
        $result = mysqli_query($conn, $sql);
 
        if($result){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your entry has been submitted successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }
        else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }

      }

    }

    
?>

<div class="container mt-3">
    <form action="/BACKEND/form.php" method="post">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp"> 
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
        <label for="desc">Description</label>
        <textarea class="form-control" name="desc" id="desc" cols="30" rows="8"></textarea> 
    </div>
    
    <button type="submit" class="btn btn-warning btn-lg btn-block mt-3">Submit</button>
    </form>
</div>
    </section>
    <!-- contact ends -->
    <!-- footer starts -->
    <footer class="bg-dark p-2 text-center">
        <div class="container">
            <p class="text-white">All Right Reserved By @WHA</p>
        </div>
    </footer>
    <!-- footer ends -->

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>
