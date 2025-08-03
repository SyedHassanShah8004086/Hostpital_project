<?php
require('header.php'); // required for header content 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Doctor Search Banner</title>
</head>

<body>


    <!--Banner Section-->

    <div class="banner">
        <div class="banner-text">
            <h1>Find and Book the<br> <span class="highlight">Best Doctors</span> near you</h1>
            <div class="badge">✅ 9M+ tele-consultations</div>

            <div class="search-bar">
                <input type="text" placeholder="Lahore">
                <input type="text" placeholder="Doctors, Hospital, Conditions" style="flex: 1;">
                <button>Search</button>
            </div>
        </div>

        <img src="images/banner_doc.webp" alt="Doctor">
    </div>

    
<!-- card start-->

 <div class="card-container">

    <!-- Card 1 -->
    <div class="card">
        <img src="images/doc1.webp" alt="Doctor Online">
        <div class="status-bar"><span>●</span>1 Doctor Online Now</div>
        <a href="#" class="blue-btn">Consult Online Now</a>
        <div class="description">Instantly connect with Specialists through Video call.</div>
    </div>

    <!-- Card 2 -->
    <div class="card">
        <img src="images/doc2.webp" alt="Clinic Appointments">
        <div class="title">In-Clinic Appointments</div>
        <div class="description">Book an In-Person visit to doctor's clinic.</div>
    </div>

    <!-- Card 3 -->
    <div class="card">
        <img src="images/doc3.webp" alt="Laboratory Tests">
        <div class="title">Laboratory Tests</div>
        <div class="description">Avail exclusive discounts on lab tests.</div>
    </div>

    <!-- Card 4 -->
    <div class="card">
        <img src="images/doc4.webp" alt="Procedures">
        <div class="title">Procedures & Surgeries</div>
        <div class="description">Plan your surgeries at discounted rates.</div>
    </div>

    <!-- Card 5 -->
    <div class="card">
        <img src="images/doc5.webp" alt="Medicines">
        <div class="title">Medicines</div>
        <div class="description">Know your medicines better.</div>
    </div>

</div>

</body>
</html>

</body>

</html>