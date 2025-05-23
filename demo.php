
<!DOCTYPE html>
<html>
    <head>
        <title>Demo | CORE Commertial Construction</title>
        <link rel="stylesheet" href="../css/header_footer.css">
        <link rel="stylesheet" href="../css/demo.css">
    </head>
    <body>
    <?php
        include('header.php'); //Linking header section
    ?>
        
        <!--Content Section Begins-->
    
        <div style="height:1700px;">
    
            <!-- Slideshow container -->
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <div class="numbertext">
                <h2 style="color: white;">Book a Schedule</h2>
                <p style="color: white;">Ready to take the first step toward your dream project? At Vastu Sutra, we make project planning simple, efficient, and aligned with your goals.</p>
                <button class="button1" type="button">Instructions</button>
            </div>
            <img src="../images/sld1.jpg" style="width:100%">
        </div>
  
        <div class="mySlides fade">
            <div class="numbertext">
                <h2>Why choose us?</h2>
                <p>Choose VastuSutra for expert-driven, end-to-end project planning. We combine smart design, Vastu Shastra principles, cost-effective strategies, quality materials, and timely execution—delivered by a young, innovative team with strong local expertise, committed to bringing your vision to life</p>
                <button class="button1" type="button">Featurs</button>
            </div>
            <img src="../images/sld2.png" style="width:100%">
        </div>
  
        <div class="mySlides fade">
            <div class="numbertext">
                <h2 style="color: white;">What we do?</h2>
                <p style="color: white;">At Vastu Sutra, we specialize in providing expert project planning and construction consultancy services that blend modern engineering with traditional Vastu principles. We assist architects, builders, and developers in executing well-structured and efficient projects from concept to completion.
                </p>/p>
                <button class="button1" type="button">Learn More</button>
            </div>
            <img src="../images/sld3.jpg" style="width:100%">
        </div>
  
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
  
    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}
            slides[slideIndex-1].style.display = "block";
            setTimeout(showSlides, 5000); // Change image every 2 seconds
        }
    </script>

    <!--End of slideshow-->

            <!--Container 1 ends-->

            <!--Container 2 begins-->

            <div class="int_container1 int_container">
                <div class="container-left">
                    <div class="cont_desc1">
                        <h2>What you get  from us.</h2>
                        <p>When you choose Vastu Sutra, you’re not just getting a consultant — you’re getting a reliable partner committed to the success of your project. We ensure value at every step of your journey.
                        </p>

<ul>
  <li>✅ Personalized Project Planning</li>
  <li>✅ Expert Guidance Based on Vastu & Engineering Principles</li>
  <li>✅ Transparent Cost Estimates</li>
  <li>✅ Timely Execution Plans</li>
  <li>✅ Ongoing Support & Consultation</li>
  <li>✅ Satisfaction-Driven Service</li>
</ul>

<p>

                        <!-- <button id="features" type="button">FAQ</button> -->
                    </div>
                </div>
                <div class="container-right">
                    <div class="cont_desc2">
                        <div class="fix">
                            <form method="post" action="#">
                                <h2>Get your Schedule</h2>
                                <input id="Dname" type="text" class="field" placeholder="Your Name"><br>
                                <input id="Demail" type="text" class="field" placeholder="Your Email"><br>
                                <!-- <input id="Dnum" type="text" class="field" placeholder="Phone"><br> -->
                                <input id="Dnum" type="text" class="field" placeholder="Registered id" required><br>
                                <!-- <textarea id="massage" name="massage" placeholder="Message" class="field"></textarea><br> -->
                                
                                <input type="submit" value="Get" class="btn" onclick="requestDemo()">
                            </form>
                        </div>
                    </div>
                </div>

                <script>
                    function requestDemo() 
                    {
                        var name= document.getElementById("Dname").value;
                        var email= document.getElementById("Demail").value;
                        var num= document.getElementById("Dnum").value;

                        const  massage = document.getElementById("massage");
                        console.log(massage.value);
                    }
                </script>

            </div>

            <!--Container 2 ends-->

            <!--Container 3 begins-->

            <div class="container3">
                <center><p class="para">“Experience is the name everyone gives to their mistakes.”<br>– Oscar Wilde</p></center>
            </div>

            <!--Container 3 ends-->

        </div>

            <!--Content Section Ends-->

        <?php
            include('footer.php'); //linking to footer section
        ?>



<!-- 
    Student name: Thathsara S.M.K. 
    Student ID: IT21219566 
    Module: IWT (1st Yr: 2nd Sem: Final Assignment: 2022)
 -->
