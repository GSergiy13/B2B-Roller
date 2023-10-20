<?php
/**
 * Template Name: Fabrics
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


<section class="promo promo-fabrics">
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

<section class="fabrics">
	<div class="container">
		<p class="fabrics__description">
			<?= the_field('fabrics_description'); ?>
		</p>

		<h2 class="title-all">
			<?= the_field('fabrics_title'); ?>
		</h2>

			<div class="tab-navigation">
				<?php
					if( have_rows('navigation_buttton') ):
							// перебираем данные
							while ( have_rows('navigation_buttton') ) : the_row();
									if( get_row_layout() == 'navigation_buttton_add' ):?>
											<div class="tab-navigation__item" data-filter="<?php echo the_sub_field('indificator'); ?>">
											<?php echo the_sub_field('text_button'); ?>
											</div>
										<?php
									endif;
							endwhile;
					endif;
				?>
			</div>

			<div class="tab-contents">
					<div class="grid">
					<?php
						if( have_rows('fabrics_cards') ):
								// перебираем данные
								while ( have_rows('fabrics_cards') ) : the_row();
										if( get_row_layout() == 'fabrics_cards_add' ):?>

										<div class="item <?php 
										$getSizeCard = get_sub_field('size_card');

										if($getSizeCard !== 'defolt') 
										{
											echo $getSizeCard;
										} 
										?> <?php echo the_sub_field('indicator_card')?>">
												<div class="item-content ">
													<img class="item-content__picture" src="<?php echo the_sub_field('picture_card'); ?>" alt="fabric">
													<hr>
													<h2 class="item-content__title">
													<?php echo the_sub_field('name_card'); ?>
													</h2>
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

<?php get_template_part( 'template-parts/sections/communication' );?>

<?php get_footer() ?>