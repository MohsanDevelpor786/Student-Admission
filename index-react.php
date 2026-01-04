<!--  Header Include With Navbar -->
<?php include 'header.php'; ?>

<!-- Home Section -->
<section class="home-section-backend d-flex align-items-center text-center text-white">
    <div class="container">
        <h1 class="fw-bold display-4 mb-3">Welcome to Our React Course</h1>
        <p class="lead fs-5">Learn modern web technologies with real-world hands-on practice.</p>
        <a href="contact.php" class="btn btn-light btn-lg mt-2 fw-semibold shadow-sm">Join Now</a>
    </div>
</section>

<div class="container pt-4 pb-4">
    <div class="row align-items-center">
        <h2 class="text-center mb-4">Welcome To our Backend Course!</h2>
        <!-- Left Side: Image -->
        <div class="col-lg-6 col-md-6 col-sm-12 image-section">
            <div class="card">
                <img src="./assets/images/image-gallery-5.jpg" alt="Sample Image" style="width: 100%; height: 520px;" class="img-fluid rounded shadow">
            </div>
        </div>

        <!-- Right Side: Form -->
        <?php
        include 'conn.php';

        if (isset($_POST['submit'])) {
            // Collect and sanitize input values
            $name     = $_POST['name'];
            $duration = $_POST['duration'];
            $payment  = $_POST['payment'];
            $email    = $_POST['email'];
            $password = $_POST['password'];

            // Hash password
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

            // Insert query
            $query = "INSERT INTO backend (name, duration, payment, email, password) 
              VALUES ('$name', '$duration', '$payment', '$email', '$hashedPassword')";

            $result = mysqli_query($conn, $query);

            if ($result) {
                $success = " Your information has been submitted successfully!";
            } else {
                $error = " Error: " . mysqli_error($conn);
            }
        }
        ?>

        <div class="col-lg-6 col-md-6 col-sm-12">
            <div>
                <!-- Success or Error Message -->
                <?php if (isset($success)) { ?>
                    <div class="alert alert-success text-center fw-semibold">
                        <?= $success; ?>
                    </div>
                <?php } ?>
                <?php if (isset($error)) { ?>
                    <div class="alert alert-danger text-center fw-semibold">
                        <?= $error; ?>
                    </div>
                <?php } ?>

                <div class="rounded-4 border-0">
                    <form method="POST" action="" class="card p-4">
                        <div class="d-flex gap-3">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label fw-semibold">Full Name</label>
                                <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Enter your name" required>
                            </div>

                        </div>
                        <div class="d-flex gap-3">
                            <div class="col-md-6 mb-3">
                                <label for="duration" class="form-label fw-semibold">Duration</label>
                                <select class="col-md-6  form-select form-select-lg" id="duration" name="duration" required>
                                    <option value="" disabled selected>Select Duration</option>
                                    <option value="3 Months - 10000">3 Months - 10000</option>
                                    <option value="6 Months Full Stack Internship - 20000">6 Months Full Stack Internship - 20000</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="payment" class="form-label fw-semibold">Payment Method</label>
                                <select class="form-select form-select-lg" id="payment" name="payment" required>
                                    <option value="" disabled selected>Select Payment Method</option>
                                    <option value="NetsCash">NetsCash</option>
                                    <option value="EasyPaisa">EasyPaisa</option>
                                    <option value="JazzCash">JazzCash</option>
                                    <option value="Bank">Bank</option>
                                </select>
                            </div>
                        </div>


                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">Email Address</label>
                            <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Enter your email" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label fw-semibold">Password</label>
                            <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Enter password" required>
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary btn-lg w-100 fw-semibold mt-3">Submit</button>
                    </form>

                </div>
            </div>

        </div>
    </div>


</div>

<!--  Footer Include -->
<?php include('footer.php'); ?>