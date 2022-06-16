<?php $post_slug = get_post_field( 'post_name', get_post() ); ?>

<?= get_header(); ?>
    <div class="main-container">
        <?php if($post_slug != 'home') : ?>
            <p class="page-title"><?= single_post_title() ?></p>
        <?php endif; ?>
        <?php if(have_posts()) : ?>
            <?= the_content(); ?>
        <?php else : ?>
            <?= 'Homepage not found.' ?>
        <?php endif; ?>
    </div>
<?= get_footer() ?>