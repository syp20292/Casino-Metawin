<?php 

/**
* Template Name: Home template
*/
  get_header(); ?>


    
    <div class="container-center-horizontal">
      <div class="desktop screen">



        <div class="frame-2">
          <!-- Start Hero Section -->
        
          
          <div class="overlap-group-1">
            <?php 

              $args = array(
                'post_type' => 'BGimage',
                'post_per_page' => 1
              );
              $query = new WP_Query($args);
              while($query -> have_posts()){
                $query -> the_post();

            ?>

            <img class="shutterstock_598654982-min-1" src="<?php the_post_thumbnail_url(); ?>"
              alt="shutterstock_598654982-min 1"
            />
            <div class="rectangle-2"></div>
            <div class="frame-4">

              <?php if ( get_field( 'bgimage_image' ) ) : ?>
                  <img class="top-10-casino-hotels-wordlwide-1" src="<?php the_field('bgimage_image'); ?>" alt="top 10 casino hotels wordlwide 1"
              />
              <?php endif ?>

              <!-- <img src="<?php $BGimge_image; ?>" class="top-10-casino-hotels-wordlwide-1"> -->
              <h1 class="discover-the-best-ca-1 discover-the-best-ca-3">
                <?php the_title(); ?>
              </h1>

              <p class="lorem-ipsom-dolor-sit-amet poppins-medium-white-16px"><?php the_field('bgimage_subtitle'); ?></p>

              
                   <div class="frame-3">
                    
                
                    <a href="<?php the_field('bgimage_btn_url'); ?>">
                    <div class="explore-today valign-text-middle poppins-medium-white-16px">
                    <?php the_field('btn_text'); ?></div>
                    <img class="vector" src="<?php echo get_template_directory_uri() ?>/img/vector-11.svg" alt="Vector" /></a>
                    
              </div>
              
            </div>
            <?php
              }
              wp_reset_postdata();
            ?>

          </div>
          
          
        </div>

        <!-- End Hero Section -->



        <!-- About Section -->

        <div class="flex-row-1 flex-row-3">
          <?php 

              $args = array(
                'post_type' => 'About',
                'post_per_page' => 1
              );
              $query = new WP_Query($args);
              while($query -> have_posts()){
                $query -> the_post();

            ?>
          <div class="frame-11249">
            <?php 

              $about_title = get_field('about_section', 'options');
            ?>
            
            <div class="about-us poppins-medium-razzmatazz-16px"><?php echo $about_title['sub_heading']; ?></div>
            
            <p class="discover-the-best-ca-2 discover-the-best-ca-3 poppins-bold-black-32px">
              <?php echo $about_title['title']; ?>
            </p>
            <p class="lorem-ipsum-dolor-si poppins-semi-bold-fuscous-gray-16px">
              <?php echo $about_title['content']; ?>
              <!-- <span class="poppins-semi-bold-fuscous-gray-16px"></span> -->
            </p>
            <div class="frame-3">
              <!-- <div class="read-more valign-text-middle read">Read More</div> -->

              <a href="<?php echo $about_title['btn_url']; ?>">
                    <div class="read-more valign-text-middle read">
                    <?php echo $about_title['btn_text']; ?></div>
                    <img class="vector" src="<?php echo get_template_directory_uri() ?>/img/vector-12.png" alt="Vector" /></a>
            </div>

          </div>

            <?php $about_left = get_field('about_left', 'options'); ?>

          
            <img class="image-38" src="<?php echo $about_left['about_image']; ?>" />
            
          
            

          <?php
              }
              wp_reset_postdata();
            ?>


            <!-- End About Section -->

        </div>

        <!-- Casion Table-->

        <div class="frame-11256">



          <div class="frame-11278">
            <p class="the-best-casino-hotels-worldwide poppins-bold-black-32px">The Best Casino Hotels Worldwide</p>
            <div class="frame-11171">
              <img class="uilcalender" src="<?php echo get_template_directory_uri() ?>/img/uil-calender.svg" alt="uil:calender" />
              <div class="date valign-text-middle">01/11/22</div>
            </div>
          </div>
          <div class="frame-11248">

            <div class="frame-11237"><div class="top-rated-hotel valign-text-middle">Top Rated Hotel</div></div>
            
            <div class="group-56 group">
              <?php 
                $args = array(
                  'post_type' => 'post',
                  'post_per_page' => 10,
                  'orderby' => 'star',
                  'order'    => 'ASC'
                );
                $query = new WP_Query($args);
                while($query -> have_posts()){
                  $query -> the_post();
              ?>
              <div class="frame-11172">
                
                 <?php if( have_rows('table') ): 

                        while( have_rows('table') ): the_row();
                       ?>
                <div class="group-55 group">
                 
                  <div class="group-55-1">

                    <div class="table-1">
                       
                      <div class="frame-519">
                        <div class="number valign-text-middle number-3 jost-bold-white-29px"><?php the_sub_field('number'); ?></div>
                      </div>
                      <div class="frame-11235">
                        <img class="image-25" src="<?php the_sub_field('logo'); ?>" alt="image 25" />
                      </div>
                      <div class="address-container">
                        <div class="address valign-text-middle poppins-light-star-dust-16px"><?php the_sub_field('address'); ?></div>
                        <p class="address-1 valign-text-middle poppins-normal-charade-14px">
                          <!-- 146 Front St W, Toronto, ON M5J 1G2, Canada -->
                          <?php the_sub_field('address_content'); ?>
                        </p>
                      </div>
                      <div class="flex-col flex">
                        <div class="star-container">
                          <?php the_sub_field('star'); ?>
                        </div>
                        <div class="excellent valign-text-middle jost-light-star-dust-16px"><?php the_sub_field('rating_select'); ?></div>
                      </div>
                      <div class="flex-row flex">
                        <div class="score">
                          <div class="score-1">
                            <div class="overlap-group">

                              <div class="text-1 valign-text-middle poppins-bold-black-25px"><?php the_sub_field('score'); ?></div>
                              <img class="ellipse-1" src="<?php echo get_template_directory_uri() ?>/img/ellipse-1.svg" alt="Ellipse 1" />
                            </div>
                          </div>
                        </div>
                        <div class="frame-515">
                          <div class="large">

                            <a href="<?php the_sub_field('btn_url_external'); ?>">
                              <div class="label valign-text-middle poppins-medium-white-18px"><?php the_sub_field('btn_text_external'); ?></div>
                            <img class="vector-1" src="<?php echo get_template_directory_uri() ?>/img/vector-12.png" alt="Vector" />
                            </a>
                          </div>
                          <a href="<?php the_permalink(); ?>"><div class="read-review valign-text-middle read jost-light-black-16px"><?php the_sub_field('review_link'); ?></div></a>
                          
                        </div>
                      </div>
                      
                        
                    </div>
                  </div>
                </div><?php endwhile; endif;?>
              </div>
              
              <?php
              }
              wp_reset_postdata();
            ?>
            </div>
            
            
          </div>
        </div>

        <!-- End Casino Table -->



        <!-- WHy Section-->
        
        <div class="why_us">
        <div class="frame-11257" style="text-align: center;">

            <?php $why_left = get_field('why_title', 'options'); ?>

        
          <div class="lorem-ipsom poppins-medium-razzmatazz-16px"><?php echo $why_left['sub_title']; ?></div>
          <p class="why-you-should-choose-us poppins-bold-black-32px"><?php echo $why_left['title']; ?></p>
        </div>
        <div class="flex-row-2 flex-row-3">
          <?php $why_image = get_field('why_image', 'options'); ?>
          <img class="image-40" src="<?php echo $why_image['why_image']; ?>" alt="image 40" />
          <div class="frame-11287">
            <?php $why_rights = get_field('why_content', 'options');

              foreach($why_rights as $why_right){ ?>

              <div class="frame-112-1">
              <div class="frame-11279">
                <div class="number-1 valign-text-middle number-3 poppins-bold-white-24px"><?php echo $why_right['number']; ?></div>
              </div>
              <p class="discover-the-best-ca poppins-bold-black-24px"><?php echo $why_right['title']; ?></p>
              <p class="adipiscing-elit-nun poppins-medium-quick-silver-16px">
                <?php echo $why_right['content']; ?>
              </p>
            </div>

              <?php
              }

            ?>
          </div>
          
        </div>
        </div>
        
        <?php get_footer(); ?>