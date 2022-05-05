<?php get_header()?>

      <!-- Hero Area Start -->
      <div id="hero-area" class="hero-area-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="contents text-center">
                <h2 class="head-title wow fadeInUp"><?php echo get_theme_mod('text_setting')?></h2>
                <div class="header-button wow fadeInUp" data-wow-delay="0.3s">
                  <a href="<?php echo get_theme_mod('Banner_text_url')?>" class="btn btn-common"><?php echo get_theme_mod('Banner_text_setting')?></a>
                </div>
              </div>
              <div class="img-thumb text-center wow fadeInUp" data-wow-delay="0.6s">
                <img class="img-fluid" src="<?php echo get_theme_mod('image_setting_array')?>" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Hero Area End -->

    </header>
    <!-- Header Area wrapper End -->

    <!-- Feature Section Start -->
    <div id="feature">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="text-wrapper">
              <div>
                <h2 class="title-hl wow fadeInLeft" data-wow-delay="0.3s"><?php echo get_theme_mod('text_setting_aboutt')?></h2>
                <p class="mb-4"><?php echo get_theme_mod('textarea_setting_about')?></p>
                <a href="<?php echo get_theme_mod('link_setting_link')?>" class="btn btn-common"><?php echo get_theme_mod('text_setting_btn')?></a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 padding-none feature-bg">
            <div class="feature-thumb">
              <?php 
                $aboutfeatures = get_theme_mod('about_repeater');
                foreach ($aboutfeatures as $aboutfeature) {
                    ?>
                      <div class="feature-item wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <div class="icon">
                          <i class="<?php echo $aboutfeature['about_item_icon']?>"></i>
                        </div>
                        <div class="feature-content">
                          <h3><?php echo $aboutfeature['about_item_title']?></h3>
                          <p><?php echo $aboutfeature['about_item_desc']?></p>
                        </div>
                      </div>
                    <?php
                }
                
              ?>


            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Feature Section End -->

    <?php
        if(get_theme_mod('services_show', true) == true ) {
    ?>
    <!-- Services Section Start -->
    <section id="services" class="section-padding bg-gray">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Our Services</h2>
          <p>A desire to help and empower others between community contributors in technology <br> began to grow in 2020.</p>
        </div>
        <div class="row">

        <?php
          $services = get_theme_mod('services_repeater');
          foreach($services as $service) {
        ?>  
          <!-- Services item -->
          <div class="<?php echo get_theme_mod('services_item_number');?>">
            <div class="services-item wow fadeInRight" data-wow-delay="0.3s">
              <div class="icon">
                <i class="<?php echo $service['service_item_icon'];?>"></i>
              </div>
              <div class="services-content">
                <h3><a href="#"><?php echo $service['service_item_title'];?></a></h3>
                <p><?php echo $service['service_item_desc'];?></p>
              </div>
            </div>
          </div>
        <?php
          }
        ?>
        </div>
      </div>
    </section>
    <!-- Services Section End -->
    <?php
      }
    ?>

   

    <?php
            if(get_theme_mod('video_show', true) == true ) {
        ?>
        <!-- Start Video promo Section -->
        <section class="video-promo section-padding">
          <div class="overlay"></div>
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-sm-12">
                <div class="video-promo-content text-center wow fadeInUp" data-wow-delay="0.3s">
                  <a href="<?php echo get_theme_mod('video_url');?>" class="video-popup"><i class="lni-film-play"></i></a>
                  <h2 class="mt-3 wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms"><?php echo get_theme_mod('video_title');?></h2>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Video Promo Section -->
        <?php
          }
        ?>

<!-- Team Section Start -->

