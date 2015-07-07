<?php get_header(); ?>
<div id="wrapper">
<?php get_sidebar('primary'); ?>

<div id="content" class="page">
                
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
            
<h2><?php the_title(); ?></h2>
<?php the_content(); ?>
    
    
<?php endwhile; ?>    
<?php endif; ?>
                
</div><!--end content-->

<?php get_footer(); ?>