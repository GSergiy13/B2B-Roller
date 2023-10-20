<?php get_header(); ?>

<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
		endwhile; 
?>

<?php 
$current_post_id = get_the_ID();

	$posts = get_posts( array(
			'numberposts' => 3,
			'category_name'    => 'products_all',
			'orderby'     => 'date',
			'order'       => 'ASC',
			'post_type'   => 'post',
			'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
			'exclude' => array($current_post_id) 
	) );

	foreach( $posts as $post ){
			setup_postdata($post);
			?>

		<section class="other-product">
			<div class="container">
				<div class="other-product__wrapper">
					<div class="picture">
						<img class="picture__img" src="<?= the_field('main_picture'); ?>" alt="other-product">
					</div>
					<div class="content">
						<h3 class="content__title">
							<?= the_title();?>
						</h3>
						<p class="content__desc">
							<?= the_excerpt()?>
						</p>

						<h4 class="content__subtitle">Types Of Skylights:</h4>

						<div class="boxs">
							<div class="box">
								Conventional, for smaller windows
							</div>
							<div class="box">
								Zip screen hybrid, designed to work on medium size windows
							</div>
							<div class="box">
								Zip screen skylights, designed for large size windows.
							</div>
						</div>
						<a class="btn" href="#" ><span>Calculate</span></a>
					</div>
				</div>
			</div>
		</section>

		<section class="gallery">
			<h2 class="title-all"><?= the_field('gallery_title', 11); ?></h2>

			<div class="gallery__wrapper">
				<div class="swiper-s-prev"></div>
				<div class="swiper-s-next"></div>

				<div class="swiper">
					<div class="swiper-wrapper">
						<?php
							if( have_rows('gallery_produt') ):
									// перебираем данные
									while ( have_rows('gallery_produt') ) : the_row();
											if( get_row_layout() == 'gallery_produt_add' ):?>
													<div class="swiper-slide">
														<div class="gallery-box">
															<img class="gallery-box__picture" src="<?= the_sub_field('slide_picture'); ?>" alt="gallery">
														</div>
													</div>
												<?php
											endif;
									endwhile;
							endif;
						?>
					</div>
				</div>
			</div>
		</section>

		<?php
		}
		wp_reset_postdata(); // сброс
?>



<?php get_template_part( 'template-parts/sections/faq' );?>
<?php get_template_part( 'template-parts/sections/communication' );?>


<?php get_footer();