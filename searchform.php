<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>
<div class="widget">
    <form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <div class="form-group">
            <input id="<?php echo $unique_id; ?>" name="s" type="search" class="form-control" value="<?php the_search_query(); ?>" placeholder="<?php _e( 'Type & press enter', 'coderblog' ); ?>" />
            <i class="w-search fa fa-search"></i>
        </div>
    </form>
</div>