<?php
/**
 * Template Name: Resources
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

<section class="promo promo-resources">
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

<section class="resources">
	<div class="container">
		<div class="resources__wrapper">
		<?php
			if( have_rows('drop_list') ):
					// перебираем данные
					while ( have_rows('drop_list') ) : the_row();
							if( get_row_layout() == 'drop_list_add' ):
									?>
									<div class="drop-box">
											<div class="drop-box__head">
													<h2 class="drop-box__title"><?php echo the_sub_field('visibility_content'); ?></h2>
													<div class="drop-box__icon"></div>
											</div>
											<div class="drop-box__body">
													<div class="drop-box__body-wrapper">
															<?php
															if( have_rows('hidden_content') ):
																	// перебираем данные
																	while ( have_rows('hidden_content') ) : the_row();
																			if( get_row_layout() == 'add_download_file' ):
																					$file_url = get_sub_field('download-box_file'); // Получаем URL файла из ACF поля
																					if ($file_url) {
																							$file_path = parse_url($file_url)['path']; // Получаем путь к файлу из URL
																							$file_name_with_extension = basename($file_path); // Получаем имя файла с расширением
																							$file_name = pathinfo($file_name_with_extension, PATHINFO_FILENAME); // Извлекаем имя файла без расширения
																							$file_size_bytes = filesize($_SERVER['DOCUMENT_ROOT'] . $file_path); // Получаем размер файла в байтах
																							$file_size_mb = round($file_size_bytes / 1024 / 1024, 2); // Конвертируем размер файла в мегабайты с округлением

																							?>
																							<div class="card-file">
																									<div class="card-file__picture">
																											<img class="card-file__picture-icon" src="<?= bloginfo('template_url');?>/assets/img/pdf-icon.svg" alt="pdf-icon">
																											<p class="card-file__picture-size">
																													<?php echo $file_size_mb; ?> MB
																											</p>
																									</div>
																									<div class="card-file__content">
																											<h3 class="card-file__content-title">
																													<?php echo $file_name; ?>
																											</h3>
																											<a class="card-file__content-btn" href="<?php echo $file_url; ?>" download>Download</a>
																									</div>
																							</div>
																							<?php
																					}
																			endif;
																	endwhile;
															endif;
															?>
													</div>
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

<?php get_footer() ?>