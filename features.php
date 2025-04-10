<?php 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header_footer.css">
    <link rel="stylesheet" href="../css/integrations.css">
    <link rel="stylesheet" href="../css/features.css">
    <title>Features | CORE Commertial Construction</title>

</head>
<body>
    <?php
        include('header.php'); //Linking header section
    ?>
    <!-- Body section begins -->
    <!-- hero section begins -->
    <div class="fe_main">
        <div class="fe_intro">
            <h1>Platform Features</h1>
            <p>A comprehensive construction management website offers a range of features designed to streamline project execution and enhance collaboration. Key functionalities include real-time project tracking, allowing managers and stakeholders to monitor progress, timelines, and budgets efficiently!</p>
            <button class="fe_button" onclick="location.href='demo.php'">Get your Schedule</button>
            <button class="fe_button" id="fe_login_btn" onclick="location.href='dashboard.php'">Log in / Register</button>
        </div>
    </div>
    <!-- Hero section ends -->
    <?php
        if(isset( $_SESSION['user'] ) ) {
            echo "<script>
            (function test_form() {
                var fe_login_btn = document.getElementById('fe_login_btn');
                fe_login_btn.innerHTML = 'Dashboard';})();      
            </script>";                                
        }                        
        ?>
    <!-- Conatiner 1 begins -->
    <div class="int_container1 int_container">
        <div class="container-left">
            <div class="container_desc">
                <fieldset>
                    <img class="fe_img" src="../images/fa/svgs/regular/calendar.svg" alt="">
                    <h2>Project Delivery</h2>
                    <p>At Vastu Sutra, we believe in delivering every project with precision, transparency, and on-time execution. Our expert team ensures that each phase—from planning and design to monitoring and completion—is carried out with strict adherence to timelines and quality standards. With a focus on client satisfaction, we customize every delivery process to align with your goals and budget while maintaining the highest standards of vastu and construction excellence..</p>
                    <!-- <button class="int_button" type="button">Learn More</button> -->
                </fieldset>
            </div>
        </div>
        <div class="container-right">
            <div class="container_desc">
                <fieldset>
                    <img class="fe_img" src="../images/fa/svgs/regular/money-bill-1.svg" alt="">
                    <h2>Finance & Operations</h2>
                    <p>Our Finance & Operations team plays a crucial role in driving the backbone of every project. We offer transparent budgeting, accurate cost estimation, and resource allocation to ensure financial efficiency throughout the construction lifecycle. With streamlined operations and financial strategies in place, Vastu Sutra guarantees a balance between cost-effectiveness and uncompromised quality, helping clients stay informed and confident at every step.</p>
                    <!-- <button class="int_button" type="button">Learn More</button> -->
                </fieldset>
            </div>            
        </div>
    </div>
    <!-- Container 1 ends -->

    <!-- Container 2 begins-->
    <div class="int_container2 int_container fe_sd">
        <div class="int_subcontainer">
            <div class="container-left">
                <div class="container_desc">
                    <fieldset>
                        <img class="fe_img" src="../images/fa/svgs/regular/clock.svg" alt="">
                        <h2>Time Management</h2>
                        <p>We understand the value of time in any project. At Vastu Sutra, we carefully plan each step to make sure your project stays on schedule. Our team uses smart tools and clear timelines to avoid delays and keep everything running smoothly. With proper time tracking and regular updates, we help you complete your project on time—without stress.</p>
                        <!-- <button class="int_button" type="button">Learn More</button> -->
                    </fieldset>
                    
                </div>
            </div>
            <div class="container-right">
                <div class="container_desc">
                    <fieldset>
                        <img class="fe_img" src="../images/fa/svgs/regular/square-check.svg" alt="">
                        <h2>Supply Chain Management</h2>
                        <p>At Vastu Sutra, we manage every part of the supply chain with care and precision. From sourcing quality materials to coordinating with trusted vendors, we make sure everything arrives on time and fits the project’s needs. Our organized system helps reduce delays, avoid extra costs, and keep your project moving forward without hassle..</p>
                        <!-- <button class="int_button" type="button">Learn More</button> -->
                    </fieldset>
                </div>
            </div>
        </div>
        <!-- Shape devider begins, generated using:https://www.shapedivider.app/-->
        <div class="custom-shape-divider-top-1653078005">
            <svg data-name="Layer 1" xmlns="../images/tilt.svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
            </svg>
        </div>
        <div class="custom-shape-divider-bottom-1653078696">
            <svg data-name="Layer 1" xmlns="../images/tilt.svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
            </svg>
        </div>
        <!-- Shape devider ends -->
    </div>
    <!--Conatiner 2 Ends  -->
    <!-- Conatiner 3 begins -->
    <div class="int_container3 int_container">
        <div class="container-left">
            <div class="container_desc">
                <fieldset>
                    <img class="fe_img" src="../images/fa/svgs/regular/thumbs-up.svg" alt="">
                    <h2>Service Management</h2>
                    <p>We believe great service is the key to a successful project. At Vastu Sutra, our team ensures every service—from planning to final delivery—is handled with care and professionalism. We stay connected with our clients, respond quickly to their needs, and solve issues before they become problems. Our goal is to make your experience smooth, reliable, and satisfying from start to finish.</p>
                    <!-- <button class="int_button" type="button">Learn More</button> -->
                </fieldset>
            </div>
        </div>
        <div class="container-right">
            <div class="container_desc">
                <fieldset>
                    <img class="fe_img" src="../images/fa/svgs/regular/square-plus.svg" alt="">
                    <h2>Third-party Integrations</h2>
                    <p>We work seamlessly with trusted third-party tools and services to improve project performance. Whether it's software for design, project tracking, or communication, our team ensures smooth integration without any technical issues. These smart collaborations help us deliver better results, faster execution, and a more connected experience for our clients..</p>
                    <!-- <button class="int_button" type="button">Learn More</button> -->
                </fieldset>
            </div>            
        </div>
    </div>
    <!-- Container 3 ends -->
    <!-- Container 4 begins-->
    <div class="int_container4 int_container fe_sd">
        <div class="int_subcontainer">
            <div class="container-left">
                <div class="container_desc">
                    <fieldset>
                        <img class="fe_img" src="../images/fa/svgs/regular/pen-to-square.svg" alt="">
                        <h2>Inventory Management</h2>
                    <p>
                        Our inventory management system helps you track materials and supplies in real-time. You’ll always know what’s in stock, what’s low, and when to restock. This helps reduce delays, manage resources better, and save costs throughout the project.
                    </p>
                    </fieldset>
                </div>
            </div>
            <div class="container-right">
                <div class="container_desc">
                    <fieldset>
                        <img class="fe_img" src="../images/fa/svgs/regular/chart-bar.svg" alt="">
                        <h2>Real-time Stats</h2>
                    <p>
                        Stay updated with real-time project statistics. Our system shows you progress reports, timelines, and key metrics instantly. This allows for quick decisions, efficient workflow adjustments, and better control over your project’s success.
                    </p>

                    </fieldset>
                </div>
            </div>
        </div>
        <!-- Shape devider begins, generated using:https://www.shapedivider.app/-->
        <div class="custom-shape-divider-top-1653078005">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
            </svg>
        </div>
        <!-- Shape devider ends -->
    </div>
    <!--Conatiner 4 Ends  -->
    <!-- Body section ends -->
    <?php
        include('footer.php'); //linking to footer section
    ?>