<?php /* Template Name: General */ ?>

<?php get_header(); ?>

<?php while(have_posts()): the_post(); ?>


<br>


<?php the_content(); ?>

<br>
<?php endwhile; ?>

<?php get_footer(); ?>