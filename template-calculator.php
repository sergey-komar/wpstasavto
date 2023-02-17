<?php
/**
 * Template Name: Страница калькулятора
 */
?>
<?php get_header();?>
<main class="main">
    <div class="container">
        <ul class="breadcrumbs">
        <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
        </ul>
    </div>
    <h1>Калькулятор</h1>
</main>
<?php get_footer();?>