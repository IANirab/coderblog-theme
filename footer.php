<footer>
<div class="container">
    <div class="float-left">
    <?php if(get_theme_mod( 'coderblog_footer_copyright_text' )){ ?>
    <p><?php echo get_theme_mod( 'coderblog_footer_copyright_text' ); ?></p>
    <?php } ?>
    </div>
    <div class="float-right">
        <ul class="footer_icon_lists">
        <?php if(get_theme_mod( 'coderblog_facebook_url' )){ ?>
            <li><a href="<?php echo get_theme_mod( 'coderblog_facebook_url' ); ?>"><i class="fa fa-facebook"></i></a></li>
        <?php } ?>
        <?php if(get_theme_mod( 'coderblog_twitter_url' )){ ?>
            <li><a href="<?php echo get_theme_mod( 'coderblog_twitter_url' ); ?>"><i class="fa fa-twitter"></i></a></li>
        <?php } ?>
        <?php if(get_theme_mod( 'coderblog_youtube_url' )){ ?>
            <li><a href="<?php echo get_theme_mod( 'coderblog_youtube_url' ); ?>"><i class="fa fa-youtube"></i></a></li>
        <?php } ?>
        <?php if(get_theme_mod( 'coderblog_github_url' )){ ?>
            <li><a href="<?php echo get_theme_mod( 'coderblog_github_url' ); ?>"><i class="fa fa-github"></i></a></li>
        <?php } ?>
          </ul>
    </div>
</div>
</footer>
</body>
<?php wp_footer(); ?>
</html>