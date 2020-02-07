<?php get_header();  ?>

<section class="container">
    <h3 class="section-title h3"><?php _e( 'Search Results for :', 'coderblog' ) ?> <?php the_search_query(); ?></h3>
    <?php get_search_form(); ?>
</section>

    <section class="posts">
        <div class="container">
            <div class="row">
            <?php
              if( have_posts() ){
                  $i = 0;
                while ( have_posts() ) {
                  $i++;
                  the_post();
                  global $post;
                  $author_id = $post->post_author;
                  $author_url = get_author_posts_url($author_id);
                  ?>
                  <div class="col-12 <?php if($i <= 2){ echo 'col-md-6'; } else { echo 'col-lg-4'; } ?> mb-5">
                    <article>
                    <?php
                        if (has_post_thumbnail()){
                    ?>
                        <div class="entry_image">
                            <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('full',['class'=>'img-fluid']); ?>
                            </a>
                        </div>
                        <?php } ?>
                        <div class="entry_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                        <div class="entry_meta">
                            <span class="author">
                                <a href="<?php echo $author_url; ?>">
                                <img class="author_img_grid" src="<?php echo get_avatar_url($author_id); ?>" alt="">
                                    <span class="author-name"><?php the_author(); ?></span>
                                </a>
                            </span>
                            <span class="post-date"> - <?php echo get_the_date(); ?></span>
                        </div>
                        <div class="entry_content">
                        <?php the_excerpt(); ?>
                        </div>
                    </article>
                </div>
            <?php
                }
              }
            ?>
            <div class="container pagination_div">
                    <div class="float-left">
                        <?php if (get_previous_posts_link()){ ?>
                        <a class="pagination" href="<?php previous_posts(); ?>"><i class="fa fa-angle-double-left"></i> Old Posts</a>
                        <?php } ?>
                    </div>
                    <div class="float-right">
                    <?php if (get_next_posts_link()){ ?>
                        <a class="pagination" href="<?php next_posts(); ?>">New Posts <i class="fa fa-angle-double-right"></i></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>