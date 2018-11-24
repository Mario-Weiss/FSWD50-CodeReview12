    <?php get_header(); ?>
    <hr class="py-3">
    <main class="container">
        <div class="row">
        <?php 
        while(have_posts()) {
        the_post(); 

        if (is_active_sidebar('sidebar')) { ?>
            <article class="col-md-8 text-center mt-3">
        <?php }else{ ?>
            <article class="col-12 text-center mt-3">
        <?php } ?>
                <div class="cat text-uppercase my-3"><?php the_category(); ?></div>
                <div class="title text-uppercase"><?php the_title(); ?></div>
                <div class="divider my-3"></div>
                <div class="date text-muted mb-3 text-center">Posted on <?php the_time('F j, Y'); ?></div>
                <div class="content"><?php the_content(); ?></div>

                <div class="tags py-3 text-left"><?php the_tags( '', '', '' ); ?></div>
                <?php comments_template(); ?>
                 
            </article>
        <?php } ?>
            <div class="col-md-4 p-3">
                <?php 
                if(is_active_sidebar('sidebar')):
                    dynamic_sidebar('sidebar');
                endif;
                 ?>
            </div>
        </div>
    </main>
    
<?php get_footer(); ?>