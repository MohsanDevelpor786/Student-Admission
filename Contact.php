<!--  Header Include With Navbar -->
<?php include 'header.php'; ?>

<!--  Home Section Start -->
<section class="home-section-contact-page d-flex align-items-center text-center text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <h2 class="mb-2 text-home">Welcome to Our Contact Us </h2>
                <!-- 🔍 Search Form -->
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

<!--  Contact Section Start  -->
<div class="container mt-3 contact-section-home">
    <div class="row align-items-center">
        <h2 class="text-center mb-4">Our Contact 24 Hours</h2>
        <!-- Left: Image -->
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4 text-center">
            <div class="card">
                <img src="assets/images/contact-image.jpg" alt="Contact Us" class="img-fluid rounded">
            </div>
        </div>

        <!-- Right: Form -->
        <div class="col-lg-8 col-md-6 col-sm-12 mb-4">
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

<!--  Footer Include -->
<?php include 'footer.php'; ?>
