<?php /* Template Name: Homepage Template*/ ?>

<?php
    // Hero Slider
    $home_hero_slider_image = get_field("home_hero_slider_image");
    $home_hero_slider_title = get_field("home_hero_slider_title");
    $home_hero_slider_link = get_field("home_hero_slider_link");

    $home_hero_slider_image_1 = get_field("home_hero_slider_image_1");
    $home_hero_slider_title_1 = get_field("home_hero_slider_title_1");
    $home_hero_slider_link_1 = get_field("home_hero_slider_link_1");

    $home_hero_slider_image_2 = get_field("home_hero_slider_image_2");
    $home_hero_slider_title_2 = get_field("home_hero_slider_title_2");
    $home_hero_slider_link_2 = get_field("home_hero_slider_link_2");

    $home_hero_slider_image_3 = get_field("home_hero_slider_image_3");
    $home_hero_slider_title_3 = get_field("home_hero_slider_title_3");
    $home_hero_slider_link_3 = get_field("home_hero_slider_link_3");

    $home_hero_slider_image_4 = get_field("home_hero_slider_image_4");
    $home_hero_slider_title_4 = get_field("home_hero_slider_title_4");
    $home_hero_slider_link_4 = get_field("home_hero_slider_link_4");

    $home_hero_slider_image_5 = get_field("home_hero_slider_image_5");
    $home_hero_slider_title_5 = get_field("home_hero_slider_title_5");
    $home_hero_slider_link_5 = get_field("home_hero_slider_link_5");

    // Showcase 3 boxes
    $showcase_three_box_title_1 = get_field("showcase_three_box_title_1");
    $showcase_three_box_title_2 = get_field("showcase_three_box_title_2");
    $showcase_three_box_title_3 = get_field("showcase_three_box_title_3");

    $showcase_three_box_image_1 = get_field("showcase_three_box_image_1");
    $showcase_three_box_image_2 = get_field("showcase_three_box_image_2");
    $showcase_three_box_image_3 = get_field("showcase_three_box_image_3");

    $showcase_three_box_link_1 = get_field("showcase_three_box_link_1");
    $showcase_three_box_link_2 = get_field("showcase_three_box_link_2");
    $showcase_three_box_link_3 = get_field("showcase_three_box_link_3");

    // Showcase 2 boxes
    $showcase_two_box_title_1 = get_field("showcase_two_box_title_1");
    $showcase_two_box_title_2 = get_field("showcase_two_box_title_2");
    
    $showcase_two_box_image_1 = get_field("showcase_two_box_image_1");
    $showcase_two_box_image_2 = get_field("showcase_two_box_image_2");

    $showcase_two_box_link_1 = get_field("showcase_two_box_link_1");
    $showcase_two_box_link_2 = get_field("showcase_two_box_link_2");

    // Our clients Slider
    $our_clients_image_1 = get_field("our_clients_image_1");
    $our_clients_image_2 = get_field("our_clients_image_2");
    $our_clients_image_3 = get_field("our_clients_image_3");
    $our_clients_image_4 = get_field("our_clients_image_4");
    $our_clients_image_5 = get_field("our_clients_image_5"); 
    $our_clients_image_6 = get_field("our_clients_image_6");

    // Customer Reviews Slider
    $customer_reviews_main_text_1 = get_field("customer_reviews_main_text_1");
    $customer_reviews_main_text_2 = get_field("customer_reviews_main_text_2");
    $customer_reviews_main_text_3 = get_field("customer_reviews_main_text_3");
    $customer_reviews_main_text_4 = get_field("customer_reviews_main_text_4");

    $customer_reviews_customer_name_1 = get_field("customer_reviews_customer_name_1");
    $customer_reviews_customer_name_2 = get_field("customer_reviews_customer_name_2");
    $customer_reviews_customer_name_3 = get_field("customer_reviews_customer_name_3");
    $customer_reviews_customer_name_4 = get_field("customer_reviews_customer_name_4");

    // Info CTA box
    $info_cta_box_main_text = get_field("info_cta_box_main_text");
?>

