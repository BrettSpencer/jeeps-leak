<aside id="primary">

<?php if ( is_active_sidebar( 'primary' ) ) : ?>  

<?php dynamic_sidebar( 'primary' ); ?>

<?php else : ?>
<?php /*?>Put default sidebar content here<?php */?>

	  <?php get_search_form(); ?>
      <div class="widget" id="aside-cat">
        <h3>Categories</h3>
            <ul>
                <?php wp_list_categories('title_li='); ?>
            </ul>
       </div><!--end widget-aside-cat-->
       
<?php endif; ?>
</aside><!-- end primary -->
