<!-- navbar design -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="logo" href="index.php">
            <img src="./assets/images/image-logo.jpg" alt="Logo">
        </a>
        <button class="ms-3 me-3 navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active text-white" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="About.php">About</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="contact.php">Contact</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="Gallery.php">Gallery</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Courses
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="course-wordpress.php">WordPress</a></li>
                        <li><a class="dropdown-item" href="course-web.php">Web Design</a></li>
                        <li><a class="dropdown-item" href="course-frontend.php">Frontend Development</a></li>
                        <li><a class="dropdown-item" href="course-backend.php">Backend Programming</a></li>
                        <li><a class="dropdown-item" href="course-react.php">React Js Framework</a></li>
                        <li><a class="dropdown-item" href="results.php">Students Results</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link text-white" href="Sign_In.php">Sign In</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        User_login
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href="login.php">Login</a></li>
                        <li><a class="dropdown-item" href="login.php">Logout</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>