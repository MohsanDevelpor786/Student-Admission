<!--  Header Include With Navbar -->
<?php include 'header.php'; ?>

<!--  Home Section Start -->
<section class="home-section-about-page d-flex align-items-center text-center text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <h2 class="mb-2 text-home">Welcome to Our About Us</h2>
                <!-- Search Form -->
                <form class="main-form pt-3 pb-3 d-flex justify-content-center" action="#" method="GET">
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
<!--  Contant End -->

<!--  Footer Include -->
<?php include 'footer.php'; ?>

