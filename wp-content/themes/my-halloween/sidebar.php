<div class="sidebar">
    <div class="sidebar-module sidebar-module-inset">
        <p><?php the_author_meta('description'); ?> </p>
        <ol class="list-unstyled">
            <?php wp_get_archives('type=monthly'); ?>
        </ol>
    </div>
</div><!-- /.blog-sidebar -->