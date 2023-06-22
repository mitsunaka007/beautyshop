<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BeautyShop
 */

 	// global $template;
	// $temp_name = basename($template);
	// echo '現在使用しているテンプレートファイルは、'.$temp_name.'です。';

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'beautyshop' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$beautyshop_description = get_bloginfo( 'description', 'display' );
			if ( $beautyshop_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $beautyshop_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
		<div class="site-logo">
			<a href="<?php home_url(); ?>"><img src="http://beautyshop.local/wp-content/uploads/2022/10/Beauty-Shop.png" alt="beautyShop"></a>
		</div>
		<div class="bookmark">
			<p><a href="#" rel="sidebar" id="add-site">お気に入り登録</a></p>
		</div>
		<div class="fixedhamburger">
			<div class="wrapper">
				<div id="menu" class="hamburger">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
			<nav class="menu">
				<div class="menu-inner">
					<div class="menu-inner-boxs">
						<div class="menu-inner-box">
							<h2>サイトマップ</h2>
							<?php
								wp_nav_menu(
									array(
										'theme_location' 	=> 'menu-1',
										'menu_id'        	=> 'primary-menu',
										'menu_class' 		=> 'menu-inner-a'
										// 'add_a_class' => 'nav-link text-white'
									)
								);
							?>
						</div>
						<div class="menu-inner-box">
							<h2>カテゴリー</h2>
							<ul class="category-list">
								<li class="menu-inner-a"><a href="#index">シャンプー</a></li>
								<li class="menu-inner-a"><a href="#header">トリートメント</a></li>
								<li class="menu-inner-a"><a href="#content">ヘアカラー</a></li>
								<li class="menu-inner-a"><a href="#sidebar">保湿液</a></li>
								<li class="menu-inner-a"><a href="#footer">化粧水</a></li>
							</ul>
						</div>
					</div>
				</div>
			</nav>
		</div>
		<!-- <div class="header-carousel slick carousel"> -->
		<div>
			<ul class="slider-2" id="js-slider-2">
				<?php
					$cat_posts = get_posts(array(
						'post_type' => 'post', // 投稿タイプ
						'category' => 5, // カテゴリIDを番号で指定する場合
						'posts_per_page' => -1, // 表示件数
						'orderby' => 'date', // 表示順の基準
						'order' => 'ASC' // 昇順・降順
					));
					global $post;
					if($cat_posts): foreach($cat_posts as $post): setup_postdata($post);
				?>
				<li>
					<a href="<?php the_permalink() ?>">
						<?php the_post_thumbnail('full', ['class' => 'common slider-base img-hover']); ?>
					</a>
				</li>
				<?php endforeach; endif; wp_reset_postdata(); ?>
			</ul>
			<div class="dots-2"></div>
		</div>

	</header><!-- #masthead -->
