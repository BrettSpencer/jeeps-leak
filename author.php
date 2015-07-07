<?php get_header(); ?>

<div id="wrapper">
<?php get_sidebar('primary'); ?>

<div id="content" class="author">
<div class="post">
<!-- Set the $authorName variable -->
        <?php
          if(isset($_GET['author_name'])) :
              $authorName = get_userdatabylogin($author_name);
          else :
              $authorName = get_userdata(intval($author));
          endif;
        ?>
    <h2 class="posttitle">Posts by <?php echo $authorName->display_name; ?></h2>
<!-- The Loop -->
<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>
    	<div class="post-box">
    	<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
        <p class="postmetadata">
            <span class="date">Posted on <?php the_time('F jS, Y') ?></span> in 
            <span class="cat"><?php the_category(', ') ?></span>
        </p>
		<?php the_excerpt(); ?>
        <p class="read-more"><a href="<?php the_permalink() ?>" rel="bookmark" title="Read more about <?php the_title(); ?>">Read more &raquo;</a>
        </div><!-- /.post-box -->
    <?php endwhile; ?>
        
		<div class="post-nav">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>
        <p>Sorry, no posts found by <?php echo $authorName->display_name; ?></p>
    <?php endif; ?>
<!-- End Loop -->
</div><!-- END .post -->
</div><!-- END CONTENT -->
<?php get_footer(); ?>