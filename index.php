<?php
session_start();

//  Check if user is logged in
if (!isset($_SESSION['auth'])) {
    $_SESSION['status'] = "Please login first to access the site.";
    header("Location: login.php");
    exit();
}
?>

<!--  Header Include With Navbar -->
<?php include 'header.php'; ?>
<div class="bg-light">

    <!-- Hero Section -->
    <section class="home-section d-flex align-items-center text-center text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12">
                    <h2 class="mb-2 text-home">Welcome to Our Website</h2>

                    <!--  Search Form -->
                    <form class="main-form pt-3 pb-2 d-flex justify-content-center" action="#" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search anything..." name="query" aria-label="Search">
                            <button class="btn btn-primary" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!--  About Section Start -->
    <div class="container mt-4 mb-2">
        <div class="row align-items-center about-section-home">
            <!-- Left Side: About Image -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 text-center">
                <img src="./assets/images/team-2.jpg" alt="About Us" class="about-img">
            </div>

            <!-- Right Side: About Text -->
            <div class="col-lg-8 col-md-6 col-sm-12">
                <h2 class="about-title">About Our Company</h2>
                <p class="about-text">
                    Welcome to <strong>My Website</strong>, where creativity meets technology.
                    We specialize in crafting high-quality, responsive websites.
                </p>
                <p class="about-text">
                    Our dedicated team ensures every project is delivered with excellence.
                </p>
                <a href="#" class="about-btn">Learn More</a>
            </div>
        </div>
    </div>

    <!--  Gallery Section Start -->
    <div class="container mb-2 gallery-section-home">
        <h2 class="text-center fw-bold mb-4">Our Gallery</h2>
        <div class="row g-4">
            <!-- Image 1 -->
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                <div class="shadow-sm">
                    <a href="Gallery.php">
                        <img src="./assets/images/image-gallery-1.jpg"
                            class="img-fluid gallery-image"
                            alt="Gallery Image 1">
                    </a>
                </div>
            </div>


            <!-- Image 2 -->
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                <div class="shadow-sm">
                    <a href="Gallery.php">
                        <img src="./assets/images/image-gallery-2.jpg"
                            class="img-fluid gallery-image"
                            alt="Gallery Image 2">
                    </a>
                </div>
            </div>

            <!-- Image 3 -->
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                <div class="shadow-sm">
                    <a href="Gallery.php">
                        <img src="./assets/images/image-gallery-3.jpg"
                            class="img-fluid gallery-image"
                            alt="Gallery Image 3">
                    </a>
                </div>
            </div>

            <!-- Image 4 -->
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                <div class="shadow-sm">
                    <a href="Gallery.php">
                        <img src="./assets/images/image-gallery-4.jpg"
                            class="img-fluid gallery-image"
                            alt="Gallery Image 4">
                    </a>
                </div>
            </div>

            <!-- Image 5 -->
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                <div class="shadow-sm">
                    <a href="Gallery.php">
                        <img src="./assets/images/image-gallery-5.jpg"
                            class="img-fluid gallery-image"
                            alt="Gallery Image 5">
                    </a>
                </div>
            </div>

            <!-- Image 6 -->
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                <div class="shadow-sm">
                    <a href="Gallery.php">
                        <img src="./assets/images/image-gallery-6.jpg"
                            class="img-fluid gallery-image"
                            alt="Gallery Image 6">
                    </a>
                </div>
            </div>

            <!-- Image 7 -->
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                <div class="shadow-sm">
                    <a href="Gallery.php">
                        <img src="./assets/images/image-gallery-7.jpg"
                            class="img-fluid gallery-image"
                            alt="Gallery Image 7">
                    </a>
                </div>
            </div>

            <!-- Image 8 -->
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                <div class="shadow-sm">
                    <a href="Gallery.php">
                        <img src="./assets/images/image-gallery-8.jpg"
                            class="img-fluid gallery-image"
                            alt="Gallery Image 8">
                    </a>
                </div>
            </div>

            <!-- Image 9 -->
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                <div class="shadow-sm">
                    <a href="Gallery.php">
                        <img src="./assets/images/image-gallery-9.jpg"
                            class="img-fluid gallery-image"
                            alt="Gallery Image 9">
                    </a>
                </div>
            </div>

            <!-- Image 10 -->
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                <div class="shadow-sm">
                    <a href="Gallery.php">
                        <img src="./assets/images/image-gallery-10.jpg"
                            class="img-fluid gallery-image"
                            alt="Gallery Image 10">
                    </a>
                </div>
            </div>

            <!-- Image 11 -->
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                <div class="shadow-sm">
                    <a href="Gallery.php">
                        <img src="./assets/images/image-gallery-11.jpg"
                            class="img-fluid gallery-image"
                            alt="Gallery Image 11">
                    </a>
                </div>
            </div>

            <!-- Image 12 -->
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                <div class="shadow-sm">
                    <a href="Gallery.php">
                        <img src="./assets/images/image-gallery-12.jpg"
                            class="img-fluid gallery-image"
                            alt="Gallery Image 12">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!--  Card Section Start -->
    <div class="container mt-3 card-section-home">
        <h2 class="mb-4 text-center">Views Our Courses</h2>
        <!-- Row 1 -->
        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                <div class="card h-100 shadow-sm border-dark">
                    <img src="./assets/images/image-gallery-1.jpg" class="card-image" alt="Service 1">
                    <div class="card-body text-center">
                        <h5 class="card-title">Web Design</h5>
                        <p class="text-muted">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed, suscipit? </p>
                        <a href="#" class="btn btn-dark">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                <div class="card h-100 shadow-sm border-dark">
                    <img src="./assets/images/image-gallery-7.jpg" class="card-image" alt="Service 2">
                    <div class="card-body text-center">
                        <h5 class="card-title">Web Development</h5>
                        <p class="text-muted">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed, suscipit? </p>
                        <a href="#" class="btn btn-dark">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                <div class="card h-100 shadow-sm border-dark">
                    <img src="./assets/images/image-gallery-2.jpg" class="card-image" alt="Service 3">
                    <div class="card-body text-center">
                        <h5 class="card-title">SEO Optimization</h5>
                        <p class="text-muted">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed, suscipit? </p>
                        <a href="#" class="btn btn-dark">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                <div class="card h-100 shadow-sm border-dark">
                    <img src="./assets/images/image-gallery-8.jpg" class="card-image" alt="Service 4">
                    <div class="card-body text-center">
                        <h5 class="card-title">Artificial Intelligence</h5>
                        <p class="text-muted">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed, suscipit? </p>
                        <a href="#" class="btn btn-dark">Read More</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row 2 -->
        <div class="row g-4 mt-2 mb-2">
            <!-- Card 5 -->
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                <div class="card h-100 shadow-sm border-dark">
                    <img src="./assets/images/image-gallery-5.jpg" class="card-image" alt="Service 1">
                    <div class="card-body text-center">
                        <h5 class="card-title">Backend Developer</h5>
                        <p class="text-muted">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed, suscipit? </p>
                        <a href="#" class="btn btn-dark">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                <div class="card h-100 shadow-sm border-dark">
                    <img src="./assets/images/web-image.jpg" class="card-image" alt="Service 2">
                    <div class="card-body text-center">
                        <h5 class="card-title">AI Development</h5>
                        <p class="text-muted">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed, suscipit? </p>
                        <a href="#" class="btn btn-dark">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Card 7 -->
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                <div class="card h-100 shadow-sm border-dark">
                    <img src="./assets/images/image-gallery-9.jpg" class="card-image" alt="Service 3">
                    <div class="card-body text-center">
                        <h5 class="card-title">Mern Stack</h5>
                        <p class="text-muted">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed, suscipit? </p>
                        <a href="#" class="btn btn-dark">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Card 8 -->
            <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                <div class="card h-100 shadow-sm border-dark">
                    <img src="./assets/images/image-gallery-11.jpg" class="card-image" alt="Service 4">
                    <div class="card-body text-center">
                        <h5 class="card-title">Wordpress Developer</h5>
                        <p class="text-muted">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed, suscipit? </p>
                        <a href="#" class="btn btn-dark">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  Contact Section Start  -->
    <div class="container mt-3 contact-section-home">
        <div class="row align-items-center">
            <h2 class="text-center mb-4">Our Contact 24 Hours</h2>
            <!-- Left: Image -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-3 text-center">
                <div class="card">
                    <img src="assets/images/contact-image.jpg" alt="Contact Us" class="img-fluid rounded">
                </div>
            </div>

            <!-- Right: Form -->
            <div class="col-lg-8 col-md-6 col-sm-12 mb-3">
                <div class="shadow-lg border-0 rounded-4">
                    <div class="card-body p-4">
                        <form action="#" method="POST">
                            <div class="mb-3">
                                <label for="name" class="form-label fw-semibold">Full Name</label>
                                <input type="text" id="name" name="name" class="form-control form-control-lg" placeholder="Enter your full name" required>
                            </div>

                            <div class="mb-3">
                                <label for="address" class="form-label fw-semibold">Address</label>
                                <input type="text" id="address" name="address" class="form-control form-control-lg" placeholder="Enter your address" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label fw-semibold">Email Address</label>
                                <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="Enter your email" required>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label fw-semibold">Password</label>
                                <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Enter your password" required>
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg fw-semibold">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  Team Members Section Start -->
    <section class="team-section pt-3 pb-4">
        <div class="container">
            <h2 class="text-center mb-4">Meet Our Team</h2>
            <div class="row g-4">
                <!-- Team Member 1 -->
                <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                    <div class="card h-100 border-dark shadow-sm text-center">
                        <img src="./assets/images/team-1.jpg" class="card-img-top rounded-circle p-3" alt="Team Member 1">
                        <div class="card-body">
                            <h5 class="card-title">Ali Raza </h5>
                            <p class="text-muted">Frontend Developer</p>
                            <div class="d-flex justify-content-center gap-3">
                                <a href="#" class="text-dark"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#" class="text-dark"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#" class="text-dark"><i class="fa-brands fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                    <div class="card h-100 border-dark shadow-sm text-center">
                        <img src="./assets/images/team-2.jpg" class="card-img-top rounded-circle p-3" alt="Team Member 2">
                        <div class="card-body">
                            <h5 class="card-title">Sara Khan</h5>
                            <p class="text-muted">Backend Developer</p>
                            <div class="d-flex justify-content-center gap-3">
                                <a href="#" class="text-dark"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#" class="text-dark"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#" class="text-dark"><i class="fa-brands fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                    <div class="card h-100 border-dark shadow-sm text-center">
                        <img src="./assets/images/team-3.jpg" class="card-img-top rounded-circle p-3" alt="Team Member 3">
                        <div class="card-body">
                            <h5 class="card-title">Ahmed Raza</h5>
                            <p class="text-muted">UI/UX Designer</p>
                            <div class="d-flex justify-content-center gap-3">
                                <a href="#" class="text-dark"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#" class="text-dark"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#" class="text-dark"><i class="fa-brands fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Member 4 -->
                <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                    <div class="card h-100 border-dark shadow-sm text-center">
                        <img src="./assets/images/team-4.jpg" class="card-img-top rounded-circle p-3" alt="Team Member 4">
                        <div class="card-body">
                            <h5 class="card-title">Ayesha Noor</h5>
                            <p class="text-muted">Project Manager</p>
                            <div class="d-flex justify-content-center gap-3">
                                <a href="#" class="text-dark"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#" class="text-dark"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#" class="text-dark"><i class="fa-brands fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Team Members Section End -->
</div>

<!--  Footer Start -->
<?php include('footer.php'); ?>