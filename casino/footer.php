


<footer class="footer">

    <?php 

              $footer_logo = get_field('menu_footer', 'options');
            ?>
    <img class="top-10-casino-hotels-wordlwide-1-1" src="<?php echo $footer_logo['logo']; ?>" alt="top 10 casino hotels wordlwide 1" />
    <?php 

              $footer = get_field('menu_footer', 'options');
            ?>
    <div class="menu-categories poppins-normal-wild-sand-16px">
      <div class="menu-categories-item"><?php echo $footer['menu_1']; ?></div>
      
      <div class="menu-categories-item"><?php echo $footer['menu_2']; ?></div>
      <div class="menu-categories-item"><?php echo $footer['menu_3']; ?></div>
      <div class="menu-categories-item"><?php echo $footer['menu_4']; ?></div>
    </div>
    <img class="line-1" src="<?php echo get_template_directory_uri() ?>/img/line-1-1.svg" alt="Line 1" />
    <div class="frame-11175">
      <img class="image-3" src="<?php echo get_template_directory_uri() ?>/img/image-3-1@2x.png" alt="image 3" />
      <img class="x18-icon" src="<?php echo get_template_directory_uri() ?>/img/18--icon-1.svg" alt="18+ icon" />
    </div>
    
    <p class="x2022-top-10-casino"><?php echo $footer['copyright']; ?></p>


</footer>
</div>
</div>

<?php wp_footer(); ?>
</body>
</html>