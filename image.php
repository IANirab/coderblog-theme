<?php get_header(); ?>

<section class="single-post container my-3 mt-5">
        <div class="row">
        <?php
              if( have_posts() ){
                while ( have_posts() ) {
                  the_post();
                  ?>
            <div class="col-12 col-md-8">
                <div class="single_post_content my-4">
                <img class="img-fluid" src="<?php echo $post->guid; ?>" />
                <a href="<?php echo $post->guid; ?>">Direct Download</a>
                <?php 
                    the_content();
                    wp_link_pages();
                ?>
                </div>
                <div class="tagcloud mb-4">
                <?php the_tags(false,false,false); ?>
                </div>
                <hr>
                <?php
                    if(comments_open() || get_comments_number()){
                    comments_template();
                    echo "</div>";
                    }
                ?>
            </div>
            <?php 
          } 
          } 
          get_sidebar();
          ?>
        </div>
    </section>
<?php get_footer(); ?>