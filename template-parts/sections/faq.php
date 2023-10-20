<section class="faq" id="faq">
  <div class="container">
    <h2 class="title-all"><?= the_field('faq_title', 8); ?></h2>

    <div class="faq__wrapper">
      <?php
          if( have_rows('faq_boxs', 8) ):
              // перебираем данные
              while ( have_rows('faq_boxs', 8) ) : the_row();
                  if( get_row_layout() == 'faq_boxs_add' ):?>
                      <div class="faq-box">
                        <div class="faq-box__head">
                          <h3 class="faq-box__head-title">
                          <?= the_sub_field('faq_block_title'); ?>
                          </h3>

                          <div class="faq-box__head-icon"></div>
                        </div>

                        <div class="faq-box__body">
                          <div class="faq-box__body-text">
                            <p>
                            <?= the_sub_field('faq_description_block'); ?>
                            </p>
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
</section>