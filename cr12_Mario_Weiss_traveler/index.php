    <?php get_header(); ?>
    <hr class="py-3">
    <main class="container">
        <div class="border py-4 my-4 text-center">
            <span class="text-muted category">index.php &nbsp;</span><span class="text-uppercase category-name">Europe</span>
        </div>
        <div class="row">

        <?php 
        while(have_posts()) {
        the_post(); ?>
        
        
            <article class="col-md-6 col-lg-4 text-center mt-3">
                <a href="<?php the_permalink() ?>">
                    <?php the_post_thumbnail(); ?>
                </a>
                <div class="cat text-uppercase my-3"><?php the_category(); ?></div>
                <div class="title text-uppercase"><?php the_title(); ?></div>
                <div class="divider my-3"></div>
                <div class="content"><?php the_content(); ?></div>
                <div class="date text-muted mb-3"><i><?php the_time('F j, Y'); ?></i></div>
            </article>

        <?php } ?>

        </div>
        <div class="row py-3 text-uppercase">
            <p class="my-auto ml-auto"><b>older posts </b> <i class="fas fa-angle-double-right"></i></p>
        </div>
    </main>
    
<?php get_footer(); ?>