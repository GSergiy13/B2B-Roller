<section class="communication">
    <div class="container">
      <div class="communication__wrapper">
        <div class="content">
          <h3 class="content__subtitle">
            <?= the_field('contact_subtitle', 8)?>
          </h3>
          <h2 class="content__title">
          <?= the_field('contact_title', 8)?>
          </h2>
          <p class="content__text">
          <?= the_field('contact_text', 8)?>
          </p>
        </div>

        <div class="form">
          <?= do_shortcode( '[contact-form-7 id="ca8c096" title="GetContact"]' )?>


          <div class="agreement">
              <input type="checkbox" id="highload1" name="highload1" checked required>
              <label for="highload1"  class="lb1"></label>

              <div class="agreement__text">
                <?= the_field('agreement_text', 8)?>
              </div>
            </div>
        </div>
      </div>
    </div>
  </section>