

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ROYAL BIKES - Bike Rental Website</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark py-3 px-lg-5 d-none d-lg-block">
        <div class="row">
            <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body pr-3" href=""><i class="fa fa-phone-alt mr-2"></i>+012 345 6789</a>
                    <span class="text-body">|</span>
                    <a class="text-body px-3" href=""><i class="fa fa-envelope mr-2"></i>info@example.com</a>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body px-3" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-body pl-3" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="position-relative px-lg-5" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-uppercase text-primary mb-1">Royal Bikes</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index" class="nav-item nav-link active">Home</a>
                        <a href="about" class="nav-item nav-link">About</a>
                        <a href="categories" class="nav-item nav-link">categories</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Bikes</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="car.php" class="dropdown-item">Bike Listing</a>
                                <a href="detail.php" class="dropdown-item">Bike Detail</a>
                                <a href="booking.php" class="dropdown-item">Bike Booking</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="team.php" class="dropdown-item">The Team</a>
                                <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                            </div>
                        </div>
                        <a href="contact" class="nav-item nav-link">Contact</a>
                       <?php
                        if(isset($_SESSION['cust_id']))
                        {
                        ?>
                            <li><a href="logout">Logout</a></li>
                            <li><a href="profile">Hi...<?php echo $_SESSION['cust_name'];?></a></li>
                        <?php
                        }
                        elseif(empty($_SESSION['cust_id']))
                        {
                        ?>
                            <a href="signup" class="nav-item nav-link">Login/Signup</a>
                        <?php
                        }
                        ?>
                        
                    </div>

                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
     <!-- Search Start -->
    <div class="container-fluid bg-white pt-3 px-lg-5">
        <div class="row mx-n2">
            <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                <select class="form-control" id="c_name" name="c_id">
                        <option>Select Country</option>
                        <?php 
                        foreach($country as $d)
                        {
                        ?>
                            <option value="<?php echo $d->c_name?>">
                                <?php echo $d->c_name?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                <select class="form-control" id="city_name" name="city_id">
                        <option>Select City</option>
                        <?php 
                        foreach($city as $d)
                        {
                        ?>
                            <option value="<?php echo $d->city_name?>">
                                <?php echo $d->city_name?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>
            </div>

            <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                <div class="date mb-3" id="date" data-target-input="nearest">
                    <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Pickup Date"
                        data-target="#date" data-toggle="datetimepicker" />
                </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                <div class="time mb-3" id="time" data-target-input="nearest">
                    <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Pickup Time"
                        data-target="#time" data-toggle="datetimepicker" />
                </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                <select class="form-control" id="cat_name" name="cat_id">
                        <option>Select Bike</option>
                        <?php 
                        foreach($category as $d)
                        {
                        ?>
                            <option value="<?php echo $d->cat_name?>">
                                <?php echo $d->cat_name?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                <button class="btn btn-primary btn-block mb-3" type="submit" style="height: 50px;">Search</button>
            </div>
        </div>
    </div>
    <!-- Search End -->

</body>
</html>



