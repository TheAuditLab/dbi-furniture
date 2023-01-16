<?php /* Template Name: Services Page*/ ?>
<?php get_header(); ?>

<?php 
    //hero section
	$title 	= get_field('title');
    $services_hero_image = get_field('services_hero_image');
    $text_content = get_field('text_content');
    $row_number = get_field('row_number');

    //services accordion
    $service_1_image = get_field('service_1_image');
    $service_1_header = get_field('service_1_header');
    $service_1_text = get_field('service_1_text');
    $service_2_image = get_field('service_2_image');
    $service_2_header = get_field('service_2_header');
    $service_2_text = get_field('service_2_text');
    $service_3_image = get_field('service_3_image');
    $service_3_header = get_field('service_3_header');
    $service_3_text = get_field('service_3_text');
    $service_4_image = get_field('service_4_image');
    $service_4_header = get_field('service_4_header');
    $service_4_text = get_field('service_4_text');
    $service_5_image = get_field('service_5_image');
    $service_5_header = get_field('service_5_header');
    $service_5_text = get_field('service_5_text');
    $service_6_image = get_field('service_6_image');
    $service_6_header = get_field('service_6_header');
    $service_6_text = get_field('service_6_text');
    $service_7_image = get_field('service_7_image');
    $service_7_header = get_field('service_7_header');
    $service_7_text = get_field('service_7_text');
    $service_8_image = get_field('service_8_image');
    $service_8_header = get_field('service_8_header');
    $service_8_text = get_field('service_8_text');



    //contact form
    $contact_title = get_field('contact_title');
    $contact_form = get_field('contact_form');

?>

	<section id="services_page">
        <div class="row">
            <div class="col-12">
                <div class="hero-image" style="background-image: url('<?php echo $services_hero_image['url']; ?>')">
                    <div class="container">
                        <h1 class="title"><?php echo $title; ?></h1>
                        <a href="#content">
                            <img src="<?php echo get_template_directory_uri(); ?>/icons/arrow.png" class="arrow"/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
		<div class="container">
			<div class="row">
				<div class="col-12">
                    <div class="accordion">
                        <div class="accordion__header is-active">
                            <div>
                                <img src="<?php echo $service_1_image['url']; ?>">
                                <h2><?php echo $service_1_header; ?></h2>
                            </div>
                            <span class="accordion__toggle"></span>
                        </div>
                        <div class="accordion__body is-active">
                            <p><?php echo $service_1_text ?></p>
                        </div>
                        <div class="accordion__header">
                            <div>
                                <img src="<?php echo $service_2_image['url']; ?>">
                                <h2><?php echo $service_2_header; ?></h2>
                            </div>
                            <span class="accordion__toggle"></span>
                        </div>
                        <div class="accordion__body">
                            <p><?php echo $service_2_text ?></p>
                        </div>
                        <div class="accordion__header">
                            <div>
                                <img src="<?php echo $service_3_image['url']; ?>">
                                <h2><?php echo $service_3_header; ?></h2>
                            </div>
                            <span class="accordion__toggle"></span>
                        </div>
                        <div class="accordion__body">
                            <p><?php echo $service_3_text ?></p>
                        </div>
                         <div class="accordion__header">
                            <div>
                                <img src="<?php echo $service_4_image['url']; ?>">
                                <h2><?php echo $service_4_header; ?></h2>
                            </div>
                            <span class="accordion__toggle"></span>
                        </div>
                        <div class="accordion__body">
                            <p><?php echo $service_4_text ?></p>
                        </div>
                        <div class="accordion__header">
                            <div>
                                <img src="<?php echo $service_5_image['url']; ?>">
                                <h2><?php echo $service_5_header; ?></h2>
                            </div>
                            <span class="accordion__toggle"></span>
                        </div>
                        <div class="accordion__body">
                            <p><?php echo $service_5_text ?></p>
                        </div>
                        <div class="accordion__header">
                            <div>
                                <img src="<?php echo $service_6_image['url']; ?>">
                                <h2><?php echo $service_6_header; ?></h2>
                            </div>
                            <span class="accordion__toggle"></span>
                        </div>
                        <div class="accordion__body">
                            <p><?php echo $service_6_text ?></p>
                        </div>
                        <div class="accordion__header">
                            <div>
                                <img src="<?php echo $service_7_image['url']; ?>">
                                <h2><?php echo $service_7_header; ?></h2>
                            </div>
                            <span class="accordion__toggle"></span>
                        </div>
                        <div class="accordion__body">
                            <p><?php echo $service_7_text ?></p>
                        </div>
                        <div class="accordion__header">
                            <div>
                                <img src="<?php echo $service_8_image['url']; ?>">
                                <h2><?php echo $service_8_header; ?></h2>
                            </div>
                            <span class="accordion__toggle"></span>
                        </div>
                        <div class="accordion__body">
                            <p><?php echo $service_8_text ?></p>
                        </div>
                    </div>
				</div>
			</div>
        </div>
        
        <div class="container">
			<div class="row">
				<div class="col-12">
                    <h3 class="contact-title"> <?php echo $contact_title ?></h3>
					<div class="contact-form"><?php echo do_shortcode($contact_form);  ?></div>
				</div>
			</div>
		</div>
	</section>
	

<?php get_footer(); ?>