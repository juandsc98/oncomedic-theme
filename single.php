<?php get_header(); ?>

<?php while(have_posts()): the_post(); ?>

<h1><?php the_title(); ?></h1>
<div class="semi-circulo-rigth"></div>
<div class="semi-circulo-left"></div>
<div class="container">
<?php the_content(); ?>
</div>
<?php endwhile; ?>

<?php get_footer(); ?>