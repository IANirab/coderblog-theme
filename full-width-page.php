<?php
/*
* Template Name: Full Width Page
*/
get_header();
?>

<section class="page_title my-5">
    <h4 class="text-center"><?php single_post_title(); ?></h4>
</section>

<section class="page_content">
        <div class="row">
            <div style="border-right: 1px solid #9e9e9e38;" class="col-12">
            <?php
            while (have_posts()) {
              the_post();
            ?>
                <div class="container page_con">
                <?php 
                  the_content();
                  wp_link_pages();
                  ?>
                </div>
            <?php } ?>
            <hr>
            <?php
            if(comments_open() || get_comments_number()){
              comments_template();
              echo "</div>";
            }
            ?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>