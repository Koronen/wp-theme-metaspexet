<?php
/**
 * Footer Page
 *
 * @package METAspexet
 */

?>
        </div>
        <div id="bulletin_right"></div>
        <div class="clearfix"></div>
        <div id="bulletin_bottom"></div>
    </div>
    <aside  id="main_right">
        <?php get_sidebar('right'); ?>
    </aside >

</section>
  <footer>
  </footer>


  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php bloginfo('template_directory'); ?>/js/libs/jquery-1.6.2.min.js"><\/script>')</script>


  <!-- scripts concatenated and minified via ant build script-->
  <script defer src="<?php bloginfo('template_directory'); ?>/js/plugins.js"></script>
  <script defer src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>
  <script defer src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
  <script defer src="<?php bloginfo('template_directory'); ?>/js/jquery.scrollbarpaper.min.js"></script>
  <link rel="stylesheet" type="text/css" media="screen" defer src="<?php bloginfo('template_directory'); ?>/js/jquery.scrollbarpaper.css" />
  <script type="text/javascript">
$(function() {
  $('#main_container').scrollbarPaper();
});
</script>
  <!-- end scripts-->


  <!-- Change UA-XXXXX-X to be your site's ID -->
  <script>
    window._gaq = [['_setAccount','UA-29384661-1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>
  


  <?php wp_footer(); ?>

  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->

</body>
</html>