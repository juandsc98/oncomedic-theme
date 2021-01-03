<?php /* Template Name: Ligthbox */ ?>


<?php while(have_posts()): the_post(); ?>

    <div class="container">
        <h4 class="title-modal"><?php the_title(); ?></h4>
        <br>
        <?php the_content(); ?>

        <br>
    </div>

<?php endwhile; ?>