<?php if ( true == get_theme_mod( 'team_show', true ) ) { ?>
  
  <section id="team" class="section-padding text-center">
        <div class="container">
          <div class="section-header text-center">
            <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo get_theme_mod('team_heading');?></h2>
            <p><?php echo get_theme_mod('team_desc');?></p>
          </div>
          <div class="row">
  
          <?php
            $teams = get_theme_mod('team_repeater');
            foreach($teams as $team) {          
          ?>
            <div class="col-sm-6 col-md-6 col-lg-3">
              <!-- Team Item Starts -->
              <div class="team-item text-center wow fadeInRight" data-wow-delay="0.3s">
                <div class="team-img">
  
                  <?php 
                    $img_url = wp_get_attachment_image_src($team['team_image']);
                  ?>
                  <img class="img-fluid" src="<?php echo $img_url[0];?>" alt="">
                  <div class="team-overlay">
                    <div class="overlay-social-icon text-center">
                      <ul class="social-icons">
                        <?php
                            if($team['team_facebook']) {
                        ?>
                            <li><a href="<?php echo $team['team_facebook'];?>"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                        <?php
                            }
                        ?>
                        <?php
                            if($team['team_twitter']) {
                        ?>
                            <li><a href="<?php echo $team['team_twitter'];?>"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                        <?php
                            }
                        ?>
                        <?php
                            if($team['team_instagram']) {
                        ?>
                            <li><a href="<?php echo $team['team_instagram'];?>"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                        <?php
                            }
                        ?>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="info-text">
                  <h3><a href="#"><?php echo $team['team_title'];?></a></h3>
                  <p><?php echo $team['team_desg'];?></p>
                </div>
              </div>
              <!-- Team Item Ends -->
            </div>
          <?php
            }
          ?>
            
            
          </div>
        </div>
      </section>
      <!-- Team Section End -->
  
  <?php } ?>

    <!-- Counter Section Start -->
<!-- Counter Section Start -->

<?php
    if(get_theme_mod('counter_show', true) == true) { ?>
<section id="counter" class="section-padding">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-12 col-md-12 col-xs-12">
            <div class="row">

            <?php
              $counters = get_theme_mod('counter_repeater');
              foreach($counters as $counter) {
            ?>

            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="counter-box wow <?php echo $counter['counter_animation_name'];?>" data-wow-delay="<?php echo $counter['counter_animation_duration'];?>">
                  <div class="icon-o"><i class="<?php echo $counter['counter_icon'];?>"></i></div>
                  <div class="fact-count">
                    <h3><span class="counter"><?php echo $counter['counter_number'];?></span></h3>
                    <p><?php echo $counter['counter_title'];?></p>
                  </div>
                </div>
              </div>
              <!-- End counter -->
            <?php
              }
            ?>
              
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Counter Section End -->
<?php } ?>
    <!-- Counter Section End -->

    <!-- Pricing section Start --> 
         <!-- Pricing section Start --> 
 <section id="pricing" class="section-padding bg-gray">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Best Pricing</h2>
          <p>A desire to help and empower others between community contributors in technology <br> began to grow in 2020.</p>
        </div>
        <div class="row">

        <?php
          $prices = get_theme_mod('price_repeater');
          foreach($prices as $price) {
        ?>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div id="<?php 
              if($price['price_featured'] == true) { 
                echo 'active-tb';
              } ?>" class="table wow fadeInLeft" data-wow-delay="1.2s">
              <div class="title">
                <h3><?php echo $price['price_name'];?></h3>
              </div>
              <div class="pricing-header">
                <p class="price-value">$ <?php echo $price['price_amount'];?><span>/ <?php echo $price['price_days'];?></span></p>
              </div>
              <ul class="description">
                <li><?php echo $price['price_feature-1'];?></li>
                <li><?php echo $price['price_feature-2'];?></li>
                <li><?php echo $price['price_feature-3'];?></li>
                <li><?php echo $price['price_feature-4'];?></li>
                <li><?php echo $price['price_feature-5'];?></li>
              </ul>
              <button class="btn btn-common"><a href="<?php echo $price['price_btn_url'];?>"><?php echo $price['price_btn_text'];?></a></button>
            </div> 
          </div>
        <?php
          }
        ?>
          
        </div>
      </div>
    </section>
    <!-- Pricing Table Section End -->
    <!-- Pricing Table Section End -->

    <div class="skill-area section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-xs-12 wow fadeInLeft" data-wow-delay="0.3s">
            <img class="img-fluid" src="<?php echo get_theme_mod('skill_image');?>" alt="" >
          </div>
          <div class="col-lg-6 col-md-12 col-xs-12 info wow fadeInRight" data-wow-delay="0.3s">
            <div class="site-heading">
              <h2 class="section-title"><?php echo get_theme_mod('skill_title');?></h2>
              <p><?php echo get_theme_mod('skill_desc');?></p>
            </div>
            <div class="skills-section">

            <?php
                $skills = get_theme_mod('skill_repeater');
                foreach($skills as $skill) {
            ?>
                <!-- Progress Bar Start -->
              <div class="progress-box">
                <h5><?php echo $skill['skill_item_title'];?> <span class="pull-right"><?php echo $skill['skill_item_number'];?>%</span></h5>
                <div class="progress" style="opacity: 1; left: 0px;">
                  <div class="progress-bar" role="progressbar" data-width="87" style="width: <?php echo $skill['skill_item_number'];?>%;"></div>
                </div>
              </div>
              <!-- End Progressbar -->
            <?php
                }
            ?>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Portfolio Section -->
    <?php
    if(get_theme_mod('work_show', true) == true) { ?>

<!-- Portfolio Section -->
<section id="portfolios" class="section-padding">
      <!-- Container Starts -->
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo get_theme_mod('work_title');?></h2>
          <p><?php echo get_theme_mod('work_desc');?></p>
        </div>

      
    <!-- Portfolio Recent Projects -->
    <div id="portfolio" class="row">

        <?php
          $works = get_theme_mod('work_repeater');
          foreach($works as $work) {
        ?>
          <div class="col-lg-4 col-md-6 col-xs-12 mix development print">
            <div class="portfolio-item">
              <div class="shot-item">

              <?php 
                  $img_small_url = wp_get_attachment_image_src($work['work_item_small_image']);
                  $img_big_url = wp_get_attachment_image_src($work['work_item_big_image']);
              ?>

                <img src="<?php echo $img_small_url[0];?>" alt="" />  
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="<?php echo $img_big_url[0];?>"><i class="lni-eye item-icon"></i></a>
                      </div>
                      <a href="#"><?php echo $work['work_item_title'];?></a>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
          </div>
        <?php
          }
        ?>
        </div>
        
      </div>
      <!-- Container Ends -->
    </section>
    <!-- Portfolio Section Ends --> 
<?php } ?>
    <!-- Portfolio Section Ends --> 
  
    <!-- Testimonial Section Start -->
      <!-- Testimonial Section Start -->
