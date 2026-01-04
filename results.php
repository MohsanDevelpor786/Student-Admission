<!--  Header Include With Navbar -->
<?php include 'header.php'; ?>
<div class="bg-light">
    <!-- Home Section -->
    <section class="home-section-result d-flex align-items-center text-center text-white">
        <div class="container">
            <h2 class="mb-2">Welcome to Our Check Results</h2>
            <p>Learn modern web technologies with real-world hands-on practice.</p>
            <a href="results.php" class="btn btn-light btn-lg mt-2 fw-semibold shadow-sm">Join Now</a>
        </div>
    </section>

    <div class="container pt-3 pb-4 result-design">
        <div class="row align-items-center">
            <h2 class="text-center mb-4">Welcome To our Results Update!</h2>
            <!-- Left Side: Image -->
            <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                <div>
                    <img src="./assets/images/image-gallery-6.jpg" alt="Sample Image" class="w-100 img-fluid rounded shadow">
                </div>
            </div>

            <!-- Right Side: Form -->
            <?php
            include 'conn.php';
            $gradeMessage = ""; // To show grade in alert box

            if (isset($_POST['submit'])) {

                $name   = $_POST['name'];
                $rollNo = $_POST['roll_no'];
                $marks  = $_POST['marks'];

                //   CHECK GRADE
                if ($marks >= 80 && $marks <= 100) {
                    $gradeMessage = "You are A+ Grade";
                } else if ($marks >= 70 && $marks < 80) {
                    $gradeMessage = "You are A Grade";
                } else if ($marks >= 60 && $marks < 70) {
                    $gradeMessage = "You are 1st Division";
                } else if ($marks >= 50 && $marks < 60) {
                    $gradeMessage = "You are 2nd Division";
                } else if ($marks >= 40 && $marks < 50) {
                    $gradeMessage = "You are 3rd Division";
                } else if ($marks >= 33 && $marks < 40) {
                    $gradeMessage = "You are Pass";
                } else if ($marks < 33) {
                    $gradeMessage = "You are Fail";
                } else {
                    $error = "Invalid marks entered!";
                }

                // INSERT QUERY
                $query = "INSERT INTO students (name, roll_no, marks)
            VALUES ('$name', '$rollNo', '$marks')";


                $insert = mysqli_query($conn, $query);

                if ($insert) {
                    $success = "Your information has been submitted successfully!";
                } else {
                    $error = "Error: " . mysqli_error($conn);
                }
            }
            ?>


            <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                <div>
                    <?php if (!empty($gradeMessage)) { ?>
                        <div class="alert alert-info text-center fw-semibold">
                            <?= $gradeMessage; ?>
                        </div>
                    <?php } ?>

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

                    <div class="border-0">
                        <form method="POST" action="" class="card p-4">
                            <div class="mb-3">
                                <label for="name" class="form-label fw-semibold">Enter Full Name</label>
                                <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Enter your name" required>
                            </div>

                            <div class="mb-3">
                                <label for="roll No" class="form-label fw-semibold">Enter Roll No</label>
                                <input type="number" class="form-control form-control-lg" id="roll_no" name="roll_no" placeholder="Enter your Roll No" required>
                            </div>

                            <div class="mb-3">
                                <label for="marks" class="form-label fw-semibold">Enter Marks</label>
                                <input type="number" class="form-control form-control-lg" id="marks" name="marks" placeholder="Enter your Marks" required>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary btn-lg w-100 fw-semibold mt-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--  Footer Include -->
<?php include('footer.php'); ?>