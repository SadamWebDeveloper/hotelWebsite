<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="vendors/css/grid.css" />
    <link rel="stylesheet" type="text/css" href="resources/css/style.css" />
    <link rel="stylesheet" type="text/css" href="resources/css/queries.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
    />
    <link rel="icon" href="/resources/img/hotel_log.png">
    <title>Amruta's Dine</title>
  </head>
  <style>
    .customer_list{
    color: black;
    TEXT-ALIGN: center;
    margin-top: 10px;
    }
  .logo-container {
  display: flex;
  align-items: center; 
    }

  .your-name {
    margin-left: -15px; 
    font-style: italic; 
    background-color: orange; 
    color: white; 
    padding: 5px 10px; 
    border-radius: 5px; 
  }

  /* CSS styles for testimonials */
blockquote {
  color:black;
  font-style: normal;
  border: 1px solid #ccc;
  border-radius: 10px;
  padding: 10px;
  text-align: left;
  position: relative;
  height: 300px;
  overflow-y: auto; 
  background-color: thistle;
}

.customer-info {
  display: flex;
  align-items: flex-end;
  position: absolute;
  bottom: 10px;
  left: 10px;
  right: 10px;
  justify-content: space-between;
}

.customer-image {
  max-height: 60px;
  border-radius: 50%;
}

cite {
  font-style: normal;
  font-size:20px;
  font-weight: bold;
  margin-bottom: 10px;
  margin-right: 10px;
}


  </style>
  <body>
    <!------------------------------------------------------------------->
    <!------------------This is the Header Section--------------------->
    <!------------------------------------------------------------------->

    <header>
      <nav>
        <div class="row">
          <div class="logo-container">
            <img src="resources/img/hotel_log.png" alt="logo" class="logo" />
            <div class="your-name">Amruta's Dine</div> <!-- Use a <div> for your name -->
          </div>
          
          <img src="resources/img/hotel_log.png" alt="logo" class="logo-sticky" />
          <ul class="main-nav js--main-nav">
            
            <!-- <li><a href="#works">How it works</a></li> -->
            <li><a href="pages/menus.html">Menus</a></li>
            <li><a href="pages/our_cites.html">Our cities</a></li>
            <li><a href="pages/feedback.html">Customer FeedBack</a></li>
            <li><a href="index.html">Logout</a></li>
            <!-- <li><a href="#signup">Sign up</a></li> -->
          </ul>
        </div>
        
      </nav>

      <div class="hero-text-box">
        <h1 class="maintext">
          Goodbye junk food. <br />
          Hello super healthy meals.
        </h1>
        <a class="btn btn-full js--section-to-plans" href="pages/menus.html">I’m hungry </a>
        <!-- <a class="btn btn-ghost js--section-to-start" href="#">Show me more </a> -->
      </div>
    </header>

    <!------------------------------------------------------------------->
    <!------------------This is the Features Section--------------------->
    <!------------------------------------------------------------------->
<h1 class='customer_list'>Customer FeedBack Section</h1>
    <div class="row">
    <?php
    include("fetchFeedBack.php");

    while ($row = $result->fetch_assoc()) {
      echo '<div class="col span-1-of-3">';
      echo '<blockquote>';
      echo $row["feedback"];
      echo '<div class="customer-info">';
      echo '<img src="resources/img/kumar_av.png" alt="Customer Image" class="customer-image" />';
      echo '<cite>' . $row["name"] . '</cite>';
      echo '</div>';
      echo '</blockquote>';
      echo '</div>';
    }
    ?>
</div>




  
    <div class="row">
  <h2>Our Location</h2>
</div>

<div class="row">
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1dYOUR_LATITUDE!2dYOUR_LONGITUDE!3dYOUR_ZOOM_LEVEL!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1sYOUR_MARKER_LABEL!2sYOUR_MARKER_ICON!5e0!3m2!1sen!2sus!4vYOUR_MAP_EMBED_VERSION!5m2!1sen!2sus"
    width="100%"
    height="300"
    style="border:0;"
    allowfullscreen=""
    loading="lazy"
  ></iframe>
</div>


    <!------------------------------------------------------------------->
    <!------------------This is the Footer Section----------------------->
    <!------------------------------------------------------------------->

    <footer>
      <div class="row">
        <div class="col span-1-of-2">
          <ul class="footer-nav">
            <li><a href="#"> About us</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Press</a></li>
            <li><a href="#">Ios App</a></li>
            <li><a href="#">Android app</a></li>
          </ul>
        </div>
        <div class="col span-1-of-2">
          <ul class="social-links">
            <li>
              <a href="https://www.facebook.com/"
                ><ion-icon class="facebook" name="logo-facebook"></ion-icon
              ></a>
            </li>
            <li>
              <a href="#"
                ><ion-icon class="instagram" name="logo-instagram"></ion-icon
              ></a>
            </li>
            <li>
              <a href="#"
                ><ion-icon class="twitter" name="logo-twitter"></ion-icon
              ></a>
            </li>
            <li>
              <a href="#"
                ><ion-icon class="googleplus" name="logo-google"></ion-icon
              ></a>
            </li>
          </ul>
        </div>
      </div>

      <div class="row">
        <p>
          Copyright &copy; by <strong>Amruta Jagadale.</strong> 
        </p>
      </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>
    <script src="resources/js/script.js"></script>
  </body>
</html>
