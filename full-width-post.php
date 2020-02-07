<?php
/*
* Template Name: Full Width Post
* Template Post Type: Post
*/
get_header();
?>

<section class="single-post container my-3 mt-5">
        <div class="row">
        <?php
              if( have_posts() ){
                while ( have_posts() ) {
                  the_post();
                  global $post;
                  $author_id = $post->post_author;
                  $author_url = get_author_posts_url($author_id);
                  ?>
            <div class="col-12">
                <div class="single_post_title">
                    <h4><?php the_title(); ?></h4>
                </div>
                <div class="single_post_meta">
                    <span><a href=""><i class="fa fa-calendar"></i> <?php echo get_the_date(); ?></a></span>&nbsp;&nbsp;/&nbsp;&nbsp;
                    <span><a href="<?php echo $author_url; ?>"><i class="fa fa-user"></i> <?php the_author(); ?></a></span>
                    &nbsp;&nbsp;/&nbsp;&nbsp;
                    <span><i class="fa fa-folder-open"></i> <?php the_category( ' , ' ) ?></span>
                    &nbsp;&nbsp;/&nbsp;&nbsp;
                    <span><a href=""><i class="fa fa-comments"></i> <?php comments_number(  ); ?></a></span>
                </div>
                <?php
                    if (has_post_thumbnail()){
                ?>
                <div class="single_post_image">
                    <?php the_post_thumbnail('full',['class'=>'img-fluid']); ?>
                </div>
                    <?php } ?>
                <div class="single_post_content my-4">
                <?php 
                    the_content();
                    wp_link_pages();
                ?>
                </div>
                <div class="tagcloud mb-4">
                <?php the_tags(false,false,false); ?>
                </div>
                <hr>
                <div class="mb-4">
                    <span class="float-right"><?php next_post_link(); ?></span>
                </div>
                  <br><br>
                <div class="card">
                    <div class="card-header">
                      <strong>
                        Posted by
                        <a href="<?php echo $author_url; ?>"><?php the_author(); ?></a>
                      </strong>
                    </div>
                    <div class="card-body">
                      <div class="author-image">
                    <?php echo get_avatar( $author_id, 90, '', false, ['class' => 'rounded-circle'] ); ?>
                    <span><?php echo nl2br(get_the_author_meta( 'description' )); ?></span></div></div>
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
          ?>
        </div>
    </section>
<?php get_footer(); ?>