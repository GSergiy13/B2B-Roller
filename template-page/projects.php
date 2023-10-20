<?php
/**
 * Template Name: Projects
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package b2b-thame
 */

// Build the  Shortcode
?>

<?= get_header();?>

<section class="promo promo-products">
		<div class="container">
			<h2 class="subtitle"><?= the_field('promo_subttitle'); ?></h2>
			<h1 class="title">
				<?= the_field('promo_title'); ?>
			</h1>

			<div class="video">
				<img class="video__picture" src="<?= the_field('promo_picture'); ?>" alt="video">
			</div>
			<hr>
		</div>
</section>

<section class="products-all">
			<div class="container">
				<div class="products-all__wrapper">
					<?php
							$my_posts = get_posts( array(
								'numberposts' => -1,
								'category'    => 'products_all',
								'orderby'     => 'date',
								'order'       => 'ASC',
								'post_type'   => 'post',
								'suppress_filters' => true, 
							) );

							global $post;

							foreach( $my_posts as $post ){
								setup_postdata( $post );
								?>
									<div class="product-box">
											<div class="product-box__head">
												<div class="product-box__picture">
													<img class="product-box__picture-img" src="<?= the_field('main_picture'); ?>" alt="product">
												</div>
												<hr>
												<h3 class="product-box__title"><?= the_title();?></h3>
												<p>
												<?= mb_substr(get_the_excerpt(), 0, 140, 'UTF-8') . '...' ?>
												</p>
											</div>

											<a class="learn-more" href="<?php echo get_permalink(); ?>">
												Learn more
											</a>
										</div>
								<?php
							}

							wp_reset_postdata(); 
					?>
				</div>
			</div>
		</section>

		<section class="gallery">
			<h2 class="title-all"><?= the_field('gallery_title'); ?></h2>

			<div class="gallery__wrapper">
				<div class="swiper-s-prev"></div>
				<div class="swiper-s-next"></div>

				<div class="swiper">
					<div class="swiper-wrapper">


					<?php
							if( have_rows('gallery_items') ):
									// перебираем данные
									while ( have_rows('gallery_items') ) : the_row();
											if( get_row_layout() == 'gallery_items_add' ):?>
												<div class="swiper-slide">
													<div class="gallery-box">
														<img class="gallery-box__picture" src="<?php echo the_sub_field('picture'); ?>" alt="gallery">
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


<?php get_template_part( 'template-parts/sections/faq' );?>
<?php get_template_part( 'template-parts/sections/communication' );?>

<?php get_footer() ?>