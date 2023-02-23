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
                
                $BGimge_subtitle = get_post_meta(get_the_ID(), 'BGimge_subtitle', true);
                $BGimage_btn_text = get_post_meta(get_the_ID(), 'BGimage_btn_text', true);
                $BGimage_btn_link = get_post_meta(get_the_ID(), 'BGimage_btn_link', true);

            ?>

            <img class="shutterstock_598654982-min-1" src="<?php the_post_thumbnail_url(); ?>"
              alt="shutterstock_598654982-min 1"
            />
            <div class="rectangle-2"></div>
            <div class="frame-4">
              <img class="top-10-casino-hotels-wordlwide-1" src="<?php echo get_template_directory_uri() ?>/img/top-10-casino-hotels-wordlwide-1.svg" alt="top 10 casino hotels wordlwide 1"
              />
              <!-- <img src="<?php $BGimge_image; ?>" class="top-10-casino-hotels-wordlwide-1"> -->
              <h1 class="discover-the-best-ca-1 discover-the-best-ca-3">
                <?php the_title(); ?>
              </h1>
              
              <?php echo $BGimge_subtitle; ?>
              

              <!-- <p class="lorem-ipsom-dolor-sit-amet poppins-medium-white-16px">Lorem Ipsom Dolor Sit Amet</p> -->
              <div class="frame-3">
                <?php 

                  if($BGimage_btn_text){
                  ?>
                    <a href="<?php echo $BGimage_btn_link; ?>">
                <div class="explore-today valign-text-middle poppins-medium-white-16px"><?php echo $BGimage_btn_text; ?></div>
                <img class="vector" src="<?php echo get_template_directory_uri() ?>/img/vector-11.svg" alt="Vector" /></a>
                    <?php
                  }
              ?>
                
              </div>
            </div>
            <?php
          }
          wp_reset_postdata();
            ?>

          </div>
          
          
        </div>

        <!-- End Hero Section -->

        <div class="flex-row-1 flex-row-3">
          <div class="frame-11249">
            <div class="about-us poppins-medium-razzmatazz-16px">About us</div>
            <p class="discover-the-best-ca-2 discover-the-best-ca-3 poppins-bold-black-32px">
              Discover The Best Casino Hotels In the World
            </p>
            <p class="lorem-ipsum-dolor-si poppins-semi-bold-fuscous-gray-16px">
              <span class="poppins-semi-bold-fuscous-gray-16px"
                >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc diam lectus, vestibulum bibendum faucibus
                eu, viverra ut ipsum. Lorem ipsum dolor sit amet, consectetur </span
              ><span class="span"
                ><br />adipiscing elit. Nunc diam lectus, vestibulum bibendum faucibus eu, viverra ut ipsum. Lorem
                ipsum dolor sit amet, consectetur adipiscing elit. Nunc diam lectus, vestibulum bibendum faucibus eu,
                viverra ut ipsum. Lorem ipsum dolor sit amet, consectetu</span
              >
            </p>
            <div class="frame-3">
              <div class="read-more valign-text-middle read">Read More</div>
              <img class="vector" src="<?php echo get_template_directory_uri() ?>/img/vector-12.png" alt="Vector" />
            </div>
          </div>
          <img class="image-38" src="<?php echo get_template_directory_uri() ?>/img/image-38-1.png" alt="image 38" />
        </div>
        <div class="frame-11256">
          <div class="frame-11278">
            <p class="the-best-casino-hotels-worldwide poppins-bold-black-32px">The Best Casino Hotels Worldwide</p>
            <div class="frame-11171">
              <img class="uilcalender" src="<?php echo get_template_directory_uri() ?>/img/uil-calender.svg" alt="uil:calender" />
              <div class="date valign-text-middle">01/11/22</div>
            </div>
          </div>
          <div class="frame-11248">
            <div class="group-56 group">
              <div class="frame-11172">
                <div class="group-55 group">
                  <div class="group-55-1">
                    <div class="table-1">
                      <div class="frame-519">
                        <div class="number valign-text-middle number-3 jost-bold-white-29px">1</div>
                      </div>
                      <div class="frame-11235"><img class="image-25" src="<?php echo get_template_directory_uri() ?>/img/image-25@2x.png" alt="image 25" /></div>
                      <div class="address-container">
                        <div class="address valign-text-middle poppins-light-star-dust-16px">Address</div>
                        <p class="address-1 valign-text-middle poppins-normal-charade-14px">
                          146 Front St W, Toronto, ON M5J 1G2, Canada
                        </p>
                      </div>
                      <div class="flex-col flex">
                        <div class="star-container">
                          <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-2.png" alt="Star 2" />
                          <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-3.png" alt="Star 3" />
                          <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-4.png" alt="Star 4" />
                          <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-5.png" alt="Star 5" />
                          <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-6.png" alt="Star 6" />
                        </div>
                        <div class="excellent valign-text-middle jost-light-star-dust-16px">Excellent</div>
                      </div>
                      <div class="flex-row flex">
                        <div class="score">
                          <div class="score-1">
                            <div class="overlap-group">
                              <div class="text-1 valign-text-middle poppins-bold-black-25px">9.8</div>
                              <img class="ellipse-1" src="<?php echo get_template_directory_uri() ?>/img/ellipse-1.svg" alt="Ellipse 1" />
                            </div>
                          </div>
                        </div>
                        <div class="frame-515">
                          <div class="large">
                            <div class="label valign-text-middle poppins-medium-white-18px">Visit Hotel</div>
                            <img class="vector-1" src="<?php echo get_template_directory_uri() ?>/img/vector-12.png" alt="Vector" />
                          </div>
                          <div class="read-review valign-text-middle read jost-light-black-16px">Read Review</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="frame-11237"><div class="top-rated-hotel valign-text-middle">Top Rated Hotel</div></div>
            </div>
            <div class="frame-112">
              <div class="group-55 group">
                <div class="group-55-1">
                  <div class="table-1">
                    <div class="frame-519">
                      <div class="number valign-text-middle number-3 jost-bold-white-29px">2</div>
                    </div>
                    <div class="frame-11235"><img class="image-26" src="<?php echo get_template_directory_uri() ?>/img/image-26@2x.png" alt="image 26" /></div>
                    <div class="address-container">
                      <div class="address valign-text-middle poppins-light-star-dust-16px">Address</div>
                      <p class="address-1 valign-text-middle poppins-normal-charade-14px">
                        146 Front St W, Toronto, ON M5J 1G2, Canada
                      </p>
                    </div>
                    <div class="flex-col flex">
                      <div class="star-container">
                        <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-2.png" alt="Star 2" />
                        <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-3.png" alt="Star 3" />
                        <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-4.png" alt="Star 4" />
                        <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-5.png" alt="Star 5" />
                        <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-6.png" alt="Star 6" />
                      </div>
                      <div class="excellent valign-text-middle jost-light-star-dust-16px">Excellent</div>
                    </div>
                    <div class="flex-row flex">
                      <div class="score">
                        <div class="score-1">
                          <div class="overlap-group">
                            <div class="text-1 valign-text-middle poppins-bold-black-25px">9.8</div>
                            <img class="ellipse-1" src="<?php echo get_template_directory_uri() ?>/img/ellipse-1.svg" alt="Ellipse 1" />
                          </div>
                        </div>
                      </div>
                      <div class="frame-515">
                        <div class="large">
                          <div class="label valign-text-middle poppins-medium-white-18px">Visit Hotel</div>
                          <img class="vector-1" src="<?php echo get_template_directory_uri() ?>/img/vector-12.png" alt="Vector" />
                        </div>
                        <div class="read-review valign-text-middle read jost-light-black-16px">Read Review</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="frame-112">
              <div class="group-55 group">
                <div class="group-55-1">
                  <div class="table-1">
                    <div class="frame-519">
                      <div class="number valign-text-middle number-3 jost-bold-white-29px">3</div>
                    </div>
                    <div class="frame-11235-1 frame-11235-5"></div>
                    <div class="address-container">
                      <div class="address valign-text-middle poppins-light-star-dust-16px">Address</div>
                      <p class="address-1 valign-text-middle poppins-normal-charade-14px">
                        146 Front St W, Toronto, ON M5J 1G2, Canada
                      </p>
                    </div>
                    <div class="flex-col flex">
                      <div class="star-container">
                        <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-2.png" alt="Star 2" />
                        <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-3.png" alt="Star 3" />
                        <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-4.png" alt="Star 4" />
                        <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-5.png" alt="Star 5" />
                        <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-6.png" alt="Star 6" />
                      </div>
                      <div class="excellent valign-text-middle jost-light-star-dust-16px">Excellent</div>
                    </div>
                    <div class="flex-row flex">
                      <div class="score">
                        <div class="score-1">
                          <div class="overlap-group">
                            <div class="text-1 valign-text-middle poppins-bold-black-25px">9.8</div>
                            <img class="ellipse-1" src="<?php echo get_template_directory_uri() ?>/img/ellipse-1.svg" alt="Ellipse 1" />
                          </div>
                        </div>
                      </div>
                      <div class="frame-515">
                        <div class="large">
                          <div class="label valign-text-middle poppins-medium-white-18px">Visit Hotel</div>
                          <img class="vector-1" src="<?php echo get_template_directory_uri() ?>/img/vector-12.png" alt="Vector" />
                        </div>
                        <div class="read-review valign-text-middle read jost-light-black-16px">Read Review</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="frame-112">
              <div class="group-55 group">
                <div class="group-55-1">
                  <div class="table-1">
                    <div class="frame-519">
                      <div class="number valign-text-middle number-3 jost-bold-white-29px">4</div>
                    </div>
                    <div class="frame-11235"><img class="image-28" src="<?php echo get_template_directory_uri() ?>/img/image-28@2x.png" alt="image 28" /></div>
                    <div class="address-container">
                      <div class="address valign-text-middle poppins-light-star-dust-16px">Address</div>
                      <p class="address-1 valign-text-middle poppins-normal-charade-14px">
                        146 Front St W, Toronto, ON M5J 1G2, Canada
                      </p>
                    </div>
                    <div class="flex-col flex">
                      <div class="star-container">
                        <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-2.png" alt="Star 2" />
                        <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-3.png" alt="Star 3" />
                        <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-4.png" alt="Star 4" />
                        <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-5.png" alt="Star 5" />
                        <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-6.png" alt="Star 6" />
                      </div>
                      <div class="excellent valign-text-middle jost-light-star-dust-16px">Excellent</div>
                    </div>
                    <div class="flex-row flex">
                      <div class="score">
                        <div class="score-1">
                          <div class="overlap-group">
                            <div class="text-1 valign-text-middle poppins-bold-black-25px">9.8</div>
                            <img class="ellipse-1" src="<?php echo get_template_directory_uri() ?>/img/ellipse-1.svg" alt="Ellipse 1" />
                          </div>
                        </div>
                      </div>
                      <div class="frame-515">
                        <div class="large">
                          <div class="label valign-text-middle poppins-medium-white-18px">Visit Hotel</div>
                          <img class="vector-1" src="<?php echo get_template_directory_uri() ?>/img/vector-12.png" alt="Vector" />
                        </div>
                        <div class="read-review valign-text-middle read jost-light-black-16px">Read Review</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="frame-112">
              <div class="group-55 group">
                <div class="group-55-1">
                  <div class="table-1">
                    <div class="frame-519">
                      <div class="number valign-text-middle number-3 jost-bold-white-29px">5</div>
                    </div>
                    <div class="frame-11235"><img class="image-29" src="<?php echo get_template_directory_uri() ?>/img/image-29@2x.png" alt="image 29" /></div>
                    <div class="address-container">
                      <div class="address valign-text-middle poppins-light-star-dust-16px">Address</div>
                      <p class="address-1 valign-text-middle poppins-normal-charade-14px">
                        146 Front St W, Toronto, ON M5J 1G2, Canada
                      </p>
                    </div>
                    <div class="flex-col flex">
                      <div class="star-container">
                        <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-2.png" alt="Star 2" />
                        <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-3.png" alt="Star 3" />
                        <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-4.png" alt="Star 4" />
                        <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-5.png" alt="Star 5" />
                        <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-6.png" alt="Star 6" />
                      </div>
                      <div class="excellent valign-text-middle jost-light-star-dust-16px">Excellent</div>
                    </div>
                    <div class="flex-row flex">
                      <div class="score">
                        <div class="score-1">
                          <div class="overlap-group">
                            <div class="text-1 valign-text-middle poppins-bold-black-25px">9.8</div>
                            <img class="ellipse-1" src="<?php echo get_template_directory_uri() ?>/img/ellipse-1.svg" alt="Ellipse 1" />
                          </div>
                        </div>
                      </div>
                      <div class="frame-515">
                        <div class="large">
                          <div class="label valign-text-middle poppins-medium-white-18px">Visit Hotel</div>
                          <img class="vector-1" src="<?php echo get_template_directory_uri() ?>/img/vector-12.png" alt="Vector" />
                        </div>
                        <div class="read-review valign-text-middle read jost-light-black-16px">Read Review</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="frame-112">
              <div class="group-55 group">
                <div class="group-55-1">
                  <div class="table-1">
                    <div class="frame-519">
                      <div class="number valign-text-middle number-3 jost-bold-white-29px">6</div>
                    </div>
                    <div class="frame-11235"><img class="image-30" src="<?php echo get_template_directory_uri() ?>/img/image-30@2x.png" alt="image 30" /></div>
                    <div class="address-container">
                      <div class="address valign-text-middle poppins-light-star-dust-16px">Address</div>
                      <p class="address-1 valign-text-middle poppins-normal-charade-14px">
                        146 Front St W, Toronto, ON M5J 1G2, Canada
                      </p>
                    </div>
                    <div class="flex-col flex">
                      <div class="star-container">
                        <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-2.png" alt="Star 2" />
                        <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-3.png" alt="Star 3" />
                        <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-4.png" alt="Star 4" />
                        <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-5.png" alt="Star 5" />
                        <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-6.png" alt="Star 6" />
                      </div>
                      <div class="excellent valign-text-middle jost-light-star-dust-16px">Excellent</div>
                    </div>
                    <div class="flex-row flex">
                      <div class="score">
                        <div class="score-1">
                          <div class="overlap-group">
                            <div class="text-1 valign-text-middle poppins-bold-black-25px">9.8</div>
                            <img class="ellipse-1" src="<?php echo get_template_directory_uri() ?>/img/ellipse-1.svg" alt="Ellipse 1" />
                          </div>
                        </div>
                      </div>
                      <div class="frame-515">
                        <div class="large">
                          <div class="label valign-text-middle poppins-medium-white-18px">Visit Hotel</div>
                          <img class="vector-1" src="<?php echo get_template_directory_uri() ?>/img/vector-12.png" alt="Vector" />
                        </div>
                        <div class="read-review valign-text-middle read jost-light-black-16px">Read Review</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="frame-112">
              <div class="group-55 group">
                <div class="group-55-1">
                  <div class="table-1">
                    <div class="frame-519">
                      <div class="number valign-text-middle number-3 jost-bold-white-29px">7</div>
                    </div>
                    <div class="frame-11235-2 frame-11235-5"></div>
                    <div class="address-container">
                      <div class="address valign-text-middle poppins-light-star-dust-16px">Address</div>
                      <p class="address-1 valign-text-middle poppins-normal-charade-14px">
                        146 Front St W, Toronto, ON M5J 1G2, Canada
                      </p>
                    </div>
                    <div class="flex-col flex">
                      <div class="star-container">
                        <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-2.png" alt="Star 2" />
                        <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-3.png" alt="Star 3" />
                        <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-4.png" alt="Star 4" />
                        <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-5.png" alt="Star 5" />
                        <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-6.png" alt="Star 6" />
                      </div>
                      <div class="excellent valign-text-middle jost-light-star-dust-16px">Excellent</div>
                    </div>
                    <div class="flex-row flex">
                      <div class="score">
                        <div class="score-1">
                          <div class="overlap-group">
                            <div class="text-1 valign-text-middle poppins-bold-black-25px">9.8</div>
                            <img class="ellipse-1" src="<?php echo get_template_directory_uri() ?>/img/ellipse-1.svg" alt="Ellipse 1" />
                          </div>
                        </div>
                      </div>
                      <div class="frame-515">
                        <div class="large">
                          <div class="label valign-text-middle poppins-medium-white-18px">Visit Hotel</div>
                          <img class="vector-1" src="<?php echo get_template_directory_uri() ?>/img/vector-12.png" alt="Vector" />
                        </div>
                        <div class="read-review valign-text-middle read jost-light-black-16px">Read Review</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="frame-112">
              <div class="group-55 group">
                <div class="group-55-1">
                  <div class="table-1">
                    <div class="frame-519">
                      <div class="number valign-text-middle number-3 jost-bold-white-29px">8</div>
                    </div>
                    <div class="frame-11235"><img class="image-32" src="<?php echo get_template_directory_uri() ?>/img/image-32@2x.png" alt="image 32" /></div>
                    <div class="address-container">
                      <div class="address valign-text-middle poppins-light-star-dust-16px">Address</div>
                      <p class="address-1 valign-text-middle poppins-normal-charade-14px">
                        146 Front St W, Toronto, ON M5J 1G2, Canada
                      </p>
                    </div>
                    <div class="flex-col flex">
                      <div class="star-container">
                        <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-2.png" alt="Star 2" />
                        <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-3.png" alt="Star 3" />
                        <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-4.png" alt="Star 4" />
                        <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-5.png" alt="Star 5" />
                        <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-6.png" alt="Star 6" />
                      </div>
                      <div class="excellent valign-text-middle jost-light-star-dust-16px">Excellent</div>
                    </div>
                    <div class="flex-row flex">
                      <div class="score">
                        <div class="score-1">
                          <div class="overlap-group">
                            <div class="text-1 valign-text-middle poppins-bold-black-25px">9.8</div>
                            <img class="ellipse-1" src="<?php echo get_template_directory_uri() ?>/img/ellipse-1.svg" alt="Ellipse 1" />
                          </div>
                        </div>
                      </div>
                      <div class="frame-515">
                        <div class="large">
                          <div class="label valign-text-middle poppins-medium-white-18px">Visit Hotel</div>
                          <img class="vector-1" src="<?php echo get_template_directory_uri() ?>/img/vector-12.png" alt="Vector" />
                        </div>
                        <div class="read-review valign-text-middle read jost-light-black-16px">Read Review</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="frame-112">
              <div class="group-55 group">
                <div class="group-55-1">
                  <div class="table-1">
                    <div class="frame-519">
                      <div class="number valign-text-middle number-3 jost-bold-white-29px">9</div>
                    </div>
                    <div class="frame-11235-3 frame-11235-5"></div>
                    <div class="address-container">
                      <div class="address valign-text-middle poppins-light-star-dust-16px">Address</div>
                      <p class="address-1 valign-text-middle poppins-normal-charade-14px">
                        146 Front St W, Toronto, ON M5J 1G2, Canada
                      </p>
                    </div>
                    <div class="flex-col flex">
                      <div class="star-container">
                        <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-2.png" alt="Star 2" />
                        <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-3.png" alt="Star 3" />
                        <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-4.png" alt="Star 4" />
                        <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-5.png" alt="Star 5" />
                        <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-6.png" alt="Star 6" />
                      </div>
                      <div class="excellent valign-text-middle jost-light-star-dust-16px">Excellent</div>
                    </div>
                    <div class="flex-row flex">
                      <div class="score">
                        <div class="score-1">
                          <div class="overlap-group">
                            <div class="text-1 valign-text-middle poppins-bold-black-25px">9.8</div>
                            <img class="ellipse-1" src="<?php echo get_template_directory_uri() ?>/img/ellipse-1.svg" alt="Ellipse 1" />
                          </div>
                        </div>
                      </div>
                      <div class="frame-515">
                        <div class="large">
                          <div class="label valign-text-middle poppins-medium-white-18px">Visit Hotel</div>
                          <img class="vector-1" src="<?php echo get_template_directory_uri() ?>/img/vector-12.png" alt="Vector" />
                        </div>
                        <div class="read-review valign-text-middle read jost-light-black-16px">Read Review</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="frame-11246">
              <div class="group-55-2">
                <div class="group-55-1">
                  <div class="table-1">
                    <div class="frame-519"><div class="number-2 valign-text-middle number-3">10</div></div>
                    <div class="frame-11235-4 frame-11235-5"></div>
                    <div class="address-container">
                      <div class="address valign-text-middle poppins-light-star-dust-16px">Address</div>
                      <p class="address-1 valign-text-middle poppins-normal-charade-14px">
                        146 Front St W, Toronto, ON M5J 1G2, Canada
                      </p>
                    </div>
                    <div class="flex-col flex">
                      <div class="star-container">
                        <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-2.png" alt="Star 2" />
                        <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-3.png" alt="Star 3" />
                        <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-4.png" alt="Star 4" />
                        <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-5.png" alt="Star 5" />
                        <img class="star" src="<?php echo get_template_directory_uri() ?>/img/star-6.png" alt="Star 6" />
                      </div>
                      <div class="excellent valign-text-middle jost-light-star-dust-16px">Excellent</div>
                    </div>
                    <div class="flex-row flex">
                      <div class="score">
                        <div class="score-1">
                          <div class="overlap-group">
                            <div class="text-1 valign-text-middle poppins-bold-black-25px">9.8</div>
                            <img class="ellipse-1" src="<?php echo get_template_directory_uri() ?>/img/ellipse-1.svg" alt="Ellipse 1" />
                          </div>
                        </div>
                      </div>
                      <div class="frame-515">
                        <div class="large">
                          <div class="label valign-text-middle poppins-medium-white-18px">Visit Hotel</div>
                          <img class="vector-1" src="<?php echo get_template_directory_uri() ?>/img/vector-12.png" alt="Vector" />
                        </div>
                        <div class="read-review valign-text-middle read jost-light-black-16px">Read Review</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="frame-11257">
          <div class="lorem-ipsom poppins-medium-razzmatazz-16px">Lorem Ipsom</div>
          <p class="why-you-should-choose-us poppins-bold-black-32px">Why you Should Choose Us</p>
        </div>
        <div class="flex-row-2 flex-row-3">
          <img class="image-40" src="<?php echo get_template_directory_uri() ?>/img/image-40-1.png" alt="image 40" />
          <div class="frame-11287">
            <div class="frame-112-1">
              <div class="frame-11279">
                <div class="number-1 valign-text-middle number-3 poppins-bold-white-24px">1</div>
              </div>
              <p class="discover-the-best-ca poppins-bold-black-24px">Discover The Best Casino Hotels In the World</p>
              <p class="adipiscing-elit-nun poppins-medium-quick-silver-16px">
                adipiscing elit. Nunc diam lectus, vestibulum bibendum faucibus eu, viverra ut ipsum. Lorem ipsum dolor
                sit amet, consectetur
              </p>
            </div>
            <div class="frame-112-1">
              <div class="frame-11279">
                <div class="number-1 valign-text-middle number-3 poppins-bold-white-24px">1</div>
              </div>
              <p class="discover-the-best-ca poppins-bold-black-24px">Discover The Best Casino Hotels In the World</p>
              <p class="adipiscing-elit-nun poppins-medium-quick-silver-16px">
                adipiscing elit. Nunc diam lectus, vestibulum bibendum faucibus eu, viverra ut ipsum. Lorem ipsum dolor
                sit amet, consectetur
              </p>
            </div>
            <div class="frame-112-1">
              <div class="frame-11279">
                <div class="number-1 valign-text-middle number-3 poppins-bold-white-24px">1</div>
              </div>
              <p class="discover-the-best-ca poppins-bold-black-24px">Discover The Best Casino Hotels In the World</p>
              <p class="adipiscing-elit-nun poppins-medium-quick-silver-16px">
                adipiscing elit. Nunc diam lectus, vestibulum bibendum faucibus eu, viverra ut ipsum. Lorem ipsum dolor
                sit amet, consectetur
              </p>
            </div>
          </div>
        </div>
        <?php get_footer(); ?>