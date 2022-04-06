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
  <title>Event</title>
</head>

<body>
  <!-- topbar start -->
  <div class="topbar" id="topbar" style="">
    <div class="info">
      <!-- <span><i class="material-icons" style="color:#e7eaf6">phone</i> +123 456 7890</span>
                    <span><i class="material-icons" style="color:#e7eaf6">email</i>info@example.com</span> -->

      <p style="color: white;"> <i class="fas fa-phone" style="color: #ffb703  ;"></i> +123 456 7890 &nbsp;</p>

      <p style="color:white"> <i class="fas fa-envelope" style="color: #ffb703  ;"></i> info@example.com</p>
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
      ), url('img/event1.jpg');">
    <div class="about">
      <h1>Upcoming Events</h1>
      <p style="color: white;">You can make a difference.</p>
    </div>


  </div>
  <!--  Wallpaper Image End -->
  <!-- Event card Start -->
  <div class="events">

      <div class="event">
          <img src="img/event2.jpg" alt="Donate" width="100%">
          <div class="info">
              <div class="time">
                <h6><i class="fas fa-calendar-alt"></i> 01-Jan-2022</h6>
                <h6><i class="far fa-clock"></i> 10:00AM - 5:00PM </h6>
                <h6><i class="fas fa-map-marked-alt"></i> New Jersey</h6> 
             </div>
            
             <div class="infotext">
                    <h2>Lorem ipsum dolor sit</h2>
                    <p>Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor</p>
                    <Button id="join">Join Now</Button>
             </div>
          </div>
      </div>

      <!-- ---------------- -->
      <div class="event">
        <img src="img/event2.jpg" alt="Donate" width="100%">
        <div class="info">
            <div class="time">
                <!-- <i class="fas fa-calendar-alt"></i> -->
                <!-- <i class="far fa-clock"></i> -->
                <!-- <i class="fas fa-map-marked-alt"></i> -->
                <h6><i class="fas fa-calendar-alt"></i> 01-Jan-2022</h6>
                <h6><i class="far fa-clock"></i> 10:00AM - 5:00PM </h6>
                <h6><i class="fas fa-map-marked-alt"></i> New Jersey</h6> 
           </div>
          
           <div class="infotext">
                  <h2>Lorem ipsum dolor sit</h2>
                  <p>Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor</p>
                  <Button id="join">Join Now</Button>
           </div>
        </div>
    </div>
     <!-- ---------------- -->
     <div class="event">
      <img src="img/event2.jpg" alt="Donate" width="100%">
      <div class="info">
          <div class="time">
              <!-- <i class="fas fa-calendar-alt"></i> -->
              <!-- <i class="far fa-clock"></i> -->
              <!-- <i class="fas fa-map-marked-alt"></i> -->
              <h6><i class="fas fa-calendar-alt"></i> 01-Jan-2022</h6>
              <h6><i class="far fa-clock"></i> 10:00AM - 5:00PM </h6>
              <h6><i class="fas fa-map-marked-alt"></i> New Jersey</h6> 
         </div>
        
         <div class="infotext">
                <h2>Lorem ipsum dolor sit</h2>
                <p>Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor</p>
                <Button id="join">Join Now</Button>
         </div>
      </div>
  </div>
 <!-- ---------------- -->
 <div class="event">
  <img src="img/event2.jpg" alt="Donate" width="100%">
  <div class="info">
      <div class="time">
          <!-- <i class="fas fa-calendar-alt"></i> -->
          <!-- <i class="far fa-clock"></i> -->
          <!-- <i class="fas fa-map-marked-alt"></i> -->
          <h6><i class="fas fa-calendar-alt"></i> 01-Jan-2022</h6>
          <h6><i class="far fa-clock"></i> 10:00AM - 5:00PM </h6>
          <h6><i class="fas fa-map-marked-alt"></i> New Jersey</h6> 
     </div>
    
     <div class="infotext">
            <h2>Lorem ipsum dolor sit</h2>
            <p>Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor</p>
            <Button id="join">Join Now</Button>
     </div>
  </div>
</div>



  </div>
  <!-- Event card End -->

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