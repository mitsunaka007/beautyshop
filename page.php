<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BeautyShop
 */

get_header('home');
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
			if(is_page('home')){
				get_template_part( 'template-parts/content', 'home' );
			} else if(is_page('reserve')){
				get_template_part( 'template-parts/content', 'reserve' );
			} else if(is_page('reservecheck')){
				get_template_part( 'template-parts/content', 'reservecheck' );
			} else if(is_page('reservedone')){
				get_template_part( 'template-parts/content', 'reservedone' );
			} else {
				get_template_part( 'template-parts/content', 'page' );
			}

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
		<div class="pagetop">Top</div>
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer('home');
