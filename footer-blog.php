                <footer class="footer-single">
                    <div class="wrap-container">
                        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Logo footer") ) : ?><?php endif; ?>
                        <nav>
                            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Menu footer") ) : ?><?php endif; ?>
                        </nav>

                        <div class="copyright">
                            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Copyright footer") ) : ?><?php endif; ?>
                        </div>
                    </div>
                </footer>
            <?php wp_footer(); ?>
        </div>
    </body>
</html>