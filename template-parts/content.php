<section class="card-product">
	<div class="container">
		<div class="product">
			<img class="product__picture" src="<?= the_field('main_picture'); ?>" alt="card-picture"/>

			<div class="content">
				<div class="product-description">
					<h3 class="product-description__title"><?= the_title();?></h3>
					<?= the_excerpt()?>
				</div>
				<div class="product-options">
					
					<h4 class="product-options__title"><?= the_field('title_options_product'); ?></h4>
					<p class="product-options__text">
						<?= the_field('text_options_product'); ?>
					</p>

					<div class="product-options__wrapper">
						<?php
							if( have_rows('options_product') ):
									// перебираем данные
									while ( have_rows('options_product') ) : the_row();
											if( get_row_layout() == 'options_product_add' ):?>
													<div class="option">
														<div class="option__text">
														<?= the_sub_field('description_option'); ?>
														</div>
														<img class="option__colors" src="<?= the_sub_field('color_palette'); ?>"></img>
													</div>
												<?php
											endif;
									endwhile;
							endif;
						?>
					</div>
					<button class="btn"><span>Calculate</span></button>
				</div>
			</div>
		</div>

		<?php if(get_field('moreInfo')): ?>
			<div class="operation">
			<h2 class="operation__title"><?= the_field('subtitle_operation_product'); ?></h2>
			<hr>
			<p class="operation__description">
				<?= the_field('description_operation_product'); ?>
			</p>
			<div class="operation-boxs">
				<div class="operation-boxs__wrapper">
					<?php
							if( have_rows('operations_product') ):
									// перебираем данные
									while ( have_rows('operations_product') ) : the_row();
											if( get_row_layout() == 'operations_product_add' ):?>
													<div class="operation-box">
														<img class="operation-box__picture" src="<?= the_sub_field('picture'); ?>" alt="operation" >
														<hr>
														<h4 class="operation-box__title">
															<?= the_sub_field('tittle'); ?>
														</h4>
														<p class="operation-box__description">
															<?= the_sub_field('description'); ?>
														</p>
													</div>
												<?php
											endif;
									endwhile;
							endif;
						?>
				</div>
			</div>
		</div>
		<?php endif; ?>
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