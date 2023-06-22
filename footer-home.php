<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BeautyShop
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="site-map">
				<h2 class="footerHead infinite">BeautyShop</h2>
				<div class="lineHead infinite">
					<a href="https://lin.ee/7nSzvSE"><img src="https://scdn.line-apps.com/n/line_add_friends/btn/ja.png" alt="友だち追加" height="36" border="0"></a>
				</div>
				<?php
					wp_nav_menu(
						array(
							'theme_location' 	=> 'menu-1',
							'menu_id'        	=> 'primary-menu',
							'menu_class' 		=> 'site-mapList',
							'depth'				=> 1
							// 'add_a_class' => 'nav-link text-white'
						)
					);
				?>
				<!-- <div class="site-mapList">
					<ul>
						<li></li>
					</ul>
				</div> -->
				<div class="site-accessIn">
					<h2>予約はこちら</h2>
					<div class="preserve">
						<div class="accessButton"><a href=""><span>tel.</span>0000-00-0000</a></div>
						<div class="accessButton"><a href="mailto:info@example.com">Email</a></div>
						<div class="accessButton"><a href="">LINE</a></div>
					</div>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
