                <aside class="footer-widgets">
                    <?php dynamic_sidebar( 'footer-widgets-1' ); ?>
                </aside>

                <nav id="footer-nav" class="footer-nav">
                    <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
                </nav>
                
                <aside class="footer-widgets">
                    <?php dynamic_sidebar( 'footer-widgets-2' ); ?>
                </aside>
                
                <nav id="mobile-nav" class="mobile-nav">
                    <?php wp_nav_menu( array( 'theme_location' => 'mobile-menu' ) ); ?>
                </nav>

                </div>
                </footer>

                <?php wp_footer(); ?>
                </body>

                </html>
