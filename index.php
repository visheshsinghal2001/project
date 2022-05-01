<?php
              $link = mysqli_connect("localhost", "root", "", "cinema_db");
              $sql = "SELECT * FROM movieTable";
               $bookingsNo=mysqli_num_rows(mysqli_query($link, $sql));
              ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link
      rel="stylesheet"
      type="text/css"
      href="vendors/css/grid.css"
    />
    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css" />
    <link rel="stylesheet" type="text/css" href="resources/css/styles.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
      <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>movie bytes</title>
  </head>
  <body>
    <header>
      <!-- ------------------- -->
      <!-- --------NAVIGATION BAR--------- -->
      <!-- ------------------- -->
      <nav>
        
        <div class="row">
          
          <img class='logo' src='resources/css/img/logo.png'>
          <ul class="main-nav ">
            <li><a href="#">Contact</a></li>
            <li> <a class='user hidden' href="#">
        <i class='ion-android-contact iconic'></i>
        User Name<!--fill username here--></a></a></li>
            <li ><a class='signIn' href="adminlogin.php">Admin</a></li>
            
          </ul>
  </nav>
      <!-- ------------------------------- -->
      <!-- --------HEADER OF WEBPAGE--------- -->
      <!-- ------------------------------- -->
      <div class="head-overlay">
           <h1>MOVIE BYTES</h1>
        <h2>Make your experience<br> meomorable!!!</h1>
        <a class="btn btn-click scroll" href="#">browse</a>
      </div>
      <div class="overlay hidden"></div>
    
    </header>
    <main>
      
      <div class='row2 title underline scroll-2'>
        <h2 id="movies">movies</h2>
      </div>


             
              
              <div id="home-section-1" class="movie-show-container">
                            
                  <div class="row23">
          
                      <?php
                                  if($result = mysqli_query($link, $sql)){
                                      if(mysqli_num_rows($result) > 0){
                                          for ($i = 0; $i <$bookingsNo; $i++){
                                              $row = mysqli_fetch_array($result);
                                              echo '<div class="spanik">';
                                              echo '<figure class=potrait>';
                                              echo '<a href="booking.php?id='.$row['movieID'].'">';
                                              echo '<img class=""src="'. $row['movieImg'] .'" alt=" ">';
                                              echo '<figcaption>'. $row['movieTitle'] .'</figcaption>';
                                              echo '</a>';
                                              echo '</figure>';
                                              echo '<div class="movie-info ">';
                                              echo '</div>';
                                              echo '</div>';
                                          }
                                          mysqli_free_result($result);
                                      } else{
                                          echo '<h4 class="no-annot">No Booking to our movies right now</h4>';
                                      }
                                  } else{
                                      echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                                  }
                                  
                                  // Close connection
                                  mysqli_close($link);
                                  ?>
                  </div>
              </div>
                                

  <script src='resources/js/smalleffects.js'></script>
  
  
  </body>
</html>