<?php get_header(); ?>

    <section id="homepageHeroSlider">
        <div class="slider homepage-hero-main-slider">
            <?php
				if(($home_hero_slider_image)){
			?>
            <div class="home-hero-img" style="background-image: url('<?php echo $home_hero_slider_image; ?>');">
                <div class="container">
                    <h1><?php echo $home_hero_slider_title; ?></h1>
                    <a class="slide-link" href="<?php echo $home_hero_slider_link; ?>">Shop Now</a> 
                </div>
            </div>
            <?php
				}
				else{

				}
            ?> 
            <?php
				if(($home_hero_slider_image_1)){
			?>
            <div class="home-hero-img" style="background-image: url('<?php echo $home_hero_slider_image_1; ?>');">
                <div class="container">
                    <h1><?php echo $home_hero_slider_title_1; ?></h1>
                    <a class="slide-link" href="<?php echo $home_hero_slider_link_1; ?>">Shop Now</a> 
                </div>
            </div>
            <?php
				}
				else{

				}
            ?> 
            <?php
				if(($home_hero_slider_image_2)){
			?>
            <div class="home-hero-img" style="background-image: url('<?php echo $home_hero_slider_image_2; ?>');">
                <div class="container">
                    <h1><?php echo $home_hero_slider_title_2; ?></h1>
                    <a class="slide-link" href="<?php echo $home_hero_slider_link_2; ?>">Shop Now</a> 
                </div>
            </div>
            <?php
				}
				else{

				}
            ?> 
            <?php
				if(($home_hero_slider_image_3)){
			?>
            <div class="home-hero-img" style="background-image: url('<?php echo $home_hero_slider_image_3; ?>');">
                <div class="container">
                    <h1><?php echo $home_hero_slider_title_3; ?></h1>
                    <a class="slide-link" href="<?php echo $home_hero_slider_link_3; ?>">Shop Now</a> 
                </div>
            </div>
            <?php
				}
				else{

				}
            ?> 
            <?php
				if(($home_hero_slider_image_4)){
			?>
            <div class="home-hero-img" style="background-image: url('<?php echo $home_hero_slider_image_4; ?>');">
                <div class="container">
                    <h1><?php echo $home_hero_slider_title_4; ?></h1>
                    <a class="slide-link" href="<?php echo $home_hero_slider_link_4; ?>">Shop Now</a> 
                </div>
            </div>
            <?php
				}
				else{

				}
            ?> 
            <?php
				if(($home_hero_slider_image_5)){
			?>
            <div class="home-hero-img" style="background-image: url('<?php echo $home_hero_slider_image_5; ?>');">
                <div class="container">
                    <h1><?php echo $home_hero_slider_title_5; ?></h1>
                    <a class="slide-link" href="<?php echo $home_hero_slider_link_5; ?>">Shop Now</a> 
                </div>
            </div>
            <?php
				}
				else{

				}
            ?> 
        </div>
    </section>

    <section id="showcaseThreeBoxes">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="img-box" style="background-image: url('<?php echo $showcase_three_box_image_1; ?>');">
                        <a href="<?php echo $showcase_three_box_link_1; ?>"><h3><?php echo $showcase_three_box_title_1; ?></h3></a>
                        <a class="slide-link" href="<?php echo $showcase_three_box_link_1; ?>">Find out More</a> 
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="img-box" style="background-image: url('<?php echo $showcase_three_box_image_2; ?>');">
                        <a href="<?php echo $showcase_three_box_link_2; ?>"><h3><?php echo $showcase_three_box_title_2; ?></h3></a>
                        <a class="slide-link" href="<?php echo $showcase_three_box_link_2; ?>">Find out More</a> 
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="img-box" style="background-image: url('<?php echo $showcase_three_box_image_3; ?>');">
                        <a href="<?php echo $showcase_three_box_link_3; ?>"><h3><?php echo $showcase_three_box_title_3; ?></h3></a>
                        <a class="slide-link" href="<?php echo $showcase_three_box_link_3; ?>">Find out More</a> 
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="showcaseTwoBoxes">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="img-box" style="background-image: url('<?php echo $showcase_two_box_image_1; ?>');">
                        <h3><?php echo $showcase_two_box_title_1; ?></h3>
                        <a class="slide-link" href="<?php echo $showcase_two_box_link_1; ?>">Read More</a> 
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="img-box" style="background-image: url('<?php echo $showcase_two_box_image_2; ?>');">
                        <h3><?php echo $showcase_two_box_title_2; ?></h3>
                        <a class="slide-link" href="<?php echo $showcase_two_box_link_2; ?>">Find out More</a> 
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="ourClientsSlider">
            <div class="container">
                <h2>Our Clients</h2>
                <div class="row slider our-clients-slider">
                    <?php
					    if(($our_clients_image_1)){
					?>
                    <div>
                        <img class="client-img" src=<?php echo $our_clients_image_1; ?>>
                    </div>
                    <?php
						}
						else{

						}
                    ?>   
                    <?php
					    if(($our_clients_image_2)){
					?>
                    <div>
                        <img class="client-img" src=<?php echo $our_clients_image_2; ?>>
                    </div>
                    <?php
						}
						else{

						}
                    ?>   
                    <?php
					    if(($our_clients_image_3)){
					?>
                        <div>
                            <img class="client-img" src=<?php echo $our_clients_image_3; ?>>
                        </div>
                    <?php
						}
						else{

						}
                    ?>   
                    <?php
					    if(($our_clients_image_4)){
					?>
                        <div>
                            <img class="client-img" src=<?php echo $our_clients_image_4; ?>>
                        </div>
                    <?php
						}
						else{

						}
                    ?> 
                    <?php
					    if(($our_clients_image_5)){
					?>
                        <div>
                            <img class="client-img" src=<?php echo $our_clients_image_5; ?>>
                        </div>
                    <?php
						}
						else{

						}
                    ?> 
                    <?php
					    if(($our_clients_image_6)){
					?>
                    <div class="client-img" style="background-image: url('<?php echo $our_clients_image_6; ?>');"></div>
                    <?php
						}
						else{

						}
                    ?> 
                </div>
            </div>
    </section>

    <section id="reviewsSliderBox">
        <div class="container">
            <div class="row">
                <div class="row slider reviews-slider-box">
                    <?php
					    if(($customer_reviews_main_text_1)){
					?>
                    <div class="box-review-slide">
                        <p>
                            <?php echo $customer_reviews_main_text_1; ?>
                        </p>
                        <span><?php echo $customer_reviews_customer_name_1; ?></span>
                    </div>
                    <?php
						}
						else{

						}
                    ?>   
                    <?php
					    if(($customer_reviews_main_text_2)){
					?>
                    <div class="box-review-slide">
                        <p>
                            <?php echo $customer_reviews_main_text_2; ?>
                        </p>
                        <span><?php echo $customer_reviews_customer_name_2; ?></span>
                    </div>
                    <?php
						}
						else{

						}
                    ?>   
                    <?php
					    if(($customer_reviews_main_text_3)){
					?>
                    <div class="box-review-slide">
                        <p>
                            <?php echo $customer_reviews_main_text_3; ?>
                        </p>
                        <span><?php echo $customer_reviews_customer_name_3; ?></span>
                    </div>
                    <?php
						}
						else{

						}
                    ?>   
                    <?php
					    if(($customer_reviews_main_text_4)){
					?>
                    <div class="box-review-slide">
                        <p>
                            <?php echo $customer_reviews_main_text_4; ?>
                        </p>
                        <span><?php echo $customer_reviews_customer_name_4; ?></span>
                    </div>
                    <?php
						}
						else{

						}
                    ?>   
                </div>
            </div>
        </div>
    </section>

    <section id="ourNewsFeed">
		<div class="container">
				<h3>Latest Stories</h3>
                <a class="blog-permalink" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>"> See all posts </a>
		</div>
		<div class="container">
			<div class="row">
                <?php
                    $args = array( 'numberposts' => 3, 'category_name' => '', 'order'=> 'DESC', 'orderby' => 'date' );
                    $postslist = get_posts( $args );
                    
                    foreach ($postslist as $post) :  setup_postdata($post); ?> 

                        <?php $category = isset(get_the_category()[1]) ? get_the_category()[1] :  get_the_category()[0]; ?>

                        <div class="col-12 col-md-4">
                            <a href="<?php the_permalink(); ?>" >
                                <div class="img-tiles" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
                                </div>
                            </a>

                            <a class="blog-title" href="<?php the_permalink(); ?>" > <?php the_title(); ?> </a>
                        </div>

                    <?php 
                    endforeach; 
                ?>
			</div>
		</div>					
	</section>

    <?php
		if(($info_cta_box_main_text)){
	?>
    <section id="ctaInfoBox">
        <div class="container">
            <div class="row justify-content-center">
                <?php echo $info_cta_box_main_text ?>
            </div>
        </div>
    </section>
    <?php
		}
			else{

		}
    ?>   

    <?php   
        //load newsletter
        include "template-blocks/newsletter-block.php"; 
    ?>

<?php get_footer(); ?>