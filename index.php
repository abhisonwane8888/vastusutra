
<!DOCTYPE html>
<html>
<head>
    <title>Home | CORE Commertial Constructions</title>
    <link rel="stylesheet" href="../css/header_footer.css">
    <link rel="stylesheet" href="../css/home.css">
    
    <link rel="stylesheet" href="../css/header_footer.css">
    <link rel="stylesheet" href="../css/integrations.css">
    <link rel="stylesheet" href="../css/features.css">
    <link rel="stylesheet" href="../css/testimonials.css">
</head>
<style>

    .h2{
         color: #fff;

    }
    .h3{
        font-weight: 300;
  color:rgb(244, 244, 244);
  font-size: 55px;
  text-transform: uppercase;
  text-align: center;
  margin-bottom: 20px;
  margin-right:700px;

  
    }
    </style>
<body>
    <?php
        include('header.php'); //Linking header section
    ?>

    <div style="height:2100px;">

    <div class="title">
        <div id="hero-image">
            <div class="wrapper">
                <h2 style=" color: #FFD700;" class="h2"><strong>VASTU SUTRA</strong><br/>
                </h2>
                 
                <!-- <a href="#" class="button-1">See Pricing</a> -->
            </div>
            <h3 style="margin-left:500px; color:white; text-style:bold; font-size:1.5rem;"> Project Planning Consultancy</h3>
        </div>
        </div>

        <div id="primary-content">
            <div class="wrapper">
                <article>
                    <h3 style="color:red; font-weight:bold;" class="h3">Featured Content</h3>
                    <p style="font-weight:bold" class="p">"VastuSutra offers end-to-end project planning—from smart 2D/3D designs and cost-effective strategies to timely execution, material quality, and hassle-free approvals." </p>
                    <img style="padding:100px;   max-width: 800px; "  src="../images/feature-content.jpg" width="80%" height="auto">
                    <h5 class="h5"><a href="#">See More...</a></h5>
                </article>
            </div>
        </div>

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


    </div>

    <br><br><br>
    <br><br><br><br><br><br>
    <?php
        include('footer.php'); //linking to footer section
    ?>



<!-- 
    Student name: Thathsara S.M.K. 
    Student ID: IT21219566 
    Module: IWT (1st Yr: 2nd Sem: Final Assignment: 2022)
 -->
