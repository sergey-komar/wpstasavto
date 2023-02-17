<?php
/**
 * Template Name: Страница контактов
 */
?>
<?php get_header();?>
<main class="main">

    <section class="contacts" style="background: url('<?php the_field('kontakty_kartinka');?>') no-repeat; background-size: cover;" >
    
        <div class="container">
            <ul class="breadcrumbs">
            <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
            </ul>
        </div>
        <div class="container">
            <h1 class="contacts__title"></h1>
            <div class="contacts__block">
               <a href="<?php the_field('kontakty_telefon_ssylka');?>" class="contacts__item phone">
               <?php the_field('kontakty_telefon');?>
                </a>
               <a href="<?php the_field('kontakty_vatczap_ssylka');?>" class="contacts__item whatsap">
               <?php the_field('kontakty_vatczap');?>
                </a>
               <a href="<?php the_field('kontakty_pochta_ssylka');?>" class="contacts__item email">
               <?php the_field('kontakty_pochta');?>
                </a>
               <a href="#" class="contacts__item adrress">
                <?php the_field('kontakty_adres');?>
                </a>
            </div>
            <div class="contacts__subtitle">Мы на карте:</div>
        </div>
    </section>
    <div class="map">
        <script  type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Adabcf24e1db66fa5f7382913f86a8c4e1756a26f58f5e1dcd9d5d216505a4cf7&amp;width=100%25&amp;lang=ru_RU&amp;scroll=false"></script>
    </div>

</main>
<?php get_footer();?>