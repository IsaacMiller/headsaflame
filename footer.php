<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Heads Aflame Magazine
 */
?>
  <br/>
  <br/>
  <hr class="content-heading">
      <footer class="site-footer">
      <div class="row">
        <div class="large-4 columns footer-left">
          Imagined by <a target="_blank" href="http://headsaflamemedia.com">Heads Aflame Media</a>
        </div>
        <div class="large-4 columns footer-links">
              <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

        </div>
        <div class="large-3 columns">
          <ul class="social-icons">
          <li><a href="http://facebook.com/headsaflame" target="_blank" aria-hidden="true" data-icon="&#xe000;"></a></li>
          <li><a href="http://twitter.com/headsaflame" target="_blank"  aria-hidden="true" data-icon="&#xe00a;"></a></li>
          <li><a href="http://www.youtube.com/channel/UCLiRQK__b9rXlwtBlyUGEHw" target="_blank"  aria-hidden="true" data-icon="&#xf167;"></a></li>
          <li><a href="http://headsaflame.com/feed/rss/" target="_blank"  aria-hidden="true" data-icon="&#xe00b;"></a></li>
          </ul>
        </div>
      </div>
      </footer>

  </div><!-- / 12 columns -->
</div><!-- / #main-content -->

<!-- Left menu element-->
<div class="hidden-menu cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left">
<?php if ( is_active_sidebar( 'sidebar-hidden' ) ) : ?>

    <div class="widget-area">
        <?php dynamic_sidebar( 'sidebar-hidden' ); ?>
    </div><!-- .widget-area -->

<?php else : ?>


<?php endif; ?>

</div>

<script type="text/javascript">
(function($){ //create closure so we can safely use $ as alias for jQuery

  $(document).ready(function(){
    
    var dropdownnavOptions = {
      speed: 'fast',
      delay:       100,  
      animation: {opacity:'show',height:'show'},
      animationOut:  {opacity:'hide'}
    }
    // initialise plugin
    var dropdownnav = $('#dropdownnav').superfish(dropdownnavOptions);

    // buttons to demonstrate Superfish's public methods
    $('.destroy').on('click', function(){
      dropdownnav.superfish('destroy');
    });

    $('.init').on('click', function(){
      dropdownnav.superfish(dropdownnavOptions);
    });

    $('.open').on('click', function(){
      dropdownnav.children('li:first').superfish('show');
    });

    $('.close').on('click', function(){
      dropdownnav.children('li:first').superfish('hide');
    });
  });

})(jQuery);

jQuery(document).ready(function($) {
  $('.toggle-menu').jPushMenu({'closeOnClickOutside': false});
});

jQuery(document).ready(function($) {

    var value = 0
    $("#menu-icon").rotate({
        bind: {
            click: function() {
                value += 90;
                $(this).rotate({
                    animateTo: value,
                    duration: 500
                })
            }
        }

    });

});

jQuery(document).foundation();
</script>
<script type="text/javascript">
function fbs_click(width, height) {
    var leftPosition, topPosition;
    //Allow for borders.
    leftPosition = (window.screen.width / 2) - ((width / 2) + 10);
    //Allow for title and status bars.
    topPosition = (window.screen.height / 2) - ((height / 2) + 50);
    var windowFeatures = "status=no,height=" + height + ",width=" + width + ",resizable=yes,left=" + leftPosition + ",top=" + topPosition + ",screenX=" + leftPosition + ",screenY=" + topPosition + ",toolbar=no,menubar=no,scrollbars=no,location=no,directories=no";
    u=location.href;
    t=document.title;
    window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer', windowFeatures);
    return false;
}
</script>

<?php wp_footer(); ?>

<style>
.fb_reset {margin-bottom:-16px;}

</style>
<script type="text/javascript" src="/chat/external.php?type=djs" charset="utf-8"></script>
<script type="text/javascript" src="/chat/external.php?type=js" charset="utf-8"></script>
</body>
</html>