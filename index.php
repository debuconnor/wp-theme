<?= get_header(); ?>
    <div class="main-container">
        <?php if(have_posts()) : ?>
            <?= the_content(); ?>
        <?php else : ?>
            <?= 'Content not found.' ?>
        <?php endif; ?>
    </div>
<?= get_footer() ?>