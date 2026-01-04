<!-- Header Include With Navbar -->
<?php include 'header.php'; ?>

<!-- Home Section -->
<section class="home-section-web">
    <div class="container">
        <h2 class="mb-2">Welcome to Our Web Design Course</h2>
        <p>Learn how to design, build, and manage modern websites with ease.</p>
    </div>
</section>

<div class="container mt-3 mb-3 web-design-course">
    <div class="row">
        <h3 class="mb-4 text-center text-primary">Web Design Course Registration</h3>
        <!-- Left Section: Image -->
        <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
            <div class="card">
                <img src="assets/images/web-image.jpg" alt="Web Development Course"
                    class="img-fluid rounded shadow w-100">
            </div>
        </div>

        <!-- Right Section: Form -->
        <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
            <div class="card">
                <?php
                include 'conn.php';
                $message = "";

                if ($_SERVER["REQUEST_METHOD"] === "POST") {
                    $name     = $_POST['name'];
                    $email    = $_POST['email'];
                    $phone    = $_POST['phone'];
                    $duration = $_POST['duration'];
                    $payment  = $_POST['payment'];
                    $fee      = $_POST['fee'];
                    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // secure password

                    //  Insert Query
                    $sql = "INSERT INTO web_design (name, email, phone, duration, payment, fee, password)
                            VALUES ('$name', '$email', '$phone', '$duration', '$payment', '$fee', '$password')";

                    if ($conn->query($sql) === TRUE) {
                        $message = "<div class='alert alert-success text-center mt-3'> Data added successfully! </div>";
                    } else {
                        $message = "<div class='alert alert-danger text-center mt-3'> Data not found: " . $conn->error . " </div>";
                    }
                }

                ?>

                <!--  Show Success/Error Message -->
                <?php if (!empty($message)) echo $message; ?>

                <!--  Registration Form -->
                <form method="post" class="p-4 bg-light rounded" style="border: 1px solid #ccc;">
                    <div class="main-box gap-3 d-flex">
                        <div class="col-md-6 mb-2">
                            <label class="form-label fw-semibold">Full Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter your full name" required>
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label fw-semibold">Phone Number</label>
                            <input type="text" class="form-control" name="phone" placeholder="Enter your phone number" required>
                        </div>
                    </div>

                    <div class="main-box gap-3 d-flex">
                        <div class="col-md-6 mb-2">
                            <label class="form-label fw-semibold">Select Duration</label>
                            <select class="form-select" name="duration" required>
                                <option value="">-- Select Course Duration --</option>
                                <option value="3-months">3 Months (with Internship)</option>
                                <option value="6-months">6 Months (with Internship)</option>
                                <option value="1-year">1 Year (with Internship)</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label fw-semibold">Payment Method</label>
                            <select class="form-select" name="payment" required>
                                <option value="">-- Select Payment Method --</option>
                                <option value="cash">Cash</option>
                                <option value="easypaisa">EasyPaisa</option>
                                <option value="jazzcash">JazzCash</option>
                                <option value="bank">Bank Transfer</option>
                                <option value="credit-card">Credit / Debit Card</option>
                            </select>
                        </div>
                    </div>

                    <div class="main-box d-flex gap-3">
                        <div class="col-md-6 mb-2">
                            <label class="form-label fw-semibold">Select Course Fee</label>
                            <select class="form-select" name="fee" required>
                                <option value="">-- Select Course Fee --</option>
                                <option value="20000">3 Months — Rs. 20,000</option>
                                <option value="30000">6 Months — Rs. 30,000</option>
                                <option value="50000">1 Year — Rs. 50,000</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label fw-semibold">Email Address</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
                        </div>
                    </div>

                    <div class="main-box d-flex gap-3 align-items-end">
                        <div class="col-md-6 mb-2">
                            <label class="form-label fw-semibold">Create Password</label>
                            <input type="password" class="form-control" name="password"
                                placeholder="Enter a strong password" required>
                        </div>

                        <div class="col-md-6 mb-2">
                            <button type="submit" class="btn btn-primary w-100">
                                Enroll Now
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<!--  Footer Include -->
<?php include('footer.php'); ?>

</body>

</html>