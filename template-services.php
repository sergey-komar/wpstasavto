<?php
/**
 * Template Name: Страница Услуг
 */
?>
<?php get_header();?>
<main class="main main-services">
    <div class="container">
        <ul class="breadcrumbs">
            <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
        </ul>
    </div>

    <section class="services">
        <div class="container">
            <h1 class="services__title">Услуги</h1>
        </div>

        <div class="selection">
            <div class="container">
               <div class="selection__block">
                    <div class="selection__title"><?php the_field('uslugi_zagolovok');?></div>
                    <p class="selection__subtitle">
                       <?php the_field('uslugi_podzagolovok');?>
                    </p>

                    <?php if(have_rows('uslugi_podbor')) : while(have_rows('uslugi_podbor')) : the_row();?>
                    <div class="selection__item">
                        <div class="selection__item-number"><?php the_sub_field('uslugi_podbor_nomer');?></div>
                        <div class="selection__item-img">
                            <img src="<?php the_sub_field('uslugi_podbor_izobrazhenie');?>" alt="img">
                        </div>
                        <div class="selection__item-box">
                            <div class="selection__item-box-title">
                               <?php the_sub_field('uslugi_podbor_zagolovok');?>
                            </div>
                            <p class="selection__item-box-text">
                                <?php the_sub_field('uslugi_podbor_tekst');?>
                            </p>
                        </div>
                    </div>

                    <?php endwhile; endif;?>
               </div>
            </div>
        </div>

        <div class="purchase">
            <div class="container">
                <div class="purchase__block">
                    <div class="purchase__title">Покупка</div>

                    <?php if(have_rows('uslugi_pokupka')) : while(have_rows('uslugi_pokupka')) : the_row();?>
                    <p class="purchase__text">
                      <?php the_sub_field('uslugi_pokupka_tekst');?>
                    </p>

                    <?php endwhile; endif;?>
                   
                </div>
            </div>
        </div>

        <div class="guarantee">
            <div class="container">
                <div class="guarantee__title">Мы гарантируем:</div>
                <ul class="guarantee__list">

                <?php if(have_rows('uslugi_my_garantiruem')) : while(have_rows('uslugi_my_garantiruem')) : the_row();?>
                    <li class="guarantee__list-item"> 
                       <?php the_sub_field('uslugi_my_garantiruem_tekst');?>
                    </li>
                <?php endwhile; endif;?>
                </ul>
            </div>
            <button class="guarantee__btn">Показать ещё</button>
        </div>

        <div id="guarantee" class="guarantee  hide">
            <div class="container">
                <div class="guarantee__title">Мы не несем ответственность за:</div>
                <ul class="guarantee__list">

                <?php if(have_rows('uslugi_my_ne_nesyom_otvetstvennost')) : while(have_rows('uslugi_my_ne_nesyom_otvetstvennost')) : the_row();?>
                    <li class="guarantee__list-item"> 
                        <?php the_sub_field('uslugi_my_ne_nesyom_otvetstvennost_tekst');?>
                    </li>
                <?php endwhile; endif;?>
                </ul>
            </div>
        </div>


        <div class="decor hide">
            <div class="container">
                <div class="decor__block">
                    <div class="decor__title">Таможенное оформление</div>
                    <p class="decor__text">
                       <?php the_field('uslugi_tamozhennoe_oformlenie_tekst_vverhu');?>
                    </p>
                    <ul class="decor__list">

                    <?php if(have_rows('uslugi_tamozhennoe_oformlenie_spisok')) : while(have_rows('uslugi_tamozhennoe_oformlenie_spisok')) : the_row();?>
                        <li class="decor__list-item">
                             <?php the_sub_field('uslugi_tamozhennoe_oformlenie_spisok_tekst');?>
                        </li>
                     <?php endwhile; endif;?>
                    </ul>
                    <p class="decor__text">
                        <?php the_field('uslugi_tamozhennoe_oformlenie_tekst_vnizu');?>
                    </p>
                    <a href="#" class="decor__btn">Рассчитать</a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer();?>