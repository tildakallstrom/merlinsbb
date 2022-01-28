
  <footer>
  <div class="footermiddle">
  <?php

if (dynamic_sidebar('LeftFooter')) : endif;
?>

<?php

if (dynamic_sidebar('RightFooter')) : endif;
?>
</div>

   
        <script src='<?php echo get_template_directory_uri(); ?>/js/script.js'></script>
  </footer>
         <?php wp_footer(); ?> 
      </body>
      </html>