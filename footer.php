    <nav id="footer-nav" class="footer-nav">
        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
    </nav>
<p class="my-copyright">&copy; 2022 Enno Hyttrek</p>
    <nav id="mobile-nav" class="mobile-nav">
        <?php wp_nav_menu( array( 'theme_location' => 'mobile-menu' ) ); ?>
    </nav>

</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>