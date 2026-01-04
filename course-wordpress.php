<!-- Header Include With Navbar -->
<?php include 'header.php'; ?>

<!-- Hero Section -->
<section class="home-section-wordpress">
    <div class="container">
        <h2 class="mb-3">Welcome to Our WordPress Course</h2>
        <p>Learn how to design, build, and manage modern websites with ease.</p>
    </div>
</section>

<!-- Registration Form Section -->
<div class="container mt-2 wordpress-registration-section">
    <h2 class="text-center mb-2">
        Wordpress Course Registration
    </h2>

    <div class="row align-items-center justify-content-center">
        <!-- Left Image -->
        <div class="col-lg-6 col-md-12 col-sm-12 mb-2">
            <div class="card">
                <img src="assets/images/contact-image.jpg" alt="Web Development"
                    class="img-fluid rounded-2">
            </div>
        </div>

        <!-- Right Form -->
        <div class="col-lg-6 col-md-12 col-sm-12 mb-2">
            <div class="card registration-card">
                <div class="card-body">
                    <?php
                    include 'conn.php';
                    $message = "";

                    if ($_SERVER["REQUEST_METHOD"] === "POST") {
                        $name     = $_POST['name'];
                        $email    = $_POST['email'];
                        $phone    = $_POST['phone'];
                        $duration = $_POST['duration'];
                        $payment  = $_POST['payment'];
                        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

                        $sql = "INSERT INTO wordpress (name, email, phone, duration, payment, password)
                      VALUES ('$name', '$email', '$phone', '$duration', '$payment', '$password')";

                        if ($conn->query($sql) === TRUE) {
                            $message = "<div class='alert alert-success text-center mt-3'>Registration Successful!</div>";
                        } else {
                            $message = "<div class='alert alert-danger text-center mt-3'> Error: " . $conn->error . "</div>";
                        }
                    }
                    ?>

                    <!-- Show Messages -->
                    <?php if (!empty($message)) echo $message; ?>

                    <!-- Registration Form -->
                    <form method="post">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label"><i class="fa fa-user me-2"></i>Full Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter your full name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label"><i class="fa fa-phone me-2"></i>Phone Number</label>
                                <input type="text" name="phone" class="form-control" placeholder="Enter phone number" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label"><i class="fa fa-clock me-2"></i>Course Duration</label>
                                <select name="duration" class="form-select" required>
                                    <option value="">-- Select Duration --</option>
                                    <option value="3-months">3 Months</option>
                                    <option value="6-months">6 Months</option>
                                    <option value="1-year">1 Year</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label"><i class="fa fa-credit-card me-2"></i>Payment Method</label>
                                <select name="payment" class="form-select" required>
                                    <option value="">-- Select Payment Method --</option>
                                    <option value="cash">Cash</option>
                                    <option value="easypaisa">EasyPaisa</option>
                                    <option value="jazzcash">JazzCash</option>
                                    <option value="bank">Bank Transfer</option>
                                    <option value="credit-card">Credit / Debit Card</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label"><i class="fa fa-envelope me-2"></i>Email Address</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label"><i class="fa fa-lock me-2"></i>Create Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter a strong password" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 py-2">
                            Enroll Now
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!--  Footer Include -->
<?php include('footer.php'); ?>

</body>

</html>