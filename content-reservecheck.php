
<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BeautyShop
 */
function h($s) {
	return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			// the_title( '<h1 class="entry-title">', '</h1>' );
		?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<div class="reserve-img blur-img">
			<?php
				// beautyshop_post_thumbnail();
				?>
				<div class="reserve-form">
					<?php
						global $wpdb;
						$reserveName 	= htmlspecialchars($_POST['reserve-name'], ENT_QUOTES);
						$reserveDate 	= htmlspecialchars($_POST['reserve-date'], ENT_QUOTES);
						$reserveCourse 	= htmlspecialchars($_POST['reserve-course'], ENT_QUOTES);

						echo '<form action="/beautyshop/reserve/reservecheck/reservedone" method="POST">';
						echo '<div class="reserve-form-header">';
						echo '<h2>ご予約-確認ページ</h2>';
						echo '</div>';
						echo '<div class="form-column form-column-name">';
						echo '<div class="form-column-label">';
						echo '<label for="reserve-name"></label>';
						echo '<span class="form-space"><p>お名前</p></span>';
						echo '</div>';
						echo '<input type="text" id="reserve-name" name="reserve-name" value="'.$reserveName.'">';
						echo '</div>';
						echo '<div class="form-column form-column-date">';
						echo '<div class="form-column-label">';
						echo '<label for="reserve-date"></label>';
						echo '<span class="form-space"><p>ご予約日</p></span>';
						echo '</div>';
						echo '<input type="date" id="reserve-date" name="reserve-date" value="'.$reserveDate.'">';
						echo '</div>';
						echo '<div class="form-column form-column-course">';
						echo '<div class="form-column-label">';
						echo '<label for="reserve-course"></label>';
						echo '<span class="form-space"><p>ご依頼内容</p></span>';
						echo '</div>';
						echo '<input type="text" id="reserve-course" name="reserve-course" value="'.$reserveCourse.'">';
						echo '</div>';
						echo '<div class="form-column-btn">';
						echo '<input type="submit" value="予約する">';
						echo '</div>';
						echo '</form>';
					?>
				</div>
		</div>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
