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
			<!-- <div class="parallax_content img_bg_01"></div> -->
			<!-- <div class="grid-wrap">
				<div class="wrap-flex" ontouchstart="">
					<img src="http://beautyshop.local/wp-content/uploads/2022/10/beautyshop-top6.jpg" alt="beautyshop-top6" class="common img img-hover">
					<img src="http://beautyshop.local/wp-content/uploads/2022/10/beautyshop-top2.jpg" alt="beautyshop-top2" class="common img img-hover">
					<img src="http://beautyshop.local/wp-content/uploads/2022/10/hairstyle-35.jpg" alt="beautyshop-top3" class="common img img-hover">
					<img src="http://beautyshop.local/wp-content/uploads/2022/10/beautyshop-top4.jpg" alt="beautyshop-top4" class="common img img-hover">
					<img src="http://beautyshop.local/wp-content/uploads/2022/10/beautyshop-top7.jpg" alt="beautyshop-top7" class="common img img-hover">
				</div>
			</div> -->
			<!-- <div class="front_content">
				<h2>Instagram</h2>
				<div class="insta-posts">
					<?php echo do_shortcode('[instagram-feed feed=1]'); ?>
				</div>
			</div> -->
			<div class="reserveContent">
				<h2>RESERVATION</h2>
				<p>当店は、お電話、WEBよりご来店予約を承っております。<br>
					お客様の髪質に合わせたお手入れ方法も発信していますので、ぜひご利用ください。	
				</p>
				<button class="reserveBtn"><a href="<?php echo home_url('reserve');?>">ご予約はこちら</a></button>
			</div>
			<div class="newsContent">
				<h2>お知らせ</h2>
				<?php
					$arg = array(
								'posts_per_page' => 4, // 表示する件数
								'orderby' => 'date', // 日付でソート
								'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
								'category_name' => 'news' // 表示したいカテゴリーのスラッグを指定
							);
					$posts = get_posts( $arg );
					if( $posts ): ?>
					<div class="newsContent-title">
						<ul>
							<?php foreach ( $posts as $post ) :	setup_postdata( $post ); ?>
								<li><a href="<?php the_permalink(); ?>"><?php the_time( 'Y.m.d' ); ?><span>/</span><?php the_title(); ?></a></li>
							<?php endforeach; ?>
						</ul>
					</div>
					<?php
					endif;
					wp_reset_postdata();
				?>
				<button class="cutStyle-achieve"><a href="<?php echo home_url('news'); ?>">See More</a></button>
			</div>
		</div>
		<div class="parallax parallax_img02"></div>
		<!-- <div class="parallax_content img_bg_02"></div> -->
		<div class="front_content">
			<div class="concepts">
				<h2 class="fadeUpTrigger">コンセプト</h2>
				<p class="fadeUpTrigger">「お客様の特徴にあった情報を提供する」<br>
					それがBeautyShopのコンセプトです。<br>
					そして、トレンドも踏まえた最新アイテムや使い方などの情報を随時お知らせします。<br>
					"セットアップ"ページでは髪のお手入れやセットアップの方法についての情報をYouTube動画でお見せします。<br>
					ユーザー登録していただくと、お客様の髪質や肌質に合わせた商品の提供もさせて頂けます。
				</p>
			</div>
		</div>
		<div class="parallax parallax_img03"></div>
		<!-- <div class="parallax_content img_bg_03"></div> -->
		<!-- <div class="front_content">CONTENT AREA</div> -->
			<div class="scroll">
				<div class="scroll-box">
					<div class="scroll-downbox">
						<div class="scroll-down">
							<img src="http://beautyshop.local/wp-content/uploads/2022/10/hairstyle-1.jpg" alt="hairstyle-1">
							<img src="http://beautyshop.local/wp-content/uploads/2022/10/hairstyle-2.jpg" alt="hairstyle-2">
							<img src="http://beautyshop.local/wp-content/uploads/2022/10/hairstyle-3.jpg" alt="hairstyle-3">
							<img src="http://beautyshop.local/wp-content/uploads/2022/10/hairstyle-4.jpg" alt="hairstyle-4">
							<img src="http://beautyshop.local/wp-content/uploads/2022/10/hairstyle-5.jpg" alt="hairstyle-5">
							<img src="http://beautyshop.local/wp-content/uploads/2022/10/hairstyle-6.jpg" alt="hairstyle-6">
							<img src="http://beautyshop.local/wp-content/uploads/2022/10/hairstyle-7.jpg" alt="hairstyle-7">
							<img src="http://beautyshop.local/wp-content/uploads/2022/10/hairstyle-8.jpg" alt="hairstyle-8">
							<img src="http://beautyshop.local/wp-content/uploads/2022/10/hairstyle-9.jpg" alt="hairstyle-9">
							<img src="http://beautyshop.local/wp-content/uploads/2022/10/hairstyle-10.jpg" alt="hairstyle-10">
						</div>
						<div class="scroll-down">
							<img src="http://beautyshop.local/wp-content/uploads/2022/10/hairstyle-1.jpg" alt="hairstyle-1">
							<img src="http://beautyshop.local/wp-content/uploads/2022/10/hairstyle-2.jpg" alt="hairstyle-2">
							<img src="http://beautyshop.local/wp-content/uploads/2022/10/hairstyle-3.jpg" alt="hairstyle-3">
							<img src="http://beautyshop.local/wp-content/uploads/2022/10/hairstyle-4.jpg" alt="hairstyle-4">
							<img src="http://beautyshop.local/wp-content/uploads/2022/10/hairstyle-5.jpg" alt="hairstyle-5">
							<img src="http://beautyshop.local/wp-content/uploads/2022/10/hairstyle-6.jpg" alt="hairstyle-6">
							<img src="http://beautyshop.local/wp-content/uploads/2022/10/hairstyle-7.jpg" alt="hairstyle-7">
							<img src="http://beautyshop.local/wp-content/uploads/2022/10/hairstyle-8.jpg" alt="hairstyle-8">
							<img src="http://beautyshop.local/wp-content/uploads/2022/10/hairstyle-9.jpg" alt="hairstyle-9">
							<img src="http://beautyshop.local/wp-content/uploads/2022/10/hairstyle-10.jpg" alt="hairstyle-10">
						</div>
					</div>
					<div class="scroll-upbox">
						<div class="scroll-up">
							<img src="http://beautyshop.local/wp-content/uploads/2022/10/hairstyle-11.jpg" alt="hairstyle-11">
							<img src="http://beautyshop.local/wp-content/uploads/2022/10/hairstyle-12.jpg" alt="hairstyle-12">
							<img src="http://beautyshop.local/wp-content/uploads/2022/10/hairstyle-13.jpg" alt="hairstyle-13">
							<img src="http://beautyshop.local/wp-content/uploads/2022/10/hairstyle-14.jpg" alt="hairstyle-14">
							<img src="http://beautyshop.local/wp-content/uploads/2022/10/hairstyle-15.jpg" alt="hairstyle-15">
							<img src="http://beautyshop.local/wp-content/uploads/2022/10/hairstyle-16.jpg" alt="hairstyle-16">
							<img src="http://beautyshop.local/wp-content/uploads/2022/10/hairstyle-17.jpg" alt="hairstyle-17">
							<img src="http://beautyshop.local/wp-content/uploads/2022/10/hairstyle-18.jpg" alt="hairstyle-18">
							<img src="http://beautyshop.local/wp-content/uploads/2022/10/hairstyle-19.jpg" alt="hairstyle-19">
							<img src="http://beautyshop.local/wp-content/uploads/2022/10/hairstyle-20.jpg" alt="hairstyle-20">
						</div>
						<div class="scroll-up">
							<img src="http://beautyshop.local/wp-content/uploads/2022/10/hairstyle-11.jpg" alt="hairstyle-11">
							<img src="http://beautyshop.local/wp-content/uploads/2022/10/hairstyle-12.jpg" alt="hairstyle-12">
							<img src="http://beautyshop.local/wp-content/uploads/2022/10/hairstyle-13.jpg" alt="hairstyle-13">
							<img src="http://beautyshop.local/wp-content/uploads/2022/10/hairstyle-14.jpg" alt="hairstyle-14">
							<img src="http://beautyshop.local/wp-content/uploads/2022/10/hairstyle-15.jpg" alt="hairstyle-15">
							<img src="http://beautyshop.local/wp-content/uploads/2022/10/hairstyle-16.jpg" alt="hairstyle-16">
							<img src="http://beautyshop.local/wp-content/uploads/2022/10/hairstyle-17.jpg" alt="hairstyle-17">
							<img src="http://beautyshop.local/wp-content/uploads/2022/10/hairstyle-18.jpg" alt="hairstyle-18">
							<img src="http://beautyshop.local/wp-content/uploads/2022/10/hairstyle-19.jpg" alt="hairstyle-19">
							<img src="http://beautyshop.local/wp-content/uploads/2022/10/hairstyle-20.jpg" alt="hairstyle-20">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="reserveContent">
				<h2>RESERVATION</h2>
				<p>当店は、お電話、WEBよりご来店予約を承っております。<br>
					お客様の髪質に合わせたお手入れ方法も発信していますので、ぜひご利用ください。	
				</p>
				<button class="reserveBtn"><a href="<?php echo home_url('reserve');?>">ご予約はこちら</a></button>
			</div>
		<div class="front_content map_content">
			<h2 class="fadeUpTrigger">アクセス・営業時間</h2>
			<div class="shopInfos">
				<div class="shopMaps fadeUpTrigger">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d206459.04218305784!2d136.0751314689314!3d36.04659642489561!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5ff8beaf3b742b4f%3A0xa41b1476580dbbbd!2z56aP5LqV55yM56aP5LqV5biC!5e0!3m2!1sja!2sjp!4v1664665099050!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
				<div class="shopDetail fadeUpTrigger">
					<ul>
						<li>店名：ABC</li>
						<li>住所：ABC</li>
						<li><div class="accessButton"><a href=""><span>tel.</span>0000-00-0000</a></div></li>
						<li><div class="accessButton"><a href="mailto:info@example.com">Email</a></div></li>
						<li><i class="fa-brands fa-twitter fa-2x"></i><span class="sns-space"></span><i class="fa-brands fa-youtube fa-2x"></i><span class="sns-space"></span><i class="fa-brands fa-line fa-2x"></i></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- <div class="front_content">
			<h2 class="headline">OUR PRFESSIONALS</h2>
			<div class="flex">
				<div class="parallax_staff fadeUpTrigger">
					<img src="http://beautyshop.local/wp-content/uploads/2022/10/staff-1-scaled.jpg" alt="staff-1" class="fadeUpTrigger">
					<div class="staff-prof fadeUpTrigger">
						<p>名前:Michell<br>
							プロフィール:カットが得意です。<br>
							自己紹介:カットの世界大会で優勝経験あり(2020年)
						</p>
					</div>
				</div>
				<div class="parallax_staff fadeUpTrigger">
					<img src="http://beautyshop.local/wp-content/uploads/2022/10/staff-2-scaled.jpg" alt="staff-2" class="fadeUpTrigger">
					<div class="staff-prof fadeUpTrigger">
						<p>名前:Anjela<br>
							プロフィール:カットが得意です。<br>
							自己紹介:カットの世界大会で優勝経験あり(2020年)
						</p>
					</div>
				</div>
				<div class="parallax_staff fadeUpTrigger">
					<img src="http://beautyshop.local/wp-content/uploads/2022/10/staff-3-scaled.jpg" alt="staff-3" class="fadeUpTrigger">
					<div class="staff-prof fadeUpTrigger">
						<p>名前:shelly<br>
							プロフィール:カットが得意です。<br>
							自己紹介:カットの世界大会で優勝経験あり(2020年)
						</p>
					</div>
				</div>
			</div>
		</div> -->
		<div class="front_content">
			<h2>HAIR STYLE</h2>
			<div class="cutStyle">
				<?php
					$arg = array(
						'posts_per_page' => 3, // 表示する件数
						'orderby' => 'date', // 日付でソート
						'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
						'category_name' => 'hairstyles' // 表示したいカテゴリーのスラッグを指定
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
				<?php endforeach; ?>
				<?php endif; wp_reset_postdata();?>
			</div>
			<button class="cutStyle-achieve"><a href="<?php echo home_url('hairstyle'); ?>">See More</a></button>
			<!-- <button class="cutStyle-achieve"><a href="<?php echo esc_url( get_category_link( 4 ) ); ?>">See More</a></button> -->
			<!-- <div class="cutImgbox"> -->
				<?php
					// global $wpdb;
					// $cutSql = "SELECT * FROM {$wpdb->prefix}cutImg";
					// $cutQuery = $wpdb->prepare($cutSql, 1, "PHP");
					// $cutDatas 	= $wpdb->get_results($cutQuery);
					// foreach($cutDatas as $cutData){
					// 	echo $cutData->hairName;
					// }
				?>	
				<!-- <div class="cutImg">
					<img src="http://beautyshop.local/wp-content/uploads/2022/10/hairstyle-17.jpg" alt="hairstyle-17">
					<div class="cutImg-text">
						<p><a href="">ヘアスタイル17</a></p>
					</div>
				</div>
				<div class="cutImg">
					<img src="http://beautyshop.local/wp-content/uploads/2022/10/hairstyle-5.jpg" alt="hairstyle-5">
					<div class="cutImg-text">
						<p><a href="">ヘアスタイル5</a></p>
					</div>
				</div>
				<div class="cutImg">
					<img src="http://beautyshop.local/wp-content/uploads/2022/10/hairstyle-3.jpg" alt="hairstyle-3">
					<div class="cutImg-text">
						<p><a href="">ヘアスタイル3</a></p>
					</div>
				</div>
				<div class="cutImg">
					<img src="http://beautyshop.local/wp-content/uploads/2022/10/hairstyle-11.jpg" alt="hairstyle-11">
					<div class="cutImg-text">
						<p><a href="">ヘアスタイル11</a></p>
					</div>
				</div>
				<div class="cutImg">
					<img src="http://beautyshop.local/wp-content/uploads/2022/10/hairstyle-7.jpg" alt="hairstyle-7">
					<div class="cutImg-text">
						<p><a href="">ヘアスタイル7</a></p>
					</div>
				</div>
				<div class="cutImg">
					<img src="http://beautyshop.local/wp-content/uploads/2022/10/hairstyle-4.jpg" alt="hairstyle-4">
					<div class="cutImg-text">
						<p><a href="">ヘアスタイル4</a></p>
					</div>
				</div>
			</div> -->
		</div>
	</div>
	<!-- </div> -->
</article>
