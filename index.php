<?php get_header(); ?>
<div id="wrapper">
<?php get_sidebar('primary'); ?>
                
<div id="main">
    <div id="content" class="index">
                
        <?php if (have_posts()) : ?>
            <h2>Stories</h2>
        <?php while (have_posts()) : the_post(); ?>
                
            <div class="post">
            <h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                
                <p class="meta">Posted on <?php the_time('F jS, Y') ?></p> <p class="spacing">in <?php the_category(', ') ?></p> <p class="spacing">by <?php the_author_posts_link(); ?></p>
                
            <div class="short-view-info">
                <?php echo get_avatar( get_the_author_meta( 'ID' ), 96 ); ?>
            </div><!--end short-view-info-->
                
            <?php the_content('More &raquo;'); ?>
            <?php edit_post_link('Edit this entry.', '<p><small>', '</small></p>'); ?>
                
            </div><!--end post-->
                
<?php endwhile; ?>
        
<nav class="pager">
    <p class="alignleft"><?php next_posts_link('&laquo; Older Posts') ?></p>
    <p class="alignright"><?php previous_posts_link('Newer Posts &raquo;') ?></p>
</nav>
        
<?php endif; ?>
                
    </div><!--end content-->
</div><!--end main-->

<?php get_footer(); ?>