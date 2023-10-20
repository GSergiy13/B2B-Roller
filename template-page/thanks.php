<?php
/**
 * Template Name: Thanks
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

<section class="gratitude">
    <div class="container">
      <h1 class="title"> <?= the_field('title'); ?></h1>
      <h2 class="subtitle"> <?= the_field('subtitle'); ?></h2>

      <div class="gratitude__wrapper">
        <p class="gratitude__text">
        <?= the_field('text'); ?>
        </p>
        <hr>
        <a class="btn" href="<?= the_field('button_link'); ?>"><span> <?= the_field('button_text'); ?></span></a>
      </div>

    </div>
</section>


<?php get_footer() ?>