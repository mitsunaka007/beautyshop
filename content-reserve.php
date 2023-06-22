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
					<form action="/beautyshop/reserve/reservecheck" method="POST">
						<div class="reserve-form-header">
							<h2>ご予約フォーム</h2>
						</div>
						<div class="form-column form-column-name">
							<div class="form-column-label">
								<label for="reserve-name"></label>
								<span class="form-space"><p>お名前</p></span>
							</div>
							<input type="text" id="reserve-name" name="reserve-name">
						</div>
						<div class="form-column form-column-date">
							<div class="form-column-label">
								<label for="reserve-date"></label>
								<span class="form-space"><p>ご予約日</p></span>
							</div>
							<input type="date" id="reserve-date" name="reserve-date">
						</div>
						<div class="form-column form-column-course">
							<div class="form-column-label">
								<label for="reserve-course"></label>
								<span class="form-space"><p>ご依頼内容</p></span>
							</div>
							<select name="reserve-course" id="reserve-course" >
								<option value="カットのみ">カットのみ</option>
								<option value="カットとシャンプー">カットとシャンプー</option>
								<option value="カラーリング">カラーリング</option>
								<option value="縮毛矯正">縮毛矯正</option>
								<option value="ストレートパーマ">ストレートパーマ</option>
							</select>
						</div>
						<div class="form-column-btn">
						<!-- <div class="form-column form-column-btn"> -->
							<input type="submit" value="確認する">
						</div>
					</form>
				</div>
		</div>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
