<?php /* Template Name: inicio */ ?>

<?php get_header(); ?>
<h1 style="display: none;"><?php the_title(); ?></h1>
<div class="semi-circulo"></div>
  <!-- Swiper -->
  <br>
  
 <div class=" container-sm">
    <div class="swiper-container ">
    <div class="swiper-wrapper">
      <div class="swiper-slide item-slide">
     
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-xl-6 col-lg-6">
              <p class="swiper-detail"> Oncomedic ltda una institución comprometida con el bienestar de los usuarios.</p2>
              <br><br>
              <a class=" btn btn-red " href="#">Conócenos</a>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-xl-6 col-lg-6">
              <img src="<?php echo get_template_directory_uri().'/assets/src/img/Enmascarar grupo 1.png'; ?> " alt="">
            </div>
          </div>
        </div>
      </div>
     
    </div>
    <!-- Add Arrows -->
     <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
 </div>

<?php while(have_posts()): the_post(); ?>


<?php the_content(); ?>

<?php endwhile; ?>
<script>

const swiper = new Swiper('.swiper-container', {
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>

<?php get_footer(); ?>