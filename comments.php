<?php
if ( post_password_required( ) ) {
    return;
}

if( have_comments() ){
?>
                <div class="comment_title">
                    <h4 class="h4"><?php comments_number(); ?></h4>
                  </div>
                  <hr>
                  <ol class="commentlist clearfix">
                    <?php
                        foreach ($comments as $comment) {
                    ?>
                    <li class="comment even thread-even depth-1" id="li-comment-1">
                        <div id="comment-1" class="comment-wrap clearfix">      
                          <div class="comment-meta">
                            <div class="comment-author vcard">
                              <span class="comment-avatar clearfix">
                              </span>
                            </div>
                          </div>
                          <div class="comment-content clearfix">
                            <div class="comment-author">
                            <?php comment_author(); ?>
                              <p><?php comment_date(); ?></p>
                            </div>
                            <p><?php comment_text(); ?></p>
                          </div>
                          <div class="clear"></div>
                        </div>
                    </li>
                        <?php } the_comments_pagination(); ?>
                  </ol>
<?php } ?>

<?php
comment_form([
    'comment_field' => '<div class="row"> <div class="col-12">
    <div class="form-group">
      <label for="comment">'.__('Message', 'coderblog').'</label>
      <textarea id="comment" class="form-control" name="comment" cols="28" row="7"></textarea>
    </div>
  </div>',
    'fields' => [
        'author' => '<div class="col-12 col-md-4">
          <div class="form-group">
            <label for="name">'.__( 'Name', 'coderblog' ).'</label>
            <input type="name" name="author" class="form-control" id="name" required>
          </div>
        </div>',
        'email' => '<div class="col-12 col-md-4">
        <div class="form-group">
          <label for="email">'.__('Email', 'coderblog').'</label>
          <input type="email" name="email" class="form-control" id="email" required>
        </div>
      </div>',
        'url' => '<div class="col-12 col-md-4">
        <div class="form-group">
          <label for="url">'.__('Website', 'coderblog').'</label>
          <input type="url" name="url" class="form-control" id="url" required>
        </div>
      </div></div>'
    ],
    'class_submit' => 'btn btn-primary',
    'label_submit' => __( 'Submit Comment', 'coderblog' ),
    'title_reply' => '<div class="comment_title">
    <h4 class="h4"><span class="text-black">Leave a</span> Comment</h4>
  </div>
  <hr>'
]);
?>