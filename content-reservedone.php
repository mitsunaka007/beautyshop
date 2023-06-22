
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
						$table_name = $wpdb->prefix.'beautyshopReserve';
						if ($wpdb->get_var("show tables like '" . $table_name . "'") != $table_name) {
							require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
         
							$sql = "CREATE TABLE " . $table_name . "(
							id int NOT NULL auto_increment,
							reserve_name varchar(50) NOT NULL,
							reserve_date varchar(20) NOT NULL,
							reserve_course varchar(50) NOT NULL,
							PRIMARY KEY(id)
							);";
							add_option($table_name."_version", '1.0');
							dbDelta($sql);
						}
						$reserveName 	= htmlspecialchars($_POST['reserve-name'], ENT_QUOTES);
						$reserveDate 	= htmlspecialchars($_POST['reserve-date'], ENT_QUOTES);
						$reserveCourse 	= htmlspecialchars($_POST['reserve-course'], ENT_QUOTES);
						$reserveSql 	= $wpdb->prepare(
							"INSERT INTO {$wpdb->prefix}beautyshopReserve (reserve_name, reserve_date, reserve_course) VALUES (%s, %s, %s)", $reserveName, $reserveDate, $reserveCourse);
						$wpdb->query($reserveSql);
		
						echo '<div class="reserve-form-header">';
						echo '<h2>ご予約-無事完了しました。</h2>';
						echo '</div>';
						echo '<div class="reserve-result">';
						echo '<p>'.$reserveName.'様、'.$reserveDate.'に「'.$reserveCourse.'」にてご予約を承りました。</p>';
						echo '</div>';
					?>
					<div class="home-btn">
						<button class="move-btn">
							<a href="<?php echo home_url();?>">Homeへ</a>
						</button>
					</div>
				</div>
		</div>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
