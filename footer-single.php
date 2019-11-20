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
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        </div>
    </body>
</html>