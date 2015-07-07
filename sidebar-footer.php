<aside id="footer">

<?php if ( is_active_sidebar( 'footer' ) ) : ?>  

<?php dynamic_sidebar( 'footer' ); ?>

<?php else : ?>
<?php /*?>Put default sidebar content here<?php */?>


<div class="widget" id="footer-social">
    <ul>
        <li><a href="www.facebook.com"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook.png" alt="Facebook"></a></li>
        <li><a href="twitter.com"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter.png" alt="Twitter"></a></li>
    </ul>
</div><!--end widget-footer-social-->
       
<?php endif; ?>
</aside><!-- /footer -->