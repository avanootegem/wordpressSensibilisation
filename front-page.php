<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage themeSensibilisation
 * @since themeSensibilisation 1.0
 */

get_header();
?>

<?php if(have_posts()) : ?>
    <?php 
    $turn = 1; ?>
    
    <?php while(have_posts()): the_post(); ?>
        <section id="<?= pages($turn)?>">
            <?php the_content();
            $turn ++?>
        </section>
        
    <?php endwhile ?>
<?php else : ?>

<?php endif; ?>

<?php
get_footer();
