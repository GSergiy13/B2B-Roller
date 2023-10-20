<?php
/**
 * Template Name: Automation
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

<section class="promo promo-automation">
	<div class="container">
		<h1 class="title">
			<?= the_field('promo_title'); ?>
		</h1>

		<div class="video">
			<img class="video__picture" src="<?= the_field('promo_picture'); ?>" alt="video">
		</div>
		<hr>
	</div>
</section>

<section class="automation">
	<div class="container">
		<!-- <hr> -->
		<div class="automation__content">
			<p class="automation__content-text">
			<?= the_field('automation_description'); ?>
			</p>
		</div>
		<h2 class="automation__title"><?= the_field('automation_title'); ?></h2>
		<p class="automation__desc"><?= the_field('automation_subtitle'); ?>
		</p>

		<div class="partners">
		<?php
					if( have_rows('automation_partner') ):
							// перебираем данные
							while ( have_rows('automation_partner') ) : the_row();
									if( get_row_layout() == 'automation_partner_add' ):?>
											<div class="partners__item">
												<div class="partners__picture">
													<img class="partners__picture-logo" src="<?php echo the_sub_field('partner_logo'); ?>" alt="logo-partners">
												</div>
												<hr>
												<p class="partners__name"><?php echo the_sub_field('partner_name'); ?></p>
											</div>

										<?php
									endif;
							endwhile;
					endif;
				?>
		</div>
	</div>
</section>

<?php get_template_part( 'template-parts/sections/communication' );?>
<?php get_footer() ?>