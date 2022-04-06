<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
    integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="/css/style.css">
  <script>
    window.onscroll = function () { myFunction() };

    function myFunction() {
      if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
        document.getElementById("navbar").style.background = "#023047";
        document.getElementById("topbar").style.display = "none";
      } else {
        document.getElementById("navbar").style.background = "";
        document.getElementById("topbar").style.display = "grid";
      }
    }
    function backgroundColor() {
      var navbar = document.getElementById("navbar");
      if (navbar.background != "#023047")
        document.getElementById("navbar").style.background = "#023047";
      document.getElementById("topbar").style.display = "none";

    }
    function showp1() {
      document.getElementById("p1").style.display = "block";
      document.getElementById("p2").style.display = "none";
      document.getElementById("p3").style.display = "none";
    }
    function showp2() {
      document.getElementById("p1").style.display = "none";
      document.getElementById("p2").style.display = "block";
      document.getElementById("p3").style.display = "none";
    }
    function showp3() {
      document.getElementById("p3").style.display = "block";
      document.getElementById("p2").style.display = "none";
      document.getElementById("p1").style.display = "none";
    }
  </script>
  <style>
    #logo {
      color: #ffb703;
    }

    .nav-link {}
  </style>
  <title>About</title>
</head>

<body>
  <!-- topbar start -->
  <div class="topbar" id="topbar" style="">
    <div class="info">
      <!-- <span><i class="material-icons" style="color:#e7eaf6">phone</i> +123 456 7890</span>
                    <span><i class="material-icons" style="color:#e7eaf6">email</i>info@example.com</span> -->

      <p style="color: #023047;"> <i class="fas fa-phone" style="color: #ffb703  ;"></i> +123 456 7890 &nbsp;</p>

      <p style="color: #023047;"> <i class="fas fa-envelope" style="color: #ffb703  ;"></i> info@example.com</p>
    </div>
    <div class="social">
      <p align="right"><a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </p>
    </div>
  </div>
  <!--topbar end  -->
  <!-- Navbar start -->
  <nav class="navbar navbar-expand-sm sticky-top" id="navbar" style="">
    <div class="container-fluid">
      <a id="logo" class="navbar-brand" href="#">Charity</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar"
        onclick="backgroundColor()">
        <span><i class="fas fa-bars" style="color: white; font-size: 28px;"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
        <li class="nav-item">
                  <a class="nav-link" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/donate')}}">Donate</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/causes')}}">Causes</a>
                </li>    
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/event')}}">Events</a>
                  </li> 
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/about')}}">About</a>
                  </li> 
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/volunteer')}}">Volunteer</a>
                  </li> 
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar end -->
  <!-- Wallpaper Image start-->
  <div class="parallax" style="background-image:linear-gradient(
        rgba(0, 0, 0, 0.5), 
        rgba(0, 0, 0, 0.5)
      ), url('img/volunteers.jpg');">
    <div class="about">
      <h1>About us</h1>
      <p>You can make a difference.</p>
    </div>


  </div>
  <!--  Wallpaper Image End -->
  <!-- Mission vision Start -->
  <div class="mission">
    <div class="mission1" style="background-image: url(img/localfooddrive.jpg);">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint praesentium, temporibus ab, nostrum, quia
        aperiam perferendis fugit quibusdam fuga voluptate aliquid itaque sequi quidem consectetur natus dignissimos
        blanditiis maxime dolores culpa ratione. Aut, unde dolorem deleniti excepturi harum fugiat pariatur laborum
        cupiditate sunt magni doloribus, aliquam fuga architecto perferendis cumque. Velit rem aspernatur officia nulla
        culpa voluptatibus quasi quae pariatur!</p>
    </div>
    <div class="mission2">
      <h6 style="color: #023047;">Learn About Us</h6>
      <h1 style="color: #023047;">Worldwide non-profit charity organisation</h1>
      <ul>
        <li onclick="showp1()">About</li>
        <li onclick="showp2()">Mission</li>
        <li onclick="showp3()">Vision</li>
      </ul>
      <p id="p1">About <br> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum nam ratione vel
        dignissimos mollitia. Laborum odio dolor perferendis velit maiores repellendus neque blanditiis reiciendis
        ducimus, asperiores consequuntur, nemo quae Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum vero
        provident aut omnis autem deleniti, laudantium adipisci repellat accusantium delectus.</p>
      <p id="p2">Mission <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem voluptates velit consectetur
        optio molestiae error aperiam odio eveniet quidem veniam sapiente nulla reiciendis totam laboriosam minus ad
        recusandae deleniti, saepe, quos dolores. Dolorem exercitationem consectetur eius quis nostrum! Corrupti commodi
        neque facere deserunt minima distinctio fugit debitis exercitationem ea aperiam!</p>
      <p id="p3">Vision <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores ducimus magni incidunt
        debitis perspiciatis, eius aut molestias ex quam cumque voluptate distinctio velit placeat, dolorum vitae
        dolores. Id voluptatum repudiandae dicta? Quae ullam doloremque nihil enim alias, sint quo itaque voluptate
        cumque in. Excepturi eum accusamus atque voluptates culpa beatae.</p>

    </div>
  </div>
  <!-- Mission vision end -->
  <!-- Teamwork start-->
  <div class="teamwork" style="background-image: url(img/facts.jpg);">
    <div class="insight">
      <p><i class="fab fa-fort-awesome"></i>
        150 <sup>+</sup> <br> Countries
      </p>
      <p><i class="fas fa-hands-helping"></i>
        400 <sup>+</sup> <br> volunteers
      </p>
      <p><i class="fas fa-coins"></i>
        10000 <sup>$</sup> <br> Our Goal
      </p>
      <p><i class="fas fa-hand-holding-usd"></i>
        5000 <sup>$</sup> <br> Raised
      </p>

    </div>
  </div>
  <!-- Teamwork end -->

  <!-- Team Members start-->
  <div class="team">
    <h4 align="center">Meet our team</h4>
    <h1 align="center">Awesome Guys Behind Our Charity Activities</h1>
    <div class="members">

      <div class="card">

        <img src="img/member1.jpg" alt="" height="300px" width="250px">
        <div class="contact">
          <h4 align="center">Member One</h4>
          <h6 align="center">Charity & Charity</h6>
          <p align="center"><a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </p>

        </div>
      </div>
        <!-- m2 -->
        <div class="card">

          <img src="img/member2.jpg" alt="" height="300px" width="250px">
          <div class="contact">
            <h4 align="center">Member Two</h4>
            <h6 align="center">Charity & Charity</h6>
            <p align="center"><a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
            </p>
  
          </div>
        </div>
        <!-- m2 -->
         <!-- m3 -->
         <div class="card">

          <img src="img/member3.jpg" alt="" height="300px" width="250px">
          <div class="contact">
            <h4 align="center">Member Three</h4>
            <h6 align="center">Charity & Charity</h6>
            <p align="center"><a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
            </p>
  
          </div>
         </div>
        <!-- m3 -->
          <!-- m4 -->
          <div class="card">

            <img src="img/member4.jpg" alt="" height="300px" width="250px">
            <div class="contact">
              <h4 align="center">Member Four</h4>
              <h6 align="center">Charity & Charity</h6>
              <p align="center"><a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
              </p>
    
            </div>
           </div>
          <!-- m4 -->
        
      
    </div>
  </div>
  <!-- Team Members end-->

   <!-- Footer Start -->
   <footer>
    <div class="footer">
        <div class="headoffice">
            
            <ul>
                <h2>Head Office</h2>
                <li><i class="fas fa-map-marked-alt"></i> 455 Street, New Jersey</li>
                <li> <i class="fas fa-phone"></i> +123 456 7890 </li>
                <li><i class="fas fa-envelope"> </i> info@myclass.com</li>
               
                    <p><a class="fsocial" href="#"><i class="fab fa-facebook-f"></i></a>
                      <a class="fsocial" href="#"><i class="fab fa-twitter"></i></a>
                      <a class="fsocial" href="#"><i class="fab fa-linkedin-in"></i></a>
                      <a class="fsocial" href="#"><i class="fab fa-instagram"></i></a>
                    </p>
                  
            </ul>
        </div>
        <div class="popularlinks">
            <ul>
                <h2>Popular Links</h2>
                <li> <a href="About.html">About us</a> </li>
                <li> <a href="Causes.html">Popular Causes</a> </li>
                <li> <a href="Volunteer.html">Become a Volunteer</a> </li>
                <li> <a href="Event.html">Upcoming Events</a></li>
                <li> <a href="Donate.html">Donate Now</a></li>
                <li><a href="index.html">Home</a></li>
            </ul>
        </div>
        <div class="usefullinks">
            <ul>
                <h2>Useful Links</h2>
                <li><a href="#">Terms of use</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Cookies</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="#">FQAs</a></li>
            </ul>
        </div>
    </div>

     <hr>
     <div class="endtext">
         <h2>&copy; www.charity.com</h2>
     </div>

    </footer>
    <!-- Footer End -->
</body>

</html>