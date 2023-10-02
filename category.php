<?php
include "include/db.php"; 
?>

<?php
include "include/header.php"; 
?>

<?php
include "include/header.php"; 
?>


    <!-- Navigation -->
<?php include "include/navigation.php"; ?>
    <!-- Page Content -->
    
 <div class="container">
        <div class="row">
             <div class="col-md-9">

 <!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="images/project/screenoo.jpg" style="width:100%" height="475px">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="images/project/screen.jpg" style="width:100%" height="475px">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="images/project/why_i_love_you.jpg" style="width:100%" height="475px">
    <div class="text">Caption Three</div>
  </div>

  <script src="slider.js"> </script>

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
</div>
  <?php
                include "include/sidebar.php";   
            ?>     
        </div>
    </div>


    <div class="container">
        <div class="row">
             <div class="col-md-3">
            <?php
            if (isset($_GET['category'])) {
             $post_category_id = $_GET['category'];

             if ($post_category_id) {
               echo "GOTEN";
             }
            }

            $query = "SELECT * FROM public.movie WHERE category = '$post_category_id'";
            $select_all_post_query= pg_query($db_connection,$query);

            while($row = pg_fetch_assoc( $select_all_post_query))
                    {
                      $movie_title = $row['title'];

                      $movie_director = $row['directorname'];
                      $movie_description = $row['description'];
                      $movie_actor = $row['majoractor'];
                      $movie_date = $row['postdate'];
                      $movie_image = $row['mpicture'];

                      ?>

                       <h1 class="page-header">
                        <font face="roboto">
                            <font size="5">
                    Get the best quality movies 
                    <small>Your satisfaction our priority</small>
                </font>
                    </font>
                </h1>

                <!-- First Blog Post -->
                <h2 >
                    
                 <font size="5">   <a href="#"><?php echo $movie_title ?></a></font>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $movie_director ?></a>
                </p>
                <p class="lead">
                <font size="3"> The main actor of this movie is <a href="index.php"><?php echo $movie_actor ?></a> </font>
                </p>
                <font size="3"><p><span class="glyphicon glyphicon-time"></span> <?php echo $movie_date ?></p></font>
                <hr>
                <img class="img-responsive" src="images/project/<?php echo $movie_image; ?>" alt="">
                <hr>
                <p><?php echo $movie_description ?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
          </div>
          <?php }  ?>
        </div>
          <div>
            <!-- Blog Entries Column -->
          <!--  <div class="col-md-8">

               
                 Second Blog Post 
                <h2>
                    <a href="#">Blog Post Title</a>
                </h2>
                <p class="lead">
                    by <a href="index.php">Start Bootstrap</a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:45 PM</p>
                <hr>
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, quasi, fugiat, asperiores harum voluptatum tenetur a possimus nesciunt quod accusamus saepe tempora ipsam distinctio minima dolorum perferendis labore impedit voluptates!</p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>
-->

                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->
 
           

        </div>
    </div>
        <!-- /.row -->

        <hr>

        <?php
        include "include/footer.php"; 
        ?>       