</div><!--end wrapper-->

<footer>
    <div class="footer-box">
    <nav id="nav-footer">
        <?php wp_nav_menu( array( 
			'theme_location' => 'footer-menu' ,
			'menu' => 'Footer Menu' ,
			'container'  => 'ul', 
            'menu_id' => 'footer'
		) ); ?>
    </nav>
    
        <div class="footer-cat">
            <?php
            $args = array(
              'orderby' => 'name',
              'parent' => 0
              );
            $categories = get_categories( $args );
            foreach ( $categories as $category ) {
                echo '<a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a><br/>';
            }?>
        </div><!--end footer-cat-->
        
        <nav class="footer-social">
            <ul>
        <li><a href="https://www.facebook.com/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook.png" alt="Facebook"></a></li>
        <li><a href="https://twitter.com/myjeepleaks?lang=en"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter.png" alt="Twitter"></a>
                </li>
    </ul>
            <?php get_sidebar('footer'); ?>
        </nav><!--end footer-social-->
        </div><!--end footer-box-->
</footer>
    <div class="copyright">
        <ul>
            <li><a href="http://darkmassdesign.com">Design By Dark Mass Design</a></li>
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/author/jeff/">Authored by Jeff Randall</a> </li>
            <li>All Rights Reserved</li>
            <li>Copyright &copy; <?=date ('Y')?></li>
        </ul>
    </div><!--end copywrite-->
    
<!-- begin validation buttons -->
<p>
<a href="http://validator.w3.org/check?uri=referer">
  <img src="http://www.w3.org/html/logo/badge/html5-badge-h-solo.png" 
  width="31" height="32" alt="valid HTML5" />
 </a>
 <a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3">
  <img src="http://jigsaw.w3.org/css-validator/images/vcss" 
   alt="Valid CSS3" height="31" width="88" />
</a>
</p>
<!-- end validation buttons -->

<?php /* wp_footer function must be last item before closing body tag: many plugins use this hook to reference JavaScript files */ ?>
<?php wp_footer(); ?> 
</body>
</html>