<section id="testimonial" class="testimonial section-padding">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
            <div id="testimonials" class="owl-carousel wow fadeInUp" data-wow-delay="1.2s">
              <?php
                $testimonials = get_theme_mod('testimonial_repeater');
                foreach($testimonials as $item) {
              ?>
                <div class="item">
                <div class="testimonial-item">
                  <div class="img-thumb">
                    <?php
                      $img_url = wp_get_attachment_image_src($item['testimonial_item_image'],);
                    ?>  
                    <img src="<?php echo $img_url[0];?>" alt="">
                  </div>
                  <div class="info">
                    <h2><a href="#"><?php echo $item['testimonial_item_name'];?></a></h2>
                    <h3><a href="#"><?php echo $item['testimonial_item_desg'];?></a></h3>
                  </div>
                  <div class="content">
                    <p class="description"><?php echo $item['testimonial_item_desc'];?></p>
                  </div>
                </div>
              </div>
              <?php
                }
              ?>
              
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonial Section End -->  
    <!-- Testimonial Section End -->  

    <!-- Blog Section -->
    <section id="blog" class="section-padding">
      <!-- Container Starts -->
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Latest blog</h2>
          <p>A desire to help and empower others between community contributors in technology <br> began to grow in 2020.</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper wow fadeInLeft" data-wow-delay="0.3s">
              <div class="blog-item-img">
                <a href="single-post.html">
                  <img src="<?php echo get_template_directory_uri(  )?>/assets/img/blog/img1.jpg" alt="">
                </a>                
              </div>
              <div class="blog-item-text"> 
                <h3>
                <a href="single-post.html">Suspendisse dictum non velit</a>
                </h3>
                <p>
                Nunc in mauris a ante rhoncus tristique vitae et nisl. Quisque ullamcorper rutrum lacinia. Integer varius ornare egestas. 
                </p>
                <a href="single-post.html" class="btn btn-common btn-rm">Read More</a>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper wow fadeInUp" data-wow-delay="0.6s">
              <div class="blog-item-img">
                <a href="single-post.html">
                  <img src="<?php echo get_template_directory_uri(  )?>/assets/img/blog/img2.jpg" alt="">
                </a>                
              </div>
              <div class="blog-item-text"> 
                <h3>
                <a href="single-post.html">Remarkably Did Increasing</a>
                </h3>
                <p>
                Nunc in mauris a ante rhoncus tristique vitae et nisl. Quisque ullamcorper rutrum lacinia. Integer varius ornare egestas. 
                </p>
                <a href="single-post.html" class="btn btn-common btn-rm">Read More</a>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper wow fadeInRight" data-wow-delay="0.3s">
              <div class="blog-item-img">
                <a href="single-post.html">
                  <img src="<?php echo get_template_directory_uri(  )?>/assets/img/blog/img3.jpg" alt="">
                </a>                
              </div>
              <div class="blog-item-text"> 
                <h3>
                  <a href="single-post.html">Changing the topic scope</a>
                </h3>
                <p>
                Nunc in mauris a ante rhoncus tristique vitae et nisl. Quisque ullamcorper rutrum lacinia. Integer varius ornare egestas. 
                </p>
                <a href="single-post.html" class="btn btn-common btn-rm">Read More</a>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>
        </div>
      </div>
    </section>
    <!-- blog Section End -->

    <!-- Clients Section Start -->
    <!-- Clients Section Start -->
