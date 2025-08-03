<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Hospital</title>
</head>

<body class="body">

    <!--Nav Bar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom nav_body">
        <div class="container-fluid mt-1 mb-1">

            <a class="navbar-brand d-flex align-items-center p-2" href="#index.php">
                <img src="images/logo.jpeg" alt="Logo">
            </a>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"></a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Doctors
                        </a>
                        <ul class="dropdown-menu scrollable-dropdown fw-60 fs-60" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Find doctor by speciality</a></li>
                            <li><a class="dropdown-item" href="#">Dermatologist</a></li>
                            <li><a class="dropdown-item" href="#">Gynecologist</a></li>
                            <li><a class="dropdown-item" href="#">Urologist</a></li>
                            <li><a class="dropdown-item" href="#">Gastroenterologist</a></li>
                            <li><a class="dropdown-item" href="#">Neurologist</a></li>
                            <li><a class="dropdown-item" href="#">ENT Specialist
                                </a></li>
                            <li><a class="dropdown-item" href="#">Psychiatrist</a></li>
                            <li><a class="dropdown-item" href="#">Pediatrician</a></li>
                            <li><a class="dropdown-item" href="#">Dentist</a></li>
                            <li><a class="dropdown-item" href="#">Sexologist</a></li>
                            <li><a class="dropdown-item" href="#">View all Specialties</a></li>
                            <li><a class="dropdown-item" href="#">Find doctor by Condition</a></li>
                            <li><a class="dropdown-item" href="#">Whitening Injections</a></li>
                            <li><a class="dropdown-item" href="#">Laser Hair Removal</a></li>
                            <li><a class="dropdown-item" href="#">Hydrafacial</a></li>
                            <li><a class="dropdown-item" href="#">MRI</a></li>
                            <li><a class="dropdown-item" href="#">CT Scan</a></li>
                            <li><a class="dropdown-item" href="#">All Treatments
                                </a></li>
                            <li><a class="dropdown-item" href="#">Find doctor by Condition</a></li>
                            <li><a class="dropdown-item" href="#">Piles</a></li>
                            <li><a class="dropdown-item" href="#">Male Sexual Dysfunction</a></li>
                            <li><a class="dropdown-item" href="#">Hernia</a></li>
                            <li><a class="dropdown-item" href="#">Erectile Dysfunction</a></li>
                            <li><a class="dropdown-item" href="#"> Stomach Pain</a></li>
                            <li><a class="dropdown-item" href="#">All Conditions</a></li>
                            <li><a class="dropdown-item" href="#">Erectile Dysfunction</a></li>


                        </ul>
                    </li>

                    <!--Hospital-->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Hospitals
                        </a>
                        <ul class="dropdown-menu scrollable-dropdown fw-60 fs-60" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Lahore Hospitals</a></li>
                            <li><a class="dropdown-item" href="#">Karachi Hospitals</a></li>
                            <li><a class="dropdown-item" href="#">Islamabad Hospitals</a></li>

                        </ul>
                    </li>

                    <!--LAB & Diagnoistic-->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Labs and Diagnostics
                        </a>
                        <ul class="dropdown-menu scrollable-dropdown fw-60 fs-60" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Lahore Labs</a></li>
                            <li><a class="dropdown-item" href="#">Islamabad Labs</a></li>
                            <li><a class="dropdown-item" href="#">Karachi Labs</a></li>
                            <li><a class="dropdown-item" href="#">Lab Tests</a></li>

                        </ul>
                    </li>
                    <!--Surgy-->
                    <li class="nav-item dropdown">
                        <a class="nav-link active" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Surgeries
                        </a>
                    </li>
                    <!--Health Blog-->
                    <li class="nav-item dropdown">
                        <a class="nav-link active" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Health Blog
                        </a>
                    </li>
                </ul>


                <div class="d-flex align-items-center ms-auto flex-wrap gap-2">
                    <!-- Login/Signup -->
                    <a class="nav-link btn border login" href="#">LogIn/SignUp</a>

                    <!-- Join as Doctor -->
                    <a class="nav-link btn border join_as_doctor" href="#">Join as Doctor</a>

                    <!-- Phone number
                    <div class="border px-3 py-2" style="color:#000066; white-space: nowrap;">
                        📞 <a href="tel:02138140600" style="text-decoration: none; color: black;">02138140600</a>
                    </div> -->
                </div>



            </div>
        </div>
    </nav>


</body>

</html>