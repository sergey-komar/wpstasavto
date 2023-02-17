<?php
/**
 * Template Name: Страница Стоимости
 */
?>
<?php get_header();?>
<main class="main main-price">
    <div class="container">
        <ul class="breadcrumbs">
        <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
        </ul>
    </div>


    <section class="price">
        <div class="container">
            <h1 class="price__title"><?php the_field('stoimost_zagolovok');?></h1>
            <p class="price__subtitle">
            <?php the_field('stoimost_podzagolovok');?>
            </p>
            <p class="price__text">
            <?php the_field('stoimost_tekst_odin');?>
            </p>
            <p class="price__text">
            <?php the_field('stoimost_tekst_dva');?>
            </p>
        </div>


        <div class="transport">
            <div class="container">
                <div class="transport__title">
                <?php the_field('vashi_sredstva_zagolovok');?>
                </div>
                <ul class="transport__list">

                <?php if(have_rows('pokupka_za_vashi_sredstva')) : while(have_rows('pokupka_za_vashi_sredstva')) : the_row();?>
                    <li class="transport__list-item">
                        <?php the_sub_field('pokupka_za_vashi_sredstva_tekst');?>
                    </li>
                <?php endwhile; endif;?>
                </ul>
            </div>
        </div>

        <div class="transport">
            <div class="container">
                <div class="transport__title">
                <?php the_field('nashi_sredstva_zagolovok');?>
                </div>
                <ul class="transport__list">

                <?php if(have_rows('pokupka_za_nashi_sredstva')) : while(have_rows('pokupka_za_nashi_sredstva')) : the_row();?>
                    <li class="transport__list-item">
                    <?php the_sub_field('pokupka_za_nashi_sredstva_tekst');?>
                    </li>
                <?php endwhile; endif;?> 
                </ul>
            </div>
        </div>


        <div class="price__block">
            <div class="container">
                <div class="price__block-text">
                <?php the_field('dorozhe_50000');?>
                </div>
                <a href="#" class="price__block-btn">Рассчитать</a>
            </div>
        </div>

        <div class="transport transport--bottom">
            <div class="container">
                <div class="transport__title transport__title-price">
                    Все расходы прозрачны:
                </div>
                <ul class="transport__list">

                <?php if(have_rows('rashody_prozrachny')) : while(have_rows('rashody_prozrachny')) : the_row();?>
                    <li class="transport__list-item">
                    <?php the_sub_field('rashody_prozrachny_tekst');?>
                    </li>
                <?php endwhile; endif;?>  
                </ul>
            </div>
        </div>
    </section>
</main>
<?php get_footer();?>