<?php get_header(); ?>
<div id="wrapper">
<?php get_sidebar('primary'); ?>
                
<div id="main">
<div id="content" class="single">
                
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
                
<h2><?php the_title(); ?></h2>
                
<p class="meta">Posted on <?php the_time('F jS, Y') ?></p> <p class="spacing">in <?php the_category(', ') ?></p> <p class="spacing">by <?php the_author_posts_link(); ?></p>
    <div class="short-view-info">
        <?php echo get_avatar( get_the_author_meta( 'ID' ), 130 ); ?>
    </div><!--end short-view-info-->

<?php the_content('More &raquo;'); ?>
<?php wp_link_pages(); ?>

<nav class="post-nav">            
    <div class="alignleft"><?php previous_post_link('&laquo; %link', '%title', true) ?></div>
    <div class="alignright"><?php next_post_link('%link &raquo;', '%title', true) ?></div>
</nav>

<?php comments_template(); ?>
<?php endwhile; else: ?>
    
<p>Sorry, end of the road.</p>
<?php endif; ?>
                
</div><!--end content-->
</div><!--end main-->

<?php get_footer(); ?>