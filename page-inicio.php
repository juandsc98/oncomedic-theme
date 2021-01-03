<?php /* Template Name: inicio */ ?>

<?php get_header(); ?>
<h1 style="display: none;"><?php the_title(); ?></h1>
<div class="semi-circulo"></div>
<div class="semi-circulo-rigth"></div>
<div class="semi-circulo-left"></div>
  <!-- Swiper -->
  <br>
  

  <?php while(have_posts()): the_post(); ?>


<div class="relative">
  <div class="back-circle">
  <?php the_content(); ?>
  </div>
</div>



<?php endwhile; ?>


<?php get_footer(); ?>