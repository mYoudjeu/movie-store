<?php
include "include/db.php"; 
?>

<?php
include "include/header.php"; 
?>


    <!-- Navigation -->
<?php include "include/navigation.php"; ?>
    <!-- Page Content -->
    
       <!-- <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext">1 / 3 </div>
                <img src="images/project/why_i_love_you.jpg" style="width:60%" >
                <div class="text"> best action films</div>

                 
                                    
                  
           </div>
            <div class="mySlides fade">
                <div id="numbertext">2 / 3 </div>
                <img src="images/project/screenoo.jpg" style="width:60%" >
                <div class="text"> best disnep films</div>
              
            </div>
            <div class="mySlides fade">
                <div id="numbertext">3 / 3 </div>
                <img src="images/project/images.jpg" style="width:6
                0%" >
                <div class="text"> best disnep films</div>
              
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094; </a>
            <a class="next" onclick="plusSlides(1)">&#10095; </a>
        </div>

        <br>
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
        -->

    <div class="container">
        <div class="row">
             <div class="col-md-8">
            <?php 

            
            if(isset($_POST['submit']))
            {
              $search = $_POST['Search']; 


              $query = "SELECT * FROM movie WHERE title like '%$search%' ";
              $search_query = pg_query($db_connection, $query);

              if(!$search_query)
              {
                die("QUERY FAILED" . pg_error($db_connection));
              }

                $count = pg_num_rows($search_query);
                if ($count == 0)
                {
                    echo "<h1> So results </h1>";
                }
                else
                {
                    
           
            while($row = pg_fetch_assoc($search_query))
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
                    Get the best quality movies 
                    <small>Your satisfaction our priority</small>
                    </font>
                </h1>

                <!-- First Blog Post -->
                <h2 "font-size=20px">
                 <font size="+2">   <a href="#"><?php echo $movie_title ?></a></font>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $movie_director ?></a>
                </p>
                <p class="lead">
                The main actor of this movie is <a href="index.php"><?php echo $movie_actor ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $movie_date ?></p>
                <hr>
                <img class="img-responsive" src="images/project/<?php echo $movie_image; ?>" alt="">
                <hr>
                <p><?php echo $movie_description ?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>







                <?php }  
        
                }

            }

                ?>



       
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
               

            </div>

            <!-- Blog Sidebar Widgets Column -->
 
            <?php
                include "include/sidebar.php";   
            ?>       

        </div>
    </div>
        <!-- /.row -->

        <hr>

        <?php
        include "include/footer.php"; 
        ?>       