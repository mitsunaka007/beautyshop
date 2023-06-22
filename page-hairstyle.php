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
/*
Template Name: カテゴリー：ヘアスタイル
*/
get_header('home');
?>

	<main id="primary" class="site-main">
		<?php
		while ( have_posts() ) :
			the_post();?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<!-- <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?> -->
		</header><!-- .entry-header -->
		<?php
			// beautyshop_post_thumbnail();
		?>

		<div class="home-content">
			<div class="parallax_box">
				<div class="front_content">
					<h2>HAIR STYLE</h2>
					<div class="cutStyle">
						<?php
							$arg = array(
								'posts_per_page' => -1,
								'orderby' => 'date',
								'order' => 'DESC',
								'category_name' => 'hairstyles'
							);
							$posts = get_posts( $arg );
							if( $posts ):
						?>
						<?php
							foreach ( $posts as $post ) :
								setup_postdata( $post );
						?>
						<div class="cutStyleBox">
							<div class="cutStyle-img">
								<?php the_post_thumbnail('large'); ?>
							</div>
							<div class="cutStyle-text">
								<a href="<?php the_permalink(); ?>">
									<h3><?php the_title(); ?></h3>
									<p><?php echo the_time( 'Y.m.d' ); ?><br>
								</a>
							</div>
						</div>
						<?php
							endforeach;
						?>
						<?php
							endif;
							wp_reset_postdata();
						?>
					</div>
				</div>
			</div>
		</div>
		<?php
		endwhile; // End of the loop.
		?>
		<div class="pagetop">Top</div>
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer('home');
