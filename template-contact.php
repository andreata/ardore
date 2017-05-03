<?php
/**
 * Template Name: Contact Template
 */
?>

<?php while (have_posts()) : the_post(); ?>


	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.4246071347793!2d-0.16072718402374878!3d51.52377147963776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761acf33628211%3A0x445d7677a88322e1!2s221B+Baker+St%2C+Marylebone%2C+London+NW1+6XE%2C+Regno+Unito!5e0!3m2!1sit!2sit!4v1493823754949" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>


<!--End mc_embed_signup-->
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

