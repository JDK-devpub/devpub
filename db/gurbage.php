
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






                                     <section class="news-text-block" style="margin:auto;height:300px;width:auto" !important>
                                            <div class="demo-card-wide mdl-card mdl-shadow--2dp" style="width:auto;height:300px">
                                                  <div class="card-image"  style="height:300px">
                                                    <img src="https://material-design.storage.googleapis.com/publish/material_v_4/social.png">
                                                  </div>
                                            </div>
                                                <div class="card light-white" style="float:right;width:605px;height:100px">
                                                      <div class="card-content black-text">
                                                        <span class="card-title" style="color:black;">News</span>
                                                        <p>Some Text</p>
                                                      </div>
                                                </div>
                                    </section>








                                     <div class="mdl-card__supporting-text mdl-color-text--blue-grey-50">
                <h3>View options</h3>
                
              </div>




               $memberone = $_POST['memberone'];
            $membertwo = $_POST['membertwo'];
            $memberthree = $_POST['memberthree'];
            $memberfour = $_POST['memberfour'];
            $memberfive = $_POST['memberfive'];
            //one
            $sql_one="SELECT nickname FROM users WHERE nickname='$memberone'";
            $result_one=mysqli_query($dbconfig,$sql_one);
            $row_one=mysqli_fetch_array($result_one,MYSQLI_ASSOC);
            if(mysqli_num_rows($result_one) == 1)
            {
                $one = $row_one['nickname'];
            }
            //two
            $sql_two="SELECT nickname FROM users WHERE nickname='$membertwo'";
            $result_two=mysqli_query($dbconfig,$sql_two);
            $row_two=mysqli_fetch_array($result_two,MYSQLI_ASSOC);
            if(mysqli_num_rows($result_two) == 1)
            {
                $two = $row_two['nickname'];
            }
            //three
            $sql_three="SELECT nickname FROM users WHERE nickname='$memberthree'";
            $result_three=mysqli_query($dbconfig,$sql_three);
            $row_three=mysqli_fetch_array($result_three,MYSQLI_ASSOC);
            if(mysqli_num_rows($result_three) == 1)
            {
                $three = $row_three['nickname'];
            }
            //four
            $sql_four="SELECT nickname FROM users WHERE nickname='$memberfour'";
            $result_four=mysqli_query($dbconfig,$sql_four);
            $row_four=mysqli_fetch_array($result_four,MYSQLI_ASSOC);
            if(mysqli_num_rows($result_four) == 1)
            {
                $four = $row_four['nickname'];
            }
            //five
            $sql_five="SELECT nickname FROM users WHERE nickname='$memberfive'";
            $result_five=mysqli_query($dbconfig,$sql_five);
            $row_five=mysqli_fetch_array($result_five,MYSQLI_ASSOC);
            if(mysqli_num_rows($result_five) == 1)
            {
                $five = $row_five['nickname'];
            }



 <div class="card">
            <img src="data:image/jpeg;base64,http://s8.postimg.org/jqyxb0291/card.png" alt="">
            <div class="footer">
                <div class="info">
                    <div class="name">Filan Fisteku</div>
                    <div class="job">Architect Manager</div>
                </div>
            </div>  
         <div class="card-blur"></div>



            <div class="card">
    <div class="footer">
        <svg id="curve">
            <path id="p" d="M0,200 Q80,100 400,200 V150 H0 V50" />
            <!-- delay -->
            <animate xlink:href="#p" attributeType="XML" attributeName="d" to="M0,200 Q80,100 400,200 V150 H0 V50" fill="freeze" begin="0s; bounce6.end" dur="0.15s" id="bounce0" />
            <!-- slide up-->
            <animate xlink:href="#p" attributeType="XML" attributeName="d" to="M0,50 Q80,100 400,50 V150 H0 V50" fill="freeze" begin="bounce0.end" dur="0.1s" id="bounce1" />
            <!-- slide up and curve in -->
            <animate xlink:href="#p" attributeType="XML" attributeName="d" to="M0,50 Q80,0 400,50 V150 H0 V50" fill="freeze" begin="bounce1.end" dur="0.15s" id="bounce2" />
            <!-- slide down and curve in -->
            <animate xlink:href="#p" attributeType="XML" attributeName="d" to="M0,50 Q80,80 400,50 V150 H0 V50" fill="freeze" begin="bounce2.end" dur="0.15s" id="bounce3" />
            <!-- slide down and curve out -->
            <animate xlink:href="#p" attributeType="XML" attributeName="d" to="M0,50 Q80,45 400,50 V150 H0 V50" fill="freeze" begin="bounce3.end" dur="0.1s" id="bounce4" />
            <!-- curve in -->
            <animate xlink:href="#p" attributeType="XML" attributeName="d" to="M0,50 Q80,50 400,50 V150 H0 V50" fill="freeze" begin="bounce4.end" dur="0.05s" id="bounce5" />
            <!-- delay -->
            <animate xlink:href="#p" attributeType="XML" attributeName="d" to="M0,50 Q80,50 400,50 V150 H0 V50" fill="freeze" begin="bounce5.end" dur="2.3s" id="bounce6" />
        </svg>
        <div class="info">
            <div class="name">Filan Fisteku</div>
            <div class="job">Architect Manager</div>
        </div>
    </div>
    <div class="card-blur"></div>





          <?php
            if(isset($_SESSION['globalID'])) {
                $id = $_SESSION['globalID'];
                $group_content = mysqli_query($dbconfig,'SELECT u.fname,u.lname,u.picture,u.nickname from group_members gm JOIN group_work gw
                                                                                                    ON gm.group_id = gw.group_id
                                                                                                    JOIN users u
                                                                                                    ON u.id = gm.member_id
                                                                                                    where gw.leader_id ='.$id.'
                                                                                                    ORDER BY u.nickname');
                while ($row_result = mysqli_fetch_array($group_content)){
                        $first = $row_result['fname'];
                        $last = $row_result['lname'];
                        $pic = $row_result['picture'];
                        $user = $row_result['nickname'];

                        echo '<table style="width:70%">';
                        echo '<tr>';
                        echo '<th>';
                        //contents starts here

                        //contents end here
                        echo '</th>';
                        echo '</tr>';
                        echo '</table>';
                }
            }else{
                header('location:error.php');
            }
      ?>
      
  <?php echo $_GET['result'];?>