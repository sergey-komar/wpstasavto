<?php
?>
<footer class="footer">
      <div class="container">
        <div class="footer__inner">
         
          <?php
            wp_nav_menu([
              'theme_location' => 'footer-menu',
              'menu_class' => 'footer__menu',
              'container' => ''
            ])
          ?>
          <div class="footer__copyright">
            ©2023 Автомобиль «под ключ» с гарантией. Все права защищены
          </div>
        </div>
      </div>
      
      <?php wp_footer();?>
    </footer>
   



  
</body>

</html>