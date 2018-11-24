    <?php get_header(); ?>
    <hr class="py-3">
    <main class="container">
        <div class="border py-4 my-4 text-center">
            <span class="text-muted category">Browsing Tag &nbsp;</span><span class="text-uppercase category-name"><?php echo single_tag_title(); ?></span>
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
                <div class="title text-uppercase"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
                <div class="divider my-3"></div>
                <div class="content"><?php the_excerpt(); ?></div>
                <div class="date text-muted mb-3"><i><?php the_time('F j, Y'); ?></i></div>
            </article>

        <?php } ?>

        </div>
        <?php 
         
            $next = '<p class="my-auto py-3"><b>older posts </b> <i class="fas fa-angle-double-right"></i></p>';
            $previous = '<p class="my-auto py-3"><i class="fas fa-angle-double-left"></i> <b>newer posts </b></p>';

             ?>
        <div class="text-uppercase next text-right">
            <?php next_posts_link($next) ?>
        </div>
        <div class="text-uppercase next">
            <?php previous_posts_link($previous) ?>
        </div>
    </main>
    
<?php get_footer(); ?>