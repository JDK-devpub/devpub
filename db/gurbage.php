
            <div class="row">
              <div class="col-md-6">
                <article class="news-block small-block">
                  <a href="<?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=5");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $link = $row_result['link'];
                                echo $link;
                          }
                      ?>" class="overlay-link">
                    <figure class="image-overlay">
                      <img src="image/jpeg;base64,<?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=5");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_image = $row_result['news_image'];
                                echo base64_encode($news_image);
                          }
                      ?>" alt="">
                    </figure>
                  </a>
                  <a href="#" class="category">
                    <?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=5");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_title = $row_result['news_title'];
                                echo $news_title;
                          }
                      ?>
                  </a>
                  <header class="news-details" style="margin-top:-70px;background: rgba(0,0,0,.5)" !important>
                    <h3 class="news-title">
                      <a href="#" style="color:#49b79e" !important>
                         <?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=5");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_short_description = $row_result['news_short_description'];
                                echo $news_short_description;
                          }
                      ?>
                      </a>
                    </h3>
                    <p>
                      <?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=5");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_full_content = $row_result['news_full_content'];
                                echo $news_full_content;
                          }
                      ?>
                    </p>
                    <p class="simple-share">
                      by <a href=""><b><?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=5");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_author = $row_result['news_author'];
                                echo $news_author;
                          }
                      ?></b></a>
                      <span class="article-date"><i class="fa fa-clock-o"></i>
                        <?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=5");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_published_on = $row_result['news_published_on'];
                                echo $news_published_on;
                          }
                      ?>
                      </span>
                    </p>
                  </header>
                </article><!-- News block -->
              </div>

              <div class="col-md-6">
                <article class="news-block small-block">
                  <a href="<?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=6");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $link = $row_result['link'];
                                echo $link;
                          }
                      ?>" class="overlay-link">
                    <figure class="image-overlay">
                      <img src="image/jpeg;base64,<?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=6");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_image = $row_result['news_image'];
                                echo base64_encode($news_image);
                          }
                      ?>" alt="">
                    </figure>
                  </a>
                  <a href="#" class="category">
                    <?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=6");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_title = $row_result['news_title'];
                                echo $news_title;
                          }
                      ?>
                  </a>
                  <div class="news-details" style="margin-top:-70px;background: rgba(0,0,0,.5)" !important>
                    <h3 class="news-title">
                      <a href=""  style="color:#49b79e" !important>
                         <?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=6");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_short_description = $row_result['news_short_description'];
                                echo $news_short_description;
                          }
                      ?>
                      </a>
                    </h3>
                    <p>
                      <?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=6");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_full_content = $row_result['news_full_content'];
                                echo $news_full_content;
                          }
                      ?>
                    </p>
                    <p class="simple-share">
                      by <a href="#"><b><?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=6");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_author = $row_result['news_author'];
                                echo $news_author;
                          }
                      ?></b></a>
                      <span class="article-date"><i class="fa fa-clock-o"></i>
                        <?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=6");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_published_on = $row_result['news_published_on'];
                                echo $news_published_on;
                          }
                      ?>
                      </span>
                    </p>
                  </div>
                </article><!-- News block -->
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <article class="news-block small-block">
                  <a href="<?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=7");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $link = $row_result['link'];
                                echo $link;
                          }
                      ?>" class="overlay-link">
                    <figure class="image-overlay">
                      <img src="image/jpeg;base64,<?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=7");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_image = $row_result['news_image'];
                                echo base64_encode($news_image);
                          }
                      ?>" alt="">
                    </figure>
                  </a>
                  <a href="#" class="category">
                    <?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=7");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_title = $row_result['news_title'];
                                echo $news_title;
                          }
                      ?>
                  </a>
                  <header class="news-details" style="margin-top:-70px;background: rgba(0,0,0,.5)" !important>
                    <h3 class="news-title">
                      <a href="#"  style="color:#49b79e" !important>
                         <?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=7");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_short_description = $row_result['news_short_description'];
                                echo $news_short_description;
                          }
                      ?>
                      </a>
                    </h3>
                    <p>
                      <?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=7");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_full_content = $row_result['news_full_content'];
                                echo $news_full_content;
                          }
                      ?>
                    </p>
                    <p class="simple-share">
                      by <a href="#"><b><?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=7");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_author = $row_result['news_author'];
                                echo $news_author;
                          }
                      ?></b></a>
                      <span class="article-date"><i class="fa fa-clock-o"></i>
                        <?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=7");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_published_on = $row_result['news_published_on'];
                                echo $news_published_on;
                          }
                      ?>
                      </span>
                    </p>
                  </header>
                </article><!-- News block -->
              </div>

              <div class="col-md-6">
                <article class="news-block small-block">
                  <a href="<?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=8");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $link = $row_result['link'];
                                echo $link;
                          }
                      ?>" class="overlay-link">
                    <figure class="image-overlay">
                      
                      <img src="image/jpeg;base64,<?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=8");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_image = $row_result['news_image'];
                                echo base64_encode($news_image);
                          }
                      ?>" alt="">
                    </figure>
                  </a>
                  <a href="#" class="category">
                    <?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=8");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_title = $row_result['news_title'];
                                echo $news_title;
                          }
                      ?>
                  </a>
                  <header class="news-details" style="margin-top:-70px;background: rgba(0,0,0,.5)" !important>
                    <h3 class="news-title"  style="color:#49b79e" !important>
                      <a href="#" style="color:#49b79e" !important>
                         <?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=8");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_short_description = $row_result['news_short_description'];
                                echo $news_short_description;
                          }
                      ?>
                      </a>
                    </h3>
                    <p>
                      <?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=8");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_full_content = $row_result['news_full_content'];
                                echo $news_full_content;
                          }
                      ?>
                    </p>
                    <p class="simple-share">
                      by <a href="#"><b><?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=8");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_author = $row_result['news_author'];
                                echo $news_author;
                          }
                      ?></b></a>
                      <span class="article-date"><i class="fa fa-clock-o"></i>
                        <?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=8");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_published_on = $row_result['news_published_on'];
                                echo $news_published_on;
                          }
                      ?>
                      </span>
                    </p>
                  </header>
                </article><!-- News block -->
              </div>

            </div>

            <div class="row">
              <div class="col-md-6">
                <article class="news-block small-block">
                  <a href="<?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=9");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $link = $row_result['link'];
                                echo $link;
                          }
                      ?>" class="overlay-link">
                    <figure class="image-overlay">
                      <img src="image/jpeg;base64,<?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=9");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_image = $row_result['news_image'];
                                echo base64_encode($news_image);
                          }
                      ?>" alt="">
                    </figure>
                  </a>
                  <a href="#" class="category">
                    <?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=9");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_title = $row_result['news_title'];
                                echo $news_title;
                          }
                      ?>
                  </a>
                  <header class="news-details" style="margin-top:-70px;background: rgba(0,0,0,.5)" !important>
                    <h3 class="news-title">
                      <a href="#"  style="color:#49b79e" !important>
                         <?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=9");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_short_description = $row_result['news_short_description'];
                                echo $news_short_description;
                          }
                      ?>
                      </a>
                    </h3>
                    <p>
                      <?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=9");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_full_content = $row_result['news_full_content'];
                                echo $news_full_content;
                          }
                      ?>
                    </p>
                    <p class="simple-share">
                      by <a href="#"><b><?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=9");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_author = $row_result['news_author'];
                                echo $news_author;
                          }
                      ?></b></a>
                      <span class="article-date"><i class="fa fa-clock-o"></i>
                        <?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=9");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_published_on = $row_result['news_published_on'];
                                echo $news_published_on;
                          }
                      ?>
                      </span>
                    </p>
                  </header>
                </article><!-- News block -->
              </div>

              <div class="col-md-6">
                <article class="news-block small-block">
                  <a href="<?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=10");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $link = $row_result['link'];
                                echo $link;
                          }
                      ?>" class="overlay-link">
                    <figure class="image-overlay">
                      
                      <img src="image/jpeg;base64,<?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=10");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_image = $row_result['news_image'];
                                echo base64_encode($news_image);
                          }
                      ?>" alt="">
                    </figure>
                  </a>
                  <a href="#" class="category">
                    <?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=10");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_title = $row_result['news_title'];
                                echo $news_title;
                          }
                      ?>
                  </a>
                  <header class="news-details" style="margin-top:-70px;background: rgba(0,0,0,.5)" !important>
                    <h3 class="news-title">
                      <a href="#"  style="color:#49b79e" !important>
                        <?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=10");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_short_description = $row_result['news_short_description'];
                                echo $news_short_description;
                          }
                      ?>
                      </a>
                    </h3>
                    <p>
                      <?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=10");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_full_content = $row_result['news_full_content'];
                                echo $news_full_content;
                          }
                      ?>
                    </p>
                    <p class="simple-share">
                      by <a href="#"><b><?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=10");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_author = $row_result['news_author'];
                                echo $news_author;
                          }
                      ?></b></a>
                      <span class="article-date"><i class="fa fa-clock-o"></i>
                          <?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=10");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_published_on = $row_result['news_published_on'];
                                echo $news_published_on;
                          }
                      ?>
                      </span>
                    </p>
                  </header>
                </article><!-- News block -->
              </div>

            </div>
            <div class="row">
              <div class="col-md-6">
                <article class="news-block small-block">
                  <a href="<?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=11");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $link = $row_result['link'];
                                echo $link;
                          }
                      ?>" class="overlay-link">
                    <figure class="image-overlay">
                      <img src="image/jpeg;base64,<?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=11");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_image = $row_result['news_image'];
                                echo base64_encode($news_image);
                          }
                      ?>" alt="">
                    </figure>
                  </a>
                  <a href="#" class="category">
                    <?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=11");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_title = $row_result['news_title'];
                                echo $news_title;
                          }
                      ?>
                  </a>
                  <header class="news-details" style="margin-top:-70px;background: rgba(0,0,0,.5)" !important>
                    <h3 class="news-title">
                      <a href="#"  style="color:#49b79e" !important>
                         <?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=11");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_short_description = $row_result['news_short_description'];
                                echo $news_short_description;
                          }
                      ?>
                      </a>
                    </h3>
                    <p>
                      <?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=11");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_full_content = $row_result['news_full_content'];
                                echo $news_full_content;
                          }
                      ?>
                    </p>
                    <p class="simple-share">
                      by <a href="#"><b><?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=11");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_author = $row_result['news_author'];
                                echo $news_author;
                          }
                      ?></b></a>
                      <span class="article-date"><i class="fa fa-clock-o"></i>
                          <?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=11");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_published_on = $row_result['news_published_on'];
                                echo $news_published_on;
                          }
                      ?>
                      </span>
                    </p>
                  </header>
                </article><!-- News block -->
              </div>

              <div class="col-md-6">
                <article class="news-block small-block">
                  <a href="<?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=12");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $link = $row_result['link'];
                                echo $link;
                          }
                      ?>" class="overlay-link">
                    <figure class="image-overlay">
                      
                      <img src="image/jpeg;base64,<?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=12");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_image = $row_result['news_image'];
                                echo base64_encode($news_image);
                          }
                      ?>" alt="">
                    </figure>
                  </a>
                  <a href="#" class="category">
                    <?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=12");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_title = $row_result['news_title'];
                                echo $news_title;
                          }
                      ?>
                  </a>
                  <header class="news-details" style="margin-top:-70px;background: rgba(0,0,0,.5)" !important>
                    <h3 class="news-title">
                      <a href="#"  style="color:#49b79e" !important>
                         <?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=12");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_short_description = $row_result['news_short_description'];
                                echo $news_short_description;
                          }
                      ?>
                      </a>
                    </h3>
                    <p>
                      <?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=12");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_full_content = $row_result['news_full_content'];
                                echo $news_full_content;
                          }
                      ?>
                    </p>
                    <p class="simple-share">
                      by <a href="#"><b><?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=12");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_author = $row_result['news_author'];
                                echo $news_author;
                          }
                      ?></b></a>
                      <span class="article-date"><i class="fa fa-clock-o"></i>
                        <?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=12");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_published_on = $row_result['news_published_on'];
                                echo $news_published_on;
                          }
                      ?>
                      </span>
                    </p>
                  </header>
                </article><!-- News block -->
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <article class="news-block small-block">
                  <a href="<?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=13");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $link = $row_result['link'];
                                echo $link;
                          }
                      ?>" class="overlay-link">
                    <figure class="image-overlay">
                      <img src="image/jpeg;base64,<?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=13");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_image = $row_result['news_image'];
                                echo base64_encode($news_image);
                          }
                      ?>" alt="">
                    </figure>
                  </a>
                  <a href="#" class="category">
                    <?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=13");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_title = $row_result['news_title'];
                                echo $news_title;
                          }
                      ?>
                  </a>
                  <header class="news-details" style="margin-top:-70px;background: rgba(0,0,0,.5)" !important>
                    <h3 class="news-title">
                      <a href="#"  style="color:#49b79e" !important>
                         <?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=13");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_short_description = $row_result['news_short_description'];
                                echo $news_short_description;
                          }
                      ?>
                      </a>
                    </h3>
                    <p>
                      <?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=13");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_full_content = $row_result['news_full_content'];
                                echo $news_full_content;
                          }
                      ?>
                    </p>
                    <p class="simple-share">
                      by <a href="#"><b><?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=13");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_author = $row_result['news_author'];
                                echo $news_author;
                          }
                      ?></b></a>
                      <span class="article-date"><i class="fa fa-clock-o"></i>
                        <?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=13");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_published_on = $row_result['news_published_on'];
                                echo $news_published_on;
                          }
                      ?>
                      </span>
                    </p>
                  </header>
                </article><!-- News block -->
              </div>

              <div class="col-md-6">
                <article class="news-block small-block">
                  <a href="<?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=14");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $link = $row_result['link'];
                                echo $link;
                          }
                      ?>" class="overlay-link">
                    <figure class="image-overlay">
                      
                      <img src="image/jpeg;base64,<?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=14");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_image = $row_result['news_image'];
                                echo base64_encode($news_image);
                          }
                      ?>" alt="">
                    </figure>
                  </a>
                  <a href="#" class="category">
                    <?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=14");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_title = $row_result['news_title'];
                                echo $news_title;
                          }
                      ?>
                  </a>
                  <header class="news-details" style="margin-top:-70px;background: rgba(0,0,0,.5)" !important>
                    <h3 class="news-title">
                      <a href="#"  style="color:#49b79e" !important>
                         <?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=14");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_short_description = $row_result['news_short_description'];
                                echo $news_short_description;
                          }
                      ?>
                      </a>
                    </h3>
                    <p>
                      <?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=14");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_full_content = $row_result['news_full_content'];
                                echo $news_full_content;
                          }
                      ?>
                    </p>
                    <p class="simple-share">
                      by <a href="#"><b><?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=14");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_author = $row_result['news_author'];
                                echo $news_author;
                          }
                      ?></b></a>
                      <span class="article-date"><i class="fa fa-clock-o"></i>
                        <?php 
                          $news_content = mysqli_query($dbconfig,"select * from news where news_id=14");
                          if ($row_result = mysqli_fetch_array($news_content)){
                                $news_published_on = $row_result['news_published_on'];
                                echo $news_published_on;
                          }
                      ?>
                      </span>
                    </p>
                  </header>
                </article><!-- News block -->
              </div>

            </div>








 <section class="news-text-block" style="margin:auto;height:300px;width:605px" !important>
                                            <div class="demo-card-wide mdl-card mdl-shadow--2dp" style="width:650px;height:500px">
                                                  <div class="card-image">
                                                    <img src="https://material-design.storage.googleapis.com/publish/material_v_4/social.png">
                                                    <span class="card-title" style="margin:auto">Card Title</span>
                                                  </div>
                                              <div class="card light-white" style="float:right;width:605px;height:150px">
                                                      <div class="card-content black-text">
                                                        <span class="card-title" style="color:black;">News</span>
                                                        <p>Some Text</p>
                                                      </div>
                                                </div>
                                                      <div class="mdl-card__actions mdl-card--border">
                                                        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                                          Go to link
                                                        </a>
                                                      </div>
                                            </div>
                                    </section>