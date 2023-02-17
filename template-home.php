<?php
/**
 * Template Name: Главная страница
 */
?>
<?php get_header();?>
<main class="main">
      <div class="slider" style="background: url('<?php the_field('fonovaya_kartinka_na_glavnoj');?>') no-repeat; background-size: cover;">
        <div class="container">
          <div class="slider__inner">

          <?php if(have_rows('slajder')) : while(have_rows('slajder')) : the_row()?>
            <div class="slider__item">
              <div class="slider__title">
                 <?php the_sub_field('tekst_v_slajdere');?>
              </div>
            </div>

          <?php endwhile; endif;?>
          </div>
        </div>
      </div>
 
      <section class="main-wrapper">
        <div class="container">
          <div class="heading">
            <h1 class="heading__title">
              <?php the_field('zagolovok_na_glavnoj');?>
            </h1>
            <p class="heading__subtitle">
              <?php the_field('podzagolovok_na_glavnoj');?>
            </p>
            <a href="#" class="heading__btn">
              Заказать автомобиль
            </a>
          </div>
        </div>

        <div class="advantages">
          <div class="container">
            <div class="advantages__title">Наши преимущества</div>
            <div class="advantages__inner">

            <?php if(have_rows('nashi_preimushhestva')) : while(have_rows('nashi_preimushhestva')) : the_row();?>
              <div class="advantages__item">
                <div class="advantages__item-img">
                  <img src="<?php the_sub_field('nashi_preimushhestva_izobrazhenie');?>" alt="img">
                </div>
                <div class="advantages__item-title"><?php the_sub_field('nashi_preimushhestva_zagolovok');?></div>
                <p class="advantages__item-text">
                <?php the_sub_field('nashi_preimushhestva_tekst');?>
                </p>
              </div>
            <?php endwhile; endif;?>
             

            </div>
          </div>
        </div>


        <div class="procces">
          <div class="container">
            <div class="procces__title">Процесс выбора и покупки, схема</div>
            <div class="procces__inner">

            <?php if(have_rows('proczess_vybora')) : while(have_rows('proczess_vybora')) : the_row();?>
              <div class="procces__item">
                <div class="procces__box">
                  <div class="procces__item-img">
                    <img src="<?php the_sub_field('proczess_vybora_izobrazhenie');?>" alt="img">
                  </div>
                  <div class="procces__content">
                    <div class="procces__item-title"><?php the_sub_field('proczess_vybora_zagolovok');?></div>
                    <p class="procces__item-text">
                    <?php the_sub_field('proczess_vybora_tekst');?>
                    </p>
                  </div>
                </div>
              </div>
            <?php endwhile; endif;?>
             
            </div>
          </div>
        </div>
      </section>

      <section class="auto">
        <div class="container">
          <div class="auto-cart">
            <div class="auto-cart__item">
              <div class="auto-cart__item-img">
                <img src="<?php the_field('kartochka_mashiny_izobrazhenie1');?>" alt="img">
              </div>
              <div class="auto-cart__item-text"><?php the_field('kartochka_mashiny_mesto1');?></div>
              <div class="auto-cart__item-text"><?php the_field('kartochka_mashiny_razmery1');?></div>
              <div class="auto-cart__item-price--ru"><?php the_field('kartochka_mashiny_rubli_1');?></div>
              <div class="auto-cart__item-price--en"><?php the_field('kartochka_mashiny_valyuta_1');?></div>
            </div>

            <div class="auto-cart__item">
              <div class="auto-cart__item-img">
                <img src="<?php the_field('kartochka_mashiny_izobrazhenie_2');?>" alt="img">
              </div>
              <div class="auto-cart__item-text"><?php the_field('kartochka_mashiny_mesto_2');?></div>
              <div class="auto-cart__item-text"><?php the_field('kartochka_mashiny_razmery_2');?></div>
              <div class="auto-cart__item-price--ru"><?php the_field('kartochka_mashiny_rubli_2');?></div>
              <div class="auto-cart__item-price--en"><?php the_field('kartochka_mashiny_valyuta_2');?></div>
            </div>

            <div class="auto-cart__item ">
              <div class="auto-cart__item-img">
                <img src="<?php the_field('kartochka_mashiny_izobrazhenie_3');?>" alt="img">
              </div>
              <div class="auto-cart__item-text"><?php the_field('kartochka_mashiny_mesto_3');?></div>
              <div class="auto-cart__item-text"><?php the_field('kartochka_mashiny_razmery_3');?></div>
              <div class="auto-cart__item-price--ru"><?php the_field('kartochka_mashiny_rubli_3');?></div>
              <div class="auto-cart__item-price--en"><?php the_field('kartochka_mashiny_valyuta_3');?></div>
            </div>

            <div class="auto-cart__item hide">
              <div class="auto-cart__item-img">
                <img src="<?php the_field('kartochka_mashiny_izobrazhenie_4');?>" alt="img">
              </div>
              <div class="auto-cart__item-text"><?php the_field('kartochka_mashiny_mesto_4');?></div>
              <div class="auto-cart__item-text"><?php the_field('kartochka_mashiny_razmery_4');?></div>
              <div class="auto-cart__item-price--ru"><?php the_field('kartochka_mashiny_rubli_4');?></div>
              <div class="auto-cart__item-price--en"><?php the_field('kartochka_mashiny_valyuta_4');?></div>
            </div>

            <div class="auto-cart__item hide">
              <div class="auto-cart__item-img">
                <img src="<?php the_field('kartochka_mashiny_izobrazhenie_5');?>" alt="img">
              </div>
              <div class="auto-cart__item-text"><?php the_field('kartochka_mashiny_mesto_5');?></div>
              <div class="auto-cart__item-text"><?php the_field('kartochka_mashiny_razmery_5');?></div>
              <div class="auto-cart__item-price--ru"><?php the_field('kartochka_mashiny_rubli_5');?></div>
              <div class="auto-cart__item-price--en"><?php the_field('kartochka_mashiny_valyuta_5');?></div>
            </div>

            <div class="auto-cart__item hide">
              <div class="auto-cart__item-img">
                <img src="<?php the_field('kartochka_mashiny_izobrazhenie_6');?>" alt="img">
              </div>
              <div class="auto-cart__item-text"><?php the_field('kartochka_mashiny_mesto_6');?></div>
              <div class="auto-cart__item-text"><?php the_field('kartochka_mashiny_razmery_6');?></div>
              <div class="auto-cart__item-price--ru"><?php the_field('kartochka_mashiny_rubli_6');?></div>
              <div class="auto-cart__item-price--en"><?php the_field('kartochka_mashiny_valyuta_6');?></div>
            </div>
          </div>
          <button class="auto-cart__btn">Показать ещё</button>
        </div>

        <div class="brend">
          <div class="container">
            <div class="brend__title">
              Несмотря на санкции, запреты и ограничения, работаем с аукционами и официальными диллерами
            </div>
            <div class="brend__inner">

            <?php if(have_rows('brend_na_glavnoj_desktop')) : while(have_rows('brend_na_glavnoj_desktop')) : the_row();?>
              <div class="brend__item">
                <img src="<?php the_sub_field('brend_desktop_izobrazhenie');?>" alt="img">
              </div>
             <?php endwhile; endif;?>
            </div>
          </div>
        </div>

        <div class="brend-slider">
          <div class="container">
            <div class="brend-slider__inner">

            <?php if(have_rows('brend_na_glavnoj_mobilka')) : while(have_rows('brend_na_glavnoj_mobilka')) : the_row();?>
              <div class="brend-slider__item">
                <img src="<?php the_sub_field('brend_mobilka_izobrazhenie');?>" alt="img">
              </div>
             <?php endwhile; endif;?>
            </div>
          </div>
        </div>
      </section>
</main>
<?php get_footer();?>