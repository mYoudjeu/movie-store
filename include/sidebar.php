           <div class="col-md-3">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <form action="search.php" method="post">
                    <div class="input-group">
                        <input name="Search" type="text" class="form-control">
                        <span class="input-group-btn">
                            <button name="submit" class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    </form>
                    <!-- /.input-group -->
                </div>





                <!-- Blog Categories Well -->
                <div class="well">

                    <?php

             $query = "SELECT * FROM categories";
            $select_all_categories_sidebar = pg_query($db_connection,$query);


                    ?>


                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled">
                                <?php
                                  while($row = pg_fetch_assoc( $select_all_categories_sidebar))
            {
            $cat_title = $row['cattype'];
            $cat_id = $row['catid'];


            echo "<li><a href='category.php?category=$cat_id'>{$cat_title}</a></li>";
                    }

                    ?>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                       <!-- <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div> -->
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
             <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p> 
                </div>

           </div>

