<footer>
            <div class="footer-wrapper">
                <?php dynamic_sidebar( 'footer-left' ) ?>
                <?php
                    $args = array(
                        'theme_location' => 'footer'
                    )
                ?>
                <div class="footer-list footer-center">
                    <h2>MENU</h2>
                    <nav class="clearfix">
                        <?= wp_nav_menu($args) ?>
                    </nav>
                </div>
                <?php dynamic_sidebar( 'footer-right' ) ?>
                <div class="copyright"><?= bloginfo('name') ?> - &copy; <?= date('Y') ?> </div>
            </div>
        </footer>
    </div>
</body>
</html>