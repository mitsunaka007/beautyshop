<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BeautyShop
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<!-- <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?> -->
	</header><!-- .entry-header -->
	<?php beautyshop_post_thumbnail(); ?>

	<div class="home-content">
		<div class="parallax_box">
			<div class="front_content">
			<h2>HAIR STYLE</h2>
			<div class="cutStyle">
				<div class="cutStyleBox">
					<div class="cutStyle-img">
				<?php
					the_content(
						sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'beautyshop' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							wp_kses_post( get_the_title() )
						)
					);
					echo '</div>';
					echo '</div>';
					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'beautyshop' ),
							'after'  => '</div>',
						)
					);
				?>
				<?php if ( 'post' === get_post_type() ) :?>
					<div class="entry-meta">
						<?php
						beautyshop_posted_on();
						beautyshop_posted_by();
						?>
					</div><!-- .entry-meta -->
				<?php endif; ?>
					
				<?php
					// $arg = array(
					// 	'posts_per_page' => -1,
					// 	'orderby' => 'date',
					// 	'order' => 'DESC',
					// 	'category_name' => 'hairstyles'
					// );
					// $posts = get_posts( $arg );
					// if( $posts ):
				?>
				<?php
					// foreach ( $posts as $post ) :
					// 	setup_postdata( $post );
				?>
				<!-- <div class="cutStyleBox">
					<div class="cutStyle-img">
						<?php the_post_thumbnail('large'); ?>
					</div>
					<div class="cutStyle-text">
						<a href="<?php the_permalink(); ?>">
							<h3><?php the_title(); ?></h3>
							<p><?php echo the_time( 'Y.m.d' ); ?><br>
						</a>
					</div>
				</div> -->
				<?php
					// endforeach;
				?>
				<?php
					// endif;
					// wp_reset_postdata();
				?>
			</div>
		</div>
	</div>
</article>
