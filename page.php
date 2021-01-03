<?php get_header(); ?>

<?php while(have_posts()): the_post(); ?>

<div class="title">
    <div class="container">
        <h1><?php the_title(); ?></h1>
    </div>
</div>
<br>
<div class="semi-circulo-rigth-page"></div>
<div class="semi-circulo-left-page"></div>

<?php the_content(); ?>
<br>
<?php endwhile; ?>

<?php get_footer(); ?>