<div id="clients" class="section-padding bg-gray">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo get_theme_mod('client_title');?></h2>
          <p><?php echo get_theme_mod('client_desc');?></p>
        </div>
        <div class="row text-align-">

        <?php
          $clients = get_theme_mod('client_repeater');
          foreach($clients as $client) {
        ?>
            <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="0.3s">
            <div class="client-item-wrapper">
              <?php
                $img_url = wp_get_attachment_image_src($client['client_item_image'], array('700', '600'),);
              ?>
              <img class="img-fluid" src="<?php echo $img_url[0];?>" alt="">
            </div>
          </div>
        <?php
          }
        ?>
          
        </div>
      </div>
    </div>
    <!-- Clients Section End -->
    <!-- Clients Section End -->

    <!-- Contact Section Start -->
    <section id="contact" class="section-padding">    
      <div class="container">
        <div class="row contact-form-area wow fadeInUp" data-wow-delay="0.4s">          
          <div class="col-md-6 col-lg-6 col-sm-12">
            <div class="contact-block">
              <form id="contactForm">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" id="name" name="name" placeholder="Name" required data-error="Please enter your name">
                      <div class="help-block with-errors"></div>
                    </div>                                 
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" placeholder="Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
                      <div class="help-block with-errors"></div>
                    </div> 
                  </div>
                   <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" placeholder="Subject" id="msg_subject" class="form-control" required data-error="Please enter your subject">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group"> 
                      <textarea class="form-control" id="message" placeholder="Your Message" rows="5" data-error="Write your message" required></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="submit-button">
                      <button class="btn btn-common" id="form-submit" type="submit">Send Message</button>
                      <div id="msgSubmit" class="h3 text-center hidden"></div> 
                      <div class="clearfix"></div> 
                    </div>
                  </div>
                </div>            
              </form>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-sm-12">
            <div class="contact-right-area wow fadeIn">
              <div class="contact-title">
                <h1>We're a friendly bunch..</h1>
                <p>We create projects for companies and startups with a passion for quality</p>
              </div>
              <h2>Contact Us</h2>
              <div class="contact-right">
                <div class="single-contact">
                  <div class="contact-icon">
                    <i class="lni-map-marker"></i>
                  </div>
                  <p>ADDRESS: 28 Green Tower, New York City, USA</p>
                </div>
                <div class="single-contact">
                  <div class="contact-icon">
                    <i class="lni-envelope"></i>
                  </div>
                  <p><a href="#">Email:  contact@stuck.com</a></p>
                </div>
                <div class="single-contact">
                  <div class="contact-icon">
                    <i class="lni-phone-handset"></i>
                  </div>
                  <p><a href="#">Phone:  +84 846 250 592</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </section>
    <!-- Contact Section End -->
    
   <?php get_footer()?>