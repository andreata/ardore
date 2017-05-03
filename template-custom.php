<?php
/**
 * Template Name: Home Template
 */
?>

<?php while (have_posts()) : the_post(); ?>

  <h1>
  <span>
   <?php echo ot_get_option ( 'home_hedline', 'Start your WOW SEO adventure. Right Now' )?>
  </span>
</h1>

<div class="content-103">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-4">
				<div class="service-post">
					<a class="white-text" href="<?php echo get_page_link(ot_get_option('link_left', '#')); ?>">
					<div class="service-content">
						<div class="service-icon">
								<i class="fa fa-share-alt"></i>
						</div> <!-- service-icon -->
						<h3 class="service-title"><?php echo ot_get_option ( 'h1_left', 'Advertising' )?></h3>
						<p class="service-description"><?php echo ot_get_option ( 'h2_left', 'Lorem Ipsum' )?></p>
					</div> <!-- service-content --></a>
					<div class="service-hover"></div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="service-post">
					<a class="white-text" href="<?php echo get_page_link(ot_get_option('link_center', '#')); ?>">
					<div class="service-content">
						<div class="service-icon">
								<i class="fa fa-pencil"></i>
						</div> <!-- .s-icon -->
						<h3 class="service-title"><?php echo ot_get_option ( 'h1_center', 'Branding Design' )?></h3>
						<p class="service-description"><?php echo ot_get_option ( 'h2_center', 'Lorem Ipsum' )?></p>
					</div> <!-- service-content --></a>
					<div class="service-hover"></div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="service-post">
					<a class="white-text" href="<?php echo get_page_link(ot_get_option('link_right', '#' )); ?>">
					<div class="service-content">
						<div class="service-icon">
								<i class="fa fa-lightbulb-o"></i>
						</div> <!-- .s-icon -->
						<h3 class="service-title"><?php echo ot_get_option ( 'h1_right', 'Creative Marketing' )?></h3>
						<p class="service-description"><?php echo ot_get_option ( 'h2_right', 'Lorem Ipsum' )?></p>
					</div> <!-- service-content --></a>
					<div class="service-hover"></div>
				</div>
			</div>
		</div>
	</div>
</div>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="counter" data-count="<?php echo ot_get_option ( 'ore_1', '150' )?>">0</div>
				<h4 style="text-align: center;"><?php echo ot_get_option ( 'coffe_1', 'Work hours' )?></h4>
			</div>
			<div class="col-md-4">
				<div class="counter" data-count="<?php echo ot_get_option ( 'ore_2', '20' )?>">0</div>
				<h4 style="text-align: center;"><?php echo ot_get_option ( 'coffe_2', 'Projects in progress' )?></h4>
			</div>
			<div class="col-md-4">
				<div class="counter" data-count="<?php echo ot_get_option ( 'ore_3', '190' )?>">0</div>
				<h4 style="text-align: center;"><?php echo ot_get_option ( 'coffe_3', 'Drinking coffee' )?></h4>
			</div>
			</div>
		</div>
	</div>

	<!-- Begin MailChimp Signup Form -->
<div style="padding-top: 20px; padding-bottom: 20px; margin-top: 44px;" class="container container-2">
	<div class="row">
		<div style="text-align: right;" class="col-md-4">
		<h2 style="color: #fff; margin-top: auto !important;"><?php echo ot_get_option ( 'newsletter_1', 'Subscribe Now!' )?><h2>
		</div>
		<div class="col-md-8">
			<div  id="mc_embed_signup">
				<form action="<?php echo ot_get_option ( 'form_action', '#' )?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				    <div id="mc_embed_signup_scroll">

					<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
				    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_00dd953dd1a287bdc6d4a67e6_32b6357816" tabindex="-1" value=""></div>
				    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
				    </div>
				</form>
			</div>
		</div>
	</div>
</div>

<!--End mc_embed_signup-->
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
